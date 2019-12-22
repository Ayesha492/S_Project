<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
      <!-- bootstrap cdn  -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
      <!-- bootstrap end -->
      
      <link rel="stylesheet" href="css/maincss.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--header-->
    <div class="container-fluid text-white backco">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-3">
                    <p><i class="fa fa-envelope mr-3"></i>mehakubaid98@gmail.com</p>
                </div>
                <!-- 3 md end -->
                <div class="col-md-3 mt-3 text-center">
                    <a href="location.blade.php"><h6 class="location">Find the Location</h6></a>
                </div>
                <!-- 3 md end -->
                <div class="col-md-6 mt-3 text-right">
                    <i class="fa fa-facebook mr-3"></i>
                    <i class="fa fa-instagram mr-3"></i>
                    <i class="fa fa-twitter mr-3"></i>    
                </div>
                <!-- 6 md end -->
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- navbar -->
    <div class="container-fluid bg-light">
        <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="images/new_png.png" height="70" width="70" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active mt-2">
              <a class="nav-link" href="index.blade.php"><b>Home</b> &nbsp;&nbsp; &nbsp;  <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" href="about.html">About &nbsp; &nbsp; &nbsp; </a>
            </li>
            <li class="nav-item mt-2">
                <a class="nav-link" href="department.blade.php">Department &nbsp; &nbsp; &nbsp; </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" href="doctor.blade.php">Doctors &nbsp; &nbsp; &nbsp; </a>
              </li>
              <li class="nav-item active mt-2">
                <a class="nav-link" href="buymedicine.blade.php"><b>Purchase Medicine</b> &nbsp; &nbsp; &nbsp;  <span class="sr-only">(current)</span> </a>
              </li>
              <a class="nav-link" href="payment.blade.php">Payment &nbsp; &nbsp; &nbsp; </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" href="contact.blade.php">Contact &nbsp; &nbsp; &nbsp; </a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Setting</button>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Add payment</a>
                <a class="dropdown-item" href="#">Logout</a>
                
              </div>
            </li>
          
          </ul>
          
           
           
          
        </div>
      </nav>
      </div>
      </div>
    <!-- endnavbar -->
    <!-- front image -->
    <div class="container-fluid hero-image" style="background-image: url('images/doc.jpg');">
        <div class="container">
                <div class="row">
                        <div class="col-md-4 rowspace">
                            <h2><B>MEDICAL CENTER</B></h2>
                        </div>
                </div>
                <div class="row">
                <div class="col-md-6 MT-5">
                        <h2><b>SKILL TO HEAL</b></h2><br>
                        <h4><b>IT IS PART OF THE CURE<br>
                            TO WANT TO BE CURED</b></h4>
                            <br>
                            <p><b>Medicines cure diseases but only Doctors can cure patients.</b></p>
                            <p>The Instant Cure by professional doctors only for you. So, hurryup! and consult with your nearest doctors for your instant recovery.<br><br><mark> Best Doctors only for you.</mark></p></p>
                            <a href="doctor"><button type="button" class="btn btn-info">Make an Appointment</button></a>
                </div>
                </div>
        </div>
    </div>
    <!-- frontimage end -->
<!--start of the cards -->
      <div class="container-fluid ca1">
<br>
      </div>
    <div class="container-fluid card-col">
        <div class="container">
          <div class="row">
              <div class="col-md-4 mt-5 mb-5">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><h6><b>Neurology Service</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/br.jpg" height="40px" width="40px" alt=""></h6>
                   <hr>
                  
                    <p class="card-text text-justify">Land meat winged called subdue without 
                      a very light in all years sea appear Lesser bring fly first land set female best perform.</p>
                   
                  </div>
                </div>
              </div>
              <!-- md4 end -->
              <div class="col-md-4 mt-5 mb-5">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><h6><b>Dental Clinic</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/t.png" height="40px" width="40px" alt=""></h6>
                   <hr>
                  
                    <p class="card-text text-justify">Land meat winged called subdue without 
                      a very light in all years sea appear Lesser bring fly first land set female best perform.</p>
                   
                  </div>
                </div>

              </div>
              <!-- md4 end -->
              <div class="col-md-4 mt-5 mb-5">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><h6><b>Child Clinic</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/girl.png" height="40px" width="40px" alt=""></h6>
                   <hr>
                  
                    <p class="card-text text-justify">Land meat winged called subdue without 
                      a very light in all years sea appear Lesser bring fly first land set female best perform.</p>
                   
                  </div>
                </div>
              </div>
                <!-- md 4 end -->
            </div>
          <!-- row end -->
        </div>
    </div>
    <div class="container-fluid ca1">
      <br>
            </div>
<!-- end of cards -->
<!-- doctors start -->
<div class="container-fluid bg-light">
  <div class="container">
    <div class="row">
<div class="col-md-12 mt-3 text-center">
<h2><b>InstantCure
  Experienced Doctors</b></h2>
</div>
    </div>
    <!-- row end -->
  </div>
  <!-- container end -->

  <div class="container">
<div class="row">
  <div class="col-md-4 col-sm-4 mt-3 mb-5">
    <div class="card" >
      <img src="images/doc1.jpg" class="card-img-top" alt="no">
      <div class="card-body">
        <h5 class="text-center"><b>Dr Shaun Murphy </b></h5>
        <p class="text-center"><b>Neurosurgeon</b></p>
        <hr>
        <p><i class="fa fa-mobile mr-3">&nbsp;&nbsp;+1 631 127 8042</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fa fa-facebook mr-1"></i>
          <i class="fa fa-instagram mr-1"></i>
          <i class="fa fa-twitter mr-1"></i> 
          </p>

       
      </div>
    </div>
  </div>
<!-- md 4 end -->
<div class="col-md-4 col-sm-4 mt-3 mb-5">
  <div class="card">
    <img src="images/doc2.jpg" class="card-img-top" alt="no">
    <div class="card-body">
      <h5 class="text-center"><b>Dr Drake Ramorey</b></h5>
      <p class="text-center"><b>Dentist</b></p>
      <hr>
      <p><i class="fa fa-mobile mr-3">&nbsp;&nbsp;+1 631 127 8042</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-facebook mr-1"></i>
        <i class="fa fa-instagram mr-1"></i>
        <i class="fa fa-twitter mr-1"></i> 
        </p>

     
    </div>
  </div>
</div>
<!-- col md end -->
<div class="col-md-4 col-sm-4 mt-3 mb-5">
  <div class="card">
    <img src="images/doc3.jpg" class="card-img-top" alt="no">
    <div class="card-body">
      <h5 class="text-center"><b>Dr Meridith Grey</b></h5>
      <p class="text-center"><b>Child Specialist</b></p>
      <hr>
      <p><i class="fa fa-mobile mr-3">&nbsp;&nbsp;+1 631 127 8042</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <i class="fa fa-facebook mr-1"></i>
        <i class="fa fa-instagram mr-1"></i>
        <i class="fa fa-twitter mr-1"></i> 
        </p>

     
    </div>
  </div>
</div>
<!-- colmd 4 end -->
</div>
  </div>
  <!-- container end -->
</div>
<!-- doctor end -->

<!-- search for doctor -->
<div class="container-fluid " style="background-image: url('images/bg1.png');">
 
  <div class="container mt-5 mb-5 card-col">
    <!-- extra -->
    <div class="container ca1">
      <br>
            </div>
    <!-- extra end -->
<div class="row">
  <div class="col-md-4">
<h4 class="mt-5 ml-5 text-white">Seach for the Doctors</h4>
<div class="form-group mt-5 contact text-white ml-5">
  <input list="doctors" placeholder="Search the doctors of your interest" class="form-control">
  <datalist id="doctors">
    <option value="Cardiologist"></option>
    <option value="Child Specialist"></option>
    <option value="Dentist"></option>
    <option value="Eye Specialist"></option>
    <option value="Neurosurgeon"></option>
    <option value="Skin Specialist"></option>
</datalist>
</div>
<div class="form-group ml-5 mt-3">
  <button type="submit" class="btn btn-info btn-block">Search</button>
</div>
  </div>

  <!-- pictures -->
<div class="col-md-4 mb-5 text-right mt-5">
  <img src="images/doc1.jpg" height="130" width="200" alt="">
  <br><br>
  <img src="images/doc2.jpg" height="130" width="200" alt="">
</div>
<div class="col-md-4 text-center mt-5">
  <img src="images/doc3.jpg" style="height: 130px; width: 200px;" alt="">
  <br><br>
  <img src="images/doc4.jpg" height="130" width="200" alt="">
</div>
 <!-- pictures end -->
</div>
<!-- extra -->
<div class="container ca1">
  <br>
        </div>
  </div>
 <br><br><br>
</div>
<!-- search for doctor end -->

<!-- emergency call -->
<div class="container-fluid tel" style="background-image: url('images/telephone.jpg');">
<div class="container">
<div class="row">
<div class="col-md-12 text-white text-center">
<h3 class="mar"><b>Emergency Hotline</b></h3>
<br>

<h1 style="font-weight: 100; "><b>(+9) – 435 366 423</b></h1>
<br>
<p><b>We provide 24/7 customer support. Feel free to contact us
  in any emergency case.</b></p>
  <br><br><br>
</div>
</div>
<!-- row end -->
</div>
<!-- end container -->
</div>
<!-- end emergency -->
<!-- footer -->
<footer>
  <div class="container-fluid bg-light">
<div class="container">
<div class="row">
  <div class="col-md-4 mar mb-5">
<h5><b>Newsletter</b></h5>
<p class="mt-3"><b>To know the latest services, send your email to us!</b></p>
<div class="form-group mt-3">
  <input type="email" class="form-control" placeholder="enter email address" required="required"/><br>
  <a href=""><button class="btn btn-info">Sumbit</button></a>
</div>
  </div>

  <div class="col-md-8">

  </div>
</div>
<hr>
</div>
<!-- container end  -->
<div class="container">
 <div class="row">
   <div class="col-md-4 mb-4">
    Copyright ©2019 
   </div>
   <div class="col-md-8 text-right">
    <i class="fa fa-facebook mr-3"></i>
    <i class="fa fa-instagram mr-3"></i>
    <i class="fa fa-twitter mr-3"></i> 
   </div>
 </div>

  </div>
</footer>
<!-- footer end -->
</body>
</html>