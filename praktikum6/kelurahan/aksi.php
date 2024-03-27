<?php
require_once('../dbkoneksi.php');

$nama = $_POST['nama'];
$kec_id = $_POST['kec_id'];
if (isset($_POST['type']) && $_POST['type'] == 'edit') {
    $id = $_POST['id'];
    $data = [$nama, $kec_id, $id];
    $sql = "UPDATE kelurahan SET nama = :nama, kec_id = :kec_id WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nama' => $nama, 'kec_id' => $kec_id, 'id' => $id]);

    header("Location: index.php");
} elseif ($_GET['delete']) {
    $id = $_GET['id'];
    $sql = "DELETE FROM kelurahan WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    header("Location: index.php");
} else {
    $sql = "INSERT INTO kelurahan (nama, kec_id) VALUES (:nama, :kec_id)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nama' => $nama, 'kec_id' => $kec_id]);
    header("Location: index.php");
}
