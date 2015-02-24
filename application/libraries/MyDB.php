<?php
/**
 * Created by JetBrains PhpStorm.
 * User: User
 * Date: 13.11.13
 * Time: 12:36
 * To change this template use File | Settings | File Templates.
 */
class MyDB
{
    private static $dbh;

    /* @return PDO */
    public static function getConnection ()
    {

            //global $db;
            try{

                require 'application/config/database.php';

                $db1 = new PDO('mysql:host='.$db['default']['hostname'].';dbname='.$db['default']['database'], $db['default']['username'], $db['default']['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                $db1->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $db1->exec("set character_set_results='utf8'");
                MyDB::$dbh = $db1;

                return MyDB::$dbh;

            }catch (PDOException $e){
                var_dump($e->getMessage());
                return;
            }





    }

}
