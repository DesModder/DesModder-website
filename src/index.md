---
title: DesModder
layout: "base.liquid"
description: DesModder is an extension to supercharge your Desmos graph experience
---

General information:

<ul>
{% for post in collections['general-pages'] %}
<li><a href="{{ post.url }}">{{ post.data.title }}</a></li>
{% endfor %}
</ul>

Individual plugins:

<ul>
{% for post in collections.plugins %}
<li><a href="{{ post.url }}">{{ post.data.title }}</a></li>
{% endfor %}
</ul>
