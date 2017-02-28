<?php include 'partials/header.php'; ?>

<h1>
  <a href="index.php">
    <img class="logo" src="img/logo.png"/>
  </a>
</h1>

<h2 class="text-center">Thanks for the feedback <?= $name ?></h2>
<h2 class="text-center text-muted">We will reply to <?= $email ?> if we need to follow up.</h2>
<div class="text-center">
  <a href="index.php">Home</a>
</div>

<?php include 'partials/footer.php'; ?>