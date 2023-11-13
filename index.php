<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>

<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="/home">Home</a></li>
                    <li><a href="javascript:void(0)" aria-hidden="true" data-toggle="tooltip" title="" class="btn btn-success btn-sm crearIncidencias" id="crearIncidencias" data-original-title="Nueva Incidencia">
                        Nueva Incidencia
                        </a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">

                    <!-- se quito data-backdrop="static" a este modal -->
                    <div class="modal fade" id="modalIncidentes" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">

                                <div class="modal-header" style="font-size: 20px !important;">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <b id="tituloFormularioIncidentes"></b>
                                </div>

                                <div class="modal-body">

                                    <form id="FormularioIncidentes" name="FormularioIncidentes" enctype="multipart/form-data" method="POST">

                                        <div class="panel with-nav-tabs panel-default">
                                            <div class="panel-heading">
                                                <h1>Heading</h1>
                                            </div>
                                            <div class="panel-body">
                                                <div class="tab-pane" id="tab1defaultIncidentes">
                                                    <fieldset>
                                                        <div class="col-md-4">
                                                            <label for="tipo">PERSONAL QUE NOTIFICA</label> <br>
                                                            <input type="radio" checked="" class="regular-radio" name="personal_notifica" id="personal_notifica1" value="MEDICO">
                                                            <a href="javascript:void(0)" id="click_personal_notifica_medico" name="click_personal_notifica_medico" style="color: #333333;">MÉDICO</a>
                                                            <input type="radio" class="regular-radio" name="personal_notifica" id="personal_notifica2" value="NO MEDICO" style="margin-left: 10px;">
                                                            <a href="javascript:void(0)" id="click_personal_notifica_no_medico" name="click_personal_notifica_no_medico" style="color: #333333;">NO MÉDICO</a>
                                                            <input type="radio" class="regular-radio" name="personal_notifica" id="personal_notifica3" value="ESTUDIANTE" style="margin-left: 10px;">
                                                            <a href="javascript:void(0)" id="click_personal_notifica_estudiante" name="click_personal_notifica_estudiante" style="color: #333333;">ESTUDIANTE</a>
                                                        </div>
                                                        <div class="col-md-8" id="personal_que_notifica" name="personal_que_notifica">
                                                            <label for="tipo">DESCRIPCIÓN</label>
                                                            <input value="" type="text" name="descripcion" class="form-control" style="height: 28px !important;" />
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <hr>
                                                        <div class="col-md-2">
                                                            <label for="tipo" style="visibility: hidden;">TIPO</label> <br>
                                                            <input type="radio" checked="" class="regular-radio" name="tipo_incidente" id="tipo_incidente1" value="INCIDENTE">

                                                            <a href="javascript:void(0)" id="click_personal_notifica_incidente" name="click_personal_notifica_incidente" style="color: #333333;">INCIDENTE</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="col-md-6">
                                                                <div class="col-md-12">
                                                                    <label for="tipo" style="visibility: hidden;">TIPO</label> <br>
                                                                    <input type="radio" class="regular-radio" name="tipo_incidente" id="tipo_incidente2" value="EVENTO ADVERSO" style="margin-left: 10px;">

                                                                    <a href="javascript:void(0)" id="click_personal_notifica_eve_adverso" name="click_personal_notifica_eve_adverso" style="color: #333333;">EVENTO ADVERSO</a>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" id="tipo_de_eventos_adversos" name="tipo_de_eventos_adversos">
                                                                <label for="tipo">TIPO DE EVENTO ADVERSO</label> <br>
                                                                <select class="form-control select2" name="sel_event_adver" id="sel_event_adver" style="width: 100%">
                                                                    <option value="">SELECCIONAR</option>
                                                                    <option value="LEVE">LEVE</option>
                                                                    <option value="MODERADO">MODERADO</option>
                                                                    <option value="GRAVE">GRAVE</option>
                                                                    <option value="MUERTE">MUERTE</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label for="tipo">FECHA DE SUCESO</label>
                                                            <input type="text" class="form-control datepicker" style="height: 28px !important;" autocomplete="off" name="fecha_incidente_suceso" id="fecha_incidente_suceso" value="">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>HORA</label>
                                                            <input type="time" name="hora" id="hora" class="form-control" style="height: 28px !important;" />
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <hr>
                                                        <div class="col-md-12">
                                                            <label for="tipo">OBSERVACIONES</label>
                                                            <textarea class="form-control" rows="6" required style="text-transform:uppercase"></textarea>
                                                        </div>
                                                    </fieldset>
                                                </div>

                                            </div>

                                        </div>


                                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-success" id="registrarIncidentes" value="create">Registrar</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- JavaScripts -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous">
    </script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js" crossorigin="anonymous">
    </script>

    <script src="assets/sweetalert/sweetalert.min.js"></script>    
    <script src="js/index-validate.js"></script>
    <script src="js/index2.js"></script>
    <script src="js/index.js"></script>

</body>

</html>