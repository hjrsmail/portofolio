<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="h-screen place-content-center">
        <div class="w-full my-4 md:my-6 border-1 py-5 border-gray-900 rounded-3xl border-shadow shadow-xl">
            <p class="aboutMe  text-xl mb-10 p-8 md:px-10 md:mb-5 md:text-2xl text-gray-400 text-shadow-yellow-500">About
                Me
                --------------------------------</p>
            <div class="border-shadow shadow-xl grid grid-cols-1 md:grid-cols-3">
                {{-- Img Sectionn --}}
                <div
                    class="animated fadeIn myImage flex items-center justify-center cursor-pointer brightness-50 hover:brightness-100 duration-300 ">
                    <img src="/img/myPictures.jpg" class="max-w-60" alt="">

                </div>

                {{-- Deskripsi Sectionn  --}}
                <div class="description bg-dark rounded-r-4xl col-span-2 flex p-10">
                    <div
                        class="max-w-2xl mx-auto text-gray-200 brightness-80 flex flex-col justify-center gap-10 text-justify cursor-pointer">
                        <div class="t-top hover:text-white duration-200">Lorem ipsum dolor sit, amet consectetur
                            adipisicing
                            elit. Doloribus
                            itaque, suscipit repellendus cum commodi consequatur unde, dolor cupiditate nihil temporibus
                            voluptatum minus exercitationem magni! Rem officia quas mollitia. Illo ad cumque autem eum
                            ducimus
                            itaque velit iusto pariatur delectus, molestiae recusandae. Nemo quisquam consectetur rem
                            ullam
                            iusto fugiat magni saepe.</div>

                        <div class="t-bot hover:text-white duration-100 ">Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Id quas
                            animi
                            repellendus libero optio, ea officiis dignissimos omnis. Odio reprehenderit corrupti dicta
                            dolorem
                            eaque asperiores quisquam, cum possimus rem deserunt iste accusamus quis veniam et ipsa
                            optio
                            voluptate tenetur dignissimos non nostrum tempore aut. Ex expedita architecto possimus
                            cumque
                            molestias.</div>

                        <div class="md:inline-flex items-center animated fadeIn">
                            <div class="grid grid-cols-3 sm:grid-cols-3 gap-3 max-w-6xl justify-start">
                                <div
                                    class="bg-transparent border-1 border-gray-900 hover:bg-gray-800 duration-200 hover:text-gray-400 rounded-lg shadow-md p-3 text-center h-full max-h-[110px] max-w-[100px] hidden md:block ">
                                    <div class="text-3xl font-bold text-blue-600" data-countup="1250">1+</div>
                                    <p class="text-gray-300 mt-1 ">Years of Experience</p>
                                </div>

                                <div
                                    class="bg-transparent border-1 border-gray-900 hover:bg-gray-800 duration-200 hover:text-gray-400 rounded-lg shadow-md p-3 text-center h-full max-h-[110px] max-w-[100px] hidden md:block">
                                    <div class="text-3xl font-bold text-blue-600" data-countup="640">3</div>
                                    <p class="text-gray-300 mt-1">Project Created</p>
                                </div>

                                <div
                                    class="bg-transparent border-1 border-gray-900 hover:bg-gray-800 duration-200 hover:text-gray-400 rounded-lg shadow-md p-3 text-center h-full max-h-[110px] max-w-[100px] hidden md:block">
                                    <div class="text-3xl font-bold text-blue-600" data-countup="98">5+</div>
                                    <p class="text-gray-300 mt-1">Certificate</p>
                                </div>
                            </div>

                            <div class="cv-down md:ml-6 ">
                                <a href="{{ asset('pdf/cv-new.pdf') }}" download
                                    class="inline-flex items-center gap-1 px-3 py-2 bg-transparent border-1 border-gray-900 hover:bg-gray-800 duration-400 hover:text-gray-400 brightness-80 text-white rounded-md hover:brightness-100 transition-colors max-w-44">
                                    <p class="text-md">Download CV</p>
                                    <!-- Ikon Download SVG -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 16.5v1.125C3 19.216 4.284 20.5 5.875 20.5h12.25c1.591 0 2.875-1.284 2.875-2.875V16.5m-9-12v12m0 0l-3.75-3.75M12 16.5l3.75-3.75" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('components.skills')

    </section>
</x-layout>
