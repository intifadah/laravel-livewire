<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <livewire:styles />
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased">
  <!-- Navbar goes here -->
  <nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between">
        <div class="flex space-x-7">
          <div>
            <!-- Website Logo -->
            <a href="{{config('app.url')}}" class="flex items-center py-4 px-2">
              <img src="favicon.ico" alt="Logo" class="h-8 w-8 mr-2">
              <span class="font-semibold text-gray-500 text-lg">{{config('app.name')}}</span>
            </a>
          </div>
          <!-- Primary Navbar items -->
          <div class="hidden md:flex items-center space-x-1">
            <a href="/counter"
              class="py-4 px-2 text-gray-500 font-semibold {{ (Route::is('counter') || Route::is('welcome')) ? 'text-green-500 border-b-4 border-green-500' : 'hover:text-green-500 transition duration-300' }}">Counter</a>
            <a href="/calculator"
              class="py-4 px-2 text-gray-500 font-semibold {{ (request()->is('calculator')) ? 'text-green-500 border-b-4 border-green-500' : 'hover:text-green-500 transition duration-300' }}">Calculator</a>
            <a href="/todo-list"
              class="py-4 px-2 text-gray-500 font-semibold {{ (request()->is('todo-list')) ? 'text-green-500 border-b-4 border-green-500' : 'hover:text-green-500 transition duration-300' }}">TodoList</a>
            <a href="/cascading-dropdown"
              class="py-4 px-2 text-gray-500 font-semibold {{ (request()->is('cascading-dropdown')) ? 'text-green-500 border-b-4 border-green-500' : 'hover:text-green-500 transition duration-300' }}">Cascading</a>
            <a href="/products" class="py-4 px-2 text-gray-500 font-semibold" {{ (request()->is('products')) ?
              'border-b-4 border-green-500' : 'hover:text-green-500 transition duration-300' }}">Products</a>
            <a href="/image-upload"
              class="py-4 px-2 text-gray-500 font-semibold {{ (request()->is('image-upload')) ? 'text-green-500 border-b-4 border-green-500' : 'hover:text-green-500 transition duration-300' }}">Image</a>
          </div>
        </div>
        <!-- Secondary Navbar items -->
        <div class="hidden md:flex items-center space-x-3 ">
          <a href=""
            class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log
            In</a>
          <a href="register"
            class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300" {{
            (request()->is('register')) ? 'border-b-4 border-green-500' : '' }}">Sign Up</a>
        </div>
        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button class="outline-none mobile-menu-button">
            <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
      <ul class="">
        <li class="active"><a href="index.html"
            class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
        <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Services</a>
        </li>
        <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About</a></li>
        <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a>
        </li>
      </ul>
    </div>
    <script>
      const btn = document.querySelector("button.mobile-menu-button");
          const menu = document.querySelector(".mobile-menu");
  
          btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
          });
    </script>
  </nav>

  {{ $slot }}

  <livewire:scripts />
</body>

</html>