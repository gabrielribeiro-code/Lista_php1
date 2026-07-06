<?php

function mascararCpf($cpf){

$ultimos = substr($cpf, -4);

return str_repeat ("*", 7) . $ultimos;

}



$cpf = "12768474867";

echo "Cpf: " . mascararCpf($cpf);


?>
