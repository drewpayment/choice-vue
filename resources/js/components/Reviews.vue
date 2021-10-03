<template>
  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Our Clients</h2>
        <p class="mt2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
          What people are saying about us
        </p>
      </div>

      <div class="mt-10">
        <div class="grid grid-cols-2 gap-4">
          <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-1 md:gap-y-10">
            <div v-for="review in reviewsTop" :key="review.title" class="relative">
              <dt>
                <p class="text-lg leading-6 font-medium text-green-600">{{review.title}}</p>
              </dt>
              <dd class="overflow-scroll h-48 sm:h-auto sm:overflow-automt-2 text-base text-gray-500">
                {{ review.content }}
              </dd>
            </div>
          </dl>

          <div class="flex h-full justify-center align-center">
            <img src="/images/defense.svg" alt="Illustrated man holding gold shield"
              class="object-contain w-full object-center">
          </div>
        </div>
      </div>

      <div class="mt-10">
        <div class="grid grid-cols-2 gap-4">
          <div class="flex h-full justify-center align-center">
            <img src="/images/creative-thinking.svg" alt="Illustrated man holding gold shield"
              class="object-contain w-full object-center">
          </div>

          <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-1 md:gap-y-10">
            <div v-for="review in reviewsBottom" :key="review.title" class="relative">
              <dt>
                <p class="text-lg leading-6 font-medium text-green-600">{{review.title}}</p>
              </dt>
              <dd class="overflow-scroll h-48 sm:h-auto sm:overflow-auto sm:mt-2 text-base text-gray-500">
                {{ review.content }}
              </dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue'

const reviewsTop = [
  {
    title: 'Bay City, MI',
    content: 'My sales representative was great. I was originally pretty reluctant, but she addressed all of my concerns about the service and made sure that all of my questions were thoroughly answered. She was extremely genuine and I felt like she had my best intentions in mind throughout the entire process.',
  },
  {
    title: 'Chicago, IL',
    content: 'Thank you, thank you, thank you! Every dollar counts, and especially during the holidays. Bless you for taking the time to analyze my situation and finding me additional savings I didn\'t even know was possible!',
  },
  {
    title: 'Columbus, OH',
    content: 'We cannot stress how happy we were with the gentlemen that stopped by our house. After reviewing our bill and finding us extra savings, he was able to review our cabin\'s bill on Buckeye Lake and get us some savings there too!',
  },
];

const reviewsBottom = [
  {
    title: 'Naperville, IL',
    content: 'The young man, Damian, who stopped by to help me was very impressive. He was extremely friendly, patient and vigilant at making sure that I was getting the best deal. As an 81-year-old retired woman on a fixed income, energy bills can be very stressful with how unpredictable they can be. Damian made sure to help get me as much as savings as he could and went over everything everytime I asked since I didn\'t really understand what it was at first.',
  },
  {
    title: 'Michigan',
    content: 'I have been approached many times regarding my energy utilities at mutliple office locations of my business. I have always been wary and turned down every offer. One weekend while relaxing at my cabin, one of your young ladies approached and at first I was reluctant to even give her the time to talk. However, she was friendly and I thought I would give her a listen. I was immediately impressed with her level of professionalism and knowledge on the industry, and eventually let her enroll my cabin on your plan. She asked about my businesses, but I told her I would hold off. Since then, I reached back out to her and we have enrolled our other two residences and all of my business locations. I estimate that she has saved me over $1,000 dollars annually! Thank you from a late believer.',
  },
];

export default defineComponent({
  setup() {
    return {
      reviewsTop,
      reviewsBottom,
    }
  },
})
</script>
