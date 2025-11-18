<?php
// src/config/session.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function requireValidSession($requiresAdmin = false)
{
    $user = $_SESSION['user'] ?? null;

    if (!$user) {
        header('Location: login.php');
        exit();
    }

    if ($requiresAdmin) {
        $isAdmin = false;

        if (is_object($user)) {
            $isAdmin = !empty($user->is_admin) || !empty($user->admin);
        } elseif (is_array($user)) {
            $isAdmin = !empty($user['is_admin']) || !empty($user['admin']);
        }

        if (!$isAdmin) {
            if (function_exists('addErrorMsg')) {
                addErrorMsg('Acesso negado!');
            }
            header('Location: day_records.php');
            exit();
        }
    }

    return $user;
}
