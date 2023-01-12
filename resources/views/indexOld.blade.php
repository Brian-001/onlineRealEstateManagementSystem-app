@extends('layouts.app')
@section('content')
    <main class="main flex flex-col h-auto -ml-64 md:ml-0 w-5/6 transition-all duration-150 ease-in">
        <header class="header bg-white shadow py-4 px-4">
            <div class="header-content flex items-center flex-row">
                <form action="#">
                    <div class="hidden md:flex relative">
                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>

                        <input id="search" type="text" name="search"
                            class="text-black sm:text-base placeholder-black pl-10 pr-4 rounded-lg border border-gray-300 w-full h-10 focus:outline-none focus:border-indigo-400"
                            placeholder="Search..." />
                    </div>
                    <div class="flex md:hidden">
                        <a href="#" class="flex items-center justify-center h-10 w-10 border-transparent">
                            <svg class="h-6 w-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </a>
                    </div>
                </form>

            </div>
        </header>
        <div class="main-content flex flex-col p-4">
            <h1 class="font-bold text-2xl text-gray-700">Products</h1>


            <div class="flex flex-col  border-4 border-gray-400 border-dashed bg-white rounded mt-4">
                <div class="flex flex-wrap justify-start text-black h-auto p-5 gap-6">
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/garden1.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/stall1.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/warehouse1.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/office1.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/land1.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/shouse1.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/restate2.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/apartment1.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/garden2.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/stall2.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/warehouse2.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/office2.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/land2.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/shouse2.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/restate2.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/apartment3.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/garden3.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/stall3.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/warehouse3.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/office3.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/land3.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/shouse3.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/restate3.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/apartment4.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                    <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/garden4.jpg" alt=""
                            class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <footer class="footer px-4 py-6">
            <div class="footer-content">
                <p class="text-sm text-gray-600 text-center">&copy;RealEstate 2022. All rights reserved. <a
                        href="https://twitter.com/iaminos">by Brian Kanyi Karanja</a></p>
                <script>
                    const currentYear = new Date().getFullYear();
                </script>
            </div>
        </footer>
    </main>
@endsection
