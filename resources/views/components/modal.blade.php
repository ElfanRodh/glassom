@extends('layouts.master')

@section('content')
<!-- Main content -->
<main>
  <!-- Content -->
  <div class="my-2 rounded-xl">
    <div class="grid grid-cols-1 gap-8 py-4 lg:grid-cols-2">
      
      <!-- Default Example -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b border-gray-500 dark:border-gray-200 border-opacity-50">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Default Example
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            <button class="px-4 py-2 m-1 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150" data-modal-toggle="defaultModal">
              Toggle Modal
            </button>
          </div>
        </div>
      </div>
      
      <!-- Popup Modal -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b border-gray-500 dark:border-gray-200 border-opacity-50">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Popup Modal
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            <button class="px-4 py-2 m-1 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150" data-modal-toggle="popupModal">
              Toggle Modal
            </button>
          </div>
        </div>
      </div>
      
      <!-- Form Modal -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b border-gray-500 dark:border-gray-200 border-opacity-50">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Form Modal
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            <button class="px-4 py-2 m-1 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150" data-modal-toggle="formModal">
              Toggle Modal
            </button>
          </div>
        </div>
      </div>

      <!-- Modal Sizing -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b border-gray-500 dark:border-gray-200 border-opacity-50">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Modal Sizing
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            <button class="px-4 py-2 m-1 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150" data-modal-toggle="smallModal">
              Small Modal
            </button>
            <button class="px-4 py-2 m-1 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150" data-modal-toggle="mediumModal">
              Default Modal
            </button>
            <button class="px-4 py-2 m-1 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150" data-modal-toggle="largeModal">
              Large Modal
            </button>
            <button class="px-4 py-2 m-1 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-blue-300 to-blue-400 hover:scale-110 transition ease-in-out duration-150" data-modal-toggle="extraLargeModal">
              Extra Large Modal
            </button>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</main>
<div class="z-40">
  <!-- defaultModal -->
  <div id="defaultModal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center modal md:h-full md:inset-0">
    <div class="relative px-4 w-full max-w-2xl h-full md:h-auto">
      <div class="relative glass dark:glass-dark backdrop-blur-[40px] rounded-xl shadow">
        <!-- Modal header -->
        <div class="flex items-start justify-between p-4 border-b border-gray-500 dark:border-gray-200 border-opacity-50">
          <h3 class="text-lg font-semibold text-gray-500 dark:text-gray-200">
            Modal Header
          </h3>
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
        <!-- Modal Body -->
        <div class="flex flex-wrap text-sm font-thin text-justify p-4 justify-center md:justify-start">
          <span class="w-full mb-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, magnam nihil dolores impedit veritatis officiis aliquid laudantium quaerat et veniam.
          </span>
          <div class="w-36 h-36 glass dark:glass-dark backdrop-blur-[40px] rounded-xl m-auto p-2 -rotate-6 z-0">
            <div class="absolute m-auto">
              <img src="https://pixinvent.com/demo/vuexy-vuejs-laravel-admin-template/demo-4/images/slider/03.jpg" class="w-36 h-36 object-cover rounded-xl -rotate-12 m-auto" alt="">
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
          <button class="px-4 py-2 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">
            Submit
          </button>
          <button data-modal-toggle="defaultModal" type="button" class="px-4 py-2 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-slate-600 to-slate-700 hover:scale-110 transition ease-in-out duration-150">
            Cancel
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- popupModal -->
  <div id="popupModal" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 modal sm:h-full" aria-hidden="true">
    <div class="relative px-4 w-full max-w-md h-full md:h-auto">
      <div class="relative glass dark:glass-dark backdrop-blur-[40px] rounded-xl shadow">
      
        <div class="flex justify-end p-2">
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popupModal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
      
        <div class="p-6 pt-0 text-center">
          <svg class="mx-auto mb-4 w-14 h-14 text-gray-500 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-200">Are you sure you want to delete this product?</h3>
          <button data-modal-toggle="popupModal" type="button" class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-red-300 to-red-400 hover:scale-110 transition ease-in-out duration-150">
            Yes, I'm sure
          </button>
          <button data-modal-toggle="popupModal" type="button" class="px-4 py-2 m-1 min-w-24 text-xs text-white rounded-md bg-gradient-to-r from-slate-600 to-slate-700 hover:scale-110 transition ease-in-out duration-150">
            No, cancel
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- formModal -->
  <div id="formModal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center modal md:h-full md:inset-0">
    <div class="relative px-4 w-full max-w-md h-full md:h-auto">
      <div class="relative glass dark:glass-dark backdrop-blur-[40px] rounded-xl shadow">
        <div class="flex justify-end p-2">
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="formModal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
        <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
          <h3 class="text-xl font-medium text-gray-500 dark:text-gray-200">Sign in to our platform</h3>
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-200">Your email</label>
            <input type="email" name="email" id="email" class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-sm rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300" placeholder="example@rodhigital.com" required="">
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-200">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-sm rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300" required="">
          </div>
          <div class="flex justify-between">
            <div class="flex items-start">
              <div class="flex items-center h-5">
                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required="">
              </div>
              <div class="ml-3 text-sm">
                <label for="remember" class="font-medium text-gray-500 dark:text-gray-200">Remember me</label>
              </div>
            </div>
            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
          </div>
          <button type="submit" class="w-full px-4 py-2 m-1 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">
            Login to your account
          </button>
          <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Small Modal -->
  <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 modal sm:h-full" id="smallModal">
    <div class="relative px-4 w-full max-w-md h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative glass dark:glass-dark backdrop-blur-[40px] rounded-xl shadow">
        <!-- Modal header -->
        <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
          <h3 class="text-xl font-medium text-gray-500 dark:text-gray-200">
            Small modal
          </h3>
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="smallModal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
          <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-200">
            With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
          </p>
          <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-200">
            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
          </p>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
          <button data-modal-toggle="smallModal" type="button" class="px-4 py-2 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">I accept</button>
          <button data-modal-toggle="smallModal" type="button" class="px-4 py-2 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-slate-600 to-slate-700 hover:scale-110 transition ease-in-out duration-150">Decline</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Default Modal -->
  <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 modal sm:h-full" id="mediumModal">
    <div class="relative px-4 w-full max-w-lg h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative glass dark:glass-dark backdrop-blur-[40px] rounded-xl shadow">
        <!-- Modal header -->
        <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
          <h3 class="text-xl font-medium text-gray-500 dark:text-gray-200">
            Default modal
          </h3>
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="mediumModal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
          <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-200">
            With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
          </p>
          <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-200">
            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
          </p>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
          <button data-modal-toggle="mediumModal" type="button" class="px-4 py-2 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">I accept</button>
          <button data-modal-toggle="mediumModal" type="button" class="px-4 py-2 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-slate-600 to-slate-700 hover:scale-110 transition ease-in-out duration-150">Decline</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Large Modal -->
  <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 modal sm:h-full" id="largeModal">
    <div class="relative px-4 w-full max-w-4xl h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative glass dark:glass-dark backdrop-blur-[40px] rounded-xl shadow">
        <!-- Modal header -->
        <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
          <h3 class="text-xl font-medium text-gray-500 dark:text-gray-200">
            Large modal
          </h3>
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="largeModal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
          <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-200">
            With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
          </p>
          <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-200">
            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
          </p>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
          <button data-modal-toggle="largeModal" type="button" class="px-4 py-2 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">I accept</button>
          <button data-modal-toggle="largeModal" type="button" class="px-4 py-2 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-slate-600 to-slate-700 hover:scale-110 transition ease-in-out duration-150">Decline</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Extra Large Modal -->
  <div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 modal sm:h-full" id="extraLargeModal">
    <div class="relative px-4 w-full max-w-7xl h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative glass dark:glass-dark backdrop-blur-[40px] rounded-xl shadow">
        <!-- Modal header -->
        <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
          <h3 class="text-xl font-medium text-gray-500 dark:text-gray-200">
            Extra Large modal
          </h3>
          <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="extraLargeModal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
          <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-200">
            With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
          </p>
          <p class="text-sm leading-relaxed text-gray-500 dark:text-gray-200">
            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
          </p>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
          <button data-modal-toggle="extraLargeModal" type="button" class="px-4 py-2 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-green-300 to-green-400 hover:scale-110 transition ease-in-out duration-150">I accept</button>
          <button data-modal-toggle="extraLargeModal" type="button" class="px-4 py-2 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-slate-600 to-slate-700 hover:scale-110 transition ease-in-out duration-150">Decline</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripting')
<script>
  const toggleModal = (modalId, show = true) => {
    const modalEl = document.getElementById(modalId);

    if (show) {
      modalEl.classList.add('flex');
      modalEl.classList.remove('hidden');
      modalEl.setAttribute('aria-modal', 'true');
      modalEl.setAttribute('role', 'dialog');
      modalEl.removeAttribute('aria-hidden'); // create backdrop element

      var backdropEl = document.createElement('div');
      backdropEl.setAttribute('modal-backdrop', '');
      backdropEl.classList.add('bg-primary-darker', 'opacity-25', 'fixed', 'inset-0', 'z-20', 'w-screen', 'h-screen');
      document.querySelector('body').append(backdropEl);
    } else {
      modalEl.classList.add('hidden');
      modalEl.classList.remove('flex');
      modalEl.setAttribute('aria-hidden', 'true');
      modalEl.removeAttribute('aria-modal');
      modalEl.removeAttribute('role');
      document.querySelector('[modal-backdrop]').remove();
    }
  };

  window.toggleModal = toggleModal;
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-modal-toggle]').forEach(function (modalToggleEl) {
      var modalId = modalToggleEl.getAttribute('data-modal-toggle');
      var modalEl = document.getElementById(modalId);

      if (modalEl) {
        if (!modalEl.hasAttribute('aria-hidden') && !modalEl.hasAttribute('aria-modal')) {
          modalEl.setAttribute('aria-hidden', 'true');
        }

        modalToggleEl.addEventListener('click', function () {
          toggleModal(modalId, modalEl.hasAttribute('aria-hidden', 'true'));
        });
      }
    });
  });
</script>
@endsection