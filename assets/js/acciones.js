function Moneda(amount) {
    var val = parseFloat(amount);
    if (isNaN(val))
    { 
        return "0.00"; 
    }
    if (val <= 0) 
    { 
        return "0.00"; 
    }
    val += "";
    
    if (val.indexOf('.') == -1) 
    { 
        return val+".00"; 
    }
    else 
    { 
        val = val.substring(0,val.indexOf('.')+3); 
    }
    
    val = (val == Math.floor(val)) ? val + '.00' : ((val*10 == Math.floor(val*10)) ? val + '0' : val);
    
    return val;
}
function round_my(num)
{
    var n = Math.trunc(parseFloat(num)*10)/10;
    
    return Moneda(n);  
}
function round2(num)
{
    var n = Math.round(parseFloat(num)*100)/100; 
    
    return Moneda(n);  
}
function trunc2(num)
{
    return Moneda(Math.trunc(num));
}

jQuery(document).ready(function($){

   jQuery("a.accion").live("click",function(e){
        e.preventDefault();
        var dir = $(this).attr("href");
        jConfirm("Esta seguro de esta acci&oacute;n?","Mensaje",function(resp){
           if(resp)
           {
                 $.post(dir,{},function(data){
                   jAlert(data,"Mensaje",function(){
                        if(data.indexOf("error")>=0 || data.indexOf("Error")>=0){}
                        else
                            window.location.reload(); 
                   });
                    
                });
           } 
        });
       
   });
   
   jQuery("a.ordenar").live("click",function(e){
        e.preventDefault();
        var dir = $(this).attr("href");
        jConfirm("Esta seguro de esta acci&oacute;n?","Mensaje",function(resp){
           if(resp)
           {
                 $.post(dir,{},function(data){
                    window.location.reload();
                });
           } 
        });
       
   });
   
   jQuery("a.salir").live("click",function(e){
        e.preventDefault();
        var dir = $(this).attr("href");
        jConfirm("Esta seguro de salir?","Mensaje",function(resp){
           if(resp)
           {
                 $.post(dir,{},function(data){
                   jAlert(data,"Mensaje",function(){});
                   
                   window.location.href = 'index.php';
                                     
                });
           } 
        });
       
   });
   
   jQuery(".cancelar").live("click",function(e){
        window.history.back();        
   });
   
   /*
       
   $("[type=reset]").click(function(e){
       e.preventDefault(); 
       jConfirm("Esta seguro de borrar todos los datos llenados?","Mensaje",function(res){
          if(res)
          {
             $(".validate").resetForm();
          }
             
       });            
   });
   
   */
    
   
   $(".enteros").Enteros();
   $(".decimales").Decimales(2);
   $(".solotexto").SoloTexto();
   $(".alfanumerico").Alfanumerico();
   
   //CKFinder.setupCKEditor( null, 'ckfinder/' );
   $("#nivel").change(function(){
       var val = $(this) .val();
       if(val == 'Repartidor')
       {
           $("#ruta").fadeIn('fast'); 
       }
       else
       {
           $("#ruta").fadeOut('fast');
       }
    });
    
    $("#fk_id_tipo").change(function(){
           var id_tipo = $(this).val();
           var id_modulo = $("#fk_id_modulo").val();
           
           $.post("vista/actividad/puntos_actividad.php",{id_tipo:id_tipo, id_modulo:id_modulo},function(data){
               $("#mensaje_nota").html(data);  
           });
            
     });
       
     $("#tipo_curso").change(function(){
           var tipo_curso = $("#tipo_curso").val();
           var gestion = $("#gestion").val();
           var escuela = $("#escuela").val();
           
           $.post("vista/cuota/select_cursos_gestion.php",{tipo_curso:tipo_curso, gestion:gestion, escuela:escuela},function(data){
               $("#curso").html(data);
           });
            
     });  
     
     $("#gestion").change(function(){
           var gestion = $("#gestion").val();
          
           
           $.post("vista/pago_cuotas/select_mes_gestion.php",{gestion:gestion},function(data){
               $("#mes").html(data);
           });
            
     });

     $("#mes").change(function(){
           var mes = $("#mes").val();
                     
           $.post("vista/pago_cuotas/select_monto_mes.php",{mes:mes},function(data){
               $("#monto").html(data);
           });
            
     });
     
     $("#modulo").change(function(){
           var modulo = $("#modulo").val();
           
           $.post("vista/cuota/select_grupos.php",{modulo:modulo},function(data){
               $("#grupo").html(data);
           });
            
     });
     
      
     $("#id_modulo").change(function(){
           var id_tipo = $(this).val();
           var id_modulo = $("#id_modulo").val();
           
           $.post("vista/grupo/grupo_select.php",{id_modulo:id_modulo},function(data){
               $("#grupos").html(data);  
           });
            
     }); 

     $("#fk_id_rol").change(function(){
           var id_rol = $(this).val();
           $.post("vista/usuario/lista_persona.php",{id_rol:id_rol},function(data){
               $("#lista").html(data);  
           });
            
     });

     $("#departamento_nacimiento").change(function(){
           var departamento_nacimiento = $(this).val();
           $.post("vista/provincia/provincias_nacimiento.php",{departamento_nacimiento:departamento_nacimiento},function(data){
               $("#provincias_nacimiento").html(data);  
           });
            
     });  

     $("#departamento_residencia").change(function(){
           var departamento_residencia = $(this).val();
           $.post("vista/provincia/provincias_residencia.php",{departamento_residencia:departamento_residencia},function(data){
               $("#provincias_residencia").html(data);  
           });
            
     });
     
     $("#departamento_residencia").change(function(){
           var departamento = $(this).val();
                      
           $.post("vista/provincia/provincia_select.php",{departamento:departamento},function(data){
               $("#provincia_residencia").html(data);  
           });
            
     });
     /*
     $("#provincia_residencia").change(function(){
           var departamento = $(this).val();
           var provincia = $(this).val();
                      
           $.post("vista/provincia/municipio_select.php",{departamento:departamento, provincia:provincia},function(data){
               $("#municipio_residencia").html(data);  
           });
            
     });
     */
     $("#departamento_trabajo").change(function(){
           var departamento = $(this).val();
                      
           $.post("vista/provincia/provincia_select.php",{departamento:departamento},function(data){
               $("#provincia_trabajo").html(data);  
           });
            
     });
     
     $("#departamento_nacimiento").change(function(){
           var departamento = $(this).val();
                      
           $.post("vista/provincia/provincia_select.php",{departamento:departamento},function(data){
               $("#provincia_nacimiento").html(data);  
           });
            
     });
     
     $("#tipo_curso1").change(function(){
           var tipo = $(this).val();
           var escuela = $("#escuela_formacion").val();
                      
           $.post("vista/curso/curso_select.php",{tipo:tipo, escuela:escuela},function(data){
               $("#curso1").html(data);
           });
     });
     
     $("#tipo_curso2").change(function(){
           var tipo = $(this).val();
           var escuela = $("#escuela_formacion").val();
                      
           $.post("vista/curso/curso_select.php",{tipo:tipo, escuela:escuela},function(data){
               $("#curso2").html(data);  
           });
     });   
     
     $("#curso2").change(function(){
           var curso1 = $("#curso1").val();
           var curso2 = $(this).val();
           
           if(curso1 == curso2)
           {
               jAlert("Seleccione un curso diferente al primero.","Mensaje",function(resp){
                 $("#curso2").html("<option value=''>- Seleccione -</option>");
               }); 
           }
     });
     
     $("#trabajo").click(function(e){          
        if($(this).attr("checked")){
            $(".datos_trabajo").hide();    
        }else{
            $(".datos_trabajo").show();
        }
     });  
     
     $("#frm_imprimir_respaldo").ajaxForm(function(data){
        if(data.indexOf("Error")>=0)
        {
            jAlert(data, "Mensaje", function(resp){});
        }
        else
        {
            var new_window = window.open("vista/preinscripcion/imprimir_formulario.php?ci="+data,'Formulario de Preinscripción','height=800,width=1000');                                                        
        }
     });
     
     $("#frm_imprimir_respaldo_i").ajaxForm(function(data){
        if(data.indexOf("Error")>=0)
        {
            jAlert(data, "Mensaje", function(resp){});
        }
        else
        {
            var new_window = window.open("vista/inscripcion/imprimir_formulario.php?ci="+data,'Formulario de Inscripción','height=800,width=1000');
            var new_window = window.open("vista/inscripcion/imprimir_carta.php?ci="+data,'Carta de Solicitud','height=800,width=1000');
                                                                    
        }
     });
     
     $("#frm_imprimir_respaldo_i_dip").ajaxForm(function(data){
        if(data.indexOf("Error")>=0)
        {
            jAlert(data, "Mensaje", function(resp){});
        }
        else
        {
            var new_window = window.open("vista/inscripcion/imprimir_formulario_dip.php?ci="+data,'Formulario de Inscripción','height=800,width=1000');
            var new_window = window.open("vista/inscripcion/imprimir_carta_dip.php?ci="+data,'Carta de Solicitud','height=800,width=1000');
                                                                    
        }
     });
     
     $("#frm_imprimir_respaldo_curso").ajaxForm(function(data){
        if(data.indexOf("Error")>=0)
        {
            jAlert(data, "Mensaje", function(resp){});
        }
        else
        {
            var new_window = window.open("vista/inscripcion/imprimir_formulario_curso.php?ci="+data,'Formulario de Inscripción','height=800,width=1000');
                                                                    
        }
     });
     
     $(".volver-imprimir").toggle(function(evt){
        evt.preventDefault();
        $("#imprimir-inscripcion").slideDown('fast');
     },function(evt){
        $("#imprimir-inscripcion").slideUp('fast');  
     });
     
});



