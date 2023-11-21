<?php

$router->get('/11-b/', 'controllers/index.php');
$router->get('/11-b/about', 'controllers/about.php');
$router->get('/11-b/contact', 'controllers/contact.php');

$router->get('/11-b/notes', 'controllers/notes/index.php')->only('auth');
$router->get('/11-b/note', 'controllers/notes/show.php');
$router->delete('/11-b/note', 'controllers/notes/destroy.php');

$router->get('/11-b/note/edit', 'controllers/notes/edit.php');
$router->patch('/11-b/note', 'controllers/notes/update.php');

$router->get('/11-b/notes/create', 'controllers/notes/create.php');
$router->post('/11-b/notes', 'controllers/notes/store.php');

$router->get('/11-b/register', 'controllers/registration/create.php')->only('guest');
$router->post('/11-b/register', 'controllers/registration/store.php');