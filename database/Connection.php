<?php
require_once __DIR__ . '/../core/App.php';

class Connection
{
    public static function make($config)
    {
        try{
            $config = App::get('config')['database'];
            $opciones = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_PERSISTENT => true
            ];
            $connection = new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']);
            
        }catch(PDOException $PDOException){
            die($PDOException->getMessage());
        }
        return $connection;
    }
}