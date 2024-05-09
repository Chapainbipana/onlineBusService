<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <title>Online Bus Service System</title>
    <style>
        
    </style>
</head>
<body class="bg-img">
    <section>
        <div class="container d-flex justify-content-around">
            <div class="row">
            <form action="lvalue.php" method="post"  class="p-5 m-5 " onsubmit=" return itsfunction()">
            <h1 class=" text-center">User</h1>
          <div class="mb-3">
               <label for="username" class="form-label" > User Name</label>
               <input type="text" class="form-control" id="username" name="uname" required >
                
          </div>
         <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
         </div>

            <button type="submit" class="btn btn-warning" name="lsubmit" >sign-in</button>
            <button  class="btn btn-warning mrg-5"><a href="register.php">sign-up</a></button>
            <div class="md-3">
    	             new users<a href="register.php">login Here</a>
      	    </div>
        </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
     <script>
        function itsfunction(){
       var uname=document.getElementById("username").value;
        var regex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%&*?\~]).{5,16}/  //regular expression
         var password=document.getElementById("password").value;
         if(password.match(regex)) // match the password
         {
          return true;
         }
         else{
            alert("invalid password");
            return false;
         }
        }
     </script>
</body>
</html>
