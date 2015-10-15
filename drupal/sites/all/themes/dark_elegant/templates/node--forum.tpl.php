
<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php endif; ?>
    <?php if (!$page): ?>
      <header>
<?php endif; ?>
      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
      <h2 class="title" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
  
      

    <?php if (!$page): ?>
      </header>
  <?php endif; ?>
<div class="forum-starter-picture"><?php print $user_picture; ?></div>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
    
      print render($content);
    ?>
  </div>

<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>
