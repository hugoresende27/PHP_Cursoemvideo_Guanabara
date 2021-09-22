<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP H.R. 2021@</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <form method="get" action="tab2.php">
 Tabuada       <select name="t">
            <?php                   //aqui usamos um script php com um ciclo for, fazendo echo das 10 options
            for ($i=1;$i<=10;$i++){
                echo "<option value='$i'>$i</option>";      //o valor das options assume a var $i
            }

            ?>
     <!--       <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>            -->

        </select>
        <input type="submit" value="Tabuada"/>
    </form>
    <br/>

</div>
</body>
</html>


