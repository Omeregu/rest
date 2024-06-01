<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Welcome to OnlineFoodOrderingWebsite.com</title>
</head>

<body>
    <h1> Online Food Delivery Service in Pune <h1>
    <form action ="services.php" name="myForm" onsubmit="return validateForm()" method="post">
        <div class="formdesign" id="name">
            Name: <input type="text" name="fname" required><b><span class="formerror"> </span></b>
        </div>

        <div class="formdesign" id="email">
            Email: <input type="email" name="femail" required><b><span class="formerror"> </span></b>
        </div>

        <div class="formdesign" id="phone">
            Phone: <input type="phone" name="fphone" required><b><span class="formerror"></span></b>
        </div>

        <div class="formdesign" id="Adress">
            Address: <input type="address" name="fadd" required><b><span class="formerror"></span></b>
        </div>

        <div class="formdesign" id="order">
            Enter your order: <input type="order" name="forder" required><b><span class="formerror"></span></b>
        </div>

        <input class="but" type="submit" value="Submit">

    </form>
</body>
<script src="order.js"></script>



</body>

</html>

</html>