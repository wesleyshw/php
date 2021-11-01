
<?php

    # Aluno: Wesley de Souza Nascimento Júnior
    # Curso: Téc. em Informática - 3° ano

    $string = "hoje está muito quente";
    $busca = "e";

    for ($i=0; $i < strlen($string); $i++) { 
        if (strripos($string, $busca)) {
        $ocorrencia = substr_count($string, $busca);
        };
    };

    echo "O caractere '$busca' ";
    echo "tem $ocorrencia ocorrências "; 
    echo "\nna string: '$string'\n";

?>
