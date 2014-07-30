XenForo-Client
==============

A XenForo client written in PHP. Currently all it does is store cookies and login. The below example will output the HTML page that a logged in user would view.

```php
<?php
require_once("src/XenForoClient.php");
$c = new XenForoClient("http://example.com","user","pass");
print $c->connect("http://example.com", null);
```
