<?php

require_once("sql.php");

$sql = new sql();



sleep(3);

if(!empty($_POST)){

    extract($_POST);

   $result = $sql->insert(
        "INSERT INTO tb_users(deslogin, dessenha, admin, created) VALUE (:deslogin, :dessenha, 1, :created); SELECT LAST_INSERT_ID();",
        array(
            ':deslogin' => $id,
            ':dessenha' => md5($password),
            ':created' => date('Y-m-d H:i:s')
        )
    );

    if($result != 0){
        echo "Usuário registrado com sucesso.";
    }else {
        echo "Ocorreu algum error ao Inserir ao DB";
    }

}