@extends('layouts.master')

@section('content')
<!-- Main content -->
<main class="z-0">
  <!-- Content -->
  <div class="my-2 rounded-xl">
    <div class="grid grid-cols-1 gap-8 py-4 lg:grid-cols-2">
      <!-- Default card -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl h-fit">
        <!-- Card header -->
        <div class="flex flex-col items-center justify-between p-4 border-b border-opacity-25 border-primary-lighter">
          <h4 class="text-md w-full font-bold text-gray-500 dark:text-gray-200">
            Default Card Title
          </h4>
          <span class="text-xs w-full mt-1 text-gray-400 dark:text-gray-300">
            Default Card Subtitle
          </span>
        </div>
        <!-- Card Body -->
        <div class="flex flex-wrap text-xs font-thin text-justify p-4 justify-center md:justify-start">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, magnam nihil dolores impedit veritatis officiis aliquid laudantium quaerat et veniam.
        </div>
        <!-- Card footer -->
        <div class="flex items-center justify-end p-4 border-t border-opacity-25 border-primary-lighter">
          <button class="px-4 py-2 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-primary-light to-primary hover:scale-110 transition ease-in-out duration-150">
            Save
          </button>
        </div>
      </div>

      <!-- Card Success -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl h-fit">
        <!-- Card header -->
        <div class="flex flex-col items-center justify-between p-4 border-b border-opacity-25 border-green-400">
          <div class="h-12 w-[95%] rounded-full bg-gradient-to-r from-green-300/75 to-green-400/75 absolute blur-lg -z-10"></div>
          <h4 class="text-md w-full font-bold text-gray-500 dark:text-gray-200">
            Card Success Title
          </h4>
          <span class="text-xs w-full mt-1 text-gray-400 dark:text-gray-300">
            Card Success Subtitle
          </span>
        </div>
        <div class="flex flex-wrap text-xs font-thin text-justify p-4 justify-center md:justify-start">
          <span class="w-2/3 p-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, magnam nihil dolores impedit veritatis officiis aliquid laudantium quaerat et veniam.
          </span>
          <div class="w-1/3 p-1">
            <img src="https://pixinvent.com/demo/vuexy-vuejs-laravel-admin-template/demo-4/images/slider/03.jpg" class="w-42 h p-1-42 object-cover rotate-12 rounded-xl" alt="">
          </div>
        </div>
        <!-- Card footer -->
        <div class="flex items-center justify-end p-4 border-t border-opacity-25 border-green-400">
          <button class="px-4 py-2 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">
            Save
          </button>
        </div>
      </div>

      <!-- Card Warning -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl h-fit">
        <!-- Card header -->
        <div class="flex flex-col items-center justify-between p-4 border-b border-opacity-25 border-orange-400">
          <div class="h-12 w-[95%] rounded-full bg-gradient-to-r from-orange-300/75 to-orange-400/75 absolute blur-lg -z-10"></div>
          <h4 class="text-md w-full font-bold text-gray-500 dark:text-gray-200">
            Card Warning Title
          </h4>
          <span class="text-xs w-full mt-1 text-gray-400 dark:text-gray-300">
            Card Warning Subtitle
          </span>
        </div>
        <div class="flex flex-wrap text-xs font-thin text-justify p-4 justify-center md:justify-start">
          <div class="w-1/3 p-1">
            <img src="https://pixinvent.com/demo/vuexy-vuejs-laravel-admin-template/demo-4/images/slider/03.jpg" class="w-42 h p-1-42 object-cover -rotate-12 rounded-xl" alt="">
          </div>
          <span class="w-2/3 p-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, magnam nihil dolores impedit veritatis officiis aliquid laudantium quaerat et veniam.
          </span>
        </div>
        <!-- Card footer -->
        <div class="flex items-center justify-end p-4 border-t border-opacity-25 border-orange-400">
          <button class="px-4 py-2 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-orange-300 to-orange-400 hover:scale-110 transition ease-in-out duration-150">
            Save
          </button>
        </div>
      </div>
      
      <!-- Card Info -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl h-fit">
        <!-- Card header -->
        <div class="flex flex-col items-center justify-between p-4 border-b border-opacity-25 border-blue-400">
          <div class="h-12 w-[95%] rounded-full bg-gradient-to-r from-blue-300/75 to-blue-400/75 absolute blur-lg -z-10"></div>
          <h4 class="text-md w-full font-bold text-gray-500 dark:text-gray-200">
            Card Info Title
          </h4>
          <span class="text-xs w-full mt-1 text-gray-400 dark:text-gray-300">
            Card Info Subtitle
          </span>
        </div>
        <div class="flex flex-wrap text-xs font-thin text-justify p-4 justify-center md:justify-start">
          <span class="w-full my-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, magnam nihil dolores impedit veritatis officiis aliquid laudantium quaerat et veniam.
          </span>
          <div class="max-w-xs mx-auto my-1 p-2">
            <img src="https://pixinvent.com/demo/vuexy-vuejs-laravel-admin-template/demo-4/images/slider/03.jpg" class="w-36 h-36 object-cover -rotate-12 rounded-full" alt="">
          </div>
          <span class="w-full my-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, magnam nihil dolores impedit veritatis officiis aliquid laudantium quaerat et veniam.
          </span>
        </div>
        <!-- Card footer -->
        <div class="flex items-center justify-end p-4 border-t border-opacity-25 border-blue-400">
          <button class="px-4 py-2 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150">
            Save
          </button>
        </div>
      </div>
      
      <!-- Card Danger -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl h-fit">
        <!-- Card header -->
        <div class="flex flex-col items-center justify-between p-4 border-b border-opacity-25 border-red-400">
          <div class="h-12 w-[95%] rounded-full bg-gradient-to-r from-red-300/75 to-red-400/75 absolute blur-lg -z-10"></div>
          <h4 class="text-md w-full font-bold text-gray-500 dark:text-gray-200">
            Card Danger Title
          </h4>
          <span class="text-xs w-full mt-1 text-gray-400 dark:text-gray-300">
            Card Danger Subtitle
          </span>
        </div>
        <div class="flex flex-wrap text-xs font-thin text-justify p-4 justify-center md:justify-start">
          <span class="w-full">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, magnam nihil dolores impedit veritatis officiis aliquid laudantium quaerat et veniam.
          </span>
          <div class="mt-2 max-w-sm m-auto">
            <img src="https://pixinvent.com/demo/vuexy-vuejs-laravel-admin-template/demo-4/images/slider/03.jpg" class="max-w-full rounded-xl" alt="">
          </div>
        </div>
        <!-- Card footer -->
        <div class="flex items-center justify-end p-4 border-t border-opacity-25 border-red-400">
          <button class="px-4 py-2 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-red-300 to-red-400 hover:scale-110 transition ease-in-out duration-150">
            Save
          </button>
        </div>
      </div>

      <!-- Card Dark -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl h-fit">
        <!-- Card header -->
        <div class="flex flex-col items-center justify-between p-4 border-b border-opacity-25 border-slate-400">
          <div class="h-12 w-[95%] rounded-full bg-gradient-to-r from-slate-600/75 to-slate-700/75 absolute blur-lg -z-10"></div>
          <h4 class="text-md w-full font-bold text-gray-200 dark:text-gray-200">
            Card Dark Title
          </h4>
          <span class="text-xs w-full mt-1 text-gray-300 dark:text-gray-300">
            Card Dark Subtitle
          </span>
        </div>
        <div class="flex flex-wrap text-xs font-thin text-justify p-4 justify-center md:justify-start">
          <div class="w-36 h-36 glass dark:glass-dark backdrop-blur-[40px] rounded-xl m-auto -rotate-6 z-0">
            <div class="absolute m-auto">
              <img src="https://pixinvent.com/demo/vuexy-vuejs-laravel-admin-template/demo-4/images/slider/03.jpg" class="w-36 h-36 object-cover rounded-xl -rotate-12 m-auto" alt="">
            </div>
          </div>
        </div>
        <!-- Card footer -->
        <div class="flex items-center justify-end p-4 border-t border-opacity-25 border-slate-700">
          <button class="px-4 py-2 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-slate-600 to-slate-700 hover:scale-110 transition ease-in-out duration-150">
            Save
          </button>
        </div>
      </div>

    </div>
  </div>
</main>
@endsection