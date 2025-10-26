<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
         <title>STA-recruitment</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            @keyframes fadeIn {
                from { 
                    opacity: 0; 
                    transform: translateY(20px); 
                }
                to { 
                    opacity: 1; 
                    transform: translateY(0); 
                }
            }
            .animate-fade-in {
                animation: fadeIn 0.7s ease-out forwards;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        @include('layouts.navbar')

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-200 bg-cover bg-center"
             style="background-image: url('{{ asset('images/yru-campus.jpg') }}')">
            
            <div class="animate-fade-in w-full sm:max-w-md mt-6 px-6 py-4 
                        bg-black/30 backdrop-blur-lg shadow-xl overflow-hidden sm:rounded-lg
                        border border-white/20">
                
                {{ $slot }}
            </div>
        </div>

        <footer class="w-full text-center p-4 text-white/80 bg-black/20 backdrop-blur-md">
            © {{ date('Y') }} คณะวิทยาศาสตร์เทคโนโลยีและการเกษตร มหาวิทยาลัยราชภัฏยะลา
            <br>
            <a href="https://sta.yru.ac.th/" target="_blank" class="hover:underline">เว็บไซต์คณะ</a>
        </footer>
    </body>
</html>