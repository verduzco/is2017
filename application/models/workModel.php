<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workmodel extends CI_Model {

/**
* Invocar al constructor de la superclase CI_Model
*  Me permite cargar la BD
*/
public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

/**
*    Método para insertar clave, nombre, sueldo en la tabla trabajadores
*/

public function insertWork($tclave,$tnombre, $tsueldo)
{
   $this->db->set('clave',$tclave)
            ->set('nombre',$tnombre)
            ->set('sueldo',$tsueldo)

        ->insert('workers');  
       
} 



/**
*Método para consultar un trabajador
*/
public function consultaWorker($tclave)
{
  
 //Variable       
 $query = $this->db->get_where('workers',array('clave' => $tclave));
 if($query->num_rows() > 0 )
 {
   return $query->row();
 }
    
}


/**
* Recuperar los trabajadores de la tabla workers
*    select * from workers
*/
function getListaWorkers()
 {
      // carga la bd. Crea la conexión
      $this->load->database();
      // select * fromo workers
      $listaTrab = $this->db->get('workers');
      // regresa la lista de trabajadores 
      return $listaTrab->result();
    }

/**
* Método para modificar un registro
*/

public function modifyWork($tclave,$tnombre, $tsueldo)
 {
   $nuevoreg = array(
   'clave' => $tclave,
   'nombre' => $tnombre,
   'sueldo' => $tsueldo);

   $this->db->where('clave', $tclave);
   $this->db->update('workers', $nuevoreg);
}

/**
* Método para borrar un registro
*/

public function delWorker($tclave)
{
    $this->load->database();
   $this->db->where('clave', $tclave);
   $this->db->delete('workers');
 
}

}