<?php
class Clientes extends CI_Controller
{

      function __construct()
      {
          // Herdo do pai para aqui
          parent::__construct();
          $this->load->model('clientes_model', 'model_clientes');//o segundo parametro eu defino como apelido
      }


   public function index (){
     $array['clientes'] = $this->model_clientes->get_all();
     $this->load->view('templates/header');
      $this->load->view('clientes/principal', $array);
      $this->load->view('templates/footer');

   }

public function cadastrar (){
  $this->load->view('templates/header');
  $this->load->view('clientes/cadastrar');
  $this->load->view('templates/footer.php');
}

public function salvar (){
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="start">','</div>');
    $this->form_validation->set_rules('nome','Nome', 'required|min_length[3]');
    $this->form_validation->set_rules('telefone', 'Telefone' );
    $this->form_validation->set_rules('endereco', 'Endereço');

    $array = array (
      'nome' => $this->input->post('nome'),
      'telefone' => $this->input->post('telefone') ,
      'endereco' => $this->input->post('endereco')
    );
      if ($this->form_validation->run()) {
                $this->model_clientes->insert($array);
                redirect('clientes');
      } else {
        redirect('clientes/cadastrar');
      }
}

      public function editar ($id = null){
        $this->load->view('templates/header');
        $this->load->view('clientes/editar', array ( 'cliente' => $this->model_clientes->edit($id)));
        $this->load->view('templates/footer');
      }

      public function update ($id = null){
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="start">','</div>');

        $this->form_validation->set_rules('nome','Nome', 'required|min_length[3]');
        $this->form_validation->set_rules('telefone', 'Telefone');
        $this->form_validation->set_rules('endereco', 'Endereço');

        $id = $this->input->post('id');


        if (!$this->form_validation->run()) {
        $this->editar($this->input->post('id'));
        } else {
          $array = array (
            'id' => $id,
            'nome' => $this->input->post('nome'),
            'telefone' => $this->input->post('telefone') ,
            'endereco' => $this->input->post('endereco')
          );
          $this->model_clientes->update($array);
          $this->index();
        }

      }

public function exists ($id = null){
  print_r($this->model_clientes->get($id)) ;
}

public function search (){
$nome = $this->input->post('nome');
  if ($this->model_clientes->search($nome)){
    $this->load->view('templates/header');
    $this->load->view('clientes/pesquisa', array ('cliente' => $this->model_clientes->search($nome)));
    $this->load->view('templates/header');
  }

}

  public function excluir ($id = null){
      $this->model_clientes->delete($id);
      redirect('clientes');
  }
}
?>
