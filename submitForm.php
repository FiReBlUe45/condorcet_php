<?php
session_start();
$page = $_SERVER['PHP_SELF'];
$sec = "5";
?>
<?php

$pdo = new PDO("pgsql:host=localhost;port=5433;dbname=we201990;", "we201990", "baga94glucrou");

if (
    isset($_GET['firstname']) &&
    isset($_GET['lastname']) &&
    isset($_GET['comments'])
) {

    $req = $pdo->prepare("INSERT INTO users(firstname, lastname, type, comments) VALUES(?, ?, ?, ?);");
    $req->execute(array($_GET['firstname'], $_GET['lastname'], "Get", $_GET['comments']));
}
if (
    isset($_POST['firstname']) &&
    isset($_POST['lastname']) &&
    isset($_POST['comments'])
) {

    $req = $pdo->prepare("INSERT INTO users(firstname, lastname, type, comments) VALUES(?, ?, ?, ?);");
    $req->execute(array($_POST['firstname'], $_POST['lastname'], "Post", $_POST['comments']));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="<?php echo $sec ?>;URL='<?php echo $page ?>'">
    <title>Congratulation board</title>

    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <h1 class="text-center">Congratulation to</h1>
    <?php
    $req = $pdo->prepare("SELECT * FROM users");
    $req->execute();
    echo "<table class='table'>";
    echo " <thead> <tr><th>Firstname</th><th>Lastname</th><th>Type</th><th>Comments</th></tr> </thead><tbody>";
    while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            echo "<td>", $value, "</td>";
        }
        echo "</tr>";
    }
    echo "<tbody></table>";
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>