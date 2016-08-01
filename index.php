<?php include_once('shared/_head.php'); ?>

<section id="index">
  <ul>
    <?php
      foreach ($nav_items as $item) {
        echo '
          <li>
            <a href="' . str_replace(' ', '-', $item) . '">' . ucwords($item) . '</a>
          </li>
        ';
      }
    ?>
  </ul>
</section>

<?php include_once('shared/_foot.php'); ?>
