
<?php 
include 'conn.php';

if(isset($_POST['done'])){
    $name = $_POST['name'];
    $location = $_POST['location'];

   $q = " INSERT INTO `data`(`name`,`location`) VALUES('$name','$location')";

   $query = mysqli_query($con,$q);
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="col-lg-6 m-auto">

    <form method="post">
        <div class="card">

        <div class="card-header bg-dark">
            <h1 class="text-white text-center">Insert Operation</h1>
        </div>
        <label>Username:</label>
        <input type="text" name="name" class="form-control">
        <label>location</label>
        <input type="text" name="location" class="form-control">
        <button type="submit" class="btn btn-success" name="done">Submit</button>
</div>
    </form>
</div>
   
    
</body>
</html>