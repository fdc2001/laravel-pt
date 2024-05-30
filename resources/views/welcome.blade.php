@extends('layouts.app')

@section('content')

    <div id="app" data-v-app="">
        <section class="relative w-full" id="top">
            <div class="absolute inset-0 z-0">
                <video autoplay="" loop="" class="w-full h-full object-cover">
                    <source class="w-full" src="https://laravel.pt/img/videos/portugal.mp4" type="video/mp4">
                    </source>
                    <source class="w-full" src="https://laravel.pt/img/videos/portugal.webm" type="video/webm">
                    </source>
                    <img class="h-full w-full object-cover" src="https://laravel.pt/img/videos/portugal.jpg"
                         title="Your browser does not support the" alt="Laravel"/>
                </video>
                <div
                    class="absolute inset-0 bg-gradient-to-b from-gray-900 via-primary-500 to-yellow-200 mix-blend-multiply">
                </div>
            </div>
            @include('layouts.header')
            <div class="relative">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:pt-44 lg:pb-60 lg:px-8">
                        <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl font-roboto">
                        <span class="block text-white">
                           {{__('homepage.head')}}
                        </span>
                            <span class="block text-gray-100">
                           {{__('homepage.subheader')}}
                        </span>
                        </h1>
                        <p class="mt-6 max-w-lg mx-auto text-center text-xl text-white sm:max-w-3xl">
                            {{__('homepage.welcome_text')}}
                        </p>
                        <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                            <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                                <a href="https://discord.gg/9medAV2mD5" target="_blank" rel="nofollow"
                                   class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-base bg-white hover:bg-indigo-50 sm:px-8">
                                    Discord
                                </a>
                                <a href="https://github.com/laravel-portugal"
                                   class="flex items-center justify-center px-4 py-3 border border-white text-base font-medium rounded-md shadow-sm text-white bg-transparent bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                                    Github
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 left-0 w-full overflow-hidden leading-none mt-[-10%] text-white"
                 aria-hidden="true">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                     preserveAspectRatio="none" fill="currentColor">
                    <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z"
                          class="shape-fill">
                    </path>
                </svg>
            </div>
        </section>
        <section class="relative w-full mx-auto max-w-2xl lg:max-w-4xl" id="events">
            <h1 class="text-3xl font-bold tracking-tight text-gray-600 sm:text-4xl font-roboto mb-5">
                Próximos eventos
            </h1>
            <div class="w-full relative">
                <div class="swiper multiple-slide-carousel swiper-container relative">
                    <div class="swiper-wrapper mb-16">
                        <div class="swiper-slide">
                            <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                                <span class="text-2xl font-semibold text-indigo-600">Slide 1 </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                                <span class="text-2xl font-semibold text-indigo-600">Slide 2 </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                                <span class="text-2xl font-semibold text-indigo-600">Slide 3 </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-indigo-50 rounded-2xl h-96 flex justify-center items-center">
                                <span class="text-2xl font-semibold text-indigo-600">Slide 4 </span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
                        <button id="slider-button-left"
                                class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-indigo-600 !-translate-x-16"
                                data-carousel-prev>
                            <svg class="h-5 w-5 text-indigo-600 group-hover:text-white"
                                 xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor"
                                      stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button id="slider-button-right"
                                class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-indigo-600 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-indigo-600 !translate-x-16"
                                data-carousel-next>
                            <svg class="h-5 w-5 text-indigo-600 group-hover:text-white"
                                 xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor"
                                      stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>


        </section>
        @include('layouts.footer')
    </div>

@endsection


