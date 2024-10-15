<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>About</title>
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
        <section class="container max-w-screen-xl m-auto flex items-center justify-between py-16">
            <div class="text-center">
                <img src="/images/iconabout.png" alt="Icon About" class="mx-auto mb-4">
                <h3 class="font-bold text-3xl mb-2">OUR MISSION</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>            
            <div class="text-center px-8">
                <img src="/images/iconabout.png" alt="Icon About" class="mx-auto mb-4 ">
                <h3 class="font-bold text-3xl mb-2">OUR MISSION</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>

            <div class="text-center">
                <img src="/images/iconabout.png" alt="Icon About" class="mx-auto mb-4">
                <h3 class="font-bold text-3xl mb-2">OUR MISSION</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
        </section>
        <section class="container max-w-screen-xl m-auto flex items-center justify-between">
            <img src="/images/bannerabout2.png" class="hover:scale-125 duration-500" alt="">
            <div class="ml-8">
                <h2 class="mb-8 font-semibold text-3xl">ABOUT FURNIRO COMPANY</h2>
                <p class="font-normal text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class="font-normal text-lg mt-3">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </section>
        <section class="container max-w-screen-xl mx-auto py-16">
            <h1 class="text-center font-semibold text-4xl mx-auto max-w-2xl pb-8">
                WE CREATE NATURAL WOOD FURNITURE AS WELL AS HIGH-QUALITY
            </h1>
            <div class="grid grid-cols-4 gap-4">
                <img src="/images/imgcontent.png" class="hover:skew-y-6 duration-1000" alt="">
                <img src="/images/imgcontent.png" class="hover:skew-y-6 duration-1000" alt="">
                <img src="/images/imgcontent.png" class="hover:skew-y-6 duration-1000" alt="">
                <img src="/images/imgcontent.png" class="hover:skew-y-6 duration-1000" alt="">
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
                    <li><a href="">Contact</a></li>
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
        <p class="text-center my-8 font-medium text-base">Copyright © 2023 Euphoria Folks Pvt Ltd. All rights reserved.
        </p>
    </footer>
</body>

</html>
