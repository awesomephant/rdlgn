<?php
/**
 * The Sidebar containing the sub-navigation
 *
 * @package grid
 * @since grid 1.0
 */
?>
<aside>
<?php
  if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  if ($children) { ?>
  <nav>
  <ul>
  <?php echo $children; ?>
  </ul>
  </nav>
  <?php } ?>
</aside>