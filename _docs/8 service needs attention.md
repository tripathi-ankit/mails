---
title: Your {actor_service} account needs attention
---

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
  {actor_url_html}
</p>
<br>

<p>
  Keep Posting!<br>
  &mdash; The {_app_name} (<a href="{_app_base_url}/@rime">@rime</a>) Team
</p>

{% include email-footer.html %}