<?php
header('Content-Type: text/html; charset=UTF-8');

$fio = isset($_POST['fio']) ? trim($_POST['fio']) : '';
$course = isset($_POST['course']) ? trim($_POST['course']) : '';
$format = isset($_POST['format']) ? trim($_POST['format']) : '';
$agree = isset($_POST['agree']);

if (!$agree) {
    echo 'Ошибка: необходимо согласие на обработку данных.';
} elseif ($fio == '') {
    echo 'Ошибка: заполните ФИО.';
} else {
    echo '<h3>Вы успешно записаны на курс!</h3>';
    echo '<strong>ФИО:</strong> ' . htmlspecialchars($fio, ENT_QUOTES, 'UTF-8') . '<br>';
    echo '<strong>Курс:</strong> ' . htmlspecialchars($course, ENT_QUOTES, 'UTF-8') . '<br>';
    echo '<strong>Формат:</strong> ' . htmlspecialchars($format, ENT_QUOTES, 'UTF-8') . '<br>';
    
    echo '<strong>Интересы:</strong><br>';
    $interests = array();
    if (isset($_POST['interests']) && is_array($_POST['interests'])) {
        $interests = $_POST['interests'];
    }
    
    if (count($interests) > 0) {
        foreach ($interests as $value) {
            if (is_string($value)) {
                echo '- ' . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . '<br>';
            }
        }
    } else {
        echo 'Не выбраны';
    }
}
?>
