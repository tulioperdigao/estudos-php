<?php 

    $carros = ['Ferrari', 'Bmw', 'Mercedes'];

    $endereco = [
        'cep' => "00000-000",
        'numero' => "162",
        'cidade' => "Belo Horizonte",
        'estado' => "Minas Gerais"
    ];

    $pessoas = [
        'pessoa1' => [
            'Nome' => 'Tulio',
            'Idade' => 20,
            'endereco' => [
                'cep' => "00000-000",
                'numero' => "162",
                'cidade' => "Belo Horizonte",
                'estado' => "Minas Gerais"
            ]
        ],
        'pessoa2' => [
            'Nome' => 'Luena',
            'Idade' => 48,
            'endereco' => [
                'cep' => "00000-001",
                'numero' => "70",
                'cidade' => "São Paulo",
                'estado' => "São Paulo"
            ]
        ],
    ];

    print_r($carros[2]);

    echo "\n";

    print_r($endereco['cidade']); 

    echo "\n";

    if(isset($pessoas['pessoa2']['endereco']['cidade'])) {
        print_r($pessoas['pessoa2']['endereco']['cidade']);
    } else {
        echo "Chave inválida!";
    };

?>