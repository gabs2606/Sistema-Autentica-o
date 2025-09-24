<?php

require_once 'src/User.php';
require_once 'src/Validator.php';
require_once 'src/UserManager.php';

$userManager = new UserManager();

// Caso 1: Cadastro válido
echo "Caso 1: Cadastro válido<br>";
$user1 = $userManager->registerUser(1,"Gabriela", "gabriel@email.com", "Senha123" );
if ($user1) {
    echo "Usuário cadastrado com sucesso!<br>";
} else {
    echo "Erro ao cadastrar usuário<br>";
}
echo "<br<br><br>";

// Caso 2: Cadastro com e-mail inválido
echo "Caso 2: Cadastro com e-mail inválido<br>";
$user2 = $userManager->registerUser( 2,"Pedro Gabriel","pedro@@email", "Senha123");

echo "<br><br>";

// Caso 3: Tentativa de login com senha errada
echo "Caso 3: Tentativa de login com senha errada<br>";
$userManager->login("gabriel@email.com", "Errada123");
echo "<br>";

// Caso 4: Reset de senha válido
echo "Caso 4: Reset de senha válido<br>";
$userManager->resetPassword(3, "NovaSenha1");
echo "<br><br>";

// Caso 5: Cadastro de usuário com e-mail duplicado
echo "Caso 5: Cadastro de usuário com e-mail duplicado<br>";
$user3 = $userManager->registerUser( 4, "Gabriel", "gabriel@email.com", "Senha123");
echo "<br>";




