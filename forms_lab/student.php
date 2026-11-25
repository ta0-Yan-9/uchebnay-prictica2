<?php
header('Content-Type: text/html; charset=UTF-8');
$fio = isset($_POST['fio']) ? trim($_POST['fio']) : '';
$group = isset($_POST['group']) ? trim($_POST['group']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';

if ($fio === '') {
    echo 'Ошибка: заполните ФИО и учебную группу.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Ошибка: неверный email.';
} else {
    echo '<h3>Анкета студента</h3>';
    echo '<strong>ФИО: </strong>' . htmlspecialchars($fio, ENT_QUOTES, 'UTF-8') .'<br>' ;
    echo '<strong>Группа:</strong> ' . htmlspecialchars($group, ENT_QUOTES, 'UTF-8').'<br>';
    echo '<strong>Email: </strong>' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8').'<br>';
    echo '<strong>Комментарий: </strong>' . htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');
}
?>
