<?php

class Dbh {

    public function connect() {
        try {
            $username = "admin";
            $password = "admin";
            $dbh = new PDO('mysql:host=localhost;dbname=firstweb', $username, $password);
            echo "connected successfully";
            return $dbh;
            //'mysql: host=localhost;dbname=firstweb'
            //jdbc:mysql://localhost:3306/firstweb
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die;
        }

    }
}