<template>
  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
      <div
        class="
          relative
          z-10
          pb-8
          bg-white
          sm:pb-16
          md:pb-20
          lg:max-w-2xl lg:w-full lg:pb-28
          xl:pb-32
        "
      >
        <svg
          class="
            hidden
            lg:block
            absolute
            right-0
            inset-y-0
            h-full
            w-48
            text-white
            transform
            translate-x-1/2
          "
          fill="currentColor"
          viewBox="0 0 100 100"
          preserveAspectRatio="none"
          aria-hidden="true"
        >
          <polygon points="50,0 100,0 50,100 0,100" />
        </svg>

        <div>
          <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
            <nav
              class="
                relative
                flex
                items-center
                justify-between
                sm:h-10
                lg:justify-start
              "
              aria-label="Global"
            >
              <div
                class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0"
              >
                <div class="flex items-center justify-between w-full md:w-auto">
                  <a href="#">
                    <span class="sr-only">Workflow</span>
                    <!-- LOGO -->
                    <svg class="h-16 w-auto" width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M47.1113 95H75.1113" stroke="#249769" stroke-width="5" stroke-linecap="round"/>
                      <path d="M50.499 102.547L71.7255 102.53" stroke="#249769" stroke-width="5" stroke-linecap="round"/>
                      <path d="M52.1113 110H70.1113" stroke="#249769" stroke-width="5" stroke-linecap="round"/>
                      <path d="M49.8169 31.0988L73.7842 37.6035" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                      <path d="M45.0234 44.4212L73.3204 37.5245" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                      <path d="M45.6226 44.4212L83.3713 50.3758" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                      <path d="M40.2299 56.8015L83.3713 50.3759" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                      <path d="M40.2299 56.8015L78.5778 60.0144" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                      <path d="M40.2299 69.6528L78.5778 60.0143" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                      <path d="M40.2299 69.6528L76.1811 72.8656" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                      <path d="M54.0367 81.1032L76.1811 72.8657" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                      <path d="M54.0367 81.1032L71.7522 83.8491" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                      <path d="M22 50.6221L31.9809 49.3077" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                      <path d="M34.5791 16.6038L40.4856 27.224" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                      <path d="M77.9826 11L73.4943 23.2405" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                      <path d="M97.1113 37.1509L87.6454 40.9543" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                  </a>
                  <div class="-mr-2 flex items-center md:hidden">
                    <button
                      type="button"
                      class="
                        bg-white
                        rounded-md
                        p-2
                        inline-flex
                        items-center
                        justify-center
                        text-gray-400
                        hover:text-gray-500 hover:bg-gray-100
                        focus:outline-none
                        focus:ring-2
                        focus:ring-inset
                        focus:ring-green-500
                      "
                      aria-expanded="false"
                    >
                      <span class="sr-only">Open main menu</span>
                      <!-- Heroicon name: outline/menu -->
                      <svg
                        class="h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div
                class="hidden md:block md:ml-10 md:pr-4 md:space-x-8"
              >
                <template v-if="canLogin">
                  <Link
                    v-if="$page.props.user"
                    :href="route('dashboard')"
                    class="font-medium text-gray-500 hover:text-gray-900"
                  >
                    Dashboard
                  </Link>

                  <template v-else>
                    <Link
                      :href="route('login')"
                      class="font-medium text-gray-500 hover:text-gray-900"
                    >
                      Login
                    </Link>

                    <Link
                      v-if="canRegister"
                      :href="route('register')"
                      class="font-medium text-gray-500 hover:text-gray-900"
                    >
                      Register
                    </Link>
                  </template>
                </template>
              </div>
            </nav>
          </div>

          <div
            class="
              absolute
              z-10
              top-0
              inset-x-0
              p-2
              transition
              transform
              origin-top-right
              md:hidden
            "
          >
            <div
              class="
                rounded-lg
                shadow-md
                bg-white
                ring-1 ring-black ring-opacity-5
                overflow-hidden
              "
            >
              <div class="px-5 py-4 flex items-center justify-between">
                <div class="flex flex-row items-center">
                  <!-- LOGO -->
                  <svg class="h-12 w-auto" width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M47.1113 95H75.1113" stroke="#249769" stroke-width="5" stroke-linecap="round"/>
                    <path d="M50.499 102.547L71.7255 102.53" stroke="#249769" stroke-width="5" stroke-linecap="round"/>
                    <path d="M52.1113 110H70.1113" stroke="#249769" stroke-width="5" stroke-linecap="round"/>
                    <path d="M49.8169 31.0988L73.7842 37.6035" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    <path d="M45.0234 44.4212L73.3204 37.5245" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    <path d="M45.6226 44.4212L83.3713 50.3758" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    <path d="M40.2299 56.8015L83.3713 50.3759" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    <path d="M40.2299 56.8015L78.5778 60.0144" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    <path d="M40.2299 69.6528L78.5778 60.0143" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    <path d="M40.2299 69.6528L76.1811 72.8656" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    <path d="M54.0367 81.1032L76.1811 72.8657" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    <path d="M54.0367 81.1032L71.7522 83.8491" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    <path d="M22 50.6221L31.9809 49.3077" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    <path d="M34.5791 16.6038L40.4856 27.224" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    <path d="M77.9826 11L73.4943 23.2405" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                    <path d="M97.1113 37.1509L87.6454 40.9543" stroke="#FBC909" stroke-width="5" stroke-linecap="round"/>
                  </svg>
                  <span class="mt-2">
                    Choice Marketing
                  </span>
                </div>
                <div class="-mr-2">
                  <button
                    type="button"
                    class="
                      bg-white
                      rounded-md
                      p-2
                      inline-flex
                      items-center
                      justify-center
                      text-gray-400
                      hover:text-gray-500 hover:bg-gray-100
                      focus:outline-none
                      focus:ring-2
                      focus:ring-inset
                      focus:ring-green-500
                    "
                    @click="showMobileMenu = !showMobileMenu"
                  >
                    <span class="sr-only">Close main menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg
                      class="h-6 w-6"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      aria-hidden="true"
                      v-if="showMobileMenu"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                      />
                    </svg>

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                      v-else
                    >
                      <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="px-2 pb-3 space-y-1" v-show="showMobileMenu">
                <a
                  href="#"
                  class="
                    block
                    px-3
                    py-2
                    rounded-md
                    text-base
                    font-medium
                    text-gray-700
                    hover:text-gray-900 hover:bg-gray-50
                  "
                  >Product</a
                >

                <a
                  href="#"
                  class="
                    block
                    px-3
                    py-2
                    rounded-md
                    text-base
                    font-medium
                    text-gray-700
                    hover:text-gray-900 hover:bg-gray-50
                  "
                  >Features</a
                >

                <a
                  href="#"
                  class="
                    block
                    px-3
                    py-2
                    rounded-md
                    text-base
                    font-medium
                    text-gray-700
                    hover:text-gray-900 hover:bg-gray-50
                  "
                  >Company</a
                >

                <template v-if="canLogin">
                  <Link
                    v-if="$page.props.user"
                    :href="route('dashboard')"
                    class="
                      block
                      px-3
                      py-2
                      rounded-md
                      text-base
                      font-medium
                      text-gray-700
                      hover:text-gray-900 hover:bg-gray-50
                    "
                  >
                    Dashboard
                  </Link>

                  <template v-else>
                    <Link
                      :href="route('login')"
                      class="
                        block
                        px-3
                        py-2
                        rounded-md
                        text-base
                        font-medium
                        text-gray-700
                        hover:text-gray-900 hover:bg-gray-50
                      "
                    >
                      Login
                    </Link>

                    <Link
                      v-if="canRegister"
                      :href="route('register')"
                      class="
                        block
                        px-3
                        py-2
                        rounded-md
                        text-base
                        font-medium
                        text-gray-700
                        hover:text-gray-900 hover:bg-gray-50
                      "
                    >
                      Register
                    </Link>
                  </template>
                </template>
              </div>
            </div>
          </div>
        </div>

        <main
          class="
            mt-10
            mx-auto
            max-w-7xl
            px-4
            sm:mt-12 sm:px-6
            md:mt-16
            lg:mt-20 lg:px-8
            xl:mt-28
          "
        >
          <div class="sm:text-center lg:text-left">
            <h1
              class="
                text-4xl
                tracking-tight
                font-extrabold
                text-gray-900
                sm:text-5xl
                md:text-6xl
              "
            >
              <span class="block xl:inline">Be the change you want</span>
              <span class="block text-green-500 xl:inline"> in our world</span>
            </h1>
            <p
              class="
                mt-3
                text-base text-gray-500
                sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto
                md:mt-5 md:text-xl
                lg:mx-0
              "
            >
              Join a growing movement of sustainable energy adopters to help
              protect yourself and the planet. Peace of mind when natural
              disasters strike, but also be apart of the solution instead of the
              problem.
            </p>
            <div
              class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start"
            >
              <div class="rounded-md shadow">
                <a
                  href="#"
                  class="
                    w-full
                    flex
                    items-center
                    justify-center
                    px-8
                    py-3
                    border border-transparent
                    text-base
                    font-medium
                    rounded-md
                    text-white
                    bg-green-600
                    hover:bg-green-700
                    md:py-4 md:text-lg md:px-10
                  "
                >
                  Get started
                </a>
              </div>
              <!-- <div class="mt-3 sm:mt-0 sm:ml-3">
                <a
                  href="#"
                  class="
                    w-full
                    flex
                    items-center
                    justify-center
                    px-8
                    py-3
                    border border-transparent
                    text-base
                    font-medium
                    rounded-md
                    text-green-700
                    bg-green-100
                    hover:bg-green-200
                    md:py-4 md:text-lg md:px-10
                  "
                >
                  Live demo
                </a>
              </div> -->
            </div>
          </div>
        </main>
      </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
      <!-- <img
        class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
        src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
        alt=""
      /> -->
      <img
        class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
        src="/images/kids-with-signs.jpg"
        alt=""
      />
    </div>
  </div>
</template>

<script>
import { computed, defineComponent, onMounted, onUnmounted, watch, ref } from "@vue/runtime-core";
import { Head, Link } from "@inertiajs/inertia-vue3";

export default defineComponent({
  components: {
    Head,
    Link,
  },

  props: {

  },

  data() {
    return {
      canLogin: true,
      canRegister: false,
      showMobileMenu: false,
    };
  },

  methods: {
    closeMenu(event) {
      console.dir(event);
    },
  },

  setup() {
    const { width, type } = useBreakpoints();

    watch(type, (newValue, oldValue) => {
      this.showMobileMenu = type === 'xs';
    });


  },

  // mounted() {
  //   const {width, type} = useBreakpoints();


  // },
});

export function useBreakpoints() {
  let windowWidth = ref(window.innerWidth);

  const onWindowChange = () => windowWidth.value = window.innerWidth;
  onMounted(() => window.addEventListener('resize', onWindowChange));
  onUnmounted(() => window.removeEventListener('resize', onWindowChange));

  const type = computed(() => {
    if (windowWidth.value < 550) return 'xs';
    if (windowWidth.value > 549 && windowWidth.value < 1200) return 'md';
    if (windowWidth.value > 1199) return 'lg';
  });

  const width = computed(() => windowWidth.value);

  return {width, type};
}
</script>
