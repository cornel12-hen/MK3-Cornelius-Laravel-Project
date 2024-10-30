<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-slate-900">
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
    <main class="w-full h-fit">
        <div class="flex px-48 py-60 gap-20">
            <div class="flex flex-col">
                <p class="text-2xl text-white font-bold">Hello</p>
                <p class="text-white">My name is Cornelius Henry Wibowo from SMK Telkom Purwokerto</p>
            </div>
            <img src="assets/media/9-2.JPG" class="w-80 h-80 rounded-full" alt="">
        </div>
    </main>
</body>
</html>