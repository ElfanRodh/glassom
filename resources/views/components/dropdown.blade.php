@extends('layouts.master')

@section('content')
<!-- Main content -->
<main class="z-0">
  <!-- Content -->
  <div class="my-2 rounded-xl">
    <div class="grid grid-cols-1 gap-8 py-4 lg:grid-cols-2">

      <!-- Simple Dropdown -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Simple Dropdown
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="flex w-full text-xs">
            <div
              x-data="{ 
                open: false,
                isActive: true,
              }"
              class="w-1/3 p-2"
            >
              <a
                href="#"
                @click="$event.preventDefault(); 
                open = !open"
                class="flex items-center p-2 text-white rounded-md bg-gradient-to-r from-green-300 to-green-400"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span class="mx-2"> Dropdown </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-4 glass dark:glass-dark backdrop-blur-[40px] rounded-md " role="menu" style="display: none;">
                <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 1
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 2
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 3
                </a>
              </div>
            </div>
  
            <div
              x-data="{ 
                open: false,
                isActive: true,
              }"
              class="w-1/3 p-2"
            >
              <a
                href="#"
                @click="$event.preventDefault(); 
                open = !open"
                class="flex items-center p-2 text-white rounded-md bg-gradient-to-r from-orange-300 to-orange-400"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span class="ml-2"> Dropdown </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-4 glass dark:glass-dark backdrop-blur-[40px] rounded-md " role="menu" style="display: none;">
                <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 1
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 2
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 3
                </a>
              </div>
            </div>

            <div
              x-data="{ 
                open: false,
                isActive: true,
              }"
              class="w-1/3 p-2"
            >
              <a
                href="#"
                @click="$event.preventDefault(); 
                open = !open"
                class="flex items-center p-2 text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span class="ml-2"> Dropdown </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-4 glass dark:glass-dark backdrop-blur-[40px] rounded-md " role="menu" style="display: none;">
                <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 1
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 2
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 3
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Group Dropdown -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Group Dropdown
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="flex w-full text-xs">
            <div
              x-data="{ 
                open: false,
                isActive: true,
              }"
              class="w-1/3"
            >
              <a
                href="#"
                @click="$event.preventDefault(); 
                open = !open"
                class="flex items-center p-2 text-white rounded-l-md bg-gradient-to-r from-green-300 to-green-400"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span class="ml-2"> Dropdown </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-4 glass dark:glass-dark backdrop-blur-[40px] rounded-md " role="menu" style="display: none;">
                <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 1
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 2
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 3
                </a>
              </div>
            </div>
  
            <div
              x-data="{ 
                open: false,
                isActive: true,
              }"
              class="w-1/3"
            >
              <a
                href="#"
                @click="$event.preventDefault(); 
                open = !open"
                class="flex items-center p-2 text-white bg-gradient-to-r from-orange-300 to-orange-400"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span class="ml-2"> Dropdown </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-4 glass dark:glass-dark backdrop-blur-[40px] rounded-md " role="menu" style="display: none;">
                <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 1
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 2
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 3
                </a>
              </div>
            </div>

            <div
              x-data="{ 
                open: false,
                isActive: true,
              }"
              class="w-1/3"
            >
              <a
                href="#"
                @click="$event.preventDefault(); 
                open = !open"
                class="flex items-center p-2 text-white rounded-r-md bg-gradient-to-r from-blue-300 to-blue-400"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span class="ml-2"> Dropdown </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-4 glass dark:glass-dark backdrop-blur-[40px] rounded-md " role="menu" style="display: none;">
                <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 1
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 2
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 3
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Icon Dropdown -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Icon Dropdown
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="flex w-full text-xs">
            <div
              x-data="{ 
                open: false,
                isActive: true,
              }"
              class="w-1/3 p-2"
            >
              <a
                href="#"
                @click="$event.preventDefault(); 
                open = !open"
                class="flex items-center p-2 text-white rounded-md bg-gradient-to-r from-green-300 to-green-400"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span aria-hidden="true">
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                  </svg>
                </span>
                <span class="ml-2"> Dropdown </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-2 glass dark:glass-dark backdrop-blur-[40px] rounded-md " role="menu" style="display: none;">
                <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" 
                  role="menuitem" 
                  class="flex items-center p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                  </div>
                  Sub Menu 1
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="flex items-center p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  Sub Menu 2
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="flex items-center p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                  </div>
                  Sub Menu 3
                </a>
              </div>
            </div>
  
            <div
              x-data="{ 
                open: false,
                isActive: true,
              }"
              class="w-1/3 p-2"
            >
              <a
                href="#"
                @click="$event.preventDefault(); 
                open = !open"
                class="flex items-center p-2 text-white rounded-md bg-gradient-to-r from-orange-300 to-orange-400"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span aria-hidden="true">
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                  </svg>
                </span>
                <span class="ml-2"> Dropdown </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-2 glass dark:glass-dark backdrop-blur-[40px] rounded-md " role="menu" style="display: none;">
                <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" 
                  role="menuitem" 
                  class="flex items-center p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                  </div>
                  Sub Menu 1
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="flex items-center p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  Sub Menu 2
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="flex items-center p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                  </div>
                  Sub Menu 3
                </a>
              </div>
            </div>

            <div
              x-data="{ 
                open: false,
                isActive: true,
              }"
              class="w-1/3 p-2"
            >
              <a
                href="#"
                @click="$event.preventDefault(); 
                open = !open"
                class="flex items-center p-2 text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span aria-hidden="true">
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                  </svg>
                </span>
                <span class="ml-2"> Dropdown </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-2 glass dark:glass-dark backdrop-blur-[40px] rounded-md " role="menu" style="display: none;">
                <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" 
                  role="menuitem" 
                  class="flex items-center p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                  </div>
                  Sub Menu 1
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="flex items-center p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  Sub Menu 2
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="flex items-center p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                  </div>
                  Sub Menu 3
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Dropdown Direction -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Dropdown Direction
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start min-h-[150px]">
          <div class="flex text-xs">
            <div
              x-data="{ 
                open: false,
                isActive: true,
              }"
              class="w-1/3 p-2 relative"
            >
              <a
                href="#"
                @click="$event.preventDefault(); 
                open = !open"
                class="flex items-center p-2 text-white rounded-md bg-gradient-to-r from-orange-300 to-orange-400"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span class="ml-2"> Dropdown </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-90': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-4 glass dark:glass-dark backdrop-blur-[40px] rounded-md absolute top-0 -left-28" role="menu" style="display: none;">
                <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 1
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 2
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 3
                </a>
              </div>
            </div>
            
            <div
              x-data="{ 
                open: false,
                isActive: true,
              }"
              class="w-1/3 p-2 relative"
            >
              <a
                href="#"
                @click="$event.preventDefault(); 
                open = !open"
                class="flex items-center p-2 text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span class="mx-2"> Dropdown </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 glass dark:glass-dark backdrop-blur-[40px] rounded-md absolute -top-28 w-full" role="menu" style="display: none;">
                <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 1
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 2
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 3
                </a>
              </div>
            </div>

            <div
              x-data="{ 
                open: false,
                isActive: true,
              }"
              class="w-1/3 p-2 relative"
            >
              <a
                href="#"
                @click="$event.preventDefault(); 
                open = !open"
                class="flex items-center p-2 text-white rounded-md bg-gradient-to-r from-green-300 to-green-400"
                role="button"
                aria-haspopup="true"
                :aria-expanded="(open || isActive) ? 'true' : 'false'"
              >
                <span class="mx-2"> Dropdown </span>
                <span aria-hidden="true" class="ml-auto">
                  <!-- active class 'rotate-180' -->
                  <svg class="w-4 h-4 transition-transform transform" :class="{ '-rotate-90': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </a>
              <div x-show="open" class="mt-2 space-y-2 px-4 glass dark:glass-dark backdrop-blur-[40px] rounded-md absolute top-0 -right-28" role="menu" style="display: none;">
                <!-- active & hover classes 'text-gray-700 dark:text-gray-200' -->
                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 1
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 2
                </a>
                <a href="#" 
                  role="menuitem" 
                  class="block p-2 duration-200 rounded-md dark:hover:text-slate-200 hover:text-gray-700"
                >
                  Sub Menu 3
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>
@endsection