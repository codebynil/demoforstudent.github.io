<?php
include "dbcon.php";
// print_r($_POST);
if(isset($_POST['submit']))
{
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$batch = $_POST['batch'];
$email = $_POST['email'];
$english = $_POST['english'];
$hindi = $_POST['hindi'];
$math = $_POST['math'];
$science = $_POST['science'];
$history = $_POST['history'];
$geography = $_POST['geography'];
$remarks = $_POST['remarks'];
$totalmarks = $english + $hindi + $math + $science + $history + $geography;
// echo "<pre>";
// print_r($_POST);
// print_r($totalmarks);

$qry = "insert into report(first_name,last_name,batch,email,english,hindi,math,science,history,geography,remarks,total) values
('$fname','$lname','$batch','$email',$english,$hindi,$math,$science,$history,$geography,'$remarks',$totalmarks)     
";
$result = mysqli_query($conn,$qry);
print_r($result);
if($result > 0)
{
      
      ?>
      <script>
alert("data inserted successfully");
window.open('studentreport.php','_self');
</script>
      <?php
      // header('location:studentreport.php');
}
}
?>
