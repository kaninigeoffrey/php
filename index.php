<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="css/style.css" type="text/css" />
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2 align="center" class="well">  Registration Form    </h2>   
    <div class="col-lg-12 well">
    <div class="row">
                <form method="POST" action="register.php" enctype="multipart/form-data">
                    <div class="col-sm-12">

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label>Admission Number</label>
                                  <input class="form-control" type="text" name="admn_no" placeholder="Enter Admission Number" >
                            </div>

                            <div class="form-group col-sm-4">
                                <label>Surname</label>
                                  <input class="form-control" type="text" name="sname" placeholder="Enter Surname" >
                            </div>

                            <div class="form-group col-sm-4">
                                <label>Firstname</label>
                                  <input class="form-control" type="text" name="fname" placeholder="Enter Firstname" >
                            </div>
                        </div> 

                    <div class="row"> 
                       <div class="col-sm-4 form-group">
                                <label> Gender: </label>
                                <div class="radio">
                                <label class="radio-inline"><input type="radio" name="gender" value="male" checked required> Male </label>
                                <label class="radio-inline"><input type="radio" name="gender" value="female" required> Female </label>
                                </div>
                            </div>

                             <div class="form-group col-sm-4">
                                <label>Email</label>
                                 <input class="form-control" type="text" name="email" placeholder="enter email address" >
                            </div> 

                             <div class="form-group col-sm-4">
                                <label>Phone</label>
                                 <input class="form-control" type="text" name="contact" placeholder="enter phone number" >
                            </div> 
                       </div>

                     <div class="row"> 
                      <div class="col-sm-4 form-group">
                                <label> Year of Study: </label>
                                 <select class="form-control" name="year">
                                 <option> Year 1 </option>
                                 <option> Year 2 </option>
                                 <option> Year 3 </option>
                                 <option> Year 4 </option>
                                </select>
                            </div>  

                             <div class="form-group col-sm-4">
                                <label>Faculty</label>
                                <input class="form-control" type="text" name="faculty" placeholder="enter the Faculty" >
                            </div> 

                             <div class="form-group col-sm-4">
                                <label>Department</label>
                                <input class="form-control" type="text" name="depart" placeholder="enter your Department" >
                            </div> 
                       </div>
          
        

        <div class="row">
            <button type="submit" name="signup" class="btn btn-md btn-info">Submit</button>
             <button type="reset" class="btn btn-md btn-warning">Clear</button>  
             <a href="view.php"> <button class="btn btn-md btn-success">View</button>
            <!--  <a href="view.php"><button class="btn btn-md btn-success"> sit our HTML tutorial</a -->
    </div>
            
   
    </form>
    </div>  

</div>

</body>
</html>