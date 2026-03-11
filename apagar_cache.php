<?php
// Garantir que os headers sejam enviados antes de qualquer output
header('Content-Type: application/json');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Lista de cookies a serem deletados
$cookies = array('jogador', 'visitas', 'total_jogadas');

// Deletar todos os cookies
foreach($cookies as $cookie) {
    // Método 1: Data no passado
    setcookie($cookie, '', time() - 86400, '/');
    setcookie($cookie, '', time() - 86400, '/quiz_geek/');
    
    // Método 2: Expiração imediata
    setcookie($cookie, false, 0, '/');
    setcookie($cookie, false, 0, '/quiz_geek/');
    
    // Método 3: Array parameters (PHP 7.3+)
    setcookie($cookie, '', [
        'expires' => time() - 86400,
        'path' => '/',
        'secure' => false,
        'httponly' => false,
        'samesite' => 'Lax'
    ]);
    
    // Unset do array $_COOKIE
    if(isset($_COOKIE[$cookie])) {
        unset($_COOKIE[$cookie]);
    }
}

// Retornar sucesso em JSON
echo json_encode([
    'status' => 'sucesso',
    'message' => 'Todos os cookies foram deletados com sucesso'
]);
?>
