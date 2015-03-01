# Perch Meta Plus
##### Add unique Meta and Open Graph tags for personalised meta information. 

#### Lazy Documentation Version 0.1

1. Install the `meta-plus` folder into the `perch/templates/layouts`
2. Add the line 
```<perch:template path="layouts/meta-plus/template-meta-fields.html" rescope="parent" />``` 
to bottom of the following files: 
	- `perch/templates/pages/attributes/default.html`
	- `perch/templates/blog/post.html`
	- `perch/templates/events/event.html`
3. Add the line and fill out the relevant details 
```<?php perch_layout('meta-plus/meta',['siteName' => 'Site Name', 'siteAuthor' => 'Author Name']); ?>``` 
to where your meta information would be placed, for example within a `head.php` include or `global.head` layout. 

## Special Thanks to:
- [William Isted](https://william.isted.me/) for general bashing of ideas and PHP wizardry 
