<?php
$paste = $_POST['paste'];
$syntax = $_POST['syntax'];
$id = (int)file_get_contents('id');
file_put_contents($id . '.' . $syntax, $paste);
file_put_contents('id', (int)$id + 1);
header('Location: ' . urlencode('view.php?name='.$id.'&syntax='.$syntax));