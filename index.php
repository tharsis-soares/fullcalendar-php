<?php include("config/config.php");?>
<?php include(DIRREQ."lib/html/header.php");?>
<a href="<?php echo DIRPAGE.'views/user'; ?>">Calendario do Usuario</a>
<br>
<br>
<a href="<?php echo DIRPAGE.'views/manager'; ?>">Calendario do Gerente</a>
<?php include(DIRREQ."lib/html/footer.php");?>
<div>
<div class='modal fade' id="visualizar" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Modal Title
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 
            </div>
        </div>
    </div>
</div>
</div>