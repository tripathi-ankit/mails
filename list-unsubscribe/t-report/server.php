<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<p>
  <strong>IP:</strong><br>
  <?php echo $ip; ?>
</p>

<p>
  <strong>User agent:</strong><br>
  <?php echo $user_agent; ?>
</p>

<?php
if (!empty($request_headers))
{
  ?>
  <p>
    <strong>Request headers:</strong><br>
    <code>
      <?php
      foreach ($request_headers as $k => $v) echo $k.' => '.$v.'<br>';
      ?>
    </code>
  </p>
  <?php
}
?>


<?php $this->view('email/error/backtrace'); ?>
<br>

<p>
  Happy debugging!<br>
  &mdash; The <?php echo app_name(); ?> Bot (<?php echo e_anchor('@bot', '@bot'); ?>)
</p>
