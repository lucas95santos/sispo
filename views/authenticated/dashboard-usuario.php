<?php
namespace sispo\views\authenticated;

if (isset($_SESSION['usuario_autenticado']))
    echo 'Bem vindo ' . $_SESSION['usuario_autenticado']['nome'];
else
    echo 'Entrou sem logar';