<!DOCTYPE html>
<html>
    <head>
        <?php include("../includes/header.php")?>
        <title>Área administrativa</title>
    </head>
    <body>
        <div id="conteudo">
            <h3>Área administrativa</h3>
            <form action="" method="post" name="flogin">
                <fieldset>
                    <legend>Entrada no sistema</legend>
                    <p>
                        <label>Usuário:</label>
                        <input type="text" name="login" size="20" maxlength="20" required/>
                    </p>
                    <p>
                        <label>Senha:</label>
                        <input type="text" name="senha" size="20" maxlength="20" required/>
                    </p> 
                    <p>
                        <input type="submit" name="submit" value="Entrar"/>
                        <input type="submit" name="submit" value="Sair"/>
                        <input type="hidden" name="submited" value="true"/>
                    </p>
                </fieldset>
            </form>
        </div>
    </body>
</html>
