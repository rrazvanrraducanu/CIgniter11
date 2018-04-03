<?php
class FlowerModel extends CI_Model {
 
function getFlowers(){
  $this->db->select('id,nume,marime,culoare,pret');
  $this->db->from('flori');
  $query = $this->db->get();
  return $query->result();
}
function getFlower($id){
  $this->db->select('nume,culoare,marime,pret')->where('id',$id)->from('flori');
  $query = $this->db->get();
  return $query->result_array();
} 

}
