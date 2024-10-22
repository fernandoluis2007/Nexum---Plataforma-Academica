<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents(); 
$date=filter_input(INPUT_POST, 'date',FILTER_DEFAULT);
$time=filter_input(INPUT_POST, 'time',FILTER_DEFAULT);
$title=filter_input(INPUT_POST, 'title',FILTER_DEFAULT);
$description=filter_input(INPUT_POST, 'description',FILTER_DEFAULT);
$horasEvento=filter_input(INPUT_POST, 'horasEvento', FILTER_DEFAULT);
$start=new \DateTime($date.' '.$time, new \DateTimeZone('America/Sao_Paulo'));


$objEvents->createEvent(
    0,
    $title,
    $description,
    'blue',
    $start->format("Y-m-d H:i:s"),
    $start->modify('+'.$horasEvento.'hours')->format("Y-m-d H:i:s")
);