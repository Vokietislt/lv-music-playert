<?php
function getList($url = ""){
     return urldecode($url);
}
if ($_GET["directory"]!=""){ echo getList($_GET["directory"]) ;}
else { getList();}
?>