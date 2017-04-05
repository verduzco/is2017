<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_controller extends CI_Controller {

	/**
	*Este método se ejecuta por default
	*/
	public function index()
	{
		$this->load->view('menuprincipal_view');
        
	}

    /**
    * Método para insertar regsitros
    */

    public function insertar(){
        $this->load->view('capturaPersonal_view');
    }


    /**
    * Método para enviar datos a una vista
    */
    public function miMetodo(){
    // Declaramos un array para almacenar datos
    $datos['clave']="1";
    $datos['nombre']="Leonel Messi";
    $datos['sueldo']="234556.12";

    //Enviar datos a la vista
  	$this->load->view('misDatos_view', $datos);
    
    }

     /**
    * Funcion para recibir datos de los trabajadores
    */
    public function recibirDatosPersonal()
    {
     // Recuperamos los datos enviados por la vista
    $clave = $this->input->post('code');
    $nombre = $this->input->post('name');
    $sueldo= $this->input->post('salary');

    // Cargar modelo
    $this->load->model('workmodel');

    // Invocamos al modelo 
    $this->workmodel->insertWork($clave,$nombre, $sueldo);

  }

 /**
 *  Función para modificar trabjador
 * 
 */
 public function  cargarVistaCambiar(){
    $this->load->view('cambiarTrabajador_view');
 }

  /**
    * Funcion para recibir datos de los trabajadores a modificar
    */
    public function recibirDatosCambiar()
    {
     // Recuperamos los datos enviados por la vista
    $clave = $this->input->post('code');
    $nombre = $this->input->post('name');
    $sueldo= $this->input->post('salary');

    // Cargar modelo
    $this->load->model('workmodel');

    // Invocamos al modelo 
    $this->workmodel->modifyWork($clave,$nombre, $sueldo);

  }





 /**
 *  Función para borrar trabjador
 * 
 */
 public function cargarVistaBorrar(){
    $this->load->view('borrarTrabajador_view');
 }

/**
    * Funcion para consultar trabajadores por clave
    */
  public function borrarWorker()
  {
     // Recuperamos los datos enviados por la vista mediante post
     $clave = $this->input->post('code');
      // Cargamos el modelo
     $this->load->model('workmodel');
     //Invocamos funcion en el modelo para buscar trabajador
     $this->workmodel->delWorker($clave);
        
  }



 /**
    * Funcion para consultar trabajadores por clave
    */
  public function cargaVistaConsulta()
  {
    $this->load->view('consultaTrabajador_view');
 }
    

 /**
    * Funcion para recibir datos de los trabajadores
    */
    public function recibirDatosConsulta()
    {
     // Recuperamos los datos enviados por la vista
    $clave = $this->input->post('code');
    $nombre = $this->input->post('name');
    $sueldo= $this->input->post('salary');

    // Cargar modelo
    $this->load->model('workmodel');

    // Invocamos al modelo 
    $this->workmodel->modifyWork($clave,$nombre, $sueldo);

  }

   /**
    * Funcion para consultar trabajadores por clave
    */
  public function consultaWorker()
  {
     // Recuperamos los datos enviados por la vista mediante post
     $clave = $this->input->post('code');
      // Cargamos el modelo
     $this->load->model('workmodel');
     //Invocamos funcion en el modelo para buscar trabajador
     $trab = $this->workmodel->consultaWorker($clave);
     //Convertirlo a array
     $datos['clave']= $trab->clave;
     $datos['nombre']= $trab->nombre;
     $datos['sueldo']= $trab->sueldo;
     //Invocamos vista para enviarle los datos
     $this->load->view('consultaRes_view', $datos);
    
  }
  
public function agregar_Trabajador()
  {
     //$this->load->view('menuprincipal_view_head');
     $this->load->view('capturaPersonal_view');
    
  }
  public function reporteTrabajadores()
  {
    // Se carga el modelo alumno
    $this->load->model('workmodel');
    // Se carga la libreria fpdf
    $this->load->library('pdf');
 
    // Se obtienen los alumnos de la base de datos
    $trabajadores = $this->workmodel->getListaWorkers();
 
    // Creacion del PDF
 
    /*
     * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
     * heredó todos las variables y métodos de fpdf
     */
    $this->pdf = new Pdf();
    // Agregamos una página
    $this->pdf->AddPage();
    // Define el alias para el número de página que se imprimirá en el pie
    $this->pdf->AliasNbPages();
 
    /* Se define el titulo, márgenes izquierdo, derecho y
     * el color de relleno predeterminado
     */
    $this->pdf->SetTitle("Lista de Trabajadores");
    $this->pdf->SetLeftMargin(15);
    $this->pdf->SetRightMargin(15);
    $this->pdf->SetFillColor(200,200,200);
 
    // Se define el formato de fuente: Arial, negritas, tamaño 9
    $this->pdf->SetFont('Arial', 'B', 9);
    /*
     * TITULOS DE COLUMNAS
     *
     * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
     */
 
    $this->pdf->Cell(15,7,'CLAVE','TBL',0,'C','1');
    $this->pdf->Cell(60,7,'NOMBRE','TB',0,'C','1');
    $this->pdf->Cell(40,7,'SUELDO','TBR',0,'C','1');
        
    $this->pdf->Ln(7);
    // La variable $x se utiliza para mostrar un número consecutivo
    $x = 1;
    foreach ($trabajadores as $trabajador) {
      // se imprime el numero actual y despues se incrementa el valor de $x en uno
      //$this->pdf->Cell(15,5,$x++,'BL',0,'C',0);
      // Se imprimen los datos de cada alumno
      $this->pdf->Cell(15,5,$trabajador->clave,'B',0,'C',0);
      $this->pdf->Cell(60,5,$trabajador->nombre,'B',0,'C',0);
      $this->pdf->Cell(40,5,$trabajador->sueldo,'B',0,'R',0);
      
      //Se agrega un salto de linea
      $this->pdf->Ln(5);
    }
    /*
     * Se manda el pdf al navegador
     *
     * $this->pdf->Output(nombredelarchivo, destino);
     *
     * I = Muestra el pdf en el navegador
     * D = Envia el pdf para descarga
     *
     */
    $this->pdf->Output("ListadeTrab.pdf", 'I');
  }




  }


