<?php
require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
$client = \Softonic\GraphQL\ClientBuilder::build('https://graphql-pokemon.now.sh/');

$query = <<<'QUERY'
query {
    pokemon(name: "Pikachu") {
        id
        number
        name
        attacks {
            special {
                name
                type
                damage
            }
        }
    }
}
QUERY;

$variables = [
    'idFoo' => 'Pikachu'
];
$response = $client->query($query, $variables);
print_r($response->getData()['pokemon']);
