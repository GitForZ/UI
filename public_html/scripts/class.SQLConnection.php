<?php
class SQLConnection
{
    public $dbhost = "localhost";
    public $dbname = "Quota";
    public $dbusername = "uiteam";
    public $dbpassword = "uiteam4393";
    public $link; 
    
    
    public function connection()
    {

    	$connString = "mysql:host=$this->dbhost;dbname=$this->dbname";
    	try{
        	$this->link = new PDO($connString, $this->dbusername, $this->dbpassword);
			$this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    } catch (PDOException $e){
	    	echo "$e"; 
	    }
		return $this->link; 
    }
}
?>
