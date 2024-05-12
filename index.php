<?php
session_start();
 ?>
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <title>Online Bus Service</title>
    <style>
      .form-control{
        margin: 5px;
       
       
      }
      form{
        padding:5px;
        margin: 10px;
      }
      label{
        margin:10px;
        font-size: 20px;
      }
    .field{
      
      }
      .footer {
    background-color: #343a40;
    color: #fff;
    /*padding: 20px 0;*/
    text-align: center;
  }
  .footer-social-icons ul {
    list-style: none;
    padding: 0;
    margin-bottom: 10px;
  }
  .footer-social-icons ul li {
    display: inline-block;
    margin-right: 10px;
  }
  .footer-social-icons ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 20px;
  }
  .footer-social-icons ul li a:hover {
    color: #ffd700;
  }
  .footer p {
    margin: 0;
    font-size: 14px;
  }
  .footer p a {
    color: gold;
    text-decoration: none;
  }
  .footer p a:hover {
    text-decoration: underline;
  }

      
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <i class="bi bi-bus-front">
        </i> Online Bus service</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customeredit.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="rootdisplay.php">Root View</a>
            </li>
           <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                more
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="customer/contactAS.php">contact</a></li>
                <li><a class="dropdown-item" href="#about">About</a></li>
              </ul>
            </li>
            
            
            

          </ul>
          <li class="nav-item dropdown d-flex">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="customer/login.php">login</a></li>
                <li><a class="dropdown-item" href="customer/register.php">Register</a></li>
              </ul>
            </li>
          <form class="d-flex">

            <button class="btn btn-outline-dark"><a href="customer/logout.php">logout</a></button>
          </form>
        </div>
      </div>
</nav>
    <div class="container">
      <div><h3 class="text-center">Online Bus Ticket</h3></div>
      <div class="row row justify-content-center">
        <div class="col-9">
          <form action="" id="search" method="post">
            <div class="form-control">
              <span class="field">
             <label for="source" > Source</label>
               <input type="text"   name="source" required >
              </span>
              to:
               <span class="field">
                <label for="destination"  > Destination</label>
               <input type="text"   name="destination" required >
               </span>
              <button type="submit" class="btn btn-primary" name="search">search</button>
           </div> 
          </form>
        </div><div class="col-3 agent-right">
         
         </div>
      </div>
    </div>
    
    
    <?php
    
  
      include("db_conn/connection.php");
          if(isset($_POST['search'])){
           // if  (isset($_SESSION['c_name']) && $_SESSION['c_password']) {
            $source=$_POST['source'];
            $destination=$_POST['destination'];
            
            ?>
           <table class="table p-2 table-striped table-hover table-bordered table-xl table-responsive-xl">
            <thead>
              <tr>
              <th scope="col">Bus Number</th>
                        <th scope="col">Date</th>
                        <th scope="col">Drive Number</th>
                        <th scope="col">Source</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Price</th>
                        <th scope="col">Avaiable seats</th>
                        
                        <th scope="col">Receive Ticket</th>
              </tr>
            </thead>
            <tbody>
                <?PHP
                   $q="SELECT * FROM `root` WHERE r_source='$source' And r_destinatin='$destination'  ";
                   $result=mysqli_query($connection,$q);
                  
                   while ($res=mysqli_fetch_assoc($result)){   
                    
                  ?>     
              <tr>
                       <td><?php echo $res['b_number']; ?></td>
                        <td><?php echo $res['date']; ?></td>
                        <td><?php echo $res['d_phone']; ?></td>
                        <td><?php echo $res['r_source']; ?></td>
                        <td><?php echo $res['r_destinatin']; ?></td>
                        <td>Rs<?php echo $res['price']; ?></td>
                        <td><?php echo $res['avaiable_seats']; ?></td>
                        
                        <td><button  class="btn btn-warning"><a href="customer/receiveticket.php?b_number=<?php echo $res['b_number'];?>">receive</a></button></td>
                        
                      </tr>

              <?PHP
                   }      
              ?>
            </tbody>
           </table>

      <?php
     // }
    //  else{
        //header("location:customer/login.php");
      // }
         }
      ?>
    <div class="section">
      <div class="row">
        <img src="asset/img/photo.avif" class="img-fluid" alt="...">
      </div>
    </div>   
    
  <section>
    <div class="container">
    <div class="wrap-head-line">
				<h3 class="text-center">How to Buy Ticket</h3>
			</div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 revealator-slidedown revealator-within">
          <div>
						<i class="icon step1"></i>
					<!--	<i class="icon long-arrow hidden-sm hidden-xs"></i>-->
					</div>	
					<div>
						<p><strong>1. Check the schedule</strong></p>
            <p>Select the means of transport, indicate the point of departure / arrival and the date of trip.</p>		
          			</div>
				</div>
 
        <div class="col-lg-3 col-md-3 col-sm-3 revealator-slidedown revealator-within">
        <div>
						<i class="icon step2"></i>
						<i class="icon long-arrow hidden-sm hidden-xs"></i>
					</div>
          <div>
						<p><strong>2. Select a route</strong></p>
             <p>Compare prices, choose a convenient time and place and pay attention to the carrier's rating.</p>					</div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 revealator-slidedown revealator-within"> 
        <div>
						<i class="icon step3"></i>
						<i class="icon long-arrow hidden-sm hidden-xs"></i>
					</div>
          <div>
						<p><strong>3. Buy a ticket</strong></p>
            <p>Fill in the passenger details, be sure to check the information and pay for the order.</p>					</div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 revealator-slidedown revealator-within">
        <div>
						<i class="icon step4"></i>
					</div>
          <div>
						<p><strong>4. Everything is ready!</strong></p>
           <p>Print or save your ticket. After the trip, we will be glad to get a review from you.</p>				
          	</div>
        </div>
        </div>
      </div>
      <section class="section-brief our-privilege">
		<div class="container">
			<div class="wrap-head-line">
				<h3 class="text-center">Our Advantages</h3>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 ">
					<p><i class="icon privilege1"></i></p>
					<div>
						<p><strong>1. All tickets are available online</strong></p>
            <p>No more queues! Any ticket can be bought on the website or in our mobile application.</p>					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 ">
					<p><i class="icon privilege2"></i></p>
					<div>
						<p><strong>2. Secure payment</strong></p>
<p>All payments are made through secure payment gateways of banks, so your transaction data is reliably protected.</p>					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 ">
					<p><i class="icon privilege3"></i></p>
					<div>
						<p><strong>3. All means of transport</strong></p>
           <p>On our website you can buy bus, train and plane tickets at the best prices.</p>					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 ">
					<p><i class="icon privilege4"></i></p>
					<div>
						<p><strong>4. Bonus program</strong></p>
            <p>Register on the site and when buying tickets you will receive bonuses, which you can use to pay for your orders.</p>					</div>
				</div>
			</div>
		</div>
	</section>  
					
  </section>
    <section>
      <div class="container p-2" id="about">
        <div class="row">
          <div class="col-lg-6 col-12">
            <img src="asset/img/bus.png" class="img-fluid" alt="..." style="">
          </div>
          <div class="col-lg-6 col-12">
            <h1 >About</h1>
            <p>Buses are the most affordable means of transport with a large number of terminals across the country and
              convenient timetables to help you plan your trip. Buses is a convenient option both for those who travel on
              a shoestring budget and those who do not want to compromise on comfort. Dhaulagiri Yatayat offers bus
              service with an online reservation available. Before booking your ticket, read other travellers’ reviews to
              choose the best option.</p>
          </div>
        </div>
      </div>
    </section>
<section>
    <div class="footer bg-secondary">
  <div class="row">
    <div class="col-12">
     <!-- <div class="footer-social-icons d-flex justify-content-around ">
        <ul>
          <li><a target="_blank" class="facebook" href="https://www.facebook.com/Bipanachapain/"><span>Facebook</span></a></li>
          <li><a target="_blank" class="twitter" href="https://github.com/chapainbipana"><span>GitHub</span></a></li>
          <li><a target="_blank" class="googleplus" href="#"><span>Google+</span></a></li>
        </ul>
      </div>
        -->
        <p>Copyright © 2024  All rights reserved.</p>
    </div>
  </div>
</div>

      </section>
      <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"></script>
        </body>

  </html>
  