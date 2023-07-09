@foreach ($menus as $index => $menu)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div data-modal-target="modal-menu-{{ $index }}" data-modal-toggle="modal-menu-{{ $index }}">
            <img class="rounded-t-lg cursor-pointer" src="https://picsum.photos/400/200" alt="" />
        </div>
        <div class="px-5 py-3">
            <a href="#">
                <h5 class="text-sm mb-1 tracking-tight text-main-color dark:text-white">Junkfood</h5>
            </a>
            <div data-modal-target="modal-menu-{{ $index }}" data-modal-toggle="modal-menu-{{ $index }}">
                <h5 class="cursor-pointer mb-2 text-md font-semibold tracking-tight text-gray-900 dark:text-white">{{ $menu['name'] }}</h5>
            </div>
            <div class="flex justify-between items-center">
                <p class="text-sm text-gray-700 dark:text-gray-400">Rp. 25.000</p>
                <a href="#" class="px-5 py-2 text-xs font-medium text-center text-white bg-main-color rounded-lg hover:bg-main-color/90 focus:ring-4 focus:outline-none focus:ring-main-color/50 dark:bg-main-color dark:hover:bg-main-color dark:focus:ring-main-color">
                Add
                </a>
            </div>
        </div>
    </div>

    <div id="modal-menu-{{ $index }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-4">
                        <div>
                            <img class="mr-2 rounded-md" src="https://picsum.photos/400/300" width="100%" alt="">    
                        </div>                        
                        <div class="my-1 w-full">
                            <h4 class="font-semibold text-main-color text-sm capitalize">{{ $menu->category->name }}</h3>
                            <h3 class="font-semibold text-2xl">{{ $menu->name }}</h3>
                            <p class="my-3 text-sm font-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi quidem nihil perspiciatis labore unde provident.</p>
                            <div class="flex items-center justify-between mt-1">
                                <p class="font-medium text-lg text-gray-600">Rp. 25.000</p>
                                <div class="ml-5">
                                    <button class="bg-gray-200 px-2 py-1 rounded"><i class="fa-solid fa-minus"></i></button>
                                    <input class="mx-1.5 text-center bg-white text-lg pt-1 w-7" type="input" disabled value="1">
                                    <button class="bg-main-color text-white px-2 py-1 rounded"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="block mt-4">
                                <button type="button" class="text-white bg-main-color hover:bg-main-color/90 focus:ring-4 focus:ring-main-color/50 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-main-color dark:hover:bg-main-color focus:outline-none dark:focus:ring-main-color w-full">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
@endforeach
