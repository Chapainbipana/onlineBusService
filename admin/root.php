<?php
session_start();
  if (isset($_SESSION['a_name'])&&isset($_SESSION['a_password'])) {

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <title>online bus service</title>
</head>
<body >
    
    
    <section>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-12 col-12">
                <div class="title">
              <h1>Root</h1>
             </div>
                <table class="table  table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                    <th scope="col">Bus Number</th>
                        <th scope="col">Date</th>
                        <th scope="col">Drive Number</th>
                        <th scope="col">Source</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Aviable seats</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php
             include '../db_conn/connection.php';
             $q="SELECT * FROM `root`";
             $result=mysqli_query($connection,$q);
             while ($res=mysqli_fetch_assoc($result)){   
            ?>
                    <tr>
                    <td><?php echo $res['b_number']; ?></td>
                        <td><?php echo $res['date']; ?></td>
                        <td><?php echo $res['d_phone']; ?></td>
                        <td><?php echo $res['r_source']; ?></td>
                        <td><?php echo $res['r_destinatin']; ?></td>
                        <td><?php echo $res['avaiable_seats']; ?></td>
                        <td><button><a href="busedit.php?b_number=<?php echo $res['b_number'];?>">Edit</a></button></td>
                        <td><button><a href="busdelete.php?b_number=<?php echo $res['b_number'];?>">Delete</a></button></td>
                    </tr>
                    <?php
                    }
                    mysqli_close($connection);
                    ?>
                </tbody>
                  </table>                  
                 </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
     }
  else{
    header('location:admin.php');
  }
  ?>