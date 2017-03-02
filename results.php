<?php
//Inculde the config file which will contain database details etc.
require 'includes/config.php';

//BAD - Please don't us this line
// $searchQuery = $_GET['q'];

//Save the query submitted to a variable
$searchQuery = (!empty($_GET['q'])) ? htmlspecialchars($_GET['q'], ENT_QUOTES, 'utf-8') : '';

//Pullin the large data array
// $data = require 'includes/data.php';
// $data = searchWebsites($dbh, $searchQuery);

if (!empty($searchQuery)){
  //Here is where the magical function is called and returns the result
  // $terms = filterResults($searchQuery, $data);
  $terms = searchWebsites($dbh, $searchQuery);
}



require 'partials/header.php';
require 'partials/navigation.php';
?>



<!-- Content -->
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h4>Search results for <strong><?php echo $searchQuery; ?></strong></h4>
      <!-- Displayed results -->
      <ul class="list-group">

        <?php
        if (empty($terms)):
          ?>
        <li class="list-group-item notification-bar-fail m-b-1">


          <div class="notification-bar-details">
            <h3 class="notification-bar-title">
              Nothing was found :(<br>
            </h3>
            <p>
              <strong>Suggestions:</strong>
              <ul>
                <li>Make sure that all words are spelled correctly.</li>
                <li>Try different keywords.</li>
                <li>Try more general keywords.</li>
              </ul>

            </p>
          </div>
        </li>

        <?php
        else:
          foreach ($terms as $term): 
            ?>

          <!-- Single Result -->
          <li class="list-group-item notification-bar-fail m-b-1">
            <div class="notification-bar-details">
              <a href="<?= $term['url'] ?>" class="notification-bar-title">
                <!-- <?= $term['url'] ?>  --><?= $term['text'] ?>
              </a>
              <span class="text-muted"><?= $term['url'] ?></span>
            </div>
          </li>
          <!-- End of single result -->

          <?php
          endforeach;
          endif;
          ?>


        </ul>
      </div>
    </div>
  </div>


  <?php

  require 'partials/footer-bottom.php';
  require 'partials/footer.php';
  ?>
