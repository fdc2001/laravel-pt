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
                    <img class="h-full w-full object-cover" src="https://laravel.pt/img/videos/portugal.jpg" title="Your browser does not support the" alt="Laravel"/>
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
        @include('layouts.footer')
    </div>

@endsection
