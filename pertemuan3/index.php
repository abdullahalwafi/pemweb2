<?php require_once('vendor/data.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prosesing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container p-4">
        <?php
        if (isset($_POST['nim'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $jeniskelamin = $_POST['jeniskelamin'];
            $programStudi = $_POST['programStudi'];
            $domisili = $_POST['domisili'];
        ?>
            <table class="table">
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?= $nim ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?= $nama ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $email ?></td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td><?= $jeniskelamin ?></td>
                </tr>
                <tr>
                    <td>Program studi</td>
                    <td>:</td>
                    <td><?= $programStudi ?></td>
                </tr>
                 <tr>
                <td>MySkill</td>
                <td>:</td>
                <td>
                    <?php
                    $point = 0;
                    if (isset($_POST['skills'])) {
                        foreach ($_POST['skills'] as $skill) {
                            foreach ($skills as $key => $value) {
                                if ($skill == $key) {
                                    $point += $value;
                                    echo $skill . ",";
                                }
                            }
                        }
                    }
                    ?>
                </td>
                </tr>
                <tr>
                    <td>Point Skill</td>
                    <td>:</td>
                    <td><?= $point ?></td>
                </tr>
                <tr>
                    <td>Domisili</td>
                    <td>:</td>
                    <td><?= $domisili ?></td>
                </tr>
            </table>
        <?php } else { ?>
            <form method="post">
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">NIM</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                            <input id="nim" name="nim" placeholder="masukan nim" type="number" class="form-control" required="required" autofocus>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="nama" name="nama" placeholder="masukan nama lengkap" type="text" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email Lengkap</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <input id="email" name="email" placeholder="masukan email lengkap" type="email" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jeniskelamin" class="col-4 col-form-label">Jenis kelamin</label>
                    <div class="col-8">
                        <input id="lakilaki" name="jeniskelamin" placeholder="masukan jeniskelamin lengkap" type="radio" value="Laki-laki" required="required">
                        <label for="lakilaki">Laki-laki</label>
                        <input id="perempuan" name="jeniskelamin" placeholder="masukan jeniskelamin lengkap" type="radio" value="Perempuan" required="required">
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="programStudi" class="col-4 col-form-label">Program Studi</label>
                    <div class="col-8">
                        <select id="programStudi" name="programStudi" class="form-control" required="required">
                            <option value="">~ pilih prodi ~</option>
                            <?php foreach ($prodi as $prodikey => $prodivalue) { ?>
                                <option value='<?= $prodikey ?>'><?= $prodivalue ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="skills" class="col-4 col-form-label">Skill Programming</label>
                    <div class="col-8">
                        <?php foreach ($skills as $skillkey => $skillvalue) { ?>
                            <input type="checkbox" name="skills[]" id="<?= $skillkey ?>" value="<?= $skillkey ?>">
                            <label for="<?= $skillkey ?>"><?= $skillkey ?></label>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="domisili" class="col-4 col-form-label">Domisili</label>
                    <div class="col-8">
                        <select id="domisili" name="domisili" class="form-control" required="required">
                            <option value="">~ pilih domisili ~</option>
                            <?php foreach ($domisili as $domisilikey => $domisilivalue) { ?>
                                <option value='<?= $domisilivalue ?>'><?= $domisilivalue ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
</body>

</html>