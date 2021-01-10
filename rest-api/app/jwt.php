<?php

$app->add(new Tuupola\Middleware\JwtAuthentication([
    'secure' => false,
    'regexp' => '/(.*)/',
    'header' => 'X-TailOFKersef-Token',
    'realm' => 'Protected',
    'secret' => '&**WatashiWa_bandaiNamco[x&@#]',
    'error' => function ($response, $arguments) {
        $data['status'] = 'error';
        $data['message'] = 'Não foi possível autenticar a requisição!';
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->getBody()->write(json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    }
]));