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
            <header>

                <div class="mb-10 hidden xl:block">
                    <div class="relative bg-transparent">
                        <div
                            class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
                            <div class="flex justify-start lg:w-0 lg:flex-1">
                                <a href="/">
                              <span class="sr-only">
                                 Laravel Portugal
                              </span>
                                    <div class="flex h-5 w-5 items-center justify-center mx-auto h-8 w-auto sm:h-10">
                                 <span>
                                    <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 209">
                                       <path role="TL" fill="#6da544" d="M1 21l38 22 38-22-38-21z">
                                       </path>
                                       <path role="TR" fill="#d80327" d="M124 45l37 21 38-21-38-22z">
                                       </path>
                                       <path role="OL" fill="#d80327" d="M0 164l78 45v-43l-41-24v-95l-37-22z">
                                       </path>
                                       <path role="OR" fill="#6da544" d="M163 70v44l37-22-.1-43z">
                                       </path>
                                       <path role="OB" fill="#6da544" d="M82 166v43l77-45v-43z">
                                       </path>
                                       <path role="IL" fill="#6da544" d="M41 47v90l37-22v-90z">
                                       </path>
                                       <path role="IR" fill="#ffda44" d="M122 92l37 22v-44l-37-21z">
                                       </path>
                                       <path role="IB" fill="#d80327" d="M42.5 140.5l37.5 21.5 77-44.5-37-22.5z">
                                       </path>
                                    </svg>
                                 </span>
                                        <span class="font-bold ml-2 text-white">
                                    Laravel.pt
                                 </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="relative">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:pt-44 lg:pb-60 lg:px-8">
                        <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl font-roboto">
                        <span class="block text-white">
                           Laravel Portugal 🇵🇹
                        </span>
                            <span class="block text-gray-100">
                           Comunidade Oficial
                        </span>
                        </h1>
                        <p class="mt-6 max-w-lg mx-auto text-center text-xl text-white sm:max-w-3xl">
                            Bem-vindo à comunidade oficial da Laravel em Portugal. Junta-te a centenas de Programadores
                            Laravel numa comunidade em constante crescimento.
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

        <footer class="bg-white">
            <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
                <div class="mt-8 flex justify-center space-x-6">
                    <a href="https://twitter.com/LaravelPortugal" target="_blank" rel="nofollow"
                       class="text-gray-400 hover:text-gray-500">
                     <span class="sr-only">
                        X
                     </span>
                        <svg class="h-6 w-6 text-md mr-1"  fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                        </svg>
                    </a>
                    <a href="https://github.com/laravel-portugal" target="_blank" rel="nofollow"
                       class="text-gray-400 hover:text-gray-500">
                     <span class="sr-only">
                        Github
                     </span>
                        <svg class="svg-inline--fa fa-github fa-w-16 h-6 w-6 text-md mr-1" aria-hidden="true"
                             focusable="false" data-prefix="fab" data-icon="github" role="img"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" area-hidden="true">
                            <path class="" fill="currentColor"
                                  d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://discord.gg/9medAV2mD5" target="_blank" rel="nofollow"
                       class="text-gray-400 hover:text-gray-500">
                     <span class="sr-only">
                        Discord
                     </span>
                        <svg class="svg-inline--fa fa-discord fa-w-20 h-6 w-6 text-md mr-1" aria-hidden="true"
                             focusable="false" data-prefix="fab" data-icon="discord" role="img"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" area-hidden="true">
                            <path class="" fill="currentColor"
                                  d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://www.meetup.com/pt-BR/Laravel-Portugal/" target="_blank" rel="nofollow"
                       class="text-gray-400 hover:text-gray-500">
                     <span class="sr-only">
                        Meetup
                     </span>
                        <svg class="svg-inline--fa fa-meetup fa-w-16 h-6 w-6 text-md mr-1" aria-hidden="true"
                             focusable="false" data-prefix="fab" data-icon="meetup" role="img"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" area-hidden="true">
                            <path class="" fill="currentColor"
                                  d="M99 414.3c1.1 5.7-2.3 11.1-8 12.3-5.4 1.1-10.9-2.3-12-8-1.1-5.4 2.3-11.1 7.7-12.3 5.4-1.2 11.1 2.3 12.3 8zm143.1 71.4c-6.3 4.6-8 13.4-3.7 20 4.6 6.6 13.4 8.3 20 3.7 6.3-4.6 8-13.4 3.4-20-4.2-6.5-13.1-8.3-19.7-3.7zm-86-462.3c6.3-1.4 10.3-7.7 8.9-14-1.1-6.6-7.4-10.6-13.7-9.1-6.3 1.4-10.3 7.7-9.1 14 1.4 6.6 7.6 10.6 13.9 9.1zM34.4 226.3c-10-6.9-23.7-4.3-30.6 6-6.9 10-4.3 24 5.7 30.9 10 7.1 23.7 4.6 30.6-5.7 6.9-10.4 4.3-24.1-5.7-31.2zm272-170.9c10.6-6.3 13.7-20 7.7-30.3-6.3-10.6-19.7-14-30-7.7s-13.7 20-7.4 30.6c6 10.3 19.4 13.7 29.7 7.4zm-191.1 58c7.7-5.4 9.4-16 4.3-23.7s-15.7-9.4-23.1-4.3c-7.7 5.4-9.4 16-4.3 23.7 5.1 7.8 15.6 9.5 23.1 4.3zm372.3 156c-7.4 1.7-12.3 9.1-10.6 16.9 1.4 7.4 8.9 12.3 16.3 10.6 7.4-1.4 12.3-8.9 10.6-16.6-1.5-7.4-8.9-12.3-16.3-10.9zm39.7-56.8c-1.1-5.7-6.6-9.1-12-8-5.7 1.1-9.1 6.9-8 12.6 1.1 5.4 6.6 9.1 12.3 8 5.4-1.5 9.1-6.9 7.7-12.6zM447 138.9c-8.6 6-10.6 17.7-4.9 26.3 5.7 8.6 17.4 10.6 26 4.9 8.3-6 10.3-17.7 4.6-26.3-5.7-8.7-17.4-10.9-25.7-4.9zm-6.3 139.4c26.3 43.1 15.1 100-26.3 129.1-17.4 12.3-37.1 17.7-56.9 17.1-12 47.1-69.4 64.6-105.1 32.6-1.1.9-2.6 1.7-3.7 2.9-39.1 27.1-92.3 17.4-119.4-22.3-9.7-14.3-14.6-30.6-15.1-46.9-65.4-10.9-90-94-41.1-139.7-28.3-46.9.6-107.4 53.4-114.9C151.6 70 234.1 38.6 290.1 82c67.4-22.3 136.3 29.4 130.9 101.1 41.1 12.6 52.8 66.9 19.7 95.2zm-70 74.3c-3.1-20.6-40.9-4.6-43.1-27.1-3.1-32 43.7-101.1 40-128-3.4-24-19.4-29.1-33.4-29.4-13.4-.3-16.9 2-21.4 4.6-2.9 1.7-6.6 4.9-11.7-.3-6.3-6-11.1-11.7-19.4-12.9-12.3-2-17.7 2-26.6 9.7-3.4 2.9-12 12.9-20 9.1-3.4-1.7-15.4-7.7-24-11.4-16.3-7.1-40 4.6-48.6 20-12.9 22.9-38 113.1-41.7 125.1-8.6 26.6 10.9 48.6 36.9 47.1 11.1-.6 18.3-4.6 25.4-17.4 4-7.4 41.7-107.7 44.6-112.6 2-3.4 8.9-8 14.6-5.1 5.7 3.1 6.9 9.4 6 15.1-1.1 9.7-28 70.9-28.9 77.7-3.4 22.9 26.9 26.6 38.6 4 3.7-7.1 45.7-92.6 49.4-98.3 4.3-6.3 7.4-8.3 11.7-8 3.1 0 8.3.9 7.1 10.9-1.4 9.4-35.1 72.3-38.9 87.7-4.6 20.6 6.6 41.4 24.9 50.6 11.4 5.7 62.5 15.7 58.5-11.1zm5.7 92.3c-10.3 7.4-12.9 22-5.7 32.6 7.1 10.6 21.4 13.1 32 6 10.6-7.4 13.1-22 6-32.6-7.4-10.6-21.7-13.5-32.3-6z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/channel/UCIbMW1h5VReAQAwJGi_zT3w" target="_blank" rel="nofollow"
                       class="text-gray-400 hover:text-gray-500">
                     <span class="sr-only">
                        Youtube
                     </span>
                        <svg class="svg-inline--fa fa-youtube fa-w-18 h-6 w-6 text-md mr-1" aria-hidden="true"
                             focusable="false" data-prefix="fab" data-icon="youtube" role="img"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" area-hidden="true">
                            <path class="" fill="currentColor"
                                  d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                            </path>
                        </svg>
                    </a>
                </div>
                <p class="mt-8 text-center text-base text-gray-400">
                </p>
            </div>
        </footer>
    </div>

@endsection
