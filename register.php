<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>

    <!-- Bootstrap CSS -->      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

     <!-- Custom styles for this template-->
    <link href="static/register.css" rel="stylesheet" type="text/css"/>
    <link href="static/footer.css" rel="stylesheet" type="text/css"/>
</head>
 
<body>  
 
    <?php include 'validate.php';?>
 
 
    <div class="container"> <div class=" text-center mt-5 mb-5">
        <h1 style="color: skyblue">Register</h1>
    </div>
 
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form" method="POST" action='?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' onsubmit="func1()">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_name">Firstname *</label> 
                                                <input class="form-control mb-2 mr-sm-4" type="text" id="input" name="fname" value="<?php echo $fname;?>"> 
                                                <!-- Greets the user when he is typing his name -->
                                                    <script>
                                                      input.oninput = function() {
                                                        result.innerHTML = "Hello " + input.value + ", Welcome to CollegeSearch!";
                                                      };
                                                    </script> </div>
                                                    <span style="color: red;" class="error"><?php echo $fnameerror;?></span>
                                        </div>
 
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_lastname">Lastname *</label> 
                                                <input class="form-control mb-2 mr-sm-2" type="text" name="lname" value="<?php echo $lname;?>"> </div>
                                                <span style="color: red;" class="error"><?php echo $lnameerr;?></span>
                                        </div>
                                        <div class="col">
                                            <span  style="color: purple; font-size: 20px" id="result"></span>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_email">Email *</label> <input class="form-control mb-2 mr-sm-2" type="text" name="email" value="<?php echo $email;?>"> </div>
                                            <span style="color: red;" class="error"><?php echo $emailerr;?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_email">Contact Number *</label> <input class="form-control mb-2 mr-sm-2" type="text" name="phone" value="<?php echo $phone;?>"> </div>
                                            <span style="color: red;" class="error"><?php echo $phoneerr;?></span>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_email">Age *</label> <input class="form-control mb-2 mr-sm-2" type="text" name="age" value="<?php echo $age;?>"> </div>
                                            <span style="color: red;" class="error"><?php echo $ageerr;?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_email">CET Score *</label> 
                                                <input class="form-control mb-2 mr-sm-2" id="input1" type="text" name="cet" value="<?php echo $cet;?>">
                                                <!-- When CET score is more than 150, prints a message that user has high chances of getting a good college! -->
                                                    <script>
                                                      input1.oninput = function() {
                                                        if(input1.value > 150) {
                                                            result1.innerHTML = "Congratulations! You have very high chances of getting a good college."
                                                        } else {
                                                            result1.innerHTML = "";
                                                        }
                                                      };
                                                    </script> </div>
                                                <span style="color: red;" class="error"><?php echo $ceterr;?></span>
                                        </div>
                                        <div class="col">
                                            <span  style="color: purple; font-size: 20px" id="result1"></span>
                                        </div>
                                    </div>
 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_need">Your preferred branch *</label> <select id="branch" name="branch" class="form-control" required="required" data-error="Please specify your need.">
                                                    <option value="COMP">COMP</option>
                                                    <option value="IT">IT</option>
                                                    <option value="EXTC">EXTC</option>
                                                    <option value="MECH">MECH</option>
                                                    <option value="MECH">ETRX</option>
                                                </select> </div>
                                        </div>
                                    </div>
 
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                        Select Gender
                                        <div class="form-check"> 
                                            <input class="form-check-input" type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Male">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check"> 
                                            <input class="form-check-input"  type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Female">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Female
                                            </label>
                                        </div>
                                        <div class="form-check"> 
                                            <input class="form-check-input" type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Other">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Other
                                            </label>
                                        </div>
                                    </div>
 
                                    </div>
 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="form_message">Address *</label> <textarea id="comment" name="comment" class="form-control" placeholder="Write your address here." rows="4" required="required"> <?php echo $comment;?></textarea> </div>
                                        </div>
                                        <div class="col-md-12"> <input type="submit" name="submit" class="btn btn-success btn-send pt-2 btn-block " value="Submit"> </div>
                                    </div>

                                    <div>
                                        <div class="form-check form-check-inline ml-3 mt-3">
                                            <small class="text-muted">
                                                Already Registered?
                                                <a class="ml-2" href="login.php">Login Here</a>
                                            </small>
                                        </div>

                                    </div>
 
 
 
                                </div>
                            </form>
                        </div>
                    </div>
                    </div class="col-md-6">
                        <div class="col-md-12 text-center mt-4">
                            <a type="button" href="home.php" class="btn btn-info">Back to home</a>
                        </div>
                    </div>
                </div> <!-- /.8 -->
            </div> <!-- /.row-->
        </div>
    </div>
 
    <br><br>

    <div>
        
    <!-- Sticky Footer -->
    <!-- <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>KJSCE Internship Portal</span>
        </div>
      </div>
    </footer>
         -->
     
 
    <script>
        function func1() {
            alert("Thank You for filling out the form, you have been successfully registered to CollegeSearch website!")
        }
 
        function showName(e){
            result.innerHTML = "Hello " + input.value;
      
        }
    </script>
 
    <br>
 
    
    
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 
</body>
</html>
