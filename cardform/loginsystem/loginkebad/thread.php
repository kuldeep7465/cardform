<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 433px;
    }
    </style>
    <title>Welcome to iDiscuss - Coding Forums</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="welcome.php">welcome</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link mr-mb-2" href="#">Login</a>
                    </li>

                    <li class="nav-item mr-4">
                        <a class="nav-link mr-mb-2">Disabled</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <?php
     $laguage="";
     $desc="";
$id=$_GET['id'];
include("dbconn.php");

$sql="SELECT * FROM `print` WHERE `id` =  '$id'";
$quary=mysqli_query($conn,$sql);
while ($result=mysqli_fetch_assoc($quary)) {
    $laguage=$result['laguage'];
    $desc=$result['desc'];
 
}
?>
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">WELCOME TO <?php  echo $laguage; ?>!</h1>
            <p class="lead">
            <p><?php  echo $desc; ?></p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
    <div class="container">
        <h3>BROWSER QUESTION</h3>
    </div>
    <?php
$id=$_GET['id'];
include("dbconn.php");
$sql="SELECT * FROM `thread`";
// $sql="SELECT * FROM `thread` WHERE `id` =  '$id'";
$quary=mysqli_query($conn,$sql);
while ($result=mysqli_fetch_assoc($quary)) {
  $id=$result['id'];
    $titale=$result['titale'];
    $desc=$result['desc'];
 echo '<div class="container my-4">
 <div class="media my-4">
   <img src="./image/download.png" width="30px" class="mr-3" alt="...">
   <div class="media-body">
     <h5 class="mt-0"><a href="question.php?id='.$id.'">'.  $titale.'</a></h5>
     '. $desc.'
   </div>
 </div>
 </div>';
}
?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>