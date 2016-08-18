<?php
class Curso extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'cursos';
    protected $primaryKey = 'id_curso';
    public $timestamps = false;
    public function asesores(){
        return $this->belongsToMany('Asesor');
    }
}
?>