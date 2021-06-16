# IPBicycle 
![IPB CYCLE LOGO](https://user-images.githubusercontent.com/85139125/122133039-2fde0e80-ce66-11eb-85b4-5e07b7823a58.png)
IPBicycle merupakan website yang digunakan untuk manajemen data peminjaman sepeda di IPB
# Kelompok 5 (P3)
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





