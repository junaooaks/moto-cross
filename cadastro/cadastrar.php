<?php require_once('class/db.class.php'); ?>
<?php require_once('class/valida.class.php'); ?>
<?php require_once('class/usuario.class.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MW Login v2 - Cadastrar</title>
        <link rel="stylesheet" href="css/pure-min.css">
    </head>
    <body>

        <?php if (($_SERVER['REQUEST_METHOD'] == 'POST')): ?>
            <?php
            $usuario = new usuario();
            $retorno = $usuario->cadastrar($_POST);
            ?>
        <?php endif; ?>

        <?php if (@$retorno['sucesso'] == true): ?>
            <p>Cadastro feito com sucesso!</p>
        <?php else: ?>

            <form class="pure-form pure-form-aligned" method="post">
                <fieldset>
                    <legend style="margin-left: 10%;"> <h2>MW Login v2 - Cadastrar Usuário</h2> </legend>

                    <div class="pure-control-group">
                        <label for="nome">Nome</label>
                        <input id="nome" name="nome" type="text" placeholder="Primeiro Nome" value="<?= @$_POST['nome'] ?>"> <?= @$retorno['nome'] ?>
                        <label for="sobrenome">Sobrenome</label>
                        <input id="sobrenome" name="sobrenome" type="text" placeholder="Sobrenome" value="<?= @$_POST['sobrenome'] ?>"> <?= @$retorno['sobrenome'] ?>
                    </div>

                    <div class="pure-control-group">
                        <label for="telefone">Telefone</label>
                        <input id="telefone" name="telefone" type="text" onkeyup="this.value = this.value.replace(/[^0-9]/g, '');" placeholder="Somente Números" value="<?= @$_POST['telefone'] ?>"> <?= @$retorno['telefone'] ?>
                    </div>

                    <div class="pure-control-group">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" name="cidade" type="text" placeholder="Cidade" value="<?= @$_POST['cidade'] ?>"> <?= @$retorno['cidade'] ?>
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" value="<?= @$_POST['estado'] ?>">
                            <option value=""></option>
                            <option value="ac">Acre</option>
                            <option value="al">Alagoas</option>
                            <option value="am">Amazonas</option>
                            <option value="ap">Amapá</option>
                            <option value="ba">Bahia</option>
                            <option value="ce">Ceará</option>
                            <option value="df">Distrito Federal</option>
                            <option value="es">Espirito Santo</option>
                            <option value="go">Goiás</option>
                            <option value="ma">Maranhão</option>
                            <option value="mg">Minas Gerais</option>
                            <option value="ms">Mato Grosso do Sul</option>
                            <option value="mt">Mato Grosso</option>
                            <option value="pa">Pará</option>
                            <option value="pb">Paraíba</option>
                            <option value="pe">Pernambuco</option>
                            <option value="pi">Piauí</option>
                            <option value="pr">Paraná</option>
                            <option value="rj">Rio de Janeiro</option>
                            <option value="rn">Rio Grande do Norte</option>
                            <option value="ro">Rondônia</option>
                            <option value="rr">Roraima</option>
                            <option value="rs">Rio Grande do Sul</option>
                            <option value="sc">Santa Catarina</option>
                            <option value="se">Sergipe</option>
                            <option value="sp">São Paulo</option>
                            <option value="to">Tocantins</option>
                        </select> <?= @$retorno['estado'] ?>
                    </div>

                    <div class="pure-control-group">
                        <label for="cep">CEP</label>
                        <input id="cep" name="cep" type="text" onkeyup="this.value = this.value.replace(/[^0-9]/g, '');" placeholder="Somente Números" value="<?= @$_POST['cep'] ?>"> <?= @$retorno['cep'] ?>
                    </div>

                    <div class="pure-control-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" placeholder="contato@blog.masterdaweb.com" value="<?= @$_POST['email'] ?>"> <?= @$retorno['email'] ?>
                    </div>

                    <div class="pure-control-group">
                        <label for="senha">Senha</label>
                        <input id="senha" name="senha" type="password" placeholder="Senha"> <?= @$retorno['senha'] ?>
                    </div>

                    <div class="pure-controls">
                        <button type="submit" class="pure-button pure-button-primary">Cadastrar</button>
                    </div>
                </fieldset>
            </form>

        <?php endif; ?>

        <hr> </hr>

        <style>p{margin-left: 10px;}</style>
        <p><b>Autor:</b> Lucas Viana Dias Carvalho</p>
        <p><b>Email:</b> masterdaweb@hotmail.com</p>
        <p> <b> Website:</b> <a href="http://blog.masterdaweb.com">http://blog.masterdaweb.com</a></p>

    </body>
</html>
