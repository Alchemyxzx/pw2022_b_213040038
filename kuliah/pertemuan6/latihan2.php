<?php 
// $mahasiswa = [
//     ["Daffa Abdul Fatah", "213040038", "daffaabdulfatah@gmail.com", "Teknik Informatika"],
//     ["213040065", "Paisal Ambari", "paisalambari@gmail.com", "Teknik Informatika"]
//     ];

// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nrp" => "213040038",
        "nama" => "Daffa Abdul Fatah",
        "email" => "daffaabdulfatah@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "img1.png"
    ],
    [
        "nama" => "Paisal Ambari",
        "nrp" => "213040065",
        "email" => "paisalambari@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "img2.png"
    ]
];
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Daftar Mahasiswa</title>
 </head>
 <body>
     <h1>Daftar Mahasiswa</h1>

     <?php foreach($mahasiswa as $mhs) :?>
     <ul>
         <li>
             <img src="img/<?=$mhs["gambar"]; ?>">
         </li>
         <li>Nama :<?php echo $mhs["nama"]; ?></li>
         <li>NPM :<?php echo $mhs["nrp"]; ?></li>
         <li>Email :<?php echo $mhs["email"]; ?></li>
         <li>Jurusan :<?php echo $mhs["jurusan"]; ?></li>
     </ul>
     <?php endforeach ; ?>
 </body>
 </html>