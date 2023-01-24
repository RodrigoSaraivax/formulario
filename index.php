<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com banco de dados</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <form action="" method="post">
            <fieldset>
                <legend><b>Formulário de clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p><b>Genero:</b></p>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="aniversario"><b>Data de Nascimento:</b></label>
                    <input type="date" name="aniversario" id="aniversario" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade"  class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereco</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>