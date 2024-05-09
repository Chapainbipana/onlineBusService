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
<body class="cbg-img"> 
     <section>
         <div class="container ">
            <div class="row">
            <div class="col-7">
             <form action="rvalue.php" method="post" class="p-5  m-5 shadow" onsubmit=" return itsfunction()">
             <h1  class="align-center" aria-hidden="true">New Register</h1>
                <div class="mb-3">
                <label for="c_name" class="form-label">Customer Name:</label>
                <input type="text" class="form-control" id="c_name" name="cname"  required >
                 
                </div>
                <div class="mb-3">
                 <label for="cpassword" class="form-label">Password:</label>
                 <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                </div>
                <div class="mb-3">
                 <label for="caddress" class="form-label">address:</label>
                 <input type="text" class="form-control" id="caddress" name="caddress"  required>
                </div>
                <div class="mb-3">
                 <label for="cage" class="form-label">Age:</label>
                 <input type="text" class="form-control" id="cage" name="cage"  pattern="[1-9]{2}" required>
                </div>
                <div class="mb-3">
                 <label for="cphone" class="form-label">Phone:</label>
                 <input type="text" class="form-control" id="cphone" name="cphone" pattern="\d{10}" required>
                </div>
          
               <button type="submit" class="btn btn-primary" name="rsubmit" >Submit</button>
              
         </form>
         </div>
         
         <div class="col-5 agent-right">
         </br>
		</br>
		</br>
         <h3>Contact Us</h3>
			<p><a href="mailto:example@email.com">contact@example.com</a></p>
			<p>+9779800000000</p>
         </div>
         </div>
         </div>
     </section>
    <script>
        function itsfunction(){
            var password=document.getElementById("cpassword").value;
            var age=document.getElementById("cage").value;
            var regp=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%&*?\~]).{5,16}/
            var rega=/^\d{1,2}/
            if(password.match(regp)){
                return true;
            }
            else{
                alert("invalid password");
                return false;
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>