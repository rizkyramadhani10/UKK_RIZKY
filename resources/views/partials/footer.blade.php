<footer class="border-t border-[#E7E5E0] bg-[#F4F2EC] text-[#52525B]">
  <div class="container-page py-14 grid grid-cols-4 gap-10 gap-x-12">
    <div class="col-span-2">
      <a href="{{ route('home') }}" class="inline-block">
        <img src="{{ asset('images/logo.png') }}" alt="PT. Solusi Net Nusantara" class="h-12 w-auto">
      </a>
      <p class="body-6 text-[#52525B] mt-3 max-w-sm">
        Kami memasang dan merapikan jaringan internet untuk kantor, gedung, dan kampus. Dikerjakan rapi, diuji
        sampai benar-benar cepat, dan bergaransi.
      </p>
      <div class="mt-6 overflow-hidden rounded-lg border border-[#E7E5E0] bg-white shadow-sm">
        <iframe src="https://www.google.com/maps?q=51.5026482,-0.140514&z=16&output=embed"
          title="Lokasi PT. Solusi Net Nusantara" class="block h-52 w-full border-0" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <div>
      <div class="title-4 text-[#18181B] font-bold">Halaman</div>
      <ul class="mt-4 space-y-2.5 body-6 leading-relaxed">
        <li><a href="{{ route('home') }}" class="hover:text-[#EA580C]">Beranda</a></li>
        <li><a href="{{ route('profile') }}" class="hover:text-[#EA580C]">Tentang Kami</a></li>
        <li><a href="{{ route('products.index') }}" class="hover:text-[#EA580C]">Layanan</a></li>
        <li><a href="{{ route('gallery') }}" class="hover:text-[#EA580C]">Galeri</a></li>
      </ul>
    </div>

    <div>
      <div class="title-4 text-[#18181B] font-bold">Hubungi Kami</div>
      <div class="mt-4 space-y-2 body-6 leading-relaxed text-[#52525B]">
        <p class="text-[#18181B] font-medium">PT. Solusi Net Nusantara</p>

        <p>Telepon: +6289602160689</p>
        <p>Email: solusinetnusantara@gmail.com</p>
      </div>
      <div class="mt-4">
        <a href="{{ route('contact') }}" class="text-xs font-semibold text-[#EA580C] hover:underline">
          Pesan Layanan →
        </a>
      </div>
      <div class="mt-7">
        <div class="title-4 text-[#18181B] font-bold">Media Sosial</div>
        <div class="mt-3 flex flex-col gap-2 body-6">
          <a href="https://www.instagram.com/solusinet" target="_blank"
            class="hover:text-[#EA580C]">Instagram · @solusinet</a>
          <a href="https://x.com/solusinet" target="_blank"
            class="hover:text-[#EA580C]">X · @solusinet</a>
          <a href="https://www.facebook.com/solusinet" target="_blank"
            class="hover:text-[#EA580C]">Facebook · @solusinet</a>
        </div>
      </div>
    </div>
  </div>

  <div class="border-t border-[#E7E5E0] py-5">
    <div class="container-page flex flex-row items-center justify-between gap-3 text-left caption-2 text-[#71717A]">
      <div>PT. Solusi Net Nusantara</div>
    </div>
  </div>
</footer>
