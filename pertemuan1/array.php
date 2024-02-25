<?php
$ar_array = array("Budi", "Andi", "Caca");
$ar_array2 = ["Budi", "Andi", "Caca"];
print_r($ar_array);
echo "<br>";
echo $ar_array[1];
echo "<br>";
foreach ($ar_array as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}
echo "jumlah data dalam array adalah " . count($ar_array);
echo "<br>";

// menambahkan array
$ar_array[] = "Dedi";
// menghapus array
// unset($ar_array[1]);
print_r($ar_array);
// mengurutkan array
sort($ar_array);
echo "<br>";
print_r($ar_array);
echo "<br>";
// menghapus array terakhir
array_pop($ar_array);
print_r($ar_array);
echo "<br>";
// menambahkan array menggunakan push
array_push($ar_array, "Lia");
print_r($ar_array);

// function shift untuk menghapus value array pertama
echo "<br>";
array_shift($ar_array);
print_r($ar_array);
echo "<br>";

// function unshift untuk menambahkan value array pertama
array_unshift($ar_array, "wafi");
print_r($ar_array);

// array associative
$buah_buahan = [
    "apel" => "merah",
    "jeruk" => "orange",
    "nanas" => "kuning"
];

echo "<br>";
foreach ($buah_buahan as $buah) {
    echo $buah . "<br>";
}

// array multidemensi
$siswa = [
  [
    "nama" => "Budi",
    "kelas" => "XII",
    "alamat" => "Jakarta"
  ],
  [
    "nama" => "Andi",
    "kelas" => "XII",
    "alamat" => "Jakarta"
  ],
  [
    "nama" => "Caca",
    "kelas" => "XII",
    "alamat" => "Jakarta"
  ]
];
echo "<br>";
foreach ($siswa as $row) {
    echo "nama : " . $row['nama'] . "<br>";
    echo "kelas : " . $row['kelas'] . "<br>";
    echo "alamat : " . $row['alamat'] . "<br>";
}