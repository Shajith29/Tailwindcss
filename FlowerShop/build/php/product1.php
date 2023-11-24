<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Shopping Cart</title>
        <link rel="stylesheet " href="/Flowershop/build/css/style3.css" type="text/css" />
    </head>
    <body class="bg-customVeryDarkPink font-Rubik">
        <!-- Cart -->
        <div
            class="w-[1200px] mx-auto flex flex-col first-letter:items-center justify-center"
        >
            <header class="flex items-center justify-between mt-5 w-[100%]">
                <h1
                    class="text-5xl mt-7 text-white -tracking-tighter font-bold text-customDarkBlue uppercase"
                >
                    Our Products
                </h1>
                <div id="open" class="relative text-right cursor-pointer">
                    <img
                        src="/Flowershop/images/shopping.svg"
                        alt="shoppingcart"
                        class="w-[40px] mt-4"
                    />
                    <span
                        id="quantity"
                        class="bg-red-500 text-white w-[25px] h-[25px] absolute top-3.5 left-6 rounded-full flex items-center justify-center"
                        >0</span
                    >
                </div>
            </header>

            <div
                id="list"
                class="flex my-10 gap-y-8 mx-auto items-center justify-between flex-wrap w-[100%] bg-wshite p-10 rounded-lg shadow-lg bg-white"
            ></div>
        </div>

        <!-- End of Cart  -->

        <!-- Card -->

        <div
            id="card"
            class="fixed bg-customDarkPink translate-x-[500px] duration-500 top-0 w-[500px] left-[calc(100%-500px)] min-h-screen"
        >
            <h1
                class="text-2xl text-customWhite font-bold text-center p-4 uppercase -tracking-tighter"
            >
                Cart
            </h1>
            <ul
                id="listCard"
                class="flex text-white flex-col items-center gap-y-4 justify-between"
            ></ul>

             <div
                class="w-[50%] uppercase cursor-pointer h-[70px] text-xl flex mx-auto items-center justify-center mt-12"
            >
                <button
                    class="flex flex-col items-center justify-center bg-customVeryDarkPink p-2 px-4 text-white rounded-md shadow-md"
                >
                    <a href="/Flowershop/build/php/details.php">Checkout</a>
                </button>
            </div>

            <div
                class="bg-customWhite flex text-customVeryDarkPink items-center justify-between absolute bottom-0 w-[100%]"
            >
                <div
                    id="total"
                    class="w-[50%] cursor-pointer uppercase text-xl h-[70px] flex items-center justify-center"
                >
                    Total:
                </div>
                <div
                    id="close"
                    class="w-[50%] uppercase cursor-pointer h-[70px] text-xl flex items-center justify-center"
                >
                    Close
                </div>
            </div>
        </div>

        <script src="/Flowershop/build/js/script1.js"></script>
    </body>
</html>
