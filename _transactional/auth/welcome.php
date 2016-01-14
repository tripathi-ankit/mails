<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<p>Hi <?php echo $username; ?> (<?php echo e_anchor('@'.$username, '@'.$username); ?>), welcome to <?php echo app_name(); ?>!</p>

<p>We listed your sign in details below, make sure you keep them safe.</p>

<p>
  Username: <?php echo $username; ?><br>
  Email address: <?php echo $email_id; ?>
</p>

<p>
  Have fun!<br>
  &mdash; The <?php echo app_name(); ?> Team
</p>
