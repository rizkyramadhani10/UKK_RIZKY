@extends('layouts.app')
@section('title', 'Pesan Layanan | PT. Solusi Net Nusantara')
@section('content')
    <section class="container-page max-w-3xl py-16">
        <h1 class="heading-2">Pesan Layanan</h1>

        @if(session('success'))
            <div class="surface-card border-green-200 bg-green-50 p-4 mt-6 body-6">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('contact.submit') }}" class="surface-card p-6 mt-8 space-y-4">
            @csrf

            <div class="grid gap-4 sm:grid-cols-2">
                <div class="body-6">
                    <span class="block">Nama</span>
                    <p class="mt-1 rounded-lg border bg-brand-subtle p-3">{{ auth()->user()->name }}</p>
                </div>
                <div class="body-6">
                    <span class="block">Email</span>
                    <p class="mt-1 rounded-lg border bg-brand-subtle p-3">{{ auth()->user()->email }}</p>
                </div>
            </div>

            <label class="block body-6">Layanan yang ingin dipesan
                <select class="w-full border rounded-lg p-3 mt-1" name="product_id">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}"
                            @selected(old('product_id', optional($selectedProduct)->id) == $product->id)>
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
                @error('product_id')<small class="text-red-600">{{ $message }}</small>@enderror
            </label>

            <label class="block body-6">Alamat
                <textarea class="w-full border rounded-lg p-3 mt-1" name="address" rows="5"
                    placeholder="Masukkan alamat anda." required>{{ old('address') }}</textarea>
                @error('address')<small class="text-red-600">{{ $message }}</small>@enderror
            </label>

            <button class="btn-accent">Kirim Pesanan</button>
        </form>

        <section class="surface-card p-6 mt-8">
            <h2 class="heading-3">Riwayat Pesanan</h2>

            @if($orders->isEmpty())
                <p class="body-6 mt-4 text-gray-600">Belum ada riwayat pesanan.</p>
            @else
                <div class="mt-4 overflow-x-auto">
                    <table class="w-full min-w-[520px] text-left body-6">
                        <thead>
                            <tr class="border-b">
                                <th class="p-3">Tanggal</th>
                                <th class="p-3">Produk/Layanan</th>
                                <th class="p-3">Status</th>
                                <th class="p-3">Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr class="border-b last:border-0">
                                    <td class="p-3">{{ $order->created_at->format('d M Y') }}</td>
                                    <td class="p-3">{{ $order->product?->name ?? 'Produk dihapus' }}</td>
                                    <td class="p-3">
                                        {{ $order->status }}
                                    </td>
                                    @if($order->status == 'Disetujui')
                                    <td class="p-3">
                                        <a class="btn-accent btn-accent-sm" href="https://wa.me/6289602160689?text=Halo! Permintaan saya telah disetujui, saya ingin berdiskusi tentang metode pembayaran">
                                            Lakukan Pembayaran
                                        </a>
                                    </td>
                                    @elseif($order->status == 'Selesai')
                                    <td class="p-3 font-semibold text-green-600">Pembayaran Berhasil!</td>
                                    @else
                                    <td class="p-3">Menunggu Verifikasi</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </section>
    </section>
@endsection
