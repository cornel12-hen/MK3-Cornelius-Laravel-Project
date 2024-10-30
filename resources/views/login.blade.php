<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    @vite('resources/css/app.css')
  </head>
  <body class="">
    <nav class="bg-black p-4 px-16 h-[10vh] flex justify-between items-center">
      <div class="text-white text-2xl font-bold">
          CHW
      </div>
      <div class="space-x-6">
          <a href="{{ route('home') }}" class="text-white">Home</a>
          <a href="{{ route('about') }}" class="text-white">About</a>
          <a href="{{ route('login') }}" class="text-white">Login</a>
      </div>
    </nav>
    <div class="flex justify-center bg-slate-100 pt-48 h-[90vh]">
      <form id="loginForm" class="bg-white shadow-lg rounded-lg w-[40vh] h-fit p-8 gap-4 flex flex-col items-center">
        <h1 class="text-3xl font-bold">Login</h1>
        <div>
          <label for="username" class="text-lg">Username</label>
          <input type="text" name="username" id="username" class="h-7 w-full border border-1 rounded-md border-slate-400 focus:border-sky-500 focus:border-2 focus:outline-none pl-2"/>
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="h-7 w-full border border-1 rounded-md border-slate-400 focus:border-sky-500 focus:border-2 focus:outline-none pl-2" />
        </div>
        <button type="submit" class="bg-white border-[2px] w-full h-9 mt-2 rounded-lg border-slate-400 hover:bg-sky-500 hover:border-none hover:text-white transition-colors ">LOGIN</button>
      </form>
    </div>
    <script src="assets/js/script.js"></script>
  </body>
</html>
