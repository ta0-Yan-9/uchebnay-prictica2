<?php
header('Content-Type: text/html; charset=UTF-8');
$query = isset($_GET['q']) ? trim($_GET['q']) : '';
$category = isset($_GET['category']) ? trim($_GET['category']) : '';
if ($query == '') {
    echo 'Введите поисковой запрос.';
} else {
    $safeQuery = htmlspecialchars($query, ENT_QUOTES, 'UTF-8');
    $safeCategory = htmlspecialchars($category, ENT_QUOTES, 'UTF-8');
    echo 'Запрос: ' . $safeQuery . 'Категория: ' . $safeCategory; 

}
?>