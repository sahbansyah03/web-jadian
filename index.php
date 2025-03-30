<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Hari Jadian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: url('foto/1.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #d63384;
            padding: 50px;
        }
        .container {
          max-width: 600px;
            margin: auto;
            background: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        input, button {
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #d63384;
        }
        .hidden {
            display: none;
        }
        .video-container {
            margin-top: 20px;
        }
        .photo-gallery {
            margin-top: 20px;
        }
        .photo-gallery img {
            width: 100px;
            height: auto;
            margin: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Hari Jadian! ❤️</h1>
        <p>Kapan dan di mana kita jadian? 🥰</p>
        <input type="date" id="tanggal">
        <input type="text" id="lokasi" placeholder="Masukkan lokasi">
        <button onclick="tampilkanUcapan()">Lihat Ucapan</button>
        
        <div id="ucapan" class="hidden">
            <h2>Selamat Hari Jadian, Sayang! 💖</h2>
            <p id="hasil"></p>
            <h3>Puisi Untukmu</h3>
            <p id="puisi"></p>
            <div class="video-container">
                <video width="50%" controls>
                    <source src="vidio/h1.mp4" type="video/mp4">
                    Browser Anda tidak mendukung video.
                </video>
            </div>
            <div class="photo-gallery">
                <h3>Kenangan Indah Kita 💕</h3>
                <img src="foto/1.jpg" alt="hehe">
                <img src="foto/2.jpg" alt="Foto Kenangan 2">
                <img src="foto/3.jpg" alt="Foto Kenangan 3">
                <img src="foto/4.jpg" alt="Foto Kenangan 4">
                <img src="foto/5.jpg" alt="Foto Kenangan 5">
                <img src="foto/6.jpg" alt="Foto Kenangan 6">
                <img src="foto/10.jpg" alt="Foto Kenangan 10">
                <img src="foto/11.jpg" alt="Foto Kenangan 11">
                <img src="foto/12.jpg" alt="Foto Kenangan 12">

                
                <p>Setiap momen bersamamu adalah anugerah yang tak ternilai. Aku bersyukur bisa bersamamu. 💖</p>
            </div>
        </div>
    </div>

    <script>
        function tampilkanUcapan() {
            let tanggal = document.getElementById("tanggal").value;
            let lokasi = document.getElementById("lokasi").value;
            let tanggalBenar = "2024-04-07"; // Ubah dengan tanggal yang benar
            let lokasiBenar = "medan"; // Ubah dengan lokasi yang benar

            if (tanggal === tanggalBenar && lokasi.toLowerCase() === lokasiBenar.toLowerCase()) {
                document.getElementById("hasil").innerHTML = 
                    `Kita telah bersama sejak <b>${tanggal}</b> di <b>${lokasi}</b>. Terima kasih telah menjadi bagian dari hidupku! ❤️`;
                document.getElementById("puisi").innerHTML = 
                    `Seperti bintang di langit yang tak pudar,<br>
                    Cintaku padamu terus berpendar.<br>
                    Setiap detik bersamamu sungguh indah,<br>
                    Cintaku tulus, tak akan berubah.`;
                document.getElementById("ucapan").classList.remove("hidden");
            } else {
                alert("Yah, kamu lupa kapan dan di mana tempat kita jadian huhu 😢. Coba ingat-ingat lagi ya, sayang! 💕");
            }
        }
    </script>
</body>
</html>
