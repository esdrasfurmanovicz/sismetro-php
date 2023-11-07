<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 021</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(100, 171, 147);
        }
        .formulario{
            width: 50%;
            height: 50%;
            border-radius: 10px;
            box-shadow: 3px 5px 10px rgba(0, 0, 0, 0.427);
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            padding: 20px;
        }
        h1{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2.5em;
        }
        .butt{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }
    </style>
</head>
<body class="container">

        <div class="formulario">
            
            <form method="post" class="form">
                <h1>Formulario</h1>
                <div>
                    <label for="iposic">Posição: </label>
                    <input type="text" name="iposic" id="posic" placeholder="Posição da sequencia fibonacci" value="<?php if(isset($_POST["posicao"])) echo $_POST["posicao"]; ?>">
                </div> <br>
                
                <div class="butt">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-danger">Limpar</button>
                </div>
            </form>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>