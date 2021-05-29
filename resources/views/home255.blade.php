<!DOCTYPE HTML>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "soal1";

$link = mysqli_connect($servername, $username, $password, $dbname);
if (!$link){
        die("Connection Failed:".mysqli_connect_error());
    }
?>

<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>anggota_id</th>
            <th>anggota_nama</th>
            <th>anggota_alamat</th>
            <th>anggota_jk</th>
            <th>anggota_telp</th>
        </tr>
        <?php

$q = $link->query("select * from anggota");  
    while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
        echo "<tr>";
        echo "<th><b>".$r['anggota_id']."</b></th>";
        echo "<th><b>".$r['anggota_nama']."</b></th>";
        echo "<th><b>".$r['anggota_alamat']."</b></th>";  
        echo "<th><b>".$r['anggota_jk']."</b></th>";
        echo "<th><b>".$r['anggota_telp']."</b></th>";         
?>   
    
    </tr>
    </center>

    <?php } ?>


    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "soal1";

$link = mysqli_connect($servername, $username, $password, $dbname);
if (!$link){
        die("Connection Failed:".mysqli_connect_error());
    }
?>

<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>anggota_id</th>
            <th>anggota_nama</th>
            <th>anggota_alamat</th>
            <th>anggota_jk</th>
            <th>anggota_telp</th>
        </tr>
        <?php

$q = $link->query("select * from anggota WHERE anggota_telp LIKE '22222%'"); 
    while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
        echo "<tr>";
        echo "<th><b>".$r['anggota_id']."</b></th>";
        echo "<th><b>".$r['anggota_nama']."</b></th>";
        echo "<th><b>".$r['anggota_alamat']."</b></th>";  
        echo "<th><b>".$r['anggota_jk']."</b></th>";
        echo "<th><b>".$r['anggota_telp']."</b></th>";         
?>   
    
    </tr>
    </center>

    <?php } ?>

<table>
<form>

