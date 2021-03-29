<?php
$host="tanulo2.szf1a.oktatas.szamalk-szalezi.hu";
$fnev="c1_tanulo2szf1a";
$jelszo="_tanulo2szf1a";
$adatbazis="c1ABtanulo2szf1a";
$kapcsolat = new mysqli($host,$fnev,$jelszo,$adatbazis);

// Check connection
if ($kapcsolat -> connect_errno) {
  echo "Sikertelen az adabtbázishoz való kapcsolodás " . $mysqli -> connect_error;
  exit();
}

