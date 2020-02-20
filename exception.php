<?php
  $uang_budi = 5000;

  $uang_makan = 500;
  $ongkos_pulang = 4000;

  try{
    if($uang_makan + $ongkos_pulang > $uang_budi) {
      throw new Exception("Uang budi Kurang!");
    }else{
      $uang_budi -= $uang_makan;
      //$uang_budi =$uang budi - $uang_makan;
    }
    echo "Budi Sudah makan siang";
  }catch(Exception $err){
    echo $err ->getMessage();
  }finally{
    $uang_budi -=$ongkos_pulang;
  }

  echo "Budi Sudah sampai dirumah dengan sisa uang : $uang_budi";
?>
