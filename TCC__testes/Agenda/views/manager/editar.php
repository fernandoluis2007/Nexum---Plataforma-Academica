<?php include("../../config/config.php"); ?>
<?php include(DIRREQ . "TCC__testes/Agenda/lib/html/header.php"); ?>
<?php
$objEvents = new \Classes\ClassEvents();
$events = $objEvents->getEventsById($_GET['id']);
$date = new \DateTime($events['start']);
?>

<a id="delete" href="<?php echo DIRPAGE.'TCC__testes/Agenda/controllers/ControllerDelete.php?id='.$_GET['id']; ?>"><img src="<?php echo DIRPAGE.'TCC__testes/Agenda/img/lixo.png' ?>"></a>

<form name="formEdit" id="formEdit" method="post" action="<?php echo DIRPAGE . 'TCC__testes/Agenda/controllers/ControllerEdit.php'; ?>">
    <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>"><br>
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
    Horas: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
    NomeDoEvento: <input type="text" name="title" id="title" value="<?php echo $events['title']; ?>"><br>
    Descrição: <input type="text" name="description" id="description" value="<?php echo $events['description']; ?>"><br>
    <input type="submit" value="Confirmar Evento Escolar">
</form>

<?php include(DIRREQ . "TCC__testes/Agenda/lib/html/footer.php"); ?>