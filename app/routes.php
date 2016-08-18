<?php

Route::get('/', array('as'=>'index','uses'=>'HomeController@index'));

//agrupadas todas la rutas para usuarios guest
Route::group(array('before'=>'guest_user'),function(){
	Route::group(array('prefix' => '/login'), function(){
        Route::get('/', array('as'=>'login','uses'=>'HomeController@login'));
		Route::post('/nuevo', array('before'=>'csrf', function(){
		 				$user=array(
		 					'email'=>Input::get('email'),
		 					'password'=>Input::get('password'),
		 					'active'=>1,
		 				);
		 				$remember=Input::get('remember');
		 				$remember=='on'?$remember=true: $remember=false;
		 				//aqui se controla la autenticacion a traves de auth.php de laravel (libreríamultiauth)
		 				if(Auth::user()->attempt($user,$remember))
		 				{
		 					return Redirect::route('privado');
		 				}
		 				else
		 				{
		 					return Redirect::route('login');

		 				}
		}));
	});
});




//agrupadas todas las rutas para usuarios autenticados
Route::group(array('before'=>'auth_user'),function(){
    Route::get('/salir', array('as'=>'salir','uses'=>'HomeController@salir'));
	Route::get('/privado', array('as' => 'privado', 'uses' => 'HomeController@privado'));

    //ruta para registro de usuarios con password Hash
	Route::group(array('prefix' => '/usuarios'), function(){
    	Route::get('/', array('as'=>'usuarios', 'uses' => 'HomeController@mostrarUsuarios'));
    	Route::get('/nuevo', 'HomeController@register');
		Route::post('/nuevo', 'HomeController@register');
		Route::get('/editar/{id}', 'HomeController@editarUsuarios');
	    Route::post('/editar', 'HomeController@guardarUsuarios');
	    Route::get('/eliminar/{id}', 'HomeController@eliminarUsuarios');
	    Route::post('/eliminar/{id}', 'HomeController@eliminarUsuarios');
    });

    //ruta para edición del perfil de usuario con password Hash
	Route::group(array('prefix' => '/perfil'), function(){
    	Route::get('/editar/{id}', array('as'=>'/editar/{id}','uses'=>'PerfilController@editarPerfil'));
	    Route::post('/editar', 'PerfilController@guardarPerfil');

    });

    //ruta para generación de reportes en formato pdf
	Route::group(array('prefix' => '/reportes'), function(){
    	Route::get('/usuarios',array('as'=>'/reportes/usuarios', 'uses'=>'ReportesController@reporteUsuarios'));
    	Route::get('/municipios',array('as'=>'/reportes/municipios', 'uses'=>'ReportesController@reporteMunicipios'));
    	Route::get('/tipopersona',array('as'=>'/reportes/tipopersona', 'uses'=>'ReportesController@reporteTipopersona'));
    	Route::get('/requisitos',array('as'=>'/reportes/requisitos', 'uses'=>'ReportesController@reporteRequisitos'));
    	Route::get('/cursos',array('as'=>'/reportes/cursos', 'uses'=>'ReportesController@reporteCursos'));
        Route::get('/asesores',array('as'=>'reporteAsesores', 'uses'=>'ReportesController@reporteAsesores'));
        Route::get('/asesores_municipio',array('as'=>'/reportes/asesores_municipio', 'uses'=>'ReportesController@reporteAsesores_municipio'));
        Route::post('/asesores_municipio',array('as'=>'/reportes/asesores_municipio', 'uses'=>'ReportesController@reporteAsesores_municipio'));
        Route::get('/asesores_tipopersona',array('as'=>'/reportes/asesores_tipopersona', 'uses'=>'ReportesController@reporteAsesores_tipopersona'));
        Route::post('/asesores_tipopersona',array('as'=>'/reportes/asesores_tipopersona', 'uses'=>'ReportesController@reporteAsesores_tipopersona'));
        Route::get('/requisitos_tipopersona/{id}',array('as'=>'/reportes/requisitos_tipopersona/{id}', 'uses'=>'ReportesController@reporterequisitosTipopersona'));
        Route::get('/requisitos_asesor/{id}',array('as'=>'/reportes/requisitos_asesor/{id}', 'uses'=>'ReportesController@reporterequisitosAsesor'));
        Route::get('/cursos_asesor/{id}'   ,array('as'=>'/reportes/cursos_asesor/{id}'   , 'uses'=>'ReportesController@reportecursosAsesor'));
        Route::get('/matricula_asesor/{id}',array('as'=>'/reportes/matricula_asesor/{id}', 'uses'=>'ReportesController@reportematriculaAsesor'));
        Route::get('/matricula_asesor_subsecretaria/{id}',array('as'=>'/reportes/matricula_asesor_subsecretaria/{id}', 'uses'=>'ReportesController@reportematriculaAsesor_subsecretaria'));
        Route::get('/credencial_asesor/{id}',array('as'=>'/reportes/credencial_asesor/{id}', 'uses'=>'ReportesController@reportecredencialAsesor'));
        Route::get('/acuserecibo_asesor/{id}',array('as'=>'/reportes/acuserecibo_asesor/{id}', 'uses'=>'ReportesController@reporteacusereciboAsesor'));
        Route::get('/asesores_municipio_referencia',array('as'=>'/reportes/asesores_municipio_referencia', 'uses'=>'ReportesController@reporteAsesores_municipio_referencia'));
        Route::post('/asesores_municipio_referencia',array('as'=>'/reportes/asesores_municipio_referencia', 'uses'=>'ReportesController@reporteAsesores_municipio_referencia'));
        Route::get('/asesores_referencia',array('as'=>'/reportes/asesores_referencia', 'uses'=>'ReportesController@reporteAsesores_referencia'));
        Route::get('/asesores_municipio_tipopersona',array('as'=>'/reportes/asesores_municipio_tipopersona', 'uses'=>'ReportesController@reporteAsesores_municipio_tipopersona'));
        Route::post('/asesores_municipio_tipopersona',array('as'=>'/reportes/asesores_municipio_tipopersona', 'uses'=>'ReportesController@reporteAsesores_municipio_tipopersona'));

    });

	//ruta para registro de tipos de personas
	Route::group(array('prefix' => '/tipo_persona'), function(){
    	Route::get('/', array('as'=>'tipo_persona', 'uses' => 'TipopersonaController@mostrarTipopersona'));
    	Route::get('/nuevo', 'TipopersonaController@nuevo');
		Route::post('/nuevo', 'TipopersonaController@nuevo');
		Route::get('/editar/{id}', 'TipopersonaController@editarTipopersona');
	    Route::post('/editar', 'TipopersonaController@guardarTipopersona');
	    Route::get('/eliminar/{id}', 'TipopersonaController@eliminarTipopersona');
	    Route::post('/eliminar/{id}', 'TipopersonaController@eliminarTipopersona');
	    Route::get('/listarrequisitos/{id}','TipopersonaController@listarrequisitosTipopersona');
	    Route::post('/listarrequisitos/{id}','TipopersonaController@listarrequisitosTipopersona');
	    Route::post('/nuevorequisito/{id}', 'TipopersonaController@nuevorequisitoTipopersona');
	    Route::get('/nuevorequisito/{id}', 'TipopersonaController@nuevorequisitoTipopersona');
	    Route::get('/eliminarrequisito/{id}/{id_tipo_persona}', 'TipopersonaController@eliminarrequisitoTipopersona');
	    Route::post('/eliminarrequisito/{id}/{id_tipo_persona}', 'TipopersonaController@eliminarrequisitoTipopersona');
    });

	//ruta para registro de cursos
	Route::group(array('prefix' => '/cursos'), function(){
    	Route::get('/', array('as'=>'cursos', 'uses' => 'CursoController@mostrarCurso'));
    	Route::get('/nuevo', 'CursoController@nuevo');
		Route::post('/nuevo', 'CursoController@nuevo');
		Route::get('/editar/{id}', 'CursoController@editarCurso');
	    Route::post('/editar', 'CursoController@guardarCurso');
	    Route::get('/eliminar/{id}', 'CursoController@eliminarCurso');
	    Route::post('/eliminar/{id}', 'CursoController@eliminarCurso');
	});



    //Municipios
	Route::group(array('prefix' => '/municipios'), function(){
	    Route::get('/', array('as'=>'municipios', 'uses' => 'MunicipiosController@mostrarMunicipios'));
	    Route::get('/nuevo', 'MunicipiosController@nuevoMunicipio');
	    Route::post('/nuevo', 'MunicipiosController@crearMunicipio');
	    Route::get('/editar/{id}', 'MunicipiosController@editarMunicipio');
	    Route::post('/editar', 'MunicipiosController@guardarMunicipio');
	    Route::get('/eliminar/{id}', 'MunicipiosController@eliminarMunicipio');
	    Route::post('/eliminar/{id}', 'MunicipiosController@eliminarMunicipio');

	});

	//Requisitos
	Route::group(array('prefix' => '/requisitos'), function(){
	    Route::get('/', array('as'=>'requisitos', 'uses' => 'RequisitosController@mostrarRequisitos'));
	    Route::get('/nuevo', 'RequisitosController@nuevoRequisito');
	    Route::post('/nuevo', 'RequisitosController@nuevoRequisito');
	    Route::get('/editar/{id}', 'RequisitosController@editarRequisito');
	    Route::post('/editar', 'RequisitosController@guardarRequisito');
	    Route::get('/eliminar/{id}', 'RequisitosController@eliminarRequisito');
	    Route::post('/eliminar/{id}', 'RequisitosController@eliminarRequisito');
		Route::get('/tipopersona/{id}', 'RequisitosController@porTipoPersona');

	});

    //Asesores
	Route::group(array('prefix' => '/asesores'), function(){
	    Route::get('/',  array('as'=>'asesores', 'uses'=>'AsesoresController@mostrarAsesores'));

        Route::get('/nuevo', 'AsesoresController@nuevo');
	    Route::post('/nuevo', 'AsesoresController@guardarNuevo');

        Route::get('/editar/{id}', 'AsesoresController@editar');
        Route::post('/editar', 'AsesoresController@guardarEditar');

        Route::get('/eliminar/{id}', 'AsesoresController@eliminar');
        Route::post('/eliminar', 'AsesoresController@eliminarAsesor');

        Route::get('/listarcursos/{id}', 'AsesoresController@listarCursos');
        Route::post('/listarcursos/{id}', 'AsesoresController@listarCursos');

        Route::post('/nuevocurso/{id}', 'AsesoresController@nuevocursoAsesor');
	    Route::get('/nuevocurso/{id}', 'AsesoresController@nuevocursoAsesor');

	    Route::get('/eliminarcurso/{id_curso}/{id}', 'AsesoresController@eliminarcurso');
	    Route::post('/eliminarcurso/{id_curso}/{id}', 'AsesoresController@eliminarcurso');
	});
});


Route::any('/', array('as'=>'index','uses'=>'HomeController@index'));


/*redireccionamiento error 404 de forma personalizada*/
App::missing(function($exception)
{
	return Response::view('error.error404',array(),404);
});

?>
