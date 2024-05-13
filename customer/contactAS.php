<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <title>Online Bus Service</title>
</head>
<body>
<body class="cbg-img"> 
     <section>
         <div class="container ">
            <div class="row">
            <div class="col-7">
             <form action="contactform.php" method="post" class="p-5  m-5 shadow" id="search" onsubmit=" return itsfunction()">
             <h1  class="align-center" aria-hidden="true">contact</h1>
                <div class="mb-3">
                <label for="c_name" class="form-label"> Name:</label>
                <input type="text" class="form-control" id="c_name" name="name"  required >
                 
                </div>
                
                <div class="mb-3">
                 <label for="caddress" class="form-label">subject:</label>
                 <input type="text" class="form-control" id="caddress" name="subject"  required>
                </div>
                <div class="mb-3">
                 <label for="cage" class="form-label">Email Adress:</label>
                 <input type="email" class="form-control" id="email" name="email"   required>
                </div>
               <!-- <div class="mb-3">
                 <label for="cphone" class="form-label">Phone:</label>
                 <input type="text" class="form-control" id="cphone" name="cphone" pattern="\d{10}" required>
                </div>
-->
                <div class="mb-3">
                 <label for="textarea" class="form-label">Message:</label>
                 <textarea class="form-control" id="textarea" name="message" rows="3"></textarea>
                </div>
          
               <button type="submit" class="btn btn-primary" name="send" >Submit</button>
              
         </form>
         </div>
         
         <div class="col-5 agent-right">
         </br>
		</br>
		</br>
         <h3> <a class="text-dark" href="../index.php">Online Bus Service</a></h3>
            <p>pokhara,Nepal</p>
			<p><a href="mailto:bipanachapain@gmail.com">bipanachapain@gmail.com</a></p>
			<p>+9779841034429</p>
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