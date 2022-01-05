<?php
include("../config/config.php");
$objEvents=new \Classes\ClassEvents();
//var_dump($_POST);

$date=filter_input(INPUT_POST, 'date', FILTER_DEFAULT);
$time=filter_input(INPUT_POST, 'time', FILTER_DEFAULT);
$title=filter_input(INPUT_POST, 'title', FILTER_DEFAULT);
$description=filter_input(INPUT_POST, 'description', FILTER_DEFAULT);
$horasAtendimento=filter_input(INPUT_POST, 'horasAtendimento', FILTER_DEFAULT);
$start= new \DateTime($date.' '.$time, new \DateTimeZone('America/Sao_Paulo')); 
$end=$start->modify('+'.$horasAtendimento.'hours');

$objEvents->createEvent(
    0,
    $title,
    $description,
    'blue',
    $start->format('Y-m-d H:i:s'),
    $end->format('Y-m-d H:i:s')
);