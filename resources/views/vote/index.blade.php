<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vote Ketua RT</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8 min-h-screen flex flex-col items-center bg-cover bg-center" style="background-image: url('{{ asset("image/bg.jpg") }}');">
    <div class="w-full max-w-6xl bg-white bg-opacity-90 p-8 rounded-xl shadow-xl">
        <h1 class="text-3xl font-extrabold text-center text-red-700 mb-6">Pilih Kandidat Ketua RT 002/RW 017</h1>
        <p class="text-center text-gray-600 mb-8">
            Silakan pilih kandidat terbaik yang menurut Anda layak menjadi Ketua RT.
        </p>

        <form action="{{ route('vote.store') }}" method="POST" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @csrf
            <!-- Kandidat 1 -->
            <div class="relative border rounded-xl p-6 text-center hover:shadow-2xl transition-shadow duration-300 group bg-gradient-to-r from-red-50 to-red-100">
                <img src="{{ url('/image/1.jpeg') }}" class="w-40 h-40 rounded-full mx-auto mb-4 object-cover shadow-lg" alt="Kandidat 1" />
                <h2 class="text-xl font-semibold text-red-800 mb-2">Kandidat 1</h2>
                <p class="text-sm text-gray-500 mb-4">Pengalaman: 5 Tahun</p>
                <input type="radio" name="candidate_id" value="1" class="absolute top-4 right-4 w-6 h-6 text-res-600 focus:ring-red-500" />
                <span class="text-sm text-gray-400 group-hover:text-gray-600">Pilih Kandidat</span>
            </div>

            <!-- Kandidat 2 -->
            <div class="relative border rounded-xl p-6 text-center hover:shadow-2xl transition-shadow duration-300 group bg-gradient-to-r from-red-50 to-red-100">
                <img src="{{ url('/image/2.jpeg') }}" class="w-40 h-40 rounded-full mx-auto mb-4 object-cover shadow-lg" alt="Kandidat 2" />
                <h2 class="text-xl font-semibold text-red-800 mb-2">Kandidat 2</h2>
                <p class="text-sm text-gray-500 mb-4">Pengalaman: 3 Tahun</p>
                <input type="radio" name="candidate_id" value="2" class="absolute top-4 right-4 w-6 h-6 text-red-600 focus:ring-red-500" />
                <span class="text-sm text-gray-400 group-hover:text-gray-600">Pilih Kandidat</span>
            </div>

            <!-- Kandidat 3 -->
            <div class="relative border rounded-xl p-6 text-center hover:shadow-2xl transition-shadow duration-300 group bg-gradient-to-r from-red-50 to-red-100">
                <img src="{{ url('/image/3.jpeg') }}" class="w-40 h-40 rounded-full mx-auto mb-4 object-cover shadow-lg" alt="Kandidat 3" />
                <h2 class="text-xl font-semibold text-red-800 mb-2">Kandidat 3</h2>
                <p class="text-sm text-gray-500 mb-4">Pengalaman: 7 Tahun</p>
                <input type="radio" name="candidate_id" value="3" class="absolute top-4 right-4 w-6 h-6 text-red-600 focus:ring-red-500" />
                <span class="text-sm text-gray-400 group-hover:text-gray-600">Pilih Kandidat</span>
            </div>

            <!-- Kandidat 4 -->
            <div class="relative border rounded-xl p-6 text-center hover:shadow-2xl transition-shadow duration-300 group bg-gradient-to-r from-red-50 to-red-100">
                <img src="{{ url('/image/4.jpeg') }}" class="w-40 h-40 rounded-full mx-auto mb-4 object-cover shadow-lg" alt="Kandidat 4" />
                <h2 class="text-xl font-semibold text-red-800 mb-2">Kandidat 4</h2>
                <p class="text-sm text-gray-500 mb-4">Pengalaman: 4 Tahun</p>
                <input type="radio" name="candidate_id" value="4" class="absolute top-4 right-4 w-6 h-6 text-red-600 focus:ring-red-500" />
                <span class="text-sm text-gray-400 group-hover:text-gray-600">Pilih Kandidat</span>
            </div>
            <div class="justify-center text-center items-center">
                <button type="submit" class="mt-8 px-8 py-3 bg-gradient-to-r from-red-500 to-red-600 text-white font-semibold rounded-lg shadow hover:from-red-600 hover:to-red-700 transition-colors duration-300 text-center justify-center items-center  ">
                    Vote Sekarang
                </button>
            </div>
        </form>
    </div>
</body>
</html>
