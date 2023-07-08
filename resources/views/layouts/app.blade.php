<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>D&D Food</title>

    {{-- Font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Custom style --}}
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" />

    {{-- Swiper js --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>


    @if(Request::is("auth/login*"))
      {{ $slot }}
    @else
      <x-sidebar>
        {{ $slot }}
      </x-sidebar>
      <x-bottom-nav></x-bottom-nav>
    @endif

    @livewireScripts

    {{-- Swiper js --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
          pagination: {
            el: ".swiper-pagination",
          },
        });

        const btnCart = document.getElementById('btnCart')
        const cart = document.getElementById('cartContainer')
        const closeBtnCart = document.getElementById('closeBtnCart')

        btnCart.addEventListener('click', function() {
          cart.classList.toggle('active')
        })
        closeBtnCart.addEventListener('click', function() {
          cart.classList.toggle('active')
        })
      </script>
</body>
</html>