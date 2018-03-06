<style type="text/css">
<!--
    *
    {
        font-size: 11px;
    }
    tr.rojo
    {
        background: #FED4D4;
    }
    .left
    {
        margin-left: 60px;
    }   
    table.page_header
    {
        width: 100%; 
        
        border: none; 
        /*background-image: url(../../images/encabezado.png);*/
        padding: 10px 10px 0px 10px;
        color: #0678C4; 
        font-size: 10px;       
    }
    table.page_footer 
    {
        width: 100%; 
        height: 93px;
        border: none; 
        /*background-image: url(../../images/pie.png);*/
        padding: 25px 10px;
        color: #0678C4;     
        font-size: 10px;
    }

tr.titulo
{    
    background: #0678C4;
    color: #FFF;
    text-align: center;
    vertical-align: middle;        
    font-size: 12px !important;    
    text-transform: uppercase;    
    
}
tr.titulo4
{   
    color: #044974;
    text-shadow: 0px 1px 0px #fff;    
    background: #f5f5f5;
}
table.cont
{    
    width: 100%;
    border-left: solid 1px #0064A7;
    border-top: solid 1px #0064A7;
    background: #fff;
    font-size: 8px;
}
table.cont td
{    
    border-bottom: solid 1px #0064A7;
    border-right: solid 1px #0064A7;
    padding: 5px;
    font-size: 7px;
}

tr.fila1
{
    background: #f0f0f0;
}
tr.fila2
{
    background: #fff;
}
tr.fila3
{
    background: #eee;
}
h3
{
    display: block;
    text-align: center;
    color:#444;
    font-size: 14px;
    font-weight: bold;
}
h4
{
    display: block;
    text-align: center;
    color:#444;
    font-size: 12px;
    font-weight: bold;
}
h1
{
    display: block;
    text-align: center;
    color:#155E85;
    font-size: 14px;
} 
p{
    padding: 0px 40px;
    text-align: justify;
}     

td{
    padding: 10px 8px;
}
-->
</style>
<page backtop="22mm" backbottom="22mm" backleft="0mm" backright="0mm" backimg="" style="font-size: 10pt">
    <page_header>        
        <table class="page_header">            
            <tr>
                <td style="width: 30%; text-align: left;">
                     <img src="../reportes/images/ministerio-de-educacion.png"/>                   
                </td>
                <td style="width: 30%; text-align: center">
                    &nbsp;
                </td>
                <td style="width: 40%; text-align: right;">
                    <img src="../reportes/images/universidad-pedagocica.png"/>
<?php
    
    include("../../modelo/conexion.php");
    include("../../modelo/funciones.php");
    
    //referer_permit();
    
    $bd = new Conexion();
    
?>
                </td>
            </tr>
        </table>
    </page_header>    
    <page_footer>        
        <table class="page_footer">
            <tr>
                <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 33%; text-align: left;">                       
                    <small>Fecha y Hora de impresi&oacute;n : <?php echo date('d/m/Y H:i:s'); ?></small>                 
                </td>
                <td style="width: 34%; text-align: center">
                    p&aacute;gina [[page_cu]]/[[page_nb]]
                </td>
                <td style="width: 33%; text-align: right">
                    &copy; <?php echo date('Y'); ?>
                </td>
            </tr>
        </table>
    </page_footer>