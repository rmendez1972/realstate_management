<?php
class TipoPersona extends Eloquent{
    protected $table = 'cat_tipo_personas';
    protected $primaryKey = 'id_tipo_persona';
    public $timestamps = false;
    public function asesores(){
    	return $this->hasMany('Asesor', 'id_tipo_persona','id_tipo_persona')->orderBy('rfc');
    }

	public function requisitos(){
        return $this->belongsToMany('Requisito');
    }

}
?>