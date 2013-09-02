<?php
$file_name = preg_replace('/[^A-Za-z0-9]+/', '', $_GET['name']);
$syntax = preg_replace('/[^A-Za-z0-9]+/', '', $_GET['syntax']);
?>
<html>
<head>
<link href="Rainbow/solarized-dark.css" rel="stylesheet" media="all">
</head>
<body>
<pre data-language="<?=$syntax?>">
    <?=htmlspecialchars(file_get_contents($file_name . '.' . $syntax));?>
</pre>
<script src="Rainbow/rainbow-custom.min.js"></script>
</body>
</html>