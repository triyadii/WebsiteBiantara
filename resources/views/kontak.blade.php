@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">
<!-- Top Decorative Hero Header (No generic duplication, spatial editorial typography) -->
<section class="relative w-full overflow-hidden bg-surface-container-lowest px-margin-mobile md:px-margin py-space-xl">
<!-- Ambient Structural Background Accents -->
<div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-secondary/5 blur-3xl pointer-events-none"></div>
<div class="absolute -bottom-20 left-1/3 w-80 h-80 rounded-full bg-surface-variant/40 blur-2xl pointer-events-none"></div>
<div class="relative max-w-7xl mx-auto flex flex-col gap-space-lg">
<div class="flex flex-wrap items-center justify-between gap-space-md">
<!-- Rapid Response Badge -->
<div class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-surface-container text-secondary font-label-md text-label-md">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-secondary"></span>
</span>
<span>LAYANAN RESPON CEPAT &lt; 15 MENIT</span>
<span class="text-outline-variant">|</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">SLA Garansi Tim Business Development</span>
</div>
<div class="flex items-center gap-space-sm font-label-sm text-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-[16px] text-secondary">verified_user</span>
<span>Sertifikasi Standar Layanan OOH ISO 9001:2015</span>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
<div class="lg:col-span-8 flex flex-col gap-space-sm">
<span class="font-label-lg text-label-lg text-secondary uppercase tracking-widest">Pusat Komunikasi &amp; Pengadaan Media</span>
<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight max-w-3xl">
            Hubungi Tim Media Planner PT Biantara Gemilang Media
          </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-3xl leading-relaxed">
            Siap melayani konsultasi ketersediaan titik OOH, estimasi biaya rate card resmi, negosiasi durasi tayang, serta survei teknis konstruksi lokasi strategis di seluruh penjuru Indonesia.
          </p>
</div>
<!-- Metric Callout -->
<div class="lg:col-span-4 flex flex-col p-space-md bg-surface-container-low rounded-xl shadow-sm">
<div class="flex items-baseline justify-between mb-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant">Rata-rata Waktu Respons</span>
<span class="font-headline-sm text-headline-sm text-secondary font-bold">7.4 Menit</span>
</div>
<!-- Inline Sparkline / Activity Bar (Native SVG) -->
<div class="w-full h-3 bg-surface-container rounded-full overflow-hidden relative">
<div class="h-full bg-secondary rounded-full transition-all duration-700" style="width: 88%"></div>
</div>
<div class="flex justify-between items-center mt-2 font-label-sm text-label-sm text-on-surface-variant">
<span>Standar SLA: 15 Menit</span>
<span class="text-emerald-600 font-semibold">98.6% On-Target</span>
</div>
</div>
</div>
</div>
</section>
<!-- 4 Quick Direct Communication Cards -->
<section class="w-full px-margin-mobile md:px-margin py-space-lg bg-surface">
<div class="max-w-7xl mx-auto">
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-space-md">
<!-- Card 1: WhatsApp Sales -->
<div class="group relative bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between overflow-hidden">
<div class="absolute top-0 right-0 w-24 h-24 bg-secondary/5 rounded-bl-full pointer-events-none transition-transform group-hover:scale-110"></div>
<div>
<div class="flex items-center justify-between mb-space-md">
<div class="w-12 h-12 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">chat</span>
</div>
<span class="px-2 py-1 bg-emerald-100/70 text-emerald-800 font-label-sm text-label-sm rounded">Fast Response</span>
</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">WhatsApp Tim Sales &amp; Rate Card</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Respon hitungan menit. Dapatkan flier foto titik, koordinat presisi, traffic reach bulanan, dan rate card resmi format PDF langsung ke ponsel Anda.
            </p>
</div>
<div class="pt-space-sm">
<div class="font-headline-sm text-headline-sm text-on-surface mb-space-sm font-bold tracking-tight">
              +62 812-8899-7700
            </div>
<a class="w-full inline-flex items-center justify-center gap-space-xs px-space-md py-2.5 bg-secondary hover:bg-secondary-container text-on-secondary rounded-lg font-label-lg text-label-lg transition-colors shadow-sm" href="https://wa.me/6281288997700?text=Halo%20Tim%20Sales%20Biantara%20Media,%20mohon%20kirimkan%20katalog%20dan%20rate%20card%20titik%20OOH." rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[18px]">send</span>
<span>Chat WhatsApp Sekarang</span>
</a>
</div>
</div>
<!-- Card 2: Jakarta Headquarters Hotline -->
<div class="group relative bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between overflow-hidden">
<div class="absolute top-0 right-0 w-24 h-24 bg-surface-container-high/40 rounded-bl-full pointer-events-none transition-transform group-hover:scale-110"></div>
<div>
<div class="flex items-center justify-between mb-space-md">
<div class="w-12 h-12 rounded-lg bg-surface-container text-secondary flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">call</span>
</div>
<span class="px-2 py-1 bg-surface-container text-on-surface-variant font-label-sm text-label-sm rounded">Kantor Pusat</span>
</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Hotline Kantor Pusat Jakarta</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Saluran telepon korporat hunting untuk penawaran media plan multi-provinsi, agensi media buyer, tender institusi, dan administrasi kontrak formal.
            </p>
</div>
<div class="pt-space-sm">
<div class="font-headline-sm text-headline-sm text-on-surface mb-space-xs font-bold tracking-tight">
              (021) 5299-8800
            </div>
<span class="block font-label-sm text-label-sm text-on-surface-variant mb-space-sm">Senin - Jumat (08.30 - 17.30 WIB)</span>
<a class="w-full inline-flex items-center justify-center gap-space-xs px-space-md py-2.5 bg-surface-container hover:bg-surface-container-high text-on-surface rounded-lg font-label-lg text-label-lg transition-colors" href="tel:02152998800">
<span class="material-symbols-outlined text-[18px]">phone_in_talk</span>
<span>Hubungi Hunting Telepon</span>
</a>
</div>
</div>
<!-- Card 3: Media Planning Email -->
<div class="group relative bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between overflow-hidden">
<div class="absolute top-0 right-0 w-24 h-24 bg-secondary/5 rounded-bl-full pointer-events-none transition-transform group-hover:scale-110"></div>
<div>
<div class="flex items-center justify-between mb-space-md">
<div class="w-12 h-12 rounded-lg bg-blue-50 text-secondary flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">mail</span>
</div>
<span class="px-2 py-1 bg-blue-100 text-secondary font-label-sm text-label-sm rounded">Official Inbox</span>
</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Email Resmi Media Planning</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Pengiriman RFQ resmi, dokumen RFP kampanye nasional, brief materi promosi, serta penawaran kolaborasi jangka panjang.
            </p>
</div>
<div class="pt-space-sm">
<div class="flex flex-col gap-1 mb-space-sm">
<span class="font-label-md text-label-md text-secondary break-all">sales@biantaragemilang.co.id</span>
<span class="font-label-sm text-label-sm text-on-surface-variant break-all">inquiry@biantaragemilang.co.id</span>
</div>
<a class="w-full inline-flex items-center justify-center gap-space-xs px-space-md py-2.5 bg-surface-container hover:bg-surface-container-high text-on-surface rounded-lg font-label-lg text-label-lg transition-colors" href="mailto:sales@biantaragemilang.co.id?subject=Inquiry%20Kebutuhan%20Titik%20OOH">
<span class="material-symbols-outlined text-[18px]">outgoing_mail</span>
<span>Kirim Email Penawaran</span>
</a>
</div>
</div>
<!-- Card 4: Technical & Emergency 24/7 -->
<div class="group relative bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between overflow-hidden">
<div class="absolute top-0 right-0 w-24 h-24 bg-amber-500/10 rounded-bl-full pointer-events-none transition-transform group-hover:scale-110"></div>
<div>
<div class="flex items-center justify-between mb-space-md">
<div class="w-12 h-12 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center">
<span class="material-symbols-outlined text-[24px]">bolt</span>
</div>
<span class="px-2 py-1 bg-amber-100 text-amber-900 font-label-sm text-label-sm rounded">Siaga Lapangan</span>
</div>
<h2 class="font-headline-sm text-headline-sm text-on-surface mb-space-xs">Layanan Kendala &amp; Lampu 24 Jam</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Laporan darurat kerusakan panel videotron, modul LED mati, gangguan kelistrikan PLN, kendala timer spotlight, maupun robekan visual cetak.
            </p>
</div>
<div class="pt-space-sm">
<div class="font-headline-sm text-headline-sm text-on-surface mb-space-xs font-bold tracking-tight">
              +62 811-9988-247
            </div>
<span class="block font-label-sm text-label-sm text-amber-700 font-semibold mb-space-sm">Teknisi Standby 24 Jam / 7 Hari</span>
<a class="w-full inline-flex items-center justify-center gap-space-xs px-space-md py-2.5 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-label-lg text-label-lg transition-colors" href="tel:08119988247">
<span class="material-symbols-outlined text-[18px]">build</span>
<span>Hotline Tim Lapangan</span>
</a>
</div>
</div>
</div>
</div>
</section>
<!-- Interactive Form & Precise Map Section -->
<section class="w-full px-margin-mobile md:px-margin py-space-xl bg-surface-container-low">
<div class="max-w-7xl mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl">
<!-- Left Column: Official RFP / Inquiry Form -->
<div class="lg:col-span-7 bg-surface-container-lowest p-space-xl rounded-xl shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center gap-space-xs mb-space-xs">
<span class="material-symbols-outlined text-secondary text-[20px]">assignment</span>
<span class="font-label-md text-label-md text-secondary uppercase tracking-wider">Formulir Pengadaan Media</span>
</div>
<h3 class="font-headline-lg text-headline-lg text-on-surface mb-space-xs">
              Pengajuan Permintaan Titik &amp; Penawaran Resmi
            </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-lg">
              Isi data kampanye Anda. Tim Media Planner akan memetakan rekomendasi titik strategis berserta analisis lalu lintas (daily traffic impressions) dalam 15 menit kerja.
            </p>
<form class="flex flex-col gap-space-md" id="oohInquiryForm" onsubmit="event.preventDefault(); submitInquiryForm();">
<!-- Row 1: Name & Role -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface" for="fullName">Nama Lengkap &amp; Gelar <span class="text-error">*</span></label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-[18px] text-outline">person</span>
<input class="w-full pl-10 pr-3 py-2 bg-surface-container-low rounded-lg font-body-sm text-body-sm text-on-surface focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary transition-all" id="fullName" placeholder="Contoh: Raden Surya, S.Kom." required="" type="text"/>
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface" for="companyName">Nama Perusahaan / Brand / Agensi <span class="text-error">*</span></label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-[18px] text-outline">apartment</span>
<input class="w-full pl-10 pr-3 py-2 bg-surface-container-low rounded-lg font-body-sm text-body-sm text-on-surface focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary transition-all" id="companyName" placeholder="Contoh: PT FMCG Bersama Nusantara" required="" type="text"/>
</div>
</div>
</div>
<!-- Row 2: WhatsApp & Corporate Email -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface" for="waNumber">Nomor WhatsApp Aktif <span class="text-error">*</span></label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-[18px] text-outline">phone_iphone</span>
<input class="w-full pl-10 pr-3 py-2 bg-surface-container-low rounded-lg font-body-sm text-body-sm text-on-surface focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary transition-all" id="waNumber" placeholder="0812xxxxxxx (untuk kirim flier titik)" required="" type="tel"/>
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface" for="workEmail">Email Perusahaan <span class="text-error">*</span></label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-[18px] text-outline">alternate_email</span>
<input class="w-full pl-10 pr-3 py-2 bg-surface-container-low rounded-lg font-body-sm text-body-sm text-on-surface focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary transition-all" id="workEmail" placeholder="name@company.co.id" required="" type="email"/>
</div>
</div>
</div>
<!-- Row 3: Target Region & Media Format -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface" for="targetRegion">Wilayah Target Penayangan <span class="text-error">*</span></label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-[18px] text-outline">pin_drop</span>
<select class="w-full pl-10 pr-8 py-2 bg-surface-container-low rounded-lg font-body-sm text-body-sm text-on-surface focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary transition-all appearance-none cursor-pointer" id="targetRegion" required="">
<option disabled="" selected="" value="">Pilih Wilayah OOH</option>
<option value="jabodetabek">Jabodetabek (Sudirman, Thamrin, Gatot Subroto, Tol Luar)</option>
<option value="sumatera">Sumatera (Medan, Jambi, Palembang, Pekanbaru, Lampung)</option>
<option value="jawa-timur">Jawa Timur (Surabaya, Malang, Sidoarjo, Pantura)</option>
<option value="jawa-barat-tengah">Jawa Barat &amp; Tengah (Bandung, Semarang, Solo, Yogya)</option>
<option value="bali-nusa">Bali &amp; Nusa Tenggara (Denpasar, Kuta, Bypass Ngurah Rai)</option>
<option value="kalimantan-sulawesi">Kalimantan &amp; Sulawesi (Makassar, Balikpapan, Samarinda, IKN)</option>
<option value="multi-provinsi">Multi-Provinsi / Kampanye Nasional Skala Penuh</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-2.5 text-[18px] text-outline pointer-events-none">expand_more</span>
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface" for="mediaType">Jenis Media Reklame <span class="text-error">*</span></label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-2.5 text-[18px] text-outline">view_quilt</span>
<select class="w-full pl-10 pr-8 py-2 bg-surface-container-low rounded-lg font-body-sm text-body-sm text-on-surface focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary transition-all appearance-none cursor-pointer" id="mediaType" required="">
<option disabled="" selected="" value="">Pilih Format Media</option>
<option value="videotron-dooh">Videotron Digital DOOH (Layar LED Resolusi Tinggi)</option>
<option value="billboard-statis">Billboard Statis &amp; Baliho (Frontlight / Backlight)</option>
<option value="jpo-bando">JPO &amp; Bando Jalan Strategis Tol / Arteri</option>
<option value="megatron-landmark">Megatron / Giant Curved Screen Landmark</option>
<option value="konsultasi">Konsultasi Terbuka (Rekomendasi Tim Biantara)</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-2.5 text-[18px] text-outline pointer-events-none">expand_more</span>
</div>
</div>
</div>
<!-- Row 4: Duration Plan -->
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface">Estimasi Rencana Durasi Tayang <span class="text-error">*</span></label>
<div class="grid grid-cols-2 sm:grid-cols-4 gap-space-xs">
<label class="flex items-center gap-2 p-2.5 rounded-lg bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
<input checked="" class="text-secondary focus:ring-secondary" name="duration" type="radio" value="1_bulan"/>
<span class="font-body-sm text-body-sm text-on-surface font-medium">1 Bulan</span>
</label>
<label class="flex items-center gap-2 p-2.5 rounded-lg bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
<input class="text-secondary focus:ring-secondary" name="duration" type="radio" value="3_bulan"/>
<span class="font-body-sm text-body-sm text-on-surface font-medium">3 Bulan</span>
</label>
<label class="flex items-center gap-2 p-2.5 rounded-lg bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
<input class="text-secondary focus:ring-secondary" name="duration" type="radio" value="6_bulan"/>
<span class="font-body-sm text-body-sm text-on-surface font-medium">6 Bulan</span>
</label>
<label class="flex items-center gap-2 p-2.5 rounded-lg bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
<input class="text-secondary focus:ring-secondary" name="duration" type="radio" value="1_tahun_plus"/>
<span class="font-body-sm text-body-sm text-on-surface font-medium">1 Tahun+ (Prioritas)</span>
</label>
</div>
</div>
<!-- Additional Notes -->
<div class="flex flex-col gap-1">
<label class="font-label-md text-label-md text-on-surface" for="extraNotes">Area Catatan / Preferensi Khusus Titik</label>
<textarea class="w-full p-3 bg-surface-container-low rounded-lg font-body-sm text-body-sm text-on-surface focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary transition-all" id="extraNotes" placeholder="Sebutkan persimpangan jalan incaran, target demografi konsumen, kebutuhan cetak flexi, atau loop sharing videotron yang diinginkan..." rows="3"></textarea>
</div>
<!-- Agreement Checkbox -->
<label class="flex items-start gap-space-xs cursor-pointer select-none">
<input class="mt-1 rounded text-secondary focus:ring-secondary" required="" type="checkbox"/>
<span class="font-body-sm text-body-sm text-on-surface-variant">
                  Saya menyetujui dihubungi oleh Tim Account Executive PT Biantara Gemilang Media melalui WhatsApp/Email resmi untuk pembahasan proposal dan ketersediaan lokasi.
                </span>
</label>
<!-- Submit & Microcopy -->
<div class="flex flex-col gap-space-xs pt-space-xs">
<button class="w-full flex items-center justify-center gap-space-xs py-3.5 bg-secondary hover:bg-secondary-container text-on-secondary rounded-lg font-label-lg text-label-lg transition-all shadow-sm" type="submit">
<span class="material-symbols-outlined text-[20px]">send_time_extension</span>
<span>Kirim Permintaan Penawaran &amp; Cek Ketersediaan</span>
</button>
<div class="flex items-center justify-center gap-space-xs text-center font-label-sm text-label-sm text-on-surface-variant">
<span class="material-symbols-outlined text-[16px] text-emerald-600">lock</span>
<span>Kerahasiaan data rate card dan brief brand Anda dijamin terlindungi (NDA Compliant).</span>
</div>
</div>
<!-- Feedback Banner (Hidden by default, shown via JS) -->
<div class="hidden p-space-md bg-emerald-50 text-emerald-900 rounded-lg flex items-center gap-space-sm" id="formSuccessMessage">
<span class="material-symbols-outlined text-emerald-600">check_circle</span>
<span class="font-body-sm text-body-sm">Terima kasih! Permintaan Anda telah diterima. Media Planner kami sedang menyiapkan PDF ketersediaan titik dan rate card untuk Anda.</span>
</div>
</form>
</div>
</div>
<!-- Right Column: Precision HQ Map & Visit Information -->
<div class="lg:col-span-5 flex flex-col gap-space-lg">
<!-- HQ Location Map Viewport -->
<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<div>
<span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-wider">KANTOR PUSAT KORPORAT</span>
<h4 class="font-headline-sm text-headline-sm text-on-surface">SCBD Tower - Jakarta Selatan</h4>
</div>
<span class="px-2.5 py-1 bg-surface-container text-secondary font-label-sm text-label-sm rounded-full flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                Open for Guest
              </span>
</div>
<!-- Precision Interactive Google Maps Component via App Protocol -->
<div class="relative w-full h-72 rounded-lg overflow-hidden shadow-inner">
<div class="w-full h-full bg-cover bg-center" data-alt="Aerial architectural top-down map render of Sudirman Central Business District Jakarta surrounded by modern glass corporate skyscrapers, lush green avenues, and technical map GPS pin overlay showing Biantara Gemilang Media Headquarters" data-location="SCBD, Jl. Jend. Sudirman Kav 52-53, Jakarta Selatan" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCMbnUD5pnGcddlsOktwCNAmB8X9qQ2RHdu6GVzhYWkJgs4zKu2cvm7xBMa8qJQ6GIgJtggarH7kSzbd_FHrbOJN7QzNhezDnP5umJYnHC4zKmd3W6eWrqWJGXyCzdCoE9i3PSOyckajgFWJMIfaIxOVf1TNe9dKQDFDeqOEJYhp5LL-dIqOxpU8GI9dyDoJPhYg91cjXf8OPI0G0Hk_-EtQTvoaUO1xE8cHv4rs_tCBoCabw0GS3lPgw')"></div>
<div class="absolute bottom-3 left-3 right-3 p-space-sm bg-surface-container-lowest/95 backdrop-blur-md rounded-lg shadow-md flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-secondary text-[20px]">location_on</span>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface font-semibold">Wisma SCBD Lt. 8</span>
<span class="font-body-sm text-[11px] text-on-surface-variant">Kav. 52-53, Jakarta Selatan 12190</span>
</div>
</div>
<a class="px-space-sm py-1.5 bg-secondary text-on-secondary hover:bg-secondary-container font-label-sm text-label-sm rounded transition-colors flex items-center gap-1" href="https://maps.google.com/?q=SCBD+Jakarta+Selatan" rel="noopener noreferrer" target="_blank">
<span>Buka Rute</span>
<span class="material-symbols-outlined text-[14px]">open_in_new</span>
</a>
</div>
</div>
<!-- Reception Schedules & Parking -->
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm pt-space-xs font-body-sm text-body-sm text-on-surface-variant">
<div class="p-space-sm bg-surface-container-low rounded-lg">
<span class="font-label-md text-label-md text-on-surface block mb-1 flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">schedule</span>
                  Jam Tamu Kantor
                </span>
<p>Senin - Jumat: 09.00 - 17.00 WIB</p>
<p class="text-[12px] text-outline">Harap konfirmasi H-1 untuk akses lobi gedung.</p>
</div>
<div class="p-space-sm bg-surface-container-low rounded-lg">
<span class="font-label-md text-label-md text-on-surface block mb-1 flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">local_parking</span>
                  Akses Drop-Off &amp; MRT
                </span>
<p>MRT Istora Mandiri (3 Menit)</p>
<p class="text-[12px] text-outline">Tersedia Basement Parking Area B2/B3.</p>
</div>
</div>
</div>
<!-- Direct Escalation Card -->
<div class="bg-surface-container p-space-lg rounded-xl shadow-sm flex items-center gap-space-md">
<div class="w-14 h-14 rounded-full bg-surface-container-lowest flex-shrink-0 flex items-center justify-center text-secondary shadow-sm">
<span class="material-symbols-outlined text-[30px]">support_agent</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-secondary font-bold uppercase">Dedicated Media Director</span>
<span class="font-headline-sm text-headline-sm text-on-surface">Kebutuhan Kampanye Multi-Kota?</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                Jadwalkan presentasi komprehensif atau zoom meeting langsung dengan tim Media Director kami.
              </p>
<a class="mt-space-sm inline-flex items-center gap-1 font-label-md text-label-md text-secondary hover:underline" href="mailto:director@biantaragemilang.co.id?subject=Permintaan%20Meeting%20Kampanye%20OOH%20Nasional">
<span>Undang Pertemuan Online / Offline</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Regional Hubs & Technical Workshop Directory (4 Nationwide Hubs) -->
<section class="w-full px-margin-mobile md:px-margin py-space-xl bg-surface">
<div class="max-w-7xl mx-auto flex flex-col gap-space-lg">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
<div>
<span class="font-label-lg text-label-lg text-secondary uppercase tracking-wider">Jaringan Infrastruktur Nasional</span>
<h3 class="font-headline-xl text-headline-xl text-on-surface tracking-tight mt-1">
            Direktori Hub Operasional &amp; Workshop Teknis
          </h3>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-1">
            Didukung workshop konstruksi baja internal, armada crane hidrolik mandiri, dan teknisi bersertifikat K3 di 4 regional strategis untuk menjamin kecepatan naik tayang materi reklame Anda.
          </p>
</div>
<div class="flex items-center gap-space-sm">
<span class="px-space-md py-space-xs rounded-full bg-surface-container text-on-surface font-label-md text-label-md">
            800+ Titik Terawat Aktif
          </span>
</div>
</div>
<!-- Grid of 4 Hubs -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg">
<!-- Hub 1: Jakarta Central HQ -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
<div>
<div class="w-full h-36 rounded-lg overflow-hidden mb-space-md relative">
<img class="w-full h-full object-cover" data-alt="Modern corporate office lobby in SCBD Jakarta with sleek reception desk, high glass windows overlooking metropolitan traffic, professional lighting with blue tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBj-e36qlyyU_CSEqF6yQXmXY_S08SIaoNQVZMxLLQZ6VH6GN3_vU1QSAWM0x1L35QNEILp5eH8gRTPedSHhKfkR8vEhQykwcbY_Yyot8iaYjbZm627H7TteVrqKceoKo4SvFlZT77Zv7Y1MS__n9-m95OvghHm064zElwVLNljuF6CJNjDKrnfs59jIc8NzVaNG0ke1NF8vzu9eXywT4B1TJFkD0fyStobxK_0L7g4Lm9d37CFcYPR2Q"/>
<span class="absolute top-2 left-2 px-2 py-0.5 bg-on-surface/80 backdrop-blur-sm text-surface-container-lowest font-label-sm text-label-sm rounded">Hub Pusat (Nasional)</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-on-surface mb-1">Kantor Pusat &amp; Business Office Jakarta</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Wisma SCBD Lt. 8, Jl. Jend. Sudirman Kav. 52-53, Senayan, Kebayoran Baru, Jakarta Selatan 12190.
            </p>
<div class="p-space-sm bg-surface-container-low rounded-lg mb-space-md font-body-sm text-body-sm">
<span class="font-label-sm text-label-sm text-secondary block font-bold mb-1">Cakupan Wilayah:</span>
<p class="text-on-surface-variant">Jabodetabek, Serang, Karawang, Cilegon, &amp; Koridor Utama Jalan Tol Trans Jawa.</p>
</div>
</div>
<div class="pt-space-sm font-label-sm text-label-sm">
<div class="flex items-center justify-between text-on-surface-variant py-1">
<span>PIC Koordinator:</span>
<span class="font-semibold text-on-surface">Handoko Prasetyo, S.E.</span>
</div>
<div class="flex items-center justify-between text-on-surface-variant py-1">
<span>Telepon Langsung:</span>
<a class="text-secondary hover:underline font-semibold" href="tel:02152998800">(021) 5299-8800</a>
</div>
<div class="flex items-center justify-between text-on-surface-variant py-1">
<span>Operasional:</span>
<span>08.30 - 17.30 WIB</span>
</div>
</div>
</div>
<!-- Hub 2: Sumatera Regional Hub -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
<div>
<div class="w-full h-36 rounded-lg overflow-hidden mb-space-md relative">
<img class="w-full h-full object-cover" data-alt="Industrial steel fabrication workshop and billboard construction facility in Medan Sumatra with precision welding, outdoor billboard frames, and service trucks" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaGEGWRCG-JbH7ewzuiCU2TxpEsij00aZmuOOclE5wKfPjiV9fWtPdeaJ5Gx0v4tKmcPegiplgGw9fcjKT2JwoV_nkuilOeBqdM7ec9oTI8HIvLewrbBTWFaB8G3UoUaL42Gv1wk_yavWVtS9omDC9nSH1_LJqLFBklnNAOHLUpyQT2p5LpML4Wj-8YJE9Ye9MmrWGE0a5idJRdz_ItuaVXlRZ17WSpjXiCymgNJeGYW_qVnnmrZYcjw"/>
<span class="absolute top-2 left-2 px-2 py-0.5 bg-on-surface/80 backdrop-blur-sm text-surface-container-lowest font-label-sm text-label-sm rounded">Hub Sumatera</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-on-surface mb-1">Regional Hub Sumatera (Medan &amp; Jambi)</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Jl. Balai Kota No. 1, Medan Barat &amp; Workshop Logistik Kawasan Niaga Sultan Thaha, Kota Jambi.
            </p>
<div class="p-space-sm bg-surface-container-low rounded-lg mb-space-md font-body-sm text-body-sm">
<span class="font-label-sm text-label-sm text-secondary block font-bold mb-1">Cakupan Wilayah:</span>
<p class="text-on-surface-variant">Medan, Palembang, Jambi, Pekanbaru, Padang, Lampung, &amp; Banda Aceh.</p>
</div>
</div>
<div class="pt-space-sm font-label-sm text-label-sm">
<div class="flex items-center justify-between text-on-surface-variant py-1">
<span>PIC Koordinator:</span>
<span class="font-semibold text-on-surface">Zulham Arifin</span>
</div>
<div class="flex items-center justify-between text-on-surface-variant py-1">
<span>WhatsApp Hub:</span>
<a class="text-secondary hover:underline font-semibold" href="https://wa.me/6281288997700" target="_blank">+62 813-7022-1940</a>
</div>
<div class="flex items-center justify-between text-on-surface-variant py-1">
<span>Workshop &amp; Cetak:</span>
<span>Siaga 24 Jam</span>
</div>
</div>
</div>
<!-- Hub 3: Jawa Timur & Bali Hub -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
<div>
<div class="w-full h-36 rounded-lg overflow-hidden mb-space-md relative">
<img class="w-full h-full object-cover" data-alt="High quality large format outdoor printer factory in Surabaya printing vibrant flexi vinyl advertising banners alongside technicians inspecting giant LED screen panels" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCWht4FKKTFSonV563aka6iO41KTNPpObaGrp4rweyMWISKz08vHFn2Hd82lU1FSm_E5QKIH--Hb0mFMiqbByGuN9-HmsIsc6J-Jp9Xp_Pgg0sESc1LjYqs6riIm_gYaX5GYDqkfl7uyUr_d-xLosKSMGymg8BlkgG3gjIafA_HpwLlFg-Q_4Lf_wphS_kXIFaxosB0wdbq93TsoWoy_89o89fbjo5c5MR0Pa239S6XZ8_hM86ncswLcg"/>
<span class="absolute top-2 left-2 px-2 py-0.5 bg-on-surface/80 backdrop-blur-sm text-surface-container-lowest font-label-sm text-label-sm rounded">Hub Jawa Timur &amp; Bali</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-on-surface mb-1">Regional Hub Jawa Timur &amp; Bali (Surabaya)</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Jl. Mayjen Sungkono No. 89, Dukuh Pakis, Surabaya &amp; Unit Layanan Bypass Ngurah Rai, Denpasar Bali.
            </p>
<div class="p-space-sm bg-surface-container-low rounded-lg mb-space-md font-body-sm text-body-sm">
<span class="font-label-sm text-label-sm text-secondary block font-bold mb-1">Cakupan Wilayah:</span>
<p class="text-on-surface-variant">Surabaya, Malang Raya, Sidoarjo, Banyuwangi, Denpasar, Badung Bali, &amp; Lombok.</p>
</div>
</div>
<div class="pt-space-sm font-label-sm text-label-sm">
<div class="flex items-center justify-between text-on-surface-variant py-1">
<span>PIC Koordinator:</span>
<span class="font-semibold text-on-surface">Bambang Sugianto, S.T.</span>
</div>
<div class="flex items-center justify-between text-on-surface-variant py-1">
<span>Telepon Kantor:</span>
<a class="text-secondary hover:underline font-semibold" href="tel:0315682100">(031) 568-2100</a>
</div>
<div class="flex items-center justify-between text-on-surface-variant py-1">
<span>Fasilitas Cetak:</span>
<span>Kapasitas 1.500m²/hari</span>
</div>
</div>
</div>
<!-- Hub 4: Indonesia Timur Hub -->
<div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
<div>
<div class="w-full h-36 rounded-lg overflow-hidden mb-space-md relative">
<img class="w-full h-full object-cover" data-alt="Technical operations crane truck assembling large roadside billboard structure in Makassar boulevard avenue with blue sky and coastal Indonesian atmosphere" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUipCi1wIFZfMplTH7PkJfE1BUfL258mxvUOxXjnd9jcV64P_R6cpDec4cq2g7zKALoiA11hE-5TKtcBFVMBOG_1nWJVJzK2GqI93SVDG9Tfhlbg5MOPnMgIxO-TlwnEYZb7pzOVNx2w-zbQfAxNCxS8MPfE9ggBF1tJpejTtj7lFa5B6d52bz_ZVRF63As-AzhZtrJ3SFovIDUwqxoM5KRqzRMqxFBbDXlH4zxsMaosi94q8eD-_btg"/>
<span class="absolute top-2 left-2 px-2 py-0.5 bg-on-surface/80 backdrop-blur-sm text-surface-container-lowest font-label-sm text-label-sm rounded">Hub Indonesia Timur</span>
</div>
<h4 class="font-headline-sm text-headline-sm text-on-surface mb-1">Regional Hub Indonesia Timur (Makassar)</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
              Kawasan Bisnis Boulevard No. 45, Panakkukang, Makassar &amp; Pos Satelit Balikpapan (Koridor IKN).
            </p>
<div class="p-space-sm bg-surface-container-low rounded-lg mb-space-md font-body-sm text-body-sm">
<span class="font-label-sm text-label-sm text-secondary block font-bold mb-1">Cakupan Wilayah:</span>
<p class="text-on-surface-variant">Sulawesi, Balikpapan, Samarinda, Penajam IKN, Manado, Ambon, &amp; Jayapura.</p>
</div>
</div>
<div class="pt-space-sm font-label-sm text-label-sm">
<div class="flex items-center justify-between text-on-surface-variant py-1">
<span>PIC Koordinator:</span>
<span class="font-semibold text-on-surface">Andi Muhammad Ikram</span>
</div>
<div class="flex items-center justify-between text-on-surface-variant py-1">
<span>Hotline Satelit:</span>
<a class="text-secondary hover:underline font-semibold" href="https://wa.me/6281288997700" target="_blank">+62 821-9877-3310</a>
</div>
<div class="flex items-center justify-between text-on-surface-variant py-1">
<span>Operasional:</span>
<span>08.00 - 18.00 WITA</span>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Interactive Accordion FAQ Section -->
<section class="w-full px-margin-mobile md:px-margin py-space-xl bg-surface-container-low">
<div class="max-w-4xl mx-auto flex flex-col gap-space-lg">
<div class="text-center flex flex-col items-center gap-space-xs">
<span class="font-label-lg text-label-lg text-secondary uppercase tracking-wider">Tanya Jawab Pengadaan</span>
<h3 class="font-headline-lg text-headline-lg text-on-surface">
          FAQ Seputar Pemesanan &amp; Penayangan OOH
        </h3>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xl">
          Hal mendasar yang sering dikonsultasikan oleh brand manager dan procurement officer sebelum menerbitkan PO/kontrak sewa reklame.
        </p>
</div>
<div class="flex flex-col gap-space-sm" id="faqAccordion">
<!-- FAQ 1 -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm transition-all">
<button class="w-full p-space-md text-left flex items-center justify-between gap-space-md focus:outline-none" onclick="toggleFaq('faq-1')" type="button">
<span class="font-headline-sm text-headline-sm text-on-surface">
              Berapa lama waktu yang dibutuhkan dari penandatanganan kontrak hingga materi tayang?
            </span>
<span class="material-symbols-outlined text-secondary transition-transform duration-300" id="faq-1-icon">expand_more</span>
</button>
<div class="hidden px-space-md pb-space-md font-body-md text-body-md text-on-surface-variant" id="faq-1-body">
<p>
              Untuk media <strong>Videotron Digital (DOOH)</strong>, materi animasi/video siap tayang dalam waktu <strong>1x24 jam</strong> setelah materi lolos sensor internal (tidak mengandung SARA/pornografi) dan administrasi kontrak disetujui. Untuk <strong>Billboard Cetak Flexi Statis</strong>, proses produksi printing, pengiriman logistik, hingga pemasangan naik konstruksi membutuhkan waktu <strong>3 hingga 5 hari kerja</strong> tergantung lokasi dan kondisi cuaca lapangan.
            </p>
</div>
</div>
<!-- FAQ 2 -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm transition-all">
<button class="w-full p-space-md text-left flex items-center justify-between gap-space-md focus:outline-none" onclick="toggleFaq('faq-2')" type="button">
<span class="font-headline-sm text-headline-sm text-on-surface">
              Apakah biaya sewa sudah mencakup pajak reklame daerah (SIPR) dan listrik penerangan?
            </span>
<span class="material-symbols-outlined text-secondary transition-transform duration-300" id="faq-2-icon">expand_more</span>
</button>
<div class="hidden px-space-md pb-space-md font-body-md text-body-md text-on-surface-variant" id="faq-2-body">
<p>
              Ya, seluruh penawaran resmi dari PT Biantara Gemilang Media bersifat <strong>All-Inclusive (Turnkey Solution)</strong>. Biaya rate card sudah mencakup Pajak Reklame Daerah (NSR/SIPR), biaya izin pemanfaatan titik dari Pemda terkait, asuransi pihak ketiga (Public Liability Insurance), biaya listrik daya penerangan spotlight (18.00 - 00.00 / 06.00 WIB), serta perawatan teknis berkala.
            </p>
</div>
</div>
<!-- FAQ 3 -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm transition-all">
<button class="w-full p-space-md text-left flex items-center justify-between gap-space-md focus:outline-none" onclick="toggleFaq('faq-3')" type="button">
<span class="font-headline-sm text-headline-sm text-on-surface">
              Bagaimana mekanisme monitoring dan bukti penayangan (Proof of Performance)?
            </span>
<span class="material-symbols-outlined text-secondary transition-transform duration-300" id="faq-3-icon">expand_more</span>
</button>
<div class="hidden px-space-md pb-space-md font-body-md text-body-md text-on-surface-variant" id="faq-3-body">
<p>
              Kami menyediakan sistem pelaporan terstruktur: (1) Foto dan video penayangan sudut siang &amp; malam bergeotagging dan timestamp resmi saat instalasi tuntas. (2) Untuk jaringan Videotron DOOH, klien diberikan akses web dashboard pemantauan log loop harian dan streaming CCTV live monitoring. (3) Laporan fisik bulanan dikirimkan bersamaan dengan faktur pajak.
            </p>
</div>
</div>
<!-- FAQ 4 -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm transition-all">
<button class="w-full p-space-md text-left flex items-center justify-between gap-space-md focus:outline-none" onclick="toggleFaq('faq-4')" type="button">
<span class="font-headline-sm text-headline-sm text-on-surface">
              Apakah PT Biantara melayani produksi materi cetak flexi dan pembuatan video animasi DOOH?
            </span>
<span class="material-symbols-outlined text-secondary transition-transform duration-300" id="faq-4-icon">expand_more</span>
</button>
<div class="hidden px-space-md pb-space-md font-body-md text-body-md text-on-surface-variant" id="faq-4-body">
<p>
              Tentu. Kami memiliki in-house large format UV &amp; Solvent printing di Surabaya, Medan, dan Jakarta yang mampu mencetak flexi korona bergaransi tahan cuaca hingga 12 bulan. Tim creative studio kami juga siap membantu adaptasi ukuran, motion graphics 3D anamorphic, hingga video optimasi ratio untuk seluruh layar videotron kami.
            </p>
</div>
</div>
</div>
<!-- Quick Assistance Footer CTA inside section -->
<div class="mt-space-md p-space-lg bg-surface-container-lowest rounded-xl shadow-sm flex flex-col sm:flex-row items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-full bg-secondary/10 text-secondary flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[22px]">help</span>
</div>
<div>
<span class="font-headline-sm text-headline-sm text-on-surface block">Punya pertanyaan spesifik atau tender khusus?</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Hubungi tim konsultan tender &amp; procurement kami melalui telepon atau email.</span>
</div>
</div>
<a class="px-space-md py-2 bg-secondary text-on-secondary hover:bg-secondary-container rounded-lg font-label-md text-label-md whitespace-nowrap transition-colors" href="https://wa.me/6281288997700?text=Halo%20saya%20ingin%20konsultasi%20tender%20OOH" rel="noopener noreferrer" target="_blank">
          Konsultasi Pengadaan
        </a>
</div>
</div>
</section>
<!-- Inline Micro-interaction Scripts -->
<script>
    // FAQ Toggle Handler
    function toggleFaq(id) {
      const body = document.getElementById(id + '-body');
      const icon = document.getElementById(id + '-icon');
      if (!body) return;

      const isHidden = body.classList.contains('hidden');
      
      // Close other accordions for crisp corporate feel
      const allBodies = document.querySelectorAll('#faqAccordion [id$="-body"]');
      const allIcons = document.querySelectorAll('#faqAccordion [id$="-icon"]');
      allBodies.forEach(b => b.classList.add('hidden'));
      allIcons.forEach(i => i.classList.remove('rotate-180'));

      if (isHidden) {
        body.classList.remove('hidden');
        if (icon) icon.classList.add('rotate-180');
      }
    }

    // Form Submission Feedback Simulation
    function submitInquiryForm() {
      const form = document.getElementById('oohInquiryForm');
      const feedback = document.getElementById('formSuccessMessage');
      if (feedback) {
        feedback.classList.remove('hidden');
        // Scroll feedback smoothly into view if needed
        feedback.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        // Disable form inputs to signify dispatch
        const elements = form.querySelectorAll('input, select, textarea, button[type="submit"]');
        elements.forEach(el => el.disabled = true);
      }
    }
  </script>
</div>
@endsection
