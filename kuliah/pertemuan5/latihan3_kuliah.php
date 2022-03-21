<?php
$mahasiswa = [
["Daffa Abdul Fatah", "213040038", "daffaabdulfatah@gmail.com", "Teknik Informatika"],
["Paisal Ambari", "213040065", "paisalambari@gmail.com", "Teknik Informatika"],
["Muhammad Jauhari", "213040060", "jauhari@gmail.com", "Teknik Informatika"],
["Juan Aditya", "213040053", "juanaditya@gmail.com", "Teknik Informatika"],
]
?>

<?php foreach($mahasiswa as $mhs)  { ?>
<ul>
    <li>Nama: <?php echo $mhs[0] ?></li>
    <li>NPM: <?php echo $mhs[1] ?></li>
    <li>Email: <?php echo $mhs[2] ?></li>
    <li>Jurusan: <?php echo $mhs[3]?></li>
</ul>
<?php } ?>