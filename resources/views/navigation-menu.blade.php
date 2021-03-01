{{-- MENU DE NAVEGACION SUPERIOR --}}
<nav class="header fixed bg-primary py-5 px-10 z-50">

    <div class="container mx-auto flex justify-between">
        {{-- LOGO TAGGING --}}
        <div class="relative flex items-center">
            <a href="#">
                <img src="{{ asset('img/Logo-de-Tagging.png') }}" alt="Logo Tagging" class="hidden md:block logo-de-tagging align-top">
            </a>
        </div>
        {{-- LOGO TAGGING --}}
    
        {{-- NOTIFICACIONES Y PERFIL --}}
        <div class="relative flex items-center">

            {{-- NOTIFICACIONES --}}
            
            <div class="notification relative">

                <a href="#" class="noti-enlace relative mr-10 rounded-full transition duration-500 ease-in-out flex justify-center items-center" id="notificacionEnlace">
                    <div class="noti relative">
                        <div class="alerta absolute block w-7 h-7 rounded-full bg-secondary z-50"></div>
                        <ion-icon name="notifications-outline" class="noti-icon relative mt-2 text-white"></ion-icon>
                    </div>
                </a>

                {{-- NOTIFICACIONES FLOTANTE --}}

                <div class="notification-flotante block absolute -mt-10 bg-white transition duration-300 ease-in-out" id="notificacionFlotante">
                    
                    <h6 class="relative text-center text-lg text-black p-7 w-full font-bold">Notificaciones</h6>

                    <div class="notification-card-scroll relative overflow-y-scroll">

                        <a href="#" class="noti-card relative flex justify-between items-center transition duration-300 ease-in-out">
                            
                            <div class="photo mr-10">
                                <img src="{{ asset('img/usuario.png') }}" alt="Usuario" class="align-top">
                            </div>

                            <div class="text relative text-tiny">
                                <p class="text-name text-black font-medium mb-3">
                                    <span class="name font-bold">Alexis Gomez</span> comentó en:
                                </p>
                                <p class="text-post font-bold text-primary3">
                                    "SEO: guía completa del posicionamiento en buscadores [2020]"
                                </p>
                            </div>
                        </a>

                        <a href="#" class="noti-card relative flex justify-between items-center transition duration-300 ease-in-out">
                            
                            <div class="photo mr-10">
                                <img src="{{ asset('img/usuario.png') }}" alt="Usuario" class="align-top">
                            </div>

                            <div class="text relative text-tiny">
                                <p class="text-name text-black font-medium mb-3">
                                    <span class="name font-bold">Alexis Gomez</span> comentó en:
                                </p>
                                <p class="text-post font-bold text-primary3">
                                    "SEO: guía completa del posicionamiento en buscadores [2020]"
                                </p>
                            </div>
                        </a>

                    </div>

                    <a href="#" class="btn-comment block p-6 text-center w-full uppercase text-tiny font-semibold transition duration-300 ease-in-out">
                        Ver todos los comentarios
                    </a>

                </div>

                {{-- NOTIFICACIONES FLOTANTE --}}

            </div>

            {{-- NOTIFICACIONES --}}

            {{-- PERFIL --}}

            <div class="profile relative">

                <a href="#" class="profile-enlace relative py-1 pr-6 pl-1 pb-1 rounded-full flex items-center text-white transition duration-500 ease-in-out" id="perfilEnlace">
                    <img src="{{ asset('img/example-profile.jpg') }}" alt="Perfil" class="rounded-full mr-5 align-top">
                    <p class="profile-name text-tiny mr-5">Julio Casas</p>
                    <ion-icon name="chevron-down-outline" class="profile-icon w-7 h-7"></ion-icon>
                </a>

                {{-- PERFIL FLOTANTE --}}

                <div class="profile-flotante block absolute right-0 -mt-10 py-8 px-5 bg-white transition duration-300 ease-in-out" id="perfilFlotante">

                    <a href="#" class="block py-5 px-10 text-tiny sm:text-sm transition duration-500 ease-in-out text-black font-medium">Ver perfil</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link class="logout block py-5 px-10 text-tiny sm:text-sm transition duration-500 ease-in-out text-black font-medium" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                            {{ __('Cerrar sesión') }}
                        </x-jet-dropdown-link>
                    </form>


                </div>

                {{-- PERFIL FLOTANTE --}}

            </div>

            {{-- PERFIL --}}

        </div>
        {{-- NOTIFICACIONES Y PERFIL --}}
    </div>

</nav>
{{-- MENU DE NAVEGACION SUPERIOR --}}

{{-- SIDEBAR --}}

<div class="sidebar fixed top-0 left-0 h-screen bg-white" id="sidebar">
    <nav class="nav relative h-full">
        <div>
            {{-- LOGO E ICONO DE LA EMPRESA --}}

            <div class="sidebar-head relative py-8 px-10 bg-primary mx-auto">
                <div class="brand relative overflow-hidden">
                    <img src="{{ asset('img/Icono-de-Tagging.png') }}" class="icono-de-tagging object-cover align-top -ml-1 transition duration-300" id="IconTagging" alt="Icono de Tagging">
                    <img src="{{ asset('img/Logo-de-Tagging.png') }}" class="logo-de-tagging absolute block top-3 left-3 opacity-0 transition duration-300 ease-in-out" id="LogoTagging" alt="Logo de Tagging">
                </div>
            </div>
            
            {{-- LOGO E ICONO DE LA EMPRESA --}}

            {{-- ENLACES DEL SIDEBAR--}}

            <div class="sidebar-nav relative flex flex-col">
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }} nav-enlace relative text-black text-tiny font-medium grid items-center bg-white transition duration-200 ease-in-out overflow-hidden nav-enlace-activo">
                    <ion-icon name="speedometer-outline" class="nav-icon mr-10"></ion-icon>
                    <span class="mt-2 transition duration-300 opacity-100">Dashboard</span>
                </a>

                <a href="{{ route('entradas.index') }}" class="{{ request()->routeIs('entradas.index') ? 'active' : '' }} nav-enlace relative text-black text-tiny font-medium grid items-center bg-white transition duration-200 ease-in-out overflow-hidden">
                    <ion-icon name="receipt-outline" class="nav-icon mr-10"></ion-icon>
                    <span class="mt-2 transition duration-300 opacity-100">Entradas</span>
                </a>

                <a href="#" class="{{ request()->routeIs('comentarios') ? 'active' : '' }} nav-enlace relative text-black text-tiny font-medium grid items-center bg-white transition duration-200 ease-in-out overflow-hidden">
                    <ion-icon name="chatbubbles-outline" class="nav-icon mr-10"></ion-icon>
                    <span class="mt-2 transition duration-300 opacity-100">Comentarios</span>
                </a>

                <a href="#" class="{{ request()->routeIs('roles') ? 'active' : '' }} nav-enlace relative text-black text-tiny font-medium grid items-center bg-white transition duration-200 ease-in-out overflow-hidden">
                    <ion-icon name="person-outline" class="nav-icon mr-10"></ion-icon>
                    <span class="mt-2 transition duration-300 opacity-100">Roles</span>
                </a>

                <a href="#" class="{{ request()->routeIs('usuarios') ? 'active' : '' }} nav-enlace relative text-black text-tiny font-medium grid items-center bg-white transition duration-200 ease-in-out overflow-hidden">
                    <ion-icon name="people-outline" class="nav-icon mr-10"></ion-icon>
                    <span class="mt-2 transition duration-300 opacity-100">Usuarios</span>
                </a>
            </div>

            {{-- ENLACES DEL SIDEBAR--}}
        </div>
    </nav>
</div>

{{-- SIDEBAR --}}

{{-- SIDEBAR DE NOTIFICACIONES --}}

<div class="sidebar-noti sm:block absolute w-full bg-white" id="sidebarNoti">

    <div class="relative">
        <div class="bar-superior fixed w-full z-50 flex flex-row bg-white items-center py-0 pr-10 pl-0">
            <a href="#" class="close-noti py-8 pr-4 pl-10 flex items-center text-black" id="cerrarNoti1">
                <ion-icon name="arrow-back-outline" class="bar-super-icon"></ion-icon>
            </a>
            <h6 class="py-8 w-full text-lg font-bold">Notificaciones</h6>
        </div>
        <div class="list-noti">
            
            <a href="#" class="noti-card relative py-10 px-8 flex justify-between items-center">
                <div class="photo relative mr-10">
                    <img src="img/usuario.png" alt="Usuario" class="align-top">
                </div>
                <div class="text relative text-sm">
                    <p class="text-name text-black font-medium mb-3"><span class="name font-bold">Alexis Gomez</span> comentó en:</p>
                    <p class="text-post font-bold text-primary3">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                </div>
            </a>

            <a href="#" class="noti-card relative py-10 px-8 flex justify-between items-center">
                <div class="photo relative mr-10">
                    <img src="img/usuario.png" alt="Usuario" class="align-top">
                </div>
                <div class="text relative text-sm">
                    <p class="text-name text-black font-medium mb-3"><span class="name font-bold">Alexis Gomez</span> comentó en:</p>
                    <p class="text-post font-bold text-primary3">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                </div>
            </a>

            <a href="#" class="noti-card relative py-10 px-8 flex justify-between items-center">
                <div class="photo relative mr-10">
                    <img src="img/usuario.png" alt="Usuario" class="align-top">
                </div>
                <div class="text relative text-sm">
                    <p class="text-name text-black font-medium mb-3"><span class="name font-bold">Alexis Gomez</span> comentó en:</p>
                    <p class="text-post font-bold text-primary3">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                </div>
            </a>

            <a href="#" class="noti-card relative py-10 px-8 flex justify-between items-center">
                <div class="photo relative mr-10">
                    <img src="img/usuario.png" alt="Usuario" class="align-top">
                </div>
                <div class="text relative text-sm">
                    <p class="text-name text-black font-medium mb-3"><span class="name font-bold">Alexis Gomez</span> comentó en:</p>
                    <p class="text-post font-bold text-primary3">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                </div>
            </a>
            
            <a href="#" class="noti-card relative py-10 px-8 flex justify-between items-center">
                <div class="photo relative mr-10">
                    <img src="img/usuario.png" alt="Usuario" class="align-top">
                </div>
                <div class="text relative text-sm">
                    <p class="text-name text-black font-medium mb-3"><span class="name font-bold">Alexis Gomez</span> comentó en:</p>
                    <p class="text-post font-bold text-primary3">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                </div>
            </a>

            <a href="#" class="noti-card relative py-10 px-8 flex justify-between items-center">
                <div class="photo relative mr-10">
                    <img src="img/usuario.png" alt="Usuario" class="align-top">
                </div>
                <div class="text relative text-sm">
                    <p class="text-name text-black font-medium mb-3"><span class="name font-bold">Alexis Gomez</span> comentó en:</p>
                    <p class="text-post font-bold text-primary3">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                </div>
            </a>

            <a href="#" class="noti-card relative py-10 px-8 flex justify-between items-center">
                <div class="photo relative mr-10">
                    <img src="img/usuario.png" alt="Usuario" class="align-top">
                </div>
                <div class="text relative text-sm">
                    <p class="text-name text-black font-medium mb-3"><span class="name font-bold">Alexis Gomez</span> comentó en:</p>
                    <p class="text-post font-bold text-primary3">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                </div>
            </a>

            <a href="#" class="noti-card relative py-10 px-8 flex justify-between items-center">
                <div class="photo relative mr-10">
                    <img src="img/usuario.png" alt="Usuario" class="align-top">
                </div>
                <div class="text relative text-sm">
                    <p class="text-name text-black font-medium mb-3"><span class="name font-bold">Alexis Gomez</span> comentó en:</p>
                    <p class="text-post font-bold text-primary3">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                </div>
            </a>

            <a href="#" class="noti-card relative py-10 px-8 flex justify-between items-center">
                <div class="photo relative mr-10">
                    <img src="img/usuario.png" alt="Usuario" class="align-top">
                </div>
                <div class="text relative text-sm">
                    <p class="text-name text-black font-medium mb-3"><span class="name font-bold">Alexis Gomez</span> comentó en:</p>
                    <p class="text-post font-bold text-primary3">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                </div>
            </a>

            <a href="#" class="noti-card relative py-10 px-8 flex justify-between items-center">
                <div class="photo relative mr-10">
                    <img src="img/usuario.png" alt="Usuario" class="align-top">
                </div>
                <div class="text relative text-sm">
                    <p class="text-name text-black font-medium mb-3"><span class="name font-bold">Alexis Gomez</span> comentó en:</p>
                    <p class="text-post font-bold text-primary3">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                </div>
            </a>

        </div>
        <div class="btn-close fixed block w-full py-5 px-10 bg-white">
            <a href="#" class="btn-close-noti block text-center text-base font-semibold p-6 bg-primary30 text-primary3" id="cerrarNoti2">Cerrar notificaciones</a>
        </div>
    </div>

</div>


{{-- SIDEBAR DE NOTIFICACIONES --}}

{{-- BARRA DE NAVEGACION INFERIOR --}}

<div class="bar-inferior fixed w-full bg-white flex">
    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }} bar-inf-enlace w-1/5 relative flex flex-col justify-center items-center text-black">
        <div class="bar-inf-icon relative w-full h-10 mb-3 flex justify-center items-center">
            <ion-icon name="speedometer-outline" class="bi-icon"></ion-icon>
        </div>
        <span class="binf-name text-xs font-semibold">Dashboard</span>
    </a>

    <a href="#" class="bar-inf-enlace w-1/5 relative flex flex-col justify-center items-center text-black">
        <div class="bar-inf-icon relative w-full h-10 mb-3 flex justify-center items-center">
            <ion-icon name="receipt-outline" class="bi-icon"></ion-icon>
        </div>
        <span class="binf-name text-xs font-semibold">Entradas</span>
    </a>

    <a href="#" class="bar-inf-enlace w-1/5 relative flex flex-col justify-center items-center text-black">
        <div class="bar-inf-icon relative w-full h-10 mb-3 flex justify-center items-center">
            <ion-icon name="chatbubbles-outline" class="bi-icon"></ion-icon>
        </div>
        <span class="binf-name text-xs font-semibold">Comentarios</span>
    </a>

    <a href="#" class="bar-inf-enlace w-1/5 relative flex flex-col justify-center items-center text-black">
        <div class="bar-inf-icon relative w-full h-10 mb-3 flex justify-center items-center">
            <ion-icon name="person-outline" class="bi-icon"></ion-icon>
        </div>
        <span class="binf-name text-xs font-semibold">Roles</span>
    </a>

    <a href="#" class="bar-inf-enlace w-1/5 relative flex flex-col justify-center items-center text-black">
        <div class="bar-inf-icon relative w-full h-10 mb-3 flex justify-center items-center">
            <ion-icon name="people-outline" class="bi-icon"></ion-icon>
        </div>
        <span class="binf-name text-xs font-semibold">Usuarios</span>
    </a>
</div>

{{-- BARRA DE NAVEGACION INFERIOR --}}