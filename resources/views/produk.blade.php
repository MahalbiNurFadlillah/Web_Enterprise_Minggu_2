<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="{{ url('tes') }}">Home</a></li>
            <li><a href="{{ url('produk') }}">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header style="display: flex; justify-content: space-between">
            <div>
                <h2 class="text mt-4">Daftar Produk</h2>
                <h4 class="text mt-4">Temukan produk terbaik untuk kebutuhan Anda</h4>
            </div>
            <button class="card-button">
                <a class="text-decoration-none text-white" href="{{ url('/produk/add') }}">Add
                    Product
                </a>
            </button>
        </header>

        <div class="product-grid">
            <!-- Product Card 1 -->
            @foreach ($produk as $item)
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produk 1">
                    <h3>{{ $item->nama_produk }}</h3>
                    <p class="price">{{ $item->harga }}</p>
                    <p class="description">{{ $item->deskripsi }}</p>
                    <button class="card-button">Edit</button>
                    {{-- <button class="card-button">Delete</button> --}}
                    <form action="{{url('produk/delete/'. $item->kode_produk) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </div>
            @endforeach


        </div>
    </div>

    <!-- Footer -->

</body>

</html>
