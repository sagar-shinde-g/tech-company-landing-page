<?php
   session_start();
if(isset($_SESSION['admin'])){
  header('Location: enq.php');
}

if (isset($_POST['login'])) {

  if ($_POST['username'] == 'admin' && $_POST['pass'] == 'admin@123') {
 
    $_SESSION['admin'] = 'admin';
    header('Location: enq.php');
  }else{

    echo ('login Failed...........');
  }
}



?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css">
</head>

<body>
  <div class="py-5 text-center h-100" style="	background-image: url('https://source.unsplash.com?admin');	background-size: cover;	background-position: top left;	background-repeat: repeat;">
    <div class="container">
      <div class="row shadow-lg rounded-0">
        <div class="mx-auto col-md-6 col-10 bg-white p-5">
          <h1 class="mb-4">Admin Log in</h1>
          <form method="POST">
            <div class="form-group"> <input type="text" class="form-control" value="admin" name="username" placeholder="Enter username" id="form9"> </div>
            <div class="form-group mb-3"> <input type="password" value="admin@123" class="form-control" name="pass" placeholder="enter Password" id="form10"> </div> <button type="submit" name="login" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>