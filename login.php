<?php
require("pdo.php");

session_start();

if(empty($_POST["email"]) || empty($_POST["password"])){
	header("Location: index.php");
	exit;
}

$query = "SELECT email, password, role FROM users WHERE email = :email";  
$stmt = $conn->prepare($query);  
$stmt->bindParam(':email', $_POST["email"], PDO::PARAM_STR);
$stmt->execute();
$user = $stmt->fetch();

if (password_verify($_POST["password"], $user["password"])) {
    $_SESSION["email"] = $user["email"];
	$_SESSION["role"] = $user["role"];
	
	header("location: home.php");
	exit;
} else {
	?>
		<script>
			alert("Slaptažodis neteisingas!");
			window.location.href = 'index.php';
		</script>
	<?php
	exit;
}
?>