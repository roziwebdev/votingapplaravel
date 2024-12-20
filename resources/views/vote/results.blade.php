<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Voting</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-red-100 to-red-300 min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset("image/bg.jpg") }}');">
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center text-red-700 mb-6">Hasil Voting</h1>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-gray-200 shadow-sm">
                <thead>
                    <tr class="bg-red-600 text-white">
                        <th class="px-4 py-3 text-left text-lg font-medium">Candidate</th>
                        <th class="px-4 py-3 text-left text-lg font-medium">Votes</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($results as $result)
                        <tr class="border-b hover:bg-red-100 transition">
                            <td class="px-4 py-3 text-gray-800 font-medium">{{ $result->name }}</td>
                            <td class="px-4 py-3 text-gray-600">{{ $result->votes_count }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="bg-red-50">
                        <td class="px-4 py-3 font-bold text-red-800">Total Votes</td>
                        <td class="px-4 py-3 font-bold text-red-800">{{ $results->sum('votes_count') }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>
</html>
