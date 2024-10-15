<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <title>Contact</title>
</head>

<body>
    <header>
        <section class="container max-w-screen-xl m-auto flex items-center justify-between py-4">
            <img src="./images/logo.png" alt="" />
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
            <img src="./images/bannercontrac.jpg" alt="" class="w-full" />
        </section>
        <!-- End Banner -->
    </header>

    <main>
        <section class="container max-w-screen-xl m-auto grid items-center grid-cols-8 py-16">
            <div class="flex items-center col-span-2">
                <span
                    class="p-3 mr-3 material-symbols-outlined text-[#CA8A04] border-solid border-2 border-[#CA8A04]">location_on</span>
                <div class="">
                    <h3 class="font-bold text-2xl mt-14 mb-4">ADDRESS</h3>
                    <p class="font-normal text-[18px] text-[#71717A] ">60/850 Đường Láng, Láng Thượng, Đống Đa, Hà Nội</p>
                </div>
            </div>
            <div class="col-span-1"></div>
            <div class="flex items-center col-span-2">
                <span
                    class="p-3 mr-3 material-symbols-outlined text-[#CA8A04] border-solid border-2 border-[#CA8A04]">location_on</span>
                <div class="">
                    <h3 class="font-bold text-2xl mt-14 mb-4">CONTACT DETAILS</h3>
                    <p class="font-normal text-[#71717A] ">info@furniro.com</p>
                    <p class="font-bold text-[24px] text-[#71717A]">02056278686</p>
                </div>
            </div>
            <div class="col-span-1"></div>
            <div class="flex items-center col-span-2">
                <span
                    class="p-3 mr-3 material-symbols-outlined text-[#CA8A04] border-solid border-2 border-[#CA8A04]">location_on</span>
                <div class="">
                    <h3 class="font-bold text-[24px] mt-14 mb-4">SOCIAL NETWORFS</h3>
                    <img src="./images/icon.png" alt="">
                </div>
            </div>
        </section>
        <section class="container max-w-screen-xl grid grid-cols-2 bg-[#F1F1F1]">
            <div class="col-span-1">
            <img src="./images/bannermain.png" alt="">
            </div>
            <div class="col-span-1 leading-10 p-8 bg-[#F1F1F1]">
                <p class="font-semibold text-[20px]">CONTACT</p>
                <H2 class="font-bold text-[40px]">CONNECT WITH US NOW</H2>
                <form action="" class="grid grid-cols-2 pr-[80px] py-8">
                    <input class="border-b font-normal text-[16px] py-2 border-[#9CA3AF] w-[90%] bg-[#F1F1F1]" type="text"
                        placeholder="Firt Name">
                    <input class="border-b font-normal text-[16px] py-2 border-[#9CA3AF] w-[90%] bg-[#F1F1F1]" type="text"
                        placeholder="Last name">
                    <input class="border-b font-normal text-[16px] py-2 border-[#9CA3AF] w-[90%] bg-[#F1F1F1]" type="email"
                        placeholder="Email">
                    <input class="border-b font-normal text-[16px] py-2 border-[#9CA3AF] w-[90%] bg-[#F1F1F1]" type="text"
                        placeholder="PhoneNumber">
                    <input class="border-b font-normal text-[16px] py-2 border-[#9CA3AF] w-[90%] bg-[#F1F1F1]" type="text"
                        placeholder="Message"><br>
                
                <a href="#"
                    class="font-bold border border-solid border-[#CA8A04] text-[#CA8A04] inline-block text-center px-6 hover:bg-[#CA8A04] hover:text-white ">imSend
                    Infomation</a>
                    </form>
            </div>
        </section>
    </main>


    <footer class="bg-[#262626] text-white pt-16 pb-8">
        <div class="container max-w-screen-xl m-auto grid grid-cols-4 gap-8 mb-16">
            <div>
                <img src="./images/logofooter.svg" alt="" class="mb-4" />
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
                    <li class="mb-4 font-medium text-base">
                        <a href="">Payment Options</a>
                    </li>
                    <li class="mb-4 font-medium text-base"><a href="">Returns</a></li>
                    <li class="font-medium text-base">
                        <a href="">Privacy Policies</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-xl mb-4">Location</h3>
                <ul>
                    <li class="mb-4 font-medium text-base">
                        <a href="">support@euphoria.in</a>
                    </li>
                    <li class="mb-4 font-medium text-base">
                        <a href="">Ahmedabad Main Road</a>
                    </li>
                    <li class="font-medium text-base">
                        <a href="">Udaipur, India- 313002</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr />
        <p class="text-center my-8 font-medium text-base">
            Copyright © 2023 Euphoria Folks Pvt Ltd. All rights reserved.
        </p>
    </footer>
</body>

</html>