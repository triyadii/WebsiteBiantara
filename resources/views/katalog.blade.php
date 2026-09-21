@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">
<!-- Top Command & Header Area -->
<section class="w-full bg-surface-container-lowest shadow-sm">
<div class="w-full px-margin py-space-lg flex flex-col gap-space-md">
<!-- Breadcrumb & Status Pill -->
<div class="flex flex-wrap items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-xs font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-secondary transition-colors" data-path="beranda" href="#">Beranda</a>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-on-surface font-semibold">Katalog Lokasi OOH</span>
<span class="material-symbols-outlined text-[14px]">chevron_right</span>
<span class="text-secondary font-semibold">Inventory Nasional</span>
</div>
<div class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-surface-container text-secondary font-label-sm text-label-sm">
<span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
<span>Database Terverifikasi Real-Time • Q2 2025</span>
</div>
</div>
<!-- Main Headline Block -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
<div class="flex flex-col gap-space-xs max-w-3xl">
<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">Katalog Lokasi OOH Seluruh Indonesia</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Telusuri dan temukan 800+ titik billboard, videotron, dan media luar ruang strategis di 34 provinsi dengan spesifikasi teknis lengkap serta estimasi daily traffic akurat.</p>
</div>
<div class="flex items-center gap-space-sm self-start md:self-auto">
<a class="inline-flex items-center gap-space-xs px-space-md py-2.5 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg transition-colors" href="#custom-brief-banner">
<span class="material-symbols-outlined text-[18px]">download</span>
<span>Unduh Ratecard PDF</span>
</a>
<a class="inline-flex items-center gap-space-xs px-space-md py-2.5 rounded bg-secondary text-on-secondary hover:bg-secondary-container transition-colors font-label-lg text-label-lg shadow-sm" href="https://wa.me/6281288997700?text=Halo%20Biantara%20Media,%20saya%20butuh%20ketersediaan%20slot%20OOH%20nasional" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[18px]">assignment</span>
<span>Request Media Plan</span>
</a>
</div>
</div>
<!-- Multi-Parameter Filter Engine -->
<div class="mt-space-sm bg-surface-container-low p-space-md rounded-xl shadow-inner flex flex-col gap-space-md">
<!-- Search Row -->
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
<input class="w-full h-11 pl-11 pr-4 bg-surface-container-lowest rounded text-on-surface font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container-lowest shadow-sm" id="search-input" placeholder="Cari berdasarkan kode titik (mis: BG_JAMBI_001), nama jalan, area, landmark, atau kota..." type="text"/>
<button class="hidden absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-on-surface p-1" id="clear-search-btn">
<span class="material-symbols-outlined text-[16px]">close</span>
</button>
</div>
<!-- Dropdowns Row (5 Selects + 2 Buttons) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-space-sm">
<!-- Provinsi -->
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Provinsi</label>
<div class="relative">
<select class="w-full h-10 px-3 pr-8 bg-surface-container-lowest rounded appearance-none font-body-md text-body-md text-on-surface focus:outline-none cursor-pointer shadow-sm" id="filter-province">
<option value="all">Semua Provinsi (34)</option>
<option value="dki-jakarta">DKI Jakarta</option>
<option value="jawa-barat">Jawa Barat</option>
<option value="jawa-tengah">Jawa Tengah</option>
<option value="jawa-timur">Jawa Timur</option>
<option value="jambi">Jambi</option>
<option value="sumatera-utara">Sumatera Utara</option>
<option value="bali">Bali</option>
<option value="sulawesi-selatan">Sulawesi Selatan</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant text-[18px]">expand_more</span>
</div>
</div>
<!-- Kota/Kabupaten -->
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Kota / Area</label>
<div class="relative">
<select class="w-full h-10 px-3 pr-8 bg-surface-container-lowest rounded appearance-none font-body-md text-body-md text-on-surface focus:outline-none cursor-pointer shadow-sm" id="filter-city">
<option value="all">Semua Kota</option>
<option value="jakarta-selatan">Jakarta Selatan</option>
<option value="surabaya">Surabaya</option>
<option value="jambi">Kota Jambi</option>
<option value="medan">Medan</option>
<option value="bandung">Bandung</option>
<option value="denpasar-kuta">Denpasar / Kuta</option>
<option value="makassar">Makassar</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant text-[18px]">expand_more</span>
</div>
</div>
<!-- Jenis Media -->
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Jenis Media</label>
<div class="relative">
<select class="w-full h-10 px-3 pr-8 bg-surface-container-lowest rounded appearance-none font-body-md text-body-md text-on-surface focus:outline-none cursor-pointer shadow-sm" id="filter-type">
<option value="all">Semua Media</option>
<option value="billboard">Billboard</option>
<option value="videotron">Videotron Digital LED</option>
<option value="jpo">JPO / Pedestrian Bridge</option>
<option value="megatron">Megatron Eksterior</option>
<option value="baliho">Baliho Protokol</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant text-[18px]">expand_more</span>
</div>
</div>
<!-- Jenis Penerangan -->
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Penerangan</label>
<div class="relative">
<select class="w-full h-10 px-3 pr-8 bg-surface-container-lowest rounded appearance-none font-body-md text-body-md text-on-surface focus:outline-none cursor-pointer shadow-sm" id="filter-light">
<option value="all">Semua Penerangan</option>
<option value="frontlight">Frontlight Halogen / LED</option>
<option value="digital-led">Digital LED Display</option>
<option value="backlight">Backlight Fabric</option>
<option value="non-light">Non-Light</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant text-[18px]">expand_more</span>
</div>
</div>
<!-- Status Ketersediaan -->
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Status Slot</label>
<div class="relative">
<select class="w-full h-10 px-3 pr-8 bg-surface-container-lowest rounded appearance-none font-body-md text-body-md text-on-surface focus:outline-none cursor-pointer shadow-sm" id="filter-status">
<option value="all">Semua Status</option>
<option value="available">Tersedia Segera</option>
<option value="next-month">Tersedia Bulan Depan</option>
<option value="reserved">Hold / Reserved</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant text-[18px]">expand_more</span>
</div>
</div>
</div>
<!-- Action Buttons & Quick Filter Chips -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md pt-2">
<!-- Quick Filter Tags -->
<div class="flex items-center flex-wrap gap-2">
<span class="font-label-sm text-label-sm text-on-surface-variant mr-1">Rekomendasi Cepat:</span>
<button class="quick-filter-chip px-3 py-1 rounded bg-surface-container hover:bg-surface-variant text-on-surface font-label-sm text-label-sm transition-all" data-province="dki-jakarta" data-type="videotron">Videotron Jakarta</button>
<button class="quick-filter-chip px-3 py-1 rounded bg-surface-container hover:bg-surface-variant text-on-surface font-label-sm text-label-sm transition-all" data-province="jambi" data-type="billboard">Billboard Jambi</button>
<button class="quick-filter-chip px-3 py-1 rounded bg-surface-container hover:bg-surface-variant text-on-surface font-label-sm text-label-sm transition-all" data-city="surabaya">Surabaya Protocol Road</button>
<button class="quick-filter-chip px-3 py-1 rounded bg-surface-container hover:bg-surface-variant text-on-surface font-label-sm text-label-sm transition-all" data-light="frontlight">Frontlight 4x8m</button>
<button class="quick-filter-chip px-3 py-1 rounded bg-surface-container hover:bg-surface-variant text-on-surface font-label-sm text-label-sm transition-all" data-traffic="high">High Traffic (&gt;100k)</button>
</div>
<!-- Apply & Reset Controls -->
<div class="flex items-center gap-space-sm self-end lg:self-auto">
<button class="h-9 px-4 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center gap-1 transition-colors" id="reset-filter-btn">
<span class="material-symbols-outlined text-[16px]">restart_alt</span>
<span>Reset Filter</span>
</button>
<button class="h-9 px-5 rounded bg-secondary hover:bg-secondary-container text-on-secondary font-label-md text-label-md flex items-center gap-1.5 transition-colors shadow-sm" id="apply-filter-btn">
<span class="material-symbols-outlined text-[16px]">filter_alt</span>
<span>Terapkan Filter</span>
</button>
</div>
</div>
</div>
</div>
</section>
<!-- Live Statistics Bar & Result Summary -->
<section class="w-full bg-surface-container-low py-space-sm shadow-sm">
<div class="w-full px-margin flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-md">
<span class="font-label-lg text-label-lg text-on-surface">
          Menampilkan <strong class="text-secondary font-bold" id="visible-counter">6</strong> dari <strong class="text-on-surface">842</strong> Titik OOH Tersedia
        </span>
<span class="hidden sm:inline-block w-1.5 h-1.5 rounded-full bg-outline-variant"></span>
<span class="hidden sm:inline text-body-sm font-body-sm text-on-surface-variant">Update terkini: Hari ini pukul 09:30 WIB</span>
</div>
<div class="flex items-center gap-space-md">
<!-- View switchers (Grid / Map toggle) -->
<div class="flex items-center bg-surface-container-lowest p-0.5 rounded shadow-sm">
<button class="px-3 py-1 rounded bg-secondary text-on-secondary font-label-sm text-label-sm flex items-center gap-1" id="view-grid-btn">
<span class="material-symbols-outlined text-[16px]">grid_view</span>
<span class="hidden sm:inline">Grid Kartu</span>
</button>
<button class="px-3 py-1 rounded text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm flex items-center gap-1" id="view-compact-btn">
<span class="material-symbols-outlined text-[16px]">view_list</span>
<span class="hidden sm:inline">Kompak</span>
</button>
</div>
<!-- Sorting Dropdown -->
<div class="flex items-center gap-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant">Urutkan:</span>
<select class="h-8 px-2.5 bg-surface-container-lowest rounded text-on-surface font-label-md text-label-md focus:outline-none cursor-pointer shadow-sm" id="sort-select">
<option value="popular">Terpopuler</option>
<option value="traffic-high">Traffic Tertinggi</option>
<option value="newest">Terbaru Ditambahkan</option>
<option value="az">Nama Lokasi (A-Z)</option>
</select>
</div>
</div>
</div>
</section>
<!-- Main Catalog Grid Area -->
<section class="w-full px-margin py-space-xl">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg" id="catalog-grid">
<!-- CARD 1: BG_JAMBI_001 -->
<article class="ooh-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group" data-city="jambi" data-light="frontlight" data-province="jambi" data-status="available" data-traffic="85000" data-type="billboard">
<!-- Image & Badges Container -->
<div class="relative w-full h-56 overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="High quality architectural front view of a vertical 4x8 meter outdoor billboard positioned prominently at the busy Simpang Mayang intersection on Jalan Kolonel Abunjani in Jambi city, clear daylight conditions with dense urban vehicle flow, crisp blue skies, corporate clean advertising visual." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQY-Z335hXtDVHWkFiRJZ0VmPql4NbfK67BTNiKxrHkK7-_3zpKKeaDV1VXZqQJ6LAJ6aFNQUJdLA4yx9HTsCZfVXJlMHlOojjut_dWC4wV4-J8y6cZ-Fz7OSzLCRsEO0Hl9TMYyopJYkH4ZsOcVlNFLlD9SPpOC8lBH6jW4HBmkZH7pysKl4PWi5aQqmdHoYHTEPvvlBPGWvu20IHaUwsVJDnDn-GY2F-kjMCreITXez0v4ieeuHb4A"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>
<!-- Top Badges -->
<div class="absolute top-3 left-3 flex items-center gap-1.5">
<span class="px-2.5 py-1 rounded bg-primary-container text-on-primary font-label-sm text-label-sm font-bold tracking-wider uppercase shadow">BG_JAMBI_001</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm">Kota Jambi</span>
</div>
<div class="absolute top-3 right-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-emerald-100 text-emerald-800 font-label-sm text-label-sm font-semibold shadow-sm">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
              Tersedia
            </span>
</div>
<!-- Bottom Image Overlay Meta -->
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary font-label-sm text-label-sm">
<span class="flex items-center gap-1 bg-primary/60 backdrop-blur-sm px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">directions_car</span>
              ~85.000 kend/hari
            </span>
<span class="bg-secondary px-2 py-0.5 rounded font-semibold text-on-secondary">Static Billboard</span>
</div>
</div>
<!-- Body Content -->
<div class="p-space-md flex flex-col flex-grow justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<h2 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1">Simpang Mayang - Jl. Kolonel Abunjani</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
              Kec. Telanaipura / Danau Sipin, Kota Jambi, Jambi
            </p>
</div>
<!-- Structured Spec Matrix -->
<div class="grid grid-cols-2 gap-2 p-space-sm bg-surface-container-low rounded-lg font-body-sm text-body-sm">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Dimensi &amp; Posisi</span>
<span class="font-semibold text-on-surface">4 x 8 Meter (Vertikal)</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Penerangan</span>
<span class="font-semibold text-on-surface">Frontlight Halogen 3 Spot</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Sudut Pandang</span>
<span class="font-semibold text-on-surface">2 Arah Persimpangan</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Karakter Audiens</span>
<span class="font-semibold text-on-surface">Keluarga, Komuter, Retail</span>
</div>
</div>
<!-- Action Buttons -->
<div class="flex items-center gap-space-xs pt-space-xs">
<button class="flex-1 h-9 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center gap-1 transition-colors" onclick="window.location.href='{{ url('/KatalogDetail') }}'">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>Lihat Detail &amp; Flier</span>
</button>
<a class="h-9 px-3 rounded bg-secondary hover:bg-secondary-container text-on-secondary font-label-md text-label-md flex items-center justify-center gap-1 transition-colors shadow-sm" href="https://wa.me/6281288997700?text=Halo%20PT%20Biantara%20Gemilang%20Media,%20saya%20tertarik%20dengan%20titik%20OOH%20BG_JAMBI_001%20Simpang%20Mayang%20Jambi" rel="noopener noreferrer" target="_blank" title="Tanya via WhatsApp">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span class="hidden sm:inline">WhatsApp</span>
</a>
</div>
</div>
</article>
<!-- CARD 2: BG_JKT_RASUNA_005 -->
<article class="ooh-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group" data-city="jakarta-selatan" data-light="digital-led" data-province="dki-jakarta" data-status="available" data-traffic="210000" data-type="videotron">
<div class="relative w-full h-56 overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Vibrant modern digital videotron screen located on Jalan HR Rasuna Said Kavling B1 Kuningan Jakarta Selatan at dusk, showing vivid commercial colors amidst dense multi-lane capital traffic and towering financial skyscrapers, professional high contrast urban media photograph." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGsPmSfYDLAr38qcAx6mNcRIDV-sMgxbtPrTH98euJjyim3h59VyFxxPchoFkIj6e1lq9DAf_aP1I8BcfVN3hxZtzxy4vFFs3P46U6CuX3NwgFWlTDRFTYndCYOdWq2KoUScNWR5YXfxI40hoGitQrlUOokIP97_Z1P37po2lGULSm3QEGwp2QvNV6Aean6f6BlccRjGLHE5td8pbx3k2yT4t41nx7jg2evXqVvg1HlJ55jLnhyZEETg"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>
<div class="absolute top-3 left-3 flex items-center gap-1.5">
<span class="px-2.5 py-1 rounded bg-primary-container text-on-primary font-label-sm text-label-sm font-bold tracking-wider uppercase shadow">BG_JKT_RASUNA_005</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm">Jakarta Selatan</span>
</div>
<div class="absolute top-3 right-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-emerald-100 text-emerald-800 font-label-sm text-label-sm font-semibold shadow-sm">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
              Tersedia
            </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary font-label-sm text-label-sm">
<span class="flex items-center gap-1 bg-primary/60 backdrop-blur-sm px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">directions_car</span>
              ~210.000 kend/hari
            </span>
<span class="bg-secondary-container px-2 py-0.5 rounded font-semibold text-on-secondary">Videotron Digital LED</span>
</div>
</div>
<div class="p-space-md flex flex-col flex-grow justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<h2 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1">Jl. HR Rasuna Said Kav. B1, Kuningan</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
              CBD Rasuna Said, Kuningan, Jakarta Selatan
            </p>
</div>
<div class="grid grid-cols-2 gap-2 p-space-sm bg-surface-container-low rounded-lg font-body-sm text-body-sm">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Dimensi Layar</span>
<span class="font-semibold text-on-surface">8 x 16 Meter (P6 Outdoor)</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Display Schedule</span>
<span class="font-semibold text-on-surface">06.00 - 24.00 (18 Jam)</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Sudut Pandang</span>
<span class="font-semibold text-on-surface">Jalur Cepat Menuju Menteng</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Karakter Audiens</span>
<span class="font-semibold text-on-surface">Eksekutif, Diplomat, Banker</span>
</div>
</div>
<div class="flex items-center gap-space-xs pt-space-xs">
<button class="flex-1 h-9 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center gap-1 transition-colors" onclick="window.location.href='{{ url('/KatalogDetail') }}'">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>Lihat Detail &amp; Flier</span>
</button>
<a class="h-9 px-3 rounded bg-secondary hover:bg-secondary-container text-on-secondary font-label-md text-label-md flex items-center justify-center gap-1 transition-colors shadow-sm" href="https://wa.me/6281288997700?text=Halo%20PT%20Biantara%20Gemilang%20Media,%20saya%20tertarik%20dengan%20titik%20OOH%20BG_JKT_RASUNA_005%20Kuningan%20Jakarta" rel="noopener noreferrer" target="_blank" title="Tanya via WhatsApp">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span class="hidden sm:inline">WhatsApp</span>
</a>
</div>
</div>
</article>
<!-- CARD 3: BG_SBY_AHMADYANI_002 -->
<article class="ooh-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group" data-city="surabaya" data-light="frontlight" data-province="jawa-timur" data-status="available" data-traffic="165000" data-type="billboard">
<div class="relative w-full h-56 overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Grand horizontal 6x12 meter static highway billboard located facing traffic in front of City of Tomorrow Mall on Jalan Ahmad Yani Surabaya, massive multi-lane avenue welcoming visitors from Juanda International Airport, sharp daytime architectural billboard photo." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeBJhShZieeZVrW3JUm8axMJe0Ot0fTBVbaPe-IN65CmP-lJjsX4lYMP7HbcI0cNs3YmBeLvTovVAUdJo8qDQLqQjv48IKGKzvlKqAJQbazhtPqeuXOu7icEXfWdKd8F1xRr_egszYquYxc3ONysJxRXnHNeLKWqqGzt4GvRx05-tTESPEdCq3LOlc8TOz4wgmMSl6VlLkjockM-aFwib4pRikdpjVmdjT8CaKJ_q8apgYwK4p8UYROw"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>
<div class="absolute top-3 left-3 flex items-center gap-1.5">
<span class="px-2.5 py-1 rounded bg-primary-container text-on-primary font-label-sm text-label-sm font-bold tracking-wider uppercase shadow">BG_SBY_AHMADYANI_002</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm">Surabaya</span>
</div>
<div class="absolute top-3 right-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-emerald-100 text-emerald-800 font-label-sm text-label-sm font-semibold shadow-sm">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
              Tersedia
            </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary font-label-sm text-label-sm">
<span class="flex items-center gap-1 bg-primary/60 backdrop-blur-sm px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">directions_car</span>
              ~165.000 kend/hari
            </span>
<span class="bg-secondary px-2 py-0.5 rounded font-semibold text-on-secondary">Static Billboard</span>
</div>
</div>
<div class="p-space-md flex flex-col flex-grow justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<h2 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1">Jl. Ahmad Yani (Depan Mall Cito)</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
              Gerbang Masuk Selatan Surabaya, Wonocolo, Surabaya
            </p>
</div>
<div class="grid grid-cols-2 gap-2 p-space-sm bg-surface-container-low rounded-lg font-body-sm text-body-sm">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Dimensi &amp; Posisi</span>
<span class="font-semibold text-on-surface">6 x 12 Meter (Horizontal)</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Penerangan</span>
<span class="font-semibold text-on-surface">Frontlight 4 Titik LED 400W</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Sudut Pandang</span>
<span class="font-semibold text-on-surface">Pintu Masuk dari Bandara Juanda</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Karakter Audiens</span>
<span class="font-semibold text-on-surface">Traveller, Bisnis &amp; Shopper</span>
</div>
</div>
<div class="flex items-center gap-space-xs pt-space-xs">
<button class="flex-1 h-9 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center gap-1 transition-colors" onclick="openModal('BG_SBY_AHMADYANI_002', 'Jl. Ahmad Yani (Depan Mall Cito), Surabaya', '6 x 12 M', 'Frontlight 4 Titik', '165.000', 'Billboard Static')">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>Lihat Detail &amp; Flier</span>
</button>
<a class="h-9 px-3 rounded bg-secondary hover:bg-secondary-container text-on-secondary font-label-md text-label-md flex items-center justify-center gap-1 transition-colors shadow-sm" href="https://wa.me/6281288997700?text=Halo%20PT%20Biantara%20Gemilang%20Media,%20saya%20tertarik%20dengan%20titik%20OOH%20BG_SBY_AHMADYANI_002%20Surabaya" rel="noopener noreferrer" target="_blank" title="Tanya via WhatsApp">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span class="hidden sm:inline">WhatsApp</span>
</a>
</div>
</div>
</article>
<!-- CARD 4: BG_MDN_GATSU_003 -->
<article class="ooh-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group" data-city="medan" data-light="frontlight" data-province="sumatera-utara" data-status="available" data-traffic="110000" data-type="billboard">
<div class="relative w-full h-56 overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Vertical 5x10 meter outdoor commercial advertising billboard on Jalan Jenderal Gatot Subroto Medan Petisah, busy bustling commercial trade road with modern storefronts, tropical sunlight, crisp high clarity commercial photo." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDmWYXVft21-r5fCmDABLcpe8konK4MefTW7KbQmQ5ugbPyNBPml9WVqm91d14yJBL5YbZd34Rq7iXC4WFW5EAW_2BG3020CnM98oeBW9UbJUKdzp6wGzLCTmSj_maZOixUDoJn-RW78e47NusACQ3nW3F6sP5w5v8B-O7eh0TDZoYezSBBQ7vNVbLl01Jw0tQFwcCkqR_b3tHZ2taukLnfWvfXJHF985HAPRtGhZ_jxNaHY89mWkNTxw"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>
<div class="absolute top-3 left-3 flex items-center gap-1.5">
<span class="px-2.5 py-1 rounded bg-primary-container text-on-primary font-label-sm text-label-sm font-bold tracking-wider uppercase shadow">BG_MDN_GATSU_003</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm">Kota Medan</span>
</div>
<div class="absolute top-3 right-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-emerald-100 text-emerald-800 font-label-sm text-label-sm font-semibold shadow-sm">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
              Tersedia
            </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary font-label-sm text-label-sm">
<span class="flex items-center gap-1 bg-primary/60 backdrop-blur-sm px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">directions_car</span>
              ~110.000 kend/hari
            </span>
<span class="bg-secondary px-2 py-0.5 rounded font-semibold text-on-secondary">Static Billboard</span>
</div>
</div>
<div class="p-space-md flex flex-col flex-grow justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<h2 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1">Jl. Jend. Gatot Subroto No. 88</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
              Medan Petisah, Koridor Komersial Medan, Sumut
            </p>
</div>
<div class="grid grid-cols-2 gap-2 p-space-sm bg-surface-container-low rounded-lg font-body-sm text-body-sm">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Dimensi &amp; Posisi</span>
<span class="font-semibold text-on-surface">5 x 10 Meter (Vertikal)</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Penerangan</span>
<span class="font-semibold text-on-surface">Frontlight LED Energy-Saver</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Sudut Pandang</span>
<span class="font-semibold text-on-surface">Pusat Kuliner &amp; Perdagangan</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Karakter Audiens</span>
<span class="font-semibold text-on-surface">Pelaku Usaha, Pemuda, FMCG</span>
</div>
</div>
<div class="flex items-center gap-space-xs pt-space-xs">
<button class="flex-1 h-9 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center gap-1 transition-colors" onclick="window.location.href='{{ url('/KatalogDetail') }}'">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>Lihat Detail &amp; Flier</span>
</button>
<a class="h-9 px-3 rounded bg-secondary hover:bg-secondary-container text-on-secondary font-label-md text-label-md flex items-center justify-center gap-1 transition-colors shadow-sm" href="https://wa.me/6281288997700?text=Halo%20PT%20Biantara%20Gemilang%20Media,%20saya%20tertarik%20dengan%20titik%20OOH%20BG_MDN_GATSU_003%20Medan" rel="noopener noreferrer" target="_blank" title="Tanya via WhatsApp">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span class="hidden sm:inline">WhatsApp</span>
</a>
</div>
</div>
</article>
<!-- CARD 5: BG_BDG_ASIAAFRIKA_001 -->
<article class="ooh-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group" data-city="bandung" data-light="digital-led" data-province="jawa-barat" data-status="available" data-traffic="140000" data-type="videotron">
<div class="relative w-full h-56 overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="High-resolution landscape 4x8 meter videotron LED screen positioned at the historic Simpang Tamblong on Jalan Asia Afrika Bandung, surrounded by heritage colonial architecture and busy commuter vehicles, warm sunset twilight glow, premium outdoor advertising look." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKUGkgHhwa6R9e3xqSJBVKJhbnyGGtnLVPCKMzozgx3qKM2I9PcXMTKppWS6mgUR0X66sMVvRIx-OUz5Ng1OGPQeAJlTUDarF6RVfB8nEzSbVOosX9hu99m2N2ZjsgG4M4_AXlYdUFTHOqBoT5YNipX9ofByBi7oegDjpAsseCjSHsXfO7GMDoZMsZ_ucvQHolCvENSub0bOA7AFOp6DZlH4MBCYsyDKvysDruQOwXb0Ot4pXq4ZKERw"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>
<div class="absolute top-3 left-3 flex items-center gap-1.5">
<span class="px-2.5 py-1 rounded bg-primary-container text-on-primary font-label-sm text-label-sm font-bold tracking-wider uppercase shadow">BG_BDG_ASIAAFRIKA_001</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm">Kota Bandung</span>
</div>
<div class="absolute top-3 right-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-emerald-100 text-emerald-800 font-label-sm text-label-sm font-semibold shadow-sm">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
              Tersedia
            </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary font-label-sm text-label-sm">
<span class="flex items-center gap-1 bg-primary/60 backdrop-blur-sm px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">directions_car</span>
              ~140.000 kend/hari
            </span>
<span class="bg-secondary-container px-2 py-0.5 rounded font-semibold text-on-secondary">Videotron LED</span>
</div>
</div>
<div class="p-space-md flex flex-col flex-grow justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<h2 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1">Jl. Asia Afrika Simpang Tamblong</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
              Kawasan Bisnis &amp; Pariwisata Bersejarah, Bandung
            </p>
</div>
<div class="grid grid-cols-2 gap-2 p-space-sm bg-surface-container-low rounded-lg font-body-sm text-body-sm">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Dimensi Layar</span>
<span class="font-semibold text-on-surface">4 x 8 Meter (Landscape)</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Penerangan</span>
<span class="font-semibold text-on-surface">Digital SMD Full Color LED</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Sudut Pandang</span>
<span class="font-semibold text-on-surface">Pusat Perbankan &amp; Hotel Bintang</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Karakter Audiens</span>
<span class="font-semibold text-on-surface">Turis Domestik, Profesional</span>
</div>
</div>
<div class="flex items-center gap-space-xs pt-space-xs">
<button class="flex-1 h-9 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center gap-1 transition-colors" onclick="window.location.href='{{ url('/KatalogDetail') }}'">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>Lihat Detail &amp; Flier</span>
</button>
<a class="h-9 px-3 rounded bg-secondary hover:bg-secondary-container text-on-secondary font-label-md text-label-md flex items-center justify-center gap-1 transition-colors shadow-sm" href="https://wa.me/6281288997700?text=Halo%20PT%20Biantara%20Gemilang%20Media,%20saya%20tertarik%20dengan%20titik%20OOH%20BG_BDG_ASIAAFRIKA_001%20Bandung" rel="noopener noreferrer" target="_blank" title="Tanya via WhatsApp">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span class="hidden sm:inline">WhatsApp</span>
</a>
</div>
</div>
</article>
<!-- CARD 6: BG_DPS_BYPASS_004 -->
<article class="ooh-card bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group" data-city="denpasar-kuta" data-light="frontlight" data-province="bali" data-status="available" data-traffic="130000" data-type="billboard">
<div class="relative w-full h-56 overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Expansive horizontal 6x12 meter highway billboard standing tall near the iconic Simpang Dewa Ruci roundabout on Bypass Ngurah Rai Kuta Bali, sunny tropical atmosphere with tourist shuttles and airport traffic, palm trees, crystal blue sky." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPLolKnC6H4QZcN2JlhNdug0wkXCyjya5kyBvnv_cGIGng7DCCh2reLCvJri_wNCBOdrucu6d3PuEf8V6dOBOyp-MWhTL2qJaa1u0KVY1Zn8AaRgehAsDSA5B1cy3VSQGFciQeNTDuKNAakko-w4t9Swhc4Z4nodDyG27xgoG8nWDYcXv5f03SDKN5iITUuSQwOsptqWjLqJ1o_KbtwOJxNlAThdt22WiCyoTNmSVlL23xSUt7AjMe7w"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>
<div class="absolute top-3 left-3 flex items-center gap-1.5">
<span class="px-2.5 py-1 rounded bg-primary-container text-on-primary font-label-sm text-label-sm font-bold tracking-wider uppercase shadow">BG_DPS_BYPASS_004</span>
<span class="px-2 py-0.5 rounded bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm">Badung / Kuta</span>
</div>
<div class="absolute top-3 right-3">
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-emerald-100 text-emerald-800 font-label-sm text-label-sm font-semibold shadow-sm">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
              Tersedia
            </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary font-label-sm text-label-sm">
<span class="flex items-center gap-1 bg-primary/60 backdrop-blur-sm px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">directions_car</span>
              ~130.000 kend &amp; turis/hari
            </span>
<span class="bg-secondary px-2 py-0.5 rounded font-semibold text-on-secondary">Static Billboard</span>
</div>
</div>
<div class="p-space-md flex flex-col flex-grow justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<h2 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1">Jl. Bypass Ngurah Rai Simpang Dewa Ruci</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
              Akses Segitiga Emas Kuta - Sanur - Nusa Dua, Bali
            </p>
</div>
<div class="grid grid-cols-2 gap-2 p-space-sm bg-surface-container-low rounded-lg font-body-sm text-body-sm">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Dimensi &amp; Posisi</span>
<span class="font-semibold text-on-surface">6 x 12 Meter (Horizontal)</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Penerangan</span>
<span class="font-semibold text-on-surface">Frontlight 4 Lampu LED 400W</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Sudut Pandang</span>
<span class="font-semibold text-on-surface">Arah Bandara Menuju Kuta &amp; Seminyak</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant">Karakter Audiens</span>
<span class="font-semibold text-on-surface">Wisatawan Mancanegara, Lifestyle</span>
</div>
</div>
<div class="flex items-center gap-space-xs pt-space-xs">
<button class="flex-1 h-9 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md flex items-center justify-center gap-1 transition-colors" onclick="window.location.href='{{ url('/KatalogDetail') }}'">
<span class="material-symbols-outlined text-[16px]">visibility</span>
<span>Lihat Detail &amp; Flier</span>
</button>
<a class="h-9 px-3 rounded bg-secondary hover:bg-secondary-container text-on-secondary font-label-md text-label-md flex items-center justify-center gap-1 transition-colors shadow-sm" href="https://wa.me/6281288997700?text=Halo%20PT%20Biantara%20Gemilang%20Media,%20saya%20tertarik%20dengan%20titik%20OOH%20BG_DPS_BYPASS_004%20Bali" rel="noopener noreferrer" target="_blank" title="Tanya via WhatsApp">
<span class="material-symbols-outlined text-[16px]">chat</span>
<span class="hidden sm:inline">WhatsApp</span>
</a>
</div>
</div>
</article>
</div>
<!-- Empty State (Hidden by default) -->
<div class="hidden w-full py-space-xl text-center flex-col items-center justify-center gap-space-sm bg-surface-container-lowest rounded-xl p-space-lg shadow-sm" id="empty-state">
<div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[32px]">search_off</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface">Tidak Ada Titik OOH yang Cocok</h3>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">Kriteria filter Anda belum menemukan titik aktif. Silakan reset filter atau hubungi sales consultant kami untuk ketersediaan unlisted spot.</p>
<button class="mt-2 h-9 px-4 rounded bg-secondary text-on-secondary font-label-md text-label-md" onclick="resetAllFilters()">Reset Pencarian</button>
</div>
</section>
<!-- Clean Pagination & Interactive Navigator -->
<section class="w-full px-margin pb-space-lg">
<div class="flex flex-col sm:flex-row items-center justify-between gap-space-md p-space-md bg-surface-container-lowest rounded-xl shadow-sm">
<span class="font-body-sm text-body-sm text-on-surface-variant">
        Halaman <span class="font-semibold text-on-surface">1</span> dari <span class="font-semibold text-on-surface">71</span> (Menampilkan 6 entri per halaman)
      </span>
<!-- Pagination Buttons -->
<nav aria-label="Katalog Navigasi" class="inline-flex items-center gap-1">
<button class="h-9 px-3 rounded bg-surface-container opacity-50 cursor-not-allowed text-on-surface font-label-sm text-label-sm flex items-center gap-1" disabled="">
<span class="material-symbols-outlined text-[16px]">chevron_left</span>
<span class="hidden md:inline">Prev</span>
</button>
<button class="w-9 h-9 rounded bg-secondary text-on-secondary font-label-md text-label-md font-bold">1</button>
<button class="w-9 h-9 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-colors">2</button>
<button class="w-9 h-9 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-colors">3</button>
<span class="px-2 text-on-surface-variant font-label-md text-label-md">...</span>
<button class="w-9 h-9 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-colors">71</button>
<button class="h-9 px-3 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm flex items-center gap-1 transition-colors">
<span class="hidden md:inline">Next</span>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
</button>
</nav>
</div>
</section>
<!-- High Impact Custom Media Plan Proposal Banner -->
<section class="w-full px-margin pb-space-xl" id="custom-brief-banner">
<div class="relative overflow-hidden rounded-xl bg-primary-container p-space-lg md:p-space-xl text-on-primary shadow-lg flex flex-col lg:flex-row items-center justify-between gap-space-lg">
<!-- Background Ambient Glow & Graphic -->
<div class="absolute -right-16 -top-16 w-96 h-96 rounded-full bg-secondary/20 blur-3xl pointer-events-none"></div>
<div class="absolute -left-16 -bottom-16 w-72 h-72 rounded-full bg-secondary-container/20 blur-2xl pointer-events-none"></div>
<div class="relative z-10 flex flex-col gap-space-xs max-w-2xl">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded bg-secondary/30 text-secondary-fixed w-fit font-label-sm text-label-sm">
<span class="material-symbols-outlined text-[16px]">verified</span>
<span>Bespoke Media Planning • Guaranteed Availability</span>
</div>
<h3 class="font-headline-xl text-headline-xl text-on-primary tracking-tight">Butuh Rekomendasi Titik Custom untuk Media Plan Brand Anda?</h3>
<p class="font-body-lg text-body-lg text-primary-fixed-dim">Kirimkan brief target audiens Anda, tim media planner kami akan menyusunkan proposal titik OOH lengkap beserta flier dalam 1x24 jam.</p>
<div class="mt-2 flex flex-wrap gap-space-md text-body-sm font-body-sm text-outline-variant">
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-secondary-fixed text-[18px]">check_circle</span>
<span>Legalitas &amp; Pajak Reklame Resmi</span>
</div>
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-secondary-fixed text-[18px]">check_circle</span>
<span>Laporan Bukti Tayang Mingguan</span>
</div>
<div class="flex items-center gap-1.5">
<span class="material-symbols-outlined text-secondary-fixed text-[18px]">check_circle</span>
<span>Dukungan Maintenance Lampu 24 Jam</span>
</div>
</div>
</div>
<div class="relative z-10 flex flex-col sm:flex-row items-center gap-space-sm w-full lg:w-auto">
<a class="w-full sm:w-auto px-space-lg py-3.5 rounded bg-secondary text-on-secondary hover:bg-secondary-container font-headline-sm text-headline-sm flex items-center justify-center gap-2 transition-all shadow-md" href="https://wa.me/6281288997700?text=Halo%20Account%20Executive%20Biantara%20Media,%20saya%20ingin%20kirim%20brief%20kampanye%20OOH%20untuk%20brand%20saya" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[20px]">chat</span>
<span>Hubungi Account Executive via WA</span>
</a>
</div>
</div>
</section>
<!-- Flier & Spot Detail Modal Dialog -->
<div class="fixed inset-0 z-50 hidden bg-on-surface/60 backdrop-blur-sm flex items-center justify-center p-4" id="detail-modal">
<div class="bg-surface-container-lowest rounded-xl max-w-2xl w-full p-space-lg shadow-2xl flex flex-col gap-space-md relative max-h-[90vh] overflow-y-auto">
<button class="absolute top-4 right-4 text-on-surface-variant hover:text-on-surface p-1 rounded-full bg-surface-container hover:bg-surface-variant transition-colors" onclick="closeModal()">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-secondary font-bold tracking-wider uppercase" id="modal-code">BG_CODE</span>
<h3 class="font-headline-md text-headline-md text-on-surface pr-8" id="modal-title">Nama Titik Lokasi OOH</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">PT Biantara Gemilang Media • Single Asset Verification Sheet</p>
</div>
<div class="relative w-full h-64 bg-surface-container rounded-lg overflow-hidden">
<img class="w-full h-full object-cover" data-alt="High precision photorealistic site inspection perspective photo of the outdoor media infrastructure, clear viewing angles from arterial road traffic, labeled technical markings, daylight corporate presentation quality." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOiQCSZhNxt__AaKG12NXE9TUFvmVoAdah1G4ZYthUOuhYW5oAkvUXSKVo-OpOqRAZqsYgqVw4zHVCmaYBRrHxp2ojc5qD6yPu-Q4QUkAzZkAHfQkcnRQz9FUG7kYCHkSfiea7dbln8MKWcVoZV0Zgo39b1iq3Fv49-tHQKbelxo3k7jDYE05bxeNxYCC-Y2KyDAvx3tCtziNwc-m73hbyneqO7FXZqNZkVhTKZVXn_fd8ehGKcR8_pw"/>
</div>
<div class="grid grid-cols-2 sm:grid-cols-4 gap-2 bg-surface-container-low p-space-sm rounded-lg text-body-sm font-body-sm">
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant block">Format</span>
<strong class="text-on-surface font-semibold" id="modal-type">-</strong>
</div>
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant block">Dimensi</span>
<strong class="text-on-surface font-semibold" id="modal-dimension">-</strong>
</div>
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant block">Penerangan</span>
<strong class="text-on-surface font-semibold" id="modal-lighting">-</strong>
</div>
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant block">Est. Traffic</span>
<strong class="text-on-surface font-semibold" id="modal-traffic">- kend/hari</strong>
</div>
</div>
<div class="flex flex-col gap-1.5 font-body-sm text-body-sm text-on-surface-variant">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-emerald-600">check</span>
<span>Status Izin Penyelenggaraan Reklame (IPR) Aktif &amp; Resmi</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-emerald-600">check</span>
<span>Struktur Konstruksi Berstandar SNI Tahan Angin Kencang</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-emerald-600">check</span>
<span>Tersedia Layanan Cetak Materi &amp; Pemasangan Kilat</span>
</div>
</div>
<div class="flex items-center justify-end gap-space-sm pt-space-xs">
<button class="h-10 px-4 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md" onclick="closeModal()">Tutup</button>
<a class="h-10 px-5 rounded bg-secondary hover:bg-secondary-container text-on-secondary font-label-md text-label-md flex items-center gap-1.5 shadow-sm" href="#" id="modal-wa-link" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[18px]">chat</span>
<span>Booking Titik via WhatsApp</span>
</a>
</div>
</div>
</div>
<!-- Client-side Interactive Filter Script -->
<script>
    const searchInput = document.getElementById('search-input');
    const clearSearchBtn = document.getElementById('clear-search-btn');
    const filterProvince = document.getElementById('filter-province');
    const filterCity = document.getElementById('filter-city');
    const filterType = document.getElementById('filter-type');
    const filterLight = document.getElementById('filter-light');
    const filterStatus = document.getElementById('filter-status');
    const applyFilterBtn = document.getElementById('apply-filter-btn');
    const resetFilterBtn = document.getElementById('reset-filter-btn');
    const visibleCounter = document.getElementById('visible-counter');
    const emptyState = document.getElementById('empty-state');
    const cards = document.querySelectorAll('.ooh-card');

    // Quick chips
    document.querySelectorAll('.quick-filter-chip').forEach(chip => {
      chip.addEventListener('click', () => {
        resetAllFilters(false);
        if (chip.dataset.type) filterType.value = chip.dataset.type;
        if (chip.dataset.province) filterProvince.value = chip.dataset.province;
        if (chip.dataset.city) filterCity.value = chip.dataset.city;
        if (chip.dataset.light) filterLight.value = chip.dataset.light;
        if (chip.dataset.traffic) {
          // Special sort / filter logic
          document.getElementById('sort-select').value = 'traffic-high';
        }
        applyFilters();
      });
    });

    searchInput.addEventListener('input', () => {
      clearSearchBtn.classList.toggle('hidden', !searchInput.value);
      applyFilters();
    });

    clearSearchBtn.addEventListener('click', () => {
      searchInput.value = '';
      clearSearchBtn.classList.add('hidden');
      applyFilters();
    });

    applyFilterBtn.addEventListener('click', applyFilters);
    resetFilterBtn.addEventListener('click', () => resetAllFilters(true));

    function applyFilters() {
      const q = searchInput.value.toLowerCase().trim();
      const prov = filterProvince.value;
      const city = filterCity.value;
      const type = filterType.value;
      const light = filterLight.value;
      const stat = filterStatus.value;

      let visibleCount = 0;

      cards.forEach(card => {
        const text = card.textContent.toLowerCase();
        const matchesQuery = !q || text.includes(q);
        const matchesProv = prov === 'all' || card.dataset.province === prov;
        const matchesCity = city === 'all' || card.dataset.city === city;
        const matchesType = type === 'all' || card.dataset.type === type;
        const matchesLight = light === 'all' || card.dataset.light === light;
        const matchesStatus = stat === 'all' || card.dataset.status === stat;

        if (matchesQuery && matchesProv && matchesCity && matchesType && matchesLight && matchesStatus) {
          card.classList.remove('hidden');
          visibleCount++;
        } else {
          card.classList.add('hidden');
        }
      });

      visibleCounter.textContent = visibleCount;
      if (visibleCount === 0) {
        emptyState.classList.remove('hidden');
        emptyState.classList.add('flex');
      } else {
        emptyState.classList.add('hidden');
        emptyState.classList.remove('flex');
      }
    }

    function resetAllFilters(triggerFilter = true) {
      searchInput.value = '';
      clearSearchBtn.classList.add('hidden');
      filterProvince.value = 'all';
      filterCity.value = 'all';
      filterType.value = 'all';
      filterLight.value = 'all';
      filterStatus.value = 'all';
      if (triggerFilter) applyFilters();
    }

    // Modal Interaction
    function openModal(code, title, dim, light, traffic, type) {
      document.getElementById('modal-code').textContent = code;
      document.getElementById('modal-title').textContent = title;
      document.getElementById('modal-dimension').textContent = dim;
      document.getElementById('modal-lighting').textContent = light;
      document.getElementById('modal-traffic').textContent = traffic;
      document.getElementById('modal-type').textContent = type;
      
      const waMsg = encodeURIComponent(`Halo PT Biantara Gemilang Media, saya ingin tanya ketersediaan & rate flier untuk titik ${code} - ${title}`);
      document.getElementById('modal-wa-link').href = `https://wa.me/6281288997700?text=${waMsg}`;

      document.getElementById('detail-modal').classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    }

    function closeModal() {
      document.getElementById('detail-modal').classList.add('hidden');
      document.body.style.overflow = '';
    }

    // View Modes
    const viewGridBtn = document.getElementById('view-grid-btn');
    const viewCompactBtn = document.getElementById('view-compact-btn');
    const catalogGrid = document.getElementById('catalog-grid');

    viewGridBtn.addEventListener('click', () => {
      catalogGrid.className = 'grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg';
      viewGridBtn.className = 'px-3 py-1 rounded bg-secondary text-on-secondary font-label-sm text-label-sm flex items-center gap-1';
      viewCompactBtn.className = 'px-3 py-1 rounded text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm flex items-center gap-1';
    });

    viewCompactBtn.addEventListener('click', () => {
      catalogGrid.className = 'grid grid-cols-1 md:grid-cols-2 gap-space-md';
      viewCompactBtn.className = 'px-3 py-1 rounded bg-secondary text-on-secondary font-label-sm text-label-sm flex items-center gap-1';
      viewGridBtn.className = 'px-3 py-1 rounded text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm flex items-center gap-1';
    });
  </script>
</div>
@endsection
