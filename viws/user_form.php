<?php
include "../inc/cabecalho.php"
?>

<header class = "container">
    <div>
    <h1 class = "text-secondary pt-5">
       <span class = "text-danger">Login</span>
    </h1>
    </div>
</header>
<hr class = "container">

<section class = "container">

    <div  class = "row pt-3 text-center">

        <div class = "col-3 ">
        <a href="tarefa_nova.php"><button type="button" class="btn btn-outline-danger p-2 rounded-bottom shadow-sm ">Nova Tarefa</button></a>
        </div>

        <div class = "col-3">
        <a href="tarefas_lista.php"><button type="button" class="btn btn-outline-danger p-2 rounded-bottom shadow-sm ">Lista de Tarefas</button></a>
        </div>

        <div class = "col-3">
        <a href="tarefas_concluidas.php"><button type="button" class="btn btn-outline-danger p-2 rounded-bottom shadow-sm ">Tarefas Concluidas</button></a>
        </div>

        <div class = "col-3">
        <a href="user_form.php"><button type="button" class="btn btn-outline-danger p-2 rounded-bottom shadow-sm ">Novo Usuario</button></a>
        </div>

    </div>
   

</section>

<section class = "container pt-5">

    <div class="row justify-content-center pt-5">
        <div class = "col-7 bg-white p-5 rounded">

            <form action="../controllers/salvar_user.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Seu email">
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Senha">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

        </div>
    </div>

</section>
<?php
include "../inc/rodape.php"
?>