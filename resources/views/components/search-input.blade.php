<div>
    <form class="flex">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-main-color dark:text-main-color" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="text" id="default-search" class="block w-full p-4 pl-10 text-sm border-0 text-gray-900 shadow-md rounded-lg bg-white focus:ring-main-color focus:border-main-color dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-main-color dark:focus:border-main-color" placeholder="What do you want to eat today" required>
        </div>
        <div class="ml-5">
            <button type="button" id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="bg-white shadow-md duration-300 w-full h-full px-4 py-3 rounded-lg border hover:border-main-color group focus:ring-main-color focus:border-main-color dark:focus:ring-main-color dark:focus:border-main-color">
                <i class="fa-solid fa-filter text-main-color"></i>
            </button>
        </div>
         <!-- Dropdown menu -->
         <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
            <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="filter-appetizer" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="filter-appetizer" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Appetizer</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="filter-main-course" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="filter-main-course" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Main Course</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="filter-dessert" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="filter-dessert" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Dessert</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="filter-coffee" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="filter-coffee" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Coffee</label>
                    </div>
                </li>
            </ul>
        </div>    
    </form>
</div>