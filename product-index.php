<?php

require_once("./Database/dbtransaction.php");
require_once("ind_product.php");


$prod=new Product('Rice',2,3000);

// $sql = "DELETE FROM product
//         WHERE id > :id";
// $sql="insert into product(name,qty,price) VALUES (:name,:qty,:price)";
// $data=[

//    'name'=>$prod->name,
//    'qty'=>$prod->qty,
//    'price'=>$prod->price, 
// ];

$db=new DBTransaction();
//$db->deleteTransaction($sql);
//$db->insertTransaction($sql, $data);
//echo "inserted succesfully";



?>