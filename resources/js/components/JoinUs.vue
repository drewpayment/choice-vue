<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Join the Team</h2>
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
          Join a group of highly motivated and talented individuals
        </p>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
          Grow a career by joining a diverse team who rally around eachother. Individually, take advantage
          of salary plus commission opportunities, competitive bonus structures, and chances to win
          luxury prizes for your hard work and dedication. Grow your knowledge and career by following
          a mentor path and lead your own team toward economic independence and environmental positivity.
        </p>
      </div>

      <div class="mt-10">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
          <div v-for="feature in features" :key="feature.name" class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-green-500 text-white">
                <component :is="feature.icon" class="h-6 w-6" aria-hidden="true" />
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">{{ feature.name }}</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              {{ feature.description }}
            </dd>
          </div>
        </dl>
      </div>
    </div>
  </div>
</template>

<script>
import { AnnotationIcon, GlobeAltIcon, LightningBoltIcon, ScaleIcon } from '@heroicons/vue/outline'

const features = [
  {
    name: 'Competitive compensation',
    description:
      'Control your income through comprehensive commission structures designed for driven marketing teams who want to control their individual levels of success.',
    icon: GlobeAltIcon,
  },
  {
    name: 'Set & exceed your goals',
    description:
      'Choice gives you guidance to exceed your goals, utilizing long-standing personal and team management skills leveraging ideologies curated by proven industry leaders.',
    icon: ScaleIcon,
  },
  {
    name: 'Culture',
    description:
      'Be and inspire culture you want to see. We want to spread our culture. Without a strong, supportive culture of teamwork no organization can succeed. Our group bands together to overcome any levels of adversity to achieve our goals.',
    icon: LightningBoltIcon,
  },
]

export default {
  setup() {
    return {
      features,
    }
  },
}
</script>
