<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8242250081259939"
     crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Label</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    table {
   width: auto;
   border-collapse: collapse;
   table-layout: fixed;
}

.cell-breakWord {
   word-wrap: break-word;
}
</style>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <img src="sccc.PNG" alt="ScholarshipBD" width="70" height="70"><br>
                        <h3>ScholarshipBD</h3>
                        <h4>ECHO GUIDE LABEL</h4>
                       
                    </div>
                    <div class="card-body">

                    <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="date" placeholder="Enter date" value="<?php if(isset($_GET['date'])){echo $_GET['date'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","id18359592_echobook","Echo1@@@@@@@","id18359592_bookorder");

                                    if(isset($_GET['date']))
                                    {
                                        $date = $_GET['date'];

                                        $query = "SELECT* FROM book WHERE date='$date' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                
  <table border="1" >
    <tr>
      <th rowspan="6"><p style="text-align:center;"><img src="sccc.PNG" width="70" height="70"><h4 style="text-align:center;"">ScholarshipBD</h4></p></th>
<th rowspan="6">   </th>
<th rowspan="6">   </th>
<th rowspan="6">   </th>
<th rowspan="6">   </th>
<th rowspan="6">   </th>
      <th bgcolor="Silver">From, </th>
      <th rowspan="6">   </th>
      <th rowspan="6">   </th>
      <th rowspan="6">   </th>
      <th rowspan="6">   </th>
      <th rowspan="6">   </th>
      <th rowspan="6">   </th>
      <th rowspan="6">   </th>
        <th colspan="2" bgcolor="Silver">To,</th>
</tr>
<tr>
  <td rowspan="5">ScholarshipBD<br>Pakundia, Kishoreganj<br>+8809696689888</td>
</tr>
<tr>
  <td colspan="2"> <?= $row['name']; ?></td>
</tr>
<tr>
  <td colspan="2">0<?= $row['phone']; ?></td>
</tr>
<tr>
  <td colspan="2"><?= $row['address']; ?></td>
</tr>
<tr>
  <td rowspan="2"><?= $row['thana']; ?>,</td>
  <td rowspan="2">    <?= $row['zila']; ?></td>
</tr>
<tr>
  <th rowspan="6">   </th>
  <th rowspan="6">   </th>
  <th rowspan="6">   </th>
  <th rowspan="6">   </th>
  <th rowspan="6">   </th>
</tr>
</div>
          
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found. If you are facing any problem sent a mail: scholarshipbdorg@gmail.com";
                                        }
                                    }
                                   
                                ?>
                                <br>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>