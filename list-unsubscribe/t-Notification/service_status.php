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
  Hi {_to_name} (<a href="{_app_base_url}/@{user_username}">@{user_username}</a>), your following connected account needs attention.
</p>

<ul>
	<li>Your authentication might got expired.</li>
	<li>Link might be broken between {_app_name} and your service account.</li>
</ul>

<p>
  Go to <a href="{_app_base_url}/settings/services">setting</a> to resolve this.
</p>

<br>

<center><img src="{actor_image_url}"></center>

<p>
  <strong>{actor_full_name}</strong><br>
  {actor_description}<br>
  {actor_url_encoded}
</p>
<br>

<p>
  Keep Posting!<br>
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