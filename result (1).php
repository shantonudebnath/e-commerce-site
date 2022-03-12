<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8242250081259939"
     crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Grammar Model Test Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <img src="sccc.PNG" alt="ScholarshipBD" width="70" height="70"><br>
                        <h3>ScholarshipBD</h3>
                        <h4>English Grammar Model Test Result</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="Phone" placeholder="Enter Your Phone Number" value="<?php if(isset($_GET['Phone'])){echo $_GET['Phone'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search Your Result</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","id18359592_grammar","Yasinmia1@@@@","id18359592_englishgrammar");

                                    if(isset($_GET['Phone']))
                                    {
                                        $Phone = $_GET['Phone'];

                                        $query = "SELECT * FROM EN WHERE Phone='$Phone' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" value="<?= $row['Name']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Phone</label>
                                                    <input type="text" value="<?= $row['Phone']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Mark</label>
                                                    <input type="text" value="<?= $row['Mark']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Merit Position</label>
                                                    <input type="text" value="<?= $row['Merit Position']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Remark</label>
                                                    <input type="text" value="<?= $row['Remark']; ?>" class="form-control">
                                                </div>
                                                <div>
                                                     <h1>Sample Answer</h1>
    <p>Open a PDF file <a href="https://scholarshipbdorg.000webhostapp.com/answer.pdf">Click Here For Download</a>.</p>
                                                    
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
<br>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8242250081259939"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-fb+5w+4e-db+86"
     data-ad-client="ca-pub-8242250081259939"
     data-ad-slot="6399438577"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br>
<!-- hitwebcounter Code START -->
<a href="https://www.hitwebcounter.com" target="_blank">
<img src="https://hitwebcounter.com/counter/counter.php?page=7934435&style=0024&nbdigits=7&type=page&initCount=0" title="Free Counter" Alt="web counter"   border="0" /></a>         
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