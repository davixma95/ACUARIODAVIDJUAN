<?php

/*CONEXION ESTATICA*/

class BBDDModel {
    private static $servidor = 'localhost';
    private static $usuario = 'root';
    private static $password = '';
    private static $bbdd = 'aquareef';
    private static $conexion;
    
    /*CREAR CONEXION*/
    public static function crearConexion(){
        try {
            self::$conexion = new PDO("mysql:host=". self::$servidor.";dbname=". self::$bbdd, self::$usuario, self::$password);
        } catch (Exception $e) {
            self::$conexion = $e->getMessage("<label style='color:red;'>ERROR en la conexión</label>");
            die();
        }
    }
    /*CONSULTAS SQL*/
                                /*SELECT            SELECT*/
    
    /*ESTA FUNCIÓN recive:
     ----------------------------------------------------------------------------------------------------
     * SELECT       
        DATO        => Datos a consultar         (string)                       [OBLIGATORIO]
     ----------------------------------------------------------------------------------------------------
     * FROM
        TABLA       => Tablas SQL                (string)                       [OBLIGATORIO]
     ----------------------------------------------------------------------------------------------------
     * WHERE
        RELACIONES  => Relaciones entre tablas   (array(tabla1.id = tabla2.id)) [OPCIONAL]
        CONDICIONAL => Condicioiones de consulta (array(condicion1= condicion2) [OPCIONAL]
     ----------------------------------------------------------------------------------------------------
     * GROUP BY, GROUP BY, LIMIT
        COMPLEMENTOS=> Sentencias extra consulta (array(group by DATO limit 10))[OPCIONAL]
     * BINARY
        BINARY      => Diferenciador mayusculas  (string)                       [OPCIONAL]*/
    
    /*RETORNA UN ARRAY CON OBJETOS DENTRO*/
    static function select($dato, $tabla, $arrayRelaciones = array(), 
                           $arrayCondiciones = array(), $arrayComplementos = array(),
                           $binary = ""){
        
        $cont = 0;
        $condicional = "";
        $orderByLimit = "";
        /*TABLAS Y CONDICIONES*/
        if(count($arrayRelaciones) != 0){
            foreach ($arrayRelaciones as $id1 => $id2){
                if($cont == 0){
                    $condicional .= "WHERE $id1 = $id2";
                }
                else{
                    $condicional .= " AND $id1 = $id2";
                }
                $cont++;
            }
            foreach ($arrayCondiciones as $indice => $valor){
                $condicional .= " AND $indice = $binary :$indice";
            }
        }
        else{
            foreach ($arrayCondiciones as $indice => $valor){
                if($cont == 0){
                    $condicional .= "WHERE $indice = $binary :$indice";
                }
                else{
                    $condicional .= " AND $indice = $binary :$indice";
                }
                $cont++;
            }
        }
        /*GROUP BY ORDER BY Y LIMIT*/
        if(count($arrayComplementos) != 0){
            foreach ($arrayComplementos as $indice => $valor){
                $orderByLimit .= " ".$indice." ".$valor;
            }
        }
        $sqlConsulta = "SELECT $dato FROM $tabla $condicional $orderByLimit";
        $sqlEjecucion = self::$conexion->prepare($sqlConsulta);
        foreach ($arrayCondiciones as $indice => &$valor){
            $sqlEjecucion->bindParam(":$indice",$valor);
        }
        $sqlEjecucion->execute();
        $resultado = $sqlEjecucion->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }
                                    /*INSERT            INSERT*/
    
    /*ESTA FUNCIÓN recive:
     ----------------------------------------------------------------------------------------------------
     * INSERT INTO       
        TABLA           => Tablas SQL                   (string)                       [OBLIGATORIO]
     ----------------------------------------------------------------------------------------------------
     * VALUES       
        $arrayValores   => Array con valores a insertar (array(value1,value2...))      [OBLIGATORIO]
     ----------------------------------------------------------------------------------------------------
     */
    /*RETORNA TRUE O FALSE*/
    static function insert($tabla,$arrayValores){
        $cont=0;
        $sqlInsert = "INSERT INTO $tabla VALUES(";
        foreach ($arrayValores as $indice=>$valor){
            if($cont==0){
                $sqlInsert.=":$indice";
            }
            else{
                $sqlInsert.=",:$indice";
            }
            $cont++;
        }
        $sqlInsert.=")";
        $sqlEjecucion = self::$conexion->prepare($sqlInsert);
        foreach ($arrayValores as $indice=> &$valor){
            $sqlEjecucion->bindParam(":$indice",$valor);
        }
        var_dump($sqlEjecucion);
        return $sqlEjecucion->execute();
    }
                                /*DELETE            DELETE*/
    
    /*ESTA FUNCIÓN recive:
     ----------------------------------------------------------------------------------------------------
     * DELETE FROM       
        TABLA               => Tablas SQL                 (string)                       [OBLIGATORIO]
     ----------------------------------------------------------------------------------------------------
     * CONDICIONALES       
        $arrayCondiciones   => Array con valores a Borrar (array(value1,value2...))      [OPCIONAL]
     ----------------------------------------------------------------------------------------------------
     */
    /*RETORNA TRUE O FALSE*/
    static function delete($tabla, $arrayCondiciones = array()){
        $cont = 0;
        $condicional = "";
        foreach ($arrayCondiciones as $indice => $valor){
            if($cont == 0){
                $condicional .= "WHERE $indice = :$indice";
            }
            else{
                $condicional .= " AND $indice = :$indice";
            }
            $cont++;
        }
        $sqlDelete = "DELETE FROM $tabla $condicional";
        $sqlEjecucion = self::$conexion->prepare($sqlDelete);
        foreach ($arrayCondiciones as $indice=> &$valor){
            $sqlEjecucion->bindParam(":$indice",$valor);
        }
        return $sqlEjecucion->execute();
    }
}
