<?php
function numero_primo($posicao){
        $primos = array(2);

        $n = 3;
        while(count($primos) < $posicao){
            $e_primo = true;
            foreach($primos as $primo){
                if($n%$primo == 0){
                    $e_primo = false;
                }
            }
            if($e_primo){
                $primos[] = $n;
            }
            $n++;
        }
        return $primos[$posicao - 1];
    }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 021</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(100, 171, 147);
        }

        .formulario {
            width: 50%;
            height: 70%;
            border-radius: 10px;
            box-shadow: 3px 5px 10px rgba(0, 0, 0, 0.427);
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            padding: 20px;
        }
            
        
        h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        h2 {
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
        }

        .result {
            width: 70%;
            margin: auto;
            text-align: center;
            margin-bottom: 20px;
        }

        .resp {
            font-size: 1.4em;
            font-weight: bold;
        }
        
        .butt {
            display: flex;
            align-items: center;
            justify-content: space-evenly;

        }
        input{
            width: 100%;
            padding: 5px;
        }
    </style>
</head>

<body class="container">

    <div class="formulario">

        <form method="post">
            <h1>Calculadora Primos</h1>
            <?php
            if (isset($_POST["iposic"])) {

            ?>
                <h2>Resultado</h2>
                <div class="result row">
                    <div class="col-6">
                        <p>Posição</p>
                        <p class="resp"><?php echo $_POST["iposic"]; ?></p>
                    </div>
                    <div class="col-6">
                        <p>Valor</p>
                        <p class="resp"><?php echo numero_primo($_POST["iposic"]); ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
            <div>
                <input type="text" name="iposic" id="posic" placeholder="Primo" value="<?php if (isset($_POST["iposic"])) echo $_POST["iposic"]; ?>">
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