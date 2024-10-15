<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Chi tiết SP</title>
</head>
<body>
    <header>
        <section class="container max-w-screen-xl m-auto flex items-center justify-between py-4">
            <img src="{{asset('images/logo.png')}}" alt="">
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
    </header>
    <main class="container max-w-screen-xl m-auto">
        <section class="mt-16">
            <div class="grid grid-cols-2 gap-8 mb-16">
                <div class="grid grid-cols-6 gap-8">
                    <div class="col-span-1 *:mb-4">
                        <p><img src="{{ $book->thumbnail}}" width="200" alt=""></p>
                        <p><img src="{{ $book->thumbnail}}" width="200" alt=""></p>
                        <p><img src="{{ $book->thumbnail}}" width="200" alt=""></p>
                        <p><img src="{{ $book->thumbnail}}" width="200" alt=""></p>
                        <p><img src="{{ $book->thumbnail}}" width="200" alt=""></p>

                    </div>
                    <div class="col-span-5">
                        <p><img src="{{ $book->thumbnail}}" alt=""></p>
                    </div>
                </div>
                <!-- end slide -->
                <div>
                    <p class="font-medium text-x1"> <span>{{ $book->title }}</span></p>
                    <p class="font-bold text-[40px] text-[#EF4444] my-2">{{ $book->Price }}</p>
                    <div class="flex items-center">
                        <div class="*:text-[#FFC700] border-r border-solid border-neutral-400 pr-4 mr-4">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                        </div>
                        <span class="font-medium text-sm text-[#9F9F9F]">5 Customer Review</span>
                    </div>
                    <p class="font-medium my-4">Setting the bar as one of the loudest speakers in its class, the Kilburn
                        is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and
                        extended highs for a sound.</p>
                    <div>
                        <p class="text-[#A3A3A3] mb-1">Size</p>
                        <div class="flex gap-4">
                            <div class=" bg-yellow-600 w-[30px] flex items-center justify-center text-white rounded">L
                            </div>
                            <div class=" bg-neutral-400 w-[30px] flex items-center justify-center text-white rounded">XL
                            </div>
                            <div class=" bg-neutral-400 w-[30px] flex items-center justify-center text-white rounded">XS
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-8">
                        <p class="text-[#A3A3A3] mb-1">Color</p>
                        <div class="flex gap-4">
                            <div class=" bg-[#816DFA] w-[30px] h-[30px] rounded-full"></div>
                            <div class=" bg-[#000] w-[30px] h-[30px] rounded-full"></div>
                            <div class=" bg-[#B88E2F] w-[30px] h-[30px] rounded-full"></div>
                        </div>
                    </div>

                    <div>
                        <form action="">
                            <div class="border border-solid border-neutral-400 w-fit rounded inline-block">
                                <button class="py-2 px-4">-</button>
                                <input type="text" value="1" class="w-[30px] text-center">
                                <button class="px-2 px-4">+</button>
                            </div>
                            <button type="submit"
                                class="border border-solid border-yellow-600 text-yellow-600 rounded py-2 px-10 ml-3 hover:bg-yellow-700 hover:text-white">Add
                                To Cart</button>
                            <button type="submit"
                                class="border border-solid border-neutral-800 text-neutral-800 rounded py-2 px-10 ml-3 hover:bg-yellow-700 hover:text-white">+
                                Compare</button>
                        </form>
                    </div>
                    <hr class="text-neutral-400 mt-8 mb-3">
                    <div class="*:mb-3 *:text-[#A3A3A3]">
                        <p>SKU : SS001</p>
                        <p>Category: Sofa</p>
                        <p>Tags: Sofa, Chair, Home, Shop</p>
                    </div>
                </div>
            </div>
            <!-- End short description -->
            <div>
                <div class="*:font-semibold *:text-x1 *:mr-16 border-b pb-4 mb-8">
                    <a href="">Description</a>
                    <a href="" class="text-[#A3A3A3]">Additional Information</a>
                    <a href="" class="text-[#A3A3A3]">Reviews [5]</a>
                </div>
                <hr>
                <div class="*:text[#A3A3A3] *: font-medium">
                    <p class="mb-2">Embodying the raw, wayward spirit of rock ‘n’ roll, the Kilburn portable active stereo speaker takes the unmistakable look and sound of Marshall, unplugs the chords, and takes the show on the road.</p>
                    <p class="mb-8">Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.</p>
                    <div class="flex gap-8">
                        <img src="{{asset('images/Rectangle 313.jpg')}}" alt="">
                        <img src="{{asset('images/Rectangle 314.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->
        <section class="my-16">
            <div class="mb-4">
              <h2 class="font-semibold text-[40px] text-center ">Related Products</h2>
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
            </div>
          </section>
    </main>

    <footer class="bg-[#262626] text-white pt-16 pb-8">
        <div class="container max-w-screen-xl m-auto grid grid-cols-4 gap-8 mb-16">
            <div>
                <img src="{{asset('images/logofoot')}}" alt="" class="mb-4">
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