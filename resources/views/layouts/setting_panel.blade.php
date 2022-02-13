<!-- Settings Panel -->
<!-- Backdrop -->
<div
  x-transition:enter="transition duration-300 ease-in-out"
  x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition duration-300 ease-in-out"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  x-show="isSettingsPanelOpen"
  @click="isSettingsPanelOpen = false"
  class="fixed inset-0 z-10 bg-primary-100"
  style="opacity: 0.15"
  aria-hidden="true"
></div>
<!-- Panel -->
<section
  x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
  x-transition:enter-start="translate-x-full"
  x-transition:enter-end="translate-x-0"
  x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
  x-transition:leave-start="translate-x-0"
  x-transition:leave-end="translate-x-full"
  x-ref="settingsPanel"
  tabindex="-1"
  x-show="isSettingsPanelOpen"
  @keydown.escape="isSettingsPanelOpen = false"
  class="fixed inset-y-0 right-0 z-20 w-full max-w-xs glass dark:glass-dark backdrop-blur-[40px] rounded-tl-xl rounded-bl-xl dark:text-gray-200 sm:max-w-md focus:outline-none"
  aria-labelledby="settinsPanelLabel"
>
  <div class="absolute left-0 p-2 transform -translate-x-full">
    <!-- Close button -->
    <button
      @click="isSettingsPanelOpen = false"
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
  <!-- Panel content -->
  <div class="flex flex-col h-screen">
    <!-- Panel header -->
    <div
      class="flex flex-col items-center justify-center flex-shrink-0 px-4 py-8 space-y-4 border-b-dark"
    >
      <span aria-hidden="true" class="text-gray-500 dark:text-gray-200">
        <svg
          class="w-8 h-8"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
          />
        </svg>
      </span>
      <h2 id="settinsPanelLabel" class="text-xl font-medium text-gray-500 dark:text-gray-200">Settings</h2>
    </div>
    <!-- Content -->
    <div class="flex-1 overflow-hidden hover:overflow-y-auto">
      <!-- Theme -->
      <div class="p-4 space-y-4 md:p-8">
        <h6 class="text-lg font-medium text-gray-400 dark:text-gray-200">Mode</h6>
        <div class="flex items-center space-x-8">
          <!-- Light button -->
          <button
            @click="setLightTheme"
            class="flex items-center justify-center px-4 py-2 space-x-4 rounded-md focus:outline-none bg-opacity-75 ring-1 ring-slate-500 ring-opacity-50"
            :class="{ 'bg-slate-200 text-slate-700': !isDark, 'bg-slate-200 text-slate-200 dark:text-slate-700': isDark }"
          >
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </span>
            <span>Light</span>
          </button>

          <!-- Dark button -->
          <button
            @click="setDarkTheme"
            class="flex items-center justify-center px-4 py-2 space-x-4 rounded-md focus:outline-none bg-opacity-75 ring-1 ring-slate-200 ring-opacity-50"
            :class="{ 'bg-slate-700 text-slate-200': isDark, 'bg-slate-700 text-slate-200 dark:text-slate-700': !isDark }"
          >
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
              </svg>
            </span>
            <span>Dark</span>
          </button>
        </div>
      </div>

      <!-- Colors -->
      <div class="p-4 space-y-4 md:p-8">
        <h6 class="text-lg font-medium text-gray-400 dark:text-gray-200">Colors</h6>
        <div>
          <button
            @click="setColors('cyan')"
            class="w-10 h-10 rounded-full "
            style="background-color: var(--color-cyan)"
          ></button>
          <button
            @click="setColors('teal')"
            class="w-10 h-10 rounded-full"
            style="background-color: var(--color-teal)"
          ></button>
          <button
            @click="setColors('green')"
            class="w-10 h-10 rounded-full"
            style="background-color: var(--color-green)"
          ></button>
          <button
            @click="setColors('fuchsia')"
            class="w-10 h-10 rounded-full"
            style="background-color: var(--color-fuchsia)"
          ></button>
          <button
            @click="setColors('blue')"
            class="w-10 h-10 rounded-full"
            style="background-color: var(--color-blue)"
          ></button>
          <button
            @click="setColors('violet')"
            class="w-10 h-10 rounded-full"
            style="background-color: var(--color-violet)"
          ></button>
        </div>
      </div>
    </div>
  </div>
</section>