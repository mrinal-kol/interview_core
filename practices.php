<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DB Transaction Summary — HTML UI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='css/style.css' rel="stylesheet">
  </head>
<body>
  <?php
    include('menu.php');
    ?>
<div  class="bg-light text-dark inner" >
<?php
session_start();
$conn2 = mysqli_connect('localhost','root','','asbschool',3306);
if($conn2->connect_error)
{
	echo "connection error";
}
echo "<pre>";
$qry = mysqli_query($conn2,'select * from students');
while($data = mysqli_fetch_assoc($qry))
{

//print_r($data);

}

echo "<br>----------------------</br>";
$qry = mysqli_query($conn2,'select * from students');
while($data = mysqli_fetch_row($qry))
{

//print_r($data);

}

echo "<br>----------------------</br>";
$qry = mysqli_query($conn2,'select * from students');
while($data = mysqli_fetch_array($qry))
{

//print_r($data);

}

echo "<br>----------------------</br>";
$qry = mysqli_query($conn2,'select * from students');

while($data = mysqli_fetch_object($qry))
{

//print_r($data);

}

echo "<br>----------------------</br>";

class nm{
	protected static $__df;
	public function fv()
	{
		return '123';
	}
	public static function fc()
	{
		return self::$__df*5;
	}
}

//$obj = new nm();

echo nm::fc();


try{
	echo "<br>----------------------</br>";
	$con="mysql:host=localhost;port=3306;dbname=asbschool";
	$conn3 = new PDO($con,'root','');
	$conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
	echo $e->getMessage();
}
catch(Exception $e)
{
    echo $e->getMessage();
}
class studentList
{
	public $conn;
	public function __construct($dbconn)
	{
		$this->conn = $dbconn;
	}
	public function getStudentDetails()
	{
		try
		{


			$this->conn->beginTransaction();

			//$qry = "SELECT * FROM students join student_details where (students.id=student_details.student_id)";
			//$qry = "SELECT * FROM students left join  student_details on (students.id=student_details.student_id)";
			//$qry = "SELECT * FROM students right join  student_details on (students.id=student_details.student_id)";
			
			$qry = "CALL get_student_details(1)";
			//$qry = "CALL student_list_out($total)";
			$sm= $this->conn->prepare($qry);
			$sm->execute();
			$result= $sm->fetchAll(PDO::FETCH_ASSOC);
			//print_r($result);
			$sm->closeCursor(); // procedure it's required
			$qry ='';
			$qry ="INSERT INTO `students` ( `name`, `roll`, `class`, `email`, `phone`, `section`, `file_details`, `Status`,  `mobile_no`) VALUES (?,?,?,?,?,?,?,?,? )";

			$arr= ['rahul roy', '1025987', '45', 'johndoe@example.com', '5623', 'C', '1762053165_3771da7081123a51ab27.jpg', '0',  '784512892'];

			$smt = $this->conn->prepare($qry);
			$smt->execute($arr);
			$this->conn->commit();
			//$this->conn->rollBack();
		}
		catch(PDOException $e)
		{
			$this->conn->rollBack();
			echo $e->getMessage();
			echo "<br>";
			echo $e->getFile();
			echo "<br>";
			echo $e->getLine();
		}
		catch(Exception $r)
		{
			$this->conn->rollBack();
			echo $r->getMessage();
		}
	}
}
class collage extends studentList
{
	public $conn;
	public function __construct($dbconn)
	{
		$this->conn = $dbconn;
	}
	public function studentListAll()
	{
		try
		{
			$qry = "SELECT * FROM students";
			$sm= $this->conn->prepare($qry);
			$sm->execute();
			$result= $sm->fetchAll(PDO::FETCH_ASSOC);
			//print_r($result);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		catch(Exception $r)
		{
			echo $r->getMessage();
		}
	}
}

$stuObj = new studentList($conn3);
$stuObj->getStudentDetails();

$stuObj = new collage($conn3);
$stuObj->studentListAll();
?>
</div>
</body>
</html>