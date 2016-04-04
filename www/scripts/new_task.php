<?php 

class Post
{

	
	public $mysqli;
	public $host;
	public $user;
	public $password;
	public $database;
	public $result;
	/*public $title;
	public $start_date;
	public $end_date;*/

	function __construct($h, $u, $p, $d) {

	 	$this->host = $h;
		$this->user = $u; 
		$this->password = $p; 
		$this->database = $d;
		// $mysqli = new mysqli();


		$this->mysqli = mysqli_connect($this->host, $this->user, $this->password, $this->database);

		if($this->mysqli->connect_errno > 0)
		{
			die('Unable to connect to Database[' . $db->connect_errno . ']');
		}
		// include_once("../connection/connection.php");
	}

	public function createTable()
	{
		$createQuery = "CREATE TABLE posts
			( 
				id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
				title TEXT(100) NOT NULL,
				start_date DATETIME,
				end_date DATETIME,
				is_done BOOLEAN 
			)";

		switch($this->result = mysqli_query($this->mysqli, $createQuery))
		{
			case "1":
				return "Table is created";
				break;
			default:
				return mysqli_error( $this->mysqli );
				break;
		}
	}

	public function insertPost($task, $start_date, $end_date) {
		$query = "INSERT INTO posts ( title, start_date, end_date ) 
		VALUES ( '". $task ."', '". $start_date ."', '". $end_date ."' )";

		// echo "Insert query " . $query . "<br>";

		$this->result = mysqli_query( $this->mysqli, $query );

		// return mysqli_affected_rows($this->mysqli);

		return mysqli_error($this->mysqli);

	}

	public function displayTasks() {
		$query = "SELECT * FROM posts";

		$result = mysqli_query($this->mysqli, $query);
		echo mysqli_num_rows($result);
		
		$count = 0;

		while($count <= mysqli_num_rows($result))
		{
			echo '<p> '. mysqli_fetch_row($result)[1] .' </p>';
			echo mysqli_fetch_row($result)[1] . '	';
			echo mysqli_fetch_row($result)[2] . '<br>';
			$count++;
		}
	}
}





include_once("../connection/connection.php");



$sql = new Post('localhost', 'root', '', 'todo');
// $sql->createTable();

$sql->displayTasks();

if(isset($_POST['title'])){
	$post_title = $_POST['title'];

// $sql->insertPost( $post_title, date('Y/m/d h:i:s'), date('Y/m/d h:i:s') );

$_POST['title'] = "";
// header("Location: ../home.php");



	/*$createQuery = "CREATE TABLE posts
			( id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
			title TEXT(100) NOT NULL,
			start_date DATETIME,
			end_date DATETIME,
			is_done BOOLEAN )";*/


	/*if($result = mysqli_query($mysqli, $createQuery))
	{
		echo ($result = mysqli_query($mysqli, $createQuery));
		echo "Table created successfully";
	}
	else
	{
		echo "Error:- " . mysqli_error($mysqli);
	}*/
}

?>