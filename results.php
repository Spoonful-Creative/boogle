<?php
$searchQuery = $_GET['q'];

$data = require 'includes/data.php';

function filterResults($searchQuery, $data) {
        $matches = [];
 
        foreach ($data as $key => $value) {
          if (strpos(strtolower($value['text']), strtolower($searchQuery)) !== false) {
            $matches[] = $value;
          }
        }
        return $matches;
    }
 
$terms = filterResults($searchQuery, $data);


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
        ?>

      </ul>
    </div>
  </div>
</div>


<?php

require 'partials/footer-bottom.php';
require 'partials/footer.php';
?>
