---
title: 6-Invitation from {user_full_name} (@{user_username})
---

Hi **{to_name}**,

I am using [{_app_name}]({_app_base_url}) to connect  my multiple social media platforms like Facebook, Instagram, Tumblr, Vimeo, Youtube etc.

It creates **unique online identity** on the internet and keep me updated about what my favourite people are sharing on the internet through one place.

**Its new way to explore the internet.**

<br>

<a class="btn btn-block" href="{_app_base_url}/?invited_by='.{user_username}">Click here to join!!</a>
<br>

[![](https://s3.amazonaws.com/postmaster.rime/attachments/20140718-183105_Untitled-5.png)]({_app_base_url}/?invited_by={user_username})

<br>
<br>

<div class="media">
  <table>
    <tbody>
      <tr>
        <td class="media-object"><img class="img-circle" src="{user_profile_image_url}"></td>
        <td>
          <p>
            <strong>{user_full_name}</strong> (@<a href="{_app_base_url}/@{user_username}">{user_username}</a>)<br>
            {user_bio}<br>
            {user_location}
          </p>
        </td>
      </tr>
    </tbody>
  </table>
</div>

{% include email-footer.html %}