<?php
$mahasiswa = [
    [
    "nama" => "Rama Sadea Putra",
    "nim" => "233040122",
    "email" => "Rama@gmail.com",
    "jurusan" => "Teknik Informatika",
    "foto" => "img/doctor.jpg",
    ],
    [
      "nama" => "Ilona Aqila Zahra",
      "nim" => "233040127",
      "email" => "ilona@gmail.com",
      "jurusan" => "Teknik Informatika",
      "foto" => "img/doctor.jpg",
    ],
    [
      "nama" => "Raihan Azzani Helmawan",
      "nim" => "233040135",
      "email" => "Raihan@gmail.com",
      "jurusan" => "Teknik Informatika",
      "foto" => "img/doctor.jpg",
      ],
      [
        "nama" => "Azhar Muttaqien",
        "nim" => "233040126",
        "email" => "Azhar@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "img/doctor.jpg",
        ],
        [
          "nama" => "Muhamad Akmal",
          "nim" => "233040166",
          "email" => "Akmal@gmail.com",
          "jurusan" => "Teknik Informatika",
          "foto" => "img/doctor.jpg",
          ],
          [
            "nama" => "Muahamad Yafi",
            "nim" => "233040113",
            "email" => "Yafi@gmail.com",
            "jurusan" => "Teknik Informatika",
            "foto" => "img/doctor.jpg",
            ],
            [
              "nama" => "Radhia Majdi",
              "nim" => "233040128",
              "email" => "Radhia@gmail.com",
              "jurusan" => "Teknik Informatika",
              "foto" => "img/doctor.jpg",
              ],
              [
                "nama" => "Fadhilah Aditya",
                "nim" => "233040122",
                "email" => "fadhil@gmail.com",
                "jurusan" => "Teknik Informatika",
                "foto" => "img/doctor.jpg",
                ],
                [
                  "nama" => "Fernanda Aminullah",
                  "nim" => "233040138",
                  "email" => "Fernanda@gmail.com",
                  "jurusan" => "Teknik Informatika",
                  "foto" => "img/doctor.jpg",
                  ],
                  [
                    "nama" => "M Farrel",
                    "nim" => "233040124",
                    "email" => "Farel@gmail.com",
                    "jurusan" => "Teknik Informatika",
                    "foto" => "img/doctor.jpg",
                    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<style>
  img{
    width: 10%;
  }
</style>

<body>

  <h1>Daftar Mahasiswa</h1>   


  
  <?php foreach($mahasiswa as $m) :?>
   
<ul>
<li>NAMA : <?= $m["nama"]; ?></li>
<li>NIM : <?= $m['nim']; ?></li>
<li>EMAIL : <?= $m['email']; ?></li>
<li>JURUSAN : <?= $m['jurusan']; ?></li>
<li>FOTO: <img src="<?= $m['foto']; ?>" alt=""></li>

</ul>


  <?php endforeach;?>

</body>
</html>