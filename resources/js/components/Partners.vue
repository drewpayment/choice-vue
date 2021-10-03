<template>
  <!-- <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl"> -->
    <div class="rounded m-4 mx-20 px-10">
      <h4 class="text-center text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-5xl mb-4">
        <span>Who we are</span>
      </h4>

      <div class="grid sm:grid-cols-5 sm:gap-1">
        <div class="justify-self-center flex flex-col">
          <img class="object-contain sm:h-48 rounded-full ring-4 ring-green-600" src="/images/chris.jpeg" />
          <span class="text-center mt-1">Chris</span>
        </div>

        <div class="justify-self-center flex flex-col">
          <img class="object-contain sm:h-48 rounded-full ring-4 ring-green-600" src="/images/terri.jpeg" />
          <span class="text-center mt-1">Terri</span>
        </div>

        <div class="justify-self-center flex flex-col">
          <img class="object-contain sm:h-48 rounded-full ring-4 ring-green-600" src="/images/bret.jpeg" />
          <span class="text-center mt-1">Bret</span>
        </div>

        <div class="justify-self-center flex flex-col">
          <img class="object-contain sm:h-48 rounded-full ring-4 ring-green-600" src="/images/rebecca.jpeg" />
          <span class="text-center mt-1">Rebecca</span>
        </div>

        <div class="justify-self-center flex flex-col">
          <img class="object-contain sm:h-48 rounded-full ring-4 ring-green-600" src="/images/ted.jpeg" />
          <span class="text-center mt-1">Ted</span>
        </div>
      </div>
    </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';

export default defineComponent({
  setup() {

  },
})
</script>
