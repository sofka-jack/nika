<?php

$dbhost = "localhost";
$dbname = "wth";
$username = "root";
$password = "";

session_start();


$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

include 'lib/User.class.php';
$userObj = new User();

//include 'lib/Children.class.php';
// $childObj = new Children();

if (isset($_GET['logout'])) {
	unset($_SESSION['authUser']);
	unset($_SESSION['userLogin']);
	session_destroy();

	header("Location: /ways_to_help/index.php");
}

#auth

if (isset($_POST['goAuth'])) {
	$login = $_POST['wth-email-in'];
	$password = md5($_POST['wth-pass-in']);

	$user = $userObj->get_user_by_login($login);
	if ($user != 0) {
		if($password == $user[0]['password']){
			$_SESSION['authUser'] = 1;
			$_SESSION['userLogin'] = $login;
						header("Location: /ways_to_help/personal-area.php");

		}else{
			echo "<script type=\"text/javascript\">alert('Wrong password');</script>";
		}
	}else{
		echo "<script type=\"text/javascript\">alert('Wrong login');</script>";
	}
}

#registration

if (isset($_POST['goReg'])) {

	$name = $_POST['wth-name'];
	$surname = $_POST['wth-surname'];
	$date = $_POST['wth-date'];
	$code = $_POST['wth-code'];
	$email = $_POST['wth-email'];
	$password = $_POST['wth-password'];
	$password_repeat = $_POST['wth-password-repeat'];
	$mile = rand(1000, 10000);
	$segments = rand(0, 30);
	$points =rand(1000, 30000);

	if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $email)){
			if (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
				if ($password == $password_repeat) {
					$userObj->add_user_to_bd($name, $surname, $date, $code, $email, $mile, md5($password), $segments, $points);
					header("Location: /ways_to_help/sign-in.php");
				}else echo "<script type=\"text/javascript\">alert('Incorrect passwords');</script>";
			}else echo "<script type=\"text/javascript\">alert('Incorrect password');</script>";
	}else echo "<script type=\"text/javascript\">alert('Incorrect email');</script>";
}

#want-to-help

if (isset($_POST['goHelp'])) {
	$login = $_SESSION['userLogin'];
	$user=$userObj->get_user_by_login($login);
	$user_mile = $user[0]['mile'];
	$user_id = $_POST['wth-user-id'];
	$mile = $_POST['wth-mile'];
	$child_id=$_POST["wth-child-id"];
	$new_user_mile= $user_mile - $mile;
	if($_SESSION['authUser'] = 1 && $mile<=$user_mile){
		$userObj->want_to_help($child_id, $user_id, $mile, $new_user_mile);
		$userObj->new_user_mile($user_id, $new_user_mile);

	}else {
		echo "<script type=\"text/javascript\">alert('Недостаточно миль');</script>";
	}
}

#get all info

function get_info_all(){
	global $db;
	$info = $db->query("SELECT * FROM users");
	return $info;
}

function get_children(){
	global $db;
	$login=$_SESSION['userLogin'];
	$id_user = $db->query("SELECT id_user FROM users WHERE mail='$login'");

	return $id_user;
}

function get_all_news(){
	global $db;
	$news = $db->query("SELECT * FROM news");
	return $news;
}

function get_complete_children(){
	global $db;
	$com_children = $db->query("SELECT * FROM children_complete");
	return $com_children;
}

function get_all_children(){
	global $db;
	$children = $db->query("SELECT * FROM children");
	return $children;
}




  function translit($str) {
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    return str_replace($rus, $lat, $str);
  }
?>
