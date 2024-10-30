<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    @vite('resources/css/app.css')
  </head>
  <body class="flex justify-center bg-slate-100 pt-32">
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
    <script src="assets/js/script.js"></script>
  </body>
</html>
