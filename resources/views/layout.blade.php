<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/output.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
   <!-- Include Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>@yield('title', 'Trang chủ')</title>
</head>

<body>
  <!-- Header -->
  <header>
    <section class="container max-w-screen-xl m-auto flex items-center justify-between py-4">
      <img src="{{ asset('images/logo.png') }}" alt="">
      <ul class="flex gap-8 font-medium text-xl">
        <li class="hover:text-amber-500"><a href="{{ route('page.home') }}">Home</a></li>
        <li class="hover:text-amber-500"><a href="{{ route('page.shop') }}">Shop</a></li>
        <li class="hover:text-amber-500"><a href="{{ route('page.about') }}">About</a></li>
        <li class="hover:text-amber-500"><a href="{{ route('page.contact') }}">Contact</a></li>
      </ul>
      <div class="flex gap-4">
        <span class="material-symbols-outlined">person</span>
        <span class="material-symbols-outlined">search</span>
        <span class="material-symbols-outlined">favorite</span>
        <a href="cart.html"><span class="material-symbols-outlined">shopping_cart</span></a>
      </div>
    </section>

    <!-- Banner -->
    <section class="">
      <img src="{{ asset('images/banner.jpg') }}" alt="" class="w-full">
    </section>
    <!-- End Banner -->
  </header>

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-[#262626] text-white pt-16 pb-8">
    <div class="container max-w-screen-xl m-auto grid grid-cols-4 gap-8 mb-16">
      <div>
        <img src="{{ asset('images/logofooter.svg') }}" alt="" class="mb-4">
        <p>400 University Drive Suite 200 Coral Gables, FL 33134 USA</p>
      </div>
      <div>
        <h3 class="font-semibold text-xl mb-4">Sitemap</h3>
        <ul>
          <li class="mb-4 font-medium text-base"><a href="{{ route('page.home') }}">Home</a></li>
          <li class="mb-4 font-medium text-base"><a href="{{ route('page.shop') }}">Shop</a></li>
          <li class="mb-4 font-medium text-base"><a href="{{ route('page.about') }}">About</a></li>
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

  <!-- Include Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
