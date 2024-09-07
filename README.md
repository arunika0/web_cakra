# Readme

## Langkah-langkah untuk menjalankan website

1. Ekstrak folder website ke dalam direktori `htdocs` di folder XAMPP.
2. Buka software XAMPP.
3. Jalankan Apache dengan mengklik tombol "Start" di sebelah kanan baris "Apache".
4. Jalankan MySQL dengan mengklik tombol "Start" di sebelah kanan baris "MySQL".
5. Jalankan Shell dengan mengklik tombol "Shell" di menu sebelah kanan.
6. Jalankan command dibawah di Shell untuk membuat database beserta kolom yang diperlukan website 
6.1 mysql -uroot -e "create database contact; use contact; create table form (name varchar(100), email varchar(100), message text);"
7. Setelah menjalankan Apache dan MySQL, Anda dapat mengakses website melalui browser dengan mengunjungi `http://localhost/nama_folder_website`.

## Informasi Tambahan

- Pastikan XAMPP telah terinstal dengan benar di komputer Anda sebelum melanjutkan.
- Jika belum install xampp dapat download melalui link berikut "https://www.apachefriends.org/download.html"
- Direktori `htdocs` biasanya terletak di `C:\xampp\htdocs` pada sistem Windows.
- Pastikan untuk mengganti `nama_folder_website` dengan nama folder yang sesuai dengan website yang Anda ekstrak ke `htdocs`.
