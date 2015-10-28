`{php}` Shortcode Plugin for Morfy CMS 1.1.0+
=============================================

Configuration
-------------

1. Put the `php-shortcode` folder to the `plugins` folder
2. Go to `config\site.yml` and add `php-shortcode` to the plugins section:
3. Save your changes.

~~~ .yml
# Site Plugins
plugins:
  php-shortcode
~~~

Usage
-----

~~~
{php}
echo 'your PHP co' . 'de here...'; // remember with semicolon
{/php}
~~~