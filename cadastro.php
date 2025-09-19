<?php
    if(isset($_POST['submit'])) {
      
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['cpf']);
        print_r($_POST['data_nascimento']);
        print_r($_POST['cidade']);
        print_r($_POST['estado']);
        print_r($_POST('endereco'));
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CADASTRO | REC DOCES</title>
<style>
    * {
        box-sizing: border-box;
    }
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(to right, #ff8420, #ffc456);
        color: white;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    header {
       
        top: 0;
        left: 0;
        width: 100%;
        height: 60px;
        background-color: #ffffff;
        color: #ff8420;
        display: flex;
        align-items: center;
        padding-left: 20px;
        z-index: 1000;
    }
    legend{
      color:aliceblue;
    }

    header .logo {
        height: 60px;
        object-fit: scale-down;
    }

    .container {
        flex: 1; 
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 70px; 
        padding-bottom: 50px;
    }

    .box {
        background-color: rgb(255, 255, 255);
        padding: 25px;
        border-radius: 15px;
        color: rgb(95, 85, 85);
        width: 90%;
        max-width: 400px; /* limite máximo em desktop */
        box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
    }

    fieldset {
        border: 3px solid darkorange;
        border-radius: 8px;
        padding: 20px;
    }

    legend {
        border: 1px solid darkorange;
        padding: 10px;
        text-align: center;
        background-color: darkorange;
        border-radius: 5px;
        font-weight: bold;
    }

    .inputBox {
        position: relative;
        margin-bottom: 15px;
    }

    .inputUser {
        background: none;
        border: none;
        border-bottom: 1px solid black;
        outline: none;
        color: black;
        font-size: 15px;
        width: 100%;
        padding: 5px 0;
    }

    .labelInput {
        position: absolute;
        top: 5px;
        left: 0;
        pointer-events: none;
        transition: 0.3s ease; 
    }

    .inputUser:focus ~ .labelInput,
    .inputUser:valid ~ .labelInput {
        top: -20px; 
        font-size: 12px;
        color: rgb(255, 165, 0);
    }

    .sexo-options {
        display: flex;
        justify-content: space-around;
        margin: 10px 0 25px 0;
    }

    #data_nascimento {
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid black;
        color:  rgb(95, 85, 85);
        padding: 8px 0;
        font-family: inherit;
        font-size: 15px;
    }

    #data_nascimento::-webkit-calendar-picker-indicator {
        filter: invert(1);
    }

    #submit {
        width: 100%;
        background: darkorange;
        border: none;
        padding: 12px;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border-radius: 8px;
        cursor: pointer;
        transition: background 0.3s;
        margin-top: 10px;
    }

    #submit:hover {
        background: #e07b00;
    }
    footer {
       
        bottom: 0;
        left: 0;
        width: 100%;
        height: 40px;
        background-color: #3a3b3b;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    /* --- RESPONSIVO --- */
    @media (max-width: 500px) {
        .box {
            padding: 20px;
            width: 95%;
        }
    }
</style>
</head>
<body>

<header>
    <img src="logo.rec.png" alt="Recife Doces Logo" class="logo">
</header>

<div class="container">
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
               <legend>Cadastro</legend>
                
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>

                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                
                <p>Sexo:</p>
                <div class="sexo-options">
                    <div>
                        <input type="radio" id="feminino" name="genero" required>
                        <label for="feminino">Feminino</label>
                    </div>
                    <div>
                        <input type="radio" id="masculino" name="genero" required>
                        <label for="masculino">Masculino</label>
                    </div>
                    <div>
                        <input type="radio" id="outro" name="genero" required>
                        <label for="outro">Outro</label>
                    </div>
                </div>

                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>

                <input type="submit" name="submit" id="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>
</div>

<footer>
    &copy; Recife Doces e Caramelos 2025
</footer>

</body>
</html>


                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>

                <input type="submit" name="submit" id="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>
</div>

<footer>
    &copy; Recife Doces e Caramelos 2025
</footer>

</body>
</html>
