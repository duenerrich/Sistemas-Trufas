<?php

    class tbtrufas_model extends CI_model
    {
        public function get_all ()
        {
            $query = $this->db->get('tbtrufas');
            return $query->result(); // Aqui retorna o array todo
        }

        public function get($id)
        {
            $this->db->where('id', $id);
            $query = $this->db->get('tbtrufas');
            return $query->first_row();
        }

        public function insert(){
            $data = array (
              'sabor' => $this->input->post('sabor'),
              'quantidade' => $this->input->post('quantidade'),
              'preco' => $this->input->post('preco')
            );

          $this->db->insert('tbtrufas', $data);
        }


    public function edit($id){
      $this->db->where('id', $id);
      $query = $this->db->get('tbtrufas');
      return $query->first_row();
    }

    public function update ($id){
      $update = array (
        'sabor' => $this->input->post('sabor'),
        'quantidade' => $this->input->post('quantidade'),
        'preco' => $this->input->post('preco')
      );

      $this->db->where('id',$id);
      $this->db->update('tbtrufas',$update);
    }

    public function excluir($id){
      $this->db->where('id', $id);
      $this->db->delete('tbtrufas');
    }

    public function search ($id = null, $nome = null){
      if (isset($id)){
        $this->db->where('id', $id);
        $query = $this->db->get('tbtrufas');
        return $query->first_row();
      } elseif (isset($nome)) {
      $this->db->like('sabor', $nome, 'both');
      $query = $this->db->get('tbtrufas');
      return $query->first_row();
      }
    }

}
?>
