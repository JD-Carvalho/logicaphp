<?php

#feature/array-multi-dimensional
$boletim = array(
    'aluno1' => array(
        'nome' => 'jonas',
        'disciplinas' => array(
            'matematica' => array(
                'bimestre1' => 8,
                'bimestre2' => 7,
                'bimestre3' => 6,
                'bimestre4' => 5
            ),
            'portugues' => array(
                'bimestre1' => 9,
                'bimestre2' => 8,
                'bimestre3' => 7,
                'bimestre4' => 6
            ),
            'historia' => array(
                'bimestre1' => 10,
                'bimestre2' => 9,
                'bimestre3' => 8,
                'bimestre4' => 7
            )
        )
    ),
    'aluno2' => array(
        'nome' => 'maria',
        'disciplinas' => array(
            'matematica' => array(
                'bimestre1' => 7,
                'bimestre2' => 6,
                'bimestre3' => 5,
                'bimestre4' => 4
            ),
            'portugues' => array(
                'bimestre1' => 8,
                'bimestre2' => 7,
                'bimestre3' => 6,
                'bimestre4' => 5
            ),
            'historia' => array(
                'bimestre1' => 9,
                'bimestre2' => 8,
                'bimestre3' => 7,
                'bimestre4' => 6
            )
        )
    ),
    'aluno3' => array(
        'nome' => 'pedro',
        'disciplinas' => array(
            'matematica' => array(
                'bimestre1' => 6,
                'bimestre2' => 5,
                'bimestre3' => 4,
                'bimestre4' => 3
            ),
            'portugues' => array(
                'bimestre1' => 7,
                'bimestre2' => 6,
                'bimestre3' => 5,
                'bimestre4' => 4
            ),
            'historia' => array(
                'bimestre1' => 8,
                'bimestre2' => 7,
                'bimestre3' => 6,
                'bimestre4' => 5
            )
        )
    ),
    'aluno4' => array(
        'nome' => 'jose',
        'disciplinas' => array(
            'matematica' => array(
                'bimestre1' => 5,
                'bimestre2' => 4,
                'bimestre3' => 3,
                'bimestre4' => 2
            ),
            'portugues' => array(
                'bimestre1' => 6,
                'bimestre2' => 5,
                'bimestre3' => 4,
                'bimestre4' => 3
            ),
            'historia' => array(
                'bimestre1' => 7,
                'bimestre2' => 6,
                'bimestre3' => 5,
                'bimestre4' => 4
            )
        )
    ),
    'aluno5' => array(
        'nome' => 'ana',
        'disciplinas' => array(
            'matematica' => array(
                'bimestre1' => 4,
                'bimestre2' => 3,
                'bimestre3' => 2,
                'bimestre4' => 1
            ),
            'portugues' => array(
                'bimestre1' => 5,
                'bimestre2' => 4,
                'bimestre3' => 3,
                'bimestre4' => 2
            ),
            'historia' => array(
                'bimestre1' => 6,
                'bimestre2' => 5,
                'bimestre3' => 4,
                'bimestre4' => 3
            )
        )
    )
);

foreach ($boletim as $aluno) {
    echo "Aluno: " . $aluno['nome'] . "<br>";
    foreach ($aluno['disciplinas'] as $disciplina => $notas) {
        $media = array_sum($notas) / count($notas);
        echo "Média de $disciplina: $media <br>";
    }
    echo "<br>";
}
>?

