@extends('layouts.master')

@section('content')
<!-- Main content -->
<main class="relative">
  <!-- Content -->
  <div class="my-2 rounded-xl">
    <div class="grid grid-cols-1 gap-8 py-4 lg:grid-cols-2">
      
      <!-- default alerts -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Default alerts
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <!-- Success alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-green-400/95 rounded-xl">
            <div>
              <span class="text-xs text-white mt-2">
                This is success alert
              </span>
            </div>
          </div>
    
          <!-- Warning Alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-orange-400/95 rounded-xl">
            <div>
              <span class="text-xs text-white mt-2">
                This is warning alert
              </span>
            </div>
          </div>
    
          <!-- Info Alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-blue-400/95 rounded-xl">
            <div>
              <span class="text-xs text-white mt-2">
                This is info alert
              </span>
            </div>
          </div>
    
          <!-- Danger Alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-red-400/95 rounded-xl">
            <div>
              <span class="text-xs text-white mt-2">
                This is danger alert
              </span>
            </div>
          </div>
    
          <!-- Light Alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-slate-400/95 rounded-xl">
            <div>
              <span class="text-xs text-white mt-2">
                This is light alert
              </span>
            </div>
          </div>
    
          <!-- Dark Alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-slate-700 rounded-xl">
            <div>
              <span class="text-xs text-white mt-2">
                This is dark alert
              </span>
            </div>
          </div>
    
          <!-- Primary Alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-primary rounded-xl">
            <div>
              <span class="text-xs text-white mt-2">
                This is primary alert
              </span>
            </div>
          </div>
        </div>

      </div>

      <!-- title alerts -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Title alerts
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <!-- Success alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-green-400/95 rounded-xl">
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                success
              </h6>
              <span class="text-xs text-white mt-2">
                This is success alert
              </span>
            </div>
          </div>
    
          <!-- Warning Alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-orange-400/95 rounded-xl">
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                warning
              </h6>
              <span class="text-xs text-white mt-2">
                This is warning alert
              </span>
            </div>
          </div>
    
          <!-- Info Alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-blue-400/95 rounded-xl">
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                info
              </h6>
              <span class="text-xs text-white mt-2">
                This is info alert
              </span>
            </div>
          </div>
    
          <!-- Danger Alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-red-400/95 rounded-xl">
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                danger
              </h6>
              <span class="text-xs text-white mt-2">
                This is danger alert
              </span>
            </div>
          </div>
    
          <!-- Light Alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-slate-400/95 rounded-xl">
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                light
              </h6>
              <span class="text-xs text-white mt-2">
                This is light alert
              </span>
            </div>
          </div>
    
          <!-- Dark Alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-slate-700/95 rounded-xl">
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                dark
              </h6>
              <span class="text-xs text-white mt-2">
                This is dark alert
              </span>
            </div>
          </div>
    
          <!-- Primary Alert -->
          <div class="flex items-center w-full justify-between p-4 my-2 bg-primary rounded-xl">
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                primary
              </h6>
              <span class="text-xs text-white mt-2">
                This is primary alert
              </span>
            </div>
          </div>
        </div>
      </div>

      <!-- icon alerts -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Icon alerts
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <!-- Success alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 bg-green-400/95 rounded-xl">
            <div class="mr-5 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                success
              </h6>
              <span class="text-xs text-white mt-2">
                This is success alert
              </span>
            </div>
          </div>
    
          <!-- Warning Alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 bg-orange-400/95 rounded-xl">
            <div class="mr-5 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                warning
              </h6>
              <span class="text-xs text-white mt-2">
                This is warning alert
              </span>
            </div>
          </div>
    
          <!-- Info Alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 bg-blue-400/95 rounded-xl">
            <div class="mr-5 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                info
              </h6>
              <span class="text-xs text-white mt-2">
                This is info alert
              </span>
            </div>
          </div>
    
          <!-- Danger Alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 bg-red-400/95 rounded-xl">
            <div class="mr-5 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                danger
              </h6>
              <span class="text-xs text-white mt-2">
                This is danger alert
              </span>
            </div>
          </div>
    
          <!-- Light Alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 bg-slate-400/95 rounded-xl">
            <div class="mr-5 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                light
              </h6>
              <span class="text-xs text-white mt-2">
                This is light alert
              </span>
            </div>
          </div>
    
          <!-- Dark Alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 bg-slate-700/95 rounded-xl">
            <div class="mr-5 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                dark
              </h6>
              <span class="text-xs text-white mt-2">
                This is dark alert
              </span>
            </div>
          </div>
    
          <!-- Primary Alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 bg-primary rounded-xl">
            <div class="mr-5 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                primary
              </h6>
              <span class="text-xs text-white mt-2">
                This is primary alert
              </span>
            </div>
          </div>
        </div>
      </div>

      <!-- glass alerts -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Glass alerts
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <!-- Success alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
            <div class="h-4 w-4 rounded-full bg-gradient-to-r from-green-300/75 to-green-400/75 absolute right-2"></div>
            <div class="h-2 w-2 rounded-full glass absolute right-3 transition animate-ping"></div>
            <div class="h-2/4 w-[90%] rounded-full bg-gradient-to-r from-green-300/75 to-green-400/75 absolute blur-lg -z-10"></div>
            <div class="mr-5 text-gray-500 dark:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-gray-500 dark:text-white">
                success
              </h6>
              <span class="text-xs text-gray-500 dark:text-white mt-2">
                This is success alert
              </span>
            </div>
          </div>
    
          <!-- Warning Alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
            <div class="h-4 w-4 rounded-full bg-gradient-to-r from-orange-300/75 to-orange-400/75 absolute right-2"></div>
            <div class="h-2 w-2 rounded-full glass absolute right-3 transition animate-ping"></div>
            <div class="h-2/4 w-[90%] rounded-full bg-gradient-to-r from-orange-300/75 to-orange-400/75 absolute blur-lg -z-10"></div>
            <div class="mr-5 text-gray-500 dark:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-gray-500 dark:text-white">
                warning
              </h6>
              <span class="text-xs text-gray-500 dark:text-white mt-2">
                This is warning alert
              </span>
            </div>
          </div>
    
          <!-- Info Alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
            <div class="h-4 w-4 rounded-full bg-gradient-to-r from-blue-300/75 to-blue-400/75 absolute right-2"></div>
            <div class="h-2 w-2 rounded-full glass absolute right-3 transition animate-ping"></div>
            <div class="h-2/4 w-[90%] rounded-full bg-gradient-to-r from-blue-300/75 to-blue-400/75 absolute blur-lg -z-10"></div>
            <div class="mr-5 text-gray-500 dark:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-gray-500 dark:text-white">
                info
              </h6>
              <span class="text-xs text-gray-500 dark:text-white mt-2">
                This is info alert
              </span>
            </div>
          </div>
    
          <!-- Danger Alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
            <div class="h-4 w-4 rounded-full bg-gradient-to-r from-red-300/75 to-red-400/75 absolute right-2"></div>
            <div class="h-2 w-2 rounded-full glass absolute right-3 transition animate-ping"></div>
            <div class="h-2/4 w-[90%] rounded-full bg-gradient-to-r from-red-300/75 to-red-400/75 absolute blur-lg -z-10"></div>
            <div class="mr-5 text-gray-500 dark:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-gray-500 dark:text-white">
                danger
              </h6>
              <span class="text-xs text-gray-500 dark:text-white mt-2">
                This is danger alert
              </span>
            </div>
          </div>
    
          <!-- Light Alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
            <div class="h-4 w-4 rounded-full bg-gradient-to-r from-slate-300/75 to-slate-400/75 absolute right-2"></div>
            <div class="h-2 w-2 rounded-full glass absolute right-3 transition animate-ping"></div>
            <div class="h-2/4 w-[90%] rounded-full bg-gradient-to-r from-slate-300/75 to-slate-400/75 absolute blur-lg -z-10"></div>
            <div class="mr-5 text-gray-500 dark:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-gray-500 dark:text-white">
                light
              </h6>
              <span class="text-xs text-gray-500 dark:text-white mt-2">
                This is light alert
              </span>
            </div>
          </div>
    
          <!-- Dark Alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
            <div class="h-4 w-4 rounded-full bg-gradient-to-r from-slate-700/80 to-slate-800/80 absolute right-2"></div>
            <div class="h-2 w-2 rounded-full glass absolute right-3 transition animate-ping"></div>
            <div class="h-2/4 w-[90%] rounded-full bg-gradient-to-r from-slate-700/80 to-slate-800/80 absolute blur-lg -z-10"></div>
            <div class="mr-5 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                dark
              </h6>
              <span class="text-xs text-white mt-2">
                This is dark alert
              </span>
            </div>
          </div>
    
          <!-- Primary Alert -->
          <div class="flex items-center w-full justify-start p-4 my-2 glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
            <div class="h-4 w-4 rounded-full bg-primary-light absolute right-2"></div>
            <div class="h-2 w-2 rounded-full glass absolute right-3 transition animate-ping"></div>
            <div class="h-2/4 w-[90%] rounded-full bg-primary-light absolute blur-lg -z-10"></div>
            <div class="mr-5 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
              </svg>
            </div>
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                primary
              </h6>
              <span class="text-xs text-white mt-2">
                This is primary alert
              </span>
            </div>
          </div>
        </div>
      </div>

      <!-- dismiss alerts -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Dismiss alerts
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <!-- Success alert -->
          <div 
            x-data="{show : true}" 
            x-show="show"
            x-transition:leave="transition-all transform ease-in-out"
            x-transition:leave-start="translate-y-0 duration-500 opacity-100"
            x-transition:leave-end="-translate-y-1/2 duration-500 opacity-0"
            class="flex items-center w-full justify-between p-4 my-2 bg-green-400/95 rounded-xl" 
          >
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                success
              </h6>
              <span class="text-xs text-white mt-2">
                This is success alert
              </span>
            </div>
            <div>
              <button class="w-4 h-4 text-white" @click="show = !show">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
    
          <!-- Warning Alert -->
          <div 
            x-data="{show : true}" 
            x-show="show"
            x-transition:leave="transition-all transform ease-in-out"
            x-transition:leave-start="translate-y-0 duration-500 opacity-100"
            x-transition:leave-end="-translate-y-1/2 duration-500 opacity-0"
            class="flex items-center w-full justify-between p-4 my-2 bg-orange-400/95 rounded-xl"
          >
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                warning
              </h6>
              <span class="text-xs text-white mt-2">
                This is warning alert
              </span>
            </div>
            <div>
              <button class="w-4 h-4 text-white" @click="show = !show">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
    
          <!-- Info Alert -->
          <div 
            x-data="{show : true}" 
            x-show="show"
            x-transition:leave="transition-all transform ease-in-out"
            x-transition:leave-start="translate-y-0 duration-500 opacity-100"
            x-transition:leave-end="-translate-y-1/2 duration-500 opacity-0"
            class="flex items-center w-full justify-between p-4 my-2 bg-blue-400/95 rounded-xl"
          >
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                info
              </h6>
              <span class="text-xs text-white mt-2">
                This is info alert
              </span>
            </div>
            <div>
              <button class="w-4 h-4 text-white" @click="show = !show">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
    
          <!-- Danger Alert -->
          <div 
            x-data="{show : true}" 
            x-show="show"
            x-transition:leave="transition-all transform ease-in-out"
            x-transition:leave-start="translate-y-0 duration-500 opacity-100"
            x-transition:leave-end="-translate-y-1/2 duration-500 opacity-0"
            class="flex items-center w-full justify-between p-4 my-2 bg-red-400/95 rounded-xl"
          >
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                danger
              </h6>
              <span class="text-xs text-white mt-2">
                This is danger alert
              </span>
            </div>
            <div>
              <button class="w-4 h-4 text-white" @click="show = !show">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
    
          <!-- Light Alert -->
          <div 
            x-data="{show : true}" 
            x-show="show"
            x-transition:leave="transition-all transform ease-in-out"
            x-transition:leave-start="translate-y-0 duration-500 opacity-100"
            x-transition:leave-end="-translate-y-1/2 duration-500 opacity-0"
            class="flex items-center w-full justify-between p-4 my-2 bg-slate-400/95 rounded-xl"
          >
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                light
              </h6>
              <span class="text-xs text-white mt-2">
                This is light alert
              </span>
            </div>
            <div>
              <button class="w-4 h-4 text-white" @click="show = !show">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
    
          <!-- Dark Alert -->
          <div 
            x-data="{show : true}" 
            x-show="show"
            x-transition:leave="transition-all transform ease-in-out"
            x-transition:leave-start="translate-y-0 duration-500 opacity-100"
            x-transition:leave-end="-translate-y-1/2 duration-500 opacity-0"
            class="flex items-center w-full justify-between p-4 my-2 bg-slate-700/95 rounded-xl"
          >
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                dark
              </h6>
              <span class="text-xs text-white mt-2">
                This is dark alert
              </span>
            </div>
            <div>
              <button class="w-4 h-4 text-white" @click="show = !show">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
    
          <!-- Primary Alert -->
          <div 
            x-data="{show : true}" 
            x-show="show"
            x-transition:leave="transition-all transform ease-in-out"
            x-transition:leave-start="translate-y-0 duration-500 opacity-100"
            x-transition:leave-end="-translate-y-1/2 duration-500 opacity-0"
            class="flex items-center w-full justify-between p-4 my-2 bg-primary rounded-xl"
          >
            <div>
              <h6 class="text-sm font-extrabold uppercase text-white">
                primary
              </h6>
              <span class="text-xs text-white mt-2">
                This is primary alert
              </span>
            </div>
            <div>
              <button class="w-4 h-4 text-white" @click="show = !show">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection