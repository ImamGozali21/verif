<?php include 'koneksi.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM buku WHERE id=$id");
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Buku</h2>
    <form method="post">
        Judul: <input type="text" name="judul" value="<?= $data['judul'] ?>" required><br><br>
        Penulis: <input type="text" name="penulis" value="<?= $data['penulis'] ?>" required><br><br>
        <input type="submit" name="update" value="Update">
    </form>

    <?php
    if (isset($_POST['update'])) {
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $conn->query("UPDATE buku SET judul='$judul', penulis='$penulis' WHERE id=$id");
        header("Location: index.php");
    }
    ?>
</body>
</html>
