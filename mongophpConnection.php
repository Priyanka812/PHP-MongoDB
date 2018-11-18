<?php

   // Connect to mongodb
   require 'vendor/autoload.php'; // include Composer's autoloader
   $client = new MongoDB\Client("mongodb://localhost:27017");
   // Select a database
   $db = $client->TestDatabase;

   createCollection("EmployeeCollection");

   $employee = array(
      "Name" => "Priyanka Giri",
      "Emp_ID" => 1127827,
      "Designation" => "Documentum Consultant",
      "Age" => 25,
      "Status" => "Single"
   );

	 //Now insert the document
   $collection->insertOne($employee);
   echo "Document inserted successfully";

   //Update the document
   $collection->updateMany(array("Name"=>"Priyanka Giri"),
   array('$set'=>array("Name"=>"Srishti Amin")));
   echo "Document updated successfully";

   //Remove the document
   $collection->deleteMany(["Name"=>"Srishti Amin"]);
   echo "Documents deleted successfully";

?>
