<?php    
    include './config/subMenus.php';  
    require 'config/TabelaUsuario.php';
    include 'config/infoPainel.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Painel do usuário logado</title>
        <?php include('./config/header.php'); ?>
        <script type="text/javascript" src="js/prototipoMenu.js"></script>
    </head>
    <body>
        <div class="span">
            <div>
                <div>             
                    <div class="well" style="width: 300px; background-color:#CDCDCD; 
                         border: 2px solid graytext;">
                        <ul>
                            <li><strong>Login:</strong> <?php echo $objLogin->getLogin(); ?></li>
                            <a class="btn btn-danger" href="sair.php">Sair</a>
                        </ul>                        
                    </div>
                </div>
                <div id="divforms" class="well span"  align="center" 
                     style="width: 150px; background-color:#CDCDCD; border: 2px solid graytext;">               
                    <form action="" id="formteste" class='form-horizontal'>                      
                        <legend><h1 class="ui-icon-alert">Menu</h1></legend>
                        <?php menus(); ?>
                        <br>
                    </form>
                </div> 
                <div class="span12  container-fluid well" style="height: 800px; background-color:#CDCDCD; border: 2px solid graytext;">
                    <div id="tabela" class="well" style="width: 700px; display:none;"></div>  
                </div>                         
            </div>
        </div>
    </body>    
</html>
