<!-- Sidebar -->
<aside class="flex-shrink-0 m-5 text-gray-700 dark:text-gray-200 hidden w-64 md:block glass dark:glass-dark backdrop-blur-[40px] rounded-2xl">
  <div class="flex flex-col h-full">
    <nav aria-label="Main" class="flex-1 px-4 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
      <div>
        <div class="flex-shrink-0 py-1 md:py-4 flex flex-row items-center justify-between md:justify-center">
          <div class="text-left md:text-center m-auto mx-2 my-2 md:mx-auto md:my-6">
            <img src="{{ asset('images/avatar.jpg') }}" class="w-12 h-12 m-auto hidden md:block" alt="">
            <span class="font-bold">Halo, </span>
            <span class="text-base">Rodhian</span>
            <span class="text-xs block">Administrator</span>
          </div>
          <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline px-2" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      </div>
      <!-- Dashboards links -->
      <div 
        x-data="{ 
          isActive: {{ $menu == "dashboard" ? 'true' : 'false' }}, 
          open: {{ $submenu == "dashboard" ? 'true' : 'false' }} 
        }"
      >
        <a 
          href="/" 
          class="flex items-center px-2 py-2 text-gray-500 rounded-xl dark:text-gray-200 hover:glass dark:glass-dark glass dark:glass-dark backdrop-blur-[40px]" 
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
      <div
        x-data="{ 
          open: {{ $menu == "components" ? 'true' : 'false' }} ,
          isActive: '{{ $submenu }}'
        }"
      >
        <!-- active classes 'glass dark:glass-dark backdrop-blur-[40px]' -->
        <a
          href="#"
          @click="$event.preventDefault(); open = !open"
          class="flex items-center p-2 text-gray-500 rounded-xl dark:text-gray-200 hover:glass dark:glass-dark backdrop-blur-[40px]"
          :class="{ 'glass dark:glass-dark backdrop-blur-[40px]': open }"
          role="button"
          aria-haspopup="true"
          :aria-expanded="(open) ? 'true' : 'false'"
        >
          <span aria-hidden="true">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
          </span>
          <span class="ml-2 text-sm"> Components </span>
          <span aria-hidden="true" class="ml-auto">
            <!-- active class 'rotate-180' -->
            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Components" style="display: none;">
          <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
          <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
          <a href="/alert" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'alert', 'text-gray-500 dark:text-gray-300' : isActive != 'alert' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Alerts
          </a>
          <a href="/button" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'button', 'text-gray-500 dark:text-gray-300' : isActive != 'button' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Buttons
          </a>
          <a href="/card" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'card', 'text-gray-500 dark:text-gray-300' : isActive != 'card' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Cards
          </a>
          <a href="/dropdown" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'dropdown', 'text-gray-500 dark:text-gray-300' : isActive != 'dropdown' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Dropdowns
          </a>
          <a href="/form" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'form', 'text-gray-500 dark:text-gray-300' : isActive != 'form' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Forms
          </a>
          <a href="/list" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'list', 'text-gray-500 dark:text-gray-300' : isActive != 'list' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Lists
          </a>
          <a href="/modal" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'modal', 'text-gray-500 dark:text-gray-300' : isActive != 'modal' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Modals
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
          href="#" @click="$event.preventDefault(); 
          open = !open" 
          class="flex items-center p-2 text-gray-500 rounded-xl dark:text-gray-200 hover:glass dark:glass-dark backdrop-blur-[40px]" 
          :class="{ 'glass dark:glass-dark backdrop-blur-[40px]': open }" 
          role="button" aria-haspopup="true" 
          :aria-expanded="(open) ? 'true' : 'false'" 
          aria-expanded="false"
        >
          <span aria-hidden="true">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
            </svg>
          </span>
          <span class="ml-2 text-sm"> Pages </span>
          <span aria-hidden="true" class="ml-auto">
            <!-- active class 'rotate-180' -->
            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Pages" style="display: none;">
          <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
          <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
          <a 
            href="/blank" role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'blank', 'text-gray-500 dark:text-gray-300' : isActive != 'blank' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Blank
          </a>
          <a 
            href="/404" role="menuitem"
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == '404', 'text-gray-500 dark:text-gray-300' : isActive != '404' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            404
          </a>
          <a href="pages/500.html" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'pages', 'text-gray-500 dark:text-gray-300' : isActive != 'pages' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            500 (soon)
          </a>
          <a href="#" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'profile', 'text-gray-500 dark:text-gray-300' : isActive != 'profile' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Profile (soon)
          </a>
          <a href="#" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'pricing', 'text-gray-500 dark:text-gray-300' : isActive != 'pricing' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Pricing (soon)
          </a>
          <a href="#" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'kanban', 'text-gray-500 dark:text-gray-300' : isActive != 'kanban' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Kanban (soon)
          </a>
          <a href="#" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'feed', 'text-gray-500 dark:text-gray-300' : isActive != 'feed' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Feed (soon)
          </a>
        </div>
      </div>

      <!-- Authentication links -->
      <div x-data="{ isActive: false, open: false}">
        <!-- active & hover classes 'glass dark:glass-dark backdrop-blur-[40px]' -->
        <a href="#" @click="$event.preventDefault(); open = !open" class="flex items-center p-2 text-gray-500 rounded-xl dark:text-gray-200 hover:glass dark:glass-dark backdrop-blur-[40px]" :class="{'glass dark:glass-dark backdrop-blur-[40px]': isActive && open}" role="button" aria-haspopup="true" :aria-expanded="(open && isActive) ? 'true' : 'false'" aria-expanded="false">
          <span aria-hidden="true">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
          </span>
          <span class="ml-2 text-sm"> Authentication </span>
          <span aria-hidden="true" class="ml-auto">
            <!-- active class 'rotate-180' -->
            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication" style="display: none;">
          <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
          <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
          <a href="auth/register.html" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'blank', 'text-gray-500 dark:text-gray-300' : isActive != 'blank' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Register (soon)
          </a>
          <a href="auth/login.html" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'blank', 'text-gray-500 dark:text-gray-300' : isActive != 'blank' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Login (soon)
          </a>
          <a href="auth/forgot-password.html" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'blank', 'text-gray-500 dark:text-gray-300' : isActive != 'blank' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Forgot Password (soon)
          </a>
          <a href="auth/reset-password.html" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'blank', 'text-gray-500 dark:text-gray-300' : isActive != 'blank' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Reset Password (soon)
          </a>
        </div>
      </div>

      <!-- Layouts links -->
      <div 
        x-data="{ 
          open: {{ $menu == "layouts" ? 'true' : 'false' }} ,
          isActive: '{{ $submenu }}'
        }"
      >
        <!-- active & hover classes 'glass dark:glass-dark backdrop-blur-[40px]' -->
        <a 
          href="#" 
          @click="$event.preventDefault(); open = !open" 
          class="flex items-center p-2 text-gray-500 rounded-xl dark:text-gray-200 hover:glass dark:glass-dark backdrop-blur-[40px]" 
          :class="{
            'glass dark:glass-dark backdrop-blur-[40px]': isActive && open}" 
          role="button" 
          aria-haspopup="true" 
          :aria-expanded="(open && isActive) ? 'true' : 'false'" 
          aria-expanded="false"
        >
          <span aria-hidden="true">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
            </svg>
          </span>
          <span class="ml-2 text-sm"> Layouts </span>
          <span aria-hidden="true" class="ml-auto">
            <!-- active class 'rotate-180' -->
            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </span>
        </a>
        <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Layouts" style="display: none;">
          <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
          <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
          <a href="layouts/default" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'layout_default', 'text-gray-500 dark:text-gray-300' : isActive != 'layout_default' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Default Sidebar (soon)
          </a>
          <a href="layouts/mini" 
            role="menuitem" 
            :class="{ 'dark:text-slate-200 text-gray-700 font-bold' : isActive == 'layout_mini', 'text-gray-500 dark:text-gray-300' : isActive != 'layout_mini' }" 
            class="block p-2 text-sm duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
          >
            Mini Column Sidebar (soon)
          </a>
        </div>
      </div>
    </nav>

    <!-- Sidebar footer -->
    <!-- <div class="flex-shrink-0 px-2 py-4 space-y-2 ">
      <button
        @click="openSettingsPanel"
        type="button"
        class="flex items-center w-2/3 m-auto justify-center px-4 py-2 text-sm rounded-md hover:bg-slate-500 focus:outline-none focus:ring focus:ring-slate-500 focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-slate-800"
      >
        <span aria-hidden="true">
          <svg
            class="w-4 h-4 mr-2"
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
        <span>Customize</span>
      </button>
    </div> -->
  </div>
</aside>