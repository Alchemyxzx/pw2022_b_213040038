<?php
// Superglobals
// variabel bawaan php yang bisa di akses di mana pun
// bentuk nya array associative
// 1. $_GET
// 2. $_POST
// 3. $_SERVER
// $_GET = [
//     'nama' => 'sandhika',
//     'email' => 'sandhika@gmail.com',
// ];
// $_GET['nama'] = 'sandhika';
// $_GET['email'] = 'sandhika@gmail.com';

// var_dump($_GET);

?>

<!-- <h1>Hallo, <?= $_GET['nama']; ?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Daffa&npm=213040038&email=daffaabdulfatah@gmail.com">Daffa</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=jauhari&npm=203040060&email=jauhari@gmail.com">Jauhari</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=paisal&npm=183040065&email=paisal@gmail.com">Paisal</a>
    </li>
</ul>