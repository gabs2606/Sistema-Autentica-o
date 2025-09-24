<?php

require_once 'Validator.php';
require_once 'User.php';
class UserManager  extends Validator{
    private array $users = [];

    public function __construct() {
        parent::__construct();
    }

    public function registerUser($id, $name, $email, $password): User {

        if (!$this->validateEmail($email)) {
            echo"E-mail inválido.";
        }

        if (!$this->validatePassword($password)) {
            echo "Senha inválida. A senha deve ter pelo menos 8 caracteres, incluindo pelo menos um número e uma letra maiúscula.";
        }

        if ($this->emailRepeated($email, $this->users)) {
            echo "E-mail já cadastrado.";
        }

        $user = new User($id,$name,$email, $password);
        $this->users[] = $user;
        return $user;

    }

    public function getUserByEmail($email): ?User {
        foreach ($this->users as $user) {
            if ($user->getEmail() === $email) {
                return $user;
            }
        }
    }
    
    public function login(string $email, string $password): ?User {
        foreach ($this->users as $user) {
            if ($user->getEmail() === $email && password_verify($password, $user->getPassword())) {
                echo "Login Efetuado com sucesso:" . $user->getName() . "\n";
                return $user;
            }
            else {
                echo "E-mail ou senha incorretos. Login inválido.<br>";
                return null;
            }
        }
    }

    public function resetPassword(int $id, string $newPassword): bool{
        $validator = new Validator();
        if (!$validator->validateNewPassword($newPassword)) {
            echo "Senha inválida. A senha deve ter pelo menos 8 caracteres, incluindo pelo menos um número e uma letra maiúscula.";
        return false;
    }

    foreach ($this->users as $user) {
        if ($user->getId() === $id) {
            $user->password = password_hash($newPassword, PASSWORD_DEFAULT);
            echo "Senha alterada com sucesso!";
            return true;
        }
    }
    echo "Usuário não encontrado.";
    return false;
}
}
  