<x-app-layout>
    @if (session('status'))
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
            <div class="bg-green-500 text-white p-4 rounded-lg shadow-md">
                {{ session('status') }}
            </div>
        </div>
    @endif

    <div class="py-12 bg-gray-50">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-900">
                แนะนำหลักสูตรที่เปิดสอน
            </h2>

            {{-- ================================================== --}}
            {{-- (A) UI ใหม่สำหรับแสดงผลวิดีโอ (17 รายการ)     --}}
            {{-- ================================================== --}}
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- 
                  ====================================================
                  นี่คือ "การ์ดต้นแบบ" สำหรับ 1 สาขา
                  คุณสามารถคัดลอก/วาง โครงสร้าง <div class="video-card ..."> ... </div> นี้
                  เพื่อสร้างให้ครบ 17 สาขาได้เลย
                  ====================================================
                --}}

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>

                

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>

<div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>


                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>


                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>


                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>



                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>


                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>


                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>


                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>


                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>


                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>

                <div class="video-card group bg-white rounded-lg shadow-md overflow-hidden cursor-pointer"
                     data-video-src="{{ asset('videos/comsci-intro.mp4') }}"
                     data-video-title="สาขาวิชาวิทยาการคอมพิวเตอร์">
                    
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/placeholder-comsci.jpg') }}" alt="สาขาวิชาวิทยาการคอมพิวเตอร์"
                             class="aspect-video w-full object-cover transition-transform duration-300 group-hover:scale-110">
                        
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <svg class="w-16 h-16 text-white/80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-900">สาขาวิชาวิทยาการคอมพิวเตอร์</h3>
                        <p class="text-sm text-gray-600 mt-1">
                            เรียนรู้การเขียนโปรแกรม, การพัฒนาซอฟต์แวร์, AI และ Data Science...
                        </p>
                    </div>
                </div>
                
                </div>
        </div>
    </div>

</x-app-layout>