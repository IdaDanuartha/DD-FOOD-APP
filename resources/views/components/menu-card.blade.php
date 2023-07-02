@foreach ($menus as $menu)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="https://picsum.photos/400/200" alt="" />
        </a>
        <div class="px-5 py-3">
            <a href="#">
                <h5 class="text-sm mb-1 tracking-tight text-main-color dark:text-white">Junkfood</h5>
            </a>
            <a href="#">
                <h5 class="mb-2 text-md font-semibold tracking-tight text-gray-900 dark:text-white">{{ $menu['name'] }}</h5>
            </a>
            <div class="flex justify-between items-center">
                <p class="mb-3 text-sm text-gray-700 dark:text-gray-400">Rp. 25.000</p>
                <a href="#" class="px-5 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Add
                </a>
            </div>
        </div>
    </div>
@endforeach
