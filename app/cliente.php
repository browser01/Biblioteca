<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
	protected $fillable=[
		      'nombre',
            'apellido',
            'docfiscal',
            'email',
            'direccion1',
            'direccion2',
            'telefono',
            'celular',
            'foto',
            'descuento',
            'limite',
            'id_precio',
            'situacion',
            'residente'
        ];

   public function isResident()
   {
   	return $this->residente == 1;
   }

    
}
