<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>TI Reg C 21</title>
</head>
<body class="bg-slate-200">
    @include('partials.navbartailwind')
    <div class="container p-3 mx-auto">
        <form action="{{route('login-user')}}" method="post" class="bg-slate-50 border border-slate-200  max-w-lg rounded-xl mx-auto shadow-md font-inter p-5 lg:mt-16">
            @csrf
            <h1 class="font-bold text-3xl text-center text-slate-800 pb-10">Login</h1>
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
            <label for="loginkey">
                <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Email</span>
                <input value="{{old('email')}}" id="email" name="email" type="text" placeholder="Masukkan email..." class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">
                @error('email')
                <p style="color: red;">{{ $message }}</p>
                @enderror
            </label>
            <label for="password">
                <span class="block font-semibold text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Password</span>
                <input id="password" name="password" type="password" placeholder="Masukkan password..." class="px-3 py-2 border rounded-xl shadow w-full block text-small placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 mb-[1.25rem]">
                @error('password')
                <p style="color: red;">{{ $message }}</p>
                @enderror
            </label>
            <input type="submit" value="Login" class="bg-sky-500 text-slate-50 font-semibold px-3 py-2 rounded-xl w-full my-3 hover:bg-sky-600">
            <p>Belum register? register di <a href="/registration" style="color: blue;">sini</a></p>
        </form> 
    </div>
    
</body>
</html>