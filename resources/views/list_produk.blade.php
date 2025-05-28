<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6 text-center text-blue-700">Daftar Produk</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 text-sm">
            <thead class="bg-blue-200 text-gray-700">
                <tr>
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Nama Produk</th>
                    <th class="px-4 py-2 border">Deskripsi Produk</th>
                    <th class="px-4 py-2 border">Harga Produk</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($nama as $index => $item)
                    <tr class="hover:bg-blue-50">
                        <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $item }}</td>
                        <td class="border px-4 py-2">{{ $desc[$index] }}</td>
                        <td class="border px-4 py-2">Rp {{ number_format($harga[$index], 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       <div class="mt-8 mx-auto w-[300px]">
    <h1 class="text-xl font-bold mb-4 text-center">Input Produk</h1>

    <form method="POST" action="{{ route('produk.simpan') }}">
        @csrf

        <table class="w-full">
            <tr>
                <td class="pb-2 align-top">
                    <label for="nama" class="font-semibold">Nama:</label>
                </td>
                <td colspan="3" class="pb-2">
                    <input type="text" class="border px-2 py-1 w-full" id="nama" name="nama" required>
                </td>
            </tr>
            <tr>
                <td class="pb-2 align-top">
                    <label for="deskripsi" class="font-semibold">Deskripsi:</label>
                </td>
                <td colspan="3" class="pb-2">
                    <textarea class="border px-2 py-1 w-full" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                </td>
            </tr>
            <tr>
                <td class="pb-4">
                    <label for="harga" class="font-semibold">Harga:</label>
                </td>
                <td colspan="3" class="pb-4">
                    <input type="number" class="border px-2 py-1 w-full" id="harga" name="harga" required>
                </td>
            </tr>
        </table>

        <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700">Simpan</button>
    </form>
</div>

</div>
</div>
</body>
</html>