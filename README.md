# HttpRequestFilter
=================

security request method GET,POST from xss and sq linjection

to use it , just include the file 

```php
require 'HttpRequestFilter.php';
```

## Example

```php
<?php 

require 'HttpRequestFilter.php';

?>

<form action="" method="POST">
Name : <input type="text" name="name"> <br />
email : <input type="text" name="email"> <br />
age : <input type="text" name="age"> <br />
submit : <input type="submit" name="go"> <br />
</form>

```

last update 29-11-2014 10:09 AM
