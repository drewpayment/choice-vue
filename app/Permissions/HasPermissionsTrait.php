<?php

namespace App\Permissions;

use App\Models\Permission;
use App\Models\Role;

trait HasPermissionsTrait
{
  public function givePermissionTo(... $permissions)
  {
    $permissions = $this->getAllPermissions($permissions);

    if ($permissions === null) return $this;

    $this->permissions()->saveMany($permissions);
    return $this;
  }

  public function removePermissionsTo(... $permissions)
  {
    $permissions = $this->getAllPermissions($permissions);
    $this->permissions()->detach($permissions);
    return $this;
  }

  public function refreshPermissions(... $permissions)
  {
    $this->permissions()->detach();
    return $this->givePermissionTo($permissions);
  }

  public function hasPermissionTo($permission)
  {
    return $this->hasPermission($permission) || $this->hasPermissionThroughRole($permission);
  }

  public function hasPermissionThroughRole($permission)
  {
    foreach ($permission->roles as $role)
    {
      if ($this->roles->contains($role))
        return true;
    }

    return false;
  }

  public function hasRole(... $roles)
  {
    foreach ($roles as $role)
    {
      if ($this->roles->contains('slug', $role))
        return true;
    }

    return false;
  }

  public function hasPermission($slug)
  {
    return (bool) $this->permissions->where('slug', $slug)->count();
  }

  public function roles()
  {
    return $this->belongsToMany(Role::class, 'users_roles');
  }

  public function permissions()
  {
    return $this->belongsToMany(Permission::class, 'users_permissions');
  }

  protected function getAllPermissions(array $permissions)
  {
    return Permission::whereIn('slug',$permissions)->get();
  }
}
