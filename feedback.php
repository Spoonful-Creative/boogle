<?php include 'partials/header.php'; ?>

<h1>
  <a href="index.php">
    <img class="logo" src="img/logo.png"/>
  </a>
</h1>

<div style="text-align: center;">
<form method="POST" action="thanks.php">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Feedback: <br>
<textarea rows="4" cols="50" name="feedback">
Enter text here...</textarea><br>
<input type="submit" /> 
</form>
</div>


<?php include 'partials/footer.php'; ?>
