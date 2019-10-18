
<?php snippet('header'); ?>
<main>
  <div class="error-page-copy">
    <h1 class="error-title">
      <?php echo $page->title()->html(); ?></h1>
    <div class="error-text">
      <?php echo $page->text()->kirbytext(); ?></div>
  </div>
</main>
<?php snippet('footer'); ?>