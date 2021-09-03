<?php

class Test extends Dbh
{

    public function getOrders()
    {
        $sql = "SELECT * FROM orders";
        $statement = $this->connect()->query($sql);

        while ($row = $statement->fetch()) {
            echo $row['basket_type'] . '<br>';
        }
    }

    public function getOrdersStatement($basketType)
    {
        $sql = "SELECT * FROM orders WHERE basket_type = ?";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$basketType]);
        $orders = $statement->fetchAll();

        foreach ($orders as $order) {
            echo $order['basket_type'] . '<br>';
        }
    }

    public function setOrdersStatement($basketType)
    {
        $sql = "INSERT INTO orders(basket_type) VALUES (?)";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$basketType]);
    }
}
