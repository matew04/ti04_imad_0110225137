<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  $name = htmlspecialchars($_POST['name']);
  $address = htmlspecialchars($_POST['address']);
  $phone = htmlspecialchars($_POST['phone']);
  $email = htmlspecialchars($_POST['email']);
  $instructions = htmlspecialchars($_POST['delivery_instructions']);
  $crust = htmlspecialchars($_POST['pizza-crust']);
  $toppings = isset($_POST['toppings']) ? $_POST['toppings'] : [];
  $quantity = htmlspecialchars($_POST['quantity']);
?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>Pemesanan Pizza Telah Berhasil </title>
    <link rel="stylesheet" href="assets/css/output.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3176/3176382.png" type="image/x-icon">
  </head>

  <body>
    <fieldset class="fieldset-style">
      <h1 class="text-center">THANK YOU</h1>
      <hr class="border-style border-lightblue" />
      <p>Thank you for ordering from Blak Goose Bistro. We have received the
        <br> following information about your order:
      </p>
      <p class="text-orange">
        <b>Your Information</b>
      </p>
      <ul type="none">
        <li>
          <p>
            <b>Name:</b> <?= $name ?>
            <br>
            <b>Address:</b> <?= $address ?>
            <br>
            <b>Telephone number:</b> <?= $phone ?>
            <br>
            <b>Email Address:</b> <?= $email ?>
          </p>
        </li>
      </ul>
      <p>
        <b>Delivery instructions:</b> <?= $instructions ?>
      </p>
      <p class="text-orange">
        <b>Your pizza</b>
      </p>
      <ul type="none">
        <li>
          <p>
            <b>Crust:</b> <?= $crust ?>
            <br>
            <b>Toppings:</b>
            <?= implode(", ", $toppings) ?>
            <br>
            <b>Number:</b> <?= $quantity ?>
          </p>
        </li>
      </ul>
      <hr class="border-style border-lightsalmon" />
      <p> This site is for educational purposes only. No pizzas will be delivered</p>
    </fieldset>
  </body>

  </html>
<?php
} else {
  echo "<script>alert('Please fill out the form first.');</script>";
  exit();
}
?>