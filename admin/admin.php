<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link  rel="stylesheet" type="text/style" href="../asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <title>Online Bus Service</title>
    <style>
        .abg-img{
    background-image: url(../asset/img/bus3.jpg);
    background-repeat: no-repeat;
   background-position: center;
    /*background-color: lightslategray;*/
    max-width: 100%;
    background-size: cover;
   /* height: auto;  */ 
}
       </style>
</head>
<body class="abg-img">
     
    <section>
        <div class="container d-flex justify-content-around ">
        <form action="avalue.php" method="post"  class="p-5  m-5 shadow" id="search" onsubmit=" return itsfunction()">
            <h1>Admin</h1>
          <div class="mb-3">
               <label for="username" class="form-label">User Name</label>
               <input type="text" class="form-control" id="username" name="uname" required >
                
          </div>
         <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
         </div>
         
            <button type="submit" class="btn btn-primary" name="asubmit" >Submit</button>
        </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        function itsfunction(){
            var uName=document.getElementById("username").value;
            var password=document.getElementById("password").value;
            var reg=/\w{6,9}$/
            if(password.match(reg)){
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