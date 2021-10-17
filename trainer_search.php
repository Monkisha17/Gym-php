<html>
<head>
	<title>Patient details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <?php
include("func.php");
if(isset($_POST['patient_search_submit']))
{
    $contact=$_POST['search'];
     $query="select * from doctorapp where contact='$contact'";
    $result=mysqli_query($con,$query);
    echo "<div class='container-fluid' style='margin-top:50px;'>
    <div class'card'>
    <div class='card-body'><a href='trainer_details.php' class='btn brn-light'>Назад</a></div>
    <img src='images/pain.jpg'>
    <table class='table table-hover'>
        <thead>
     <tr>
            <th>Име</th>
            <th>Фамилия</th>
         <th>Email id</th>
         <th>Contact</th>
         <th>Trainer id</th>
        </tr>   
        </thead>
        <tbody>
        </div></div>";
    while ($row=mysqli_fetch_array($result)){
          $fname=$row ['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $contact=$row['contact'];
    $docapp=$row ['docapp'];
        echo " <tr>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$docapp</td>
        </tr>";
        }
        echo "</tbody></table></div></div></div>";
}
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
        </html> 