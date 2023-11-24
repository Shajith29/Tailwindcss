
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Page</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
         <link rel="stylesheet " href="/FlowerShop/build/css/style.css" type="text/css" />
    </head>
    <body 
        class="font-Rubik bgImg flex relative flex-col justify-center items-center min-h-screen"
    >
        <div
            class="w-[100%] -z-20 h-[100%] fixed top-0 left-0 bg-[rgba(0,0,0,0.1)]"
        ></div>
        <h1 class="absolute top-28 text-white uppercase text-5xl">
            Welcome to Blossom <span class="text-customVeryDarkPink">Hub</span>
        </h1>
        <!-- Sign up Container -->

        <div
            class="w-[450px] max-h-[600px] bg-customPink rounded-lg shadow-lg p-10"
        >
            <h1
                id="title"
                class="text-center text-3xl mb-6 uppercase -tracking-tight text-white relative after:content-[''] after:w-[50px] after:h-[4px] after:absolute after:rounded-md after:bg-customWhite after:-bottom-3 after:left-[43%]"
            >
                Sign Up
            </h1>
            <form
                id="myform"
                name="myform"
                method="post"
                action="signup.php"
                class="flex flex-col items-center justify-center"
            >
                <!-- Input Container -->

                <div
                    class="flex items-center bg-customWhite justify-center mt-5 rounded-md"
                >
                    <i
                        class="fa-solid fa-envelope px-2 text-lg ml-2 text-customDarkPink"
                    ></i>
                    <input
                        type="text"
                        placeholder="Username: "
                        name="user"
                        class="w-[100%] bg-transparent text-customVeryDarkPink placeholder:text-customVeryDarkPink p-2.5 border-none outline-none text-lg placeholder:font-Rubik"
                    />
                </div>

                <div
                    class="flex items-center bg-customWhite justify-center mt-5 rounded-md"
                >
                    <i
                        class="fa-solid fa-envelope px-2 text-lg ml-2 text-customDarkPink"
                    ></i>
                    <input
                        type="email"
                        placeholder="Email"
                        name="email"
                        class="w-[100%] bg-transparent text-customVeryDarkPink placeholder:text-customVeryDarkPink p-2.5 border-none outline-none text-lg placeholder:font-Rubik"
                    />
                </div>

                <div
                    class="flex items-center bg-customWhite justify-center mt-5 rounded-md"
                >
                    <i
                        class="fa-solid fa-lock px-2 text-lg ml-2 text-customDarkPink"
                    ></i>
                    <input
                        type="password"
                        placeholder="Password"
                        name="pass"
                        class="w-[100%] bg-transparent placeholder:text-customVeryDarkPink p-2.5 border-none outline-none text-lg placeholder:font-Rubik"
                    />
                </div>

                <div
                    class="flex items-center bg-customWhite justify-center mt-5 rounded-md"
                >
                    <i
                        class="fa-solid fa-lock px-2 text-lg ml-2 text-customDarkPink"
                    ></i>
                    <input
                        type="password"
                        placeholder="Retype Password"
                        name="cpass"
                        class="w-[100%] bg-transparent placeholder:text-customVeryDarkPink p-2.5 border-none outline-none text-lg placeholder:font-Rubik"
                    />
                </div>

                <div
                    class="button-container w-[100%] flex items-center justify-center space-x-8 mt-6"
                >
                    <input
                        id="sign-up"
                        type = "submit"
                        name = "submit"
                        value = "Sign Up"
                        class="bg-customVeryDarkPink px-4 py-1.5 rounded-lg text-white uppercase text-md"
                    />
                        

                </div>

                <!-- End of Input Container -->
            </form>
        </div>
        <!-- End of Sign up Container -->

        <!-- <script src="/build/js/script.js"></script> -->
    </body>
</html>
