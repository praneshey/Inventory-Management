<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css files/invDashboardStyle.css">
        <script src="https://kit.fontawesome.com/b024a0525a.js" crossorigin="anonymous"></script>
       
    </head>

    <body> 
        <div class="trackOrder">
            <h4>Inventory DashBoard </h4>
            <form method="post" action="track-order.php">
            <input type="number" class="ip" name="orderId" >
            <button class="trackOrder-btn" type="submit" name="track" value="submit"><i class="fas fa-truck-moving "></i> Track</button><br>
            </form>
        </div>
        <div style="text-align: center;">
                <button class="button checkAvailabilityButton" onclick="location.href='check_product_availability.php'">
                    <i class="fas icon-btn fa-search"></i>
                     Search Product
                 </button>
            
                <button class="button productsCRUD" onclick="location.href='products_crud.php'">
                    <i class="fas icon-btn fa-shopping-cart"></i> 
                    Products CRUD
                </button>
            
                <button class="button ordersCRUD" onclick="location.href='orders-crud.php'">
                <i class="fas icon-btn fa-shopping-cart"></i> 
                    Orders CRUD
                </button>
            
                <button class="button filterProductsButton" onclick="location.href='filter_products.php'">
                <i class="fas icon-btn fa-filter"></i> 
                    Filter Products
                </button>
            
                <button class="button filterProductsButton" onclick="location.href='filter_orders.php'">
                        <i class="fas icon-btn fa-filter"></i> 
                    Filter Orders
                </button>
        </div>
        <footer>
            <i class="fas fa-truck fa-8x truck-img"></i>
            <hr>
        </footer>
        
    </body>
</html>