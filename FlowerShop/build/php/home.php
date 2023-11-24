<!doctype html>
<html lang="en " class="scroll-smooth">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home Page</title>
        <link rel="stylesheet" href="/Flowershop/build/css/style.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>
    <body class="font-Rubik bg-customWhite relative scroll-smooth">
        <!-- Header -->
        <header
            class="fixed top-0 left-0 flex items-center justify-between w-[100%] bg-white p-7 px-20 shadow-md"
        >
            <a href="" class="text-3xl uppercase text-customDarkPink font-bold"
                >Blossom <span class="text-customVeryDarkPink">Hub</span></a
            >
            <!-- Navbar -->
            <nav
                class="flex items-center justify-between space-x-10 text-xl uppercase text-customVeryDarkPink"
            >
                <a
                    href="#home"
                    class="relative after:content-[''] after:w-[0px] after:h-[3px] scroll-links after:bg-customVeryDarkPink after:absolute after:-bottom-2 after:left-0 hover:after:w-[100%] ease-linear hover:after:duration-500"
                    >Home</a
                >
                <a
                    href="#About"
                    class="relative scroll-links after:content-[''] after:w-[0px] after:h-[3px] after:bg-customVeryDarkPink after:absolute after:-bottom-2 after:left-0 hover:after:w-[100%] ease-linear hover:after:duration-500"
                    >About</a
                >
                <a
                    href="#featured"
                    class="relative scroll-links after:content-[''] after:w-[0px] after:h-[3px] after:bg-customVeryDarkPink after:absolute after:-bottom-2 after:left-0 hover:after:w-[100%] ease-linear hover:after:duration-500"
                    >Featured</a
                >
                <a
                    href="/Flowershop/build/php/product1.php"
                    class="relative after:content-[''] after:w-[0px] after:h-[3px] after:bg-customVeryDarkPink after:absolute after:-bottom-2 after:left-0 hover:after:w-[100%] ease-linear hover:after:duration-500"
                    >Products</a
                >

                <a
                    href="/Flowershop/build/php/contact1.php"
                    class="relative after:content-[''] after:w-[0px] after:h-[3px] after:bg-customVeryDarkPink after:absolute after:-bottom-2 after:left-0 hover:after:w-[100%] ease-linear hover:after:duration-500"
                    >Contact</a
                >
            </nav>

            <!-- End of Navbar -->

            <!-- Icons -->
            <div
                class="flex items-center space-x-4 text-2xl text-customVeryDarkPink cursor-pointer"
            >
                <a href="product.html"><i class="fas fa-shopping-cart"></i></a>
                <a href="/Flowershop/build/php/login.php"><i class="fas fa-user"></i></a>
            </div>
            <!-- End of Icons -->
        </header>
        <!-- End of Header -->

        <!-- Home Section -->

        <section id="home" class="min-h-screen flex items-center heros">
            <div class="relative w-[100%]">
                <div
                    class="w-[850px] h-[800px] absolute flex flex-col space-y-8 -top-60 right-20 py-8"
                >
                    <h1 class="text-6xl text-customVeryDarkPink my-2 uppercase">
                        Welcome to Blossom Hub
                    </h1>
                    <span class="text-3xl text-pink-400"
                        >Where Blooms Come to Life !</span
                    >
                    <p
                        class="w-[600px] text-slate-800 text-justify my-5 text-xl"
                    >
                        At Blossom Hub , we're passionate about crafting
                        stunning floral arrangements that speak volumes. Whether
                        you're celebrating love, milestones, or simply
                        appreciating the beauty of nature, our flowers add a
                        touch of elegance to every moment. Explore our exquisite
                        blooms and let us help you tell your story through
                        petals
                    </p>
                    <a
                        href="/Flowershop/build/php/product1.php"
                        class="w-[150px] text-center bg-customVeryDarkPink p-2 text-white text-xl shadow-md mt-5 hover:bg-customWhite hover:text-customVeryDarkPink duration-300"
                        >Shop Now</a
                    >
                </div>
            </div>
        </section>

        <!-- End of Home Section -->

        <section class="min-h-screen flex flex-col items-center" id="About">
            <h1 class="text-5xl uppercase -tracking-tight m-14 mt-20">
                About <span class="text-customVeryDarkPink">US</span>
            </h1>

            <div
                class="flex items-center justify-between w-[85%] mt-4 px-12 bg-customDarkPink h-[700px]"
            >
                <!-- Img Container -->
                <div class="w-[50%] flex items-center justify-center">
                    <img
                        src="/Flowershop/images/aj-McsNra2VRQQ-unsplash.jpg"
                        alt="flower-img"
                        class="w-[600px] h-[400px]"
                    />
                </div>
                <!-- End of Img Container -->

                <!-- Content  -->
                <div class="w-[50%] flex flex-col space-y-12">
                    <h3 class="text-5xl uppercase text-lime-50">
                        Why Choose Us ?
                    </h3>
                    <p class="text-2xl text-justify w-[90%]">
                        At Blossom Hub, we're your trusted source for exquisite
                        floral arrangements that express your emotions
                        beautifully. With a dedicated team of experienced
                        florists, a commitment to freshness, unique and
                        personalized designs, and a passion for eco-friendly
                        practices, we ensure that every bouquet we create is a
                        masterpiece. Whether it's a joyous celebration or a
                        heartfelt moment, we're here to make it unforgettable.
                        Choose us for the freshest, most stunning flowers
                        delivered with care and creativity."
                    </p>
                </div>
                <!-- End of Content -->
            </div>
        </section>

        <!-- About Us Section  -->
        <!-- End of About us Section  -->

        <!-- Product Section -->
        <section
            id="featured"
            class="min-h-screen mb-12 flex flex-col items-center justify-center"
        >
            <h1
                class="text-5xl text-customVeryDarkPink uppercase -tracking-tight font-extralight text-center m-4 my-10"
            >
                Featured <span class="text-black">Products</span>
            </h1>

            <!-- Card Container -->
            <div
                class="max-w-[1200px] flex items-center bg-white shadow-lg flex-wrap gap-10 justify-between p-16 mx-auto my-2 px-32 h-[100%]"
            >
                <!-- Product 1 -->

                <div class="flex flex-col shadow-lg">
                    <!-- Image Conatiner -->
                    <div
                        class="imgContainer w-[250px] h-[250px] overflow-hidden relative"
                    >
                        <img
                            src="/Flowershop/images/img-1.jpg"
                            class="w-[100%] h-[100%] hover:scale-110 duration-500"
                        />

                        <!-- Icons Container -->
                        <div
                            class="btnCont flex items-center justify-center text-white w-[100%] p-2 bg-customVeryDarkPink"
                        >
                            <button class="uppercase text-lg">
                                <a href="/Flowershop/build/php/product1.php">Add to Cart</a>
                            </button>
                        </div>
                        <!-- End of Icons Container -->
                    </div>
                    <!-- End of Image Container -->

                    <!-- Product Details -->
                    <div class="bg-customVeryDarkPink text-center p-2">
                        <h4 class="text-lg text-white">Lily</h4>
                        <span class="text-lg italic text-customWhite"
                            >₹700</span
                        >
                    </div>
                </div>
                <!--End of Prouduct 1  -->

                <!-- Product 2 -->

                <div class="flex flex-col shadow-lg">
                    <!-- Image Conatiner -->
                    <div
                        class="imgContainer relative w-[250px] h-[250px] overflow-hidden"
                    >
                        <img
                            src="/Flowershop/images/img-2.jpg"
                            class="w-[100%] h-[100%] hover:scale-110 duration-500"
                        />

                        <!-- Icons Container -->
                        <div
                            class="btnCont flex items-center justify-center text-white w-[100%] p-2 bg-customVeryDarkPink"
                        >
                            <button class="uppercase text-lg">
                                <a href="/Flowershop/build/php/product1.php">Add to Cart</a>
                            </button>
                        </div>
                        <!-- End of Icons Container -->
                    </div>
                    <!-- End of Image Container -->

                    <!-- Product Details -->
                    <div class="bg-customVeryDarkPink text-center p-2">
                        <h3 class="text-xl text-white">Tulip</h3>
                        <span class="text-lg italic text-customWhite"
                            >₹650</span
                        >
                    </div>
                </div>
                <!--End of Prouduct 2  -->

                <!-- Product 3 -->

                <div class="flex flex-col shadow-lg">
                    <!-- Image Conatiner -->
                    <div
                        class="imgContainer relative w-[250px] h-[250px] overflow-hidden"
                    >
                        <img
                            src="/Flowershop/images/img-3.jpg"
                            class="w-[100%] h-[100%] hover:scale-110 duration-500"
                        />

                        <!-- Icons Container -->
                        <div
                            class="btnCont flex items-center justify-center text-white w-[100%] p-2 bg-customVeryDarkPink"
                        >
                            <button class="uppercase text-lg">
                                <a href="/Flowershop/build/php/product1.php">Add to Cart</a>
                            </button>
                        </div>
                        <!-- End of Icons Container -->
                    </div>
                    <!-- End of Image Container -->

                    <!-- Product Details -->
                    <div class="bg-customVeryDarkPink text-center p-2">
                        <h3 class="text-xl text-white">Rose</h3>
                        <span class="text-lg italic text-customWhite"
                            >₹1150</span
                        >
                    </div>
                </div>
                <!--End of Prouduct 3  -->

                <!-- Product 4 -->

                <div class="flex flex-col shadow-lg">
                    <!-- Image Conatiner -->
                    <div
                        class="imgContainer relative w-[250px] h-[250px] overflow-hidden"
                    >
                        <img
                            src="/Flowershop/images/img-4.jpg"
                            class="w-[100%] h-[100%] hover:scale-110 duration-500"
                        />

                        <!-- Icons Container -->
                        <div
                            class="btnCont flex items-center justify-center text-white w-[100%] p-2 bg-customVeryDarkPink"
                        >
                            <button class="uppercase text-lg">
                                <a href="/Flowershop/build/php/product1.php">Add to Cart</a>
                            </button>
                        </div>
                        <!-- End of Icons Container -->
                    </div>
                    <!-- End of Image Container -->

                    <!-- Product Details -->
                    <div class="bg-customVeryDarkPink text-center p-2">
                        <h3 class="text-xl text-white">Sunshine Tulip</h3>
                        <span class="text-lg italic text-customWhite"
                            >$700</span
                        >
                    </div>
                </div>

                <!-- End of Product 4 -->

                <!-- Product 5 -->

                <div class="flex flex-col shadow-lg">
                    <!-- Image Conatiner -->
                    <div
                        class="imgContainer relative w-[250px] h-[250px] overflow-hidden"
                    >
                        <img
                            src="/Flowershop/images/img-5.jpg"
                            class="w-[100%] h-[100%] hover:scale-110 duration-500"
                        />

                        <!-- Icons Container -->
                        <div
                            class="btnCont flex items-center justify-center text-white w-[100%] p-2 bg-customVeryDarkPink"
                        >
                            <button class="uppercase text-lg">
                                <a href="/Flowershop/build/php/product1.php">Add to Cart</a>
                            </button>
                        </div>
                        <!-- End of Icons Container -->
                    </div>
                    <!-- End of Image Container -->

                    <!-- Product Details -->
                    <div class="bg-customVeryDarkPink text-center p-2">
                        <h3 class="text-xl text-white">White Tulip</h3>
                        <span class="text-lg italic text-customWhite"
                            >₹850</span
                        >
                    </div>
                </div>
                <!--End of Prouduct 5 -->

                <!-- Product 6  -->

                <div class="flex flex-col shadow-lg">
                    <!-- Image Conatiner -->
                    <div
                        class="imgContainer relative w-[250px] h-[250px] overflow-hidden"
                    >
                        <img
                            src="/Flowershop/images/img-6.png"
                            class="w-[100%] h-[100%] hover:scale-110 duration-500"
                        />

                        <!-- Icons Container -->
                        <div
                            class="btnCont flex items-center justify-center text-white w-[100%] p-2 bg-customVeryDarkPink"
                        >
                            <button class="uppercase text-lg">
                                <a href="/Flowershop/build/php/product1.php">Add to Cart</a>
                            </button>
                        </div>
                        <!-- End of Icons Container -->

                        <!-- Icons Container -->
                        <div
                            class="btnCont flex items-center justify-center text-white w-[100%] p-2 bg-customVeryDarkPink"
                        >
                            <button class="uppercase text-lg">
                                <a href="product.html">Add to Cart</a>
                            </button>
                        </div>
                        <!-- End of Icons Container -->
                    </div>
                    <!-- End of Image Container -->

                    <!-- Product Details -->
                    <div class="bg-customVeryDarkPink text-center p-2">
                        <h3 class="text-xl text-white">Rose Bouquet</h3>
                        <span class="text-lg italic text-customWhite"
                            >₹900</span
                        >
                    </div>
                </div>
            </div>

            <!-- End of Product 6  -->

            <!-- End of Card Container -->
        </section>

        <!-- End of Product Section -->

        <!-- Icons Section -->
        <section class="w-[100%]">
            <div
                class="w-[100%] flex items-center p-12 px-52 shadow-md mx-auto mt-12 bg-customVeryDarkPink justify-between"
            >
                <!-- Icon 1 -->
                <div
                    class="flex items-center w-[320px] bg-customWhite p-3.5 px-7 justify-between space-x-4"
                >
                    <img src="/Flowershop/images/icon-1.png" class="text-white" />
                    <!-- Content -->
                    <div class="flex flex-col space-y-1">
                        <h3 class="text-xl mr-12 capitalize">Free Delivery</h3>
                        <span class="text-lg capitalize text-customVeryDarkPink"
                            >on All orders</span
                        >
                    </div>
                    <!-- End of Content -->
                </div>
                <!-- End of Icon 1 -->

                <!-- Icon 1 -->
                <div
                    class="flex items-center bg-customWhite p-3 px-4 justify-between space-x-4"
                >
                    <img src="/Flowershop/images/icon-2.png" class="text-white" />
                    <!-- Content -->
                    <div class="">
                        <h3 class="text-xl capitalize">10 days return</h3>
                        <span class="text-lg text-customVeryDarkPink capitalize"
                            >money back garuntee</span
                        >
                    </div>
                    <!-- End of Content -->
                </div>
                <!-- End of Icon 1 -->

                <!-- Icon 1 -->
                <div
                    class="flex items-center bg-customWhite p-3 px-4 justify-between space-x-4"
                >
                    <img src="/Flowershop/images/icon-3.png" class="text-white" />
                    <!-- Content -->
                    <div class="">
                        <h3 class="text-xl capitalize">offers and gifts</h3>
                        <span class="text-lg text-customVeryDarkPink capitalize"
                            >on All orders</span
                        >
                    </div>
                    <!-- End of Content -->
                </div>
                <!-- End of Icon 1 -->

                <!-- Icon 1 -->
                <div
                    class="flex items-center bg-customWhite p-3 px-4 justify-between space-x-4"
                >
                    <img src="/Flowershop/images/icon-4.png" class="text-white" />
                    <!-- Content -->
                    <div class="">
                        <h3 class="text-xl capitalize">Secure Payments</h3>
                        <span class="text-lg text-customVeryDarkPink capitalize"
                            >Protected by paypal</span
                        >
                    </div>
                    <!-- End of Content -->
                </div>
                <!-- End of Icon 1 -->
            </div>
        </section>
        <!-- End of Icons Section -->

        <!-- Footer  -->

        <a
            href="#"
            class="hidden top-link fixed bottom-20 items-center justify-center right-20 bg-customVeryDarkPink w-[50px] h-[50px] p-2 rounded-lg cursor-pointer"
        >
            <i class="fa-solid fa-arrow-up text-3xl text-white"></i
        ></a>
        <footer class="w-[100%] h-[300px] flex flex-col">
            <!-- Footer Container -->
            <div
                class="flex flex-wrap py-12 px-40 items-center justify-between"
            >
                <!-- Quick Links -->
                <div class="flex flex-col text-md space-y-3">
                    <h3 class="text-2xl text-customVeryDarkPink">
                        Quick Links
                    </h3>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Produts</a>

                    <a href="#">Contact</a>
                </div>
                <!-- End of Quick Links -->

                <!-- Extra Links -->
                <div class="flex flex-col text-md space-y-3">
                    <h3 class="text-2xl text-customVeryDarkPink">
                        Extra Links
                    </h3>
                    <a href="#">Sign In</a>
                    <a href="#">Sign Up</a>
                    <a href="#">My Account</a>
                    <a href="#">My Orders</a>
                    <a href="#">My Wishlist</a>
                </div>
                <!-- End of Extra Links -->

                <!--Location -->
                <div class="flex flex-col text-md space-y-3">
                    <h3 class="text-2xl text-customVeryDarkPink">Location</h3>
                    <a href="#">Tirunelveli</a>
                    <a href="#">Trichy</a>
                    <a href="#">Vellore</a>
                    <a href="#">Madurai</a>
                    <a href="#">Chennai</a>
                </div>
                <!-- End of Location -->

                <!--Contact -->
                <div class="flex flex-col text-md space-y-3">
                    <h3 class="text-2xl text-customVeryDarkPink">Contact</h3>
                    <a href="#"
                        ><i
                            class="fa-solid text-customVeryDarkPink fa-phone pr-2"
                        ></i
                        >+91 123232323</a
                    >
                    <a href="#"
                        ><i
                            class="fa-sharp text-customVeryDarkPink fa-solid fa-envelope pr-2"
                        ></i
                        >blossomhub@gmail.com</a
                    >
                    <a href="#"
                        ><i
                            class="fa-brands text-customVeryDarkPink fa-facebook-f pr-2"
                        ></i
                        >BlossomHub</a
                    >
                    <a href="#"
                        ><i
                            class="fa-brands text-customVeryDarkPink fa-instagram pr-2"
                        ></i
                        >BlossomHubFlowers</a
                    >
                    <a href="#"
                        ><i
                            class="fa-brands text-customVeryDarkPink fa-x-twitter pr-2"
                        ></i
                        >BlossomFlowers</a
                    >
                </div>
                <!-- End of Contact -->
            </div>
            <!-- End of Footer Container -->

            <small class="text-center text-xl mx-auto pb-4 capitalize"
                >&copy;
                <span class="text-customVeryDarkPink"> Blossom Hub </span>All
                rights reserved</small
            >
        </footer>
        <!-- End of Footer -->

        <script src="/Flowershop/build/js/scroll.js"></script>
    </body>
</html>
