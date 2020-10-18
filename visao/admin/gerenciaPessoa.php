<!DOCTYPE html>
<html>
    <head>
        <?php include("/Gerenciador/visao/includes/header.php")?>
        <title>Gerenciamento de pessoas</title>
    </head>
    <body>
        <div id="conteudo">
            <h3>Gerenciamento de pessoas</h3>
            <form action="" method="post" name="flogin">
                <fieldset>
                    <legend>Gerenciamento de pessoas</legend>
                    <p>
                        <label>Usuário:</label>
                        <input type="text" name="login" size="20" maxlength="20" required/>
                    </p>
                    <p>
                        <label>Senha:</label>
                        <input type="text" name="senha" size="20" maxlength="20" required/>
                    </p> 
                    <p>
                        <label>Nome:</label>
                        <input type="text" name="nome"  size="50" maxlength="50" required/>
                    </p>      
                    <p>
                        <label>Nascimento:</label>
                        <input type="date" name="nascimento" required/>
                    </p>        
                    <p>
                        <label>Nome:</label>
                        <input type="text" name="nome"  size="50" maxlength="50" required/>
                    </p>                     
                    <p>
                        <input type="submit" name="submit" value="Inserir"/>
                        <input type="submit" name="submit" value="Atualizar"/>
                        <input type="submit" name="submit" value="Excluir"/>
                        <input type="hidden" name="submited" value="true"/>
                    </p>
                </fieldset>
            </form>
        </div>
    </body>
</html>
