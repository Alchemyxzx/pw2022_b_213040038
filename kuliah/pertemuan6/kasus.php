<?php 
$laptop = [
    [
        "merk" => "Macbook",
        "type" => "Pro M1",
        "spek" => "APPLE M1 MAX CHIP (CPU 10-CORE, GPU 32-CORE), SSD 1 TB, Ram 16 GB" ,
        "harga" => "IDR 55.499.000",
        "sistemoperasi" => "Mac os",
        "gambar" => "laptop1.jpg",
    ],
    [
        "merk" => "ASUS ROG",
        "type" => "Zephyrus Duo 15 SE GX551 GX551QS-R938E9T-O",
        "spek" => "AMD Ryzen™ 9 5980HX, GPU RTX 3080, Ram 16Gb, 1TB + 1TB M.2 NVMe™ PCIe, " ,
        "harga" => "IDR 78.800.000",
        "sistemoperasi" => "Windows",
        "gambar" => "laptop2.jpg",
    ],
    [
        "merk" => "MSI",
        "type" => "GE76 Raider",
        "spek" => "Intel Core i9-11980HK, GPU RTX 3080, Ram 32Gb, 2 TB SSD PCIe 4.0 NVMe, " ,
        "harga" => "IDR 71.999.000",
        "sistemoperasi" => "Windows",
        "gambar" => "laptop3.jpg",
    ],

];
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Daftar Laptop Recomended</title>
 </head>
 <body>
     <h1>Daftar Laptop Recomended</h1>

     <?php foreach($laptop as $l) :?>
     <ul>
         <li>
             <img src="img/<?=$l["gambar"]; ?>" width="200">
         </li>
         <li>Merk :<?= $l["merk"]; ?></li>
         <li>Type :<?= $l["type"]; ?></li>
         <li>Spesifikasi :<?= $l["spek"]; ?></li>
         <li>Sistem Operasi :<?= $l["sistemoperasi"]; ?></li>
         <li>Harga :<?= $l["harga"]; ?></li>
     </ul>
     <?php endforeach ; ?>
 </body>
 </html>