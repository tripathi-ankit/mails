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

<p>Hi {_to_name} (<a href="{_app_base_url}/@{user_username}">@{user_username}), your {total_count} posts have been updated.</p>
<br>

{actor_post_feeds}
  <p>
    <small>
      <strong>
        <span class="strtoupper">{service}</span>: {post_count} Posts
      </strong>
    </small>
  </p>

  {url_data}
    <a href="{_app_base_url}/url/{url_id}">
      <img src="{thumbnail_url}">
    </a>

    <p>
      <strong>
        <a href="{_app_base_url}/url/{url_id}">{title}</a>
      </strong>
      <br>
      {description}
    </p>
  {/url_data}

  <br>
  <hr>
  <br>
{/actor_post_feeds}

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