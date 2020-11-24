<!DOCTYPE html>
<html>
<head>
	<title>MongoDB</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>


	<div class="container">
		
		<?php
			$var = 4;
		    //Connecting to MongoDB
			if(isset($_POST['submit'])) 
			{
				$conn = new MongoDB\Driver\Manager("mongodb://localhost:27017/mydb");
			    if($conn){
			        echo "Connected to MongoDB database mydb successfully!"."<br>";
			        try {
			            $bulk = new MongoDB\Driver\BulkWrite;

			            //Insertion of data
			            $bulk -> insert(['_id' => new MongoDB\BSON\ObjectID , 'name' => $_POST['name'], 'roll_num' => $_POST['roll'], 'address' => $_POST['add']]);
			 
			            $result = $conn -> executeBulkWrite('mydb.students',$bulk);
			            if(isset($result)){
			            	echo "<br>";
			                echo "Data has been inserted successfully!";
			                echo "<br>";
			            }
			            $query = new MongoDB\Driver\Query([]);
			            $rows = $conn->executeQuery("mydb.students", $query); ?>

			            <!-- Print all objects -->
			            <?php foreach ($rows as $row) : ?>
			            	<div class="card mt-2 mb-2" style="width: 18rem;">
							  <ul class="list-group list-group-flush">
							  	<input readonly name="type" value="<?php echo $row->name ?>" >
							  	<input readonly name="type" value="<?php echo $row->roll_num ?>" >
							  	<input readonly name="type" value="<?php echo $row->address ?>" >
							  </ul>
							</div>
			            <?php endforeach; ?>

					<?php 
			            //Updation of Data

						if(isset($_POST['update'])) {
							$bulk -> insert(['_id' => new MongoDB\BSON\ObjectID , 'name' => $_POST['name'], 'roll_num' => $_POST['roll'], 'address' => $_POST['add']]);
			            $result = $conn -> executeBulkWrite('mydb.students',$bulk);
			            if(isset($result)){
			            	echo "<br>";
			                echo "Data has been Updates successfully!";
			                echo "<br>";
			            }

			            $query = new MongoDB\Driver\Query([]);
			            $rows = $conn->executeQuery("mydb.students", $query); ?>

			            <?php foreach ($rows as $row) : ?>
			            	<div class="card my-3" style="width: 18rem;">
							  <ul class="list-group list-group-flush">
							  	<input type="hidden" name="type" value="<?= $row->name ?>" >
							  	<input type="hidden" name="type" value="<?= $row->roll_num ?>" >
							  	<input type="hidden" name="type" value="<?= $row->address ?>" >
							  </ul>
							</div>
			            <?php endforeach; ?>

				<?php
						}
			        }
			        catch (MongoDB\Driver\Exception\Exception $e) {
			            $filename = basename(__FILE__);
			            echo "The $filename script has experienced an error.\n";
			            echo "It failed with the following exception:\n";
			            echo "Exception:", $e->getMessage(), "\n";
			            echo "In file:", $e->getFile(), "\n";
			            echo "On line:", $e->getLine(), "\n";
			        }
			    }

			}
		    
		?>

		<!-- Form to insert data into mongodb database -->
		<form method="POST" class="mt-5 mx-5">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name</label>
		    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Roll No</label>
		    <input name="roll" type="text" class="form-control" id="exampleInputPassword1">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Address</label>
		    <input name="add" type="text" class="form-control" id="exampleInputPassword1">
		  </div>
		  <div class="row">
		  	<button type="submit" name="submit" class="btn btn-primary mx-3">Submit</button>
		  	<button type="submit" name="update" class="btn btn-primary mx-2">Update</button>
		  </div>
		  
		</form>

	</div>
	


<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>