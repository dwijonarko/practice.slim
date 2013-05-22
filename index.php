<?php
require 'vendor/autoload.php'; //autoload
/*initialize slim app*/
$app = new \Slim\Slim();

/*initialize twig*/
$twig_view = new \Slim\Extras\Views\Twig();

/*initialize twig options*/
$twig_view::$twigOptions = array(
    'charset'           => 'utf-8',
    'cache'             => 'templates/cache',
    'auto_reload'       => true,
    'strict_variables'  => false,
    'autoescape'        => false
    );

/*initialize twig extension*/
$twig_view::$twigExtensions = array(
        'Twig_Extensions_Slim',
        'Twig_Extension_Debug'
 );

/*initialize activerecord*/
ActiveRecord\Config::initialize(function($cfg) {
        $cfg->set_model_directory('models');
        $cfg->set_connections(array(
            'development' => 'mysql://root:root@localhost/slim'
        ));
});

/*set the view on slim framework to twig extension*/
$app->view($twig_view);


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
        $data['task'] =$task;
        $app->render('task/response.php', $data);
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
        $data['task'] =$task;
        $app->render('task/response.php', $data);
    }
})->name('task_edit_post');

## Delete
$app->get('/:id/delete/', function ($id) use ($app) {
    $task = Task::find($id);
    $task->delete();
    //$app->redirect($app->urlFor('tasks'));
})->name('task_delete');

$app->run();