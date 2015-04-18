<?php
if( get_next_posts_link() || get_previous_posts_link() ) {
?>
  <!-- post pagination -->
  <nav id="pagination">
<?php
$previous = get_previous_posts_link('<<<');
$next = get_next_posts_link('>>>');
if ($previous) {
  echo $previous;
}
if ($previous && $next) {
  echo ' &#124; ';
}
if ($next) {
  echo $next;
}
?>
  </nav>
<?php
}
?>
