<?php
$title = $_POST['title'];
$desc = $_POST['desc'];
$account_no = $_POST['account_no'];
$bank = $_POST['bank'];
$holder = $_POST['holder'];
$transaction = $_POST['transaction'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$send_phone = isset($_POST['send_phone']);
$send_email = isset($_POST['send_email']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Output - Transaction Detail</title>
  <link rel="stylesheet" href="assets/css/output.css">
</head>
<body>

  <div class="navbar">
    <a href="#">Home</a> | <a href="#">Register</a> | 
    <a href="#">Policy</a> | <a href="#">About</a>
  </div>

  <div class="container">
    <div class="left">
      <div class="image-box"></div>
    </div>

    <div class="right">
      <div class="row"><label>Title Here :</label><span><?= htmlspecialchars($title) ?></span></div>
      <div class="row"><label>Description :</label><span><?= nl2br(htmlspecialchars($desc)) ?></span></div>
      <div class="row"><label>Total Amount :</label><span>£800</span></div>
      <div class="row"><label>Pay to :</label><span><?= htmlspecialchars($account_no) ?></span></div>
      <div class="row"><label>Payment Type :</label><span><?= htmlspecialchars($bank) ?></span></div>
      <div class="row"><label>Account Holder :</label><span><?= htmlspecialchars($holder) ?></span></div>
      <div class="row"><label>Account No :</label><span><?= htmlspecialchars($account_no) ?></span></div>

      <?php if ($send_phone): ?>
        <div class="row"><label></label><span style="color:green;">✔ Send to Mobile Phone</span></div>
      <?php endif; ?>
      <?php if ($send_email): ?>
        <div class="row"><label></label><span style="color:green;">✔ Email me copy of transaction</span></div>
      <?php endif; ?>

      <div class="row"><label>Send to Mobile Phone :</label><span><?= htmlspecialchars($phone) ?></span></div>
      <div class="row"><label>Send to Email :</label><span><?= htmlspecialchars($email) ?></span></div>

      <div class="row">
        <label></label>
        <button class="pay-btn">Pay using QuidLink</button>
      </div>
    </div>
  </div>
</body>
</html>
