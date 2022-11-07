<?php
/**
 * minignb Theme form
 *
 * @package minignb
 */


/* ========================================================
*  Отправка письма из карточки товара
======================================================== */

add_action('wp_ajax_sendOrder', 'sendOrder_callback');
add_action('wp_ajax_nopriv_sendOrder', 'sendOrder_callback');
function sendOrder_callback()
{

    $to = 'weca121@ya.ru';
//    $to = 'hello@liori.ru, weca121@ya.ru, liori@yandex.ru';
    $from = "noreply@liori.ru";

    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= 'Content-Transfer-Encoding: 7bit' . "\r\n";
    $headers .= 'Date: ' . date('r', $_SERVER['REQUEST_TIME']) . "\r\n";
    $headers .= 'Message-ID: <' . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>' . "\r\n";
    $headers .= 'From: ' . $from . "\r\n";
    $headers .= 'Reply-To: ' . $from . "\r\n";
    $headers .= 'Return-Path: ' . $from . "\r\n";
    $headers .= 'X-Mailer: PHP v' . phpversion() . "\r\n";
    $headers .= 'X-Originating-IP: ' . $_SERVER['SERVER_ADDR'] . "\r\n";


    $message = '';
    // Переменные
    $subject = htmlspecialchars(strip_tags(trim($_POST['form_subject'])));

    // Разбираем все непустые поля формы (кроме form_subject) на Ключ - Значение и заносим в таблицу
    $c = true;
    foreach ( $_POST as $key => $value ) {
        if ( $value != "" && $key != "form_subject" ) {
            $message .= "
      " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
        <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
      </tr>
      ";
        }
    }
    $message = "<table style='width: 100%;'>$message</table>";


    $mail = mail($to, $subject, $message, $headers);
    ?><pre> <?php print_r($mail); ?> </pre><?php

    if ($mail == false) {
        echo ' Ошибка ';
    } else {
        echo ' Удачно отправлено ';
    }

    wp_die();
}