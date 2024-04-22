<?php
   session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <title>Title</title>
</head>
<body>
<?php 
include_once("../include/adminheader.php");
      include '../db_conn/connection.php';
             $q="SELECT * FROM `bus_info`";
             $result=mysqli_query($connection,$q);
            
            
            ?>
    <section>
                <div class="col lg-12 md-12">
                  <div class="container d-flex justify-content-around ">
                     <div class="row">
                        <form action=" " method="post" class="p-5  m-5 shadow" onsubmit=" return itsfunction()">
                            <h1  class="align-center" aria-hidden="true">Add Rout</h1>
                            <div>
                            <label for="cdate" class="form-label">Bus Number :</label>
                            <select name="b_num[]"class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                    
                                
                                <?php
                                 while ($res=mysqli_fetch_assoc($result)){   
                                  ?>     
                                     <option value="<?php echo $res['b_number']?>"><?php echo $res['b_number']; ?></option>
                                  <?php
                                       }
                                     ?>
                              </select>  
                              </div>
                                <div class="mb-3">
                                    <label for="cdate" class="form-label">Date :</label>
                                     <input type="datetime-local" class="form-control" name="cdate" required>
                                 </div>
                              
                          <button type="submit" class="btn btn-primary" name="addroot" >Submit</button>
                  </div>
                </form>
        

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?PHP
if (isset($_POST['addroot'])) {
    $b_num = $_POST['b_num'];
    $num=implode(' ', $b_num);
    $b_date= trim($_POST['cdate']);
    
    $query="SELECT `b_number`, `phone`, `source`, `destination` FROM `bus_info` WHERE b_number='$num'";
    $db=mysqli_query($connection,$query);
      while ($root=mysqli_fetch_assoc($db)){   
         $phone=$root['phone'];
         $source=$root['source'];
         $destination=$root['destination'];
         
      }
    $rootQuery="INSERT INTO `root`(`b_number`, `r_source`, `r_destinatin`, `date`) VALUES ('$num',$source,$destination,$b_date)";
     $insertQuery=mysqli_query($connection,$rootQuery);
    if($insertQuery){
       // header("location:root.php");
       echo $phone;
      echo  $num;
     }
     else {
		echo "<br>error".$insertQuery."<br>".mysqli_error($connection);
	   }
       
}
?>