<?php
      include "dbcon.php";
      if(isset($_GET['detailid']))
      {
            $id = $_GET['detailid'];
      }
    
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
            <a class="btn btn-primary btn-sm" href="studentform.php">Student Form</a>
            <a class="btn btn-primary btn-sm" href="studentreport.php">Student Report</a>
      </div><hr>
      <div class="container">
            <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                                    <th>Name</th>   
                                    <th>English</td>                                
                                    <th>Hindi</td>
                                    <th>Math</td>
                                    <th>Science</td>
                                    <th>History</td>    
                                    <th>Geography</td>
                                    <th>Total</th>
               
                
            </tr>
        </thead>
       
            <?php

                  $sql = "select * from report where id=".$id;
                  $result = mysqli_query($conn, $sql);


                  $tot = mysqli_num_rows($result);
                  if($tot<1)
                  {
                        echo "No records found";
                  }
                  else{
                        $data = mysqli_fetch_assoc($result);
            ?>
                  <tbody>
                        <tr>
                                                <td><?php echo $data['first_name'] ?></td>
                                                <td><?php echo $data['english'] ?></td>                       
                                                <td><?php echo $data['hindi'] ?></td>
                                                <td><?php echo $data['math'] ?></td>
                                                <td><?php echo $data['science'] ?></td>                       
                                                <td><?php echo $data['history'] ?></td>
                                                <td><?php echo $data['geography'] ?></td>
                                                <td><?php echo $data['total'] ?></td>
                        </tr>
                  </tbody>

            <?php } ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
        crossorigin="anonymous">
</script>
</body>
</html>