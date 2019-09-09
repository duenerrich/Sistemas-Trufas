<?php

class clientes_model extends CI_Model {

public function get($id){
  // Voce primeiro faz um filtro no banco para saber quais dados possuem o mesmo id
  $query = $this->db->where('id', $id);
  // Logo depois voce traz todos esses itens em um array
if ($query->get('clientes')){ // Caso o array estava com alguma informação ele retorna esse array
    return $query->first_row();
} else {
  echo "Id nao encontrado";
}
  }

public function get_all ()
{
  $query = $this->db->get('clientes');
  return $query->result();
  }

  public function insert ($array = array())
  {
        $this->db->insert('clientes', $array);
  }

  public function delete ($id){
    $this->db->where('id',$id);
    $this->db->delete('clientes');
    echo "Excluido com sucesso";
  }

  public function update ($array = array()){
    $this->db->where('id', $array['id']);
    $this->db->update('clientes', $array);
  }

  public function edit ($id = null){
      $this->db->where('id', $id);
      $query = $this->db->get('clientes');
      return $query->first_row();
  }

  public function search ($nome = null){
    $this->db->like('nome', $nome, 'both');
    $query = $this->db->get('clientes');
    return $query->first_row();
  }
}

?>
