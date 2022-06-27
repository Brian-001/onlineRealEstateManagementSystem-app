<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
             body{
                 background-color: #ffffff;
             }
             .flex{
                 display:flex;
             }
             .flex-row{
                 flex-wrap: wrap;
             }
             .p-4{
                 padding: 2rem;
             }
             nav a{
                 display:inline-block;
                 font-weight: bold;
                 color: #000000;
                 border-radius: 0.5rem; /* equals to 8px*/
                 padding:0.75rem;
                 margin: 1rem;
                 background-color:#ffffff;
                 filter: drop-shadow(0 10px 8px rgb(0 0 0 / 0.04)) drop-shadow(0 4px 3px rgb(0 0 0 / 0.1));
             }
             #search-navbar{
                 padding: 0.75rem;
                 
             }
             input[type=text]{
                 float:right;
                 /*border: 0.125rem solid #761f17;*/
                 border-radius: 1.5rem;
                 width:30%;
                 background-color:#ffffff;
                 outline: none;
                 filter: drop-shadow(0 10px 8px rgb(0 0 0 / 0.04)) drop-shadow(0 4px 3px rgb(0 0 0 / 0.1));
                 color:#000000;
             }
             .n-container{
                max-width: 90%;
                margin: 0 auto;
                
                
             }
             .m-cont{
              
                padding: 20px;
             }
             .flex{
               
                display: flex;
                flex-wrap: wrap;
            }
            .side-menu{
                
                width: 40%;
                height:max-content;
                background: #fff;
                /*border: 1px solid green;*/
                box-shadow: 1px 2px 2px 1px rgba(0, 0, 0);
                border-radius: 0.75rem;
            }
            .item-holder{
                /*margin: 2rem;*/
                width: 100%;
                height:auto;
                background: #fff;
                /*border: 1px solid rgb(31, 41, 55);*/
                box-shadow: 1px 2px 2px 1px rgba(0, 0, 0);
                border-radius: 0.75rem;
                flex-wrap: wrap;
                overflow: hidden;
            }
            .container{
                display:flex;
                flex-wrap: nowrap;
            }
            .item1{
                margin: 20px;
                height: 250px;
                padding: 0px;
                /*border: 1px solid red;*/
                box-shadow: 1px 2px 2px 1px rgba(0, 0, 0, 0.2);
                border-radius: 5px;
            }
            .item1 img{
                width: 100%;
                height: 65%;
                border-top-left-radius: 5px;
                border-top-right-radius: 5;
            }
            .details {
                padding: 10px;
                display: flex;
                justify-content: space-between;
                border: 1px solid cyan;
               
            }
            .details .det-1{
               
            }
        </style>

        <link rel="stylesheet" href="{{ url('css/app.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="relative flex flex-row p-4">
            <nav>
                <a href="#">Home</a>
                <a href="#">Residential</a>
                <a href="#">Commercial</a>
                <a href="#">About</a>
            </nav>
        </div>
        <div class="flex justify-center rounded-md">
            <input type="text" id="search-navbar" placeholder="Search...">
        </div>
            
        <!--
        <div class="flex justify-start columns-2 ml-3">
            <div class="items">
                <ul>
                    <li>Item1</li>
                    <li>Item1</li>
                    <li>Item1</li>
                    <li>Item1</li>
                    <li>Item1</li>
                </ul>
            </div>
            <div class="items">
                <ul>
                    <li>Item2</li>
                    <li>Item2</li>
                    <li>Item2</li>
                    <li>Item2</li>
                    <li>Item2</li>
                </ul>
            </div>
        </div>
        -->
        <!--
        <div class="flex flex-col">
            <div class="side-menu">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam doloribus temporibus facere ipsum inventore et autem laboriosam deleniti 
                    suscipit dolorum non, impedit, odit ducimus necessitatibus officia? Maiores nisi totam veritatis.</p>
            </div>
        </div>
        -->
        <!-- component -->
       <!--This is an example component -->
       <div class="n-container">
            <div class="m-cont flex grow justify-start px-5 py-5">

                <aside class="w-64" aria-label="Sidebar">
                <div class="px-3 py-4 overflow-y-auto rounded bg-gray-50 dark:bg-gray-800 border-radius: 0.75rem">
                    <ul class="space-y-2">
                    <li>
                        <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="ml-3">All</span>
                        </a>
                    </li>

                    
                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-base font-normal text-blackcolor: rgb(0 0 0)color: rgb(0 0 0)color: rgb(0 0 0)color: rgb(0 0 0)color: rgb(0 0 0) transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example1" data-collapse-toggle="dropdown-example1">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Commercial</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="dropdown-example1" class="py-2 space-y-2" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Business Stalls</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Warehouses</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Resort Gardens</a>
                            </li>
                        </ul>
                    </li>
                    


                    <!--Residential-->
                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-base font-normal text-blackcolor: rgb(0 0 0)color: rgb(0 0 0)color: rgb(0 0 0)color: rgb(0 0 0)color: rgb(0 0 0) transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Residential</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul  id="dropdown-example" class="py-2 space-y-2" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Single houses</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Apartments</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Real Estate</a>
                            </li>
                        </ul>
                    </li>
                    <!--End Residential-->

                    <!--Commercial
                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Commercial</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="dropdown-example2" class="py-2 space-y-2" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Business Stalls</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Warehouses</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Ceremony Gardens</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Conference Halls</a>
                            </li>
                        </ul>
                    </li>

                    end-->
                    <li>
                        <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">New arrivals</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                            </path>
                            <path
                                d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Legal Documents</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Cart</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Support</span>
                        </a>
                    </li>
                    <!--
                    <li>
                        <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                        </a>
                    </li>
                    -->
                </ul>
                </div>
                </aside>
                
                <!-- Carousel
                <div id="default-carousel" class="relative" data-carousel="static">
                    Carousel wrapper 
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                    Item 1 
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                        <img src="{{ storage_path('storage/pimages/apartment1.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    Item 2
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="storage/pimages/apartment1.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    Item 3
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="storage/pimages/apartment1.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    </div>
                    Slider indicators 
                    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>
                    Slider controls
                    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="hidden">Previous</span>
                    </span>
                    </button>
                    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="hidden">Next</span>
                    </span>
                    </button>
                </div>
                end carousel-->

                <div class="flex grow justify-content mx-auto">
                    <div class="grid grid-cols-3 item-holder">
                        <!--Card1-->
                        <div class="item1">
                            <img src="/pimages/apartment1.jpg" alt="">
                            <div class=" details">
                                <div class="det-1">
                                    <p>Apartment</p>
                                    <p>3 Bedrooms</p>
                                </div>
                                <div class="det-2">
                                    <p>Kileleshwa</p>
                                    <p>Ksh 60,000</p>
                                </div>
                            </div>
                        </div>

                        <!--Card2-->
                        <div class="item1">
                            <img src="/pimages/apartment2.jpg" alt="">
                            <div class=" details">
                                <div class="det-1">
                                    <p>Name</p>
                                    <p>Features</p>
                                </div>
                                <div class="det-2">
                                    <p>Location</p>
                                    <p>Price</p>
                                </div>
                            </div>
                        </div>

                        <!--Card3-->
                        <div class="item1">
                            <img src="/pimages/garden1.jpg" alt="">
                            <div class=" details">
                                <div class="det-1">
                                    <p>Name</p>
                                    <p>Features</p>
                                </div>
                                <div class="det-2">
                                    <p>Location</p>
                                    <p>Price</p>
                                </div>
                            </div>
                        </div>

                        <!--Card4-->
                        <div class="item1">
                            <img src="/pimages/garden2.jpg" alt="">
                            <div class=" details">
                                <div class="det-1">
                                    <p>Name</p>
                                    <p>Features</p>
                                </div>
                                <div class="det-2">
                                    <p>Location</p>
                                    <p>Price</p>
                                </div>
                            </div>
                        </div>

                        <!--Card5-->
                        <div class="item1">
                            <img src="/pimages/shouse1.jpg" alt="">
                            <div class=" details">
                                <div class="det-1">
                                    <p>Name</p>
                                    <p>Features</p>
                                </div>
                                <div class="det-2">
                                    <p>Location</p>
                                    <p>Price</p>
                                </div>
                            </div>
                        </div>

                        <!--Card6-->
                        <div class="item1">
                            <img src="/pimages/shouse2.jpg" alt="">
                            <div class=" details">
                                <div class="det-1">
                                    <p>Name</p>
                                    <p>Features</p>
                                </div>
                                <div class="det-2">
                                    <p>Location</p>
                                    <p>Price</p>
                                </div>
                            </div>
                        </div>

                        <!--card7-->
                        <div class="item1">
                            <img src="/pimages/stall1.jpg" alt="">
                            <div class=" details">
                                <div class="det-1">
                                    <p>Name</p>
                                    <p>Features</p>
                                </div>
                                <div class="det-2">
                                    <p>Location</p>
                                    <p>Price</p>
                                </div>
                            </div>
                        </div>
                        <!--Card8-->
                        <div class="item1">
                            <img src="/pimages/warehouse1.jpg" alt="">
                            <div class=" details">
                                <div class="det-1">
                                    <p>Name</p>
                                    <p>Features</p>
                                </div>
                                <div class="det-2">
                                    <p>Location</p>
                                    <p>Price</p>
                                </div>
                            </div>
                        </div>
                        <!--Card9-->
                        <div class="item1">
                            <img src="/pimages/warehouse2.jpg" alt="">
                            <div class=" details">
                                <div class="det-1">
                                    <p>Name</p>
                                    <p>Features</p>
                                </div>
                                <div class="det-2">
                                    <p>Location</p>
                                    <p>Price</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
                </div>
            
       </div>
        
        <!--
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @yield('content')
        </div>
        -->
    </body>
</html>