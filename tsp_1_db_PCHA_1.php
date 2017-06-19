<?php
session_start();
?>

<?php
$servername = 'localhost';
$username='root';
$password = '';
$dbname = '';
?>


<html>

<head>
</head>



<body>

<form name='form_1' method='post' action = 'tsp_2_db_PCHA_1.php'>

PLEASE INPUT THE NUMBER OF VERTICES IN THE GRAPH: 

<br/><br/>
( For eg:- if there are 5 vertices in a graph , then please type 5 in the input box given below and press 'Submit' button ).
<br/><br/>

VERY IMPORTANT :- AS EACH FORM IS PROCESSED AND IF SOME PHP COMPILER ERROR MESSAGES ARE SHOWN WHICH IS NOT EASILY UNDERSTOOD, THEN IT IS BETTER TO START THE PROGRAM AGAIN AFRESH AS FROM THIS PAGE RATHER THAN PRESSING THE BACK BUTTON ON THE BROWSER USING THE SAME DATA AGAIN, WHERE THE OLD DATA MIGHT NOT BE CORRECT DATA.
THIS PROGRAM IS DESIGNED FOR PROCESSING ANY NUMBER OF VERTICES OF THE TRAVELLING SALESMAN PROBLEM FOR COMPLETE GRAPHS.  BUT EVEN AFTER CHANGING 'max_input_vars' SETTINGS IN PHP, THE 'UNDEFINED WEIGHT' ERRORS IS STILL PRESENT WHEN THE PROGRAM EXECUTES FOR 33 VERTICES AND ABOVE. MAYBE IN OTHER NEWER VERSIONS OF PHP, CHANGING THE SETTINGS OF 'max_input_vars' MIGHT STOP THE 'UNDEFINED WEIGHT' ERROR MESSAGES .SO PLEASE NOTE THAT THIS PROGRAM CAN PROCESS ONLY UPTO 32 VERTICES (ie:- INCLUDING 32 VERTICES) BECAUSE FROM 33 VERTICES ONWARDS, PHP SHOWS 'UNDEFINED WEIGHT' ERRORS. THIS HAS SOME CONNECTION WITH THE 'INPUT VALUES OF 1000 EXCEEDED' ERROR OF PHP.  

<br/><br/>

No of vertices :

<input type='text' name='no_of_vertices' value="" />

<br/><br/>

Please select the table :
<select name='selected_table'>
<option value="please_select" selected="selected">PLEASE SELECT TABLE</option>

<?php 

$servername = 'localhost';
$username='root';
$password='';
$dbname='tsp_data_for_program_database';

$connection = mysqli_connect($servername,$username,$password,$dbname) or die('Could not connect to server or get database');
$query = "select distinct table_name from information_schema.columns where table_schema='tsp_data_for_program_database'";
$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result))
{

?>

<option value='<?php echo $row['table_name']; ?>'><?php echo $row['table_name']; ?></option>

<?php 
}
mysqli_close($connection);
?>

</select>

<br/><br/>

<input type="submit" name="button_1" value="Submit";/>
</form>


</body>


</html>



<?php


?>