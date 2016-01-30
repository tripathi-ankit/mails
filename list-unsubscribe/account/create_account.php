<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
// echo $email_id;
$email_id_arr = explode('@', $email_id);
$email_local = $email_id_arr[0];
$email_domain = $email_id_arr[1];
?>

<p>Hi <?php echo $email_local; ?>,</p>

<p>To create a new account click</p>

<?php $this->view('email/common/button', array('uri' => 'auth/create-account/'.$email_local.'/'.$email_domain.'/'.$email_key_secret, 'text' => 'Create new account')); ?>

<p>or go to <?php echo e_anchor('auth/create-account/'.$email_local.'/'.$email_domain.'/'.$email_key_secret); ?></p>

<p>
  Thanks for joining.<br>
  &mdash; The <?php echo app_name(); ?> Team
</p>
