<?php
	function security($value)
    {
        if(is_array($value) )
        {
            $value = array_map('security', $value);
        }
        else
        {
            if( !get_magic_quotes_gpc() )
            {
              //$value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
              $value = htmlspecialchars($value, ENT_QUOTES);
            }
            else
            {
              $value = htmlspecialchars(stripslashes($value), ENT_QUOTES);
            }
            $value = str_replace("\\", "\\\\", $value);
        }
    	return $value;
    }
    
    function msg_error($cod)
    {
        switch($cod)
        {
            case '1': echo "<strong>Debe iniciar Sesi&oacute;n.</strong>"; break;
            case '403': echo "<div class='alert dismissible alert_red'><img height=\"24\" width=\"24\" src=\"images/icons/small/white/alarm_bell.png\"> Usted no tienen permiso para acceder a esta secci&oacute;n.</div>"; break;
            
        }
    }
    
    function require_login($nivel_requerido = "", $unico = false)
    {
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        
        if(empty($_SESSION[nivel]))
        {
            echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\" />";
            msg_error(1); 
            exit;     
        }
        
        if($unico)
        {
            if($nivel_requerido == 'Administrador' && $_SESSION[nivel] != 'Administrador')
            {
                echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\" />";  
                msg_error(403);
                exit;     
            }
            
            if($nivel_requerido == 'Almacen' && $_SESSION[nivel] != 'Almacen')
            {
                echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\" />";  
                msg_error(403);
                exit;     
            }
            
            if($nivel_requerido == 'Repartidor' && $_SESSION[nivel] != 'Repartidor')
            {
                echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\" />";  
                msg_error(403);
                exit;     
            }
        }
        else
        {
            if($nivel_requerido == 'Administrador' && $_SESSION[nivel] != 'Administrador')
            {
                echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\" />";  
                msg_error(403);
                exit;     
            }
            
            if($nivel_requerido == 'Almacen' && $_SESSION[nivel]!='Administrador' && $_SESSION[nivel]!='Almacen')
            {
                echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\" />";
                msg_error(403);
                exit;     
            }    
        }        
    }
    
    function no_user_permit($nivel_denegado = "")
    {
        //admin admins cajero
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        
        if(empty($_SESSION[nivel]))
        {
            echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\" />";
            msg_error(1); 
            exit;     
        }
        
        if($nivel_denegado == 'Administrador' && $_SESSION[nivel] == 'Administrador')
        {
            echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\" />";  
            msg_error(403);
            exit;     
        }
        
        if($nivel_denegado == 'Almacen' && $_SESSION[nivel] == 'Almacen')
        {
            echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\" />";  
            msg_error(403);
            exit;     
        }
        
        if($nivel_denegado == 'Repartidor' && $_SESSION[nivel] == 'Repartidor')
        {
            echo "<meta http-equiv=\"Refresh\" content=\"3;url=index.php\" />";  
            msg_error(403);
            exit;     
        }
             
    }
    
    function referer_permit()
    {   
        $host_permit = "/tienda"; 
        
        $http_referer = $_SERVER["HTTP_REFERER"]; 
        $pos = strpos($http_referer, $host_permit); 
     
        if($pos === false)
        {
            echo "Acceso no Permitido.";
            exit();
        }       
    }
    
    function descargar_archivo($archivo, $downloadfilename = null)
    {
        if (file_exists($archivo)) {
            $downloadfilename = $downloadfilename !== null ? $downloadfilename : basename($archivo);
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . $downloadfilename);
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: ' . filesize($archivo));
    
            ob_clean();
            flush();
            readfile($archivo);
            exit;
        }
    
    }
    
    function format_date($date)
    {
        $fecha = explode(" ", $date);
        
        $t = $fecha[1];        
        $f = explode("-", $fecha[0]); 
        
        $nueva_fecha = "$f[2]-$f[1]-$f[0] $t";
        
        return $nueva_fecha;
    }
    
    function getDia($posicion)
    {
        $dias = array(1 => "Lunes", 2 => "Martes", 3 => "Miercoles", 4 => "Jueves", 5 => "Viernes", 6 => "Sábado", 7 => "Domingo");
        return $dias[$posicion];
    }

    function num2letras($num, $fem = false, $dec = true) 
    { 
       $matuni[2]  = "dos"; 
       $matuni[3]  = "tres"; 
       $matuni[4]  = "cuatro"; 
       $matuni[5]  = "cinco"; 
       $matuni[6]  = "seis"; 
       $matuni[7]  = "siete"; 
       $matuni[8]  = "ocho"; 
       $matuni[9]  = "nueve"; 
       $matuni[10] = "diez"; 
       $matuni[11] = "once"; 
       $matuni[12] = "doce"; 
       $matuni[13] = "trece"; 
       $matuni[14] = "catorce"; 
       $matuni[15] = "quince"; 
       $matuni[16] = "dieciseis"; 
       $matuni[17] = "diecisiete"; 
       $matuni[18] = "dieciocho"; 
       $matuni[19] = "diecinueve"; 
       $matuni[20] = "veinte"; 
       $matunisub[2] = "dos"; 
       $matunisub[3] = "tres"; 
       $matunisub[4] = "cuatro"; 
       $matunisub[5] = "quin"; 
       $matunisub[6] = "seis"; 
       $matunisub[7] = "sete"; 
       $matunisub[8] = "ocho"; 
       $matunisub[9] = "nove"; 
    
       $matdec[2] = "veinte"; 
       $matdec[3] = "treinta"; 
       $matdec[4] = "cuarenta"; 
       $matdec[5] = "cincuenta"; 
       $matdec[6] = "sesenta"; 
       $matdec[7] = "setenta"; 
       $matdec[8] = "ochenta"; 
       $matdec[9] = "noventa"; 
       $matsub[3]  = 'mill'; 
       $matsub[5]  = 'bill'; 
       $matsub[7]  = 'mill'; 
       $matsub[9]  = 'trill'; 
       $matsub[11] = 'mill'; 
       $matsub[13] = 'bill'; 
       $matsub[15] = 'mill'; 
       $matmil[4]  = 'millones'; 
       $matmil[6]  = 'billones'; 
       $matmil[7]  = 'de billones'; 
       $matmil[8]  = 'millones de billones'; 
       $matmil[10] = 'trillones'; 
       $matmil[11] = 'de trillones'; 
       $matmil[12] = 'millones de trillones'; 
       $matmil[13] = 'de trillones'; 
       $matmil[14] = 'billones de trillones'; 
       $matmil[15] = 'de billones de trillones'; 
       $matmil[16] = 'millones de billones de trillones'; 
       
       //Zi hack
       $float=explode('.',$num);
       $num=$float[0];
    
       $num = trim((string)@$num); 
       if ($num[0] == '-') { 
          $neg = 'menos '; 
          $num = substr($num, 1); 
       }else 
          $neg = ''; 
       while ($num[0] == '0') $num = substr($num, 1); 
       if ($num[0] < '1' or $num[0] > 9) $num = '0' . $num; 
       $zeros = true; 
       $punt = false; 
       $ent = ''; 
       $fra = ''; 
       for ($c = 0; $c < strlen($num); $c++) { 
          $n = $num[$c]; 
          if (! (strpos(".,'''", $n) === false)) { 
             if ($punt) break; 
             else{ 
                $punt = true; 
                continue; 
             } 
    
          }elseif (! (strpos('0123456789', $n) === false)) { 
             if ($punt) { 
                if ($n != '0') $zeros = false; 
                $fra .= $n; 
             }else 
    
                $ent .= $n; 
          }else 
    
             break; 
    
       } 
       $ent = '     ' . $ent; 
       if ($dec and $fra and ! $zeros) { 
          $fin = ' mil'; 
          for ($n = 0; $n < strlen($fra); $n++) { 
             if (($s = $fra[$n]) == '0') 
                $fin .= ' cero'; 
             elseif ($s == '1') 
                $fin .= $fem ? ' una' : ' un'; 
             else 
                $fin .= ' ' . $matuni[$s]; 
          } 
       }else 
          $fin = ''; 
       if ((int)$ent === 0) return 'Cero ' . $fin; 
       $tex = ''; 
       $sub = 0; 
       $mils = 0; 
       $neutro = false; 
       while ( ($num = substr($ent, -3)) != '   ') { 
          $ent = substr($ent, 0, -3); 
          if (++$sub < 3 and $fem) { 
             $matuni[1] = 'una'; 
             $subcent = 'as'; 
          }else{ 
             $matuni[1] = $neutro ? 'un' : 'uno'; 
             $subcent = 'os'; 
          } 
          $t = ''; 
          $n2 = substr($num, 1); 
          if ($n2 == '00') { 
          }elseif ($n2 < 21) 
             $t = ' ' . $matuni[(int)$n2]; 
          elseif ($n2 < 30) { 
             $n3 = $num[2]; 
             if ($n3 != 0) $t = 'i' . $matuni[$n3]; 
             $n2 = $num[1]; 
             $t = ' ' . $matdec[$n2] . $t; 
          }else{ 
             $n3 = $num[2]; 
             if ($n3 != 0) $t = ' y ' . $matuni[$n3]; 
             $n2 = $num[1]; 
             $t = ' ' . $matdec[$n2] . $t; 
          } 
          $n = $num[0]; 
          if ($n == 1) { 
             $t = ' cien' . $t; 
          }elseif ($n == 5){ 
             $t = ' ' . $matunisub[$n] . 'ient' . $subcent . $t; 
          }elseif ($n != 0){ 
             $t = ' ' . $matunisub[$n] . 'cient' . $subcent . $t; 
          } 
          if ($sub == 1) { 
          }elseif (! isset($matsub[$sub])) { 
             if ($num == 1) { 
                $t = ' mil'; 
             }elseif ($num > 1){ 
                $t .= ' mil'; 
             } 
          }elseif ($num == 1) { 
             $t .= ' ' . $matsub[$sub] . '?n'; 
          }elseif ($num > 1){ 
             $t .= ' ' . $matsub[$sub] . 'ones'; 
          }   
          if ($num == '000') $mils ++; 
          elseif ($mils != 0) { 
             if (isset($matmil[$sub])) $t .= ' ' . $matmil[$sub]; 
             $mils = 0; 
          } 
          $neutro = true; 
          $tex = $t . $tex; 
       } 
       $tex = $neg . substr($tex, 1) . $fin; 
       
       if(strlen($float[1]) == 1)
       {
            $ceros = "0";
       }
       else
       {
            $ceros = "00";
       }
       
       //$end_num = ucfirst($tex).' coma  ' . $float[1];
       $end_num = ucfirst($tex);
       
       return $end_num; 
    }
    
    function valoracion_cualitativa($puntaje)
    {
        $valor = "";
        if($puntaje >= 81)
            $valor = "Desempeño óptimo";
            
        if($puntaje >= 70 && $puntaje < 81)
            $valor = "Desempeño suficiente";
        
        if($puntaje < 70)
            $valor = "Reprobado";  
            
        if($puntaje == 0)
            $valor = "Retirado";
                        
        return $valor;      
    }
    
?>
