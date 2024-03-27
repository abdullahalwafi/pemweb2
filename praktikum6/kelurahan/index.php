<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kecamatan ID</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once('../dbkoneksi.php');
                $sql = "SELECT * FROM kelurahan";
                $query = $pdo->query($sql);
                $nomor = 1;
                foreach ($query as $row) { ?>
                    <tr>
                        <td><?= $nomor++ ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['kec_id'] ?></td>
                        <td>
                            <a href="form.php?id=<?= $row['id'] ?>type=edit">edit</a>
                            <a href="delete.php?id=<?= $row['id'] ?>">delete</a>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>