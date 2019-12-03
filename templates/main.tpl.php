<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex">
		<title>Oro linijų vidinė sistema</title>
		<!--<link rel="stylesheet" type="text/css" href="scripts/datetimepicker/jquery.datetimepicker.css" media="screen" />
		<script type="text/javascript" src="scripts/datetimepicker/jquery.datetimepicker.full.min.js"></script>-->

        <!-- Bootstrap CSS, JS, Popper.js, jQuery -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="style/sidebar.css">
	</head>
    <body>
        <?php if (isset($_SESSION['email'])) { 
            include 'header.tpl.php';
        } ?>

        <div id="pageContent">
            <?php
                // įtraukiame veiksmų failą
                if(file_exists($actionFile)) {
                    include $actionFile;
                }
            ?>
        </div>

        <div id="footer">

        </div>

        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script> feather.replace() </script>
    </body>
</html>