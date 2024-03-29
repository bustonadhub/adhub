<?php

//Example Script, saves Hello World to the database.

//First, we need to include redbean
require_once('rb.php');

//Second, we need to setup the database

//If you work on Mac OSX or Linux (or another UNIX like system)
//You can simply use this line:

//R::setup(); //This creates an SQLite database in /tmp
//R::setup('database.txt'); -- for other systems
R::setup('mysql:host=127.0.0.1:3305;dbname=redbean','root','vas2nets');
//Ready. Now insert a bean!
$bean = R::dispense('leaflet');
$bean->title = 'Hello World';

//Store the bean
$id = R::store($bean);

//Reload the bean
$leaflet = R::load('leaflet',$id);

//Display the title
echo $leaflet->title;



