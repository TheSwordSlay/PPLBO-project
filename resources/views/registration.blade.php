<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registrasi</title>
</head>
<body class="container p-3 m-2 mx-auto bg-slate-200">
    <form class="bg-slate-50 border border-slate-200  max-w-lg rounded-xl mx-auto shadow-md font-inter p-5" action="userData" method="post">
        @csrf
        <h1 class="font-bold text-3xl text-center text-slate-800 pb-5">Registrasi</h1>
        <label for="name">
            <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Nama</span>
            <input name="name" id="name" type="text" placeholder="Masukkan nama..." class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">
        </label>
        <label for="nim">
            <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">NIM</span>
            <input name="nim" id="nim" type="text" placeholder="Masukkan NIM..." class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">
        </label>
        <!-- <label for="email">
            <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Email</span>
            <input id="email" type="email" placeholder="Masukkan email..." class="px-3 py-2 border shadow rounded-xl w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer">
            <p class="text-sm invisible peer-invalid:visible peer-invalid:m-1">Email tidak valid</p>
        </label> -->
        <label for="username">
            <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Username</span>
            <input name="username" id="username" type="text" placeholder="Masukkan username..." class="px-3 py-2 border shadow rounded-xl w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">
        </label>
        <label for="password">
            <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Password</span>
            <input name="password" id="password" type="password" placeholder="Masukkan password..." class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">
        </label>
        <input type="submit" value="Sign up" class="bg-green-500 text-slate-50 font-semibold px-3 py-2 rounded-xl w-full my-3 hover:bg-green-600">
</form>
</body>
</html>