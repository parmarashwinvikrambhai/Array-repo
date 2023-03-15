<?php 
class Invoice
{
  public $number;
  public $date;
  public function __construct($number,$date)
        {
                $this->number=$number;
                $this->date=$date;
        }
    }
?>