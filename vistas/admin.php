<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('Location: ../index.php');
  echo $_SESSION['codigo_usuario'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>SoftCon</title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="_recursos/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="_recursos/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="_recursos/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="_recursos/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="_recursos/css/font.css" type="text/css" />
  <link rel="stylesheet" href="_recursos/css/app.css" type="text/css" />
  <link rel="stylesheet" href="_recursos/js/sweetalert.css">
  <link href="_recursos/css/customs.css" rel="stylesheet">
  <script src="../vistas/Highcharts-6.1.1/code/highcharts.js"></script>
  <script src="../vistas/Highcharts-6.1.1/code/highcharts-3d.js"></script>
  <script src="../vistas/Highcharts-6.1.1/code/modules/exporting.js"></script>
  <script src="../vistas/Highcharts-6.1.1/code/modules/export-data.js"></script>
  <script src="_recursos/js/jquery.min.js"></script>
  <script type="text/javascript" src="_recursos/js/Consola_Asistencia.js"></script>
  <script type="text/javascript" src="_recursos/js/consola_usuario.js"></script>
  <script type="text/javascript" src="_recursos/js/Console_menu.js"></script>
  <link type="text/css" rel="stylesheet" href="_recursos/input-file/css/disenio_input_2.css">
  <script src="_recursos/input-file/js/bootstrap-uploader/file-upload.js"></script>
  <link rel="stylesheet" href="_recursos/select2/dist/css/select2.min.css">

  <!--automatico-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!--intro css y js-->
  <script type="text/javascript" src="../node_modules/intro.js/intro.js"></script>
  <link href="../node_modules/intro.js/introjs.css" rel="stylesheet">
  <link href="../node_modules/intro.js/themes/introjs-flattener.css" rel="stylesheet">
  <link href="../node_modules/intro.js/themes/introjs-nazanin.css" rel="stylesheet">
  <link href="../node_modules/intro.js/themes/introjs-modern.css" rel="stylesheet">

</head>
<body>
  <input type="text" value="<?php echo $_SESSION['codigo_personal']; ?>"  hidden="true" id="txtcodigo_principal_usuario">
  <input type="text" value="<?php echo $_SESSION['nombre_usuario']; ?>" hidden="true" id="txtnombre_principal_usuario">
  <input type="text" value="<?php echo $_SESSION['codigo_usuario']; ?>" style="display: none" id="txtnombre_codigo_usuario">
  <div class="app app-header-fixed" id="app" action="index.php">
    <div class="app-header navbar">
      <div class="navbar-header bg-dark">
        <button class="pull-right visible-xs dk" data-toggle="class:show" data-target=".navbar-collapse" style="color:#ecf0f1;">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" data-toggle="class:off-screen" data-target=".app-aside" ui-scroll="app"  style="color:#ecf0f1;">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <a href="admin.php" class="navbar-brand text-lt">
          <!--<i class="glyphicon glyphicon-leaf icon text-success"></i>-->
          <i class="fa fa-list icon text-success"></i>
          <img src="_recursos/img/logo.png" alt="." class="hide">
          <span class="hidden-folded m-l-xs">SoftCon</span>
        </a>
      </div>
      <div class="collapse pos-rlt navbar-menu-wrapper navbar-collapse box-shadow bg-white-only">
        <!--navbar-menu-wrapper d-flex align-items-stretch-->
        <div class="nav navbar-nav hidden-xs">
          <a href="#" class="btn no-shadow navbar-btn" data-toggle="class:app-aside-folded" data-target=".app">
            <i class="fa fa-dedent fa-fw text" style="font-size: 20px" data-step="12" data-intro="Para desplegar el menú lateral izquierdo."></i>
            <i class="fa fa-indent fa-fw text-active"></i>
          </a>
          <a href class="btn no-shadow navbar-btn" data-toggle="class:show" data-target="#aside-user" data-step="11" data-intro="Aquí podrás editar tu Información personal, cambiar contraseña y foto de perfil.">
            <svg width="1em" font-size="20px" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
            </svg>
          </a>


          <!--Seccion de ayuda al usuario-->
          <li class="dropdown">
            <a class="nav-link count-indicator dropdown-toggle"  id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span style="font-size: 20px;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
              </svg>
              <ul class="dropdown-menu animated fadeInRight w" style="width:375px">
                <li>
                  <a onclick="AbrirAyuda()">
                    <span style="font-size: 20px;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-checklist" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                      <path fill-rule="evenodd" d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                    </svg>&nbsp;&nbsp;Manual de usuario
                  </span>
                  </a>
                  </li>
                  <li>
                    <a onclick="javascript:startTour();">
                  <span style="font-size: 20px;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-joystick" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.106 15.553L.553 12.276A1 1 0 0 1 0 11.382V9.471a1 1 0 0 1 .606-.89L6 6.269v1.088L1 9.5l5.658 2.83a3 3 0 0 0 2.684 0L15 9.5l-5-2.143V6.27l5.394 2.312a1 1 0 0 1 .606.89v1.911a1 1 0 0 1-.553.894l-6.553 3.277a2 2 0 0 1-1.788 0z"/>
                      <path fill-rule="evenodd" d="M7.5 9.5v-6h1v6h-1z"/>
                      <path d="M10 9.75c0 .414-.895.75-2 .75s-2-.336-2-.75S6.895 9 8 9s2 .336 2 .75zM10 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                    </svg>&nbsp;&nbsp;Tour
                  </span>
                  </li>
                </a> 
              </ul>
          </li>
        </div>


        <ul class="nav navbar-nav navbar-right">
          <?php if ($_SESSION['usu']=="ADMINISTRADOR") {        
            ?>
            <li class="dropdown">
              <a class="nav-link count-indicator dropdown-toggle"  id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <svg width="1em" font-size="25px" height="1em" viewBox="0 0 16 16" class="           bi     bi-chat-dots-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                <div id="notificacion_palpante" data-step="10" data-intro="Aquí podrás ver los documentos que estan pendientes para ser validados."></div>
              </a>
              <ul class="dropdown-menu animated fadeInRight w" style="width:375px">

                <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">

                  <div>
                    <a ui-sref="app.dashboard-v1"onclick="cargar_contenido('main-content','Verificar_documento/vista_verificardocumento_listar.php');">
                     <h4><strong>Documentos</strong> </h4>
                   </a>
                 </div>
               </li>
               <div id="id_contenido">

               </div>
             </ul>
           </li>
           <?php
         }
         ?>
         <li class="dropdown"><!--style="width: 30px; height:40px "-->
          <a href="#" data-toggle="dropdown" class="dropdown-toggle clear" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
              <div id="txtimagen3">

              </div>

              <i class="on md b-white bottom" data-step="13" data-intro="Aquí podrás configurar tu cuenta o Cerrar sesión."></i>
            </span>
            <span class="hidden-sm hidden-md">
              <strong><?php echo $_SESSION['usu'] ?></strong> : <label id="txtnombre_usuario"></label></span>
            </span> <b class="caret"></b>
          </a>
          <!-- dropdown -->
          <ul class="dropdown-menu animated fadeInRight w hidden-folded" style="width:250px" >
            <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
              <div>
                <p>Bienvenido</p>
              </div>
              <progressbar value="60" class="progress-xs m-b-none bg-white"></progressbar>
            </li>
            <li>
              <a onclick="abrirModalusuario()">
                <span class="badge bg-danger pull-right">C</span>
                <span>Configuracion de Cuenta</span>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="../controlador/usuario/controlador_usuario_cerrar_sesion.php">Salir</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="app-aside hidden-xs bg-dark">
    <div class="aside-wrap">
      <div class="navi-wrap">
        <div class="clearfix hidden-xs text-center hide" id="aside-user">
          <div class="dropdown wrapper">
            <a ui-sref="app.page.profile">
              <span class="thumb-lg w-auto-folded avatar m-t-sm">
                <div id="txtimagen">

                </div>
              </span>
            </a>
            <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
              <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><label id="txtnombre_usuario1"></label></span></strong> 
            </span> <span class="text-muted text-xs block"><?php echo $_SESSION['usu']?> <b class="caret"></b></span> </span>
          </a>
          <ul class="dropdown-menu animated fadeInRight w hidden-folded">
            <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
              <span class="arrow top hidden-folded arrow-info"></span>
              <div>
                <p>Bienvenido</p>
              </div>
              <progressbar value="60" type="white" class="progress-xs m-b-none dker"></progressbar>
            </li>
            <li><a onclick="abrirmodaladministrativo()">Datos Personales</a>
            </li>
            <li><a onclick="abrirModalusuario()" data-toggle="modal">Configuración de Cuenta</a></li>
            <li class="divider"></li>
            <li>
              <a href="../controlador/usuario/controlador_usuario_cerrar_sesion.php">Salir</a>
            </li>
          </ul>
        </div>
        <div class="line dk hidden-folded"></div>
      </div>
      <nav ui-nav class="navi">
        <ul class="nav">
          <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
            <span translate="aside.nav.HEADER">PANEL ADMINISTRATIVO</span>
          </li>
          <li ui-sref-active="active" data-step="1" data-intro="Módulo de mantenimiento, 
          Aquí podrás cambiar tus datos personales">
            <a ui-sref="app.mail.list">
              <b class="badge bg-info pull-right">M</b>
              <i class="fa fa-laptop icon text-success"></i>
              <span class="font-bold" translate="aside.nav.Mantenimiento">MANTENIMIENTO</span>
            </a>
            <ul class="nav nav-sub dk" >
              <li ui-sref-active="active">
                <a  onclick="abrirmodaladministrativo()">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                  </svg>
                  <span>Usuario</span>
                </a>
              </li>

            </ul>
            <?php if ($_SESSION['usu']=="ADMINISTRADOR") {        
              ?>
              <li ui-sref-active="active" data-step="2" data-intro="Módulo de personal, 
          Aquí podrás ver, agregar y editar los registros.">
                <a ui-sref="app.mail.list">
                  <b class="badge bg-info pull-right">P</b>
                  <i class="glyphicon glyphicon-user icon text-info-lter"></i>
                  <span class="font-bold" translate="aside.nav.Mantenimiento">PERSONAL</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li ui-sref-active="active">
                    <a ui-sref="app.dashboard-v2" onclick="cargar_contenido('main-content','Personal/vista_listar_personal.php');">
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-ul" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                      </svg>
                      <span>Listar Personal</span>
                    </a>
                  </li>
                  <li ui-sref-active="active">
                    <a ui-sref="app.dashboard-v1" onclick="cargar_contenido('main-content','Personal/vista_registrar_personal.php');">
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                      </svg>
                      <span>Nuevo Personal</span>
                    </a>
                  </li>
                </ul>
              </li>
            <?php }
            ?>
            <li ui-sref-active="active" data-step="3" data-intro="Módulo de Ciudadano, 
          Aquí podrás ver, agregar y editar los registros de las personas que emiten
documentos en los diferentes departamentos.">

              <a ui-sref="app.mail.list">
                <b class="badge bg-info pull-right">C</b>
                <i class="fa fa-briefcase icon text-info-lter text-success"></i>
                <span class="font-bold" translate="aside.nav.Mantenimiento">CIUDADANO</span>
              </a>
              <ul class="nav nav-sub dk">
                <li ui-sref-active="active" onclick="cargar_contenido('main-content','Ciudadano/vista_listar_ciudadano.php');">
                  <a ui-sref="app.dashboard-v2">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-ul" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    <span>Listar Ciudadano</span>
                  </a>
                </li>
                <li ui-sref-active="active">
                  <a ui-sref="app.dashboard-v1" onclick="cargar_contenido('main-content','Ciudadano/vista_registrar_ciudadano.php');">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    <span>Nuevo Ciudadano</span>
                  </a>
                </li>
              </ul>
            </li>
            <li ui-sref-active="active" data-step="4" data-intro="Módulo de Institución, 
          Aquí podrás ver, agregar y editar los registros de las instituciones o departamentos.">
              <a ui-sref="app.mail.list">     
                <b class="badge bg-info pull-right">I</b>
                <i class="fa fa-folder-open icon text-info-lter"></i>
                <span class="font-bold" translate="aside.nav.Mantenimiento">INSTITUCIÓN</span>
              </a>
              <ul class="nav nav-sub dk">
                <li ui-sref-active="active"onclick="cargar_contenido('main-content','Institucion/vista_institucion_listar.php');">
                  <a ui-sref="app.dashboard-v2">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-ul" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    <span>Listar Instituci&oacute;n</span>
                  </a>
                </li>
                <li ui-sref-active="active">
                  <a ui-sref="app.dashboard-v1"onclick="cargar_contenido('main-content','Institucion/vista_institucion_registrar.php');">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
                      <path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    <span>Nueva Instituci&oacute;n</span>
                  </a>
                </li>

              </ul>
            </li>
            <li ui-sref-active="active" data-step="5" data-intro="Módulo de Área, 
          Aquí podrás ver, agregar y editar los registros de las áreas de trabajo con las que cuentan las instituciones.">
              <a ui-sref="app.mail.list">     
                <b class="badge bg-info pull-right">A</b>
                <i class="fa fa-list icon text-success"></i>
                <span class="font-bold">&Aacute;REA</span>
              </a>
              <ul class="nav nav-sub dk">
                <li ui-sref-active="active"onclick="cargar_contenido('main-content','Area/vista_area_listar.php');">
                  <a ui-sref="app.dashboard-v2">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-ul" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    <span>Listar &Aacute;reas</span>
                  </a>
                </li>
                <li ui-sref-active="active"onclick="cargar_contenido('main-content','Area/vista_area_registrar.php');">
                  <a ui-sref="app.dashboard-v2">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                    </svg>
                    <span>Nueva &Aacute;rea</span>
                  </a>
                </li>
              </ul>
            </li>
            <li ui-sref-active="active" data-step="6" data-intro="Módulo de Documento, 
          Aquí podrás agregar y ver el asunto, remitente, previsualización del documento y ver el estado de validacion del documento registrado.">
              <a ui-sref="app.mail.list">
                <b class="badge bg-info pull-right">D</b>
                <i class="fa fa-file-text icon text-info-lter"></i>
                <span class="font-bold" translate="aside.nav.Venta">DOCUMENTO</span>
              </a>
              <ul class="nav nav-sub dk">
                <li ui-sref-active="active">
                  <a ui-sref="app.mail.list" onclick="cargar_contenido('main-content','Documento/vista_documento_listar.php')">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-ul" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    <span>Listar Documento</span>
                  </a>
                </li>
                <li ui-sref-active="active">
                  <a ui-sref="app.dashboard-v2 "onclick="cargar_contenido('main-content','Documento/vista_documento_registrar.php')">
                   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7.5 1.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V11a.5.5 0 0 0 1 0V9.5H10a.5.5 0 0 0 0-1H8.5V7z"/>
                  </svg>
                  <span>Nuevo Documento</span>
                </a>
              </li>
            </ul>
          </li>
          <li ui-sref-active="active" data-step="7" data-intro="Módulo de Tipos de Documentos, 
          Aquí podrás agregar, ver y editar los tipos de documentos que se manejan en las instituciones o departamentos.">      
            <a ui-sref="app.mail.list">
              <b class="badge bg-info pull-right">TD</b>
              <i class="fa fa-file icon text-success"></i>
              <span class="font-bold">T. DOCUMENTO</span>
            </a>
            <ul class="nav nav-sub dk">
              <li ui-sref-active="active">
                <a ui-sref="app.dashboard-v1"onclick="cargar_contenido('main-content','Tipo_Documento/vista_tipoDocumento_Listar.php');">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-ul" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                  </svg>
                  <span>Lista de tipos de documentos</span>
                </a>
              </li>
              <li ui-sref-active="active"onclick="cargar_contenido('main-content','Tipo_Documento/vista_tipoDocumento_Registrar.php');">
                <a ui-sref="app.dashboard-v2">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-font-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5.057 4h5.886L11 6h-.5c-.18-1.096-.356-1.192-1.694-1.235l-.298-.01v6.09c0 .47.1.582.903.655v.5H6.59v-.5c.799-.073.898-.184.898-.654V4.755l-.293.01C5.856 4.808 5.68 4.905 5.5 6H5l.057-2z"/>
                  </svg>
                  <span>Nuevo Tipo de documento</span>
                </a>
              </li>
            </ul>
          </li>
          <li ui-sref-active="active" data-step="8" data-intro="Módulo de Reportes, 
          Aquí podrás ver y descargar o imprimir reportes por rango de fecha, reporte de documentos instituciones o del personal.">
            <a ui-sref="app.mail.list">
              <b class="badge bg-info pull-right">R</b>
              <i class="glyphicon glyphicon-print icon text-info-lter"></i>
              <span class="font-bold" translate="aside.nav.Compra">REPORTES</span>
            </a> 
            <ul class="nav nav-sub dk">
              <li ui-sref-active="active"onclick="cargar_contenido('main-content','RangoFechas/vista_rangofechas_listar.php');">
                <a ui-sref="app.dashboard-v2">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-graph-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                  <span>Reportes de documentos - Rango Fechas</span>
                </a>
              </li>
              <li ui-sref-active="active" onclick="AbrirReporteInstitucion()"  >
                <a ui-sref="app.dashboard-v1">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-graph-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                  <span>Reportes de documentos institucionales</span>
                </a>
              </li>
              <li ui-sref-active="active"onclick="AbrirReporteCiudadano()">
                <a ui-sref="app.dashboard-v2">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-graph-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                  <span>Reporte de dcumento de personas</span>
                </a>
              </li>
            </ul>
            <li ui-sref-active="active" data-step="9" data-intro="Módulo de Más Información, 
          Aquí podrás ver la documentación oficial del proyecto e instalción del mismo">
              <a ui-sref="app.mail.list">
                <b class="badge bg-info pull-right">+I</b>
                <svg width="1em" height="1em" font-size="15px" viewBox="0 0 16 16" class="bi bi-info-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
                <span class="font-bold" style="font-size: 13px;">&nbsp;&nbsp;MÁS INFORMACIÓN</span>
              </a>
              <ul class="nav nav-sub dk">
                <li ui-sref-active="active">
                  <a ui-sref="app.dashboard-v1" onclick="AbrirDocumentacion();">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7.5 1.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 8a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <span>Documentación</span>
                  </a>
                </li>
                <li ui-sref-active="active"onclick="AbrirInstalacion();">
                  <a ui-sref="app.dashboard-v2">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hdd-rack-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm.5 3a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM3 9V7h1v2H3zm9 0V7h1v2h-1z"/>
                    </svg>
                    <span>Instalación</span>
                  </a>
                </li>
              </ul>
            </li>
          </li>          

        </nav>
        <!-- nav -->
      </div>
    </div>
  </div>
  <!-- / menu -->

  <!-- content -->
  <div class="app-content" id="main-content">
    <div class="contendor_kn">
      <div class="panel panel-default">
        <div class="panel-body">
          <div style="text-align: center;" align="center">
            <img style="text-align: center;" align="center" src="tec.jpg"> 
            <div style="text-align: left;">
              <br>
              <!-- <label>Fans page: </label>
              <a href="https://www.facebook.com/Softnet-Solutions-PE-223407098302239/">https://www.facebook.com/Softnet-Solutions-PE-223407098302239/</a><br>        
              <label>Canal de youtube: </label>
              <a href="https://www.youtube.com/channel/UCwqezobpzSbOGxyrj6WlVCg">https://www.youtube.com/channel/UCwqezobpzSbOGxyrj6WlVCg</a><br>
              <label>Siguenos para mas sistemas gratis! - Tambien desarrollamos sistemas para tu negocio!</label> -->

            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>

  <!-- /content -->
  <!-- aside right -->
  <div class="app-aside-right pos-fix no-padder w-md w-auto-xs bg-white b-l animated fadeInRight hide">
    <div class="vbox">
      <div class="wrapper b-b b-t b-light m-b">
        <a href class="pull-right text-muted text-md" data-toggle="class:show" data-target=".app-aside-right"><i class="icon-close"></i></a>
        Chat
      </div>
      <div class="wrapper m-t b-t b-light">
        <form class="m-b-none">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Say something">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">SEND</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- / aside right -->

  <!-- footer -->
    <!-- <div class="app-footer wrapper b-t bg-light">
      <span class="pull-right">1.0.0 <a href="#app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
      &copy; 2018 Copyright.
    </div> -->
    <!-- / footer -->
  </div>
  <!-- jQuery -->
  
  <script src="_recursos/js/sweetalert.min.js"></script>
  <script src="_recursos/js/jquery.min.js"></script>
  <script src="_recursos/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="_recursos/js/Console_menu.js"></script>
  <script src="_recursos/select2/dist/js/select2.full.min.js"></script>
  <!-- Custom Theme Scripts -->
  <script type="text/javascript">filtrar_DocumentosPendientes();</script>
  <script type="text/javascript">


    function cargar_contenido(contenedor,contenido){
      $("#"+contenedor).load(contenido);
    }
  </script>
  <!-- Pluggin -->
  
  <!-- Final Pluggin -->
  <style type="text/css">
    .contendor_kn{
      padding: 10px;
    }
  </style>
  <script>
    $(document).ready(function(){
     $(".cargar").click();
   });
    function myFunction(){

     console.log("cargando");

   }
 </script>
 <script>
  function startTour() {
    var tour = introJs()
    tour.setOption('tooltipPosition', 'auto');
    tour.setOption('positionPrecedence', ['left', 'right', 'top', 'bottom']);
    tour.start();
  }

</script>
<script type="text/javascript">
  function AbrirReporteInstitucion(){
    window.open('Reportes/php/generar_reporte_institucion.php', '_blank');   
  }

  function AbrirReporteCiudadano(){
    window.open('Reportes/php/generar_reporte_persona.php', '_blank');     
  }
  function AbrirDocumentacion(){
    window.open('https://drive.google.com/file/d/1sdxfZgCpUgzP6mQrdSy-xKf6k_cAblbd/view', '_blank');  
  }
  function AbrirInstalacion(){
    window.open('Reportes/fpdf/ManualDeInstalacion.pdf', '_blank');   
  }
  function AbrirAyuda(){
    window.open('Reportes/fpdf/ManualDeUsoDeSoftCon.pdf', '_blank');     
  }
</script>
<style type="text/css">
  label{
    font-weight:bold;
  }
  .select2{
    font-weight:bold;
    text-align-last:center;
  }
  button{
    font-weight:bold;
    
  }
  select{
   font-weight:bold;
   text-align-last:center;
 }
 .select2-container--default.select2-container--disabled .select2-selection--single{
  color: rgb(25,25,51); background-color: rgb(255,255,255);solid 5px;
}
.modal-open .select2-container--open {
  z-index: 999999 !important; width:100% !important; 
}
</style>
<style type="text/css">
  label{
    font-weight:bold;
  }
  select{
    font-weight:bold;
    text-align-last:center;
    padding-right: 29px;
  }
  button{
    font-weight:bold;
  }
</style>
<script type="text/javascript">
  +function ($) {
    $(function(){
        // class
        $(document).on('click', '[data-toggle^="class"]', function(e){
          e && e.preventDefault();
          console.log('abc');
          var $this = $(e.target), $class , $target, $tmp, $classes, $targets;
          !$this.data('toggle') && ($this = $this.closest('[data-toggle^="class"]'));
          $class = $this.data()['toggle'];
          $target = $this.data('target') || $this.attr('href');
          $class && ($tmp = $class.split(':')[1]) && ($classes = $tmp.split(','));
          $target && ($targets = $target.split(','));
          $classes && $classes.length && $.each($targets, function( index, value ) {
            if ( $classes[index].indexOf( '*' ) !== -1 ) {
              var patt = new RegExp( '\\s' + 
                $classes[index].
                replace( /\*/g, '[A-Za-z0-9-_]+' ).
                split( ' ' ).
                join( '\\s|\\s' ) + 
                '\\s', 'g' );
              $($this).each( function ( i, it ) {
                var cn = ' ' + it.className + ' ';
                while ( patt.test( cn ) ) {
                  cn = cn.replace( patt, ' ' );
                }
                it.className = $.trim( cn );
              });
            }
            ($targets[index] !='#') && $($targets[index]).toggleClass($classes[index]) || $this.toggleClass($classes[index]);
          });
          $this.toggleClass('active');
        });

        // collapse nav
        $(document).on('click', 'nav a', function (e) {
          var $this = $(e.target), $active;
          $this.is('a') || ($this = $this.closest('a'));
          
          $active = $this.parent().siblings( ".active" );
          $active && $active.toggleClass('active').find('> ul:visible').slideUp(200);
          
          ($this.parent().hasClass('active') && $this.next().slideUp(200)) || $this.next().slideDown(200);
          $this.parent().toggleClass('active');
          
          $this.next().is('ul') && e.preventDefault();

          setTimeout(function(){ $(document).trigger('updateNav'); }, 300);      
        });
      });
  }(jQuery);
</script>
<div class="modal fade bs-example-modal-lg" id="modal_editar_adminsitrador" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel"><label> EDITAR DATOS PERSONALES</label></h4>
     </div>
     <div class="modal-body">
      <div class="contendor_kn">
        <div class="panel panel-default">
          <div class="panel-body">
            <form method="POST" id="update-form-administrador">
              <div class="col-md-6">
                <input type="text" id="personal_id" name="personal_id" hidden value="<?php echo $_SESSION['codigo_personal']?>" >
                <label  class="col-sm-4 control-label">Nombres </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" onkeypress="return soloLetras(event)" name="nombres_personal" id="nombres_personal" placeholder="Ingrese Nombres" maxlength="">
                  <br>
                </div>
                <label  class="col-sm-4 control-label">Apellido Paterno </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"onkeypress="return soloLetras(event)"  name="apePate_personal" id="apePate_personal" placeholder="Ingrese Apellido Paterno" maxlength="">
                  <br>
                </div>
                <label  class="col-sm-4 control-label">Apellido Materno </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" onkeypress="return soloLetras(event)" name="apeMate_personal" id="apeMate_personal" placeholder="Ingrese Apelido Materno" maxlength="">
                  <br>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="col-sm-12" style="text-align:center">
                  <label  class="control-label">Fotograf&iacute;a</label><br>
                  <div id="txtimagen2">

                  </div>                   
                </div> 

                <!--Aqui se pone la foto de perfil-->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class='filestyle' data-buttonText="perfil" type="file" name="imagefile" id="imagefile" onchange="upload_image();">
                    </div>
                  </div>

                </div>                
              </div>
              <div class="col-md-12">
                <label  class="col-sm-2 control-label">Email </label>
                <div class="col-sm-4">
                  <input type="email" class="form-control"  style="width: 94%"  name="email_personal" id="email_personal" placeholder="Ingrese email" maxlength="100">
                  <br>
                </div> 
                <label  class="col-sm-2 control-label">Tel&eacute;fono </label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" onkeypress="return soloNumeros(event)"  name="telefono_personal" id="telefono_personal" placeholder="Ingrese nro telefóno" maxlength="10">
                  <br>
                </div> 

                <label  class="col-sm-2 control-label">Movil </label>
                <div class="col-sm-4">
                  <input type="text" style="width: 94%" class="form-control" name="movil_personal" id="movil_personal"  onkeypress="return soloNumeros(event)" placeholder="Ingrese nro movil" maxlength="10">
                  <br>
                </div> 
                <label  class="col-sm-2 control-label">Direcci&oacute;n </label>
                <div class="col-sm-4">
                  <input type="text"  class="form-control"  onkeypress="return soloLetras(event)" name="direccion_personal" id="direccion_personal" placeholder="Ingrese dirección" maxlength="200">
                  <br>
                </div> 
                <label  class="col-sm-2 control-label">Fecha Nacimiento </label>
                <div class="col-sm-4">
                  <div class=" input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" style="width: 94%;padding: 0px 12px;"  id="fechanacimiento_personal"  name="fechanacimiento_personal"  class="form-control"  >
                  </div>
                </div>
                <label  class="col-sm-2 control-label">DNI </label>
                <div class="col-sm-4">
                  <input type="text"  class="form-control"  onkeypress="return soloNumeros(event)" name="dni_personal" id="dni_personal" placeholder="Ingrese DNI" maxlength="13">
                  <br>
                </div> 
              </div>
              <div class="col-md-12 col-lg-12 col-xs-12" style="text-align:center;" >
                <br>
                <div class="col-md-4">
                </div>
                <div class="col-md-4" >
                 <button class="btn btn-success"  style="width: 100%" ><span class="glyphicon glyphicon-floppy-saved" ></span>&nbsp;<b>Modificar Datos</b></button><br>
               </div>
               <div class="col-md-4">
               </div>
             </div>
           </form> 
         </div>         
       </div>
     </div>  
   </div> 
   <div class="modal-footer">
    <button type="button" class="btn btn-danger pull-right" data-dismiss="modal"><i class="fa fa-close"></i><strong> Close</strong></button>
  </div> 
</div>
</div> 
</div>
<div class="modal fade bs-example-modal-lg" id="modal_cuenta"  style="padding:50px 0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="mimodal_registrar"><label>Configuraci&oacute;n de la Cuenta</label></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="formulario_usuario">
          <div class="box-body">
            <div class="" id="msj_persona">
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Tipo Usuario</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" style="background:#fff;font-weight:bold;" value="<?php echo $_SESSION['usu'] ?>" disabled="" id="tipo_usuario" placeholder="Tipo Usuario" maxlength="40">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Usuario</label>
              <div class="col-sm-5">
                <input type="text" id="txtoriginal" value="" hidden='true'>
                <input type="text"  style="background:#fff;font-weight:bold;" id="txtusuario" class="form-control" value="<?php echo $_SESSION['usuario'] ?>" disabled=""  placeholder="Usuario" maxlength="30">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label"> Actual</label>
              <div class="col-sm-5">
                <input type="password" class="form-control"  id="txtactual" placeholder="contrasenia Actual" maxlength="30">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Nueva </label>
              <div class="col-sm-5">
                <input type="password" class="form-control"  id="txtnueva" placeholder="Nueva contrasenia" maxlength="30">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Repetir Contraseña Nueva</label>
              <div class="col-sm-5">
                <input type="password" class="form-control" id="txtrepetir" placeholder="repetir contrasenia nueva" maxlength="30">
              </div>

            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer text-center">
            <button type="button" style="cursor:pointer;" onclick="Editar_cuenta();" class="btn btn-success"><b>Actualizar </b>&nbsp;&nbsp; <i class="fa fa-floppy-o fa-lg" aria-hidden="true"></i> </button>
          </div>
          <!-- /.box-footer -->
        </form>  
      </div>
      <div class="modal-footer">
        <div class="form-group">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><b> Cerrar</b></button>

        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    traer_administrador();
    $(document).on('submit', '#update-form-administrador', function() { 
      var data = $(this).serialize(); 
      $.ajax({  
        type : 'POST',
        mimeType: "multipart/form-data",
        url  : '../controlador/personal/controlador_editar_administrador.php',
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success:function(resp) {
          $("#modal_editar_adminsitrador").modal('hide');
          traer_administrador();
          document.getElementById("update-form-administrador").reset();
          if(resp>0){
            swal("Datos Actualizados","","success")
            .then ( ( value ) =>  { 
              document.getElementById("update-form-administrador").reset();
              traer_administrador();
            } ) ;
          }else{
            swal("Lo sentimos los datos no fueron registrados","","error")
            .then ( ( value ) =>  { 
              document.getElementById("update-form-administrador").reset();
              traer_administrador();
            } ) ;
          }
          traer_administrador();
        }  
      });
      return false;
    }); 
  </script>
  <script>
    function upload_image(){

      var inputFileImage = document.getElementById("imagefile");
      var file = inputFileImage.files[0];
      if( (typeof file === "object") && (file !== null) )
      {
        $("#load_img").text('Cargando...'); 
        var data = new FormData();
        data.append('imagefile',file);

        $.ajax({
            url: "../ajax/imagen_ajax.php",        // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: data,         // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(data)   // A function to be called if request succeeds
            {
              $("#load_img").html(data);             
            }
          }); 
      }  
    }
  </script>
</body>
</html>