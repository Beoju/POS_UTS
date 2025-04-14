@extends('layouts.template')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Halo, apakabar!!!</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            Selamat datang semua, ini adalah halaman utama dari aplikasi ini.
        </div>
    </div>
    <div class="row">
        @foreach ($barang as $item)
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card card-sm shadow-sm h-100">
                    <img src="{{ asset('storage/image/' . $item->photo) }}" class="card-img-top" alt="Foto Barang" style="height: 150px; object-fit: cover;">
                    <div class="card-body p-2 align-items-md-start">
                        <p><h6 class="card-title mb-1">{{ $item->barang_nama }}</h6><br></p>
                        <div class="">
                            <p class="mb-1" style="font-size: 0.85rem;">
                                <strong>Kode:</strong> {{ $item->barang_kode }} <br>
                            </p>
                            <p class="mb-1" style="font-size: 0.85rem;"><strong>Harga:</strong> Rp{{ number_format($item->harga_jual, 0, ',', '.') }} <br></p>
                            <p class="mb-1" style="font-size: 0.85rem;"><strong>Kategori:</strong> {{ $item->kategori->kategori_nama ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
