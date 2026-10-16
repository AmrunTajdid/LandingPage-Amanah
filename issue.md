# Issue: Landing Page PT Amanah Haramain International (Umroh & Hajj Protection)

> **Status:** Disetujui melalui sesi review `/grill-me`  
> **Tanggal Pembaruan:** 16 Oktober 2026  
> **Target Penggunaan:** Google Ads & Meta Ads (High-Converting Landing Page)

---

## 1. Profil & Nilai Bisnis
- **Nama Perusahaan**: PT Amanah Haramain International
- **Brand / Sub-brand**: AMANAH - Umroh dan Hajj Protection
- **Sektor Layanan**: Layanan Keuangan untuk Perlindungan Dana Jamaah Haji dan Umroh (*Escrow & Financial Safety Assurance*)
- **Target Pengguna**: Calon jamaah haji & umroh (individu & keluarga) di Indonesia yang mengutamakan keamanan dana dari risiko biro travel bermasalah.
- **Tujuan Utama**: Konversi trafik iklan berbayar menjadi prospek terverifikasi melalui formulir konsultasi cepat dan WhatsApp resmi.

---

## 2. Keputusan Desain & Arsitektur (Hasil Sesi `/grill-me`)

### A. Mekanisme Konversi (Lead Capture)
- **Formulir Konsultasi Cepat di Hero**: Input Nama Lengkap, Nomor WhatsApp, Kota Asal, dan Pilihan Paket (Umroh Reguler / Umroh Ramadhan / Haji Khusus).
- **Auto-Redirect ke WhatsApp**: Saat tombol *"Konsultasi Sekarang"* ditekan, sistem otomatis membuka obrolan WhatsApp resmi dengan pesan yang sudah terformat rapi (Nama, Kota, Paket) sehingga tim CS dapat langsung menyapa prospek tanpa friksi.
- **Floating Sticky WhatsApp**: Tombol mengambang di sudut kanan bawah khusus layar smartphone dengan pesan pra-isi.

### B. Arsitektur Kepercayaan (Anti-AI Template & Anti-Klaim Kosong)
- Menghindari ikon dan kalimat klise tanpa bukti.
- Menyajikan **3 Pilar Legitimasi Konkret**:
  1. **Legalitas Resmi**: Nomor Induk Berusaha (NIB) & Keputusan Menteri Hukum dan HAM (AHU Kemenkumham).
  2. **Rekening Penampung Aman**: Dana terproteksi di Rekening Khusus Bank Syariah terkemuka (misal: Bank Syariah Indonesia / Muamalat).
  3. **Keberadaan Fisik Nyata**: Alamat kantor representatif di Jakarta Selatan beserta jam operasional dan kontak legal.

### C. Layout Hero Section & Estetika Visual
- **Gaya Tata Letak**: *Split Luxury Layout*
  - **Kolom Kiri**: Headline wibawa, 4 pilar nilai (Aman, Terpercaya, Mudah, Berkah), sub-headline emosional, dan kartu formulir konsultasi cepat.
  - **Kolom Kanan**: Bingkai arsitektur kubah Islami (*Islamic Archway Frame*) berisi visual megah Ka'bah & Menara Jam Mekkah dengan *floating badge* interaktif: *"Rekening Khusus Terproteksi di Bank Syariah"*.
- **Palet Warna Resmi**:
  - `Primary Emerald Green`: `#134E48` / `#0D3B36`
  - `Royal Metallic Gold`: `#C59B27` / `#D49B2A`
  - `Warm Ivory Canvas`: `#FBF9F5` (Latar belakang elegan non-generik)
  - `Deep Slate Navy Text`: `#0F172A` (Keterbacaan tajam)
- **Tipografi**:
  - Heading: *Playfair Display* / *Cinzel* (Kesan agung dan prestisius)
  - Body: *Plus Jakarta Sans* (Sangat mudah dibaca oleh kalangan jamaah usia 30-65 tahun)

### D. Struktur Bagian Halaman (Section Breakdown)
1. **Top Bar & Sticky Navbar**: Logo Amanah (A + siluet pesawat terbang), indikator legalitas resmi, dan tombol WhatsApp instan.
2. **Hero Section (Split Layout)**: Headline + 4 Badges + Form Cepat + Frame Ka'bah Archway.
3. **Pilar Masalah & Emosi (Storytelling)**:
   - *"Rencana Suci Jangan Sampai Tertunda"*
   - Kutipan: *"Karena ibadah ini bukan sekadar perjalanan, tapi amanah seumur hidup."*
   - Visual tasbih dan pasangan jamaah menghadap Ka'bah.
   - 3 Solusi: Perlindungan Dana Penuh, Nilai Dana Stabil, Tenang Beribadah.
4. **Alur 4 Langkah Cara Kerja**:
   - `01` Daftar & Pilih Paket $\rightarrow$ `02` Deposit Dana $\rightarrow$ `03` Perlindungan Berjalan $\rightarrow$ `04` Berangkat ke Tanah Suci.
5. **Kalkulator Simulasi Proteksi Dana Interaktif**: Jamaah dapat menggeser/memilih target ibadah dan melihat estimasi perlindungan.
6. **FAQ (Menjawab Keraguan Terbesar Jamaah)**: Pertanyaan seputar keamanan dana, cara pencairan darurat, dan kepatuhan syariah.
7. **Footer & Legal Disclaimer**: Identitas PT Amanah Haramain International, disclaimer keuangan, tautan kebijakan privasi, dan alamat kantor.

### E. Format Implementasi Teknis
- **Format Berkas**: Master Blade View Mandiri (*Drop-in ready*) `amanah_landing_page.blade.php` serta versi pratinjau `index.html`.
- **Framework & Dependencies**:
  - Tailwind CSS via CDN (dengan konfigurasi tema emerald dan gold kustom)
  - Alpine.js via CDN untuk reaktivitas form dan FAQ accordion tanpa instalasi npm yang rumit
  - Google Fonts (*Plus Jakarta Sans* & *Playfair Display*)
  - Aset visual resmi yang diintegrasikan langsung dari folder materi.
- **Konfigurasi Variabel di Awal File**:
  - Nomor WhatsApp: `$waNumber = '6281234567890'` (mudah diganti kapan saja)
  - Alamat Kantor: Jakarta Selatan

---

## 3. Checklist Eksekusi
- [x] Diskusi dan penguncian spesifikasi via `/grill-me`
- [x] Penyiapan aset logo & gambar flyer ke direktori aset
- [x] Pembuatan berkas Blade `amanah_landing_page.blade.php`
- [x] Pembuatan berkas HTML pratinjau langsung untuk pengujian browser
- [x] Uji coba fungsionalitas formulir redirect ke WhatsApp & kalkulator simulasi
- [x] Verifikasi tampilan mobile (responsive check)
