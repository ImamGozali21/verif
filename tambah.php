<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h2>Tambah Buku</h2>
    <form method="post" action="">
        Judul: <input type="text" name="judul" required><br><br>
        Penulis: <input type="text" name="penulis" required><br><br>
        <input type="submit" name="simpan" value="Simpan">
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $conn->query("INSERT INTO buku (judul, penulis) VALUES ('$judul', '$penulis')");
        header("Location: index.php");
    }
    ?>
</body>
</html>
