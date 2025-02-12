<?php

$dados = array(
    'nome' => 'jonas',
    'dt_nasc' => '2001-11-27',
    'documentos' => array(
        'rg' => '123456789',
        'cpf' => '123.456.789-09',
        'cnh' => '123456789'
    ),
    'endereco' => array(
        'tipo' => 'rua',
        'logradouro' => 'sao jorge',
        'numero' => '123',
        'complemento' => 'casa',
        'bairro' => 'centro',
        'cidade' => 'sao paulo',
        'uf' => 'sp',
        'cep' => '12345-678'
    ),
    'filiacao' => array(
        'pai' => 'joao',
        'mae' => 'maria'
    ),
    'contatos' => array(
        'celular' => array(
            'ddd' => '11',
            'numero' => '99999-9999'
        ),
        'residencial' => array(
            'ddd' => '11',
            'numero' => '2222-2222'
        ),
        'email' => 'jona@gmail'
    ),
);
echo "nome $dados[nome] <br><br>";
echo "data $dados[dt_nasc] <br><br>";
foreach ($dados['documentos'] as $key => $value) {
    echo "$key: $value <br><br>";
}
foreach ($dados['endereco'] as $key => $value) {
    echo "$key: $value <br><br>";
}
foreach ($dados['filiacao'] as $key => $value) {
    echo "$key: $value <br><br>";
}
foreach ($dados['contatos']['celular'] as $key => $value) {
    echo "$key: $value <br><br>";
}
foreach ($dados['contatos']['residencial'] as $key => $value) {
    echo "$key: $value <br><br>";
}
echo'email: ' . ($dados['contatos']['email']) . "<br><br>";
