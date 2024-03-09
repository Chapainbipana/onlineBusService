<?php
   session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../.../asset/css/style.css">
    <title>Title</title>
</head>
<body>
    <section>
                <div class="col lg-12 md-12">
                  <div class="container d-flex justify-content-around ">
                     <div class="row">
                        <form action=" " method="post" class="p-5  m-5 shadow" onsubmit=" return itsfunction()">
                            <h1  class="align-center" aria-hidden="true">Ticket Booking</h1>
                            <div class="mb-3">
                                <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
                              </div>
                            <div class="mb-3">
                              <label for="csource" class="form-label">Source:</label>
                              <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="">
                                   <option>hello</option>
                                  <option>hi</option>
                                  <option>busy</option>
                                  </select>
                           </div>
                          <div class="mb-3">
                             <label for="cdestination" class="form-label">Destination:</label>
                             <label for="">Sourece</label>
                             <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="">
                                <option>hello</option>
                                 <option>hi</option>
                                  <option>busy</option>
                             </select>
                          </div>
                         <div class="mb-3">
                             <label for="cseat" class="form-label">Seat Number:</label>
                             <input type="number" class="form-control" id="cseat" name="cseat" min="1" max="30" value="<?php echo $res['seatnumber']; ?>" required>
                       </div>
                       <div class="mb-3">
                            <label for="cdate" class="form-label">Date :</label>
                             <input type="date" class="form-control" id="cdate" name="cdate" min="1" max="30" value="<?php echo $res['date']; ?>" required>
                          </div>
                
                          <button type="submit" class="btn btn-primary" name="customereditsubmit" >Submit</button>
                
                </form>
        

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>