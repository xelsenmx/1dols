@extends('layouts.app')

@section('body')
    <header>
        <div class="py-2 border-b border-gray-200">
            <div class="container mx-auto lg:flex justify-between items-center">
                <a href="#" class="hidden lg:block text-sm text-gray-400">Azərbaycanın ən böyük B2B və D2C onlayn satış
                    platformasına xoş gəlmisiniz</a>
                <ul class="flex items-center text-gray-600 text-sm justify-center">
                    <li class="relative border-r border-gray-200 px-2" x-data="{ open: false }">
                        <a @click="open = ! open" href="#"
                           class="hover:text-yellow-300 transition duration-300 flex gap-2 items-center justify-between">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span>Mağaza</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>
                        <ul x-show="open" @click.away="open = false"
                            class="block absolute left-0 py-5 rounded -bottom-24 bg-white border w-36 shadow z-10"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-90"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-90">
                            <li class="px-5">
                                <a href="">Giriş</a>
                            </li>
                            <li class="px-5 mt-3">
                                <a href="">Qeydiyyat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative border-r border-gray-200 px-2" x-data="{ open: false }">
                        <a @click="open = ! open" href="#"
                           class="hover:text-yellow-300 transition duration-300  flex gap-2 items-center justify-between">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/>
                            </svg>
                            <span>Kuryer</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>
                        <ul x-show="open" @click.away="open = false"
                            class="block absolute right-0 py-5 rounded -bottom-24 bg-white border w-36 shadow z-10"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-90"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-90">
                            <li class="px-5">
                                <a href="">Giriş</a>
                            </li>
                            <li class="px-5 mt-3">
                                <a href="">Qeydiyyat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative px-2" x-data="{ open: false }">
                        <a @click="open = ! open" href="#"
                           class="hover:text-yellow-300 duration-300 flex gap-2 items-center justify-between">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span>İstifadəçi</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>
                        <ul x-show="open" @click.away="open = false"
                            class="block absolute right-0 py-5 rounded -bottom-24 bg-white border w-36 shadow z-10"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-90"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-90">
                            <li class="px-5">
                                <a href="">Giriş</a>
                            </li>
                            <li class="px-5 mt-3">
                                <a href="">Qeydiyyat</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-yellow-300 lg:bg-transparent lg:py-5 py-3">
            <div class="container mx-auto justify-between lg:justify-start flex px-2 w-full lg:gap-24">
                <a href="{{ url('/') }}" class="w-24 lg:w-52">
                    <img src="{{ asset('img/logo.png') }}" alt="1dols-logo">
                </a>
                <div class="hidden lg:flex items-center flex-auto">
                    <div class="flex items-center border-2 border-yellow-300 rounded-3xl w-full">
                        <form action="" method="get">
                            <input type="text" class="bg-transparent mx-3 my-1 flex-auto px-4 py-1"
                                   placeholder="Məhsulun adını daxil edin">
                            <select class="px-1 mr-2 border-l border-gray-300">
                                <option value="0">Bütün kateqoriyalar</option>
                                @foreach($categories as $category)
                                    <optgroup label="{{ $category->name }}">
                                        @foreach($category->children as $child)
                                            <option value="{{ $child->id }}">{{ $child->name }}</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                            <button class="p-2 bg-yellow-300 rounded-r-3xl">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <ul class="hidden lg:flex items-center gap-14">
                    <li>
                        <a href="" title="Qarşılaşdırılanlar" class="hover:text-yellow-300 transition duration-300">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                                </svg>
                                <span
                                    class="absolute -right-2 -bottom-2 w-5 h-5 text-xs font-bold bg-black rounded-full flex justify-center items-center text-white">54</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" title="Bəyənilənlər" class="hover:text-yellow-300 transition duration-300">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                                <span
                                    class="absolute -right-2 -bottom-2 w-5 h-5 text-xs font-bold bg-black rounded-full flex justify-center items-center text-white">54</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" title="Səbət" class=" hover:text-yellow-300 transition duration-300">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                                <span
                                    class="absolute -right-2 -bottom-2 w-5 h-5 text-xs font-bold bg-black rounded-full flex justify-center items-center text-white">54</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <button class="lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="hidden lg:block bg-yellow-300 font-bold text-sm text-gray-800">
            <ul class="container mx-auto flex items-center">
                <li class="border-r border-yellow-500 px-4 py-3 transition duration-300 hover:bg-yellow-500">
                    <a href="">Ana səhifə</a>
                </li>
                <li class="border-r border-yellow-500 px-4 py-3 transition duration-300 hover:bg-yellow-500">
                    <a href="#" class="flex items-center gap-2">
                        <span>Elektronika</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <main>

    </main>
    <footer>

    </footer>
@endsection
