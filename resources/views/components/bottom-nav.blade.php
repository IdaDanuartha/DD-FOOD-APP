
<div class="xl:hidden block fixed z-50 w-full h-16 max-w-lg -translate-x-1/2 bg-white border border-gray-200 rounded-full bottom-4 left-1/2 dark:bg-gray-700 dark:border-gray-600">
    <div class="grid h-full max-w-lg grid-cols-3 mx-auto">
        <button data-tooltip-target="tooltip-home" type="button" class="inline-flex flex-col items-center justify-center px-5 rounded-l-full dark:hover:bg-gray-800 group">
            <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-main-color dark:group-hover:text-main-color" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            <span class="sr-only">Home</span>
        </button>
        <div id="tooltip-home" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Home
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>        
        <div class="flex items-center justify-center">
            <button data-tooltip-target="tooltip-new" type="button" id="btnCart" class="inline-flex items-center justify-center w-10 h-10 font-medium bg-main-color rounded-full hover:bg-main-color/80 group focus:ring-4 focus:ring-main-color/50 focus:outline-none dark:focus:ring-main-color">
                <i class="fa-solid fa-cart-shopping text-white"></i>
                <span class="sr-only">Carts</span>
            </button>
        </div>
        <div id="tooltip-new" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            My Carts
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button data-tooltip-target="tooltip-orders" type="button" class="inline-flex flex-col items-center justify-center px-5 dark:hover:bg-gray-800 group">
            <i class="fa-solid fa-list-check fa-lg mb-1 text-gray-500 dark:text-gray-400 group-hover:text-main-color dark:group-hover:text-main-color"></i>
            <span class="sr-only">Orders</span>
        </button>
        <div id="tooltip-orders" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Orders
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>        
    </div>
</div>
