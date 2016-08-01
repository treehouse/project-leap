<?php
  $page_name = basename($_SERVER['PHP_SELF']);
  $page_name_short = str_replace('.php', '', $page_name);
?>

<ul class="guide-navigation-list">
  <?php
    foreach ($nav_items as $item) {
      echo '
        <li class="guide-navigation-item">
          <a href="' . str_replace(' ', '-', $item) . '" class="guide-navigation-link ' . ($item == $page_name_short ? 'guide-navigation-link--active' : "") . '">' . ucwords($item) . '</a>
        </li>
      ';
    }
  ?>
</ul>
