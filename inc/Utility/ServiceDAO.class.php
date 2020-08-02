<?php

class ServiceDAO  {

    //Static DB member to store the database
    private static $db;

    //Initialize the ServiceDAO
    static function initialize()    {
        self::$db=new PDOService('Service');
    }
    
    static function getService ($serviceNr)  {
       
        $selectOne="SELECT * FROM Service
                    WHERE serviceNr = :serviceNr";

        self::$db->query($selectOne);
        self::$db->bind('serviceNr', $serviceNr);
        self::$db->execute();
        return self::$db->singleResult();
    }
    
    //Get all Services
    static function getServices()  {
               
        $selectAll="SELECT * FROM Service;";
        
        self::$db->query($selectAll);
        self::$db->execute();
       
        return self::$db->resultSet();
        
    }
}

?>