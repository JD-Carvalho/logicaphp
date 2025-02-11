<?php

$alunos = [
    [
        'nome' => 'João',
        'nota' => 9,
        'materia' => 'Matemática'
    ],
    [
        'nome' => 'Maria',
        'nota' => 6,
        'materia' => 'Português'
    ],
    [
        'nome' => 'Ana',
        'nota' => 8,
        'materia' => 'História'
    ],
    [
        'nome' => 'Pedro',
        'nota' => 3,
        'materia' => 'Geografia'
    ],
    [
        'nome' => 'Paulo',
        'nota' => 5,
        'materia' => 'Inglês'
    ],
    'nome' => 'João',
    'nota' => 9,
    'materia' => 'Matemática'
];
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno['nome'] . "<br>";
    echo "Nota: " . $aluno['nota'] . "<br>";
    echo "Matéria: " . $aluno['materia'] . "<br>";
    if ($aluno['nota'] >= 7) {
        echo "Situação: Aprovado<br>";
    } elseif ($aluno['nota'] >= 5) {
        echo "Situação: Recuperação<br>";
    } else {
        echo "Situação: Reprovado<br>";
    }
    echo "-------------------------------<br>";
}

