<?php
class Order
{

    protected $db;

    public $name;
    public $surname = '';
    public $phonenumber = '';
    public $basket = '';
    public $deliverydate = '';
    public $deliverytime = '';
    /*
    public function __construct($order = array())
    {
        $this->name = $test;
   
        $this->name = $order['name'];
        $this->surname = $order['surname'];
        $this->phonenumber = $order['phonenumber'];
        $this->basket = $order['basket'];
        $this->deliverydate = $order['deliverydate'];
        $this->deliverytime = $order['deliverytime'];
      
    }
*/
    public function __construct($test)
    {
        $this->name = $test;
    }
    /*

    public function store()
    {
        $sql = "insert into orders (name, surname, phonenumber, basket, deliverydate, deliverytime) VALUES ('$this->name', '$this->surname', '$this->phonenumber', '$this->basket', '$this->deliverydate', '$this->deliverytime');";

        $this->db->query($sql);

        $this->db->close();
    }*/

    public function getTest()
    {
        return $this->name;
    }
}
