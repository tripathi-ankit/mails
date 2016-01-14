<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<p>Hi <?php echo $user['full_name']; ?> (<?php echo e_anchor('@'.$user['username'], '@'.$user['username']);?>),</p>

<p>
  You have added an email address.<br>
  New email address: <b><?php echo $email_id; ?></b>
</p>

<p>
  If you didn't make this change, please <?php echo e_anchor('home/faq', 'let us know'); ?>.
</p>

<br>

<p>
  Thanks!<br>
  &mdash; The <?php echo app_name(); ?> Team
</p>
