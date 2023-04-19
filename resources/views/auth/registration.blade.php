<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registrasi</title>
</head>
<body class="bg-slate-200">
    @include('partials.navbartailwind')
    <div class="container p-3 m-2 mx-auto">
        <form action="{{route('register-user')}}" method="post" class="bg-slate-50 border border-slate-200  max-w-lg rounded-xl mx-auto shadow-md font-inter p-5">
            @csrf
            <h1 class="font-bold text-3xl text-center text-slate-800 pb-5">Registrasi</h1>
            @if(Session::has('success'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div>
                <p class="text-sm">{{ Session::get('success') }}</p>
                </div>
            </div>
            </div>
            @endif
            @if(Session::has('fail'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ Session::get('fail') }}</span>
            </div>
            @endif
            <label for="nama">
                <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Nama</span>
                <input id="nama" name="name" type="text" placeholder="Masukkan nama..." class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">
                @error('name')
                <p style="color: red;">{{ $message }}</p>
                @enderror
            </label>
            <label for="nim">
                <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">NIM</span>
                <input id="nim" name="nim" type="text" placeholder="Masukkan NIM..." class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">
                @error('nim')
                <p style="color: red;">{{ $message }}</p>
                @enderror           
            </label>
            <label for="email">
                <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Email</span>
                <input id="email" name="email" type="email" placeholder="Masukkan email..." class="px-3 py-2 border shadow rounded-xl w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer">
                @error('email')
                <p style="color: red;">{{ $message }}</p>
                @enderror           
            </label>
            <br>
            <label for="password">
                <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Password</span>
                <input id="password" name="password" type="password" placeholder="Masukkan password..." class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">
                @error('password')
                <p style="color: red;">{{ $message }}</p>
                @enderror            
            </label>
            <input type="submit" value="Sign up" class="bg-green-500 text-slate-50 font-semibold px-3 py-2 rounded-xl w-full my-3 hover:bg-green-600">
            <p>Sudah register? login di <a href="/login" style="color: blue;">sini</a></p>
        </form>

    </div>
</body>
</html>