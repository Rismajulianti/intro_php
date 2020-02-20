<?php
  $nilai = 20;
  if($nilai > 60){
    echo "Anda sudah lulus";
  }
elseif ($nilai ==0) {
  echo "Anda tidak mengerjakan Ujian";
}
  else{
      echo "Anda tidak lulus semanggat belajar kembali";
  }

  echo "<br>";

  $warna_lampu = "hitam";

  switch($warna_lampu){
    case "merah";
    //Statement
      echo "berenti";
      break;
    case "kuning":
      echo "Hati Hati";
      break;
      case "hijau";
      echo "jalan";
      break;
    default:
    echo "lampu tidak jelas";
  }
  ?>
