---
title: 14 Notification -  @{user_username} added {actor_guest_service} to {guest_user_full_name} (@{guest_user_username})
---

<p>
<strong>{user_full_name}</strong> (<a href="{_app_base_url}/@{user_username}">@{user_username}</a>)

added {actor_guest_service} to {guest_user_full_name} (<a href="{_app_base_url}/{guest_user_username}">@{guest_user_username}</a>)
</p>

<center><img src="{actor_guest_image_url}"></center>

<p>
<strong>{actor_guest_full_name}</strong><br>
{actor_guest_description}<br>
{actor_guest_url_html}
</p>

<br>

<p>
Have fun!<br>
&mdash; The {_app_name} (<a href="{_app_base_url}/@rime">@rime</a>) Team
</p>

{% include email-footer.html %}