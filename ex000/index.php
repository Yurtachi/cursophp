<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro código PHP</title>
</head>
<body>
        <h1>
        
            <?php /* Isso é uma Super tag. Antigamente era assim: 
            <script language="php">
            </script>      */

            echo "Olá, Mundo! \u{1F30E}"; /* print "Olá, mundo" também funciona! */
           
            ?>


        <? echo "<p> Olá novamente, Mundo! </p>"; /* Isso é uma short open tag*/ ?> 

        <?= "<p>Oi, mundo</p>"; /*Essa simplificação da super tag só funciona quando o conteúdo no começo for um echo(ou print). Ela se chama "short tag PHP". */?>
        </h1>
        <p> Início dos meus estudos de PHP</p>
</body>
</html>