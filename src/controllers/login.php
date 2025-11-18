<?php
loadModel('Login');
session_start();
$exception = null;

if (count($_POST) > 0) {
    $login = new Login($_POST);
    try {
        $user = $login->checkLogin();
        //padroniza para array (mais seguro para sessão)

        if (is_object($user)) {
            $user = (array)$user;
        }

        //gora salva
        $_SESSION['user'] = $user;

        header("Location: day_records.php");
    } catch (AppException $e) {
        $exception = $e;
    }
}


loadView('login', $_POST + ['exception' => $exception]);
