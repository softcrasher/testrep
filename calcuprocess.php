<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .php {
                display: block;
                margin: auto;
            }
        </style>
    </head>
    <body>
    <div class="php">
            <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];
            $result = 0;

            switch($operation) 
            {
                case '+':
                    $result = $num1 + $num2;
                    echo "<h1>Result $result</h1>";
                    break;
                case '-':
                    $result = $num1 - $num2;
                    echo "<h1>Result $result</h1>";
                    break;
                case '*':
                    $result = $num1 * $num2;
                    echo "<h1>Result $result</h1>";
                    break;
                case '/':
                    $result = $num1 / $num2;
                    echo "<h1>Result $result</h1>";
                    break;
                case ' ':
                    echo "<h1>There's no used operation.</h1>";
            }
            ?></div>
    </body>
</html>