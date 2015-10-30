<?php
/**
 * @file: related-items-by-path--item.tpl.php
 *
 *      Theming function for the Related Items By Path module.
 *
 *      Copy this file into your theme directory if you would like to override
 *      its output.
 *
 *      The following variables are available:
 *
 *        title: the node title.
 *
 *        image: the internal path to an image - you should run this through
 *          imagecache to create a usable-sized image.
 * @TODO: this needs to be made more self-sufficient; at the moment, we rely on the site providing an image cache setting.
 *
 *        summary_text: the summary text for the node's body content.
 *
 *        path: the path to the node, e.g. node/123.
 */
?>

<div class="related-item">
  <div class="related-item-image-container">
    <?php if ($image): ?>
      <a href="<?php print url($path) ?>"><img class="related-item-image" src="<?php print $image ?>"/></a>
    <?php else: ?>
      <span class="no-image"></span>
    <?php endif ?>
  </div>
  <h4><?php print l($title, $path) ?></h4>
  <?php if ($summary_text): ?>
    <p class="summary-text">
      <?php print $summary_text ?>
    </p>
  <?php endif ?>
</div>
