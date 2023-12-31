<div>
  
    <div class="grid grid-cols-3 gap-4"> 
        <div class="xl:col-span-2 col-span-3">
            <x-search-input :categories="$categories"></x-search-input>
                
            <div class="swiper mySwiper"> 
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <section class="my-5 bg-center bg-no-repeat bg-[url('https://marketplace.canva.com/EAFVfgsKMAE/1/0/1600w/canva-black-and-yellow-simple-minimalist-burger-promotion-banner-YTqWS2eL8TM.jpg')] bg-gray-700 bg-blend-multiply">
                            <div class="px-4 mx-auto max-w-screen-xl text-center py-20 lg:py-30">
                                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-4xl lg:text-5xl">We invest in the world's potential</h1>                             
                                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                                    <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                                        Get started
                                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </a>
                                    <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                                        Learn more
                                    </a>  
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="swiper-slide">
                        <section class="my-5 bg-center bg-no-repeat bg-[url('https://marketplace.canva.com/EAFVfgsKMAE/1/0/1600w/canva-black-and-yellow-simple-minimalist-burger-promotion-banner-YTqWS2eL8TM.jpg')] bg-gray-700 bg-blend-multiply">
                            <div class="px-4 mx-auto max-w-screen-xl text-center py-20 lg:py-30">
                                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-4xl lg:text-5xl">We invest in the world's potential</h1>                             
                                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                                    <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                                        Get started
                                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </a>
                                    <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                                        Learn more
                                    </a>  
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="swiper-pagination relative top-2"></div>
            </div>

            
            <div class="mb-4 border-b-2 border-gray-200 dark:border-gray-700 tabs-group">
                <ul class="flex -mb-px text-sm font-medium text-center overflow-x-scroll w-full no-scrollbar" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="tabs-item mr-2" role="presentation">
                        <button class="tabs-btn inline-block p-4 border-b-2 rounded-t-lg" id="all-tab" data-tabs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">All</button>
                    </li>
                    <li class="tabs-item mr-2" role="presentation">
                        <button class="tabs-btn inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 xs:w-full w-[120px]" id="best-sellers-tab" data-tabs-target="#best-sellers" type="button" role="tab" aria-controls="best-sellers" aria-selected="false">Best Sellers</button>
                    </li>
                    <li class="tabs-item mr-2" role="presentation">
                        <button class="tabs-btn inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="promotion-tab" data-tabs-target="#promotion" type="button" role="tab" aria-controls="promotion" aria-selected="false">Promotion</button>
                    </li>
                    <li class="tabs-item" role="presentation">
                        <button class="tabs-btn inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 xs:w-full w-[130px]" id="new-comers-tab" data-tabs-target="#new-comers" type="button" role="tab" aria-controls="new-comers" aria-selected="false">New Comers</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden py-4 rounded-lg dark:bg-gray-800" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="grid md:grid-cols-3 xs:grid-cols-2 grid-cols-1 gap-4">       
                        <x-menu-card :menus="$menus"></x-menu-card>
                    </div>
                </div>
                <div class="hidden py-4 rounded-lg dark:bg-gray-800" id="best-sellers" role="tabpanel" aria-labelledby="best-sellers-tab">
                    <div class="grid md:grid-cols-3 xs:grid-cols-2 grid-cols-1 gap-4">       
                        <x-menu-card :menus="$menus"></x-menu-card>
                    </div>
                </div>
                <div class="hidden py-4 rounded-lg dark:bg-gray-800" id="promotion" role="tabpanel" aria-labelledby="promotion-tab">
                    <div class="grid md:grid-cols-3 xs:grid-cols-2 grid-cols-1 gap-4">       
                        <x-menu-card :menus="$menus"></x-menu-card>
                    </div>
                </div>
                <div class="hidden py-4 rounded-lg dark:bg-gray-800" id="new-comers" role="tabpanel" aria-labelledby="new-comers-tab">
                    <div class="grid md:grid-cols-3 xs:grid-cols-2 grid-cols-1 gap-4">       
                        <x-menu-card :menus="$menus"></x-menu-card>
                    </div>
                </div>
            </div>

            </div>
        <div class="xl:col-span-1 col-span-3 xl:relative fixed xl:z-10 z-[999] xl:w-full w-[94vw] cart-container" id="cartContainer">
            <div class="bg-white w-full rounded-lg shadow-md p-4">
                <div>
                    <div class="flex justify-between items-center">
                        <h1 class="font-semibold text-xl">My Orders</h1>
                        <span id="closeBtnCart" class="xl:hidden block">
                            <i class="fa-solid fa-xmark fa-lg cursor-pointer duration-200 hover:text-main-color"></i>
                        </span>
                    </div>
                    <h3 class="text-gray-400 font-medium my-4">Items</h3>
                </div>
                <div class="{{ $menus->count() > 5 ? 'xs:h-[55vh] 2xs:h-[50vh] h-[40vh] overflow-y-scroll no-scrollbar':'' }}">
                    <x-cart-card :carts="$menus"></x-cart-card>
                </div>
                <div class="mt-10 border-b-[3px] pb-4 mb-4 border-gray-300 border-dashed">
                    <div class="flex justify-between mb-2">
                        <p class="text-gray-500">Subtotal</p>
                        <p>Rp. 75.000</p>
                    </div>
                    <div class="flex justify-between mb-2">
                        <p class="text-gray-500">Discount</p>
                        <p>Rp. 0</p>
                    </div>
                    <div class="flex justify-between mb-2">
                        <p class="text-gray-500">Tax (6%)</p>
                        <p>Rp. 4.500</p>
                    </div>
                </div>
                <div class="flex justify-between mb-5">
                    <p class="font-semibold">Total</p>
                    <p class="font-semibold">Rp. 79.500</p>
                </div>
                <div class="block">
                    <button type="button" class="text-white bg-main-color hover:bg-main-color/90 focus:ring-4 focus:ring-main-color/50 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-main-color dark:hover:bg-main-color focus:outline-none dark:focus:ring-main-color w-full">Order Now</button>
                </div>
            </div>
        </div>
    </div>

</div>
