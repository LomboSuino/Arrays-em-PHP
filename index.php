<?php

function calcularMedia(array $notas): float {
    return array_sum($notas) / count($notas);
}

function verificarSituacao(float $media): string {
    return $media >= 6.0 ? 'Aprovado' : 'Reprovado';
}

function exibirInformacoesAluno(array $aluno): void {
    $media = calcularMedia($aluno['notas']);
    $situacao = verificarSituacao($media);

    echo "Nome: {$aluno['nome']}\n";
    echo "RM: {$aluno['rm']}\n";
    echo "Email: {$aluno['email']}\n";
    echo "Notas: " . implode(", ", $aluno['notas']) . "\n";
    echo "Média: " . number_format($media, 2) . "\n";
    echo "Situação: $situacao\n";
    echo str_repeat("-", 26) . "\n";
}

$alunos = [
    [
        'nome' => 'Lucas Almeida',
        'rm' => '23456',
        'email' => 'lucas.almeida@email.com',
        'notas' => [6.0, 7.0, 8.0]
    ],
    [
        'nome' => 'Mariana Ribeiro',
        'rm' => '23457',
        'email' => 'mariana.ribeiro@email.com',
        'notas' => [9.0, 8.5, 9.5]
    ],
    [
        'nome' => 'Pedro Martins',
        'rm' => '23458',
        'email' => 'pedro.martins@email.com',
        'notas' => [4.0, 5.5, 6.0]
    ],
    [
        'nome' => 'Juliana Costa',
        'rm' => '23459',
        'email' => 'juliana.costa@email.com',
        'notas' => [7.5, 6.5, 8.0]
    ],
    [
        'nome' => 'Ricardo Lima',
        'rm' => '23460',
        'email' => 'ricardo.lima@email.com',
        'notas' => [3.5, 4.0, 5.0]
    ]
];

foreach ($alunos as $aluno) {
    exibirInformacoesAluno($aluno);
}
?>