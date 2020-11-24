

<?php
    //Connecting to MongoDB
    $conn = new MongoDB\Driver\Manager("mongodb://localhost:27017/mydb");
    if($conn){
        echo "Connected to MongoDB database mydb successfully!"."<br>";
        try {
            $bulk = new MongoDB\Driver\BulkWrite;

            //Insertion of data
            $bulk -> insert(['_id' => new MongoDB\BSON\ObjectID , 'name' => 'Vishal', 'roll_num' => '1814107', 'address' => 'Panvel' ]);
            $bulk -> insert(['_id' => new MongoDB\BSON\ObjectID , 'name' => 'Aditya', 'roll_num' => '1814199', 'address' => 'Nagpur' ]);
 
            $result = $conn -> executeBulkWrite('mydb.students',$bulk);
            if(isset($result)){
            	echo "<br>";
                echo "Data has been inserted successfully!";
                echo "<br>";
            }
            $query = new MongoDB\Driver\Query([]);
            $rows = $conn->executeQuery("mydb.students", $query);
            foreach ($rows as $row) {
            	echo "Name: $row->name , Roll No: $row->roll_num, Address: $row->address\n". "<BR>";
            }
            echo "<br>";

            //Updation of Data
            $bulk -> update(['name' => 'Aditya'], ['$set' => ['address' => 'Mumbai']]);
            $result = $conn -> executeBulkWrite('mydb.students',$bulk);
            if(isset($result)){
            	echo "<br>";
                echo "Data has been Updates successfully!";
                echo "<br>";
            }

            $query = new MongoDB\Driver\Query([]);
            $rows = $conn->executeQuery("mydb.students", $query);
            foreach ($rows as $row) {
            	echo "Name: $row->name , Roll No: $row->roll_num, Address: $row->address\n". "<BR>";
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
?>
