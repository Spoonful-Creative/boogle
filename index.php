<?php
require 'partials/header.php';
?>

  <div class="container">
    <div class="row">
      <h1>
        <a href="index.php">
          <img class="logo" src="img/logo.png"/>
        </a>
      </h1>
    </div>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 col-sm-12">
      <form action="results.php" method="GET">
          <div class="field" id="searchform">
            <input type="text" name="q" autofocus required />

            <button type="submit" id="search">Search</button>
          </div>
      </div>
      </form>
      <div class="col-md-2"></div>
    </div>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 links">
      <a href="#">
          I'm feeling lucky
        </a>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>

<?php
  require 'partials/footer.php';
?>