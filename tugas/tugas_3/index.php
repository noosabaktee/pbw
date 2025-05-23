<html>
<head>
    <title>Halaman Website Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include '../../header.php' ?>
    <header>
        <h1>Selamat Datang di Website Sederhana</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>
    
    <div class="container">
        <section class="content">
            <h2>Formulir Pendaftaran</h2>
            <p>Silakan isi formulir di bawah ini untuk mendaftar.</p>
            <form>
                <label>Nama Lengkap:</label>
                <input type="text" name="nama" required>
                
                <label>Email:</label>
                <input type="email" name="email" required>
                
                <label>Password:</label>
                <input type="password" name="password" required>
                
                <label>Jenis Kelamin:</label>
                <input type="radio" name="gender" value="Laki-laki"> Laki-laki
                <input type="radio" name="gender" value="Perempuan"> Perempuan
                
                <label>Hobi:</label>
                <input type="checkbox" name="hobi" value="Musik"> Musik
                <input type="checkbox" name="hobi" value="Olahraga"> Olahraga
                <input type="checkbox" name="hobi" value="Membaca"> Membaca
                
                <label>Pilih Kota:</label>
                <select name="kota">
                    <option>Jakarta</option>
                    <option>Bandung</option>
                    <option>Surabaya</option>
                </select>
                
                <label>Pesan Tambahan:</label>
                <textarea placeholder="Tulis pesan di sini..."></textarea>
                
                <button class="btn" type="submit">Kirim</button>
            </form>
        </section>
        <aside class="sidebar">
            <h2>Sidebar</h2>
            <p>Bagian sidebar dapat berisi tautan, iklan, atau informasi tambahan.</p>
        </aside>
    </div>
    
    <footer>
        <p>&copy; 2024 Website Sederhana. Dibuat dengan HTML & CSS.</p>
    </footer>
</body>
</html>
