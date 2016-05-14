---
layout: default
title: Home
---

# {{ site.title }}
{{ site.description }}

<ul>
  {% assign pages_list = site.docs %}
  {% for node in pages_list %}
    {% if node.title != null %}
      {% if node.layout == "email" %}
        <li>
          <a href="{{ site.baseurl }}{{ node.url }}" target="_blank">{{ node.title }}</a>
        </li>
      {% endif %}
    {% endif %}
  {% endfor %}
</ul>

`upload` folder is used to store attachments for drafting purpose only