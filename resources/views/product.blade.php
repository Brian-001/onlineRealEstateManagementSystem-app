<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div class="md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
        <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
            <img class="w-full" alt="image of a girl posing" src="https://i.ibb.co/QMdWfzX/component-image-one.png" />
            <img class="mt-6 w-full" alt="image of a girl posing" src="https://i.ibb.co/qxkRXSq/component-image-two.png" />
        </div> 
        <div class="md:hidden">
            <img class="w-full" alt="image of a girl posing" src="https://i.ibb.co/QMdWfzX/component-image-one.png" />
            <div class="flex items-center justify-between mt-3 space-x-4 md:space-x-0">
                <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/cYDrVGh/Rectangle-245.png" />
                <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/f17NXrW/Rectangle-244.png" />
                <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/cYDrVGh/Rectangle-245.png" />
                <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/f17NXrW/Rectangle-244.png" />
            </div>
        </div>
        <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
            <div class="border-b border-gray-200 pb-6">
                <p class="text-2xl leading-none text-black-600 dark:text-black-300 ">Product Details</p>
            </div>
            <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                <p class="text-base leading-4 text-gray-800 dark:text-black-300">Colours</p>
                <div class="flex items-center justify-center">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2.svg" alt="next">
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2dark.svg" alt="next">   
                </div>
            </div>
            <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                <p class="text-base leading-4 text-gray-800 dark:text-black-300">Size</p>
                <div class="flex items-center justify-center">
                    
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2.svg" alt="next">
                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg2dark.svg" alt="next">  
                </div>
            </div>
            <button class="dark:bg-gray dark:text-black-900  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-gray-800 w-full py-4 hover:bg-gray-700 focus:outline-none">
                <img class="mr-3 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/svg1.svg" alt="location">
                <img class="mr-3 hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/svg1dark.svg" alt="location">
                Check availability in store
            </button>
            <div>
                <p class="xl:pr-48 text-base lg:leading-tight leading-normal text-black-600 dark:text-black-300 mt-7">It is a long established fact that a reader will be distracted by thereadable content of a page when looking at its layout. The point of usingLorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                <p class="text-base leading-4 mt-7 text-black-600 dark:text-black-300">Product Code: 8BN321AF2IF0NYA</p>
                <p class="text-base leading-4 mt-4 text-black-600 dark:text-black-300">Length: 13.2 inches</p>
                <p class="text-base leading-4 mt-4 text-black-600 dark:text-black-300">Height: 10 inches</p>
                <p class="text-base leading-4 mt-4 text-black-600 dark:text-black-300">Depth: 5.1 inches</p>
                <p class="md:w-96 text-base leading-normal text-black-600 dark:text-black-300 mt-4">Composition: 100% calf leather, inside: 100% lamb leather</p>
            </div>
            <div>
                <div class="border-t border-b py-4 mt-7 border-gray-200">
                    <div data-menu class="flex justify-between items-center cursor-pointer">
                        <p class="text-base leading-4 text-gray-800 dark:text-black-300">Shipping and returns</p>
                        <button class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 rounded" role="button" aria-label="show or hide">
                            <img class="transform dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg4.svg" alt="dropdown">
                            <img class="transform hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg4dark.svg" alt="dropdown">
                        </button>
                    </div>
                    <div class="hidden pt-4 text-base leading-normal pr-12 mt-4 text-black-600 dark:text-black-300" id="sect">You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are nonrefundable</div>
                </div>
            </div>
            <div>
                <div class="border-b py-4 border-gray-200">
                    <div data-menu class="flex justify-between items-center cursor-pointer">
                        <p class="text-base leading-4 text-black-800 dark:text-black-300">Contact us</p>
                        <button class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 rounded" role="button" aria-label="show or hide">
                            <img class="transform dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg4.svg" alt="dropdown">
                            <img class="transform hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail3-svg4dark.svg" alt="dropdown">
                        </button>
                    </div>
                    <div class="hidden pt-4 text-base leading-normal pr-12 mt-4 text-black-600 dark:text-black-300" id="sect">If you have any questions on how to return your item to us, contact us.</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>