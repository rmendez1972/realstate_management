<?php
class Asesor extends Eloquent{
    protected $table = 'asesores';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function municipio(){
        return $this->belongsTo('Municipio', 'cve_municipio', 'cve_municipio');
    }

    public function tipoPersona(){
        return $this->belongsTo('TipoPersona', 'id_tipo_persona', 'id_tipo_persona');
    }

    public function requisitos(){
        return $this->belongsToMany('Requisito', 'requisito_asesor', 'id_asesor', 'id_requisito');
    }

    public function cursos(){
        return $this->belongsToMany('Curso');
    }
}
?>
