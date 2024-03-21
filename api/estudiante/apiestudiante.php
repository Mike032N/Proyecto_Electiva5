<?php
    include_once 'api/estudiante/estudiante.php';

    class  ApiEstudiantes{


        function getAll(){
            $estudiante = new Estudiante();
            $estudiantes = array();
            $estudiantes["items"] = array();

            $res = $estudiante->obtenerEstudiante();

            if($res->rowCount()){
                while($row = $res->fetch(PDO::FETCH_ASSOC)){
                    $item = array(
                        'codigo' => $row['codigo'],
                        'nombre' => $row['nombre'],
                        'fechaN' => $row['fechaN'],
                        'correo'=> $row['correo']
                    );
                    array_push($estudiantes['items'], $item);

                    
                }
                echo  json_encode($estudiantes);
            }else{
                echo json_encode(array('mensaje'=>'no hay elementos registrados'));
            }

        }
    }
?>