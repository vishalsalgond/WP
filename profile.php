<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=</, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container my-4 px-4">
    <div class="card mb-3">
        <div class="card-header">
        <i class="fa fa-fw fa-cog"></i>
        Profile settings</div>
        <div class="card-body">
                <div class="form-group">
                <div class="form-row">
                    <div class="col-sm-3 col-md-3">
                        <i class="fa fa-user-circle fa-fw" style="font-size:150px"></i>
                        <br><br>
                        <label for="staticid" class="col-form-label"><b>Name :</b></label>
                            <input type="text" required="required" readonly class="form-control-plaintext" id="staticid" value="<?php echo $_SESSION['fname'] . " " . $_SESSION['lname'] ?>">
                
                        <label for="staticid" class="col-form-label"><b>Email :</b> </label>
                            <input type="text" readonly class="form-control-plaintext" id="staticid" value="<?php echo $_SESSION['email'] ?>">   		
                    </div>
                <!-- End of column 1 -->
                    <div class="col-sm-9 col-md-9 mt-3">
                    <div id = "tab">
                    <form method="post" onsubmit="return validation()" action="profile.php">
                        <div class="row my-2">

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username">Phone</label>
                                    <input type="text" id="username" required="required" name = "username" class="form-control" value="<?php echo $_SESSION['phone'] ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username">State</label>
                                    <input type="text" id="username" required="required" name = "username" class="form-control" value="<?php echo $_SESSION['state'] ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>

                        
                        </div>

                        <div class="row my-2">

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username">CET Rank</label>
                                    <input type="text" id="username" required="required" name = "username" class="form-control" 
                                    value="<?php 
                                    if($_SESSION['cet'] == 0) echo "NA";
                                    else echo $_SESSION['cet'];     
                                    ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username">JEE Main Rank</label>
                                    <input type="text" id="username" required="required" name = "username" class="form-control" 
                                    value="<?php 
                                    if($_SESSION['jee_main'] == 0) echo "NA";
                                    else echo $_SESSION['jee_main'];     
                                    ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username">JEE Advance Rank</label>
                                    <input type="text" id="username" required="required" name = "username" class="form-control" 
                                    value="<?php 
                                    if($_SESSION['jee_adv'] == 0) echo "NA";
                                    else echo $_SESSION['jee_adv'];     
                                    ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>
                        
                        </div>

                        <div class="row my-2">

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username">Category</label>
                                    <input type="text" id="username" required="required" name = "username" class="form-control" value="<?php echo $_SESSION['category'] ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <div class="form-label-group">
                                     <label for="username">Gender</label>
                                    <input type="text" id="username" required="required" name = "username" class="form-control" 
                                    value="<?php 
                                    if ($_SESSION['gender'] == "M") echo "Male";
                                    else if ($_SESSION['gender'] == "F") echo "Female";
                                    else echo "Other"
                                    ?>">
                                    <span id="user" class="text-danger font-weight-bold"> </span>
                                </div>
                                </div>
                            </div>

                        
                        </div>
                        
                            <button type="submit" class="btn btn-success" name = "save1">Save changes</button>
                            <button type="button" class="btn btn-success" name = "change" onclick="loadDoc('<?php echo $password; ?>')">Change Password</button>
                    </form>
                
                        </div>
                <!-- End of tab -->
                    </div>
                <!-- End of column 2 -->
                </div>
            </div>
        </div>
        <!-- End of card body -->
    </div>
          <!-- End of card -->
    </div>

</body>
</html>