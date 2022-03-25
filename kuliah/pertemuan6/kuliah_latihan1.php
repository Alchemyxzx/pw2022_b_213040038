<?php
// array associative
// array yang indexnya berupa string, yang berassosiasi dengan nilainya
$mahasiswa = [
[
    "nama" => "Daffa abdul fatah",
    "npm" => "213040038",
    "email" => "daffaabdulfatah@gmail.com",
    "jurusan" => "Teknik Informatika"],
[
    "nama" => "Paisal ambari", 
    "npm" => "213040065", 
    "email" => "paisalambarim@gmail.com", 
    "jurusan" => "Teknik Informatika"],
[
    "nama" => "Audi Hezra", 
    "npm" => "213040066", 
    "email" => "audihezra@gmail.com", 
    "jurusan" => "Teknik Informatika"],
[
    "nama" => "Muhammad Jauhari", 
    "npm" => "213040060", 
    "email" => "jauhari@gmail.com", 
    "jurusan" => "Teknik Informatika"],

];

// var_dump($mahasiswa[1]["Email"]);
?>
<?php ?>

<?php foreach($mahasiswa as $mhs)  { ?>
<ul>
    <li>Nama: <?php echo $mhs["nama"] ?></li>
    <li>NPM: <?php echo $mhs["npm"] ?></li>
    <li>Email: <?php echo $mhs["email"] ?></li>
    <li>Jurusan: <?php echo $mhs["jurusan"]?></li>
</ul>
<?php } ?>