<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<p><?php echo $feedback;?></p>

<p>
  &mdash; <?php echo $user_data['full_name']; ?> (<?php echo e_anchor('@'.$user_data['username'], '@'.$user_data['username']); ?>)
</p>
