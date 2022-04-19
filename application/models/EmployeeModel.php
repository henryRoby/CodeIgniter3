<?php  
class EmployeeModel extends CI_Model{
     public function insertEmployee($data)   
    {
        return $this->db->insert('employee',$data);
    }

    // methode get all employee
    public function getEmployee()
    {
        //data is retrive from this query  
        $query = $this->db->get('employee');
        return $query->result();

        //data is retrive from this query  
        // $query = $this->db->get('employee');  
        // return $query;
    }

    public function editEmployee($id)
    {
        $query = $this->db->get_where('employee',['id'=>$id]);
        return $query->row();
    }

    public function updateEmployee($data,$id)
    {
        return $this->db->update('employee',$data,['id'=>$id]);
        
    }

    public function deleteEmployee($id)
    {
       return $this->db->delete('employee',['id'=>$id]);
    }
} 

?>