<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor</title>
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- bootstrap end -->
    
    <link rel="stylesheet" href="css/doctorcss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <!--header-->
   <div class="container-fluid text-white backco">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-3">
                <p><i class="fa fa-envelope mr-3"></i>info@hsdf.com</p>
            </div>
            <!-- 3 md end -->
            <div class="col-md-3 mt-3 text-center">
                <a href="#"><h6 class="location">Find the Location</h6></a>
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
        <li class="nav-item  mt-2">
          <a class="nav-link" href="indexmain.html">Home &nbsp;&nbsp; &nbsp;</a>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link" href="about.html">About &nbsp; &nbsp; &nbsp; </a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link" href="department.html">Department &nbsp; &nbsp; &nbsp; </a>
          </li>
          <li class="nav-item active mt-2">
            <a class="nav-link" href="doctor.blade.php"><b>Doctors</b> &nbsp; &nbsp; &nbsp; <span class="sr-only">(current)</span> </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" href="contact.html">Contact &nbsp; &nbsp; &nbsp; </a>
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
<!-- about start -->

        <div class="container-fluid">
            
            <div class="container">
                
              <div class="row">
                  
                </div>
              <!-- row end -->
            </div><div class="col-md-12 mt-3 text-center ">
                    <h2><b>Doctors</b></h2>
                    <p>We supply the best and experienced Doctors.</p>
            </div>
           
        </div>
      
<!-- end about --> 
<!-- start inspiring -->
<div class="container-fluid text-white card-col">
    <div class="container-fluid ca1">
        <br>
              </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 text-center">
                    <h1><b>InstantCure
                        Experienced Doctors</b></h1><br><br>
            </div>
        </div>
    </div>
    <div class="container-fluid ca1">
        <br>
              </div>
</div>
 <!--end inspiring  -->
 <!-- start cards -->

       <!-- doctors start -->
<div class="container-fluid bg-light">
    
  
    <div class="container">
  <div class="row">
    <div class="col-md-4 col-sm-4 mt-5 mb-5">
      <div class="card" >
        <img src="images/doc1.jpg" class="card-img-top" alt="no">
        <div class="card-body">
          <h5 class="text-center"><b>Dr Shaun </b></h5>
          <p class="text-center"><b>Neurosurgeon</b></p>
          <hr>
          <p class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile mr-3"></i>+1 631 127 8042</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal">Make an Appointment</a>
<!-- modal start -->
                                



                                <!-- The Modal -->
                                <div class="modal" id="myModal" data-backdrop="false">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                    
                                      <!-- Modal Header -->
                                      <div class="modal-header mbody">
                                        <h4 class="modal-title" ><img src="images/new_png.png" height="40" width="40" alt=""></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      
                                      <!-- Modal body -->
                                      <div class="modal-body mb">
                                       <div class="container">
                                         <form action="{{url('/doc')}}" method="post">
                                             {{csrf_field()}}
                                              <input type="text" class="form-control" name="dr_name" value="Dr Shaun" readonly><br>
                                              <input type="text" class="form-control" name="dr_desig" value="NeuroSergen" readonly><br>
                                              <input type="text"  class="form-control" name="time" value="4:00 pn to 6:00 pm" readonly><br>
                                              <input type="text"  class="form-control" name="fee" value="fee:40$" readonly><br>
                                              <input type="text" class="form-control" name="pat_name" placeholder="enter Patient name" ><br>
                                              <input type="text" class="form-control" placeholder="enter Patient email" name="pat_email"><br>
                                             <input type="submit" value="Appointment" class="btn btn-primary ml-3">

                                         </form>
                                       </div>
                                       

{{--                                       <a class="btn btn-primary ml-3" href="order.html">&nbsp; Appointment &nbsp;</a>    --}}
                                       <!-- conainer end -->
                                      </div>
                                      
                                      <!-- Modal footer -->
                                      <div class="modal-footer mbody">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>
                                      
                                    </div>
                                  </div>
                                </div>
                                <!-- modal end -->
          
            </p>
  
         
        </div>
      </div>
    </div>
  <!-- md 4 end -->
  <div class="col-md-4 col-sm-4 mt-5 mb-5">
    <div class="card">
      <img src="images/doc2.jpg" class="card-img-top" alt="no">
      <div class="card-body">
        <h5 class="text-center"><b>Dr Drake</b></h5>
        <p class="text-center"><b>Dentist</b></p>
        <hr>
        <p class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile mr-3"></i>+1 631 127 8042</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          
          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myodal">Make an Appointment</a>
          <!-- modal start -->
                                          
          
          
          
                                          <!-- The Modal -->
														<div class="modal" id="myodal" data-backdrop="false">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                              
                                                <!-- Modal Header -->
                                                <div class="modal-header mbody">
                                                  <h4 class="modal-title" ><img src="images/new_png.png" height="40" width="40" alt=""></h4>
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body mb">
                                                 <div class="container">
                                                   <form action="{{url('/doc')}}" method="post">
                                                       {{csrf_field()}}
                                                        <input type="text" class="form-control" name="dr_name" value="Dr Drake Dentist" readonly><br>
                                                        <input type="text" class="form-control" name="dr_desig" value="NeuroSergen" readonly><br>
                                                        <input type="text"  class="form-control" name="time" value="4:00 pn to 6:00 pm" readonly><br>
                                                        <input type="text"  class="form-control" name="fee" value="fee:40$" readonly><br>
                                                        <input type="text" class="form-control" name="pat_name" placeholder="enter Patient name" ><br>
                                                        <input type="email" class="form-control" name="pat_email" placeholder="enter Patient email"><br>
                                                        <input type="submit" value="Appointment" class="btn btn-primary ml-3">
                                                       {{--                                                        <input type="text"  class="form-control" value="4:00 pn to 6:00 pm" readonly><br>--}}
                                                   </form>
                                                 </div>
                                                 
          

                                                 <!-- conainer end -->
                                                </div>
                                                
                                                <!-- Modal footer -->
                                                <div class="modal-footer mbody">
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>
                                          <!-- modal end -->
                    
       
      </div>
    </div>
  </div>
  <!-- col md end -->
  <div class="col-md-4 col-sm-4 mt-5 mb-5">
    <div class="card">
      <img src="images/doc3.jpg" class="card-img-top" alt="no">
      <div class="card-body">
        <h5 class="text-center"><b>Dr Grey</b></h5>
        <p class="text-center"><b>Child Specialist</b></p>
        <hr>
        <p class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile mr-3"></i>+1 631 127 8042</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal">Make an Appointment</a>
<!-- modal start -->
                                



                                <!-- The Modal -->
                                <div class="modal" id="myModal" data-backdrop="false">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                    
                                      <!-- Modal Header -->
                                      <div class="modal-header mbody">
                                        <h4 class="modal-title" ><img src="images/new_png.png" height="40" width="40" alt=""></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      
                                      <!-- Modal body -->
                                      <div class="modal-body mb">
                                       <div class="container">
                                           <form action="{{url('/doc')}}" method="post">
                                               {{csrf_field()}}
                                               <input type="text" class="form-control" name="dr_name" value="Dr Grey" readonly><br>
                                               <input type="text" class="form-control" name="dr_desig" value="Child Specialist" readonly><br>
                                               <input type="text"  class="form-control" name="time" value="4:00 pn to 6:00 pm" readonly><br>
                                               <input type="text"  class="form-control" name="fee" value="fee:40$" readonly><br>
                                               <input type="text" class="form-control" name="pat_name" placeholder="enter Patient name" ><br>
                                               <input type="email" class="form-control" name="pat_email" placeholder="enter Patient email"><br>
                                               <input type="submit" value="Appointment" class="btn btn-primary ml-3">
                                               {{--                                                        <input type="text"  class="form-control" value="4:00 pn to 6:00 pm" readonly><br>--}}
                                           </form>
{{--                                         <form action="" method="">--}}
{{--                                              <input type="text" class="form-control" value="Dr Shaun" readonly><br>--}}
{{--                                              <input type="text" class="form-control" value="NeuroSergen" readonly><br>--}}
{{--                                              <input type="text"  class="form-control" value="4:00 pn to 6:00 pm" readonly><br>--}}
{{--                                              <input type="text"  class="form-control" value="fee:40$" readonly><br>--}}
{{--                                              <input type="text" class="form-control" placeholder="enter Patiend name" name="name"><br>--}}
{{--                                              <input type="text" class="form-control" placeholder="enter Patiend email" name="name"><br>--}}
{{--                                              <input type="text"  class="form-control" value="4:00 pn to 6:00 pm" readonly><br>--}}
{{--                                         </form>--}}
                                       </div>
                                       

                                       <a class="btn btn-primary ml-3" href="order.html">&nbsp; Appointment &nbsp;</a>    
                                       <!-- conainer end -->
                                      </div>
                                      
                                      <!-- Modal footer -->
                                      <div class="modal-footer mbody">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>
                                      
                                    </div>
                                  </div>
                                </div>
                                <!-- modal end -->
          
       
      </div>
    </div>
  </div>
  <!-- colmd 4 end -->
  </div>
  <div class="row">
    <div class="col-md-4 col-sm-4 mt-5 mb-5">
      <div class="card" >
        <img src="images/doc1.jpg" class="card-img-top" alt="no">
        <div class="card-body">
          <h5 class="text-center"><b>Dr Shaun </b></h5>
          <p class="text-center"><b>Neurosurgeon</b></p>
          <hr>
          <p class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile mr-3"></i>+1 631 127 8042</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal">Make an Appointment</a>
            <!-- modal start -->
                                            
            
            
            
                                            <!-- The Modal -->
                                            <div class="modal" id="myModal" data-backdrop="false">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                
                                                  <!-- Modal Header -->
                                                  <div class="modal-header mbody">
                                                    <h4 class="modal-title" ><img src="images/new_png.png" height="40" width="40" alt=""></h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  </div>
                                                  
                                                  <!-- Modal body -->
                                                  <div class="modal-body mb">
                                                   <div class="container">
                                                     <form action="" method="">
                                                          <input type="text" class="form-control" value="Dr Shaun" readonly><br>
                                                          <input type="text" class="form-control" value="NeuroSergen" readonly><br>
                                                          <input type="text"  class="form-control" value="4:00 pn to 6:00 pm" readonly><br>
                                                          <input type="text"  class="form-control" value="fee:40$" readonly><br>
                                                          <input type="text" class="form-control" placeholder="enter Patiend name" name="name"><br>
                                                          <input type="text" class="form-control" placeholder="enter Patiend email" name="name"><br>
                                                          <input type="text"  class="form-control" value="4:00 pn to 6:00 pm" readonly><br>
                                                     </form>
                                                   </div>
                                                   
            
                                                   <a class="btn btn-primary ml-3" href="order.html">&nbsp; Appointment &nbsp;</a>    
                                                   <!-- conainer end -->
                                                  </div>
                                                  
                                                  <!-- Modal footer -->
                                                  <div class="modal-footer mbody">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                            <!-- modal end -->
                      
  
         
        </div>
      </div>
    </div>
  <!-- md 4 end -->
  <div class="col-md-4 col-sm-4 mt-5 mb-5">
    <div class="card">
      <img src="images/doc2.jpg" class="card-img-top" alt="no">
      <div class="card-body">
        <h5 class="text-center"><b>Dr Drake</b></h5>
        <p class="text-center"><b>Dentist</b></p>
        <hr>
        <p class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile mr-3"></i>+1 631 127 8042</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal">Make an Appointment</a>
          <!-- modal start -->
                                          
          
          
          
                                          <!-- The Modal -->
                                          <div class="modal" id="myModal" data-backdrop="false">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                              
                                                <!-- Modal Header -->
                                                <div class="modal-header mbody">
                                                  <h4 class="modal-title" ><img src="images/new_png.png" height="40" width="40" alt=""></h4>
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body mb">
                                                 <div class="container">
                                                   <form action="" method="">
                                                        <input type="text" class="form-control" value="Dr Shaun" readonly><br>
                                                        <input type="text" class="form-control" value="NeuroSergen" readonly><br>
                                                        <input type="text"  class="form-control" value="4:00 pn to 6:00 pm" readonly><br>
                                                        <input type="text"  class="form-control" value="fee:40$" readonly><br>
                                                        <input type="text" class="form-control" placeholder="enter Patiend name" name="name"><br>
                                                        <input type="text" class="form-control" placeholder="enter Patiend email" name="name"><br>
                                                        <input type="text"  class="form-control" value="4:00 pn to 6:00 pm" readonly><br>
                                                   </form>
                                                 </div>
                                                 
          
                                                 <a class="btn btn-primary ml-3" href="order.html">&nbsp; Appointment &nbsp;</a>    
                                                 <!-- conainer end -->
                                                </div>
                                                
                                                <!-- Modal footer -->
                                                <div class="modal-footer mbody">
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>
                                          <!-- modal end -->
                    
  
       
      </div>
    </div>
  </div>
  <!-- col md end -->
  <div class="col-md-4 col-sm-4 mt-5 mb-5">
    <div class="card">
      <img src="images/doc3.jpg" class="card-img-top" alt="no">
      <div class="card-body">
        <h5 class="text-center"><b>Dr Grey</b></h5>
        <p class="text-center"><b>Child Specialist</b></p>
        <hr>
        <p class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile mr-3"></i>+1 631 127 8042</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#myModal">Make an Appointment</a>
          <!-- modal start -->
                                          
          
          
          
                                          <!-- The Modal -->
                                          <div class="modal" id="myModal" data-backdrop="false">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                              
                                                <!-- Modal Header -->
                                                <div class="modal-header mbody">
                                                  <h4 class="modal-title" ><img src="images/new_png.png" height="40" width="40" alt=""></h4>
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body mb">
                                                 <div class="container">
                                                   <form action="" method="">
                                                        <input type="text" class="form-control" value="Dr Shaun" readonly><br>
                                                        <input type="text" class="form-control" value="NeuroSergen" readonly><br>
                                                        <input type="text"  class="form-control" value="4:00 pn to 6:00 pm" readonly><br>
                                                        <input type="text"  class="form-control" value="fee:40$" readonly><br>
                                                        <input type="text" class="form-control" placeholder="enter Patiend name" name="name"><br>
                                                        <input type="text" class="form-control" placeholder="enter Patiend email" name="name"><br>
                                                        <input type="text"  class="form-control" value="4:00 pn to 6:00 pm" readonly><br>
                                                   </form>
                                                 </div>
                                                 
          
                                                 <a class="btn btn-primary ml-3" href="order.html">&nbsp; Appointment &nbsp;</a>    
                                                 <!-- conainer end -->
                                                </div>
                                                
                                                <!-- Modal footer -->
                                                <div class="modal-footer mbody">
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>
                                          <!-- modal end -->
                    
  
       
      </div>
    </div>
  </div>
  <!-- colmd 4 end -->
  </div>
    </div>
    <!-- container end -->
  </div>
  <!-- doctor end -->
<br><br><br>

  <!-- footer -->
    
  <div class="container">
    <hr>
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
<!-- footer end -->
</body>
</html>