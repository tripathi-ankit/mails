<p>
  <strong><?php echo $activity['user']['full_name']; ?></strong> (<?php echo e_anchor('@'.$activity['user']['username'], '@'.$activity['user']['username']); ?>)
  <?php
  switch ($activity['type'])
  {
    case 'actor':
      echo 'added '.ucfirst($activity['actor']['service']);
      if (!empty($activity['actor']['custom_url'])) echo '<p>'.$activity['actor']['custom_url'].'</p>';
      elseif (!empty($activity['actor']['url'])) echo '<p>'.$activity['actor']['url'].'</p>';
      break;

    case 'actor.guest':
      $guest_user = $activity['actor.guest']['guest_user'];
      echo 'added '.ucfirst($activity['actor']['service']).' to ';
      echo e_anchor('@'.$guest_user['username'], $guest_user['full_name'].' (@'.$guest_user['username'].')').'<br>';

      echo '<strong>';
      echo !empty($activity['actor.guest']['full_name']) ? $activity['actor.guest']['full_name'] : $activity['actor.guest']['x_actor_id'];
      echo '</strong>';
      echo !empty($activity['actor.guest']['custom_url']) ? ' '.$activity['actor.guest']['custom_url'] : (!empty($activity['actor.guest']['url']) ? ' '.$activity['actor.guest']['url'] : '');
      break;

    case 'comment':
      echo 'commented:';
      echo '<p><i>"'.$activity['comment']['message_html'].'"</i></p>';
      $url_data = $activity['comment']['url_data'];
      break;

    case 'collection':
      echo 'added to collection:';
      // $url_data = $activity['collection']['url_data'];
      break;

    case 'collection_like':
      echo 'added to collection: '.e_anchor('@'.$activity['user']['username'].'/likes', 'Likes');
      $url_data = $activity['collection_like']['url_data'];
      break;
      
    case 'people.self':
      echo 'Joined '.app_name();
      break;

    case 'people':
      echo 'is now following '.$activity['people']['full_name'].' ('.e_anchor('@'.$activity['people']['username'], '@'.$activity['people']['username']).')';
      break;
  }
  ?>
</p>

<?php if (!empty($url_data)): ?>
<p>
  <?php if (!empty($url_data['thumbnail_url'])): ?>
  <?php echo e_anchor('url/'.$url_data['url_id'], e_img($url_data['thumbnail_url']))?>
  <br>
  <?php endif; ?>

  <strong><?php echo e_anchor('url/'.$url_data['url_id'], $url_data['title'])?></strong>
</p>
<?php endif; ?>

<?php // echo e_hr(); ?>
