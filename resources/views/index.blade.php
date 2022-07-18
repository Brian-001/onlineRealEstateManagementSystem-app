<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        
    </head>
    <body>
      <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
          <div>
              <span class="text-2xl font-[Poppins] font-medium cursor-pointer">
                  Real Estate Management System
              </span>
          </div>
      
          <ul class="md:flex md;items-center z-[-1] md:z-auto md:static absolute bg-white">
              <li class="mx-4 my-6 md:my-0 ">
                  <a href="" class="text-xl hover:text-cyan-500 duration-500">Home</a>
              </li>
              <li class="mx-4">
                  <a href="" class="text-xl hover:text-cyan-500 duration-500">Residential</a>
              </li>
              <li class="mx-4">
                  <a href="" class="text-xl hover:text-cyan-500 duration-500">Commercial</a>
              </li>
              <li class="mx-4">
                  <a href="" class="text-xl hover:text-cyan-500 duration-500">About</a>
              </li>
          </ul>
      </nav>
        
            
       </div>
   
        </div>
        <div class="flex flex-col md:flex-row bg-blue-100 text-gray-100 py-4 rounded-xl">
            <aside class="sidebar rounded-2xl w-1/6 md:shadow transform -translate-x-full
            md:translate-x-0 transition-transform duration-150 ease-in bg-gray-800">

            <div class="sidebar-header flex items-center justify-center py-4">
               <div class="inline-flex">
                 <a href="#" class="inline-flex flex-row items-center">
                     <svg class="w-10 h-10 text-red-400" fill="currentColor"
                      viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.757 2.034a1 1 0 01.638.519c.483.967.844 1.554 1.207 2.03.368.482.756.876 1.348 1.467A6.985 6.985 0 0117 11a7.002 7.002 0 01-14 0c0-1.79.684-3.583 2.05-4.95a1 1 0 011.707.707c0 1.12.07 1.973.398 2.654.18.374.461.74.945 1.067.116-1.061.328-2.354.614-3.58.225-.966.505-1.93.839-2.734.167-.403.356-.785.57-1.116.208-.322.476-.649.822-.88a1 1 0 01.812-.134zm.364 13.087A2.998 2.998 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879.586.585.879 1.353.879 2.121s-.293 1.536-.879 2.121z" clip-rule="evenodd"/>
                     </svg>
                     <span class="leading-10 text-gray-100 text-2xl font-bold ml-1 uppercase">Real Estate</span>
                 </a>
               </div> 
            </div>

            <div class="sidebar-content px-4 py-6">
                <ul class="flex flex-col w-full">
                    <li class="my-px">
                        <a href="#" class="flex flex-row items-center justify-center h-10 px-3 rounded-lg text-gray-700 bg-gray-100">
                            <span class="flex items-center justify-center text-lg text-gray-400">
                               <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6" >
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                               </svg>
                            </span>
                            <span class="ml-3">All Products</span>
                        </a>
                    </li>
                    <li class="my-px">
                        
                        <span class="flex font-medium text-sm text-gray-300 px-4 my-4 uppercase">Commercial 
                            <span class="flex items-center justify-center text-lg text-gray-400 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    </li>
                    <li class="my-px">
                        <a href="{{ route('home.resort') }}" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="flex items-center justify-center text-lg text-gray-400">
                                <!--
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                    <path  d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                                </svg>
                                -->
                                
                            </span>
                            <span class="ml-3">Resort Gardens</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="flex items-center justify-center text-lg text-gray-400">

                            </span>
                            <span class="ml-3">Business Stalls</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="flex items-center justify-center text-lg text-gray-400">

                            </span>
                            <span class="ml-3">Warehouses</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="flex items-center justify-center text-lg text-gray-400">

                            </span>
                            <span class="ml-3">Office Suite</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="flex items-center justify-center text-lg text-gray-400">

                            </span>
                            <span class="ml-3">Land</span>
                        </a>
                    </li>

                    <!--Residential-->
                    <li class="my-px">
                        <span class="flex font-medium text-sm text-gray-300 px-4 my-4 uppercase">Residential
                            <span class="flex items-center justify-center text-lg text-gray-400 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    </li>
                    <li class="my-px">
                        <a href="#" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="flex items-center justify-center text-lg text-gray-400"> 
                                <!--
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                    <path  d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                                </svg>
                                -->
                            </span>
                            <span class="ml-3">Single Houses</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="flex items-center justify-center text-lg text-gray-400">

                            </span>
                            <span class="ml-3">Gated Community</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="flex items-center justify-center text-lg text-gray-400">

                            </span>
                            <span class="ml-3">Apartment</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="flex items-center justify-center text-lg text-gray-400">

                            </span>
                            <span class=" flex ml-3 py-4">Legal Documents
                                <span class="flex items-center justify-center text-lg text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z" />
                                        <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </li>

                    <li class="my-px">
                        <a href="" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="flex items-center justify-center text-lg text-gray-400">

                            </span>
                            <span class=" flex ml-3 py-4">Cart
                                <span class="flex items-center justify-center text-lg text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </li>

                    <li class="my-px">
                        <a href="" class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="flex items-center justify-center text-lg text-gray-400">

                            </span>
                            <span class=" flex ml-3 py-4">Faqs
                                <span class="flex items-center justify-center text-lg text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            </aside>

            <main class="main flex flex-col h-auto -ml-64 md:ml-0 w-5/6 transition-all duration-150 ease-in">
                <header class="header bg-white shadow py-4 px-4">
                  <div class="header-content flex items-center flex-row">
                    <form action="#">
                      <div class="hidden md:flex relative">
                        <div
                          class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400"
                        >
                          <svg
                            class="h-6 w-6"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                          >
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                          </svg>
                        </div>

                        <input
                          id="search"
                          type="text"
                          name="search"
                          class="text-black sm:text-base placeholder-black pl-10 pr-4 rounded-lg border border-gray-300 w-full h-10 focus:outline-none focus:border-indigo-400"
                          placeholder="Search..."
                        />
                      </div>
                      <div class="flex md:hidden">
                        <a href="#" class="flex items-center justify-center h-10 w-10 border-transparent">
                          <svg
                            class="h-6 w-6 text-gray-500"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                          >
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
                        <img src="/pimages/warehouse1.jpg" alt="" class="object-cover object-center overflow-hidden">
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
                        <img src="/pimages/apartment1.jpg" alt="" class="object-cover object-center overflow-hidden">
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
                        <img src="/pimages/warehouse2.jpg" alt="" class="object-cover object-center overflow-hidden">
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
                        <img src="/pimages/shouse2.jpg" alt="" class="object-cover object-center overflow-hidden">
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
                        <img src="/pimages/apartment3.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                      </div>
                      <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/garden3.jpg" alt="" class="object-cover object-center overflow-hidden">
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
                        <img src="/pimages/warehouse3.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                      </div>
                      <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/office3.jpg" alt="" class="object-cover object-center overflow-hidden">
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
                        <img src="/pimages/shouse3.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                      </div>
                      <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/restate3.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                      </div>
                      <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/apartment4.jpg" alt="" class="object-cover object-center overflow-hidden">
                        <div class="grid grid-rows-2 grid-flow-col gap-2 text-xs overflow-hidden">
                            <p>Name</p>
                            <p>location</p>
                            <p>Location</p>
                            <p>Price</p>
                        </div>
                      </div>
                      <div class="pcard p-2 bg-white-200 w-56 h-56 shadow-md">
                        <img src="/pimages/garden4.jpg" alt="" class="object-cover object-center overflow-hidden">
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
                    <p class="text-sm text-gray-600 text-center">&copy;RealEstate 2022. All rights reserved. <a href="https://twitter.com/iaminos">by Brian Kanyi Karanja</a></p>
                    <script>const currentYear= new Date().getFullYear();
                </script>
                  </div>
                </footer>
            </main>
        </div>
    </body>
</html>