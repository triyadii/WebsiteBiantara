@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">
<!-- HERO SECTION -->
<section class="relative w-full overflow-hidden bg-surface-container-low py-space-xl">
<!-- Subtle architectural background ambience -->
<div class="absolute inset-0 pointer-events-none opacity-40">
<div class="absolute -top-32 -left-20 w-96 h-96 rounded-full bg-surface-variant blur-3xl"></div>
<div class="absolute top-1/2 -right-24 w-[500px] h-[500px] rounded-full bg-secondary-fixed blur-3xl opacity-60"></div>
<svg class="absolute inset-0 w-full h-full stroke-on-surface/5" xmlns="http://www.w3.org/2000/svg">
<defs>
<pattern height="48" id="grid-pattern" patternunits="userSpaceOnUse" width="48">
<path d="M 48 0 L 0 0 0 48" fill="none" stroke-width="1"></path>
</pattern>
</defs>
<rect fill="url(#grid-pattern)" height="100%" width="100%"></rect>
</svg>
</div>
<div class="relative w-full px-margin mx-auto max-w-7xl flex flex-col gap-space-lg">
<!-- Badge & Category Identifier -->
<div class="flex flex-wrap items-center gap-space-sm">
<span class="inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-secondary text-on-secondary font-label-md text-label-md shadow-sm">
<span class="material-symbols-outlined text-[16px]">verified</span>
          Jaringan Media Luar Ruang Terluas di Indonesia
        </span>
<span class="inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">
<span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          800+ Titik Aktif Siap Pakai
        </span>
</div>
<!-- Main Headline & Subtitle -->
<div class="max-w-4xl flex flex-col gap-space-sm">
<h1 class="font-display-lg text-display-lg text-on-surface tracking-tight leading-tight">
          Tingkatkan <span class="text-secondary">Brand Visibility</span> Anda dengan 800+ Titik Strategis di Seluruh Indonesia
        </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl leading-relaxed">
          Solusi iklan luar ruang (OOH), Billboard premium, Megatron &amp; Videotron digital beresolusi tinggi di jalur protokol, persimpangan utama, dan pusat komersial nasional berizin resmi pemda.
        </p>
</div>
<!-- Quick Interactive Search & Filter Matrix Engine -->
<div class="w-full bg-surface-container-lowest p-space-md md:p-space-lg rounded-xl shadow-lg mt-space-sm">
<form class="grid grid-cols-1 md:grid-cols-12 gap-space-md items-end" id="heroFilterForm" onsubmit="event.preventDefault(); window.location.hash = 'katalog-lokasi-ooh';">
<!-- Filter 1: Wilayah / Provinsi -->
<div class="md:col-span-3 flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface flex items-center gap-space-xs">
<span class="material-symbols-outlined text-[18px] text-secondary">location_on</span>
              Pilih Provinsi / Kota
            </label>
<div class="relative">
<select class="w-full h-11 px-space-md pr-8 rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface appearance-none focus:outline-none focus:bg-surface-container transition-all">
<option value="all">Semua Provinsi (Nasional)</option>
<option value="dki">DKI Jakarta</option>
<option value="jabar">Jawa Barat (Bandung, Bekasi)</option>
<option value="jatim">Jawa Timur (Surabaya, Malang)</option>
<option value="sumut">Sumatera Utara (Medan)</option>
<option value="jambi">Jambi (Kota Jambi, Sipin)</option>
<option value="bali">Bali (Denpasar, Badung)</option>
<option value="sulsel">Sulawesi Selatan (Makassar)</option>
<option value="kaltim">Kalimantan Timur (Balikpapan)</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-2.5 text-on-surface-variant pointer-events-none text-[20px]">expand_more</span>
</div>
</div>
<!-- Filter 2: Jenis Media Display -->
<div class="md:col-span-3 flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface flex items-center gap-space-xs">
<span class="material-symbols-outlined text-[18px] text-secondary">view_carousel</span>
              Format Media OOH
            </label>
<div class="relative">
<select class="w-full h-11 px-space-md pr-8 rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface appearance-none focus:outline-none focus:bg-surface-container transition-all">
<option value="all">Semua Format OOH</option>
<option value="videotron">Videotron LED Digital (DOOH)</option>
<option value="billboard">Billboard Frontlight Premium</option>
<option value="megatron">Megatron Sudut Jalan</option>
<option value="jpo">JPO &amp; Pedestrian Overpass</option>
<option value="bando">Bando Jalan Protokol</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-2.5 text-on-surface-variant pointer-events-none text-[20px]">expand_more</span>
</div>
</div>
<!-- Filter 3: Kata Kunci / Kode Titik OOH -->
<div class="md:col-span-4 flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface flex items-center gap-space-xs">
<span class="material-symbols-outlined text-[18px] text-secondary">search</span>
              Nama Jalan atau Kode Titik
            </label>
<div class="relative">
<input class="w-full h-11 px-space-md pl-10 rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface placeholder:text-outline focus:outline-none focus:bg-surface-container transition-all" placeholder="Cth: Sudirman, BG_JAMBI_01, Darmo" type="text"/>
<span class="material-symbols-outlined absolute left-3 top-2.5 text-outline text-[20px]">pin_drop</span>
</div>
</div>
<!-- Action Buttons -->
<div class="md:col-span-2 flex items-center gap-space-xs">
<button class="w-full h-11 inline-flex items-center justify-center gap-space-xs rounded-lg bg-secondary text-on-secondary hover:bg-secondary-container font-label-lg text-label-lg transition-all shadow-md" type="submit">
<span class="material-symbols-outlined text-[18px]">travel_explore</span>
<span>Cari Titik</span>
</button>
</div>
</form>
<!-- Quick Location Tags / Suggestions -->
<div class="mt-space-md pt-space-sm flex flex-wrap items-center gap-space-xs text-on-surface-variant">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Populer:</span>
<button class="px-space-sm py-1 rounded bg-surface-container hover:bg-surface-variant font-label-sm text-label-sm text-on-surface transition-colors" onclick="document.querySelector('#heroFilterForm input').value='Gatot Subroto';">Gatot Subroto JKT</button>
<button class="px-space-sm py-1 rounded bg-surface-container hover:bg-surface-variant font-label-sm text-label-sm text-on-surface transition-colors" onclick="document.querySelector('#heroFilterForm input').value='Sipin Jambi';">Simpang Sipin Jambi</button>
<button class="px-space-sm py-1 rounded bg-surface-container hover:bg-surface-variant font-label-sm text-label-sm text-on-surface transition-colors" onclick="document.querySelector('#heroFilterForm input').value='Raya Darmo';">Raya Darmo SBY</button>
<button class="px-space-sm py-1 rounded bg-surface-container hover:bg-surface-variant font-label-sm text-label-sm text-on-surface transition-colors" onclick="document.querySelector('#heroFilterForm input').value='Medan Merdeka';">Medan Kota</button>
</div>
</div>
<!-- Key Metrics Counters -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-space-md pt-space-md">
<div class="p-space-md rounded-xl bg-surface-container-lowest/80 backdrop-blur shadow-sm flex items-center gap-space-md">
<div class="w-12 h-12 rounded-lg bg-secondary-fixed flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[28px]">ad_units</span>
</div>
<div>
<div class="font-headline-xl text-headline-xl text-on-surface font-extrabold tracking-tight">800+</div>
<div class="font-label-md text-label-md text-on-surface-variant">Titik Lokasi Aktif</div>
</div>
</div>
<div class="p-space-md rounded-xl bg-surface-container-lowest/80 backdrop-blur shadow-sm flex items-center gap-space-md">
<div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-on-surface">
<span class="material-symbols-outlined text-[28px]">map</span>
</div>
<div>
<div class="font-headline-xl text-headline-xl text-on-surface font-extrabold tracking-tight">34+</div>
<div class="font-label-md text-label-md text-on-surface-variant">Provinsi Terjangkau</div>
</div>
</div>
<div class="p-space-md rounded-xl bg-surface-container-lowest/80 backdrop-blur shadow-sm flex items-center gap-space-md">
<div class="w-12 h-12 rounded-lg bg-surface-variant flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[28px]">bolt</span>
</div>
<div>
<div class="font-headline-xl text-headline-xl text-on-surface font-extrabold tracking-tight">99.8%</div>
<div class="font-label-md text-label-md text-on-surface-variant">Display &amp; Light Uptime</div>
</div>
</div>
<div class="p-space-md rounded-xl bg-surface-container-lowest/80 backdrop-blur shadow-sm flex items-center gap-space-md">
<div class="w-12 h-12 rounded-lg bg-tertiary-fixed flex items-center justify-center text-on-tertiary-container">
<span class="material-symbols-outlined text-[28px]">corporate_fare</span>
</div>
<div>
<div class="font-headline-xl text-headline-xl text-on-surface font-extrabold tracking-tight">150+</div>
<div class="font-label-md text-label-md text-on-surface-variant">Top Brand Nasional</div>
</div>
</div>
</div>
</div>
</section>
<!-- CLIENT & BRAND SHOWCASE -->
<section class="w-full bg-surface-container-lowest py-space-lg shadow-sm">
<div class="w-full px-margin mx-auto max-w-7xl flex flex-col items-center gap-space-md">
<div class="text-center">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-outline">Kepercayaan Industri</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Dipercaya oleh Puluhan Brand Terkemuka di Indonesia</h2>
</div>
<!-- Clean Minimal Brand Ticker Grid -->
<div class="w-full grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-10 gap-space-sm items-center justify-center opacity-80 pt-space-xs">
<div class="h-12 rounded-lg bg-surface-container-low flex items-center justify-center font-headline-sm text-headline-sm font-bold text-on-surface-variant/70 tracking-wider">TELKOMSEL</div>
<div class="h-12 rounded-lg bg-surface-container-low flex items-center justify-center font-headline-sm text-headline-sm font-bold text-on-surface-variant/70 tracking-wider">BCA</div>
<div class="h-12 rounded-lg bg-surface-container-low flex items-center justify-center font-headline-sm text-headline-sm font-bold text-on-surface-variant/70 tracking-wider">PERTAMINA</div>
<div class="h-12 rounded-lg bg-surface-container-low flex items-center justify-center font-headline-sm text-headline-sm font-bold text-on-surface-variant/70 tracking-wider">TOKOPEDIA</div>
<div class="h-12 rounded-lg bg-surface-container-low flex items-center justify-center font-headline-sm text-headline-sm font-bold text-on-surface-variant/70 tracking-wider">INDOFOOD</div>
<div class="h-12 rounded-lg bg-surface-container-low flex items-center justify-center font-headline-sm text-headline-sm font-bold text-on-surface-variant/70 tracking-wider">ASTRA</div>
<div class="h-12 rounded-lg bg-surface-container-low flex items-center justify-center font-headline-sm text-headline-sm font-bold text-on-surface-variant/70 tracking-wider">SAMSUNG</div>
<div class="h-12 rounded-lg bg-surface-container-low flex items-center justify-center font-headline-sm text-headline-sm font-bold text-on-surface-variant/70 tracking-wider">GOTO</div>
<div class="h-12 rounded-lg bg-surface-container-low flex items-center justify-center font-headline-sm text-headline-sm font-bold text-on-surface-variant/70 tracking-wider">DJARUM</div>
<div class="h-12 rounded-lg bg-surface-container-low flex items-center justify-center font-headline-sm text-headline-sm font-bold text-on-surface-variant/70 tracking-wider">TRAVELOKA</div>
</div>
</div>
</section>
<!-- VALUE PROPOSITION & 4 PILAR KEUNGGULAN -->
<section class="w-full py-space-xl bg-surface">
<div class="w-full px-margin mx-auto max-w-7xl flex flex-col gap-space-xl">
<!-- Section Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
<div class="max-w-2xl flex flex-col gap-space-xs">
<span class="font-label-md text-label-md text-secondary uppercase tracking-wider font-semibold">Mengapa Biantara Media</span>
<h2 class="font-headline-xl text-headline-xl text-on-surface font-bold tracking-tight">
            Keunggulan Eksekusi OOH dengan Standar Korporasi Nasional
          </h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">
          Kami mengombinasikan keandalan konstruksi fisik, akurasi perizinan, dan analisis lalu lintas mendalam untuk memberikan jangkauan impresi maksimal.
        </p>
</div>
<!-- 4 Pillars Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg">
<!-- Pilar 1 -->
<div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-md flex flex-col gap-space-md group hover:-translate-y-1 transition-transform">
<div class="w-14 h-14 rounded-xl bg-secondary-fixed flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[32px]">traffic</span>
</div>
<div class="flex flex-col gap-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-outline">01. Lokasi &amp; Trafik</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Super Strategis &amp; Traffic Tinggi</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Dianalisis berdasarkan volume kendaraan harian, kecepatan laju rambu, dan visibilitas sudut pandang langsung (sight-line) bagi pengendara maupun pejalan kaki.
          </p>
<div class="mt-auto pt-space-sm flex items-center gap-space-xs text-secondary font-label-md text-label-md">
<span>Audit Sudut Pandang 100% Bebas Rintangan</span>
</div>
</div>
<!-- Pilar 2 -->
<div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-md flex flex-col gap-space-md group hover:-translate-y-1 transition-transform">
<div class="w-14 h-14 rounded-xl bg-surface-container flex items-center justify-center text-on-surface">
<span class="material-symbols-outlined text-[32px]">gavel</span>
</div>
<div class="flex flex-col gap-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-outline">02. Kepatuhan Regulasi</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Perizinan Resmi &amp; Pajak Terjamin</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Seluruh titik memiliki izin resmi Pemda, IMB/PBG konstruksi reklame, kepatuhan zonasi ketat, serta pelunasan Pajak Reklame yang aman dan bebas sengketa.
          </p>
<div class="mt-auto pt-space-sm flex items-center gap-space-xs text-secondary font-label-md text-label-md">
<span>Garansi Keamanan Materi Kampanye</span>
</div>
</div>
<!-- Pilar 3 -->
<div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-md flex flex-col gap-space-md group hover:-translate-y-1 transition-transform">
<div class="w-14 h-14 rounded-xl bg-surface-variant flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[32px]">engineering</span>
</div>
<div class="flex flex-col gap-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-outline">03. Teknis &amp; Pemeliharaan</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Pemeliharaan &amp; Monitoring Rutin</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Tim teknis lapangan yang standby memastikan sistem penerangan frontlight/backlight, kestabilan modul LED videotron, dan kebersihan visual 24 jam sehari.
          </p>
<div class="mt-auto pt-space-sm flex items-center gap-space-xs text-secondary font-label-md text-label-md">
<span>SLA Penanganan Kendala &lt; 4 Jam</span>
</div>
</div>
<!-- Pilar 4 -->
<div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-md flex flex-col gap-space-md group hover:-translate-y-1 transition-transform">
<div class="w-14 h-14 rounded-xl bg-tertiary-fixed flex items-center justify-center text-on-tertiary-container">
<span class="material-symbols-outlined text-[32px]">quick_reference_all</span>
</div>
<div class="flex flex-col gap-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-outline">04. Respon Transparan</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Proses Cepat &amp; Flier Spesifikasi</h3>
</div>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
            Dapatkan flier titik lengkap dengan foto aktual, ukuran presisi, traffic count, peta koordinat GPS, dan rate card transparan dalam hitungan menit via Account Executive.
          </p>
<div class="mt-auto pt-space-sm flex items-center gap-space-xs text-secondary font-label-md text-label-md">
<span>Respon Cepat Tim Sales &lt; 15 Menit</span>
</div>
</div>
</div>
</div>
</section>
<!-- FEATURED OOH LOCATIONS -->
<section class="w-full py-space-xl bg-surface-container-low">
<div class="w-full px-margin mx-auto max-w-7xl flex flex-col gap-space-lg">
<!-- Section Header -->
<div class="flex flex-col sm:flex-row sm:items-end justify-between gap-space-md">
<div>
<div class="inline-flex items-center gap-space-xs px-space-sm py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-secondary font-bold mb-space-xs uppercase">
            Rekomendasi Prime Spot
          </div>
<h2 class="font-headline-xl text-headline-xl text-on-surface font-bold">Katalog Titik Pilihan Terbaik</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Titik strategis dengan jangkauan impresi tertinggi minggu ini.</p>
</div>
<a class="inline-flex items-center gap-space-xs px-space-md py-space-sm rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-lg text-label-lg transition-colors shadow-sm" data-path="katalog-lokasi-ooh" href="#">
<span>Lihat Semua 800+ Titik</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
<!-- 3 Featured Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
<!-- CARD 1: Jakarta Gatsu Videotron -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-md flex flex-col hover:shadow-xl transition-all">
<div class="relative aspect-video w-full overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Megah LED Videotron DOOH raksasa di Jalan Gatot Subroto Jakarta Selatan pada sore hari menjelang magrib dengan arus lalu lintas mobil mewah padat merayap, gedung pencakar langit modern berlampu di latar belakang, display digital cerah menampilkan visual promosi tajam profesional." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7ySa9lvcEjnOCEDgu6513CltXv6FnDWVn98vpu9lir96v7biqBZNyZU0CakOd0uvP1DChwHALAwa2cB4zJXv-5Ek_-apcgVmmFceAyV7f8RvK2WKAjgknLhOUT8TS3YPV21-E44D26zke1XsEEVulD-xqER6n1zFIjs7RWaWh08oVIxkyi4ZfHPpvlUvDAb_niE3grqgimuh2KshRzs5qwwmlDwXn7RgP0LZxr13Zn3xVGyrMbkXfqw"/>
<div class="absolute top-3 left-3 flex gap-space-xs">
<span class="px-space-sm py-1 rounded bg-secondary text-on-secondary font-label-sm text-label-sm font-bold shadow">
                Videotron LED
              </span>
<span class="px-space-sm py-1 rounded bg-emerald-600 text-on-secondary font-label-sm text-label-sm font-semibold flex items-center gap-1 shadow">
<span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span> Tersedia
              </span>
</div>
<div class="absolute bottom-3 right-3 px-space-sm py-0.5 rounded bg-on-surface/80 backdrop-blur text-on-primary font-label-sm text-label-sm">
              180.000+ Kendaraan/Hari
            </div>
</div>
<div class="p-space-lg flex flex-col flex-1 gap-space-md">
<div>
<div class="font-label-sm text-label-sm text-secondary font-bold tracking-wider">KODE: BG_JKT_GATSU_01</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mt-0.5">Jl. Gatot Subroto Kav. 38, Jakarta</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Arah Kuningan menuju Semanggi &amp; Senayan. Sudut pandang frontal 150 meter bebas hambatan.</p>
</div>
<!-- Specs Grid -->
<div class="grid grid-cols-2 gap-space-xs p-space-sm rounded-lg bg-surface-container-low font-body-sm text-body-sm">
<div>
<span class="text-outline block text-[11px]">Dimensi Layar</span>
<span class="font-semibold text-on-surface">8m (T) x 16m (L)</span>
</div>
<div>
<span class="text-outline block text-[11px]">Tipe Display</span>
<span class="font-semibold text-on-surface">DIP P10 High Nit LED</span>
</div>
<div class="mt-1">
<span class="text-outline block text-[11px]">Durasi Operasional</span>
<span class="font-semibold text-on-surface">06:00 - 24:00 WIB (18 Jam)</span>
</div>
<div class="mt-1">
<span class="text-outline block text-[11px]">Slot Loop</span>
<span class="font-semibold text-on-surface">15 Detik / Loop 3 Menit</span>
</div>
</div>
<!-- Card Actions -->
<div class="mt-auto pt-space-xs flex items-center gap-space-sm">
<a class="flex-1 h-10 inline-flex items-center justify-center gap-space-xs rounded-lg bg-secondary text-on-secondary hover:bg-secondary-container font-label-md text-label-md transition-colors" href="https://wa.me/6281288997700?text=Halo%20Biantara%20Media,%20saya%20tertarik%20flier%20dan%20rate%20card%20titik%20BG_JKT_GATSU_01" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[18px]">chat</span>
<span>Tanya Ketersediaan</span>
</a>
<button class="h-10 px-space-md inline-flex items-center justify-center gap-space-xs rounded-lg bg-surface-container hover:bg-surface-variant text-on-surface font-label-md text-label-md transition-colors" onclick="alert('Flier spesifikasi titik BG_JKT_GATSU_01 siap diunduh. Menghubungi sales WhatsApp untuk dokumen PDF lengkap.'); window.open('https://wa.me/6281288997700?text=Kirimkan%20PDF%20Flier%20BG_JKT_GATSU_01', '_blank');" title="Lihat Flier Spesifikasi">
<span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
<span class="hidden sm:inline">Flier</span>
</button>
</div>
</div>
</div>
<!-- CARD 2: Surabaya Darmo Billboard Frontlight -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-md flex flex-col hover:shadow-xl transition-all">
<div class="relative aspect-video w-full overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Papan reklame billboard frontlight horizontal raksasa yang berdiri kokoh di persimpangan jalan protokol Raya Darmo Surabaya Jawa Timur di siang hari yang cerah dengan pepohonan hijau kota, kendaraan sepeda motor dan mobil melintas ramai, visual iklan billboard kontras dan bersih." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQhXMRmidkkkXrFLq7qfb0LRgT8j9GgJZyi4gV0iJgcNIkylegS5pW85BiJPHstOZCyayWzTxyNLIWfbV63mbIBEqdsDDGpvK8aiGXSwq0tZZ_xODSQCm87-jMY8vu7rPLxvr34gzMo2rb5mOjVI_7h4LLabU4xs_JINtkxn_9BTXcCffNidg7tGfeATeNfU-UJQXDCA7Pa5jOJdoY98cqr7HQ8QueLKYFXedmFPVndwmE9xrWB7OuJw"/>
<div class="absolute top-3 left-3 flex gap-space-xs">
<span class="px-space-sm py-1 rounded bg-surface-variant text-secondary font-label-sm text-label-sm font-bold shadow">
                Billboard Frontlight
              </span>
<span class="px-space-sm py-1 rounded bg-emerald-600 text-on-secondary font-label-sm text-label-sm font-semibold flex items-center gap-1 shadow">
<span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span> Tersedia
              </span>
</div>
<div class="absolute bottom-3 right-3 px-space-sm py-0.5 rounded bg-on-surface/80 backdrop-blur text-on-primary font-label-sm text-label-sm">
              145.000+ Kendaraan/Hari
            </div>
</div>
<div class="p-space-lg flex flex-col flex-1 gap-space-md">
<div>
<div class="font-label-sm text-label-sm text-secondary font-bold tracking-wider">KODE: BG_SBY_DARMO_04</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mt-0.5">Jl. Raya Darmo, Surabaya</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Simpang strategis pusat kota Surabaya arah Wonokromo dan Basuki Rahmat. Sangat prestisius.</p>
</div>
<!-- Specs Grid -->
<div class="grid grid-cols-2 gap-space-xs p-space-sm rounded-lg bg-surface-container-low font-body-sm text-body-sm">
<div>
<span class="text-outline block text-[11px]">Dimensi Reklame</span>
<span class="font-semibold text-on-surface">6m (T) x 12m (L)</span>
</div>
<div>
<span class="text-outline block text-[11px]">Sistem Lampu</span>
<span class="font-semibold text-on-surface">Frontlight 400W x 4 Titik</span>
</div>
<div class="mt-1">
<span class="text-outline block text-[11px]">Arah Hadap</span>
<span class="font-semibold text-on-surface">2 Muka (Horizontal)</span>
</div>
<div class="mt-1">
<span class="text-outline block text-[11px]">Jarak Pandang</span>
<span class="font-semibold text-on-surface">200m Jelas Terbaca</span>
</div>
</div>
<!-- Card Actions -->
<div class="mt-auto pt-space-xs flex items-center gap-space-sm">
<a class="flex-1 h-10 inline-flex items-center justify-center gap-space-xs rounded-lg bg-secondary text-on-secondary hover:bg-secondary-container font-label-md text-label-md transition-colors" href="https://wa.me/6281288997700?text=Halo%20Biantara%20Media,%20saya%20tertarik%20flier%20dan%20rate%20card%20titik%20BG_SBY_DARMO_04" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[18px]">chat</span>
<span>Tanya Ketersediaan</span>
</a>
<button class="h-10 px-space-md inline-flex items-center justify-center gap-space-xs rounded-lg bg-surface-container hover:bg-surface-variant text-on-surface font-label-md text-label-md transition-colors" onclick="alert('Flier spesifikasi titik BG_SBY_DARMO_04 siap diunduh. Menghubungi sales WhatsApp untuk dokumen PDF lengkap.'); window.open('https://wa.me/6281288997700?text=Kirimkan%20PDF%20Flier%20BG_SBY_DARMO_04', '_blank');" title="Lihat Flier Spesifikasi">
<span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
<span class="hidden sm:inline">Flier</span>
</button>
</div>
</div>
</div>
<!-- CARD 3: Jambi Sipin Frontlight Billboard -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-md flex flex-col hover:shadow-xl transition-all">
<div class="relative aspect-video w-full overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Sebuah billboard OOH vertikal horizontal besar di bundaran persimpangan utama Simpang Sipin Jalan Kolonel Abunjani Kota Jambi Sumatera dengan ruko pertokoan ramai, lalu lintas sore hari yang padat, sorot lampu frontlight menyinari papan iklan dengan terang." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCB5YV8WzumOLCiTDJEi-CN9JBd0YVYazaI7jmZHRK6FyGI47RpooTU_n29I9C3mDhDpVdI7uczqWyUiRKlZ4xQNKT-3K_MlyPY5um5aV2l0GqdDDzuMrlI8KIdcA_l5fIEOmoEtSoZDH-kE3quIqxFRmPImym--trPDv3t_JK_f3cBQ4d_qu0JIUFfZtY4rSbJ9etliyb4SyGUlOv_TqSXVVorzGL_GXdhAqlo8IntvMqVXFu9XDtY9A"/>
<div class="absolute top-3 left-3 flex gap-space-xs">
<span class="px-space-sm py-1 rounded bg-surface-variant text-secondary font-label-sm text-label-sm font-bold shadow">
                Billboard Frontlight
              </span>
<span class="px-space-sm py-1 rounded bg-emerald-600 text-on-secondary font-label-sm text-label-sm font-semibold flex items-center gap-1 shadow">
<span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span> Tersedia
              </span>
</div>
<div class="absolute bottom-3 right-3 px-space-sm py-0.5 rounded bg-on-surface/80 backdrop-blur text-on-primary font-label-sm text-label-sm">
              95.000+ Kendaraan/Hari
            </div>
</div>
<div class="p-space-lg flex flex-col flex-1 gap-space-md">
<div>
<div class="font-label-sm text-label-sm text-secondary font-bold tracking-wider">KODE: BG_JAMBI_SIPIN_01</div>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mt-0.5">Simpang Sipin Jl. Kol. Abunjani, Jambi</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Jantung distrik perdagangan, retail, dan perbankan Kota Jambi. Dominasi visual di persimpangan lampu merah.</p>
</div>
<!-- Specs Grid -->
<div class="grid grid-cols-2 gap-space-xs p-space-sm rounded-lg bg-surface-container-low font-body-sm text-body-sm">
<div>
<span class="text-outline block text-[11px]">Dimensi Reklame</span>
<span class="font-semibold text-on-surface">4m (T) x 8m (L)</span>
</div>
<div>
<span class="text-outline block text-[11px]">Sistem Lampu</span>
<span class="font-semibold text-on-surface">Frontlight LED 250W x 3</span>
</div>
<div class="mt-1">
<span class="text-outline block text-[11px]">Target Audience</span>
<span class="font-semibold text-on-surface">Keluarga, Eksekutif &amp; Komersil</span>
</div>
<div class="mt-1">
<span class="text-outline block text-[11px]">Perizinan</span>
<span class="font-semibold text-on-surface">Izin Pemda Resmi Aktif</span>
</div>
</div>
<!-- Card Actions -->
<div class="mt-auto pt-space-xs flex items-center gap-space-sm">
<a class="flex-1 h-10 inline-flex items-center justify-center gap-space-xs rounded-lg bg-secondary text-on-secondary hover:bg-secondary-container font-label-md text-label-md transition-colors" href="https://wa.me/6281288997700?text=Halo%20Biantara%20Media,%20saya%20tertarik%20flier%20dan%20rate%20card%20titik%20BG_JAMBI_SIPIN_01" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[18px]">chat</span>
<span>Tanya Ketersediaan</span>
</a>
<button class="h-10 px-space-md inline-flex items-center justify-center gap-space-xs rounded-lg bg-surface-container hover:bg-surface-variant text-on-surface font-label-md text-label-md transition-colors" onclick="alert('Flier spesifikasi titik BG_JAMBI_SIPIN_01 siap diunduh. Menghubungi sales WhatsApp untuk dokumen PDF lengkap.'); window.open('https://wa.me/6281288997700?text=Kirimkan%20PDF%20Flier%20BG_JAMBI_SIPIN_01', '_blank');" title="Lihat Flier Spesifikasi">
<span class="material-symbols-outlined text-[18px]">picture_as_pdf</span>
<span class="hidden sm:inline">Flier</span>
</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- COVERAGE AREA INDONESIA: MAP & REGIONAL BREAKDOWN -->
<section class="w-full py-space-xl bg-surface">
<div class="w-full px-margin mx-auto max-w-7xl flex flex-col gap-space-lg">
<div class="flex flex-col gap-space-xs text-center max-w-3xl mx-auto">
<span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">Jangkauan Geografis</span>
<h2 class="font-headline-xl text-headline-xl text-on-surface font-bold">Cakupan Titik OOH Nasional di 3 Wilayah Utama</h2>
<p class="font-body-md text-body-md text-on-surface-variant">
          Didukung jaringan tim lapangan lokal dan perwakilan operasional di pulau-pulau besar Indonesia untuk memastikan kampanye serentak berjalan tepat waktu.
        </p>
</div>
<!-- Interactive Map Presentation Box -->
<div class="relative w-full rounded-2xl overflow-hidden bg-surface-container-highest p-space-md md:p-space-lg shadow-sm">
<div class="w-full h-80 md:h-96 rounded-xl bg-cover bg-center relative overflow-hidden flex items-center justify-center shadow-inner" data-location="Indonesia" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDuPlwAcOB8EwYBXJoImj6ingQ9hV04ACqKu1samcOqisyunFgoCNpVeUZfhNOb7xRV05OSCj-8MWwoy7fD12EMwQpVVzEmiRi-4fo1h5kx4kRvGn2ZvrQnRCOKt5J5c6xU1hecATybwg6oSYE6HQpMOISg2zmHbVSV8fk_uC8AEhYVRM0fShSEssXtSQuXPgErL-7XoKurDk2tvYvMbbRQfFUODjEqcbWxVOlx1_D2XQAbPbHz7eusGg');">
<!-- Ambient Overlay -->
<div class="absolute inset-0 bg-primary-container/30 backdrop-blur-[1px]"></div>
<!-- Interactive Map Pin Badges -->
<div class="relative z-10 w-full h-full p-4 flex flex-col justify-between">
<div class="flex justify-between items-start">
<div class="px-space-md py-space-xs rounded-lg bg-surface-container-lowest/90 backdrop-blur font-label-md text-label-md text-on-surface shadow">
                Peta Kerapatan Media OOH Biantara Gemilang
              </div>
<div class="flex items-center gap-space-xs px-space-sm py-1 rounded bg-secondary text-on-secondary font-label-sm text-label-sm shadow">
<span class="material-symbols-outlined text-[16px]">radar</span>
<span>Live Monitoring Active</span>
</div>
</div>
<!-- Visual Pin Overlays on Strategic Points -->
<div class="grid grid-cols-3 md:grid-cols-4 gap-2 max-w-xl mx-auto text-center">
<div class="bg-surface-container-lowest/95 p-2 rounded-lg shadow-md">
<span class="font-label-md text-label-md text-secondary font-bold block">Sumatera</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">210+ Titik Billboard</span>
</div>
<div class="bg-surface-container-lowest/95 p-2 rounded-lg shadow-md">
<span class="font-label-md text-label-md text-secondary font-bold block">Jawa &amp; Bali</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">450+ Titik Strategis</span>
</div>
<div class="bg-surface-container-lowest/95 p-2 rounded-lg shadow-md">
<span class="font-label-md text-label-md text-secondary font-bold block">Kalimantan</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">85+ Titik Arterial</span>
</div>
<div class="hidden md:block bg-surface-container-lowest/95 p-2 rounded-lg shadow-md">
<span class="font-label-md text-label-md text-secondary font-bold block">Sulawesi</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">75+ Titik Komersial</span>
</div>
</div>
<div class="text-right">
<span class="font-label-sm text-label-sm text-on-secondary bg-primary/70 px-space-sm py-1 rounded backdrop-blur">
                *Data terverifikasi kuartal berjalan 2025
              </span>
</div>
</div>
</div>
<!-- Regional Breakdown Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mt-space-md">
<!-- Region 1: Sumatera -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-secondary font-headline-sm text-headline-sm font-bold">
<span class="material-symbols-outlined text-[24px]">explore</span>
              Sumatera Coverage
            </div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Koneksi jalur Lintas Sumatera, bandara, serta pusat kota metropolitan di wilayah barat:
            </p>
<div class="flex flex-wrap gap-1.5 pt-space-xs">
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Medan</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Kota Jambi</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Pekanbaru</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Palembang</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Bandar Lampung</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Batam</span>
</div>
</div>
<!-- Region 2: Jawa & Bali -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-secondary font-headline-sm text-headline-sm font-bold">
<span class="material-symbols-outlined text-[24px]">domain</span>
              Jawa &amp; Bali Core
            </div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Sentra ekonomi utama, jalan protokol ring 1, dan koridor tol trans jawa dengan kepadatan tinggi:
            </p>
<div class="flex flex-wrap gap-1.5 pt-space-xs">
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">DKI Jakarta</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Bandung</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Semarang</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Yogyakarta</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Surabaya</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Denpasar</span>
</div>
</div>
<!-- Region 3: Kalimantan & Sulawesi -->
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-secondary font-headline-sm text-headline-sm font-bold">
<span class="material-symbols-outlined text-[24px]">hub</span>
              Kalimantan &amp; Sulawesi
            </div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Pusat pertumbuhan industri energi, pertambangan, dan hub logistik gerbang Indonesia Timur:
            </p>
<div class="flex flex-wrap gap-1.5 pt-space-xs">
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Balikpapan</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Samarinda</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Banjarmasin</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Makassar</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">Manado</span>
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm">IKN Corridor</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- CTA BANNER & QUICK INQUIRY SECTION -->
<section class="w-full py-space-xl bg-surface-container-lowest">
<div class="w-full px-margin mx-auto max-w-7xl">
<div class="rounded-2xl bg-gradient-to-r from-primary-container via-surface-tint to-secondary-container p-space-lg md:p-space-xl text-on-primary flex flex-col lg:flex-row items-center justify-between gap-space-lg shadow-xl">
<div class="flex flex-col gap-space-sm max-w-2xl">
<span class="inline-flex items-center gap-space-xs px-space-sm py-1 rounded bg-on-primary/20 backdrop-blur font-label-sm text-label-sm uppercase tracking-wider text-on-primary w-fit">
            Konsultasi Media Plan Bebas Biaya
          </span>
<h2 class="font-headline-xl text-headline-xl text-on-primary font-bold">
            Siap Meluncurkan Campaign Iklan Luar Ruang Anda?
          </h2>
<p class="font-body-md text-body-md text-on-primary/90 leading-relaxed">
            Konsultasikan kebutuhan titik, rencana rute terintegrasi, dan dapatkan flier penawaran terbaik dari Account Executive kami dalam waktu singkat.
          </p>
</div>
<div class="flex flex-col sm:flex-row items-center gap-space-md w-full lg:w-auto">
<a class="w-full sm:w-auto h-12 px-space-lg inline-flex items-center justify-center gap-space-sm rounded-lg bg-surface-container-lowest text-secondary hover:bg-surface-container font-label-lg text-label-lg transition-all shadow-md" href="https://wa.me/6281288997700?text=Halo%20PT%20Biantara%20Gemilang%20Media,%20saya%20ingin%20konsultasi%20titik%20OOH%20dan%20penawaran%20rate%20card." rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[20px] text-emerald-600">chat</span>
<span>Konsultasi WhatsApp Sekarang</span>
</a>
<button class="w-full sm:w-auto h-12 px-space-lg inline-flex items-center justify-center gap-space-sm rounded-lg bg-on-primary/10 hover:bg-on-primary/20 text-on-primary font-label-lg text-label-lg backdrop-blur transition-all border-none" onclick="window.open('https://wa.me/6281288997700?text=Halo,%20mohon%20kirimkan%20dokumen%20Company%20Profile%20dan%20Katalog%20OOH%20Biantara%20Media%20(PDF)', '_blank');">
<span class="material-symbols-outlined text-[20px]">download</span>
<span>Unduh Company Profile (PDF)</span>
</button>
</div>
</div>
</div>
</section>
</div>
@endsection
