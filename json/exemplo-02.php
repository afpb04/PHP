<?php
$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Jos\u00e9","idade":22}]';
$data = json_decode($json,true);
var_dump($data);
?>