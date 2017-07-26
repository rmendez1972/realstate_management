
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
        width: 213px;height: 338px;
        background-image: url('assets/imagenes/Credenciales-Asesores-Inmobiliarios-SEDETUSFRENTE.png');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        text-align: center;
        /*background-position:  25 200;*/

      }

     #reverso {
        width: 213px;height: 346px;

        background-image: url('assets/imagenes/Credenciales-Asesores-Inmobiliarios-SEDETUS.png');

        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;

        text-align: center;


      }

      #foto {
        border-color: black;
        /*border-style: solid;margin-top:50px;*/
        margin-top:55px;
        /*margin-left:70px;*/
        padding-top: 55px;
        margin:auto;
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
        font-weight: bolder;
        color: #534534;
        font-family:'Rounded';
      }

      .texto2 {
        font-size: 9px;
        font-weight: bolder;
        color: #534534; /*     ##534534 cafe 666666 tono de gris*/
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
      <div id="foto" >@yield('foto')</div>
      <div class="texto1">@yield('nombre_razon')</div>
      <div class="texto2">@yield('tipo_persona')<br><br></div>
      <div class="texto3">
        @yield('afiliado')<br><br><br>
        __________________________<br>Firma<br><br>
      </div>

      <div style="font-size:12px; color:#534534">
        MATRICULA:<br> @yield('matricula')<br><br>

      </div>
      </small>

    </div>

    <div id="reverso">
      <div style="margin-top:10px; padding-right:5px;padding-left:0px;">
        <small>
          <div style=   "text-align:left;padding:10px">
            RFC: @yield('rfc')<br><br>
            <strong >DOMICILIO:</strong>
            <div class="texto1" style="text-align:justify;font-size:8px;color:black;">
              @yield('domicilio')
            </div>

            <div style="font-size:9px;text-align:justify;">
              <br>@yield('fecha_expedicion')
            </div>
            <div style="width:300px;height:110px;position:fixed; bottom:0;font-size:7px;left:-35">

              <table border="0px"; style="text-align:center;font-size:9px;margin-left:30px;color:#534534;margin-top:40px;">
                 <tr><td><strong>Arq. Carlos Ríos Castellanos<br><small>
                    SECRETARIO DE LA SEDETUS</strong></small></td>
                 </tr>
                 <br><br>
              </table>

              <table border="0px"; style="text-align:right; padding-top:-25px;padding-left:10px;margin-top:0px;">
                <tr>
                  <td>@yield('qr_code')</td>
                  <td style="width:135px;">
                    Secretaría de Desarrollo Territorial<br> Urbano Sustentable<br>
                    Álvaro Obregón #474. Col. Centro. C.P.77000<br>
                     Chetumal, QuintanaRoo. México<br>
                    Tel.(983)83-5-17-00<br>
                    http://seduvi.qroo.gob.mx<br>
                  </td>
                </tr>
              </table>

              <table border="0px"; style="text-align:right;font-size:11px;color:black;padding-top:-2px;padding-left:4px;">
                <tr>
                  <td><b>Vencimiento:</b>@yield('vigencia')</td>
                </tr>
              </table>
          </div>
        </small>
      </div>
    </div>
  </body>
</html>