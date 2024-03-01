<?php
if (isset($_REQUEST['submit'])) {
    $nama = $_REQUEST['nama'];
    $matakuliah = $_REQUEST['matakuliah'];
    $nilai_uts = $_REQUEST['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $nilai_tugas = $_GET['nilai_tugas'];

    echo "Nama : $nama <br>";
    echo "Mata Kuliah : $matakuliah <br>";
    echo "Nilai UTS : $nilai_uts <br>";
    echo "Nilai UAS : $nilai_uas <br>";
    echo "Nilai Tugas : $nilai_tugas <br>";
} else {
    echo "<script>alert('Kamu harus isi form terlebih dahulu!')</script>";
    echo '<meta http-equiv="refresh" content="0; url=form.php">';
}
?>
