<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "tugasweb_kelas_vii";
   $db = mysql_connect($hostname, $username, $password) or die ('Koneksi Gagal! ');
   mysql_select_db($dbname);
?>