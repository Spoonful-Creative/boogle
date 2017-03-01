<?php
if (!empty($errors)) {
    var_dump($errors);
}
include 'partials/header.php'; ?>

<h1>
  <a href="index.php">
    <img class="logo" src="img/logo.png"/>
  </a>
</h1>

<form method="POST" action="process-feedback.php">
  <div class="container">
    <h2 class="text-center">Send some feedback:</h2>
    <div class="form-group row">
      <label for="name" class="col-2 col-form-label">Your name <span class="text-danger">* </span></label>
      <div class="col-10">
        <input class="form-control" id="name" name="name" autofocus type="text" placeholder="Jason Candle" value="">
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-2 col-form-label">Your Email <span class="text-danger">* </span></label>
      <div class="col-10">
        <input class="form-control" type="email" id="email" name="email" placeholder="jason@example.com" value="">
      </div>
    </div>
    <div class="form-group row">
      <label for="feedback" class="col-2 col-form-label">Your feedback <span class="text-danger">* </span></label>
      <div class="col-10">
        <textarea class="form-control" id="feedback" name="feedback" rows="3" placeholder="I like the..." value=""></textarea>
      </div>
    </div>

    <button type="submit" class="btn btn-primary pull-right">Submit</button>
  </div>
</form>

<?php include 'partials/footer.php'; ?>