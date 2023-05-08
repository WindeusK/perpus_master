# Perpus Master

Website project admin perpus untuk keperluan ujian. Dibuat oleh Raynaldo Winson A.K. Ditulis menggunakan bahasa HTML dan PHP, serta dijalankan menggunakan XAMPP. 

## Syarat Database

- Harus dapat melakukan operasi CRUD
- Menggunakan relational database
- Database mengandung minimal 3 tabel

## Cara menggunakan website ini

- Pertama-tama download repository ini.
- Letakkan hasil download di lokasi folder ```C:/xampp/htdocs```
- Hidupkan XAMPP. Nyalakan semua fitur yang tersedia. Jika tidak bisa, maka cukup nyalakan Apache dan MySQL saja.
- Buka browser anda lalu ketik ```localhost:8080/perpus_master/main.php```
## Struktur Database

Sebelum memulai menggunakan website diperlukan persiapan berupa pembuatan database di XAMPP terlebih dahulu. Dengan mengakses link di [sini](localhost:8080/phpmyadmin) (jika menggunakan XAMPP versi terbaru).

Database akan diberi nama ```perpus_master```. Berikut adalah daftar tabel beserta kolomnya.

**Note: Kecuali dinyatakan sebaliknya, kolom tanpa keterangan lanjut adalah bersifat ```NOT NULL``` alias tidak boleh kosong.**

1. Tabel ```member```

    - ```id_member``` (Integer) ***(Primary Key)***
    - ```nama``` (String)
    - ```email``` (String) 
    - ```no_telp``` (String) (Null)

2. Tabel ```buku```
    - ```id_buku``` (Integer) ***(Primary Key)***
    - ```isbn``` (String) *(Alternate Key)*
    - ```judul```  (String) *(Alternate Key)*
    - ```genre``` (String) (Null)
    - ```desc``` (String) (Null)
    - ```umur``` (String) (Null)

3. Tabel ```peminjaman```
    - ```id_pinjam``` (Integer) ***(Primary Key)***
    - ```id_member``` (Integer) ***(Foreign Key***```@member```***)***
    - ```id_buku``` (Integer) ***(Foreign Key***```@buku```***)***  
    - ```nama``` (String) ***(Foreign Key***```@member```***)***  
    - ```judul``` (String) ***(Foreign Key***```@buku```***)***
    - ```tgl_pinjam``` (Date)
    - ```bts_pinjam``` (Date) (Null)

Untuk semua Primary Key menggunakan sistem ```auto increment```. 
