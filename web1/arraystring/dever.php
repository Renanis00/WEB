<?php

$nome = 'Renan Gabriel Ribeiro Farias';
$str = 'Gabriel';
$findmas = 'B';
$findmin = 'b';
$strpos = strpos($str, $findmas);

$strrchr = strrchr($nome, $str);

/*Questão 1*/
//A) Retorna parte de uma String.
        echo "<h1>Questão 1</h1> ";
        echo " <b> A)Retorna parte de uma String.</b><br />";
        echo substr($nome, 6, 7);
        echo "<br />";
//B)Encontra a posição da primeira ocorrência de uma string.
        echo "<br /> <b>B) Encontra a posição da primeira ocorrência de uma string:</b><br />" ;
    if($strpos === false) {
        echo "Não foi possível encontrar a palavra '$findmas' na string $str. ";
    } else {
        echo " A palavra $findmas foi encontrada na string $str  e se encontra na posição $strpos. ";  }
        echo "<br />";
//C)Encontra a posição da última ocorrência de um caractere em uma string.
    $strrpos = strrpos($str, $findmas);
        echo "<br /> <b>C)Encontra a posição da última ocorrência de um caractere em uma string:</b><br />" ;
    if($strrpos === false) {
        echo " Não foi possível encontrar a palavra $findmas na string $str. ";
    } else {
        echo " A palavra $findmas foi encontrada na string $str e sua última ocorrência se encontra na posição $strrpos."; }
        echo "<br />";
//D)Encontra a primeira ocorrencia de uma string sem diferenciar maiúsculas e minúsculas.
    $stripos = stripos($str, $findmin);
        echo "<br /> <b>D)Encontra a primeira ocorrencia de uma string sem diferenciar maiúsculas e minúsculas:</b><br />" ;
    if($strpos === false) {
        echo "Não foi possível encontrar a palavra '$findmin' na string $str. ";
    } else {
        echo " A palavra $findmin foi encontrada na string $str  e se encontra na posição $stripos. ";  }
        echo "<br />";
//E)Retira espaço no ínicio e final de uma string.
    $text = "\t\tThese are a few words :) ...  ";
    $binary = "\x09Example string\x0A";
    $hello  = "Hello World";
        echo "<br /> <b>E)Retira espaço no ínicio e final de uma string:</b><br />" ;
    $trimmed = trim($text, " \t.");
    var_dump($trimmed);
        echo "<br />";

    $trimmed = trim($hello, "Hdle");
    var_dump($trimmed);
        echo "<br />";

    $clean = trim($binary, "\x00..\x1F");
    var_dump($clean);
        echo "<br />";

//F)Encontra a primeira ocorrencia de uma string (Apelido para "strstr").
    $email = 'nome@exemplo.com';
    $domain = strstr($email, '@');
    $user = strstr($email, '@', TRUE);
        echo "<br /> <b> F)Encontra a primeira ocorrencia de uma string (Apelido para \"strstr\"):</b><br />" ;
        echo $domain;
        echo "<br />";
        echo $user;
        echo "<br />";
//H)O construtor foreach fornece uma maneira fácil de iterar sobre arrays.
    $arr = array(1, 2, 3, 4);
        echo "<br /> <b>H)O construtor foreach fornece uma maneira fácil de iterar sobre arrays:</b><br />" ;
    foreach ($arr as &$value)
    {$value = $value * 2;
        echo $value; }
        echo "<br />";
//I)Conta o número de elementos de uma variável, ou propriedades de um objeto.
        echo "<br /> <b>I)Conta o número de elementos de uma variável, ou propriedades de um objeto:</b><br />" ;
    $ar[0] = 1;
    $ar[1] = 3;
    $ar[2] = 5;
    $result = count($ar);
        echo "A quantidade de arrays é $result ";
        echo "<br />";
//J)Define uma constante (O terceiro parametro define case-insensitive).
    define("CONSTANTE", "Alô Mundo.", true);
        echo "<br /> <b>J)Define uma constante (O terceiro parametro define case-insensitive):</b><br />" ;
        echo CONSTANTE;
        echo Constante;
        echo "<br />";
//K)Retorna o número de argumentos passados para a função.
        echo "<br /> <b>K)Retorna o número de argumentos passados para a função:</b><br />" ;
    function func(){
    $numargs = func_num_args();
        echo "Número de argumentos é : $numargs\n"; }
    func (1,2,3,4,5);
        echo "<br />";
//L)Retorna um item para uma lista de argumentos.
echo "<br /> <b>L)Retorna um item para uma lista de argumentos:</b><br />" ;;
    function foo(){
    $numargs = func_num_args();
        echo "Número de argumentos é: $numargs<br />\n";
    if ($numargs >= 2) {
        echo "O  valor do segundo argumento é: " . func_get_arg(1) . "<br />\n"; }
}
foo (1, 2, 3);
        echo "<br />";

?>

