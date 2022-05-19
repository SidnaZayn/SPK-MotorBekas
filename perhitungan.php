<?php
error_reporting(0);
$kilometer  = $_POST['kilometer'];
$bodi = $_POST['bodi'];

if ($kilometer <= 0 || $bodi <= 0) {
  $l = "";
} else {
  //kilometer (satuan = KM)
  //kilometer Kurang
  if ($kilometer <= 5000) {
    $kilometerKurang = 0;
  } else if ($kilometer > 5000 && $kilometer <= 20000) {
    $kilometerKurang = 0;
  } else if ($kilometer > 20000 && $kilometer <= 35000) {
    $kilometerKurang = ($kilometer - 20000) / (15000);
  } else {
    $kilometerKurang = 1;
  }
  //kilometer Cukup
  if ($kilometer <= 10000) {
    $kilometerCukup = 0;
  } else if ($kilometer > 10000 && $kilometer <= 20000) {
    $kilometerCukup = ($kilometer - 10000) / (10000);
  } else if ($kilometer > 20000 && $kilometer < 30000) {
    $kilometerCukup = (30000 - $kilometer) / (10000);
  } else {
    $kilometerCukup = 0;
  }

  //kilometer Baik
  if ($kilometer <= 5000) {
    $kilometerBaik = 1;
  } else if ($kilometer > 5000 && $kilometer < 20000) {
    $kilometerBaik = (20000 - $kilometer) / (15000);
  } else {
    $kilometerBaik = 0;
  }


  //bodi (satuan = %)
  //bodi Baik
  if ($bodi <= 40) {
    $bodiBaik = 0;
  } else if ($bodi > 40 && $bodi <= 80) {
    $bodiBaik = ($bodi - 40) / (40);
  } else {
    $bodiBaik = 1;
  }


  //bodi Kurang
  if ($bodi <= 20) {
    $bodiKurang = 1;
  } else if ($bodi > 20 && $bodi <= 60) {
    $bodiKurang = (60 - $bodi) / (40);
  } else {
    $bodiKurang = 0;
  }

  $l1 = 0;
  $l2 = 0;
  $l3 = 0;
  $l4 = 0;
  $l5 = 0;
  $l6 = 0;

  $R1 = min($kilometerKurang, $bodiKurang); //maka tidak Layak
  $l1 = 80 - (40 * $R1);

  $R2 = min($kilometerKurang, $bodiBaik); //maka tidak Layak
  $l2 = 80 - (40 * $R2);

  $R3 = min($kilometerCukup, $bodiKurang); //maka tidak Layak
  $l3 = 80 - (40 * $R3);

  $R4 = min($kilometerCukup, $bodiBaik); //maka Layak
  $l4 = 40 + $R4 * 40;

  $R5 = min($kilometerBaik, $bodiKurang); //maka Layak
  $l5 = 40 + $R5 * 40;

  $R6 = min($kilometerBaik, $bodiBaik); //maka Layak
  $l6 = 40 + $R6 * 40;

  $total_RiZi = ($R1 * $l1) + ($R2 * $l2) + ($R3 * $l3) + ($R4 * $l4) + ($R5 * $l5) + ($R6 * $l6);
  $total_R = $R1 + $R2 + $R3 + $R4 + $R5 + $R6;
  $l = $total_RiZi / $total_R;

  $kelayakan = $l;
  if ($kelayakan <= 40) {
    $Layak = 0;
  } else if ($kelayakan > 40 && $kelayakan <= 80) {
    $Layak = ($kelayakan - 40) / (40);
  } else {
    $Layak = 1;
  }

  if ($kelayakan <= 40) {
    $tidak = 1;
  } else if ($kelayakan > 40 && $kelayakan <= 80) {
    $tidak = (80 - $kelayakan) / (40);
  } else {
    $tidak = 0;
  }
}
