<template>
  <div class="grid grid-cols-2 sm:grid-cols-4 sm:gap-4 justify-items-end sm:m-18 sm:my-12">
    <div class="flex flex-row items-end sm:gap-4">
      <div>
        <a href="https://www.facebook.com/choicemarketingpartners">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="#249769">
            <path fill="#249769" d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 10h-2v2h2v6h3v-6h1.82l.18-2h-2v-.833c0-.478.096-.667.558-.667h1.442v-2.5h-2.404c-1.798 0-2.596.792-2.596 2.308v1.692z"/>
          </svg>
        </a>
      </div>
      <div>
        <a href="https://www.linkedin.com/company/choice-marketing-partners">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="#249769">
            <path fill="#249769" d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 8c0 .557-.447 1.008-1 1.008s-1-.45-1-1.008c0-.557.447-1.008 1-1.008s1 .452 1 1.008zm0 2h-2v6h2v-6zm3 0h-2v6h2v-2.861c0-1.722 2.002-1.881 2.002 0v2.861h1.998v-3.359c0-3.284-3.128-3.164-4-1.548v-1.093z"/>
          </svg>
        </a>
      </div>
      <div>
        <a href="https://www.instagram.com/choicemarketingpartners/">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="#249769">
            <path fill="#249769" d="M17.25 7.288v1.269c0 .297-.241.539-.538.539h-1.269c-.299 0-.538-.242-.538-.539v-1.269c0-.297.239-.538.538-.538h1.269c.297 0 .538.241.538.538zm-5.25 7.403c1.486 0 2.693-1.205 2.693-2.692s-1.207-2.69-2.693-2.69c-1.487 0-2.691 1.204-2.691 2.691s1.204 2.691 2.691 2.691zm4.261-3.291c.028.196.046.396.046.599 0 2.38-1.928 4.308-4.307 4.308s-4.307-1.928-4.307-4.307c0-.204.018-.403.046-.599.027-.194.066-.383.118-.567h-1.107v5.879c0 .297.241.538.538.538h9.424c.297 0 .538-.241.538-.538v-5.879h-1.107c.05.184.09.373.118.566zm7.739.6c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-5-5.385c0-.892-.723-1.615-1.615-1.615h-10.77c-.892 0-1.615.723-1.615 1.615v10.769c0 .893.723 1.616 1.615 1.616h10.77c.892 0 1.615-.723 1.615-1.616v-10.769z"/>
          </svg>
        </a>
      </div>
    </div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div class="flex flex-row justify-self-start items-center sm:gap-2">
      <span>Built with </span>
      <span>
        <a href="https://www.linkedin.com/in/drewpayment">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="#249769">
            <path fill="#249769" d="M12 4.435c-1.989-5.399-12-4.597-12 3.568 0 4.068 3.06 9.481 12 14.997 8.94-5.516 12-10.929 12-14.997 0-8.118-10-8.999-12-3.568z"/>
          </svg>
        </a>
      </span>
      {{ year }}
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue'

export default defineComponent({
  setup() {},
  data() {
    return {
      year: new Date().getFullYear(),
    }
  },
})
</script>
