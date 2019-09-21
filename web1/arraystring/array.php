<?php
/*Array forma 1
$carros = array('Fuscão', 'Fiat 147', 'Gol quadrado', 'Maverick');*/
/*Array forma 2
$carros[0] = 'Fuscão';
$carros[1] = 'Fiat 147';
$carros[2] = 'Gol quadrado';
$carros[3] = 'Maverick';*/
//Array forma 3
$carros = ['Fuscão', 'Fiat 147', 'Gol quadrado', 'Maverick', "GTR", "Belinão", "Kombão"];

//Exibe o texto do jeito que foi escrito
/*echo '<pre>';*/
//Exibe informações sobre uma variável (Debug)
/*print_r($carros);*/
//Loop com arrays
/*foreach($carros as $carros){
echo $carros .'<br />';
echo "O carro $carros está no indice do array <br /><br />";}*/


?>

<table border="1">
    <tr>
        <td>Índice</td>
        <td>Carros</td>
    </tr>
    
    <?php foreach($carros as $indice => $carros){
    echo "
        <tr>
            <td>$indice</td>
            <td>$carros</td>
        </tr>
    ";
    } ?>  
</table>
<br />
<label>Carros:</label>
        <select name="cr" id="cr">
            <option value="">Selecione</option>
            <option value="DF">Fuscão</option>
            <option value="SP">Fiat 147</option>
            <option value="RJ">Gol quadrado</option>
            <option value="RJ">Maverick</option>
            <option value="RJ">GTR</option>
            <option value="RJ">Belinão</option>
            <option value="RJ">Kombão</option>
         </select>        
<br /><br />          
<fieldset>
<legend>Carros</legend>

</fieldset>