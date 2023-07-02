@foreach ($carts as $cart)
<div class="mb-4">
    <div class="flex">
        <img class="mr-2 rounded-md" src="https://picsum.photos/400/300" width="100" alt="">
        <div class="my-1 w-full">
            <h3 class="font-semibold text-md">{{ $cart['name'] }}</h3>
            <div class="flex items-center justify-between mt-1">
                <p class="font-medium text-gray-600">Rp. 25.000</p>
                <div class="ml-5">
                    <button class="bg-gray-200 px-2 py-1 rounded"><i class="fa-solid fa-minus"></i></button>
                    <input class="mx-1.5 text-center bg-white text-lg pt-1 w-7" type="input" disabled value="1">
                    <button class="bg-main-color text-white px-2 py-1 rounded"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach