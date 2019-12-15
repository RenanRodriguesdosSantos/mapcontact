<?php
abstract class Conexao{
    protected function ConectaBD(){
        try {
            $con = new PDO("mysql:host=localhost;dbname=mapcontact","root","");
            return $con;
        } catch (PDOException $e) {
            return $e->getMessege();
        }
    }
}