// Declarando el evento de hara que se colapse el sidebar

var sidebar = document.getElementById('sidebar');
var logoTagging = document.getElementById('LogoTagging');
var iconoTagging = document.getElementById('IconTagging');

sidebar.addEventListener("mouseover", function(){

  sidebar.classList.add('active');
  logoTagging.classList.add('tagging__logo__aparecio');
  iconoTagging.classList.add('tagging__icon__oculto');
  
})

sidebar.addEventListener("mouseout", function(){
  
  sidebar.classList.remove('active');
  logoTagging.classList.remove('tagging__logo__aparecio');
  iconoTagging.classList.remove('tagging__icon__oculto');
  
})

// Declarando el evento de hara que al hacer clic al perfil, aparezca el perfil flotante

var enlacePerfil = document.getElementById('perfilEnlace');
var perfil = 0;
var perfilFlotante = document.getElementById('perfilFlotante');

// Declarando el evento que hara que al hacer clic a la campana, aparecera la notificaion flotante

var enlaceNotificacion = document.getElementById('notificacionEnlace');
var noti = 0;

var notificacionFlotante = document.getElementById('notificacionFlotante');

enlacePerfil.addEventListener("click", function() {

  if (perfil == 0) {

    perfilFlotante.classList.add('profile-flotante-activo');
    notificacionFlotante.classList.remove('notification-flotante-activo');
    perfil = 1;
    noti = 0;

  } else if (perfil == 1) {
    perfilFlotante.classList.remove('profile-flotante-activo');
    perfil = 0;
  }
})

enlaceNotificacion.addEventListener("click", function() {

  if (noti == 0) {
    notificacionFlotante.classList.add('notification-flotante-activo');
    perfilFlotante.classList.remove('profile-flotante-activo');
    noti = 1;
    perfil = 0;
  } else if (noti == 1) {
    notificacionFlotante.classList.remove('notification-flotante-activo')
    noti = 0;
  }

})

// Declarando el evento que hara que al tocar el boton de notificaciones se abra el sidebar notificaciones

var sidebarNoti = document.getElementById('sidebarNoti');

var cerrarNoti1 = document.getElementById('cerrarNoti1');

var cerrarNoti2 = document.getElementById('cerrarNoti2');

enlaceNotificacion.addEventListener("click", function() {
  sidebarNoti.classList.add('sidebar__notificaciones_activo');
})

cerrarNoti1.addEventListener("click", function() {
  sidebarNoti.classList.remove('sidebar__notificaciones_activo');
})

cerrarNoti2.addEventListener("click", function() {
  sidebarNoti.classList.remove('sidebar__notificaciones_activo');
})

// Declarando las variables y el evento para abrir el submenu de entradas 

var linkEntrada = document.getElementById('entradaLink');
var dropdown = document.getElementById('entradaDropdown');
var entradaFocus = 0;



linkEntrada.addEventListener('click', function() {

  if (entradaFocus == 0) {
    linkEntrada.classList.add('active-sub');
    dropdown.classList.add('active-dropdown');
    entradaFocus = 1;

  } else if (entradaFocus == 1) {
    linkEntrada.classList.remove('active-sub');
    dropdown.classList.remove('active-dropdown');
    entradaFocus = 0;
  }
});

// Validando estilos en entradas con subenlaces