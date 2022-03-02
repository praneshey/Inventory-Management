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
                        <h4><center>Search Products</center></h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST">
                            
                            <div class="from-group mb-3" >
                                <label for="">Product ID </label>
                                    <input type="number" name="productId" class="form-control" style="border: 2px solid #787675"><br>
                                
                            </div>
                            <div class="from-group mb-3" >
                                <label for="">Product Quantity </label>
                                    <input type="number" name="productQuantity" class="form-control" style="border: 2px solid #787675"><br>
                                
                            </div>
                            <div class="from-group mb-3">
                                <button type="submit" name="search-by-prdtId" class="btn btn-primary">Search</button>
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
<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "mydb";  
$con = mysqli_connect($host, $user, $password, $db_name);  

if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
else
{
    if(isset($_POST['search-by-prdtId']))
    {
        $pId=$_POST['productId'];
        
        $pQuantity=$_POST['productQuantity'];
        $sql="select p_quantity from products_db where p_id='$pId'";
        
        if($q=mysqli_query($con,$sql))
        {
            $t=mysqli_fetch_array($q);
            $availableQuantity=intval($t[0]);
            if($availableQuantity<$pQuantity) 
            {
                $val1=($pQuantity-$availableQuantity);
                echo "<script> alert('Oops!!! Product is unavailable') </script>";
                echo "<script> alert('There is a Shortage of  $val1 items')</script>";
            }
            else if($availableQuantity>=$pQuantity)
            {
                $val2=($availableQuantity-$pQuantity);
                echo "<script> alert('Yes the Product is available')</script>";
                echo "<script> alert('Still $val2 items left in the inventory') </script>";
            } 
        }
        else "<script>alert('Searching Failed')</script>";
        
        
    }
}
?>