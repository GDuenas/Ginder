<?php


  
  //creating variables for form values
  //each variable recieves its value using the POST method to get the form values from creatingprofile.html
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gamertag = $_POST['gamertag'];
    $console = $_POST['console'];



  //function to connect to database server 
  //function parameters are dbname, password, for the phpAdminwebsite
    $dbconnection = new mysqli('localhost', 'root', '', 'mydatabasetest');

    //if statment in case error with connectin to the database
    if($dbconnection->connect_error){
		
      //error message
    echo "there is an error when connecting to the database";
    
	} 
  
  //else statement for when connection is successful
  else {

      //query to run that inputs the form values into the corressponding database values
        $queryCommand = $dbconnection->prepare("insert into profile(firstname, lastname, email, gamertag, console) values(?, ?, ?, ?, ?)");


        //calling blind_param to specify the data type of the input values and to reference the php varaibles from which they come from 
        //sssss specifies 5 string types will be inputted
        $queryCommand->bind_param("sssss",$firstname,$lastname, $email,$gamertag, $console);

        //execute the query 
        $queryCommand->execute();
		
        //success message
		echo "the Data has successfully inputted";

    //close the connection for both the queryCommand variable database connection variables
		$queryCommand->close();

    //close database connection
		$dbconnection->close();

    }


?>