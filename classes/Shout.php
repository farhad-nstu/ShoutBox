<?php 
include_once "/../lib/Database.php";

class Shout{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}

	public function getAllData(){
		$query = "SELECT * FROM tbl_box ORDER BY id DESC";
		$result = $this->db->select($query);
		return $result;

	}

	public function insertData($data){
		$name = mysqli_real_escape_string($this->db->link, $data['name']);
		$text = mysqli_real_escape_string($this->db->link, $data['text']);
		date_default_timezone_set('Asia/Dhaka');
		$time = date('h:i:s a', time());

		$query = "INSERT INTO tbl_box(name, text, time) VALUES('$name', '$text', '$time')";
		$this->db->insert($query);
		header("Localion:index.php");
	}
}
?>