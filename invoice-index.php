<?php

require_once('./Database/dbtransaction.php');
require_once('ind_invoice.php');

$invo=new Invoice(10010,9/3/2000);
$sql="insert into invoice(invoice_number,invoice_date) VALUES (:invoice_number,:invoice_date)";
$data=[
   'invoice_number'=>$invo->number,
   'invoice_date'=>$invo->date,
];
$db=new DBTransaction();
$db->insertTransaction($sql, $data);
echo "inserted succesfully";
?>