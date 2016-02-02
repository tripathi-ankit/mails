<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<p>
  Hi <?php echo $user['full_name']; ?> (<?php echo e_anchor('@'.$user['username'], '@'.$user['username']);?>), your following connected account needs attention.
</p>

<ul>
	<li>Your authentication might got expired.</li>
	<li>Link might be broken between <?php echo app_name(); ?> and your service account.</li>
</ul>

<p>
  Go to <?php echo e_anchor('settings/services', 'setting'); ?> to resolve this.
</p>

<br>

<center>
  <?php echo e_img($actor['image_url']); ?>
</center>
<p>
  <strong><?php echo $actor['full_name']; ?></strong><br>
  <?php echo $actor['description']; ?><br>
  <?php echo htmlspecialchars($actor['url']); ?>
</p>
<br>

<p>
  Keep Posting!<br>
  &mdash; The <?php echo app_name(); ?> Team
</p>
