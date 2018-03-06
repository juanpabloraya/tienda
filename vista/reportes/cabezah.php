<style type="text/css">
<!--
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
        height: 93px;
        border: none; 
        background-image: url(../../images/encabezado1.png);
        padding: 24px 10px 0px 10px;
        color: #003F83; 
        font-size: 10px;       
    }
    table.page_footer 
    {
        width: 100%; 
        height: 93px;
        border: none; 
        background-image: url(../../images/pie1.png);
        padding: 25px 10px;
        color: #003F83; 
        font-size: 10px;       
    }

tr.titulo
{    
    background: #003F83;
    color: #FFF;
    text-align: center;
    font-size: 11px;    
}
tr.titulo4
{   
    color: #044974;
    text-shadow: 0px 1px 0px #fff;    
    background: #f5f5f5;
}
table.cont
{    
    max-width: 90%;
    border-left: solid 1px #003F83;
    border-top: solid 1px #003F83;
    
    background: #fff;
}
table.cont td
{    
    border-bottom: solid 1px #003F83;
    border-right: solid 1px #003F83;
    padding: 5px;
    font-size: 10px;
}

tr.fila1
{
    background: #F0F0F0;
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
    color:#003F83;
    font-size: 14px;
} 
p{
    padding: 0px 40px;
    text-align: justify;
}     
-->
</style>
<page backtop="25mm" backbottom="14mm" backleft="0mm" backright="0mm" backimg="../../images/pegaso.png" style="font-size: 10pt">
    <page_header>        
        <table class="page_header">            
            <tr>
                <td style="width: 30%; text-align: left;">
                                        
                </td>
                <td style="width: 40%; text-align: center;">
                    &nbsp;
                </td>
                <td style="width: 30%; text-align: center; padding: 10px;">
<?php
    
    include("../../modelo/conexion.php");
    include("../../modelo/funciones.php");
    include("../../modelo/sucursal.php");
    
    $bd = new conexion();
    
    $sucursal = new sucursal();
    $sucursal->get_sucursal($_SESSION[sucursal]);
    
    echo "Sucursal - ".$sucursal->nombre_sucursal;
    echo "<br>".$sucursal->direccion." - Telf.: ".$sucursal->telefono." - Celular: ".$sucursal->celular;
    echo "<br>NIT : ".$sucursal->nit;
    
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