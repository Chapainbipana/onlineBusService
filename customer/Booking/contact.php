<?php
   session_start();
?>
<?PHP
 $b_num= $_GET['b_number'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
    <title>Title</title>
    <style>

    </style>
</head>
<body>
<body class="cbg-im">
    <section>
        <div class="container">
            <div class="row">
                <div class="col lg-12 md-12">
                <div class="container d-flex justify-content-around ">
            <div class="row">
             <form action="transaction.php" method="post" class="p-5  m-5 shadow" onsubmit=" return itsfunction()">
             <h1  class="align-center" aria-hidden="true">Contact Information</h1>
                <div class="mb-3">
                    <input type="hidden" name="b_number" value="<?php echo $res['b_number']; ?>">
            </div>
                <div class="mb-3">
                <label for="c_name" class="form-label">Customer Name:</label>
                <input type="text" class="form-control" id="c_name" name="cname"  required >
                </div>
                <div class="mb-3">
                 <label for="cage" class="form-label">Age:</label>
                 <input type="text" class="form-control" id="cage" name="cage"  pattern="[1-9]{2}"  required>
                </div>
                <div class="mb-3">
                 <label for="cphone" class="form-label">Phone:</label>
                 <input type="text" class="form-control" id="cphone" name="cphone" pattern="\d{10}"  required>
                </div>
                <div class="mb-3">
                             <label for="cseat" class="form-label">Seat Number:</label>
                             <input type="number" class="form-control" id="cseat" name="cseat" min="1" max="30"  required>
                       </div>
                <div class="mb-3">
                 <label for="cphone" class="form-label">Ticket price:</label>
                 <input type="text" class="form-control" id="cphone" name="cphone" value="1000" placeholder="1000" readonly  required>
                </div>

               <button type="submit" class="btn btn-primary" name="customereditsubmit" >Submit</button>
              </div>
         </form>
         </div>
         </div>

                </div>
            </div>
        </div>
    </section>
    <?php
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>