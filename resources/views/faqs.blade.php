<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Faqs</title>
</head>
<body>
    
    <div class="2xl:container 2xl:mx-auto md:py-12 lg:px-20 md:px-6 py-9 px-4">
        <h2 class="font-semibold dark:text-black lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-black-800">Frequently Asked Questions</h2>
        <div class="mt-4 flex md:justify-between md:items-start md:flex-row flex-col justify-start items-start">
            <div class="">
                <p class="font-normal dark:text-black-400 text-base leading-6 text-black-600 lg:w-8/12 md:w-9/12">Here are few of the most frequently asked questions by our valueable customers</p>
            </div>
            
            
            <div class="border-b-2 border-gray-200 pb-2 flex justify-center items-center md:mt-0 mt-10 md:w-auto w-full">
                <input placeholder="Search" type="text" aria-label="Search" class="dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 lg:w-96 md:w-72 w-full focus:outline-none placeholder-gray-600 text-base font-normal text-gray-600 leading-4" />
                <img class="cursor-pointer dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/ecom-faq-1-svg1.svg" alt="search">
                <img class="cursor-pointer hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/ecom-faq-1-svg1dark.svg" alt="search">
            </div>
        </div>
        <div class="flex md:flex-row flex-col md:space-x-8 md:mt-16 mt-8">
            <div class="md:w-5/12 lg:w-4/12 w-full">
                <img src="https://i.ibb.co/8bCs73h/pexels-ron-lach-8128069-1.png" alt="Image of Glass bottle" class="w-full md:block hidden" />
                <img src="https://i.ibb.co/gZMfQJq/pexels-ron-lach-8128069-1-1.png" alt="Image of Glass bottle" class="w-full md:hidden block" />
            </div>
            <div class="md:w-7/12 lg:w-8/12 w-full md:mt-0 sm:mt-14 mt-10">
                <!-- Shipping Section -->
                <div>
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="font-semibold text-xl  dark:text-black leading-5 text-black-800">Shipping</h3>
                        <button aria-label="too" class="text-black-800 dark:text-black cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black-800" onclick="openAnsSection(1)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="path1" class="" d="M10 4.1665V15.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <p id="para1" class="hidden font-normal dark:text-black-400 text-base leading-6 text-black-600 mt-4 w-11/12">
                        We are covering every major country worldwide. The shipment leaves from US as it is our headquarter. Some extra information you probably need to add here so that the customer is clear of their wanted expectations.
                    </p>
                </div>

                <hr class="my-7 bg-gray-200" />

                <!-- Returns Section -->

                <div>
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="font-semibold text-xl dark:text-black  leading-5 text-black-800">Returns</h3>
                        <button aria-label="too" class="text-gray-800 dark:text-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" onclick="openAnsSection(2)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="path2" class="" d="M10 4.1665V15.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <p id="para2" class="hidden font-normal dark:text-black-400 text-base leading-6 text-black-600 mt-4 w-11/12">
                        We are covering every major country worldwide. The shipment leaves from US as it is our headquarter. Some extra information you probably need to add here so that the customer is clear of their wanted expectations.
                    </p>
                </div>

                <hr class="my-7 bg-gray-200" />

                <!-- Exchange Section -->

                <div>
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="font-semibold text-xl dark:text-black  leading-5 text-black-800">Exchange</h3>
                        <button aria-label="too" class="text-gray-800 dark:text-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" onclick="openAnsSection(3)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="path3" d="M10 4.1665V15.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <p id="para3" class="hidden font-normal dark:text-black-400 text-base leading-6 text-black-600 mt-4 w-11/12">
                        We are covering every major country worldwide. The shipment leaves from US as it is our headquarter. Some extra information you probably need to add here so that the customer is clear of their wanted expectations.
                    </p>
                </div>

                <hr class="my-7 bg-gray-200" />

                <!-- Tracking Section -->

                <div>
                    <div class="flex justify-between items-center cursor-pointer">
                        <h3 class="font-semibold text-xl dark:text-black  leading-5 text-black-800">Tracking</h3>
                        <button aria-label="too" class="text-gray-800 dark:text-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" onclick="openAnsSection(4)">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="path4" d="M10 4.1665V15.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.16602 10H15.8327" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <p id="para4" class="hidden font-normal dark:text-black-400 text-base leading-6 text-black-600 mt-4 w-11/12">
                        We are covering every major country worldwide. The shipment leaves from US as it is our headquarter. Some extra information you probably need to add here so that the customer is clear of their wanted expectations.
                    </p>
                </div>

                <hr class="my-7 bg-gray-200" />
            </div>
        </div>
    </div>
    <script>
        function openAnsSection(val) {
           var p = document.getElementById("para" + val);
           var svg = document.getElementById("path" + val);

           if (p.classList.contains("hidden")) {
             p.classList.remove("hidden");
             p.classList.add("block");
           } else {
              p.classList.remove("block");
              p.classList.add("hidden");
           }

           if (svg.classList.contains("hidden")) {
             svg.classList.remove("hidden");
             svg.classList.add("block");
            } else {
             svg.classList.remove("block");
             svg.classList.add("hidden");
            }
        }
    </script>     
</body>
</html>