<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vote Ketua RT</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-image: url('{{ asset("image/bg.jpg") }}');">
    <div class="flex min-h-screen items-center justify-center p-8 bg-cover bg-center" style="background-image: url('{{ asset("image/bg.jpg") }}');">
        <div class="absolute top-48 text-center">
            <h1 class="text-2xl font-bold mb-6">Selamat Datang di halaman login pemilihan ketua RT 002/RW 017</h1>
        </div>
        <div class="w-full max-w-sm p-6 bg-white shadow-md rounded-lg">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <input
                        placeholder="Enter your User ID"
                        type="text"
                        name="email"
                        id="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    />
                    <input
                        placeholder="Enter your Password"
                        type="text"
                        name="password"
                        id="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    />
                </div>
                <button type="submit"
                    class="w-full bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                    Login
                </button>
            </form>
        </div>
    </div>
    
</body>
</html>
