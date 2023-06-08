<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- component -->
    <div class="h-screen md:flex">
        <div class="flex md:w-1/2 justify-around py-10 items-center bg-white">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "Login gagal! username dan password salah!";
                } else if ($_GET['pesan'] == "logout") {
                    echo "Anda telah berhasil logout";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "Anda harus login untuk mengakses halaman admin";
                }
            }
            ?>
            <br />
            <form class="bg-white">
                <h1 class="text-black-800 font-bold text-3xl mb-3 text-center">Welcome Back</h1>
                <p class="text-sm font-semibold text-center text-gray-600 mb-7">Login Into Your Account</p>
                <br>
                <div class="flex  border-2 py-2 px-3 rounded mb-5">
                    <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Email" />
                </div>
                <div class="flex items-center border-2 py-2 px-3 rounded mb-5">
                    <input class="pl-2 flex w-[300px] outline-none border-none" type="password" name="" id="" placeholder="Password" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 " fill="none" viewBox="0 0 22 22" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                </div>
                <button type="submit" class="mb-5 block w-full bg-green-600 mt-4 py-2 rounded text-white font-semibold mb-8">Login</button>
                <p class="text-sm text-center">Don't Have An Account? <span class="text-green-600"> Register</span></p>
            </form>
        </div>
        <img src="./download.jpg" class="overflow-hidden md:flex w-1/2 i justify-around items-center hidden">

    </div>
</body>

</html>