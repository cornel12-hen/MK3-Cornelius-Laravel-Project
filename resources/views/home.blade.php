<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    @vite('resources/css/app.css')
  </head>
<body class="bg-white">
    <!-- Navbar -->
    <nav class="bg-black p-4 px-16 h-20 flex justify-between items-center">
        <div class="text-white text-2xl font-bold">
            CHW
        </div>
        <div class="space-x-6">
            <a href="#" class="text-white">Home</a>
            <a href="#" class="text-white">Profile</a>
            <a href="#" class="text-white">Gallery</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="flex items-center justify-center h-screen bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500">
        <pre class="text-white text-7xl font-sans font-black mb-32">WELCOME TO
MY WEBSITE!</pre>
    </section>

    <svg class="absolute top-[600px]" id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 240" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(255, 255, 255, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,192L80,172C160,152,320,112,480,108C640,104,800,136,960,160C1120,184,1280,200,1440,180C1600,160,1760,104,1920,72C2080,40,2240,32,2400,32C2560,32,2720,40,2880,72C3040,104,3200,160,3360,176C3520,192,3680,168,3840,152C4000,136,4160,128,4320,104C4480,80,4640,40,4800,44C4960,48,5120,96,5280,124C5440,152,5600,160,5760,156C5920,152,6080,136,6240,112C6400,88,6560,56,6720,40C6880,24,7040,24,7200,24C7360,24,7520,24,7680,36C7840,48,8000,72,8160,76C8320,80,8480,64,8640,64C8800,64,8960,80,9120,72C9280,64,9440,32,9600,48C9760,64,9920,128,10080,156C10240,184,10400,176,10560,180C10720,184,10880,200,11040,200C11200,200,11360,184,11440,176L11520,168L11520,240L11440,240C11360,240,11200,240,11040,240C10880,240,10720,240,10560,240C10400,240,10240,240,10080,240C9920,240,9760,240,9600,240C9440,240,9280,240,9120,240C8960,240,8800,240,8640,240C8480,240,8320,240,8160,240C8000,240,7840,240,7680,240C7520,240,7360,240,7200,240C7040,240,6880,240,6720,240C6560,240,6400,240,6240,240C6080,240,5920,240,5760,240C5600,240,5440,240,5280,240C5120,240,4960,240,4800,240C4640,240,4480,240,4320,240C4160,240,4000,240,3840,240C3680,240,3520,240,3360,240C3200,240,3040,240,2880,240C2720,240,2560,240,2400,240C2240,240,2080,240,1920,240C1760,240,1600,240,1440,240C1280,240,1120,240,960,240C800,240,640,240,480,240C320,240,160,240,80,240L0,240Z"></path></svg>

    <!-- Content Section -->
    <section class="text-center py-20 mb-16">
        <pre class="text-xl mb-16">Di Website ini, aku akan menjelaskan
berbagai hal tentang diriku</pre>
        <div class="flex justify-center gap-12 space-x-6">
            <img src="assets/media/9-2.JPG" alt="Image 1" class="rounded-lg shadow-lg w-64 h-40 object-cover">
            <img src="assets/media/0000_0000_00000000(405).jpg" alt="Image 2" class="rounded-lg shadow-lg w-64 h-40 hover:w-80 hover:h-52 transition-all">
            <img src="assets/media/WhatsApp Image 2023-11-27 at 22.05.16.jpeg" alt="Image 3" class="rounded-lg shadow-lg w-64 h-40 object-cover">
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="text-center mb-4">
            <p>Hubungi Saya di</p>
        </div>
        <div class="flex justify-center space-x-8">
            <a href="#" class="text-white"><i class="fab fa-whatsapp"></i> WhatsApp</a>
            <a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#" class="text-white"><i class="fab fa-youtube"></i> YouTube</a>
        </div>
    </footer>

</body>
</html>
