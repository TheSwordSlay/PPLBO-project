<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body class="container p-3 m-2 mx-auto bg-slate-200">
    <form class="bg-slate-50 border border-slate-200  max-w-lg rounded-xl mx-auto shadow-md font-inter p-5 lg:mt-16">
        <h1 class="font-bold text-3xl text-center text-slate-800 pb-10">Login</h1>
        <label for="loginkey">
            <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Username</span>
            <input id="username" type="text" placeholder="Masukkan username..." class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">
        </label>
        <label for="password">
            <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Password</span>
            <input id="password" type="text" placeholder="Masukkan password..." class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">
        </label>
        <input type="submit" value="Login" class="bg-sky-500 text-slate-50 font-semibold px-3 py-2 rounded-xl w-full my-3 hover:bg-sky-600">
    </form>
</body>
</html>