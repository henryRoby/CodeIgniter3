<?php   
class StudentModel extends CI_Model{

    public function student_data(){
        $stud_class = $this->student_class();
        return  $stud_name = "Roby. His class is  ".$stud_class;
    }

    private function student_class(){
        return $stud_class = "BCA";
    }

    public function student_show($id)
    {
        if ($id =="1") {
            return $resultat ="User 1";
        }elseif($id =="2"){
            return $resultat ="User 2";
        }
    }



    public function demo(){
        return $title = 'Hello i am test titre. I am inside student model';
    }
}
?>