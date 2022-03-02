<?php

echo "<script> alert('Welcome') </script> "

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-5" style="border: 2px solid rgb(9,169,233)">
                    <div class="card-header">
                        <h4><center>Filter Orders</center></h4>
                    </div>
                    <div class="card-body">

                        <form action="track-order-cust-Backend.php" method="POST">
                            
                            <div class="from-group mb-3" >
                                <label for="">Order  ID </label>
                                    <input type="number" name="orderId" class="form-control" style="border: 2px solid #787675"><br>
                                
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="track-by-order-id" class="btn btn-primary">Search</button>
                            </div>
                        </form>
<!----------------------------------------------------------------------------------------------->
                       
<!----------------------------------------------------------------------------------------------->
        

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>