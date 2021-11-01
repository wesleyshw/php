<?php
    
    # Aluno: Wesley de Souza Nascimento Júnior
    # Curso: Téc. em Informática - 3° ano
    
    $n1 = readline("Digite um número: ");
    $n2 = readline("Digite mais um número: ");
    $soma = $n1 + $n2;
    echo "$n1 + $n2 = $soma","\n";

    if ( $soma > 20) {
        echo "$soma + 8 = ", $soma + 8,"\n";
    } else if ( $soma <= 20) {
        echo "$soma - 5 = ", $soma - 5,"\n";
    }

?>
