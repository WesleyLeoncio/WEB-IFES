<?php
session_start();
    /*$msgErro = "";
     if(isset($_POST['nIdade'])){
        $idade = $_POST['nIdade'];
        if($idade > 20){
           echo "Obrigado por sua mensagem !" ;
        }else{
            $msg = "Você tem  $idade anos, logo está abaixo da idade minima para enviar mensagem!";
            $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>
                $msg
                </div>";
            header("location: FormContato.php");
        }
     } */
     if(isset($_POST['nNome'])){
        $nome = $_POST['nNome'];
        if(empty($nome)){
            $msgErro +="Nome Inválido!\n"
        }
     }elseif(isset($_POST['nEmail'])){
        $email = $_POST['nEmail'];
        if(empty($email)){
            $msgErro +="Email Inválido!\n"
        }
    }

     if(isset($_POST['nCurso'])){
        $curso = $_POST['nCurso'];
        if(empty($curso)){
            $msgErro +="Idade Inválido!\n"
        }
    }

    if(isset($_POST['nIdade'])){
        $idade = $_POST['nIdade'];
        if(empty($idade)){
            $msgErro +="Idade Inválido!\n"
        }
    }

