<?php
class AlumnoControlador extends Alumno{
   
    public function guardarDatos($objAlumno) {
        $variableSql = "INSERT INTO alumno ";
        $variableSql .= "(id,nombre,apellido,fecha_nacimiento,";
        $variableSql .= "direccion,carnet,seccion) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objAlumno[0]."',";
        $variableSql.="'".$objAlumno[1]."',";
        $variableSql.="'".$objAlumno[2]."',";
        $variableSql.="'".$objAlumno[3]."',";
        $variableSql.="'".$objAlumno[4]."',";
        $variableSql.="'".$objAlumno[5]."',";
      $variableSql.="'".$objAlumno[6]."');";
        
       return consultaA($con, $variableSql);
   }