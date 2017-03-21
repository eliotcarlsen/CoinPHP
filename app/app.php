<?php
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Coins.php';

  session_start();

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get('/', function() use($app){
    return $app['twig']->render('index.html.twig');
  });

  $app->post('/check', function() use($app){

    $new_coins = new Coins;
    $input = $_POST['amount'];
    $new_coins->coinNumber($input);

    return $app['twig']->render('index.html.twig', array('q'=>$new_coins->q, 'd'=>$new_coins->d, 'n'=>$new_coins->n, 'p'=>$new_coins->p));
  });


  return $app;
?>
