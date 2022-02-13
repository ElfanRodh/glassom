@extends('layouts.master')

@section('content')
<!-- Main content -->
<main class="z-0">
  <!-- Content -->
  <div class="my-2 rounded-xl">
    <div class="grid grid-cols-1 gap-8 py-4 lg:grid-cols-2">

      <!-- Default Example -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Default Example
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            
            <ul class="text-sm font-medium text-gray-500 dark:text-gray-200 glass dark:glass-dark backdrop-blur-[40px] rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
              <li class="py-2 px-4 w-full rounded-t-lg border-b border-gray-300 dark:border-gray-300">Profile</li>
              <li class="py-2 px-4 w-full border-b border-gray-300 dark:border-gray-300">Settings</li>
              <li class="py-2 px-4 w-full border-b border-gray-300 dark:border-gray-300">Messages</li>
              <li class="py-2 px-4 w-full rounded-b-lg">Download</li>
            </ul>

          </div>
        </div>
      </div>
      
      <!-- List With Link -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            List With Link
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            
            <ul class="text-sm font-medium text-gray-500 dark:text-gray-200 glass dark:glass-dark backdrop-blur-[40px] rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
              
              <a href="" class="hover:scale-110 transition ease-in-out duration-300">
               <li class="py-2 px-4 w-full rounded-t-lg border-b border-gray-300 dark:border-gray-300">Profile</li>
              </a>
              
              <a href="" class="hover:scale-110 transition ease-in-out duration-300">
                <li class="py-2 px-4 w-full border-b border-gray-300 dark:border-gray-300">Settings</li>
              </a>
              
              <a href="" class="hover:scale-110 transition ease-in-out duration-300">
                <li class="py-2 px-4 w-full border-b border-gray-300 dark:border-gray-300">Messages</li>
              </a>
              
              <a href="" class="hover:scale-110 transition ease-in-out duration-300">
                <li class="py-2 px-4 w-full rounded-b-lg">Download</li>
              </a>
            </ul>

          </div>
        </div>
      </div>
      
      <!-- List Link With Icon -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            List Link With Icon
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            
            <ul class="text-sm font-medium text-gray-500 dark:text-gray-200 glass dark:glass-dark backdrop-blur-[40px] rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
              
              <a href="" class="hover:scale-110 transition ease-in-out duration-300">
                <li class="flex py-2 px-4 w-full rounded-t-lg border-b border-gray-300 dark:border-gray-300">
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </div>
                  Profile
                </li>
              </a>
              
              <a href="" class="hover:scale-110 transition ease-in-out duration-300">
                <li class="flex py-2 px-4 w-full border-b border-gray-300 dark:border-gray-300">
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                  </div>
                  Settings
                </li>
              </a>
              
              <a href="" class="hover:scale-110 transition ease-in-out duration-300">
                <li class="flex py-2 px-4 w-full border-b border-gray-300 dark:border-gray-300">
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                  </div>
                  Messages
                </li>
              </a>
              
              <a href="" class="hover:scale-110 transition ease-in-out duration-300">
                <li class="flex py-2 px-4 w-full rounded-b-lg">
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                  </div>
                  Download
                </li>
              </a>
            </ul>

          </div>
        </div>
      </div>

    </div>
  </div>
</main>
@endsection