
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <style>
    @import url(//fonts.googleapis.com/css?family=Lato:700);

      body {
        margin:-50px 10px 10px -45px;
        font-family: helvetica, sans-serif;
        font-size: 12px;
        height: 1000px;
      }


      #frente{ position: absolute;
        margin-top:5px;
        width: 213px;height: 340px;
        /*background-image: url('assets/imagenes/Credenciales-Asesores-Inmobiliarios-SEDETUSFRENTE.png');*/
        background-image: url('assets/imagenes/CREDENCIAL_ASESORES_01102018_frente.png');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        text-align: center;
        /*background-position:  25 200;*/

      }

     #reverso {
        width: 213px;height: 340px;

        /*background-image: url('/asesores_inmobiliarios/assets/imagenes/Credenciales-Asesores-Inmobiliarios-SEDETUS.png');*/
        background-image: url('assets/imagenes/CREDENCIAL_ASESORES_01102018_reverso.png');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position:  0 0;
        text-align: center;
      }

      #foto {
        /*border-color: black;
        border-style: solid;
             
        margin-left:70px;*/
       
        margin:55 auto;
        /*background-image: url('assets/imagenes/avatars/foto_perfil1.jpg');*/
        background-position: 0% 0%;
        background-size: 10 10;
        background-repeat: no-repeat;
        width: 80px;height: 100px;
        /*position: absolute;left: 200px;top:200px*/
      }

      .texto1 {
        margin-top: 5px;
        font-size: 9px;
        /*font-weight: bolder;
        color: #534534;
        font-family:'arial';*/
      }

      .texto2 {
        font-size: 9px;
        font-weight: bolder;
         /*color: #534534;     ##534534 cafe 666666 tono de gris*/
        margin-right: 5px;
        margin-left: 5px;
      }

      .texto3 {
        font-size: 7px;
        margin-right: 5px;
        margin-left: 5px;
        color: #534534;
      }

    </style>

  </head>

  <body>


    <div id="frente" style="padding-left:-1px;">
    <!--<img src='../public/assets/imagenes/CredencialFrente.png'>-->
      <div id="foto" style="margin-bottom: -50px">@yield('foto')</div>    
      <div class="texto1" >@yield('nombre_razon')</div>
      <div class="texto2">@yield('tipo_persona')<br><br><br></div>
      <div style="font-size:12px;">
        MATRICULA:<br> @yield('matricula')<br><br>
      </div>
      </small>

    </div>

    <div id="reverso">
      <div style="margin-top:10px; padding-right:5px;padding-left:0px;">
        <small>
          <div style=   "text-align:left;padding:10px">
            <table width="100%">
              <tr>
                <td width="80%">
                  RFC: @yield('rfc')
                </td>
                <td>
                  @yield('qr_code')
                </td>
              </tr>
            </table>
            <strong >DOMICILIO:</strong>
            <div class="texto1" style="text-align:justify;font-size:8px;color:black;">
              @yield('domicilio')
            </div>

            <div style="font-size:9px;text-align:justify;">
              <br>@yield('fecha_expedicion')
            </div>
            <div style="width:300px;height:110px;position:fixed; bottom:0;font-size:7px;left:-35">

              <table border="0px"; style="text-align:center;font-size:10px;margin-left:10px;margin-top:15px;">
                 <tr >
                   <td style="padding-left:0px;width:182px"><strong>Arq. Carlos Ríos Castellanos<br><small>
                    SECRETARIO DE LA SEDETUS</strong></small>
                    </td>
                 </tr>
              </table>

              <table border="0px"; style="text-align:center;font-size:9px;margin-left:10px;color:#534534;margin-top:15px;">
                 <tr>
                 <td style="padding-left:-5px;width:182px; font-size:10px;color:black;padding-top:0px;">
                   <b>Vencimiento: @yield('vigencia')</b> 
                 </td>
                 </tr>
              </table>
      

              <table border="0px" style="text-align:left; font-size:9px; padding-top:0px;padding-left:10px;margin-top:0px;">
                <tr>
                  <td style="width:135px;">
                    Secretaría de Desarrollo Territorial<br> Urbano Sustentable<br>
                    Álvaro Obregón #474. Col. Centro. C.P.77000<br>
                     Chetumal, Quintana Roo. México<br>
                    Tel.(983)83-5-17-00<br>
                    http://qroo.gob.mx/sedetus<br>
                  </td>
                </tr>
              </table>


          </div>
        </small>
      </div>
    </div>
  </body>
</html>