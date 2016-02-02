<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
// var_dump($notification);
$this->view('email/notification/activity_item', array('activity' => $notification));
?>
<br>

<p>
  Have fun!<br>
  &mdash; The <?php echo app_name(); ?> Team
</p>
