<?php
$filename = $argv[1];

// .php file
$old_content = file_get_contents($filename);
$new_content = '<?php '.$old_content;
$new_content = preg_replace('/\b(\w+)\s*=', '$1=', $old_content); // var name in left value

eval($new_content);
