---
title: 'Blog Page'
visible: false
content:
    items:
        - '@self.children'
    leading: 0
    columns: 2
    limit: 5
    order:
        by: date
        dir: desc
    show_date: false
    pagination: true
    url_taxonomy_filters: true
blog_url: blog
sitemap:
    changefreq: monthly
    priority: 1.03
feed:
    description: 'Sample Blog Description'
    limit: 10
pagination: true
---

