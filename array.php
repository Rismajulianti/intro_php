<?php
  //Product A, Product B, Product C

  $products = ["Buku", "Meja", "Lemari", 15];
  echo $products[1];

  echo "<br>";
  unset($products[1]);
  echo count($products);

  $products[1] = "HP";
  echo "<br>";
  echo $products[1];

  $products[] = "kecap";

  //indexed

  echo "<br>";
  var_dump($products);

  //Associative
  $manusia =[
    "nama" => "Budi",
    "umur" => 20,
    "alamat" => "jalan raya"
  ];

  echo "<br>";
  echo $manusia["nama"];

  $manusia["uang"] = 5000;

  echo "<br>";
  var_dump($manusia);
?>
