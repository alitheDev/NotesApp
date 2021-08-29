<html>
<head>

<!--Libraries for display bootstrap alert properly-->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<title>  Notes Made Easy    </title>


<style type="text/css">

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 20%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 4px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


h1	{text-align:center;
	font-family:Arial, Helvetica, Sans-Serif;
	}

p	{text-indent:20px;
	}

</style>
</head>

<body bgcolor = "#ffffcc" text = "#000000">

<!--Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h1> NotesApp <i class="fa fa-whatsapp" style="font-size:48px;color:red"></i>   </h1>


<?php

$conn = mysqli_connect("localhost", "root", "", "notes");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }

        //getting the input in a variable.
        $note =  $_REQUEST['note']; 

        //when the values are set by the server-side we have to make them BLANK from the user side... 
        $sql = "INSERT INTO posts VALUES ('', '$note', '')";   
          
        if(mysqli_query($conn, $sql)){
             
//  print "<center>";
 // print "<div class='alert alert-success'><strong>Success...!!!</strong> Your data is saved successfully </div>";
//  print "<hr style=' width:50%; color:grey; border:1px solid; '>";
//  print "</center>";

  print " <div class='product-options'> ";
  print "<p align='right'>";
  print " <a id='myWish' href='' class='btn btn-mini'>Fallow Me On Github </a> ";
  print " <a href='' class='btn btn-mini'> Fallow Me On Twitter </a> ";
  print "</p>";
  print "</div>";

print " <div class='alert alert-success' style='margin-right:545px; margin-left:545px;' id='success-alert'> ";
print " <button type='button' class='close' data-dismiss='alert'>x</button> "; 
print " <center><strong>Success...!!! </strong> Note is Added </center>"; 
print "</div>";




  
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>

<!-- we have set the action null bcoz we are doing it on the same page... -->
<form action="" method="get">
<div style=" border:1px solid; margin-left:130px; margin-right:130px; padding:9px; ">

<h3>
  <center>
                <label for="Note">Enter Your Note Here:</label>
                <br>
                <input type="text" name="note" id="Note">
              </h3>

      </center>

<center>      
<input type="submit" value="Save" class="btn btn-outline-success">
</center>

</div>
</form>


<center>


<br><br><br><br>

</body>
</html>