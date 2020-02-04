<?php 
class D{
	public static $database;

	public static function _DB(){
		self::$database=new mysqli('localhost','prathonit','pwdpwd','main');
		return self::$database;
	}
	public static function _DB_query($query){
		if ($result=self::$database->query($query)){
			return true;
		}
		else{
			return false;
		}	
	}

}
?>