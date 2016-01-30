<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
// echo $email_id;
$email_id_arr = explode('@', $email_id);
$email_local = $email_id_arr[0];
$email_domain = $email_id_arr[1];
?>

<p>Hi <?php echo $user['full_name']; ?> (<?php echo e_anchor('@'.$user['username'], '@'.$user['username']); ?>),</p>

<p>Click here to sign in,</p>

<?php $this->view('email/common/button', array('uri' => 'auth/sign-in-email/'.$user['user_id'].'/'.$email_local.'/'.$email_domain.'/'.$email_key_secret, 'text' => 'Sign in')); ?>

<p>or go to <?php echo e_anchor('auth/sign-in-email/'.$user['user_id'].'/'.$email_local.'/'.$email_domain.'/'.$email_key_secret); ?></p>

<p>
  Thanks for joining.<br>
  &mdash; The <?php echo app_name(); ?> Team
</p>
