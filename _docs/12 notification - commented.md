---
title: Notification - {user_full_name} (@{user_username}) commented - {comment_sm}
---

<p>
<strong>{user_full_name}</strong> (<a href="{_app_base_url}/@{user_username}">@{user_username}</a>)

commented on your post:

<p><i>{comment}</i></p>
</p>

<p>
<a href="{_app_base_url}/url/{url_embed_url_id}">
  <img src="{url_embed_thumbnail_url}">
</a>
<br>

<strong>
  <a href="{_app_base_url}/url/{url_embed_url_id}">{url_embed_title}</a>
</strong>
</p>

<br>

<p>
Have fun!<br>
&mdash; The {_app_name} (<a href="{_app_base_url}/@rime">@rime</a>) Team
</p>

{% include email-footer.html %}