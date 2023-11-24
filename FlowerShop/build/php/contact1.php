<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Us</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="stylesheet" href="/FlowerShop/build/css/style.css" />
    </head>
    <body class="bg-customVeryDarkPink font-Rubik">
        <!-- Contact Form -->
        <div class="flex flex-col items-center justify-center mt-20">
            <h1 class="text-6xl text-white -tracking-tighter uppercase">
                Contact <span class="text-white">Us</span>
            </h1>

            <!-- Container -->
            <div
                class="w-[1000px] h-[600px] bg-white flex rounded-md justify-between mt-14"
            >
                <!-- Content -->
                <div class="w-[50%] flex flex-col items-center space-y-16 p-12">
                    <h3
                        class="text-5xl capitalize text-customVeryDarkPink mt-6"
                    >
                        Feedback
                    </h3>
                    <form
                        action="contact.php"
                        class="flex flex-col items-center space-y-12"
                        method = "post"
                    >
                        <input
                            class="outline-none bg-[#fcfcfc] text-customVeryDarkPink w-[100%] placeholder:text-customVeryDarkPink p-2 border-none text-lg"
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Enter your Name: "
                        />
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Enter your Email :"
                            class="outline-none bg-[#fcfcfc] text-customVeryDarkPink placeholder:text-customVeryDarkPink w-[100%] p-2 border-none text-lg"
                        />
                        <textarea
                            name="message"
                            placeholder="Enter your Message: "
                            class="outline-none bg-[#fcfcfc] text-customVeryDarkPink placeholder:text-customVeryDarkPink w-[100%] p-2 border-none text-lg"
                        ></textarea>
                        <button
                            class="bg-customVeryDarkPink -tracking-tighter w-[150px] py-2 text-lg px-4 uppercase rounded-md text-white hover:bg-customWhite hover:text-customVeryDarkPink transition-all ease-in-out duration-300"
                            type="submit"
                            id="submit"
                            name = "submit"
                        >
                            <i class="mr-2 fas fa-paper-plane"></i>Submit
                        </button>
                    </form>
                </div>
                <!-- End of Content -->

                <!-- Img Container -->
                <div
                    class="w-[50%] bg-[#f0f4f8] p-4 flex items-center justify-center rounded-tr-md rounded-br-md"
                >
                    <img
                        class="w-[100%] h-[100%]"
                        src="/Flowershop/images/bg1.png "
                        alt=" "
                    />
                </div>
                <!-- End of Img Container -->
            </div>
        </div>
        <!-- End of Contact Form -->
    </body>
</html>
