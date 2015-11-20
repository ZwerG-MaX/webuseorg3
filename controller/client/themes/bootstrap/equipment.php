<?php

// Данный код создан и распространяется по лицензии GPL v3
// Изначальный автор данного кода - Грибов Павел
// http://грибовы.рф

if ($user->TestRoles("1,4,5,6")==true){
    $morgs=GetArrayOrgs();    // список активный организаций
?>
<div class="well">
            Подразделение:
            <select name="orgs" id="orgs">
                <?php 
                   for ($i = 0; $i < count($morgs); $i++) { 
                       $idorg=$morgs[$i]["id"];
                       $nameorg=$morgs[$i]["name"];
                 ?>
                <option <?php if ($idorg==$cfg->defaultorgid){echo "selected";}; ?> value=<?php echo "$idorg";?>><?php echo "$nameorg"; ?></option>
                <?php };?>
            </select>       
        <table id="tbl_equpment"></table>
        <div id="pg_nav"></div>
        <div id="pg_add_edit"></div>
            <div class="row-fluid">
                <div class="span2">
                    <div id=photoid></div>
                </div>
                <div class="span10">
                    <table id="tbl_move"></table>
                    <div id="mv_nav"></div>
                    <table id="tbl_rep"></table>
                    <div id="rp_nav"></div>
                </div>
            </div>        
</div>
<script type="text/javascript" src="controller/client/js/equipment.js"></script>
<?php
}
 else {
?>
<div class="alert alert-error">
  У вас нет доступа в данный раздел!
</div>
<?php
    
}

?>