<div>

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="xl:block hidden items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button> 

    <aside id="default-sidebar"
        class="xl:block hidden fixed top-0 left-0 z-40 w-40 h-screen transition-transform -translate-x-full sm:translate-x-0 shadow-md shadow-[rgba(0,0,0,.05)]"
        aria-label="Sidebar">
        <div class="h-full px-4 py-10 overflow-y-auto bg-gray-50 dark:bg-gray-800">
         <a href="#" class="flex items-center mb-5 justify-center">
             <img src="{{ asset('assets/img/logo/v2.png') }}" width="80%" alt="">
            {{-- <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white text-main-color">
            </span> --}}
         </a>
            <ul class="space-y-2 font-medium">
                <li class="px-3">
                    <a href="/home"
                        class="nav-item {{ Request::is('home*') ? 'active' : '' }} flex flex-col items-center px-2 py-3 text-gray-900 rounded-lg dark:text-white dark:hover:bg-gray-700">
                        <span><i class="fa-solid fa-house fa-lg"></i></span>
                        <span class="">Home</span>
                    </a>
                </li>
                <li class="px-3">
                    <a href="/orders"
                        class="nav-item {{ Request::is('orders*') ? 'active' : '' }} flex flex-col items-center px-2 py-3 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span><i class="fa-solid fa-list-check fa-lg"></i></span>
                        <span class="">Orders</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="px-4 py-6 xl:ml-44 xl:-mt-10 mt-0 xl:mb-0 mb-12">
        {{ $slot }}
    </div>

</div>
