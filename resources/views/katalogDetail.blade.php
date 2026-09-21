@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full">
<!-- BREADCRUMB & HEADER TITIK -->
<section class="w-full bg-surface-container-low/70 py-space-md">
<div class="w-full px-margin flex flex-col gap-space-sm">
<!-- Breadcrumb -->
<nav class="flex items-center flex-wrap gap-space-xs font-label-md text-label-md text-on-surface-variant">
<a class="hover:text-secondary transition-colors flex items-center gap-1" data-path="beranda" href="#">
<span class="material-symbols-outlined text-[16px]">home</span>
          Beranda
        </a>
<span class="text-outline-variant">/</span>
<a class="hover:text-secondary transition-colors" data-path="katalog-lokasi-ooh" href="#">Katalog OOH</a>
<span class="text-outline-variant">/</span>
<span class="text-on-surface-variant">Provinsi Jambi</span>
<span class="text-outline-variant">/</span>
<span class="text-on-surface-variant">Kota Jambi</span>
<span class="text-outline-variant">/</span>
<span class="text-on-surface font-bold">BG_JAMBI_001</span>
</nav>
<!-- Main Spot Header Meta -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md pt-space-xs">
<div class="flex flex-col gap-space-xs max-w-4xl">
<div class="flex items-center flex-wrap gap-space-sm">
<span class="px-space-sm py-1 bg-surface-container-highest text-secondary font-label-sm text-label-sm uppercase tracking-wider rounded">
              BG_JAMBI_001
            </span>
<span class="px-space-sm py-1 bg-emerald-500/15 text-emerald-800 font-label-sm text-label-sm rounded flex items-center gap-1.5">
<span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span>
              TERSEDIA UNTUK BOOKING
            </span>
<span class="px-space-sm py-1 bg-surface-container text-on-surface-variant font-label-sm text-label-sm rounded">
              Tier-1 Prime Intersection
            </span>
</div>
<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
            Billboard Simpang Mayang Sipin - Jl. Kolonel Abunjani, Kota Jambi
          </h1>
<p class="font-body-md text-body-md text-on-surface-variant flex items-center gap-1.5">
<span class="material-symbols-outlined text-secondary text-[18px]">location_on</span>
            Jl. Kolonel Abunjani, Kelurahan Selamat, Kec. Telanaipura, Kota Jambi, Provinsi Jambi (36124)
          </p>
</div>
<div class="flex items-center gap-space-sm self-start lg:self-center">
<a class="px-space-md py-space-sm bg-secondary text-on-secondary font-label-lg text-label-lg rounded-lg shadow-sm hover:bg-secondary-container transition-all flex items-center gap-2" href="#quick-inquiry-box">
<span class="material-symbols-outlined text-[18px]">request_quote</span>
            Minta Rate Card Resmi
          </a>
<button class="p-space-sm bg-surface-container-lowest hover:bg-surface-container text-on-surface rounded-lg shadow-sm transition-colors" onclick="navigator.clipboard.writeText(window.location.href); alert('Tautan titik tersalin ke clipboard!');" title="Salin Tautan Titik">
<span class="material-symbols-outlined text-[20px]">share</span>
</button>
</div>
</div>
</div>
</section>
<!-- TWO-COLUMN WORKBENCH: FLIER VIEWER (LEFT) + SPEC & FORM (RIGHT) -->
<section class="w-full px-margin py-space-lg">
<div class="grid grid-cols-1 xl:grid-cols-12 gap-space-lg items-start">
<!-- LEFT COLUMN: FLIER VIEWER & RICH MEDIA -->
<div class="xl:col-span-7 2xl:col-span-8 flex flex-col gap-space-md">
<!-- Interactive Flier Canvas Container -->
<div class="bg-surface-container-lowest rounded-xl shadow-md p-space-md flex flex-col gap-space-md">
<!-- Viewer Action Toolbar -->
<div class="flex flex-wrap items-center justify-between gap-space-sm bg-surface-container-low p-space-sm rounded-lg">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-secondary text-[22px]">description</span>
<div>
<span class="font-label-md text-label-md text-on-surface block leading-tight">Lembar Flier Penawaran Resmi</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Dokumen Teknis PT Biantara Gemilang Media • Rev 2025</span>
</div>
</div>
<!-- Action Buttons Group -->
<div class="flex flex-wrap items-center gap-space-xs">
<button class="px-space-sm py-1.5 bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm rounded shadow-sm flex items-center gap-1 transition-colors" id="btnZoomModal" onclick="document.getElementById('flierModal').classList.remove('hidden')">
<span class="material-symbols-outlined text-[16px]">zoom_in</span>
                Perbesar Flier
              </button>
<a class="px-space-sm py-1.5 bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm rounded shadow-sm flex items-center gap-1 transition-colors" href="https://wa.me/6281288997700?text=Halo%20Biantara%20Media,%20saya%20ingin%20unduh%20PDF%20Flier%20Resmi%20BG_JAMBI_001" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[16px] text-error">picture_as_pdf</span>
                Unduh PDF
              </a>
<a class="px-space-sm py-1.5 bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm rounded shadow-sm flex items-center gap-1 transition-colors" href="https://wa.me/6281288997700?text=Halo%20Biantara%20Media,%20minta%20gambar%20high-res%20BG_JAMBI_001" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[16px] text-secondary">image</span>
                High-Res JPG
              </a>
<a class="px-space-sm py-1.5 bg-secondary text-on-secondary hover:bg-secondary-container font-label-sm text-label-sm rounded shadow-sm flex items-center gap-1 transition-colors" href="https://www.google.com/maps/search/?api=1&amp;query=-1.603348,103.593212" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[16px]">map</span>
                Buka di Maps
              </a>
</div>
</div>
<!-- The Official Flier Artboard Representation -->
<div class="relative bg-surface rounded-lg shadow-sm overflow-hidden p-space-md lg:p-space-lg flex flex-col gap-space-md">
<!-- Flier Brand Strip -->
<div class="flex items-center justify-between pb-space-sm bg-surface-container-lowest p-space-md rounded-lg shadow-sm">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined text-[24px]">view_quilt</span>
</div>
<div>
<span class="font-headline-sm text-headline-sm text-on-surface block tracking-tight">BIANTARA GEMILANG MEDIA</span>
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest">OOH SITE PROFILE &amp; SPECIFICATION SHEET</span>
</div>
</div>
<div class="text-right">
<span class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">BG_JAMBI_001</span>
<span class="font-label-sm text-label-sm text-on-surface-variant block">KOTA JAMBI • SIMPANG MAYANG</span>
</div>
</div>
<!-- Flier Main Visual Display (Real Intersection View) -->
<div class="relative w-full h-80 md:h-[420px] rounded-lg overflow-hidden shadow-sm group">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="Clear daytime wide perspective street view of large vertical billboard BG_JAMBI_001 at Simpang Mayang Sipin in Kota Jambi with cars, motorcycles, traffic light queue, lush tropical urban trees, clean bright blue sky, high detail architectural photo." id="mainFlierImg" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4l-Q2gxYhwe67h18BbxZX674HDTwwcYNfDd0dRQXkc8pOm_cBMw8GQL8SzgAMyd0xVjqdlzlSkf_aXo6wAjzMPMFsT6QmhHs14-Nc3FXT__YIx7jmbtdl50zU2Hl4krWcie-MPqhpaGSzc-AKLmFjMxE7w1GLx8H1vUrihO9yRdj15c_oRZPlvt-s8kHqef_vHxhGf6BYETbdnolq6kBx76HsRn__g_NwH9K3tC1GKabNR_YzkLuxiw"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary-container/85 via-transparent to-transparent"></div>
<!-- Flier Annotation Badges overlay -->
<div class="absolute top-4 left-4 flex flex-col gap-2">
<span class="px-space-sm py-1 bg-surface-container-lowest/95 backdrop-blur font-label-sm text-label-sm text-on-surface rounded shadow">
                  Lokasi: Simpang Mayang Sipin (Arus 3 Arah)
                </span>
<span class="px-space-sm py-1 bg-secondary text-on-secondary font-label-sm text-label-sm rounded shadow flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">visibility</span>
                  Sudut Pandang Pengendara (Eye-level 150m)
                </span>
</div>
<div class="absolute bottom-4 left-4 right-4 flex flex-col sm:flex-row sm:items-end justify-between gap-space-sm text-on-primary">
<div>
<span class="font-label-sm text-label-sm text-secondary-fixed-dim uppercase tracking-wider block">Koordinat Presisi GPS</span>
<span class="font-headline-sm text-headline-sm font-mono">-1.603348, 103.593212</span>
</div>
<div class="bg-surface-container-lowest/90 backdrop-blur text-on-surface px-space-md py-space-xs rounded-lg shadow-sm">
<span class="font-label-sm text-label-sm text-on-surface-variant block">Arus Kendaraan Harian</span>
<span class="font-headline-md text-headline-md font-bold text-secondary">85.000+ <span class="text-body-sm font-normal text-on-surface">Unit/Hari</span></span>
</div>
</div>
</div>
<!-- Flier Sub-Section: Micro Map & Eye-Level Driver Sight Diagram -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
<!-- Micro Map Preview -->
<div class="bg-surface-container-lowest p-space-md rounded-lg shadow-sm flex flex-col gap-space-sm">
<div class="flex items-center justify-between">
<span class="font-label-lg text-label-lg text-on-surface flex items-center gap-1">
<span class="material-symbols-outlined text-secondary text-[18px]">share_location</span>
                    Peta Makro &amp; Mikro Spot
                  </span>
<span class="font-label-sm text-label-sm text-on-surface-variant font-mono">Simpang Sipin Mayang</span>
</div>
<div class="w-full h-44 bg-cover bg-center rounded relative overflow-hidden shadow-inner" data-location="Jl. Kolonel Abunjani, Simpang Mayang, Kota Jambi, Indonesia" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDkxvjMxA3dGzHF3m-B2xxnPAp9xfQarrd3PSKo8Lao6viiaQgKJ7EDyN1tAwaa2B0ZT93dZrqpicpkv0e0O_8pRVUG_vPx5fMr2usq95nWoJ3zojwXwrW5BQlVydNe73TdvO-RqqijaWH8TS_kH-FisXsXiTQ35pn7Rsa5JzjoT1PeVCFVQLYOkTj_i9cZBZDF8E2AzIdP1BwvuC-WGGydOKOvRZJYW1HgYIimQKjsvb8bQ5blHiG_lA')">
<div class="absolute inset-0 bg-primary/20 flex items-center justify-center">
<div class="bg-secondary text-on-secondary px-space-sm py-1 rounded-full shadow-lg flex items-center gap-1 animate-bounce">
<span class="material-symbols-outlined text-[16px]">location_on</span>
<span class="font-label-sm text-label-sm">BG_JAMBI_001</span>
</div>
</div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                  Titik strategis di lampu merah simpang empat utama menghubungkan kawasan perkantoran Telanaipura dan pusat niaga Sipin.
                </p>
</div>
<!-- Driver Sightline Diagram & Landmark List -->
<div class="bg-surface-container-lowest p-space-md rounded-lg shadow-sm flex flex-col gap-space-sm">
<span class="font-label-lg text-label-lg text-on-surface flex items-center gap-1">
<span class="material-symbols-outlined text-secondary text-[18px]">straighten</span>
                  Diagram Jarak Pandang &amp; Titik Kunci
                </span>
<!-- Mini SVG Sightline Diagram -->
<div class="w-full bg-surface-container-low rounded p-space-sm flex flex-col items-center justify-center">
<svg class="w-full h-20 text-secondary" fill="none" viewbox="0 0 320 70" xmlns="http://www.w3.org/2000/svg">
<!-- Road -->
<path d="M10 60 L310 60" stroke="#c6c6cd" stroke-dasharray="4 4" stroke-width="2"></path>
<!-- Driver Car -->
<circle cx="35" cy="55" fill="#0051d5" r="7"></circle>
<text fill="#45464d" font-family="Plus Jakarta Sans" font-size="9" x="25" y="42">Mobil / Motor</text>
<!-- Billboard Pole -->
<line stroke="#131b2e" stroke-width="4" x1="280" x2="280" y1="65" y2="15"></line>
<!-- Billboard Board -->
<rect fill="#0051d5" height="35" rx="1" width="24" x="268" y="10"></rect>
<text fill="#0051d5" font-bold="true" font-family="Plus Jakarta Sans" font-size="9" x="255" y="8">BG_JAMBI_001</text>
<!-- Sight Line Cone -->
<path d="M42 55 L268 25 L268 45 Z" fill="#316bf3" fill-opacity="0.15"></path>
<line stroke="#316bf3" stroke-dasharray="3 3" stroke-width="1.5" x1="42" x2="268" y1="55" y2="28"></line>
<text fill="#0051d5" font-family="Plus Jakarta Sans" font-size="10" font-weight="600" x="120" y="32">Clear Vista 150m (Zero Obstacle)</text>
</svg>
<span class="font-label-sm text-label-sm text-on-surface-variant mt-1 text-center">Tinggi billboard 12m memastikan visual terlihat melampaui kanopi pohon &amp; kabel utilitas.</span>
</div>
<!-- Landmarks list -->
<div class="flex flex-col gap-1.5 pt-1">
<span class="font-label-sm text-label-sm text-on-surface font-semibold">Landmark Radius &lt; 500 Meter:</span>
<div class="grid grid-cols-2 gap-1 font-body-sm text-body-sm text-on-surface-variant">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-secondary">domain</span>
<span>Mall Jambi Town Center (JTC)</span>
</div>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-secondary">local_hospital</span>
<span>RSUD Raden Mattaher</span>
</div>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-secondary">account_balance</span>
<span>Bank Mandiri Sipin Hub</span>
</div>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-secondary">account_balance</span>
<span>BCA KCU Sipin Jambi</span>
</div>
</div>
</div>
</div>
</div>
<!-- Flier Footnote Credentials -->
<div class="flex flex-wrap items-center justify-between text-on-surface-variant pt-space-xs text-label-sm font-label-sm">
<span>PT Biantara Gemilang Media • Hak Cipta Registrasi Aset OOH Jambi</span>
<span class="text-secondary font-semibold">Verifikasi Legalitas &amp; Pajak Reklame 100% Sah</span>
</div>
</div>
<!-- Media Gallery Thumbnails -->
<div class="flex flex-col gap-space-xs pt-space-xs">
<span class="font-label-lg text-label-lg text-on-surface">Foto Dokumentasi Lapangan (3 Sudut Pandang)</span>
<div class="grid grid-cols-3 gap-space-sm">
<button class="relative h-24 rounded-lg overflow-hidden focus:ring-2 focus:ring-secondary group text-left" onclick="changePhoto(0)">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Daytime view of BG_JAMBI_001 billboard on the busy intersection of Jl Kolonel Abunjani Kota Jambi showing traffic vehicles and sunny clear weather." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGz8-6gbYdoyGE_gQjBQGhX5q22FNX7qbxfqfYvpe8EC9rmI63aVE0K6Kn9ndF5UBUGJyFfgn0Zta5Q2CwjFIapQNkdaDJE-WEY6xK2N2fltd1W_lIS-TqHmz7-65cG_59-tJZ98Jxpwgh41V-ACoCgN5fl34qjQR9ggod87PgG7CphKc4U5nnuDeRtmbD8bHnHuPSSYs-S1DEMXOV0M5JOJIgue0JqwdgCMZtvg_eXo9b414maH2XOw"/>
<span class="absolute bottom-1 left-1 bg-primary/80 text-on-primary text-[10px] px-1.5 py-0.5 rounded font-label-sm">Sudut Siang Hari</span>
</button>
<button class="relative h-24 rounded-lg overflow-hidden focus:ring-2 focus:ring-secondary group text-left" onclick="changePhoto(1)">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Night photo of BG_JAMBI_001 vertical billboard in Kota Jambi with 4 high intensity frontlight halogen lamps clearly illuminating the advertising canvas amidst night traffic streaks." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPf3iFgW_Q9AKr5WJJcPyoHAV_NjCojxzOT9IjiJDMjO--bnEJRMgrsODwkS7efcWsTYmVVH6cc9RRytCM-6KsjyTiyCfbmakBXKVRRlw1cZ1i5ap02h-Ywh2QN78pUk_R3nST91FwbSXYDLEAKZAQFGwEnaMwtNcOT4qBs0u3N6jZLSdhav-sB0oGJk5DvcW7PkrxQvNSYqa1FGWvSyGPeYqeIwcbn8PTnCTrmIs7qSIm8qa0hbOGRQ"/>
<span class="absolute bottom-1 left-1 bg-primary/80 text-on-primary text-[10px] px-1.5 py-0.5 rounded font-label-sm">Malam (Frontlight On)</span>
</button>
<button class="relative h-24 rounded-lg overflow-hidden focus:ring-2 focus:ring-secondary group text-left" onclick="changePhoto(2)">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="Driver eye-level perspective waiting at red light Simpang Mayang looking directly towards BG_JAMBI_001 billboard with high visibility and dwell time." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKxP0objAyHWpY9Hsld0iQP8TJm40KzW7ya4OwjL_XqXtBhWWRA0W4fi2oJSas7q09hX9OMUkimMPfuTL9jQUo0qf0R1PFt2Zj-LByvKDK-pONWxmEESIKjbKgcKEDqOFzdMYKShzM0dOKIdndWFVMj4NqxUEoPYQxo9qu93pYO-Xhy0eAsdHUVtKeVA0w0ijwyQREpp1HRVX4gaRzrnjpE7tKc_c-yBCeihIug5_-z1cjfjDwaNXDpw"/>
<span class="absolute bottom-1 left-1 bg-primary/80 text-on-primary text-[10px] px-1.5 py-0.5 rounded font-label-sm">View Lampu Merah</span>
</button>
</div>
</div>
</div>
</div>
<!-- RIGHT COLUMN: SPECIFICATIONS & STICKY INQUIRY BOX -->
<div class="xl:col-span-5 2xl:col-span-4 flex flex-col gap-space-lg">
<!-- TECHNICAL SPECIFICATION CARD -->
<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-md flex flex-col gap-space-md">
<div class="flex items-center justify-between pb-space-xs">
<h2 class="font-headline-sm text-headline-sm text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-secondary">tune</span>
              Spesifikasi Teknis Titik
            </h2>
<span class="px-space-sm py-1 bg-surface-container-high font-label-sm text-label-sm text-on-surface rounded">
              Status Aktif
            </span>
</div>
<!-- High-Precision Spec Table -->
<div class="flex flex-col text-on-surface font-body-md text-body-md">
<div class="flex items-center justify-between py-2.5 px-space-xs bg-surface-container-low/50 rounded">
<span class="text-on-surface-variant font-label-md text-label-md">Kode OOH Asset</span>
<span class="font-mono font-bold text-secondary">BG_JAMBI_001</span>
</div>
<div class="flex items-center justify-between py-2.5 px-space-xs">
<span class="text-on-surface-variant font-label-md text-label-md">Ukuran Media (Width x Height)</span>
<span class="font-bold">4.00 x 8.00 Meter <span class="text-on-surface-variant font-normal">(32 m²)</span></span>
</div>
<div class="flex items-center justify-between py-2.5 px-space-xs bg-surface-container-low/50 rounded">
<span class="text-on-surface-variant font-label-md text-label-md">Jenis Media</span>
<span class="inline-flex items-center gap-1 font-semibold">
<span class="material-symbols-outlined text-[18px] text-secondary">ad_units</span>
                Billboard Fisik (Static Vinyl)
              </span>
</div>
<div class="flex items-center justify-between py-2.5 px-space-xs">
<span class="text-on-surface-variant font-label-md text-label-md">Jenis Penerangan</span>
<span class="font-semibold text-right">Frontlight LED (4x 400W Halogen)</span>
</div>
<div class="flex items-center justify-between py-2.5 px-space-xs bg-surface-container-low/50 rounded">
<span class="text-on-surface-variant font-label-md text-label-md">Jam Penerangan</span>
<span class="font-mono">18:00 - 05:00 WIB (Otomatis Timer)</span>
</div>
<div class="flex items-center justify-between py-2.5 px-space-xs">
<span class="text-on-surface-variant font-label-md text-label-md">Bentuk &amp; Orientasi</span>
<span class="font-semibold">Vertikal (Portrait)</span>
</div>
<div class="flex items-center justify-between py-2.5 px-space-xs bg-surface-container-low/50 rounded">
<span class="text-on-surface-variant font-label-md text-label-md">Konfigurasi Tampilan</span>
<span class="font-semibold text-right">Double Side (Muka 1 Hadap Simpang)</span>
</div>
<div class="flex items-center justify-between py-2.5 px-space-xs">
<span class="text-on-surface-variant font-label-md text-label-md">Ketinggian Konstruksi</span>
<span class="font-semibold">12 Meter dari jalan (Clear Sight)</span>
</div>
<div class="flex items-center justify-between py-2.5 px-space-xs bg-surface-container-low/50 rounded">
<span class="text-on-surface-variant font-label-md text-label-md">Zonasi Peruntukan</span>
<span class="text-right font-semibold">Komersial &amp; Perkantoran Kelas A</span>
</div>
<div class="flex items-center justify-between py-2.5 px-space-xs">
<span class="text-on-surface-variant font-label-md text-label-md">Dwell Time Rata-rata</span>
<span class="font-semibold">45 - 90 Detik (Siklus APILL)</span>
</div>
</div>
<!-- Guarantee Badge -->
<div class="bg-surface-container-high/60 p-space-md rounded-lg flex items-start gap-space-sm">
<span class="material-symbols-outlined text-secondary text-[24px]">verified</span>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg text-on-surface">Jaminan Legalitas &amp; Pajak Reklame Resmi</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Pajak Reklame Pemda Kota Jambi dan Izin Penyelenggaraan Reklame (IPR) terbit 100% legal, bebas sengketa atau penertiban Satpol PP.
              </p>
</div>
</div>
</div>
<!-- STICKY LEAD GENERATION & WHATSAPP ACTION BOX -->
<div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-xl flex flex-col gap-space-md sticky top-24" id="quick-inquiry-box">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">Fast Response Booking</span>
<h3 class="font-headline-md text-headline-md text-on-surface tracking-tight">Tertarik dengan Titik Ini?</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">
              Dapatkan estimasi rate card, diskon bundling multi-bulan, dan ketersediaan slot tayang campaign brand Anda.
            </p>
</div>
<!-- PRIMARY WHATSAPP BUTTON -->
<a class="w-full py-space-sm px-space-md bg-emerald-600 hover:bg-emerald-700 text-on-primary font-label-lg text-label-lg rounded-lg shadow flex items-center justify-center gap-2 transition-all transform hover:-translate-y-0.5" href="https://wa.me/6281288997700?text=Halo%20PT%20Biantara%20Gemilang%20Media,%20saya%20tertarik%20dengan%20titik%20BG_JAMBI_001%20Jl.%20Kolonel%20Abunjani%20Jambi.%20Mohon%20info%20ketersediaan%20dan%20rate%20card%20campaign." rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[22px]">chat</span>
<span>Tanya Titik Ini via WhatsApp (+62 812-8899-7700)</span>
</a>
<div class="flex items-center gap-space-sm">
<span class="h-px bg-surface-container flex-1"></span>
<span class="font-label-sm text-label-sm text-on-surface-variant">atau isi form penawaran</span>
<span class="h-px bg-surface-container flex-1"></span>
</div>
<!-- QUICK INQUIRY FORM -->
<form class="flex flex-col gap-space-sm" id="inquiryForm" onsubmit="handleInquirySubmit(event)">
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface">Nama Lengkap &amp; Perusahaan / Brand *</label>
<input class="w-full px-space-sm py-2 bg-surface-container-low rounded text-on-surface font-body-md text-body-md placeholder-on-surface-variant/60 focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary transition-all" placeholder="Contoh: Rian Pratama - PT Sumber Pangan Makmur" required="" type="text"/>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface">Nomor WhatsApp *</label>
<input class="w-full px-space-sm py-2 bg-surface-container-low rounded text-on-surface font-body-md text-body-md placeholder-on-surface-variant/60 focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary transition-all" placeholder="0812-xxxx-xxxx" required="" type="tel"/>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface">Email Perusahaan</label>
<input class="w-full px-space-sm py-2 bg-surface-container-low rounded text-on-surface font-body-md text-body-md placeholder-on-surface-variant/60 focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary transition-all" placeholder="corporate@brand.com" type="email"/>
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface">Rencana Durasi Campaign</label>
<select class="w-full px-space-sm py-2 bg-surface-container-low rounded text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary transition-all">
<option value="1_bulan">1 Bulan (Uji Coba Campaign)</option>
<option selected="" value="3_bulan">3 Bulan (Direkomendasikan - Best Value)</option>
<option value="6_bulan">6 Bulan (Semesteran)</option>
<option value="1_tahun">1 Tahun (Tahunan / Long Term Retention)</option>
</select>
</div>
<button class="w-full mt-2 py-space-sm px-space-md bg-primary-container hover:bg-on-surface text-on-primary font-label-lg text-label-lg rounded-lg shadow transition-colors flex items-center justify-center gap-2" type="submit">
<span class="material-symbols-outlined text-[18px]">send</span>
              Kirim Permintaan Penawaran Resmi
            </button>
</form>
<div class="hidden p-space-sm bg-emerald-50 text-emerald-800 rounded font-body-sm text-body-sm flex items-center gap-2" id="formSuccessMessage">
<span class="material-symbols-outlined text-[18px] text-emerald-600">check_circle</span>
<span>Permintaan Anda telah diterima! Media Planner Biantara akan menghubungi WhatsApp Anda dalam 15 menit.</span>
</div>
<div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm pt-space-xs">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-emerald-600">bolt</span>
              SLA Respon &lt; 15 Menit
            </span>
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[14px] text-secondary">lock</span>
              Kerahasiaan Rate Card Terjaga
            </span>
</div>
</div>
</div>
</div>
</section>
<!-- TITIK STRATEGIS ALTERNATIF DI SEKITARNYA (NEARBY RELATED SPOTS IN JAMBI & SUMATERA) -->
<section class="w-full bg-surface-container-low/50 py-space-xl">
<div class="w-full px-margin flex flex-col gap-space-lg">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm">
<div class="flex flex-col gap-space-xs">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold">Network Ekstensi Kampanye</span>
<h2 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
            Titik Strategis Alternatif di Wilayah Sekitar
          </h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
            Maksimalkan jangkauan brand awareness Anda di Kota Jambi dan koridor Sumatera dengan menambahkan spot komplementer berikut ke dalam media plan Anda.
          </p>
</div>
<a class="inline-flex items-center gap-1 font-label-lg text-label-lg text-secondary hover:text-secondary-container transition-colors" data-path="katalog-lokasi-ooh" href="#">
<span>Lihat Semua Titik Jambi &amp; Sumatera</span>
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>
<!-- 3 Related Spot Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
<!-- CARD 1: BG_JAMBI_002 -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex flex-col group">
<div class="relative h-52 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="High tech digital videotron screen located at Jl Gatot Subroto Pasar Jambi showing high definition colorful brand advertisement, bustling market street with pedestrian and vehicle crowd." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAevmtfkZrZlaKYH0OcSVxhK5xj0g_fLAYOv4u6gnLwTgrwBVzz_RHp0fkTmDSutRbEJvOiIp2zqbXK6acuwn0Lo1CPwFhSt5dA9Oz2EOd8XUogRQGHUuO26M-gHpup2TN4XJxyiBbZW11m189CKNk0GGCaTk4zGim_uCkBcUVvGttLtQ7eJloJLp6UIuMbVUw3zY36CIy3TIeRxMHYebNvjp7KzLTHZy4dIYFBC-z00sJUoVUb8GHdhA"/>
<div class="absolute top-3 left-3">
<span class="px-space-sm py-1 bg-surface-container-lowest text-secondary font-label-sm text-label-sm rounded shadow">
                BG_JAMBI_002
              </span>
</div>
<div class="absolute top-3 right-3">
<span class="px-space-sm py-1 bg-secondary text-on-secondary font-label-sm text-label-sm rounded shadow flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">tv</span>
                Videotron LED
              </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary">
<span class="bg-primary-container/80 backdrop-blur px-2 py-0.5 rounded font-label-sm text-label-sm">
                Pasar Jambi Commercial Hub
              </span>
<span class="bg-emerald-600/90 text-on-primary px-2 py-0.5 rounded font-label-sm text-label-sm">
                Slot Tersedia
              </span>
</div>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<h3 class="font-headline-sm text-headline-sm text-on-surface line-clamp-2">
                Videotron Digital Simpang Jl. Gatot Subroto, Pasar Jambi
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
                Pusat perdagangan retail &amp; sentra perbankan Jambi
              </p>
<div class="grid grid-cols-2 gap-2 mt-space-xs py-space-xs px-space-sm bg-surface-container-low rounded font-body-sm text-body-sm">
<div>
<span class="text-on-surface-variant font-label-sm block">Dimensi</span>
<span class="font-semibold text-on-surface">4.00 x 8.00 M</span>
</div>
<div>
<span class="text-on-surface-variant font-label-sm block">Daily Traffic</span>
<span class="font-semibold text-secondary">92.000 Kend/Hari</span>
</div>
</div>
</div>
<div class="flex items-center gap-space-sm pt-space-xs">
<a class="flex-1 py-2 bg-secondary text-on-secondary hover:bg-secondary-container rounded font-label-md text-label-md text-center transition-colors" href="https://wa.me/6281288997700?text=Halo%20PT%20Biantara%20Gemilang%20Media,%20saya%20ingin%20info%20titik%20BG_JAMBI_002" rel="noopener noreferrer" target="_blank">
                Tanya Slot Tayang
              </a>
<a class="p-2 bg-surface-container hover:bg-surface-container-high text-on-surface rounded transition-colors" data-path="katalog-lokasi-ooh" href="#" title="Lihat Detail Titik">
<span class="material-symbols-outlined text-[18px]">arrow_outward</span>
</a>
</div>
</div>
</div>
<!-- CARD 2: BG_JAMBI_003 -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex flex-col group">
<div class="relative h-52 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Massive 5x10 horizontal billboard at Simpang Kawat intersection in Kota Jambi with wide open arterial view, frontlight illumination fixtures, clear visibility from long distance." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIM75d2taUjjnS6eT8WPSF75nyj5jMMimkwGfooDRJ-1ULte9a15toVw4Kzxc9HypSOYUN3nSeOmxd6iMv94Sk-wjCok70lx95aDCpF5sIFXWnRjMjBW7Y1ZIgZ8KxbdFFrQaIIxPfgElNu6_RmAtyOZ6OX4bYS4hwX4pm9aLj7gHfdpPdatic-OMA1qD9R3NON-UjMEvtXboAsCjB-5MuEcUZmMLHR7LSbsquXiYmIJHxescD7supPw"/>
<div class="absolute top-3 left-3">
<span class="px-space-sm py-1 bg-surface-container-lowest text-secondary font-label-sm text-label-sm rounded shadow">
                BG_JAMBI_003
              </span>
</div>
<div class="absolute top-3 right-3">
<span class="px-space-sm py-1 bg-surface-container text-on-surface font-label-sm text-label-sm rounded shadow flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">view_agenda</span>
                Billboard Static
              </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary">
<span class="bg-primary-container/80 backdrop-blur px-2 py-0.5 rounded font-label-sm text-label-sm">
                Simpang Kawat Protokol
              </span>
<span class="bg-emerald-600/90 text-on-primary px-2 py-0.5 rounded font-label-sm text-label-sm">
                Available Now
              </span>
</div>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<h3 class="font-headline-sm text-headline-sm text-on-surface line-clamp-2">
                Billboard Simpang Kawat - Jl. H. Moh. Bafadhal, Kota Jambi
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
                Jalur distribusi logistik &amp; commuter utama antarkota
              </p>
<div class="grid grid-cols-2 gap-2 mt-space-xs py-space-xs px-space-sm bg-surface-container-low rounded font-body-sm text-body-sm">
<div>
<span class="text-on-surface-variant font-label-sm block">Dimensi</span>
<span class="font-semibold text-on-surface">5.00 x 10.00 M</span>
</div>
<div>
<span class="text-on-surface-variant font-label-sm block">Daily Traffic</span>
<span class="font-semibold text-secondary">78.000 Kend/Hari</span>
</div>
</div>
</div>
<div class="flex items-center gap-space-sm pt-space-xs">
<a class="flex-1 py-2 bg-secondary text-on-secondary hover:bg-secondary-container rounded font-label-md text-label-md text-center transition-colors" href="https://wa.me/6281288997700?text=Halo%20PT%20Biantara%20Gemilang%20Media,%20saya%20ingin%20info%20titik%20BG_JAMBI_003" rel="noopener noreferrer" target="_blank">
                Tanya Slot Tayang
              </a>
<a class="p-2 bg-surface-container hover:bg-surface-container-high text-on-surface rounded transition-colors" data-path="katalog-lokasi-ooh" href="#" title="Lihat Detail Titik">
<span class="material-symbols-outlined text-[18px]">arrow_outward</span>
</a>
</div>
</div>
</div>
<!-- CARD 3: BG_PLG_SUDIRMAN_001 -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 flex flex-col group">
<div class="relative h-52 overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Monumental 6x12 meter highway billboard on Jalan Jenderal Sudirman Palembang South Sumatra alongside LRT track and multi-lane modern metropolitan highway traffic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6vgxPOzCOG-nKMWTfGQSJ4wXiaN7DZ5krDwFZkExj3TcaIPBAQZAtkONlImVrrMxU2Kl_qLD09kCwkXVRLyWjAri-c5NA_E1fFnFxmHLZK2QRJkECjv5YSMzxlDfTboiUUIyjYN4zGUfkrn87-JJiKZ1_gkkcXo6tCR9vCL6BxOQ5QXpmwiOKQu0nwOf2COb3exSIB6Z3I8Nym6XUqoahgmffjkocumVyQA6pJf5puD8rLV4up3JlWw"/>
<div class="absolute top-3 left-3">
<span class="px-space-sm py-1 bg-surface-container-lowest text-secondary font-label-sm text-label-sm rounded shadow">
                BG_PLG_SUDIRMAN_001
              </span>
</div>
<div class="absolute top-3 right-3">
<span class="px-space-sm py-1 bg-surface-container text-on-surface font-label-sm text-label-sm rounded shadow flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">featured_play_list</span>
                Billboard Mega Site
              </span>
</div>
<div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary">
<span class="bg-primary-container/80 backdrop-blur px-2 py-0.5 rounded font-label-sm text-label-sm">
                Kawasan Protokol Palembang
              </span>
<span class="bg-emerald-600/90 text-on-primary px-2 py-0.5 rounded font-label-sm text-label-sm">
                Tersedia Q2 2025
              </span>
</div>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<h3 class="font-headline-sm text-headline-sm text-on-surface line-clamp-2">
                Billboard Mega Jl. Jend. Sudirman, Palembang (Sumatera Selatan)
              </h3>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
                Jalur utama flyover &amp; stasiun LRT, koridor terpadat Sumsel
              </p>
<div class="grid grid-cols-2 gap-2 mt-space-xs py-space-xs px-space-sm bg-surface-container-low rounded font-body-sm text-body-sm">
<div>
<span class="text-on-surface-variant font-label-sm block">Dimensi</span>
<span class="font-semibold text-on-surface">6.00 x 12.00 M</span>
</div>
<div>
<span class="text-on-surface-variant font-label-sm block">Daily Traffic</span>
<span class="font-semibold text-secondary">140.000 Kend/Hari</span>
</div>
</div>
</div>
<div class="flex items-center gap-space-sm pt-space-xs">
<a class="flex-1 py-2 bg-secondary text-on-secondary hover:bg-secondary-container rounded font-label-md text-label-md text-center transition-colors" href="https://wa.me/6281288997700?text=Halo%20PT%20Biantara%20Gemilang%20Media,%20saya%20ingin%20info%20titik%20BG_PLG_SUDIRMAN_001" rel="noopener noreferrer" target="_blank">
                Tanya Slot Tayang
              </a>
<a class="p-2 bg-surface-container hover:bg-surface-container-high text-on-surface rounded transition-colors" data-path="katalog-lokasi-ooh" href="#" title="Lihat Detail Titik">
<span class="material-symbols-outlined text-[18px]">arrow_outward</span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- FLIER HIGH RESOLUTION FULLSCREEN MODAL -->
<div class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-primary/80 backdrop-blur-sm" id="flierModal">
<div class="bg-surface-container-lowest rounded-xl max-w-5xl w-full max-h-[90vh] overflow-y-auto shadow-2xl flex flex-col p-space-lg gap-space-md">
<div class="flex items-center justify-between pb-space-sm border-b-0">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-secondary text-[28px]">wallpaper</span>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Flier Detail Penuh: BG_JAMBI_001</h3>
<span class="font-label-sm text-label-sm text-on-surface-variant">Jl. Kolonel Abunjani, Simpang Mayang Sipin, Kota Jambi</span>
</div>
</div>
<button class="p-2 bg-surface-container hover:bg-surface-container-high rounded-full text-on-surface transition-colors" onclick="document.getElementById('flierModal').classList.add('hidden')">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
</div>
<div class="w-full bg-surface rounded-lg overflow-hidden flex items-center justify-center p-space-sm">
<img class="w-full h-auto max-h-[65vh] object-contain rounded" data-alt="Full screen complete marketing flier of billboard BG_JAMBI_001 in Kota Jambi containing site photo, dimension specs 4x8 meters, traffic metrics 85k, GPS coordinates, and contact details of PT Biantara Gemilang Media." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlDQSbpzdUdajrbrGw38pbidAegmYrfv2niln-Hz0LJow65XzpdivCPecvbw1RT43Tbi3iD3CeWvPfDXOa5ubkF1qCuQvp5OIRDubQaG8LaWT0bwhbzKOPL18XuZEnl-q7eIbJ8eMgCJd8YGegksft37OLIJqCit3ZCtKzeG373cNzQ89g8la5Y6tRv250yDZx-UgNXz2nJAiBvfx7PAMmiVnYa2p1tMfMotYTbO1AWo4gZjCcNnpH9w"/>
</div>
<div class="flex flex-wrap items-center justify-between gap-space-sm pt-space-xs">
<div class="flex items-center gap-2">
<a class="px-space-md py-2 bg-secondary text-on-secondary rounded-lg font-label-md text-label-md flex items-center gap-2" href="https://wa.me/6281288997700?text=Halo%20Biantara%20Media,%20mohon%20kirimkan%20PDF%20Flier%20Resmi%20BG_JAMBI_001" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[18px]">download</span>
            Unduh Dokumen Flier Asli
          </a>
</div>
<button class="px-space-md py-2 bg-surface-container hover:bg-surface-container-high text-on-surface rounded-lg font-label-md text-label-md" onclick="document.getElementById('flierModal').classList.add('hidden')">
          Tutup Pratinjau
        </button>
</div>
</div>
</div>
<!-- Micro Interaction Inline Logic -->
<script>
    function handleInquirySubmit(event) {
      event.preventDefault();
      var msg = document.getElementById('formSuccessMessage');
      if (msg) {
        msg.classList.remove('hidden');
        event.target.reset();
      }
    }

    function changePhoto(index) {
      var hero = document.getElementById('mainFlierImg');
      if (!hero) return;
      hero.style.opacity = '0.5';
      setTimeout(function() {
        hero.style.opacity = '1';
      }, 200);
    }
  </script>
</div>
@endsection
