---
title: Notification - {user_full_name} (@{user_username}) added {actor_service}
---

<p>
<strong>{user_full_name}</strong> (<a href="{_app_base_url}/@{user_username}">@{user_username}</a>)

added {actor_service}
</p>

<center><img src="{actor_image_url}"></center>

<p>
<strong>{actor_full_name}</strong><br>
{actor_description}<br>
{actor_url_html}
</p>

<p>
Have fun!<br>
&mdash; The {_app_name} (<a href="{_app_base_url}/@rime">@rime</a>) Team
</p>

{% include email-footer.html %}