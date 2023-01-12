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
            <a href="/seller">Add Product</a>
            <div class="flex flex-col  border-4 border-gray-400 border-dashed bg-white rounded mt-4">
                <div class="flex flex-wrap justify-start text-black h-auto p-5 gap-6">
                    @foreach ($products as $product)
                        <a href="/products/{{ $product->id }}">
                            <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                                <img src="{{ $product->image }}" alt=""
                                    class="object-cover object-center overflow-hidden">
                                <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                                    <p>Name : {{ $product->name }}</p>
                                    <p>location</p>
                                    <p>Location</p>
                                    <p>Price</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
