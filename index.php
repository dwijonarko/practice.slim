<?php
require 'vendor/autoload.php'; //autoload

/*autoload twig*/
require "vendor/twig/twig/lib/Twig/Autoloader.php";
Twig_Autoloader::register();
\Slim\Extras\Views\Twig::$twigExtensions = array(
        'Twig_Extensions_Slim',
 );

/*initialization activerecord*/
ActiveRecord\Config::initialize(function($cfg) {
        $cfg->set_model_directory('models');
        $cfg->set_connections(array(
            'development' => 'mysql://root:root@localhost/slim'
        ));
});

/*initialize slim app*/
$app = new \Slim\Slim(array(
    "view" => new \Slim\Extras\Views\Twig()
));


## Read
$app->get('/', function () use ($app) { 
   $data['tasks'] = Task::find('all');
   $app->view()->setData(array());
   $app->render('task/index.php', $data); 

})->name('tasks'); 

##new
$app->get('/new',function() use($app){
	$app->render('task/new.php');
})->name('task_new');

## Create
$app->post('/create', function () use ($app) { 
    $task = new Task();
    $task->name = $app->request()->post('name');
    $task->done = $app->request()->post('done') === '1' ? 1 : 0;
    $task->save();
    if($task->save()) {
        $app->redirect($app->urlFor('tasks'));
    }
})->name('task_create');

## Read
$app->get('/:id/edit/', function ($id) use ($app) {
    $data['task'] = Task::find($id);
    $app->render('task/edit.php', $data); 
})->name('task_edit');

## Update
$app->post('/:id/edit', function ($id) use ($app) {
    $task = Task::find($id);
    $task->name = $app->request()->post('name');
    $task->done = $app->request()->post('done') === '1' ? 1 : 0;
    $task->save();
    if($task->id > 0) {
        $app->redirect($app->urlFor('tasks'));
    }
})->name('task_edit_post');

## Delete
$app->get('/:id/delete/', function ($id) use ($app) {
    $task = Task::find($id);
    $task->delete();
    $app->redirect($app->urlFor('tasks'));
})->name('task_delete');

$app->run();