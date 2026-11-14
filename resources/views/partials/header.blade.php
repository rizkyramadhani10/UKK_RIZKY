<header class="sticky top-0 z-40 bg-[#FAF8F5]/90 backdrop-blur-md border-b border-[#E7E5E0]">
  <div class="container-page flex items-center justify-between h-16 gap-6">
    <a href="{{ route('home') }}"
      class="flex items-center focus-visible:outline-2 focus-visible:outline-[#EA580C] rounded">
      <img src="{{ asset('images/logo.png') }}" alt="PT. Solusi Net Nusantara" class="h-11 w-auto">
    </a>

    <nav class="flex items-center gap-8 text-sm font-medium text-[#52525B]">
      <a href="{{ route('home') }}"
        class="{{ request()->routeIs('home') ? 'text-[#18181B] font-semibold' : 'hover:text-[#18181B]' }}">Beranda</a>
      <a href="{{ route('profile') }}"
        class="{{ request()->routeIs('profile') ? 'text-[#18181B] font-semibold' : 'hover:text-[#18181B]' }}">Tentang Kami</a>
      <a href="{{ route('products.index') }}"
        class="{{ request()->routeIs('products.*') ? 'text-[#18181B] font-semibold' : 'hover:text-[#18181B]' }}">Layanan</a>
      <a href="{{ route('gallery') }}"
        class="{{ request()->routeIs('gallery') ? 'text-[#18181B] font-semibold' : 'hover:text-[#18181B]' }}">Galeri</a>
      <a href="{{ route('contact') }}"
        class="{{ request()->routeIs('contact') ? 'text-[#18181B] font-semibold' : 'hover:text-[#18181B]' }}">Pesan Layanan</a>
    </nav>

    <div class="flex items-center gap-3">
      @auth
        <span class="text-sm font-semibold text-[#52525B]">Halo, {{ auth()->user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="text-sm font-semibold text-[#52525B] hover:text-[#18181B]">Keluar</button>
        </form>
      @else
        <a href="{{ route('login') }}"
          class="inline-flex items-center justify-center rounded-lg border border-[#E7E5E0] px-4 py-2 text-sm font-semibold text-[#52525B] hover:border-[#D4D2CD] hover:text-[#18181B]">Masuk</a>
        <a href="{{ route('register') }}"
          class="inline-flex items-center justify-center rounded-lg bg-[#18181B] px-4 py-2 text-sm font-semibold text-white hover:bg-[#3F3F46]">Daftar</a>
      @endauth
    </div>

  </div>
</header>
