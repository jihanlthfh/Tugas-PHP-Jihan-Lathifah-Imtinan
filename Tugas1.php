<!DOCTYPE html>
<html>
<head>
    <title>Tugas Struktur Kendali dan Form</title>
</head>
<body>
    <h2>Form Input Nilai Ujian</h2>
    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Nilai Ujian:</label><br>
        <input type="number" name="nilai" required><br><br>

        <input type="submit" name="submit" value="Cek Hasil">
    </form>

    <hr>

    <?php
    // Mengecek apakah tombol submit sudah diklik 
    if (isset($_POST['submit'])) {
        // Mengambil data dari form menggunakan metode POST 
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nilai = $_POST['nilai'];

        // Struktur Kendali: Implementasi If-Else [cite: 5, 6]
        if ($nilai > 70) {
            $status = "Lulus";
        } else {
            $status = "Remedial";
        }

        // Menampilkan output ke browser 
        echo "<h3>Hasil Kelulusan:</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Nilai: " . $nilai . "<br>";
        echo "Status: <b>" . $status . "</b>";
    }
    ?>
</body>
</html>