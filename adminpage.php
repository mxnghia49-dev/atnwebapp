<html>
<head>
    <link rel="stylesheet" href="./admin.css">
</head>
<body>
    <h1>
        Admin Page
    </h1>
    <div class="grid-view">
        <div class="view">
            <form action="database.php">
                <h2 style="text-align: center;">
                    New order
                </h2>
                <div class="form-type">
                    <label for="product-name">Product name:</label><input type="text" name="product-name"><br>
                    <label for="product-number">Product Number:</label><input type="number" name="product-number" min="1" style="width: 50px" value="1"><br>
                    <label for="cus-name">Customer Name:</label> <input type="text" name="cus-name"><br>
                    <label for="cus-phone">Customer Phone Number:</label><input type="text" name="cus-phone" placehoder="type customer phone number here"><br>
                    <button type="submit"> Add new order</button>

                </div>
            </form>
        </div>
        <div class="view">

        </div>
    </div>
</body>
</html>