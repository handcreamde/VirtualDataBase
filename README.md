```php:function.php
function vdbinput($name1, $name2)
{
  copy('virtualdb/template.php', "virtualdb/db-".$name1.".php");
  file_put_contents("virtualdb/db-".$name1.".php", $name2, FILE_APPEND);
}
```
