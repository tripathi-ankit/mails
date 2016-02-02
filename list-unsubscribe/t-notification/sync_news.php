<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<p>Hi <?php echo $user['full_name']; ?> (<?php echo e_anchor('@'.$user['username'], '@'.$user['username']);?>), your <?php echo $total_count; ?> posts have been updated.</p>
<br>

<?php
foreach ($actor_post_feeds as $post)
{
  // var_dump($post);
  ?>
  <p>
    <small><strong><?php echo strtoupper($post['service']); ?>: <?php echo $post['post_count']; ?> Posts</strong></small>
  </p>

  <?php
  if (!empty($post['url_data']['thumbnail_url']))
  {
    echo e_anchor('url/'.$post['url_data']['url_id'], e_img($post['url_data']['thumbnail_url']));
  }
  ?>
  
  <p>
  <strong>
    <?php echo e_anchor('url/'.$post['url_data']['url_id'], $post['url_data']['title']); ?>
  </strong>
  <br>
  <?php if (!empty($post['url_data']['description'])) echo $post['url_data']['description']; ?>
  </p>

  <br>
  <?php echo e_hr(); ?>
  <br>
  <?php
}
?>
<br>

<p>
  Keep Posting!<br>
  &mdash; The <?php echo app_name(); ?> Team
</p>
