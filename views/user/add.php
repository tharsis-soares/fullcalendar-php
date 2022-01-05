<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php $date=new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_PAulo')); ?>

<form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'controllers/ControllerAdd.php'; ?>">
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
    Paciente: <input type="text" name="title" id="title"><br>
    Queixa: <input type="text" name="description" id="description"><br>
    Quanto tempo deseja de atendimento:
    <select name="horasAtendimento" id="horasAtendimento">
        <option value="">Selecione</option>
        <option value="1">1 hora</option>
        <option value="2">2 horas</option>
        <option value="3">3 horas</option>
    </select><br>
    <input type="submit" value="Marcar consulta">
</form>


<?php include(DIRREQ."lib/html/footer.php"); ?>