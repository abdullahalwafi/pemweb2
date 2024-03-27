<?php
require_once('../dbkoneksi.php');
$nama = "";
$kec_id = "";
$type = "";
if (isset($_GET['type']) && $_GET['type'] == 'edit') {
    $id = $_GET['id'];
    $sql = "SELECT * FROM kelurahan WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $row = $stmt->fetch();
    $nama = $row['nama'];
    $kec_id = $row['kec_id'];
    $type = 'edit';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form kelurahan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container py-3">
        <h3>Form kelurahan</h3>
        <form action="aksi.php" method="post">
            <div class="form-group mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="kec_id">Kec_id</label>
                <input type="number" class="form-control" id="kec_id" name="kec_id" value="<?= $kec_id ?>" required>
            </div>
            <?php 
            if (isset($_GET['id'])) {?>
                <input type="hidden" name="id" value="<?= $_GET['id']?>">
            <?php }
            ?>
            <input type="hidden" name="type" value="<?= $type ?>">
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </form>
    </div>
</body>

</html>