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
#disabled
{
  
}

#login
{
  padding-left: 813px;
}
    </style>
    <title>Welcome to iDiscuss - Coding Forums</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        
        <li class="nav-item mr-4" id="disabled">
          <a class="nav-link mr-mb-2">Disabled</a>
        </li>
      </ul>
    
     </div>
    </div>
  </div>
</nav>
<?php
$conn=mysqli_connect("localhost","root","","card");
if ($conn) {
    # code...
   //echo "connetion sucessfull<br>";
}
else {
    
    echo "connetion faild";
}
$sql="SELECT * FROM `print`";
$quary=mysqli_query($conn,$sql);
while ($result=mysqli_fetch_assoc($quary)) {
  # code...
  $id=$result['id'];
  $language=$result['laguage'];
  $desc=$result['desc'];
  echo'<div class="container">
  <div class="row float-left">
  <div class="col-3">
  <div class=" my-4 ml-4">
    <div class=" card my-4 md-4 " style="width: 18rem;">
    <img src="./image/1076443 (1).jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class=" card-title">'.$language.'</h5>
      <p class="  card-text">'.$desc.'</p>
      <a href="thread.php?id='.$id.'" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  </div>
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