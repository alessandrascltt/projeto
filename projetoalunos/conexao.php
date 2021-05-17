<?php
abstract class Conexao{

    protected function conectardb(){
        try{
            $con = new PDO("mysql:host=localhost;dbname=aluno","root","");
            return $con;
        }
        catch (PDOException $erro) {
            return $erro -> getMessage();
        }
    }

}