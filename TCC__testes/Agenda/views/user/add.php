<?php include("../../config/config.php"); ?>
<?php include(DIRREQ . "TCC__testes/Agenda/lib/html/header.php"); ?>
<?php
$date = new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_Paulo')); ?>

<form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE . 'TCC__testes/Agenda/controllers/ControllerAdd.php'; ?>">
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
    Horas: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
    NomeDoEvento: <input type="text" name="title" id="title"><br>
    Descrição: <input type="text" name="description" id="description"><br>
    Hora do Evento: <select name="horasEvento" id="horasEvento">
        <option value="">Selecione</option>
        <option value="1">1h</option>
        <option value="2">2h</option>
        <option value="3">3h</option>
    </select><br>
    <input type="submit" value="Marcar Evento Escolar">
</form>

<?php include(DIRREQ . "TCC__testes/Agenda/lib/html/footer.php"); ?>