<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms</title>

    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="container">
    <h1>Form with GET</h1>
    <form action="submitForm.php" method="get">
        <div class="form-group">
            <label for="Firstname">Firstname</label>
            <input type="text" name="firstname" class="form-control" id="Firstname" aria-describedby="Firstname" placeholder="Enter your Firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="Lastname" placeholder="Enter your lasstname">
        </div>
        <div class="form-group">
            <label for="comments">Comments</label>
            <input type="text" name="comments" class="form-control" id="comments" aria-describedby="comments" placeholder="Enter your comments">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h1>Form with POST</h1>
    <form action="submitForm.php" method="post">
        <div class="form-group">
            <label for="Firstname">Firstname</label>
            <input type="text" name="firstname" class="form-control" id="Firstname" aria-describedby="Firstname" placeholder="Enter your Firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="Lastname" placeholder="Enter your lasstname">
        </div>
        <div class="form-group">
            <label for="comments">Comments</label>
            <input type="text" name="comments" class="form-control" id="comments" aria-describedby="comments" placeholder="Enter your comments">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>