<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Orders</title>
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

                        <form action="FO-Backend.php" method="POST">
                            
                            <div class="from-group mb-3" >
                                <label for="">Delivery Agent ID </label>
                                    <input type="number" name="delAgId" class="form-control" style="border: 2px solid #787675"><br>
                                
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="filter-pending-delivery" class="btn btn-primary">Search</button>
                            </div>
                        </form>
<!----------------------------------------------------------------------------------------------->
                        <form action="FO-Backend.php" method="POST">
                            
                            <div class="from-group mb-3">
                                <label for="">Damaged During Delivery Transit</label>
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="goods-damaged-during-delivery" class="btn btn-primary">Search</button>
                            </div>
                        </form>
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