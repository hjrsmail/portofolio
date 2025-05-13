<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Selama Datang!!</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/main.css', 'resources/js/script.js'])
    @endif
</head>

<body class="min-h-screen">

    <x-navbar></x-navbar>

    <section class="md:grid md:h-screen md:place-content-center dark:bg-dark">
        <div
            class="mx-auto w-screen max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 flex flex-col-reverse md:grid md:grid-cols-2 items-center md:gap-4 lg:px-8 lg:py-32 ">

            {{-- text --}}
            <div id="hero-par"
                class="max-w-prose text-center  pt-20 md:pt-0 justify-center transition-all duration-000 ease-out">
                <h1 class="text-3xl font-bold text-gray-900 sm:text-5xl md:text-6xl dark:text-white">
                    <strong x-data="{
                        startingAnimation: { opacity: 0, scale: 4 },
                        endingAnimation: { opacity: 1, scale: 1, stagger: 0.07, duration: 1, ease: 'expo.out' },
                        addCNDScript: true,
                        animateText() {
                            $el.classList.remove('invisible');
                            gsap.fromTo($el.children, this.startingAnimation, this.endingAnimation);
                        },
                        splitCharactersIntoSpans(element) {
                            text = element.innerHTML;
                            modifiedHTML = [];
                            for (var i = 0; i < text.length; i++) {
                                attributes = '';
                                if (text[i].trim()) { attributes = 'class=\'inline-block\''; }
                                modifiedHTML.push('<span ' + attributes + '>' + text[i] + '</span>');
                            }
                            element.innerHTML = modifiedHTML.join('');
                        },
                        addScriptToHead(url) {
                            script = document.createElement('script');
                            script.src = url;
                            document.head.appendChild(script);
                        }
                    }" x-init="splitCharactersIntoSpans($el);
                    if (addCNDScript) {
                        addScriptToHead('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js');
                    }
                    gsapInterval = setInterval(function() {
                        if (typeof gsap !== 'undefined') {
                            animateText();
                            clearInterval(gsapInterval);
                        }
                    }, 5);"
                        class="invisible font-bold custom-font hover:text-yellow-500 duration-1000 cursor-pointer">Hijir
                        Ismail</strong>
                </h1>

                <div
                    class="flst cursor-pointer mt-4 text-base text-pretty text-gray-700 sm:text-2xl/relaxed dark:text-gray-200 flex items-center justify-center gap-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8 text-yellow-500 hover:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                    </svg>
                    <p class="hover:text-yellow-500 duration-100">Fullstack Developer</p>
                </div>

                <div class="prtf mt-4 flex flex-col md:flex-row sm:mt-6 justify-center gap-4 ">
                    <a href="{{ url('portofolio') }}"
                        class="group relative inline-block rounded border border-gray-800 bg-yellow-500/80 px-5 py-4 font-medium text-white shadow-sm transition-all duration-300 hover:bg-white/90 overflow-hidden">
                        <span class="block group-hover:opacity-0 transition duration-300">
                            Lihat Portofolio Saya &mdash;&raquo
                        </span>
                        <span
                            class="text-2xl absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 transition duration-300 transform group-hover:translate-x-1 group-hover:-translate-y-5">
                            🚀
                        </span>
                    </a>

                    <a href="{{ url('contact') }}"
                        class="inline-block rounded border border-gray-200 px-5 py-3 font-medium text-gray-700 shadow-sm transition-colors hover:bg-gray-50 hover:text-gray-900 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-white/90 dark:hover:text-dark">
                        Contact!!
                    </a>
                </div>

            </div>

            {{-- Gambar --}}
            <div id="myPict"
                class="pict mx-auto max-w-md scale-110 pt-20 md:pt-1 transition-all duration-2000 ease-out justify-center md:justify-start">
                <img src="img/myPictures.jpg" alt="" class="w-45 h-60 md:w-80 md:h-100 brightness-80 hover:brightness-100 duration-400 cursor-pointer" />
            </div>
        </div>

        @include('components.footer')
    </section>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>


</body>

</html>
