<x-app-layout>
    @if (session('status'))
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div class="bg-green-500 text-white p-4 rounded-lg shadow-md">
                {{ session('status') }}
            </div>
        </div>
    @endif

    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-900">
                วีดีโอแนะนำคณะ
            </h2>

            {{-- ================================================== --}}
            {{-- (A) อัปเกรด UI การ์ดวิดีโอ (4 ใบ) 
            {{-- ================================================== --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำคณะ STA">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำคณะ STA"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำคณะ STA</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            ภาพรวมของคณะวิทยาศาสตร์ฯ และหลักสูตรทั้งหมด
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/001.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา IT">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา IT"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา IT</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เน้นการจัดการเครือข่ายและความปลอดภัยทางไซเบอร์
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา Agri">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา Agri"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา Agri</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            นวัตกรรมการเกษตรยุคใหม่ และฟาร์มอัจฉริยะ
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="แนะนำสาขา ComSci">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="แนะนำสาขา ComSci"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">แนะนำสาขา ComSci</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, AI และ Data Science
                        </p>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
</x-app-layout>