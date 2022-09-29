<?php
   session_start();
if(!isset($_SESSION['admin'])){
  header('Location: login.php');
}

if(isset($_POST['out'])){
  session_start();
  session_unset();
  session_destroy();
  header('Location: login.php');
}

?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light shadow-lg">
    <div class="container justify-content-center"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar3">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3">
        <ul class="navbar-nav">
          <li class="nav-item mx-2"> <a class="nav-link" href="enq.php">Enquires</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link navbar-brand mr-0 text-primary" href="/"><i class="fa d-inline fa-lg fa-stop-circle-o"></i>
              <b> SNDK</b></a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="#">contacts</a> </li>
          <form method="post" >
          <button type="submit" name="out" class="btn btn-danger">Log Out</button>
          </form>
        </ul>
      </div>
    </div>
  </nav>

<div class="container-md text-center mt-5 ">
  <h1><b>TOTAL ENQUIRIES</b></h1>
</div>



  <div class="py-2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-bordered ">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">NAME</th>
                  <th scope="col">EMAIL</th>    <th scope="col">PHONE</th>
                  <th scope="col">MESSAGE</th>
                </tr>
              </thead>
              <tbody>

                <?php
                include "conn.php";
                $sql = "select * from enquires";

                if ($conn) {
                  if ($data = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($data) > 0) {

                      while($row=mysqli_fetch_assoc($data)){

                       echo ' <tr>
                        <th scope="row">'.$row['id'].'</th>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['phone'].'</td>
                        <td>'.$row['message'].'</td> 
                      </tr>';

                      }

                    }
                  }
                }


                ?>


              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>

</html>