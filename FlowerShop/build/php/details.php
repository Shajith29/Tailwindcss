<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Checkout Form</title>
     <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    <link rel="stylesheet" href="/Flowershop/build/css/shipping.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="payment">
        <h2>Shipping Details</h2>
        <form class="form" method = "post" action = "product.php">
          <div class="card space icon-relative">
            <label class="label">Name:</label>
            <input type="text" class="input" placeholder="Name" name = "name" required />
            <i class="fas fa-user"></i>
          </div>
          <div class="card space icon-relative">
            <label class="label">Email ID:</label>
            <input type="email" class="input" placeholder="Email Id" name = "email" required />
            <i class="fa fa-envelope"></i>
          </div>
          <div class="card space icon-relative">
            <label class="label">Ph No:</label>
            <input type="number" class="input" placeholder="Phone Number" name = "phno" required />
            <i class="fa fa-phone" aria-hidden="true"></i>
          </div>
          <div class="card-item icon-relative">
            <label class="label">Address:</label>
            <input type="text" class="inputaddress" name = "address" required />
          </div>
          <br />
          <div class="card-item icon-relative">
            <label class="label">Pincode:</label>
            <input type="number" class="inputpin" placeholder="" name = "pincode"required />
          </div>

          <div class="card-item icon-relative btn-container" >
            <input type = "submit" name = "submit" value = "Submit" class = "btn" >
          </div>
</form>
        </div>
      </div>
    </div>
  </body>
</html>
