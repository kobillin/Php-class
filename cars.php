<?php


class cars
{
    //Properties
    public  $model;
    public  $color;
    public $registration;

    //methods
    //1--model
    function set_models($model){
        $this->model =$model;
    }
    function get_models(){
        return $this->model;
    }
    //2--color
    function set_colors($color){
        $this->color =$this->color;
    }
    function get_colors(){
        return $this->color;
    }
    //3--registration
    function set_registrations($registration){
        $this->registration =$registration;
    }
    function get_registrations(){
        return $this->registration;
    }



}
$mercedes = new cars();
$toyota = new cars();
$mercedes->set_models('This is my first car');
$toyota->set_models('This is my second car');

echo $mercedes->get_models();
echo "<br>";
echo $toyota->get_models();
    ?>