<?php 

    class Usuario {

        public function login($email, $senha){
            global $pdo;

            $sql = "SELECT * FROM users WHERE email = :email AND senha = :senha ";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", md5($senha));  
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql ->fetch();

                $_SESSION['iduser'] = $dado['iduser'];

                return true;
            }else {
                return false;
            }
        }

        public function logged($id) {
            global $pdo;

            $array = array();

            $sql = "SELECT name FROM users WHERE iduser = :iduser";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("iduser", $id);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }

            return $array;
        }
    }
?>