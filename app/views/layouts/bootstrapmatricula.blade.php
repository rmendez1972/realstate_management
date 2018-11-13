<!DOCTYPE html>
<!-- Layout principal para la generación del documento
  que se expide como acreditación a los asesores inmobiliarios.
-->
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <style>
      @import url(//fonts.googleapis.com/css?family=Lato:700);
      body {
        margin:105px 00px -10px -10px;
        font-family:'Lato', sans-serif;
        font-size: 16px;
      }
      .container{
        padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;
        font-size:14px;
      }
      .referencia{text-align:left;width:45%;font-size:12px;float: right;
        border-color: red;
        border-style: double;
        padding: 5px;
        margin-right: 35px;
      }
      .cabecera {
        
        /*background-image: url("assets/imagenes/logosmatriculaborrar.png");*/
       background-image: url("assets/imagenes/Logos_encabezado_matricula.png");
        logo_encabezado_matricula
          left: 25px;
          height: 82px;
          width: 777px;/*680*/
          background-repeat: no-repeat;  margin: 0 auto;position:fixed;width: 100%;
          /*background-size: cover; */
          border-bottom-style: solid;
          border-bottom-width: 4px;
          border-bottom-color: #ffffffff;
          margin-left:-25px;
          margin-right:-25px;

      }
      .pie {
        /*letrascintilla.jpg*/
        background-image: url("assets/imagenes/banda_pie_de_pagina_matricula.png");
        background-position:  0 500;
        background-repeat:no-repeat;
        height: 870px;
        width: 750px; margin:0 auto;
        margin-bottom: -50px;
        margin-left:-20px;
        margin-right:-50px;
        /*border-bottom-style: solid;
        border-bottom-color: #ffffffff;*/
        padding-left:10px;
        
      }
     .pie .page:after {content: "Página " counter(page); }
     .pie .page{text-align: center;color:#000;width: 100%;position:relative;top:50px;
     }
      .tituloreporte{ font-size: 16px;
        background-color: #ddd;
        text-align: center;margin-right: -20px;
        border:1px solid; margin-top:90px;
        border-radius: 20px;
        -moz-border-radius: 20px;
        -webkit-border-radius: 20px;
      }
      .aplicacion{position: absolute;
        width:400px;
        margin-left: 41%;

      }

      #caja{ position: absolute;
        left: 0;
        top: 0;
        height: 78px;
        width: 100%;
      }
      #caja img { width: 950px;height: 78%; }
      .texto {color: #f00;font-size: 30px;position: relative;}


    </style>

  </head>


  <body>
  <!--<img src='assets/imagenes/logos.jpg'></img>-->
    <div class="cabecera"></div>

    <div class="pie">
      <div class="referencia" style="text_align:left">
        <strong>REFERENCIA:</strong>
        SEDETUS/SSV/DPPV/@yield('num_ref')<br>
        <strong>MATRICULA:</strong>
        @yield('matricula_referencia')

      </div>

      <div style="width:680px;margin: auto">
        <br><br><p style="text-align:right">  @yield('fechaactual').</p>
        <br><strong>@yield('solicitante')<br>
          CIUDAD @yield('localidad')<br>MUNICIPIO @yield('municipio')</strong>
          <!--</div>-->
        <br><br>
        <div style="text-align:justify;font-size:18px">
          Con fundamento en lo establecido en los artículos 1, 4, 5, 6, 7, 8, 9, 10 y 11 de la Ley de Prestación de Servicios Inmobiliarios y a lo señalado en los artículos 2, 3, 6, 10, 11 y demás relativos del Reglamento de la Ley de Prestación de Servicios Inmobiliarios, ambos del Estado de Quintana Roo, relacionados con la solicitud que hiciera ante esta Autoridad para el otorgamiento de la Matrícula y la Acreditación respectiva para la prestación de servicios inmobiliarios en esta entidad, me permito informarle:<br><br>
          Derivado del análisis y validación efectuada a la documentación diversa que como anexos forman parte integrante de la solicitud que nos ocupa y toda vez que se ha determinado por quien suscribe que se han cumplido los requisitos y condiciones que marca la normatividad ya invocada, la Secretaría de Desarrollo Territorial Urbano Sustentable tiene a bien otorgarle la matrícula con número de folio: @yield('matricula') y la Acreditación respectiva para la prestación de servicios inmobiliarios en su calidad de @yield('nombre_tipopersona'), única y exclusivamente durante la vigencia del presente documento.<br> <br>
          @yield('fecha_expedicion').
        </div>

        <br><br><br>
        <div style="text-align:center;font-size:18px">
          <u><strong>    Arq. Carlos Ríos Castellanos    </strong><br></u>
            <span style="font-size:10px;">SECRETARIO DE DESARROLLO TERRITORIAL URBANO SUSTENTABLE<span>
        </div>
        <!--<small><small><br></small></small>-->
        <div style="text-align:justify;font-size:10px;margin-top:48px;margin-right:8px;">
          <strong><em>La vigencia de esta Matrícula y la Acreditación respectiva, es de un año contado a partir de la fecha de su expedición, debiendo renovarse en los plazos y terminos señalado en la Ley de Prestación y Servicios Inombiliarios en el Estado de Quintana Roo y su Reglamento.
          </em></strong><br>

        </div>

    </div>
  </div>
    <!--<div class="pie"></div>-->
  </body>

</html>