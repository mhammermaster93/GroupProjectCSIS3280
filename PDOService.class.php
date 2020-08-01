<?php

class PDOService {

//Conection details
private  $host = DB_HOST;  
private  $user = DB_USER;  
private  $pass = DB_PASS;  
private  $dbname = DB_NAME;  
private $port = DB_PORT;

private $dsn = "";
private $pdo = "";
private $stmt = "";
private $className = "";


//Constructor to make the connection
public function __construct(string $className){
    $this->className = $className;

    $this->dsn  = "mysql:host=" . $this->host;
    $this->dsn .= ";dbname=" . $this->dbName;
    $this->dsn .= ";port=" . $this->port;

    $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    try{
        $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $options);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

//Prepare the statement for execution
public function query(string $query)    {
        $this->stmt  = $this->pdo->prepare($query);
}

//This function binds parameters
public function bind($param, $value, $type = null){  
    if (is_null($type)) {  

        switch (true) {  
            case is_int($value):  
            $type = PDO::PARAM_INT;  
            break;  
            case is_bool($value):  
            $type = PDO::PARAM_BOOL;  
            break;  
            case is_null($value):  
            $type = PDO::PARAM_NULL;  
            break;  
            default:  
            $type = PDO::PARAM_STR;  
            }  
    }  
    $this->stmt->bindValue($param, $value, $type);  
} 

 //Execute the statement
public function execute($data = null)   {
    if (is_null($data)) {
        return $this->stmt->execute();
    } else {
        return $this->stmt->execute($data);
    }
}

 //Return multiple results
 public function getResultSet()  {

    return $this->stmt->fetchAll(PDO::FETCH_CLASS, $this->className);
}

//Return a single result
public function singleResult()  {
        
    //Set the fetch mode
    $this->stmt->setFetchMode(PDO::FETCH_CLASS, $this->className);
    //Return the result
    return $this->stmt->fetch(PDO::FETCH_CLASS);
}

//This function returns the rowCount
public function rowCount() : int {
    return $this->stmt->rowCount();
}

//This function returns the last inserted Id
public function lastInsertedId() : int {
    return $this->pdo->lastInsertedId();
}

}

?>