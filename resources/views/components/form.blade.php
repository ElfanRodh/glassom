@extends('layouts.master')

@section('content')
<!-- Main content -->
<main class="z-0">
  <!-- Content -->
  <div class="my-2 rounded-xl">
    <div class="grid grid-cols-1 gap-8 py-4 lg:grid-cols-2">

      <!-- Form Example -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Form Example
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            <form>
              <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-200">Your email</label>
                <input type="email" id="email" class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-sm rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300" placeholder="example@rodhigital.com" required="">
              </div>
              <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-200">Your password</label>
                <input type="password" id="password" class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-sm rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300" placeholder="Input Password" required="">
              </div>
              <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                  <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 glass dark:glass-dark backdrop-blur-[40px] rounded-lg" required="">
                </div>
                <div class="ml-3 text-sm">
                  <label for="remember" class="font-medium text-gray-500 dark:text-gray-200">Remember me</label>
                </div>
              </div>
              <button type="submit" class="px-4 py-2 m-1 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-primary-light to-primary hover:scale-110 transition ease-in-out duration-150">Submit</button>
            </form>
          </div>

        </div>
      </div>

      <!-- Floating Form -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Floating Form
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            <form>
              <div class="relative z-0 mb-6 w-full group">
                <input type="email" name="floating_email" class="block py-2.5 px-1 w-full text-sm text-gray-500 dark:text-gray-200 bg-transparent border-0 border-b-2 border-primary-100 dark:border-primary-100 appearance-none focus:border-primary-lighter dark:focus:border-primary-light focus:outline-none focus:ring-0 peer" placeholder=" " required="">
                <label for="floating_email" class="absolute text-sm text-gray-500 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary peer-focus:dark:text-primary-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
              </div>
              <div class="relative z-0 mb-6 w-full group">
                <input type="password" name="floating_password" id="floating_password" class="block py-2.5 px-1 w-full text-sm text-gray-500 dark:text-gray-200 bg-transparent border-0 border-b-2 border-primary-100 dark:border-primary-100 appearance-none focus:border-primary-lighter dark:focus:border-primary-light focus:outline-none focus:ring-0 peer" placeholder=" " required="">
                <label for="floating_password" class="absolute text-sm text-gray-500 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary peer-focus:dark:text-primary-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
              </div>
              <div class="relative z-0 mb-6 w-full group">
                <input type="password" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-1 w-full text-sm text-gray-500 dark:text-gray-200 bg-transparent border-0 border-b-2 border-primary-100 dark:border-primary-100 appearance-none focus:border-primary-lighter dark:focus:border-primary-light focus:outline-none focus:ring-0 peer" placeholder=" " required="">
                <label for="floating_repeat_password" class="absolute text-sm text-gray-500 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary peer-focus:dark:text-primary-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Confirm password</label>
              </div>
              <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                  <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-1 w-full text-sm text-gray-500 dark:text-gray-200 bg-transparent border-0 border-b-2 border-primary-100 dark:border-primary-100 appearance-none focus:border-primary-lighter dark:focus:border-primary-light focus:outline-none focus:ring-0 peer" placeholder=" " required="">
                  <label for="floating_first_name" class="absolute text-sm text-gray-500 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary peer-focus:dark:text-primary-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                  <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-1 w-full text-sm text-gray-500 dark:text-gray-200 bg-transparent border-0 border-b-2 border-primary-100 dark:border-primary-100 appearance-none focus:border-primary-lighter dark:focus:border-primary-light focus:outline-none focus:ring-0 peer" placeholder=" " required="">
                  <label for="floating_last_name" class="absolute text-sm text-gray-500 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary peer-focus:dark:text-primary-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                </div>
              </div>
              <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                  <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-1 w-full text-sm text-gray-500 dark:text-gray-200 bg-transparent border-0 border-b-2 border-primary-100 dark:border-primary-100 appearance-none focus:border-primary-lighter dark:focus:border-primary-light focus:outline-none focus:ring-0 peer" placeholder=" " required="">
                  <label for="floating_phone" class="absolute text-sm text-gray-500 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary peer-focus:dark:text-primary-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                  <input type="text" name="floating_company" id="floating_company" class="block py-2.5 px-1 w-full text-sm text-gray-500 dark:text-gray-200 bg-transparent border-0 border-b-2 border-primary-100 dark:border-primary-100 appearance-none focus:border-primary-lighter dark:focus:border-primary-light focus:outline-none focus:ring-0 peer" placeholder=" " required="">
                  <label for="floating_company" class="absolute text-sm text-gray-500 dark:text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary peer-focus:dark:text-primary-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company (Ex. Google)</label>
                </div>
              </div>
              <button type="submit" class="px-4 py-2 m-1 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-primary-light to-primary hover:scale-110 transition ease-in-out duration-150">Submit</button>
            </form>
          </div>
        </div>
      </div>
      
      <!-- Inline Form -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Inline Form
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            <form>
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/4">
                  <label class="block text-gray-500 dark:text-gray-200 font-medium md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                    Full Name
                  </label>
                </div>
                <div class="md:w-3/4">
                  <input class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-sm rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300" id="inline-full-name" type="text" value="Jane Doe">
                </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/4">
                  <label class="block text-gray-500 dark:text-gray-200 font-medium md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                    Password
                  </label>
                </div>
                <div class="md:w-3/4">
                  <input class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-sm rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300" id="inline-password" type="password" placeholder="******************">
                </div>
              </div>
              <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/4"></div>
                <label class="md:w-3/4 block text-gray-500 dark:text-gray-200 font-medium">
                  <input class="mr-2 leading-tight" type="checkbox">
                  <span class="text-sm">
                    Send me your newsletter!
                  </span>
                </label>
              </div>
              <div class="md:flex md:items-center">
                <div class="md:w-1/4"></div>
                <div class="md:w-3/4">
                  <button class="px-4 py-2 m-1 min-w-24 text-sm text-white rounded-md bg-gradient-to-r from-primary-light to-primary hover:scale-110 transition ease-in-out duration-150" type="button">
                    Sign Up
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Form Sizing -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Form Sizing
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            
            <div class="mb-6">
              <label for="large-input" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-200">Large input</label>
              <input type="text" id="large-input" class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-lg rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300">
            </div>
            <div class="mb-6">
              <label for="medium-input" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-200">Medium input</label>
              <input type="text" id="medium-input" class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-md rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300">
            </div>
            <div class="mb-6">
              <label for="small-input" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-200">Small input</label>
              <input type="text" id="small-input" class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-sm rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300">
            </div>
            <div class="mb-6">
              <label for="x-small-input" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-200">Extra Small input</label>
              <input type="text" id="x-small-input" class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-sm rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300">
            </div>

          </div>
        </div>
      </div>
      
      <!-- Helper Text -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Helper Text
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-200">Your email</label>
            <input type="email" id="email" class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-sm rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300" placeholder="example@rodhigital.com">
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
              We’ll never share your details. Read our 
              <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Privacy Policy</a>
              .
            </p>
          </div>
        </div>
      </div>

      <!-- Input element with icon -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Input element with icon
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            
            <label for="email-adress-icon" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-200">Your Email</label>
            <div class="relative mt-1">
              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
              </div>
              <input type="text" id="email-adress-icon" class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-sm rounded-lg w-full p-2 pl-10 placeholder:text-gray-400 dark:placeholder:text-gray-300" placeholder="example@rodhigital.com">
            </div>

          </div>
        </div>
      </div>
      
      <!-- Success and error validation -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Success and error validation
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            
            <div class="mb-6">
              <label for="username-success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Your name</label>
              <input type="text" id="username-success" class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-green-100 dark:border-green-400" placeholder="Bonnie Green">
              <p class="mt-2 text-sm text-green-600 dark:text-green-500">
                <span class="font-medium">Alright!</span> Username available!
              </p>
            </div>
            <div>
              <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Your name</label>
              <input type="text" id="username-error" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2 dark:bg-red-100 dark:border-red-400" placeholder="Bonnie Green">
              <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                <span class="font-medium">Oops!</span> Username already taken!
              </p>
            </div>

          </div>
        </div>
      </div>
      
      <!-- Textarea -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Textarea
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            
            <label for="message" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-200">Your message</label>
            <textarea id="message" rows="4" class="glass dark:glass-dark backdrop-blur-[40px] text-gray-500 dark:text-gray-200 text-sm rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300" placeholder="Leave a comment..."></textarea>

          </div>
        </div>
      </div>
      
      <!-- Select -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Select
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-500 dark:text-gray-200">Select your country</label>
            <select id="countries" class="bg-gray-50 dark:bg-gray-700 text-gray-500 dark:text-gray-200 text-sm rounded-lg w-full p-2 placeholder:text-gray-400 dark:placeholder:text-gray-300">
              <option>United States</option>
              <option>Canada</option>
              <option>France</option>
              <option>Germany</option>
            </select>

          </div>
        </div>
      </div>
      
      <!-- Checkbox -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Checkbox
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            
            <fieldset>
              <legend class="sr-only">Checkbox variants</legend>
              <div class="flex items-center mb-4">
                <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked="">
                <label for="checkbox-1" class="ml-3 text-sm font-medium text-gray-500 dark:text-gray-200">I agree to the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
              </div>
              <div class="flex items-center mb-4">
                <input id="checkbox-2" aria-describedby="checkbox-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checkbox-2" class="ml-3 text-sm font-medium text-gray-500 dark:text-gray-200">I want to get promotional offers</label>
              </div>
              <div class="flex items-center mb-4">
                <input id="checkbox-3" aria-describedby="checkbox-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checkbox-3" class="ml-3 text-sm font-medium text-gray-500 dark:text-gray-200">I am 18 years or older</label>
              </div>
              <div class="flex mb-4">
                <div class="flex items-center h-5">
                  <input id="shipping-2" aria-describedby="shipping-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </div>
                <div class="ml-3 text-sm">
                  <label for="shipping-2" class="font-medium text-gray-500 dark:text-gray-200">Free shipping via Flowbite</label>
                  <div class="text-gray-500 dark:text-gray-300"><span class="text-xs font-normal">For orders shipped from Flowbite from <span class="font-medium">€ 25</span> in books or <span>€ 29</span> on other categories</span></div>
                </div>
              </div>
              <div class="flex items-center">
                <input id="international-shipping-disabled" aria-describedby="international-shipping-disabled" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" disabled="">
                <label for="international-shipping-disabled" class="ml-3 text-sm font-medium text-gray-400 dark:text-gray-400">Eligible for international shipping (disabled)</label>
              </div>
            </fieldset>

          </div>
        </div>
      </div>
      
      <!-- Radio -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Radio
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            
            <fieldset>
              <legend class="sr-only">Countries</legend>
              <div class="flex items-center mb-4">
                <input id="country-option-1" type="radio" name="countries" value="USA" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-1" aria-describedby="country-option-1" checked="">
                <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-500 dark:text-gray-200">
                  United States
                </label>
              </div>
              <div class="flex items-center mb-4">
                <input id="country-option-2" type="radio" name="countries" value="Germany" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-2" aria-describedby="country-option-2">
                <label for="country-option-2" class="block ml-2 text-sm font-medium text-gray-500 dark:text-gray-200">
                  Germany
                </label>
              </div>
              <div class="flex items-center mb-4">
                <input id="country-option-3" type="radio" name="countries" value="Spain" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-3" aria-describedby="country-option-3">
                <label for="country-option-3" class="block ml-2 text-sm font-medium text-gray-500 dark:text-gray-200">
                  Spain
                </label>
              </div>
              <div class="flex items-center mb-4">
                <input id="country-option-4" type="radio" name="countries" value="United Kingdom" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring:blue-300 dark:focus-ring-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-4" aria-describedby="country-option-4">
                <label for="country-option-4" class="block ml-2 text-sm font-medium text-gray-500 dark:text-gray-200">
                  United Kingdom
                </label>
              </div>
              <div class="flex items-center">
                <input id="option-disabled" type="radio" name="countries" value="China" class="w-4 h-4 border-gray-200 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="option-disabled" aria-describedby="option-disabled" disabled="">
                <label for="option-disabled" class="block ml-2 text-sm font-medium text-gray-400 dark:text-gray-400">
                  China (disabled)
                </label>
              </div>
            </fieldset>

          </div>
        </div>
      </div>
      
      <!-- Toggle -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">
            Toggle
          </h4>
        </div>
        <div class="flex flex-wrap p-4 justify-center md:justify-start">
          <div class="w-full">
            
            <div>
              <label for="toggle-example" class="flex relative items-center mb-4 cursor-pointer" x-cloak x-data="{ isToggle : false, }" @click="isToggle = !isToggle">
                <div class="w-11 h-6 bg-gray-200 rounded-full border border-gray-200 toggle-bg dark:bg-gray-500 dark:border-gray-600"></div>
                <div
                  class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-150 transform scale-110 rounded-full shadow-sm cursor-pointer"
                  :class="{ 'translate-x-0 -translate-y-p text-slate-700 bg-white': !isToggle, 'translate-x-6 text-slate-100 bg-slate-700': isToggle }"
                >
                  <svg x-show="!isToggle" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                  <svg x-show="isToggle" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Toggle me</span>
              </label>
              <input type="checkbox" id="toggle-example" class="sr-only">
            </div>

            <div>
              <label for="toggle-example-2" class="flex relative items-center mb-4 cursor-pointer" x-cloak x-data="{ isToggle : true, }" @click="isToggle = !isToggle">
                <div class="w-11 h-6 bg-gray-200 rounded-full border border-gray-200 toggle-bg dark:bg-gray-500 dark:border-gray-600"></div>
                <div
                  class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-150 transform scale-110 rounded-full shadow-sm cursor-pointer"
                  :class="{ 'translate-x-0 -translate-y-p text-slate-700 bg-white': !isToggle, 'translate-x-6 text-slate-100 bg-slate-700': isToggle }"
                >
                </div>
                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Toggle me (checked)</span>
              </label>
              <input type="checkbox" id="toggle-example-2" class="sr-only" checked>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection