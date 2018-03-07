<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 26/02/2018
 * Time: 13:43
 */

namespace App\DAO;


class UsuarioDAO extends Conexao
{
    public function login($usuario){
        $sql = "select * from usuarios where email = :email and senha = :senha";
        try{
            $p = $this->conexao->prepare($sql);
            $p->bindValue(":email", $usuario->getEmail());
            $p->bindValue(":senha", \App\Helper\Senha::gerar($usuario->getSenha()));
            $p->execute();
            $resultado = $p->fetch();
            session_start();
            $_SESSION['id'] = $resultado['id'];
            return $resultado;

        } catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

    public function logoff(){
        session_start();
        unset($_SESSION['id']);
        session_destroy();
        header("Location: login.php");
    }

    public function verificar(){
        session_start();
        if (empty($_SESSION['id'])) header("Location: login.php");
    }
}