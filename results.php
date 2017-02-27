<?php
$searchQuery = $_GET['q'];

$data = array(
  array(
    'text' => 'Apple',
    'url' => 'http://apple.com'
    ),
  array(
    'text' => 'Bakers delight',
    'url' => 'http://bakersdelight.com'
    ),
  array(
    'text' => 'Twitter',
    'url' => 'http://twitter.com'
    ),
  );
// die(var_dump($data));
foreach ($data as $term) {
    echo '<a href="' . $term['url'] . '">' . $term['text'] . '</a></br>';
}

die();



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
        <!-- Single Result -->
        <li class="list-group-item notification-bar-fail m-b-1">
          <div href="#" class="notification-bar-icon">
            <div>
              <i></i>
            </div>
          </div>

          <div class="notification-bar-details">
          <a href="$url" class="notification-bar-title">
              $searchQuery['text']
            </a>
            <span class="text-muted">$searchQuery['url']</span>
          </div>
        </li>
        <!-- End of single result -->
        <li class="list-group-item notification-bar-fail m-b-1">
          <div href="#" class="notification-bar-icon">
            <div>
              <i></i>
            </div>
          </div>

          <div class="notification-bar-details">
          <a href="$url" class="notification-bar-title">
              $searchQuery['text']
            </a>
            <span class="text-muted">$searchQuery['url']</span>
          </div>
        </li>
        <!-- End of single result -->
        <li class="list-group-item notification-bar-fail m-b-1">
          <div href="#" class="notification-bar-icon">
            <div>
              <i></i>
            </div>
          </div>

          <div class="notification-bar-details">
          <a href="$url" class="notification-bar-title">
              $searchQuery['text']
            </a>
            <span class="text-muted">$searchQuery['url']</span>
          </div>
        </li>
        <!-- End of single result -->
      </ul>
    </div>
  </div>
</div>


<?php

  require 'partials/footer-bottom.php';
  require 'partials/footer.php';
?>
