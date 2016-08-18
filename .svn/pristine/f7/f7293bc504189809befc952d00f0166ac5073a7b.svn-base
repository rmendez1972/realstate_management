<?php
class Requisito extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'requisitos';
    protected $primaryKey = 'id_requisito';
    public $timestamps = false;
    public function tipopersonas(){
        return $this->belongsToMany('TipoPersona');
    }
}
?>