# IPBicycle 
![IPB CYCLE LOGO](https://user-images.githubusercontent.com/85139125/122133039-2fde0e80-ce66-11eb-85b4-5e07b7823a58.png)
IPBicycle merupakan website yang digunakan untuk manajemen data peminjaman sepeda di IPB
# Kelompok 5 
Kelas praktikum : P3
1. Mely Amelia (G14190017)
2. Naufal Nashif Imanuddin (G14190025)
3. Vera Amelia (G14190036)
4. Zahra Nurul Fatimah (G14190070)
# Latar Belakang
Kampus IPB University di Dramaga memiliki lahan yang luas, yaitu 2.670.000 m2 sehingga diperlukan transportasi jarak jauh. Sepeda menjadi salah satu transportasi yang bisa menjadi pilihan, sehingga IPB memfasilitasi peminjaman sepeda kampus. Sepeda kampus 
menjadi salah satu yang digemari oleh civitas IPB karena menyehatkan, gratis, ramah lingkungan, dan persyaratan yang dibutuhkan juga mudah. Faisilitas yang diminati ini masih menggunakan pendataan konvensional 
yang memiliki banyak kekurangan, seperti kurang efektif dan efisien. Maka dari itu, kami ingin membuat manajemen pendataan berbasis web bernama IPBicycle yang akan meningkatkan efektivitas dan efisiensi pendataan peminjaman sepeda kampus.
# Rumusan Masalah
1. Bagaimana kepala cabang menginput data dan lokasi penanggung jawab?
2. Bagaimana penanggung jawab menginput transaksi peminjaman ?
# Tujuan
1.  Membuat proses input data dan lokasi penanggung jawab oleh kepala cabang.
2.  Membuat proses input penanggung jawab menginput transaksi peminjaman. 
# Batasan Masalah
1. IPBicycle hanya dapat digunakan oleh admin saja.
2. Akun untuk penanggung jawab tiap lokasi hanya bisa dibuat oleh kepala cabang. 
3. Peminjam pada website ini hanya terbatas untuk mahasiswa IPB saja.
4. Peminjaman dan pengembalian sepeda hanya dapat dilakukan di lokasi yang sama.
6. Mahasiswa masih dapat melakukan peminjaman meskipun peminjaman sebelumnya belum dikembalikan
7. Software yang digunakan adalah xampp versi 5.6
# Solusi Singkat
IPBicycle memudahkan pegawai peminjaman sepeda kampus dalam pendataan mahasiswa IPB yang meminjam sepeda. Peminjam pada website ini hanya terbatas untuk mahasiswa IPB. IPBicycle memiliki daftar sepeda milik kampus yang dapat dipinjamkan kepada mahasiswa IPB. Jenis sepeda yang tersedia juga akan tertera di website IPBicycle. Pegawai harus terdaftar sebagai penanggung jawab  untuk masuk ke website IPBicycle dengan dibuatkan akun oleh super admin atau kepala cabang. Setelah login, penanggung jawab dapat mengakses dan menambahkan data mahasiswa, sepeda, dan transaksi peminjaman. Data penanggung jawab hanya bisa diubah oleh kepala cabang. Setelah transaksi selesai, penanggung jawab dapat mencetak bukti transaksi dalam bentuk PDF dan diberikan kepada mahasiswa.  Mahasiswa dapat mengembalikan sepeda yang dia pinjam di lokasi tempat peminjaman.
# Entity Relationship Diagram
![entitas revisi](https://user-images.githubusercontent.com/85139125/122188580-49a94100-ceba-11eb-8fc9-7a2e780bbcbd.png)
# Proses Implementasi
Sistem IPBicycle bekerja dengan sistem kepala cabang dan penanggung jawab. Kepala cabang memiliki akses untuk data mahasiswa, data transaksi, data lokasi, dan data penanggung jawab. Namun, kepala cabang tidak dapat melakukan input transaksi. Penanggung jawab harus login dengan username dan password yang sudah diinput oleh kepala cabang. Penanggung jawab memiliki akses untuk data mahasiswa, data transaksi, dan data sepeda. Penanggung jawab tidak  memiliki akses untuk data penanggung jawab, baik datanya sendiri maupun penanggung jawab lain. Penanggung jawab dapat melakukan input peminjaman sepeda yang dilakukan mahasiswa di lokasi tempatnya bertugas. Penanggung jawab dapat mengupdate data sepeda, data mahasiswa dan transaksi peminjaman. Setelah penanggung jawab berhasil login, akan terdapat menu transaksi, data mahasiswa, data penanggung jawab, dan logout. Penanggung jawab dapat mencetak bukti transaksi untuk selanjutnya diberikan kepada mahasiswa. Penanggung jawab juga dapat melakukan pengembalian yang dilakukan mahasiswa di lokasi dia bekerja.
# Hasil Impelemntasi
Halaman Login
![implementasi login](https://user-images.githubusercontent.com/85139125/122188761-7b220c80-ceba-11eb-87c6-46b12c325572.jpeg)


Halaman Dashboard jika login sebagai kepala cabang
![dashboard pj](https://user-images.githubusercontent.com/85139125/122191121-a3ab0600-cebc-11eb-831d-50b56dce1cbc.jpeg)

Halaman data penanggung jawab jika login sebagai kepala cabang
![implementasi dashboard penanggung jawab](https://user-images.githubusercontent.com/85139125/122191820-42cffd80-cebd-11eb-8ae5-39bcd57fb562.jpeg)

Halaman tambah data PJ
![implementasi data pj](https://user-images.githubusercontent.com/85139125/122192286-b8d46480-cebd-11eb-8b06-87bca67a5037.jpeg)

Halaman data lokasi jika login sebagai kepala cabang
![WhatsApp Image 2021-06-16 at 16 15 25 (1)](https://user-images.githubusercontent.com/85139125/122192827-326c5280-cebe-11eb-9e4e-f14cac878d5d.jpeg)

Halaman tambah lokasi
![WhatsApp Image 2021-06-16 at 16 15 25](https://user-images.githubusercontent.com/85139125/122192799-2da79e80-cebe-11eb-9ec5-486cd9d8a5c5.jpeg)

Halaman dashboard jika login sebagai PJ
![dashboard pj ini](https://user-images.githubusercontent.com/85139125/122196463-757bf500-cec1-11eb-9241-07250346f5f5.jpeg)

Halaman tambah transaksi
![tambah transaksi](https://user-images.githubusercontent.com/85139125/122196031-128a5e00-cec1-11eb-80bb-469b9e183771.jpeg)

Halaman data sepeda jika login sebagai PJ
![data sepeda](https://user-images.githubusercontent.com/85139125/122195222-5cbf0f80-cec0-11eb-9b7a-2c59679d0332.jpeg)

Halaman tambah data sepeda
![tambah sepeda](https://user-images.githubusercontent.com/85139125/122195474-98f27000-cec0-11eb-9432-9f924d5f81fa.jpeg)

Halaman data mahasiswa jika login sebagai PJ




