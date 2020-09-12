<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\Messages\Attachments\Image;


$botman = resolve('botman');

// SAUDAÇÃO AO ROBO

$botman->hears('Oi', function ($bot) {
    $bot->reply('Olá, me chamo Rob, e lhe darei informações sobre os estados do Brasil que voce pesquisar');
    $bot->reply('Ah! e duas dicas, voce pode digitar começando com "estado de/do/da" antes do nome do estado ou somente o nome do estado e no final espaço e um ponto');
    $bot->reply('e para uma melhor pesquisa digite os estados com acentuação correta'); 
    $bot->reply('qual estado é de seu interesse?');
});

$botman->hears('Oii', function ($bot) {
    $bot->reply('Olá, me chamo Rob, e lhe darei informações sobre os estados do Brasil que voce pesquisar');
    $bot->reply('Ah! e duas dicas, voce pode digitar começando com "estado de/do/da" antes do nome do estado ou somente o nome do estado e no final espaço e um ponto');
    $bot->reply('e para uma melhor pesquisa digite os estados com acentuação correta'); 
    $bot->reply('qual estado é de seu interesse?');
});

$botman->hears('Olá', function ($bot) {
    $bot->reply('Olá, me chamo Rob, e lhe darei informações sobre os estados do Brasil que voce pesquisar');
    $bot->reply('Ah! e duas dicas, voce pode digitar começando com "estado de/do/da" antes do nome do estado ou somente o nome do estado e no final espaço e um ponto');
    $bot->reply('e para uma melhor pesquisa digite os estados com acentuação correta'); 
    $bot->reply('qual estado é de seu interesse?');
});

$botman->hears('Ola', function ($bot) {
    $bot->reply('Olá, me chamo Rob, e lhe darei informações sobre os estados do Brasil que voce pesquisar');
    $bot->reply('Ah! e duas dicas, voce pode digitar começando com "estado de/do/da" antes do nome do estado ou somente o nome do estado e no final espaço e um ponto');
    $bot->reply('e para uma melhor pesquisa digite os estados com acentuação correta'); 
    $bot->reply('qual estado é de seu interesse?');
});

$botman->hears('Fala', function ($bot) {
    $bot->reply('Olá, me chamo Rob, e lhe darei informações sobre os estados do Brasil que voce pesquisar');
    $bot->reply('Ah! e duas dicas, voce pode digitar começando com "estado de/do/da" antes do nome do estado ou somente o nome do estado e no final espaço e um ponto');
    $bot->reply('e para uma melhor pesquisa digite os estados com acentuação correta'); 
    $bot->reply('qual estado é de seu interesse?');
});

$botman->hears('Fale', function ($bot) {
    $bot->reply('Olá, me chamo Rob, e lhe darei informações sobre os estados do Brasil que voce pesquisar');
    $bot->reply('Ah! e duas dicas, voce pode digitar começando com "estado de/do/da" antes do nome do estado ou somente o nome do estado e no final espaço e um ponto');
    $bot->reply('e para uma melhor pesquisa digite os estados com acentuação correta'); 
    $bot->reply('qual estado é de seu interesse?');
});

$botman->hears('eai', function ($bot) {
    $bot->reply('Olá, me chamo Rob, e lhe darei informações sobre os estados do Brasil que voce pesquisar');
    $bot->reply('Ah! e duas dicas, voce pode digitar começando com "estado de/do/da" antes do nome do estado ou somente o nome do estado e no final espaço e um ponto');
    $bot->reply('e para uma melhor pesquisa digite os estados com acentuação correta'); 
    $bot->reply('qual estado é de seu interesse?');
});


$botman->hears('eae', function ($bot) {
    $bot->reply('Olá, me chamo Rob, e lhe darei informações sobre os estados do Brasil que voce pesquisar');
    $bot->reply('Ah! e duas dicas, voce pode digitar começando com "estado de/do/da" antes do nome do estado ou somente o nome do estado e no final espaço e um ponto');
    $bot->reply('e para uma melhor pesquisa digite os estados com acentuação correta'); 
    $bot->reply('qual estado é de seu interesse?');
});

$botman->hears('eaee', function ($bot) {
    $bot->reply('Olá, me chamo Rob, e lhe darei informações sobre os estados do Brasil que voce pesquisar');
    $bot->reply('Ah! e duas dicas, voce pode digitar começando com "estado de/do/da" antes do nome do estado ou somente o nome do estado e no final espaço e um ponto');
    $bot->reply('e para uma melhor pesquisa digite os estados com acentuação correta'); 
    $bot->reply('qual estado é de seu interesse?');
});

$botman->hears('falaa', function ($bot) {
    $bot->reply('Olá, me chamo Rob, e lhe darei informações sobre os estados do Brasil que voce pesquisar');
    $bot->reply('Ah! e duas dicas, voce pode digitar começando com "estado de/do/da" antes do nome do estado ou somente o nome do estado e no final espaço e um ponto');
    $bot->reply('e para uma melhor pesquisa digite os estados com acentuação correta'); 
    $bot->reply('qual estado é de seu interesse?');
});

$botman->hears('falee', function ($bot) {
    $bot->reply('Olá, me chamo Rob, e lhe darei informações sobre os estados do Brasil que voce pesquisar');
    $bot->reply('Ah! e duas dicas, voce pode digitar começando com "estado de/do/da" antes do nome do estado ou somente o nome do estado e no final espaço e um ponto');
    $bot->reply('e para uma melhor pesquisa digite os estados com acentuação correta'); 
    $bot->reply('qual estado é de seu interesse?');
});

$botman->hears('Oi,me chamo {nome}', function ($bot,$nome) {
    $bot->reply('Olá '.$nome.', me chamo Rob, e lhe darei informações sobre os estados do Brasil que voce pesquisar');
    $bot->reply('Ah! e duas dicas, voce pode digitar começando com "estado de/do/da" antes do nome do estado ou somente o nome do estado e no final espaço e um ponto');
    $bot->reply('e para uma melhor pesquisa digite os estados com acentuação correta'); 
    $bot->reply('qual estado é de seu interesse?');
});

////////////////////////////////////////////

//FAZ A PESQUISA POR ESTADOS

$botman->hears('estado do {estado}','App\Http\Controllers\PesquisaEstadoController@pesquisaEstado');
$botman->hears('estado da {estado}','App\Http\Controllers\PesquisaEstadoController@pesquisaEstado');
$botman->hears('estado de {estado}','App\Http\Controllers\PesquisaEstadoController@pesquisaEstado');
$botman->hears('{estado} .','App\Http\Controllers\PesquisaEstadoController@pesquisaEstado');

//////////////////////////////////////////////////



$botman->receivesImages(function($bot, $images) {
    $bot->reply('imagem interessante');
});

$botman->fallback(function($bot) {
    $bot->reply('Desculpe, voce pode repetir?');
});


$botman->hears('Start conversation', BotManController::class.'@startConversation');
