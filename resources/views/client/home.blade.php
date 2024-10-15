<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/output.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <title>Trang chủ</title>
</head>

<body>
  <header>
    <section class="container max-w-screen-xl m-auto flex items-center justify-between py-4">
      <img src="./images/logo.png" alt="">
      <ul class="flex gap-8 font-medium text-xl">
        <li class="hover:text-amber-500"><a href="{{route('page.home')}}">Home</a></li>
        <li class="hover:text-amber-500"><a href="{{route('page.shop')}}">Shop</a></li>
        <li class="hover:text-amber-500"><a href="{{route('page.about')}}">About</a></li>
        <li class="hover:text-amber-500"><a href="{{route('page.contact')}}">Contact</a></li>
      </ul>
      <div class="flex gap-4">
        <a href="{{ route('login')}}"><span class="material-symbols-outlined">person</span></a>
        <span class="material-symbols-outlined">search</span>
        <span class="material-symbols-outlined">favorite</span>
        <a href="cart.html"><span class="material-symbols-outlined">shopping_cart</span></a>
      </div>
    </section>
    <!--  Navigation Bar-->

    <!-- Banner -->
    <section class="">
      <img src="./images/banner.jpg" alt="" class="w-full">
    </section>
    <!-- End Banner -->
  </header>
  <main>
    <section class="container max-w-screen-xl m-auto mt-16">
      <div class="flex justify-between items-center mb-4">
        <h2 class="font-semibold text-[40px] ">New Products</h2>
        <a href=""
          class="border border-solid border-[#CA8A04] py-2 px-4 font-semibold text-base text-[#CA8A04] hover:bg-yellow-700 hover:text-white">View
          all
          products</a>
      </div>
      <div class="grid grid-cols-4 gap-8">
        @foreach ($bookdesc as $desc)
        <div>
          <div class="overflow-hidden ">
            <img src="{{ $desc->thumbnail }}" class="hover:scale-125 duration-1000" alt="">
          </div>
          <div class="bg-[#F5F5F5] p-4">
            <a href="" class="hover:text-[#CA8A04]">
              <h3 class="font-semibold text-xl">{{ $desc->title }}</h3>
            </a>
            <p class="text-[#898989] text-base mt-1 mb-2">{{ $desc->title }}</p>
            <p class="font-semibold text-xl text-[#EF4444] mb-3">{{ $desc->Price }} VND </p>
            <div class="container mx-auto">
              <a href="{{ route('page.detail', $desc->id) }}"
                 class="block border border-solid border-[#CA8A04] text-[#CA8A04] font-semibold w-full text-base py-2 text-center hover:bg-yellow-700 hover:text-white">
                 Xem Chi tiet
              </a>
           </div>
           
          </div>
        </div>
        @endforeach
       
    </section>
    <!--end product-->
    <section class="container max-w-screen-xl m-auto mt-16">
      <div class="flex justify-between items-center mb-4">
        <h2 class="font-semibold text-[40px] ">Gallery</h2>
        <a href=""
          class="border border-solid border-[#CA8A04] py-2 px-4 font-semibold text-base text-[#CA8A04] hover:bg-yellow-700 hover:text-white">View
          all gallery</a>
      </div>
      <div class="grid grid-cols-3 gap-8 overflow-hidden">
        <img src="./images/Gallery-1.jpg" alt="" class="hover:scale-95 duration-1000">
        <img src="./images/Gallery-2.png" alt="" class="hover:scale-95 duration-1000">
        <img src="./images/Gallery-3.png" alt="" class="hover:scale-95 duration-1000">
        <img src="./images/Gallery-4.png" alt="" class="hover:scale-95 duration-1000">
        <img src="./images/Gallery-5.png" alt="" class="hover:scale-95 duration-1000">
        <img src="./images/Gallery-6.png" alt="" class="hover:scale-95 duration-1000">

      </div>
    </section>
    <!-- end Gare-->
    <section class="container max-w-screen-xl m-auto mt-16">
      <div class="flex justify-between items-center mb-4">
        <h2 class="font-semibold text-[40px] ">News</h2>
        <a href=""
          class="border border-solid border-[#CA8A04] py-2 px-4 font-semibold text-base text-[#CA8A04] hover:bg-yellow-700 hover:text-white">View
          all news</a>
      </div>
      <div class="grid grid-cols-4 gap-8">
        <div>
          <div class="overflow-hidden">
            <img src="./images/News-1.jpg" alt="" class="hover:skew-y-6 duration-1000">
          </div>
          <div>
            <p class="text-[#9CA3AF] font-semibold text-sm flex items-center mt-4 mb-1 "><span
                class="material-symbols-outlined mr-2">calendar_month</span>24/4/2024</p>
            <h3 class="font-semibold text-xl mb-3">A bedroom must have something like this</h3>
            <a href="" class="text-red-600 font-semibold text-base flex items-center">Xem chi tiết <span
                class="material-symbols-outlined ml-2">arrow_forward</span></a>
          </div>
        </div>
        <div>
          <div class="overflow-hidden">
            <img src="./images/News-2.png" alt="" class="hover:scale-125 duration-1000">
          </div>
          <div>
            <p class="text-[#9CA3AF] font-semibold text-sm flex items-center mt-4 mb-1 "><span
                class="material-symbols-outlined mr-2">calendar_month</span>24/4/2024</p>
            <h3 class="font-semibold text-xl mb-3">A bedroom must have something like this</h3>
            <a href="" class="text-red-600 font-semibold text-base flex items-center">Xem chi tiết <span
                class="material-symbols-outlined ml-2">arrow_forward</span></a>
          </div>
        </div>
        <div>
          <div class="overflow-hidden">
            <img src="./images/News-3.png" alt="" class="hover:skew-y-6 duration-1000">
          </div>
          <div>
            <p class="text-[#9CA3AF] font-semibold text-sm flex items-center mt-4 mb-1 "><span
                class="material-symbols-outlined mr-2">calendar_month</span>24/4/2024</p>
            <h3 class="font-semibold text-xl mb-3">A bedroom must have something like this</h3>
            <a href="" class="text-red-600 font-semibold text-base flex items-center">Xem chi tiết <span
                class="material-symbols-outlined ml-2">arrow_forward</span></a>
          </div>
        </div>
        <div>
          <div class="overflow-hidden">
            <img src="./images/News-4.png" alt="" class="hover:scale-125 duration-1000">
          </div>
          <div>
            <p class="text-[#9CA3AF] font-semibold text-sm flex items-center mt-4 mb-1 "><span
                class="material-symbols-outlined mr-2">calendar_month</span>24/4/2024</p>
            <h3 class="font-semibold text-xl mb-3">A bedroom must have something like this</h3>
            <a href="" class="text-red-600 font-semibold text-base flex items-center">Xem chi tiết <span
                class="material-symbols-outlined ml-2">arrow_forward</span></a>
          </div>
        </div>
      </div>
    </section>
    <!-- End News-->
    <section class="bg-[#FFF7ED] py-16 mt-16">
      <div class="container max-w-screen-xl m-auto grid grid-cols-4">
        <div class="flex gap-5 items-center">
          <img src="./images/Vector.png" alt="">
          <div>
            <h3 class="font-semibold text-xl mb-1">High Quality</h3>
            <p class="text-[#898989]">Crafted from top materials</p>
          </div>
        </div>
        <div class="flex gap-5 items-center">
          <img src="./images/Vector.png" alt="">
          <div>
            <h3 class="font-semibold text-xl mb-1">High Quality</h3>
            <p class="text-[#898989]">Crafted from top materials</p>
          </div>
        </div>
        <div class="flex gap-5 items-center">
          <img src="./images/Vector.png" alt="">
          <div>
            <h3 class="font-semibold text-xl mb-1">High Quality</h3>
            <p class="text-[#898989]">Crafted from top materials</p>
          </div>
        </div>
        <div class="flex gap-5 items-center">
          <img src="./images/Vector.png" alt="">
          <div>
            <h3 class="font-semibold text-xl mb-1">High Quality</h3>
            <p class="text-[#898989]">Crafted from top materials</p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="bg-[#262626] text-white pt-16 pb-8">
    <div class="container max-w-screen-xl m-auto grid grid-cols-4 gap-8 mb-16">
      <div>
        <img src="./images/logofooter.svg" alt="" class="mb-4">
        <p>400 University Drive Suite 200 Coral Gables, FL 33134 USA</p>
      </div>
      <div>
        <h3 class="font-semibold text-xl mb-4">Sitemap</h3>
        <ul>
          <li class="mb-4 font-medium text-base"><a href="">Home</a></li>
          <li class="mb-4 font-medium text-base"><a href="">Shop</a></li>
          <li class="mb-4 font-medium text-base"><a href="">About</a></li>
          <li><a href="product-detail.html">Products</a></li>
        </ul>
      </div>
      <div>
        <h3 class="font-semibold text-xl mb-4">Help</h3>
        <ul>
          <li class="mb-4 font-medium text-base"><a href="">Payment Options</a></li>
          <li class="mb-4 font-medium text-base"><a href="">Returns</a></li>
          <li class="font-medium text-base"><a href="">Privacy Policies</a></li>
        </ul>
      </div>
      <div>
        <h3 class="font-semibold text-xl mb-4">Location</h3>
        <ul>
          <li class="mb-4 font-medium text-base"><a href="">support@euphoria.in</a></li>
          <li class="mb-4 font-medium text-base"><a href="">Ahmedabad Main Road</a></li>
          <li class="font-medium text-base"><a href="">Udaipur, India- 313002</a></li>
        </ul>
      </div>
    </div>
    <hr />
    <p class="text-center my-8 font-medium text-base">Copyright © 2023 Euphoria Folks Pvt Ltd. All rights reserved.</p>
  </footer>
</body>

</html>