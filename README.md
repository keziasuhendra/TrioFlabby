# Tugas 1 IF3110 Pengembangan Aplikasi Berbasis Web

Membuat sebuah Website Ojek Online

## Deskripsi Singkat

Pada tugas besar ini, Anda diminta untuk membuat aplikasi *ojek online* **berbasis web** yang memungkinkan seorang pengguna untuk menjadi penumpang dan/atau driver ojek online. Untuk menggunakan aplikasi ini, seorang pengguna harus melakukan login. Pengguna dapat menjadi penumpang maupun driver pada akun yang sama. Untuk menjadi driver, pengguna harus mengaktifkan opsi menjadi driver pada profilnya.

Anda diminta untuk membuat tampilan sedemikian hingga mirip dengan tampilan pada contoh. Website yang diminta tidak responsive. Desain tampilan tidak perlu dibuat indah. Icon dan jenis font tidak harus sama dengan contoh. Warna font, garis pemisah, dan perbedaan ukuran font harus terlihat sesuai contoh. Format rating dan waktu harus terlihat sesuai contoh. Perhatikan juga **tata letak** elemen-elemen.

## Anggota Tim

Setiap kelompok beranggotakan **3 orang dari kelas yang sama**. Jika jumlah mahasiswa dalam satu kelas modulo 3 menghasilkan 1, maka hanya 1 kelompok terdiri dari 4 mahasiswa. Jika jumlah mahasiswa modulo 3 menghasilkan 2, maka ada dua kelompok yang beranggotakan 4 orang.

## Petunjuk Pengerjaan

1. Buatlah organisasi pada gitlab dengan format "IF3110-2017-KXX-nama kelompok", dengan XX adalah nomor kelas.
2. Tambahkan anggota tim pada organisasi anda.
3. Fork pada repository ini dengan organisasi yang telah dibuat.
4. Ubah hak akses repository hasil Fork anda menjadi **private**.
5. Silakan commit pada repository anda (hasil fork). Lakukan berberapa commit dengan pesan yang bermakna, contoh: `add register form`, `fix logout bug`, jangan seperti `final`, `benerin dikit`. Disarankan untuk tidak melakukan commit dengan perubahan yang besar karena akan mempengaruhi penilaian (contoh: hanya melakukan satu commit kemudian dikumpulkan). Sebaiknya commit dilakukan setiap ada penambahan fitur. **Commit dari setiap anggota tim akan mempengaruhi penilaian.** Jadi, setiap anggota tim harus melakukan commit yang berpengaruh terhadap proses pembuatan aplikasi.
6. Edit file readme ini semenarik mungkin (gunakan panduan Markdown language), diperbolehkan untuk merubah struktur dari readme ini. (Soal tidak perlu dipertahankan).
7. Pada Readme terdapat tampilan aplikasi, dokumentasi yang menjelaskan website yang Anda buat, dan penjelasan mengenai pembagian tugas masing-masing anggota (lihat formatnya pada bagian **pembagian tugas**).
8. Merge request dari repository anda ke repository ini dengan format **Nama kelompok** - **NIM terkecil** - **Nama Lengkap dengan NIM terkecil** sebelum **7 Oktober 2017 23.59**.

## Tools

1. Untuk backend, wajib menggunakan **PHP** tanpa framework apapun. Harap diperhatikan, Anda harus mengimplementasikan fitur menggunakan HTTP method yang tepat.
2. Gunakan **MySQL** untuk menyimpan data.
3. Untuk frontend, gunakan Javascript, HTML dan CSS. **Tidak boleh** menggunakan library atau framework CSS atau JS seperti JQuery atau Bootstrap. CSS sebisa mungkin ada di file yang berbeda dengan PHP (tidak inline styling).

## Spesifikasi

### Login

![](mocks/login.PNG)

Pengguna dapat melakukan login sebagai user. Login hanya membandingkan username dan password saja, dan tidak perlu proteksi apapun. Halaman ini merupakan halaman pertama yang dibuka oleh pengguna ketika menjalankan aplikasi. Tidak ada proses otentikasi apakah pengguna sudah login atau belum dalam page lainnya. Identitas pengguna yang sedang login diberikan melalui HTTP GET pada URL (sebagai contoh: /profile.php?id_active=2 menandakan bahwa pengguna yang sedang login memiliki id pengguna = 2).

### Register

![](mocks/register.PNG)

Pengguna dapat mendaftarkan diri sebagai user agar dapat menggunakan aplikasi ini. Satu user akan memiliki satu akun yang dapat digunakan sebagai penumpang maupun sebagai driver. User disediakan opsi untuk memilih apakah dia mau menjadi driver atau tidak saat registrasi. Anda harus melakukan validasi bahwa email dan username yang sama tidak boleh digunakan untuk dua kali mendaftar. **Validasi email dan username dilakukan menggunakan AJAX**. Jika email dan username valid akan ditandai dengan lambang centang seperti pada gambar. Setelah selesai register, jika pengguna tidak memilih opsi untuk menjadi driver, pengguna otomatis masuk ke halaman Order dengan keadaan sudah login. Jika pengguna memilih opsi menjadi driver, pengguna otomatis masuk ke halaman Profile dengan keadaan sudah login.

### Profile

![](mocks/profile.PNG)

Pada halaman ini, ditampilkan username, nama lengkap, email, dan nomor HP. Selain itu, ditampilkan keterangan apakah pengguna merupakan driver atau bukan. Jika pengguna merupakan driver, ditampilkan tulisan Driver diikuti rating dan jumlah vote seperti terlihat pada gambar. Jika pengguna bukan driver, ditampilkan tulisan Non-Driver, tanpa diikuti rating. Pada bagian kanan atas, terdapat tombol edit, jika pengguna menekan tombol tersebut, pengguna dibawa ke halaman Edit-Profile.

Pada bagian bawah, terdapat Preferred Location, yang berisi daftar lokasi yang dilayani pengguna jika berperan sebagai driver. Bagian ini ditampilkan jika pengguna merupakan driver. Pada bagian kanan atas, terdapat tombol edit, jika pengguna menekan tombol tersebut, pengguna dibawa ke halaman Edit-Preferred-Location.

### Edit-Profile

![](mocks/edit-profile.PNG)

Pada halaman ini, pengguna dapat mengedit nama yang ditampilkan, nomor telepon, foto, dan status driver.

Status driver berupa tombol Yes/No yang dapat diklik oleh pengguna untuk mengganti. Tombol Yes/No dapat berupa sekedar tulisan Yes dan No yang berubah saat ditekan. Pada saat tombol Yes/No ditekan, page tidak boleh refresh. Tulisan Yes dan No harus berbeda warna.

**Bonus** Tombol Yes/No diimplementasikan seperti pada gambar, berupa semacam toggle yang akan berubah bentuk dan warna saat ditekan. Tombol Yes/No tersebut harus diimplementasikan dengan HTML dan CSS, **tidak boleh menggunakan image**.

Pada bagian bawah halaman, terdapat tombol Back dan Save. Jika tombol Back ditekan, pengguna kembali ke halaman Profile. Jika tombol tersebut ditekan, nama dan nomor telepon pengguna akan diganti sesuai input field. Setelah tombol save ditekan, pengguna dibawa ke halaman Profile.

### Edit-Preferred-Location

![](mocks/edit-preferred-location.PNG)

Pada Edit-Preferred-Location, ditampilkan lokasi-lokasi yang dapat dicapai jika menjadi driver. Pada tiap baris lokasi, ada tombol Delete. Jika tombol tersebut ditekan, akan tampil konfirmasi untuk delete, menggunakan Javascript. Setelah Delete, halaman akan refresh.

Pada bagian Add New Location, terdapat sebuah text area dan sebuah tombol Add. Pada text area, pengguna dapat mengisikan lokasi untuk ditambahkan. Ketika tombol Add ditekan, alamat tersebut ditambahkan pada preferred location pengguna, dan halaman refresh.

Jika tombol Back ditekan, pengguna dibawa kembali ke halaman Profile.

Catatan: Format alamat dibebaskan kepada mahasiswa.

**Bonus** Implementasikan edit preferred location, ketika tombol edit ditekan, cell yang bersangkutan berubah menjadi input field dan dapat diedit, dan tombol edit berubah menjadi tombol save. Jika tombol save ditekan, data diupdate dan halaman refresh.

### Order-Ojek

![](mocks/order-ojek.PNG)

Order-Ojek merupakan halaman utama yang ditampilkan ketika user telah login. Pada halaman Order-Ojek, terdapat sebuah form yang dapat diisi pengguna untuk melakukan order.

Perlu diperhatikan, tulisan di atas tombol logout memiliki format "Hi, username!". Selanjutnya, terdapat menu bar yang menampilkan 3 menu utama seperti pada gambar. Menu yang sedang dibuka diberikan warna background yang berbeda sebagai penanda halaman apa yang sedang dibuka pengguna.

Setelah pengguna mengisi field-field pada form order dan menekan tombol order, pengguna akan dibawa ke halaman Select-Driver. Perlu diperhatikan bahwa seluruh field wajib diisi, kecuali field "Preferred Driver". Pada field Preferred Driver, terdapat Placeholder "(optional)"

### Select-Driver

![](mocks/select-driver.PNG)

Pada halaman ini, ditampilkan driver-driver yang tersedia dan dapat mengambil order. Driver yang dapat mengambil order adalah pengguna yang menjadi driver, dan memiliki alamat asal *atau* alamat tujuan pada "Preferred Location"-nya.

Halaman ini terdiri atas dua bagian, yaitu "Preferred Driver" dan "Other Drivers". Bagian "Preferred Driver" akan terisi dengan driver-driver dengan nama yang diisikan pengguna pada field "Preferred Driver" saat melakukan order. Jika pengguna tidak mengisikan field "Preferred Driver" atau tidak ada driver dengan nama yang diisikan pada field "Preferred Driver", bagian Preferred Driver akan kosong.

Pada bagian "Other Drivers", ditampilkan seluruh driver yang dapat mengambil order tersebut.

Perlu diperhatikan, pada setiap driver, terdapat foto, nama, dan rating driver tersebut. Rating dituliskan dengan format: Rating rata-rata (jumlah orang yang memberikan rating).

Setelah memilih driver dan menekan tombol Confirm, pengguna dibawa ke halaman Complete-Order.

### Complete-Order

![](mocks/complete-order.PNG)

Pada halaman Complete-Order, akan ditampilkan informasi driver dan order, serta opsi untuk memberikan rating dan komentar. Setelah pengguna submit rating dan komentar untuk driver, pengguna dibawa ke halaman Order-Ojek.

Rating untuk driver berupa integer antara 1 sampai 5 (inklusif). Implementasi rating dibebaskan pada peserta.

**Bonus** Implementasikan rating sesuai gambar.

### History

![](mocks/history-penumpang.PNG)

![](mocks/history-driver.PNG)

Pada halaman history, terdapat dua tab, yaitu History Penumpang dan History Driver. History Penumpang menampilkan daftar order yang pernah diambil pengguna sebagai penumpang, dan History Driver menampilkan daftar order yang pernah diambil pengguna sebagai driver.

Pada tiap entri pada history, terdapat tombol hide. Jika tombol hide ditekan, history yang bersangkutan tidak akan ditampilkan, tapi tidak dihapus.

### Validasi

Validasi **wajib** dilakukan pada *client-side*, dengan menggunakan **javascript** bukan HTML 5 input type, yaitu:
- Setiap field pada form tidak boleh kosong. Termasuk juga gambar barang ketika add product. Kecuali untuk Preferred Driver saat Order-Ojek.
- Email harus sesuai format email.
- Rating driver merupakan rata-rata dari semua rating yang diberikan pengguna.
- Nama pengguna maksimal 20 karakter.
- Nomor telepon pengguna minimal 9 digit dan maksimal 12 digit.

## Knowledge

Untuk meringankan beban tugas ini, ada berberapa keyword yang bisa anda cari untuk menyelesaikan tugas ini.
- HTTP methods: get, post, put, delete
- CSS: margin, padding, header tag, font-size, text-align, float, clear, border, color, div, span, placeholder, anchor tag.
- Javascript : XMLHTTPRequest.
- PHP: mysqli_connect, mysql_query, $_GET, $_POST, var_dump, print_r, echo, require, fungsi header.
- SQL query: SELECT, INSERT, UPDATE, DELETE, WHERE, operator LIKE.
Jika ada pertanyaan silakan tanyakan lewat milis.

### Pembagian Tugas
*Disarankan semua anggota kelompok mengerjakan tampilan dan fungsionalitasnya. Bukan hanya tampilan atau fungsionalitasnya saja*

**Tampilan**
1. Login : 1351xxxx, 135xxxxx
2. Register : 135xxxxx
3. Lanjutkan ...

**Fungsionalitas**
1. Login : 135xxxxx, 135xxxxx
2. Register : 135xxxxx
3. Fungsionalitas : 135xxxxx,135xxxxx
4. Lanjutkan...

## About

Asisten IF3110 2016

Ade | Johan | Kristianto | Micky | Michael | Rangga | Raudi | Robert | Sashi 

Dosen : Yudistira Dwi Wardhana | Riza Satria Perdana | Muhammad Zuhri Catur Candra


