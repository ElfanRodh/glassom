@extends('layouts.master')

@section('content')
<!-- Main content -->
<main class="z-0">
  <!-- Content -->
  <div class="my-2 rounded-xl">
    <div class="grid grid-cols-1 gap-8 py-4 lg:grid-cols-2">
      <!-- Default button -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Default buttons
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">
              Success
            </button>
          </div>
  
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-orange-300 to-orange-400 hover:scale-110 transition ease-in-out duration-150">
              Warning
            </button>
          </div>

          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150">
              Info
            </button>
          </div>
          
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-red-300 to-red-400 hover:scale-110 transition ease-in-out duration-150">
              Danger
            </button>
          </div>
          
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-slate-500 rounded-md bg-gradient-to-r from-slate-200 to-slate-300 hover:scale-110 transition ease-in-out duration-150">
              Light
            </button>
          </div>

          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-slate-600 to-slate-700 hover:scale-110 transition ease-in-out duration-150">
              Dark
            </button>
          </div>

          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-primary-light to-primary hover:scale-110 transition ease-in-out duration-150">
              Primary
            </button>
          </div>

        </div>
      </div>

      <!-- Outline button -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Outline buttons
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-green-400 rounded-md bg-gradient-to-r from-green-300/5 to-green-400/5 ring-1 ring-green-400 hover:scale-110 transition ease-in-out duration-150">
              Success
            </button>
          </div>
  
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-orange-400 rounded-md bg-gradient-to-r from-orange-300/5 to-orange-400/5 ring-1 ring-orange-400 hover:scale-110 transition ease-in-out duration-150">
              Warning
            </button>
          </div>

          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-blue-400 rounded-md bg-gradient-to-r from-blue-300/5 to-blue-400/5 ring-1 ring-blue-400 hover:scale-110 transition ease-in-out duration-150">
              Info
            </button>
          </div>
          
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-red-400 rounded-md bg-gradient-to-r from-red-300/5 to-red-400/5 ring-1 ring-red-400 hover:scale-110 transition ease-in-out duration-150">
              Danger
            </button>
          </div>
          
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-slate-400 rounded-md bg-gradient-to-r from-slate-300/5 to-slate-400/5 ring-1 ring-slate-400 hover:scale-110 transition ease-in-out duration-150">
              Light
            </button>
          </div>

          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-slate-800 rounded-md bg-gradient-to-r from-slate-400/5 to-slate-500/5 ring-1 ring-slate-800 hover:scale-110 transition ease-in-out duration-150">
              Dark
            </button>
          </div>

          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-primary rounded-md bg-primary/5 ring-1 ring-primary hover:scale-110 transition ease-in-out duration-150">
              Primary
            </button>
          </div>
        </div>
      </div>

      <!-- button sizes -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Buttons sizes
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">
              Extra Small
            </button>
          </div>
  
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-orange-300 to-orange-400 hover:scale-110 transition ease-in-out duration-150">
              Small
            </button>
          </div>

          <div>
            <button class="px-5 py-2 m-1 min-w-24 text-md text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150">
              Medium
            </button>
          </div>
          
          <div>
            <button class="px-7 py-2 m-1 min-w-24 text-lg text-white rounded-md bg-gradient-to-r from-red-300 to-red-400 hover:scale-110 transition ease-in-out duration-150">
              Large
            </button>
          </div>

        </div>
      </div>

      <!-- button states -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Buttons states
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-primary-light to-primary hover:scale-110 transition ease-in-out duration-150">
              Normal
            </button>
          </div>

          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-primary-lighter to-primary-lighter cursor-not-allowed" disabled>
              Disabled
            </button>
          </div>

          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-primary-light to-primary hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="absolute w-4 h-4 mx-2 transition animate-ping glass rounded-full"></div>
                <div class="relative w-4 h-4 mx-2 glass rounded-full"></div>
              </span>
            </button>
          </div>
        </div>
      </div>

      <!-- Icon button -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Icon buttons
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="mr-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                Success
              </span>
            </button>
          </div>
  
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-orange-300 to-orange-400 hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="mr-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                  </svg>
                </div>
                Warning
              </span>
            </button>
          </div>

          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="mr-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                Info
              </span>
            </button>
          </div>
          
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-red-300 to-red-400 hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="mr-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                Danger
              </span>
            </button>
          </div>
          
          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-slate-500 rounded-md bg-gradient-to-r from-slate-200 to-slate-300 hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="mr-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                Light
              </span>
            </button>
          </div>

          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-slate-600 to-slate-700 hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="mr-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                Dark
              </span>
            </button>
          </div>

          <div>
            <button class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-primary-light to-primary hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="mr-1">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                Primary
              </span>
            </button>
          </div>

        </div>
      </div>

      <!-- Only Icon button -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Only Icon buttons
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div>
            <button class="px-2 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
              </span>
            </button>
          </div>
  
          <div>
            <button class="px-2 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-orange-300 to-orange-400 hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                  </svg>
                </div>
              </span>
            </button>
          </div>

          <div>
            <button class="px-2 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
              </span>
            </button>
          </div>
          
          <div>
            <button class="px-2 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-red-300 to-red-400 hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
              </span>
            </button>
          </div>
          
          <div>
            <button class="px-2 py-2 m-1 min-w-24 text-xs text-slate-500 rounded-md bg-gradient-to-r from-slate-200 to-slate-300 hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
              </span>
            </button>
          </div>

          <div>
            <button class="px-2 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-slate-600 to-slate-700 hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
              </span>
            </button>
          </div>

          <div>
            <button class="px-2 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-primary-light to-primary hover:scale-110 transition ease-in-out duration-150">
              <span class="flex items-center">
                <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
              </span>
            </button>
          </div>

        </div>
      </div>

      <!-- Group button -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Group buttons
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <!-- Default -->
          <div class="inline-flex m-2 rounded-md shadow-sm" role="group">
            <button type="button" class="inline-flex items-center px-2 py-2 min-w-24 text-xs text-white rounded-l-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">
                Profile
            </button>
            <button type="button" class="inline-flex items-center px-2 py-2 min-w-24 text-xs text-white bg-gradient-to-r from-orange-300 to-orange-400 hover:scale-110 transition ease-in-out duration-150">
                Settings
            </button>
            <button type="button" class="inline-flex items-center px-2 py-2 min-w-24 text-xs text-white rounded-r-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150">
            
                Downloads
            </button>
          </div>

          <!-- with icons -->
          <div class="inline-flex m-2 rounded-md shadow-sm w-full" role="group">
            <button type="button" class="inline-flex items-center px-2 py-2 min-w-24 text-xs text-white rounded-l-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">
              <svg class="mr-2 w-4 h-4 fill-current" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
              </svg>
              Profile
            </button>
            <button type="button" class="inline-flex items-center px-2 py-2 min-w-24 text-xs text-white bg-gradient-to-r from-orange-300 to-orange-400 hover:scale-110 transition ease-in-out duration-150">
              <svg class="mr-2 w-4 h-4 fill-current" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path>
              </svg>
              Settings
            </button>
            <button type="button" class="inline-flex items-center px-2 py-2 min-w-24 text-xs text-white rounded-r-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150">
              <svg class="mr-2 w-4 h-4 fill-current" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd"></path>
              </svg>
              Downloads
            </button>
          </div>

          <!-- with icons -->
          <div>
            <div class="flex flex-col m-2 rounded-md shadow-sm" role="group">
              <button type="button" class="inline-flex items-center px-2 py-2 min-w-24 text-xs text-white rounded-t-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">
                <svg class="mr-2 w-4 h-4 fill-current" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                </svg>
                Profile
              </button>
              <button type="button" class="inline-flex items-center px-2 py-2 min-w-24 text-xs text-white bg-gradient-to-r from-orange-300 to-orange-400 hover:scale-110 transition ease-in-out duration-150">
                <svg class="mr-2 w-4 h-4 fill-current" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path>
                </svg>
                Settings
              </button>
              <button type="button" class="inline-flex items-center px-2 py-2 min-w-24 text-xs text-white rounded-b-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150">
                <svg class="mr-2 w-4 h-4 fill-current" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd"></path>
                </svg>
                Downloads
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>
@endsection