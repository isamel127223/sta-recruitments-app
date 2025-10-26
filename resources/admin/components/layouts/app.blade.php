<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>STA-recruitment</title>
        <link rel="preconnect" href="https://fonts.bunny.net">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        @include('layouts.navbar')

        <div class="min-h-screen bg-gray-100">
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <main>
                {{ $slot }}
            </main>
        </div>
        {{-- ================================================== --}}
{{-- (B) โค้ด HTML ของ Modal Popup (สำหรับหน้า Dashboard) --}}
{{-- ================================================== --}}

<div id="videoModal" 
     class="hidden fixed inset-0 bg-black/80  items-center justify-center z-50 p-4">

    <div class="bg-black rounded-lg shadow-2xl relative w-full max-w-3xl overflow-hidden">

        <button id="closeModalBtn" 
                class="absolute top-2 right-3 text-white text-3xl font-bold hover:text-gray-300 z-10">
            &times;
        </button>

        <h3 id="modalVideoTitle" class="text-white text-lg font-semibold p-4 pb-2">
            </h3>

        <video id="modalVideoPlayer" class="w-full h-auto" controls>
            <source id="modalVideoSource" src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>
</div>
                    {{-- ================================================== --}}
                    {{-- (B) โค้ด HTML ของ Modal Popup (สำหรับหน้า Dashboard) --}}
                    {{-- ================================================== --}}

        <div id="videoModal" 
     class="hidden fixed inset-0 bg-black/80 items-center justify-center z-50 p-4">

    <div class="bg-black rounded-lg shadow-2xl relative w-full max-w-3xl overflow-hidden">

        <button id="closeModalBtn" 
                class="absolute top-2 right-3 text-white text-3xl font-bold hover:text-gray-300 z-10">
            &times;
        </button>

        <h3 id="modalVideoTitle" class="text-white text-lg font-semibold p-4 pb-2">
            </h3>

        <video id="modalVideoPlayer" class="w-full h-auto" controls>
            <source id="modalVideoSource" src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>
</div>

        <footer class="w-full text-center p-6 text-white bg-black/80 border-t border-gray-200 mt-12">
             
             <div>
                 © {{ date('Y') }} คณะวิทยาศาสตร์เทคโนโลยีและการเกษตร มหาวิทยาลัยราชภัฏยะลา
             </div>
         </footer>
    </body>
</html>
    </body>
</html>