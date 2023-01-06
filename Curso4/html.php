<?php
    $nome = 'campo';
?>

<input type="text" name="<?php echo addslashes($nome) ?>">
<input type="text" name="<?php echo htmlentities($nome) ?>">
<input type="text" name="<?php echo htmlspecialchars($nome) ?>">

<!--  

addslashes adiciona uma barra invertida antes de aspas simples, aspas duplas e barras invertidas
'escapando' o caractere impedindo que seja interpretado

htmlentities converte caracteres especiais em entidades html para que não sejam interpretados como código html
e sim como texto

htmlspecialchars converte caracteres especiais em entidades html para que não sejam interpretados como código html
-->