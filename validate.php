<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
    <?php
    // define variables and set to empty values
    $fname = $email = $gender = $comment = $age = $branch = $lname = "";
    $school = $cet = $phone = "";
 
    $fnameerror = $brancherror = $phoneerr = $emailerr = $lnameerr = $ageerr = $ceterr = "";
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $fnameerror = "Name is required!";
        } 
        else if (preg_match("/[^A-Za-z'-]/",$_POST['fname'] )) {
            $fname = test_input($_POST["fname"]);
            $fnameerror = "Name must contain alphabets only!";
        } 
        else {
            $fname = test_input($_POST["fname"]);
        }
 
        if (empty($_POST["branch"])) {
            $brancherror = "Branch is required!";
        } else {
            $branch = test_input($_POST["branch"]);
        }
 
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
        if (empty($_POST["email"])) {
            $emailerr = "Email cannot be empty";
        }
        else if(preg_match ($pattern, $email) ){
           $email = test_input($_POST["email"]);
           $emailerr = "Entered email is not valid!";
        } 
        else {
            $email = test_input($_POST["email"]);
        }
 
        if (empty($_POST["cet"])) {
          $cet = "";
        } 
        else {
          $cet = test_input($_POST["cet"]);
          if($cet > 200) {
            $ceterr = "CET Score must be less than 200!";
          }
        }
 
 
        if (empty($_POST["age"])) {
          $age = "";
        } 
        else {
          $age = test_input($_POST["age"]);
          if (! preg_match ("/^[0-9]*$/", $age) ) {
            $ageerr = "Age must be number only.";
          }
        }
 
        if (empty($_POST["comment"])) {
          $comment = "";
        } else {
          $comment = test_input($_POST["comment"]);
        }
 
        if (empty($_POST["lname"])) {
          $lnameerr = "Last name is reuired!";
        }
        else if (preg_match("/[^A-Za-z'-]/",$_POST['lname'] )) {
            $lname = test_input($_POST["lname"]);
            $lnameerr = "Name must contain alphabets only!";
        }  
        else {
          $lname = test_input($_POST["lname"]);
        }
 
        $length = strlen ($phone);
        if (empty($_POST["phone"])) {
          $phoneerr = "Enter a phone number!";
        } 
        else if(!preg_match ("/^[0-9]*$/", $phone) ){
          $phone = test_input($_POST["phone"]);
          $phoneerr = "Phone number must contain numbers only!";
        } 
        else if( $length < 10 or $length > 10) {
           $phone = test_input($_POST["phone"]);
           $phoneerr = "Phone number must be of length 10";
        }
        else {
          $phone = test_input($_POST["phone"]);
        }
 
        if (empty($_POST["gender"])) {
          $gender = "";
        } else {
        $gender = test_input($_POST["gender"]);
        }
    }
 
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>
    
</body>
</html>
 
