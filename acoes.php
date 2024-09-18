<?php
session_start();
require 'conexao.php';

if (isset($_POST['create_usuario'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
    $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : '';

    if (strlen($nome) < 3) {
        $_SESSION['mensagem'] = 'O nome deve ter pelo menos 3 caracteres.';
        header('Location: index.php');
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['mensagem'] = 'Email inválido.';
        header('Location: index.php');
        exit;
    }

    if (empty($data_nascimento)) {
        $_SESSION['mensagem'] = 'Data de nascimento não pode ser vazia.';
        header('Location: index.php');
        exit;
    }

    $sql = "INSERT INTO usuarios (nome, email, data_nascimento, senha) VALUES ('$nome', '$email', '$data_nascimento', '$senha')";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Usuário criado com sucesso';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Usuário não foi criado';
        header('Location: index.php');
        exit;
    }    
}

if (isset($_POST['update_usuario'])) {
    $usuario_id = mysqli_real_escape_string($conexao, $_POST['usuario_id']);

    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

    if (strlen($nome) < 3) {
        $_SESSION['mensagem'] = 'O nome deve ter pelo menos 3 caracteres.';
        header('Location: index.php');
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['mensagem'] = 'Email inválido.';
        header('Location: index.php');
        exit;
    }

    if (empty($data_nascimento)) {
        $_SESSION['mensagem'] = 'Data de nascimento não pode ser vazia.';
        header('Location: index.php');
        exit;
    }

    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', data_nascimento = '$data_nascimento'";

    if (!empty($senha)) {
        $sql .= ", senha='" . password_hash($senha, PASSWORD_DEFAULT) . "'";
    }

    $sql .= " WHERE id = '$usuario_id'";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Usuário atualizado com sucesso';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Usuário não foi atualizado';
        header('Location: index.php');
        exit;
    }    
}

if (isset($_POST['delete_usuario'])) {
    $usuario_id = mysqli_real_escape_string($conexao, $_POST['delete_usuario']);
    
    $sql = "DELETE FROM usuarios WHERE id = '$usuario_id'";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Usuário deletado com sucesso';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Usuário não foi deletado';
        header('Location: index.php');
        exit;
    }
}

?>
