<section>
    <h1><?php echo $judul ?></h1>
    <p align='justify'>Pada pengertian CodeIgniter di atas tadi dijelaskan bahwa CodeIgniter menggunakan metode MVC. Apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar CodeIgniter.</p>
    <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view dan controller.</p>
    <ol type="a">
    <li>Model</li>
    <p align='justify'>model adalah kelas yang merepresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database. Seperti misalnya menganbil data dari database, menginput dan pengolahan database lainnya. Semua instruksi atau fungsi yang berhubungan dengan pengolahan database di letakan di dalam model. Sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek longkaran sebagai kelas model</p>
    <p align='justify'>Sebagai catatan, Semua model harus disimpan di dalam folder application\model</p>
    <li>View</li>
    <p align='justify'>View merukapakan bagian yang menangani halaman user intervace atau halaman di kumpulkan pada view untuk memisahkan dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website</p>
    <li>Controller</li>
    <p align='justify'>Controller merupakan kumpulan intrusi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara langsung, intinya data yang tersimpan di database (model) di ambil oleh controller dan kemudian controller pula yang menampilkannya ke view. Jadi controller lah yang mengolah instruksi</p>
    <p align='justify'>Dari penjelasan tentang model view dan controller di atas dapat di simpulkan bahwa yang menampilkan data dengan metode konsep mvc,controller memanggil instruksi pada model yang mengambil data pada database, kemudian controller yang meneruskannya pada vire untuk tampilan. dengan cara mvc ini karena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilan aplikasi, karena back-end developer yang menangani bagian controller dan modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat di lakukan dengan cepat dan terstruktur</p>
</section>