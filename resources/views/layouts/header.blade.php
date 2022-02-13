<header class="relative z-20">
  <div class="flex items-center justify-between p-2 bg-parimary-lighter rounded-xl">
    <!-- Mobile menu button -->
    <button
      @click="isMobileMainMenuOpen = !isMobileMainMenuOpen"
      class="p-1 duration-200 rounded-md md:hidden focus:outline-none focus:ring"
    >
      <span class="sr-only">Open main manu</span>
      <span aria-hidden="true">
        <svg
          class="w-8 h-8"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </span>
    </button>

    <!-- Brand -->
    <a
      href="/app"
      class="inline-block text-md tracking-wider ml-2"
    >
      <span class="font-bold">Halo, </span>
      <span>Rodhian</span>
    </a>

    <!-- Mobile sub menu button -->
    <button
      @click="isMobileSubMenuOpen = !isMobileSubMenuOpen"
      class="p-1 duration-200 rounded-md md:hidden focus:outline-none focus:ring"
    >
      <span class="sr-only">Open sub manu</span>
      <span aria-hidden="true">
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
            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
          />
        </svg>
      </span>
    </button>

    <!-- Desktop Right buttons -->
    <nav aria-label="Secondary" class="hidden space-x-2 md:flex md:items-center">
      <!-- Toggle dark theme button -->
      <button aria-hidden="true" class="relative focus:outline-none" x-cloak @click="toggleTheme">
        <div
          class="w-12 h-6 transition rounded-full outline-none bg-slate-300 bg-opacity-75"
        ></div>
        <div
          class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-150 transform scale-110 rounded-full shadow-sm"
          :class="{ 'translate-x-0 -translate-y-p text-slate-700 bg-white dark:bg-slate-700': !isDark, 'translate-x-6 text-slate-100 bg-white dark:bg-slate-700': isDark }"
        >
          <svg x-show="!isDark" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
          </svg>
          <svg x-show="isDark" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
        </div>
      </button>

      <!-- Notification button -->
      <button
        @click="openNotificationsPanel"
        class="p-2 rounded-full focus:outline-none hover:glass dark:glass-dark backdrop-blur-[40px]"
      >
        <span class="sr-only">Open Notification panel</span>
        <svg
          class="w-7 h-7"
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
            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
          />
        </svg>
      </button>

      <!-- Search button -->
      <button
        @click="openSearchPanel"
        class="p-2 rounded-full focus:outline-none hover:glass dark:glass-dark backdrop-blur-[40px]"
      >
        <span class="sr-only">Open search panel</span>
        <svg
          class="w-7 h-7"
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
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
          />
        </svg>
      </button>

      <!-- Settings button -->
      <button
        @click="openSettingsPanel"
        class="p-2 rounded-full focus:outline-none hover:glass dark:glass-dark backdrop-blur-[40px]"
      >
        <span class="sr-only">Open settings panel</span>
        <svg
          class="w-7 h-7"
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
            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
          />
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
          />
        </svg>
      </button>

      <!-- User avatar button -->
      <div class="relative" x-data="{ open: false }">
        <button
          @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })"
          type="button"
          aria-haspopup="true"
          :aria-expanded="open ? 'true' : 'false'"
          class="transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100"
        >
          <span class="sr-only">User menu</span>
          <img class="w-10 h-10 rounded-full" src="{{ asset('images/avatar.jpg') }}" alt="Ahmed Kamel" />
        </button>

        <!-- User dropdown menu -->
        <div
          x-show="open"
          x-ref="userMenu"
          x-transition:enter="transition-all transform ease-out"
          x-transition:enter-start="translate-y-1/2 opacity-0"
          x-transition:enter-end="translate-y-0 opacity-100"
          x-transition:leave="transition-all transform ease-in"
          x-transition:leave-start="translate-y-0 opacity-100"
          x-transition:leave-end="translate-y-1/2 opacity-0"
          @click.away="open = false"
          @keydown.escape="open = false"
          class="absolute right-0 w-48 py-1 glass dark:glass-dark backdrop-blur-[40px] bg-primary rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 focus:outline-none"
          tabindex="-1"
          role="menu"
          aria-orientation="vertical"
          aria-label="User menu"
        >
          <a
            href="#"
            role="menuitem"
            class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-500"
          >
            Your Profile
          </a>
          <a
            href="#"
            role="menuitem"
            class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-500"
          >
            Settings
          </a>
          <a
            href="#"
            role="menuitem"
            class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-500"
          >
            Logout
          </a>
        </div>
      </div>
    </nav>
    
  </div>
  
  <!-- Mobile main manu -->
  <div
    class="border-b md:hidden"
    x-show="isMobileMainMenuOpen"
    @click.away="isMobileMainMenuOpen = false"
  >
    <nav aria-label="Main" class="px-2 py-4 space-y-2">
      <!-- Dashboards links -->
      <!-- <div x-data="{ isActive: true, open: true}"> -->
        <!-- active & hover classes 'glass dark:glass-dark backdrop-blur-[40px]' -->
        <!-- <a
          href="/"
          @click="$event.preventDefault(); open = !open"
          class="flex items-center p-2 text-gray-500 rounded-xl dark:text-gray-200 hover:glass dark:glass-dark backdrop-blur-[40px]"
          :class="{'glass dark:glass-dark backdrop-blur-[40px]': isActive || open}"
          role="button"
          aria-haspopup="true"
          :aria-expanded="(open || isActive) ? 'true' : 'false'"
        >
          <span aria-hidden="true">
            <svg
              class="w-5 h-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
              />
            </svg>
          </span>
          <span class="ml-2 text-sm"> Dashboards </span>
          <span class="ml-auto" aria-hidden="true"> -->
            <!-- active class 'rotate-180' -->
            <!-- <svg
              class="w-4 h-4 transition-transform transform"
              :class="{ 'rotate-180': open }"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </a>
        <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards"> -->
          <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
          <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
          <!-- <a
            href="/"
            role="menuitem"
            class="block p-2 text-sm text-slate-700 duration-200 rounded-md dark:text-gray-200 dark:hover:text-slate-200 hover:text-gray-700"
          >
            Default
          </a>
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Project Mangement (soon)
          </a>
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            E-Commerce (soon)
          </a>
        </div>
      </div> -->

      <div 
        x-data="{ 
          isActive: {{ $menu == "dashboard" ? 'true' : 'false' }}, 
          open: {{ $submenu == "dashboard" ? 'true' : 'false' }} 
        }"
      >
        <a 
          href="/" 
          class="flex items-center px-2 py-2 text-gray-500 rounded-xl dark:text-gray-200 hover:glass dark:glass-dark backdrop-blur-[40px] glass dark:glass-dark backdrop-blur-[40px]" 
          :class="{'glass dark:glass-dark backdrop-blur-[40px] font-bold': (isActive == true) || open}" role="menu" 
        >
          <span aria-hidden="true">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
          </span>
          <span class="ml-2 text-sm"> Dashboards </span>
        </a>
      </div>

      <!-- Components links -->
      <div x-data="{ isActive: false, open: false }">
        <!-- active classes 'glass dark:glass-dark backdrop-blur-[40px]' -->
        <a
          href="#"
          @click="$event.preventDefault(); open = !open"
          class="flex items-center p-2 text-gray-500 rounded-xl dark:text-gray-200 hover:glass dark:glass-dark backdrop-blur-[40px]"
          :class="{ 'glass dark:glass-dark backdrop-blur-[40px]': isActive || open }"
          role="button"
          aria-haspopup="true"
          :aria-expanded="(open || isActive) ? 'true' : 'false'"
        >
          <span aria-hidden="true">
            <svg
              class="w-5 h-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
              />
            </svg>
          </span>
          <span class="ml-2 text-sm"> Components </span>
          <span aria-hidden="true" class="ml-auto">
            <!-- active class 'rotate-180' -->
            <svg
              class="w-4 h-4 transition-transform transform"
              :class="{ 'rotate-180': open }"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Components">
          <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
          <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Alerts (soon)
          </a>
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Buttons (soon)
          </a>
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Cards (soon)
          </a>
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Dropdowns (soon)
          </a>
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Forms (soon)
          </a>
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Lists (soon)
          </a>
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Modals (soon)
          </a>
        </div>
      </div>

      <!-- Pages links -->
      <div
        x-data="{ 
          open: {{ $menu == "pages" ? 'true' : 'false' }} ,
          isActive: '{{ $submenu }}'
        }"
      >
        <!-- active classes 'glass dark:glass-dark backdrop-blur-[40px]' -->
        <a
          href="#"
          @click="$event.preventDefault(); open = !open"
          class="flex items-center p-2 text-gray-500 rounded-xl dark:text-gray-200 hover:glass dark:glass-dark backdrop-blur-[40px]"
          :class="{ 'glass dark:glass-dark backdrop-blur-[40px]': isActive || open }"
          role="button"
          aria-haspopup="true"
          :aria-expanded="(open || isActive) ? 'true' : 'false'"
        >
          <span aria-hidden="true">
            <svg
              class="w-5 h-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
              />
            </svg>
          </span>
          <span class="ml-2 text-sm"> Pages </span>
          <span aria-hidden="true" class="ml-auto">
            <!-- active class 'rotate-180' -->
            <svg
              class="w-4 h-4 transition-transform transform"
              :class="{ 'rotate-180': open }"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Pages">
          <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
          <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
          <a
            href="/blank"
            role="menuitem"
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'blank', 'text-gray-500 dark:text-gray-300' : isActive != 'blank' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Blank
          </a>
          <a
            href="/404"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            404
          </a>
          <a
            href="pages/500.html"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            500
          </a>
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Profile (soon)
          </a>
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Pricing (soon)
          </a>
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Kanban (soon)
          </a>
          <a
            href="#"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Feed (soon)
          </a>
        </div>
      </div>

      <!-- Authentication links -->
      <div x-data="{ isActive: false, open: false}">
        <!-- active & hover classes 'glass dark:glass-dark backdrop-blur-[40px]' -->
        <a
          href="#"
          @click="$event.preventDefault(); open = !open"
          class="flex items-center p-2 text-gray-500 rounded-xl dark:text-gray-200 hover:glass dark:glass-dark backdrop-blur-[40px]"
          :class="{'glass dark:glass-dark backdrop-blur-[40px]': isActive || open}"
          role="button"
          aria-haspopup="true"
          :aria-expanded="(open || isActive) ? 'true' : 'false'"
        >
          <span aria-hidden="true">
            <svg
              class="w-5 h-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
              />
            </svg>
          </span>
          <span class="ml-2 text-sm"> Authentication </span>
          <span aria-hidden="true" class="ml-auto">
            <!-- active class 'rotate-180' -->
            <svg
              class="w-4 h-4 transition-transform transform"
              :class="{ 'rotate-180': open }"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
          <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
          <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
          <a
            href="auth/register.html"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Register
          </a>
          <a
            href="auth/login.html"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Login
          </a>
          <a
            href="auth/forgot-password.html"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Forgot Password
          </a>
          <a
            href="auth/reset-password.html"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Reset Password
          </a>
        </div>
      </div>

      <!-- Layouts links -->
      <div x-data="{ isActive: false, open: false}">
        <!-- active & hover classes 'glass dark:glass-dark backdrop-blur-[40px]' -->
        <a
          href="#"
          @click="$event.preventDefault(); open = !open"
          class="flex items-center p-2 text-gray-500 rounded-xl dark:text-gray-200 hover:glass dark:glass-dark backdrop-blur-[40px]"
          :class="{'glass dark:glass-dark backdrop-blur-[40px]': isActive || open}"
          role="button"
          aria-haspopup="true"
          :aria-expanded="(open || isActive) ? 'true' : 'false'"
        >
          <span aria-hidden="true">
            <svg
              class="w-5 h-5"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
              />
            </svg>
          </span>
          <span class="ml-2 text-sm"> Layouts </span>
          <span aria-hidden="true" class="ml-auto">
            <!-- active class 'rotate-180' -->
            <svg
              class="w-4 h-4 transition-transform transform"
              :class="{ 'rotate-180': open }"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Layouts">
          <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
          <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
          <a
            href="layouts/two-columns-sidebar.html"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Two Columns Sidebar
          </a>
          <a
            href="layouts/mini-plus-one-columns-sidebar.html"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Mini + One Columns Sidebar
          </a>
          <a
            href="layouts/mini-column-sidebar.html"
            role="menuitem"
            class="block p-2 text-sm text-gray-500 dark:text-gray-400 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Mini Column Sidebar
          </a>
        </div>
      </div>
    </nav>
  </div>

  <!-- Mobile sub menu -->
  <nav
    x-transition:enter="transition duration-200 ease-in-out transform sm:duration-500"
    x-transition:enter-start="-translate-y-full opacity-0"
    x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
    x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="-translate-y-full opacity-0"
    x-show="isMobileSubMenuOpen"
    @click.away="isMobileSubMenuOpen = false"
    class="z-20 flex bg-primary-lighter items-center px-2 py-4 mt-4 rounded-md glass dark:glass-dark backdrop-blur-[40px] md:hidden"
    aria-label="Secondary"
  >
    <div class="space-x-2">
      <!-- Toggle dark theme button -->
      <button aria-hidden="true" class="relative focus:outline-none" x-cloak @click="toggleTheme">
        <div
          class="w-12 h-6 transition rounded-full outline-none bg-slate-100 dark:bg-slate-500"
        ></div>
        <div
          class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-150 transform scale-110 rounded-full shadow-sm"
          :class="{ 'translate-x-0 -translate-y-p text-slate-700 bg-white dark:bg-slate-700': !isDark, 'translate-x-6 text-slate-100 bg-white dark:bg-slate-700': isDark }"
        >
          <svg x-show="!isDark" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
          </svg>
          <svg x-show="isDark" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
        </div>
      </button>

      <!-- Notification button -->
      <button
        @click="openNotificationsPanel(); $nextTick(() => { isMobileSubMenuOpen = false })"
        class="p-2 rounded-full focus:outline-none focus:bg-slate-100 dark:focus:bg-slate-800 focus:ring-slate-500"
      >
        <span class="sr-only">Open notifications panel</span>
        <svg
          class="w-7 h-7"
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
            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
          />
        </svg>
      </button>

      <!-- Search button -->
      <button
        @click="openSearchPanel(); $nextTick(() => { $refs.searchInput.focus(); setTimeout(() => {isMobileSubMenuOpen= false}, 100) })"
        class="p-2 rounded-full focus:outline-none focus:bg-slate-100 dark:focus:bg-slate-800 focus:ring-slate-500"
      >
        <span class="sr-only">Open search panel</span>
        <svg
          class="w-7 h-7"
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
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
          />
        </svg>
      </button>

      <!-- Settings button -->
      <button
        @click="openSettingsPanel(); $nextTick(() => { isMobileSubMenuOpen = false })"
        class="p-2 rounded-full focus:outline-none focus:bg-slate-100 dark:focus:bg-slate-800 focus:ring-slate-500"
      >
        <span class="sr-only">Open settings panel</span>
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
            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
          />
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
          />
        </svg>
      </button>
    </div>

    <!-- User avatar button -->
    <div class="relative ml-auto" x-data="{ open: false }">
      <button
        @click="open = !open"
        type="button"
        aria-haspopup="true"
        :aria-expanded="open ? 'true' : 'false'"
        class="block transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100"
      >
        <span class="sr-only">User menu</span>
        <img class="w-10 h-10 rounded-full" src="{{ asset('images/avatar.jpg') }}" alt="Ahmed Kamel" />
      </button>

      <!-- User dropdown menu -->
      <div
        x-show="open"
        x-transition:enter="transition-all transform ease-out"
        x-transition:enter-start="translate-y-1/2 opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition-all transform ease-in"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="translate-y-1/2 opacity-0"
        @click.away="open = false"
        class="before:blur-[50px] glass dark:glass-dark backdrop-blur-[40px] bg-primary fixed right-0 w-48 origin-top-right rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5"
        role="menu"
        aria-orientation="vertical"
        aria-label="User menu"
      >
        <a
          href="#"
          role="menuitem"
          class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200"
        >
          Your Profile
        </a>
        <a
          href="#"
          role="menuitem"
          class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200"
        >
          Settings
        </a>
        <a
          href="#"
          role="menuitem"
          class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200"
        >
          Logout
        </a>
      </div>
    </div>
  </nav>
</header>