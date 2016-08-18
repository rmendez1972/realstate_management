<?php
class Municipio extends Eloquent { //Todos los modelos deben extender la clase Eloquent
    protected $table = 'cat_municipios';
    protected $primaryKey = 'cve_municipio';
    public $timestamps = false;
    public function asesores(){
    	return $this->hasMany('Asesor', 'cve_municipio','cve_municipio')->orderBy('rfc');
    }
}
?>