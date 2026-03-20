<style>
.ativo{
    color:blue;
}
.inativo{
    color:red;
}
</style>

<?php
    $nivelAcesso = 0;
    if($nivelAcesso){
        echo '<span class="ativo">Administrador</span>';
    }else{
        echo '<span class="inativo">Usuario comum</span>';
    }
?>