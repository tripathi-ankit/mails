<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <!-- <link rel="stylesheet" type="text/css" href="../../stylesheets/email.css"> -->
    <link rel="stylesheet" type="text/css" href="https://rimeofficial.github.io/mail/stylesheets/email.css">
  </head>
  <body>
    <table class="main">
      <tbody>
        <tr>
          <td>
            <table class="container">
              <tbody>
                <tr>
                  <td class="content">
                    <p>
                      <a href="{_app_base_url}"><img class="brand" src="https://s3.amazonaws.com/rime-mail/inline-image/20141114-191835_logo.png" alt="{_app_name} logo"></a>
                    </p>

                    <hr>

<p>
  <strong>{activity_user_full_name}</strong> (<a href="{_app_base_url/@{activity_user_username}">@{activity_user_username}</a>)
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

{url_data}
  <p>
    <a href="{_app_base_url}/url/{url_id}">
      <img src="{thumbnail_url}">
    </a>
    <br>

    <strong>
      <a href="{_app_base_url/url/{url_id}">{title}</a>
    </strong>
  </p>
{/url_data}

<br>

<p>
  Have fun!<br>
  &mdash; The {_app_name} Team
</p>

                    <hr>

                    <p class="footer">
                      &copy; {_app_name}, IIT Bombay, India, MH 400076.
                      <br>
                      {_app_name} respects your privacy. Read our online <a target="_blank" href="{_app_base_url}/about/privacy" target="_blank">Privacy statement</a>.
                      <br>
                      <br>
                      This message was sent to {_to_email}. You can <a href="{_unsubscribe_link}" target="_blank">unsubscribe</a> from these emails. You can also change your preferences by visiting your Email Options in your {_app_name} account at <a href="{_app_base_url}/settings/notifications" target="_blank">settings/notifications</a>.
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>