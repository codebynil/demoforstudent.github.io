<?php
      include "dbcon.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Report</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
      <script>
            $(document).ready(function () {
            $('#example').DataTable();
            });
      </script>
</head>
<body>
      <div class="container mt-3">
<a class="btn btn-primary btn-sm" href="index.html">Back</a>
      </div><hr>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Batch / Class</th>
                <th>Email</th>
                <th>Remarks</th>
                <th>Grade</th>
                <th>View Marks</th>
               
                
            </tr>
        </thead>
       
            <?php

$sql = "select * from report";
$result = mysqli_query($conn, $sql);


// if()
$tot = mysqli_num_rows($result);
if($tot<1)
{
      echo "No records found";
}
else
{    
      while($data = mysqli_fetch_assoc($result))
      // echo $data['total'];
      // if($data['total'])
      {
                  $gradevalue=$data['total']/600*100;
                  if($gradevalue > 75)
                  {
                        $grade = "Distinction";
                  }
                  elseif($gradevalue >= 60 && $gradevalue <= 74)
                  {
                        $grade = "First Class";
                  }
                  elseif($gradevalue >= 33 && $gradevalue <= 59)
                  {
                        $grade = "Pass";
                  }
                  else{
                        $grade = "Fail";
                  }
                  ?>
                   <tbody>
            <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['first_name'] ?></td>
            <td><?php echo $data['last_name'] ?></td>
            <td><?php echo $data['batch'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['remarks'] ?></td>
            <td><?php echo $grade ?></td>
            <td>
           <a class="btn btn-primary btn-sm" href="detail.php?detailid=<?php echo $data['id']?>">View</a>
           <!-- <input type="hidden" name="id" value="<?php echo $data['id']?>"> -->
            </td>
            

<?php
      }
      }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
        crossorigin="anonymous">
</script>
</body>
</html>
