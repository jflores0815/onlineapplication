<?php

    

    class Order {

        

        private $conn;

        private $table_name = "orders";

        

        public $id;

        public $transaction_no;

        public $client;

        public $product;

        public $product_id;

        public $order_date;

        public $quantity;

        public $status;

        

        public function __construct($db) {

            $this->conn = $db;

        }

        

        function read() {

            

            $query = "SELECT o.id, o.transaction_no, c.last_name || ', ' || c.first_name as client, 

                             p.name, o.order_date, o.quantity, o.status 

                      FROM " . $this->table_name . " o, tbl_candidates c, job_ads p 

                      WHERE o.tbl_candidates_id = c.id 

                      AND o.job_id = p.id";

            

            $stmt = $this->conn->prepare($query);

            

            $stmt->execute();

            

            return $stmt;

            

        }

        

    }



?>