<!-- Notification panel -->
<!-- Backdrop -->
<div
  x-transition:enter="transition duration-300 ease-in-out"
  x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition duration-300 ease-in-out"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  x-show="isNotificationsPanelOpen"
  @click="isNotificationsPanelOpen = false"
  class="fixed inset-0 z-10 bg-primary-100"
  style="opacity: 0.15"
  aria-hidden="true"
></div>
<!-- Panel -->
<section
  x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
  x-transition:enter-start="-translate-x-full"
  x-transition:enter-end="translate-x-0"
  x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
  x-transition:leave-start="translate-x-0"
  x-transition:leave-end="-translate-x-full"
  x-ref="notificationsPanel"
  x-show="isNotificationsPanelOpen"
  @keydown.escape="isNotificationsPanelOpen = false"
  tabindex="-1"
  aria-labelledby="notificationPanelLabel"
  class="fixed inset-y-0 z-20 w-full max-w-xs glass dark:glass-dark backdrop-blur-[40px] rounded-tr-xl rounded-br-xl dark:text-gray-200 sm:max-w-md focus:outline-none"
>
  <div class="absolute right-0 p-2 transform translate-x-full">
    <!-- Close button -->
    <button
      @click="isNotificationsPanelOpen = false"
      class="p-2 text-slate-700 dark:text-white rounded-md glass dark:glass-dark backdrop-blur-[40px] focus:outline-none focus:ring"
    >
      <svg
        class="w-5 h-5"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>
  <div class="flex flex-col h-screen" x-data="{ activeTabe: 'action' }">
    <!-- Panel header -->
    <div class="flex-shrink-0">
      <div class="flex items-center justify-between px-4 pt-4 border-b">
        <h2 id="notificationPanelLabel" class="pb-4 font-semibold">Notifications</h2>
        <div class="space-x-2">
          <button
            @click.prevent="activeTabe = 'action'"
            class="px-px pb-4 focus:outline-none"
            :class="{'': activeTabe == 'action', 'border-transparent': activeTabe != 'action'}"
          >
            Action
          </button>
          <button
            @click.prevent="activeTabe = 'user'"
            class="px-px pb-4 focus:outline-none"
            :class="{'': activeTabe == 'user', 'border-transparent': activeTabe != 'user'}"
          >
            User
          </button>
        </div>
      </div>
    </div>

    <!-- Panel content (tabs) -->
    <div class="flex-1 pt-4 overflow-y-hidden hover:overflow-y-auto">
      <!-- Action tab -->
      <div class="space-y-4" x-show.transition.in="activeTabe == 'action'">
        <a href="#" class="block">
          <div class="flex px-4 space-x-4">
            <div class="relative flex-shrink-0">
              <span
                class="z-10 inline-block p-2 overflow-visible rounded-full bg-slate-50 dark:bg-slate-800"
              >
                <svg
                  class="w-7 h-7"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                  />
                </svg>
              </span>
              <div class="absolute h-24 p-px -mt-3 -ml-px bg-slate-50 left-1/2 dark:bg-slate-800"></div>
            </div>
            <div class="flex-1 overflow-hidden">
              <h5 class="text-sm font-semibold text-gray-600 dark:text-gray-200">
                New project "glass dark:glass-dark backdrop-blur-[40px]om Dashboard" created
              </h5>
              <p class="text-sm font-normal text-gray-400 dark:text-gray-300 truncate">
                Looks like there might be a new theme soon
              </p>
              <span class="text-sm font-normal text-gray-400 dark:text-gray-300"> 9h ago </span>
            </div>
          </div>
        </a>
        <a href="#" class="block">
          <div class="flex px-4 space-x-4">
            <div class="relative flex-shrink-0">
              <span
                class="inline-block p-2 overflow-visible rounded-full bg-slate-50 dark:bg-slate-800"
              >
                <svg
                  class="w-7 h-7"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                  />
                </svg>
              </span>
              <div class="absolute h-24 p-px -mt-3 -ml-px bg-slate-50 left-1/2 dark:bg-slate-800"></div>
            </div>
            <div class="flex-1 overflow-hidden">
              <h5 class="text-sm font-semibold text-gray-600 dark:text-gray-200">
                glass dark:glass-dark backdrop-blur-[40px]om Dashboard v0.0.2 was released
              </h5>
              <p class="text-sm font-normal text-gray-400 dark:text-gray-300 truncate">
                Successful new version was released
              </p>
              <span class="text-sm font-normal text-gray-400 dark:text-gray-300"> 2d ago </span>
            </div>
          </div>
        </a>
        <template x-for="i in 5" x-key="i">
          <a href="#" class="block">
            <div class="flex px-4 space-x-4">
              <div class="relative flex-shrink-0">
                <span
                  class="inline-block p-2 overflow-visible rounded-full bg-slate-50 dark:bg-slate-800"
                >
                  <svg
                    class="w-7 h-7"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                    />
                  </svg>
                </span>
                <div
                  class="absolute h-24 p-px -mt-3 -ml-px bg-slate-50 left-1/2 dark:bg-slate-800"
                ></div>
              </div>
              <div class="flex-1 overflow-hidden">
                <h5 class="text-sm font-semibold text-gray-600 dark:text-gray-200">
                  New project "glass dark:glass-dark backdrop-blur-[40px]om Dashboard" created
                </h5>
                <p class="text-sm font-normal text-gray-400 dark:text-gray-300 truncate">
                  Looks like there might be a new theme soon
                </p>
                <span class="text-sm font-normal text-gray-400 dark:text-gray-300"> 9h ago </span>
              </div>
            </div>
          </a>
        </template>
      </div>

      <!-- User tab -->
      <div class="space-y-4" x-show.transition.in="activeTabe == 'user'">
        <a href="#" class="block">
          <div class="flex px-4 space-x-4">
            <div class="relative flex-shrink-0">
              <span class="relative z-10 inline-block overflow-visible rounded-ful">
                <img
                  class="object-cover rounded-full w-9 h-9"
                  src="{{ asset('images/avatar.jpg') }}"
                  alt="Ahmed kamel"
                />
              </span>
              <div class="absolute h-24 p-px -mt-3 -ml-px bg-slate-50 left-1/2 dark:bg-slate-800"></div>
            </div>
            <div class="flex-1 overflow-hidden">
              <h5 class="text-sm font-semibold text-gray-600 dark:text-gray-200">Ahmed Kamel</h5>
              <p class="text-sm font-normal text-gray-400 dark:text-gray-300 truncate">
                Shared new project "glass dark:glass-dark backdrop-blur-[40px]som Dashboard"
              </p>
              <span class="text-sm font-normal text-gray-400 dark:text-gray-300"> 1d ago </span>
            </div>
          </div>
        </a>
        <a href="#" class="block">
          <div class="flex px-4 space-x-4">
            <div class="relative flex-shrink-0">
              <span class="relative z-10 inline-block overflow-visible rounded-ful">
                <img
                  class="object-cover rounded-full w-9 h-9"
                  src="{{ asset('images/avatar-1') }}.jpg"
                  alt="Ahmed kamel"
                />
              </span>
              <div class="absolute h-24 p-px -mt-3 -ml-px bg-slate-50 left-1/2 dark:bg-slate-800"></div>
            </div>
            <div class="flex-1 overflow-hidden">
              <h5 class="text-sm font-semibold text-gray-600 dark:text-gray-200">John</h5>
              <p class="text-sm font-normal text-gray-400 dark:text-gray-300 truncate">
                Commit new changes to glass dark:glass-dark backdrop-blur-[40px]som Dashboard project.
              </p>
              <span class="text-sm font-normal text-gray-400 dark:text-gray-300"> 10h ago </span>
            </div>
          </div>
        </a>
        <a href="#" class="block">
          <div class="flex px-4 space-x-4">
            <div class="relative flex-shrink-0">
              <span class="relative z-10 inline-block overflow-visible rounded-ful">
                <img
                  class="object-cover rounded-full w-9 h-9"
                  src="{{ asset('images/avatar.jpg') }}"
                  alt="Ahmed kamel"
                />
              </span>
              <div class="absolute h-24 p-px -mt-3 -ml-px bg-slate-50 left-1/2 dark:bg-slate-800"></div>
            </div>
            <div class="flex-1 overflow-hidden">
              <h5 class="text-sm font-semibold text-gray-600 dark:text-gray-200">Ahmed Kamel</h5>
              <p class="text-sm font-normal text-gray-400 dark:text-gray-300 truncate">
                Release new version "glass dark:glass-dark backdrop-blur-[40px]som Dashboard"
              </p>
              <span class="text-sm font-normal text-gray-400 dark:text-gray-300"> 20d ago </span>
            </div>
          </div>
        </a>
        <template x-for="i in 5" x-key="i">
          <a href="#" class="block">
            <div class="flex px-4 space-x-4">
              <div class="relative flex-shrink-0">
                <span class="relative z-10 inline-block overflow-visible rounded-ful">
                  <img
                    class="object-cover rounded-full w-9 h-9"
                    src="{{ asset('images/avatar.jpg') }}"
                    alt="Ahmed kamel"
                  />
                </span>
                <div
                  class="absolute h-24 p-px -mt-3 -ml-px bg-slate-50 left-1/2 dark:bg-slate-800"
                ></div>
              </div>
              <div class="flex-1 overflow-hidden">
                <h5 class="text-sm font-semibold text-gray-600 dark:text-gray-200">Ahmed Kamel</h5>
                <p class="text-sm font-normal text-gray-400 dark:text-gray-300 truncate">
                  Release new version "glass dark:glass-dark backdrop-blur-[40px]som Dashboard"
                </p>
                <span class="text-sm font-normal text-gray-400 dark:text-gray-300"> 20d ago </span>
              </div>
            </div>
          </a>
        </template>
      </div>
    </div>
  </div>
</section>