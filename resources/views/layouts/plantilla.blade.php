<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- ICO -->
    <link rel="icon" href="{{ asset('img/tagging.png') }}" type="image/png">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
    {{-- MENU DE NAVEGACION SUPERIOR --}}
    <nav class="header">

        <div class="container">
            {{-- LOGO TAGGING --}}
            <div>
                <a href="#">
                    <img src="{{ asset('img/Logo-de-Tagging.png') }}" alt="Logo Tagging" class="logo-de-tagging">
                </a>
            </div>
            {{-- LOGO TAGGING --}}
        
            {{-- NOTIFICACIONES Y PERFIL --}}
            <div>

                {{-- NOTIFICACIONES --}}
                
                <div class="notification">

                    <a href="#" class="noti-enlace" id="notificacionEnlace">
                        <div class="noti">
                            <div class="alerta"></div>
                            <ion-icon name="notifications-outline" class="noti-icon"></ion-icon>
                        </div>
                    </a>

                    {{-- NOTIFICACIONES FLOTANTE --}}

                    <div class="notification-flotante" id="notificacionFlotante">
                        
                        <h6>Notificaciones</h6>

                        <div class="notification-card-scroll">

                            <a href="#" class="noti-card">
                                
                                <div class="photo">
                                    <img src="{{ asset('img/usuario.png') }}" alt="Usuario">
                                </div>

                                <div class="text">
                                    <p class="text-name">
                                        <span class="name">Alexis Gomez</span> comentó en:
                                    </p>
                                    <p class="text-post">
                                        "SEO: guía completa del posicionamiento en buscadores [2020]"
                                    </p>
                                </div>
                            </a>

                            <a href="#" class="noti-card">
                                
                                <div class="photo">
                                    <img src="{{ asset('img/usuario.png') }}" alt="Usuario">
                                </div>

                                <div class="text">
                                    <p class="text-name">
                                        <span class="name">Alexis Gomez</span> comentó en:
                                    </p>
                                    <p class="text-post">
                                        "SEO: guía completa del posicionamiento en buscadores [2020]"
                                    </p>
                                </div>
                            </a>

                        </div>

                        <a href="#" class="btn-comment">
                            Ver todos los comentarios
                        </a>

                    </div>

                    {{-- NOTIFICACIONES FLOTANTE --}}

                </div>

                {{-- NOTIFICACIONES --}}

                {{-- PERFIL --}}

                <div class="profile">

                    <a href="#" class="profile-enlace" id="perfilEnlace">
                        <img src="{{ asset('img/example-profile.jpg') }}" alt="Perfil">
                        <p class="profile-name">Julio Casas</p>
                        <ion-icon name="chevron-down-outline" class="profile-icon"></ion-icon>
                    </a>

                    {{-- PERFIL FLOTANTE --}}

                    <div class="profile-flotante" id="perfilFlotante">

                        <x-jet-dropdown-link href="{{ route('profile.show') }}" class="profile-edit">
                            {{ __('Ver perfil') }}
                        </x-jet-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link class="logout" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
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

    <div class="sidebar " id="sidebar">
        <nav class="nav">
            <div>
                {{-- LOGO E ICONO DE LA EMPRESA --}}

                <div class="sidebar-head">
                    <div class="brand">
                        <a href="{{ route("admin.home") }}">
                            <img src="{{ asset('img/Icono-de-Tagging.png') }}" class="icono-de-tagging" id="IconTagging" alt="Icono de Tagging">
                        </a>
                        <a href="{{ route("admin.home") }}">
                            <img src="{{ asset('img/Logo-de-Tagging.png') }}" class="logo-de-tagging" id="LogoTagging" alt="Logo de Tagging">
                        </a>
                    </div>
                </div>
                
                {{-- LOGO E ICONO DE LA EMPRESA --}}

                {{-- ENLACES DEL SIDEBAR--}}

                <div class="sidebar-nav">
                    <a href="{{ route('admin.home') }}" class="{{ request()->routeIs('admin.home') ? 'active' : '' }} nav-enlace">
                        <ion-icon name="speedometer-outline" class="nav-icon"></ion-icon>
                        <span>Dashboard</span>
                    </a>

                    <div class="entradas mb-5">
                        <a href="#" class="{{ request()->routeIs('') ? 'active' : '' }} nav-enlace" id="entradaLink">
                            <ion-icon name="receipt-outline" class="nav-icon"></ion-icon>
                            <span>Entradas</span>
                            <ion-icon name="chevron-down" class="chevron"></ion-icon>
                        </a>
                        <div class="sub-entradas" id="entradaDropdown">
                            <a href="#" class="sub-enlace" id="sub">
                                <ion-icon name="book-outline" class="sub-icon"></ion-icon>
                                <span>Artículos</span>
                            </a>
                            <a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.index') ? 'active-sub' : '' }} sub-enlace">
                                <ion-icon name="clipboard-outline" class="sub-icon"></ion-icon>
                                <span>Categorías</span>
                            </a>
                            <a href="#" class="sub-enlace">
                                <ion-icon name="pricetags-outline" class="sub-icon"></ion-icon>
                                <span>Etiquetas</span>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="{{ request()->routeIs('comentarios') ? 'active' : '' }} nav-enlace">
                        <ion-icon name="chatbubbles-outline" class="nav-icon"></ion-icon>
                        <span>Comentarios</span>
                    </a>

                    <a href="#" class="{{ request()->routeIs('roles') ? 'active' : '' }} nav-enlace">
                        <ion-icon name="person-outline" class="nav-icon"></ion-icon>
                        <span>Roles</span>
                    </a>

                    <a href="#" class="{{ request()->routeIs('usuarios') ? 'active' : '' }} nav-enlace">
                        <ion-icon name="people-outline" class="nav-icon"></ion-icon>
                        <span>Usuarios</span>
                    </a>
                </div>

                {{-- ENLACES DEL SIDEBAR--}}
            </div>
        </nav>
    </div>

    {{-- SIDEBAR --}}

    {{-- SIDEBAR DE NOTIFICACIONES --}}

    <div class="sidebar-noti" id="sidebarNoti">

        <div class="relative">
            <div class="bar-superior">
                <a href="#" class="close-noti" id="cerrarNoti1">
                    <ion-icon name="arrow-back-outline" class="bar-super-icon"></ion-icon>
                </a>
                <h6>Notificaciones</h6>
            </div>
            <div class="list-noti">
                
                <a href="#" class="noti-card">
                    <div class="photo">
                        <img src="img/usuario.png" alt="Usuario">
                    </div>
                    <div class="text">
                        <p class="text-name"><span class="name">Alexis Gomez</span> comentó en:</p>
                        <p class="text-post">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                    </div>
                </a>

                <a href="#" class="noti-card">
                    <div class="photo">
                        <img src="img/usuario.png" alt="Usuario">
                    </div>
                    <div class="text">
                        <p class="text-name"><span class="name">Alexis Gomez</span> comentó en:</p>
                        <p class="text-post">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                    </div>
                </a>

                <a href="#" class="noti-card">
                    <div class="photo">
                        <img src="img/usuario.png" alt="Usuario">
                    </div>
                    <div class="text">
                        <p class="text-name"><span class="name">Alexis Gomez</span> comentó en:</p>
                        <p class="text-post">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                    </div>
                </a>

                <a href="#" class="noti-card">
                    <div class="photo">
                        <img src="img/usuario.png" alt="Usuario">
                    </div>
                    <div class="text">
                        <p class="text-name"><span class="name">Alexis Gomez</span> comentó en:</p>
                        <p class="text-post">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                    </div>
                </a>

                <a href="#" class="noti-card">
                    <div class="photo">
                        <img src="img/usuario.png" alt="Usuario">
                    </div>
                    <div class="text">
                        <p class="text-name"><span class="name">Alexis Gomez</span> comentó en:</p>
                        <p class="text-post">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                    </div>
                </a>

                <a href="#" class="noti-card">
                    <div class="photo">
                        <img src="img/usuario.png" alt="Usuario">
                    </div>
                    <div class="text">
                        <p class="text-name"><span class="name">Alexis Gomez</span> comentó en:</p>
                        <p class="text-post">"SEO: guía completa del posicionamiento en buscadores [2020]"</p>
                    </div>
                </a>

            </div>
            <div class="btn-close">
                <a href="#" class="btn-close-noti" id="cerrarNoti2">Cerrar notificaciones</a>
            </div>
        </div>

    </div>

    {{-- SIDEBAR DE NOTIFICACIONES --}}

    {{-- BARRA DE NAVEGACION INFERIOR --}}

    <div class="bar-inferior">
        <a href="{{ route('admin.home') }}" class="{{ request()->routeIs('admin.home') ? 'active' : '' }} bar-inf-enlace">
            <div class="bar-inf-icon">
                <ion-icon name="speedometer-outline" class="bi-icon"></ion-icon>
            </div>
            <span class="binf-name">Dashboard</span>
        </a>

        <a href="#" class="bar-inf-enlace">
            <div class="bar-inf-icon">
                <ion-icon name="receipt-outline" class="bi-icon"></ion-icon>
            </div>
            <span class="binf-name">Entradas</span>
        </a>

        <a href="#" class="bar-inf-enlace">
            <div class="bar-inf-icon">
                <ion-icon name="chatbubbles-outline" class="bi-icon"></ion-icon>
            </div>
            <span class="binf-name">Comentarios</span>
        </a>

        <a href="#" class="bar-inf-enlace">
            <div class="bar-inf-icon">
                <ion-icon name="person-outline" class="bi-icon"></ion-icon>
            </div>
            <span class="binf-name">Roles</span>
        </a>

        <a href="#" class="bar-inf-enlace">
            <div class="bar-inf-icon">
                <ion-icon name="people-outline" class="bi-icon"></ion-icon>
            </div>
            <span class="binf-name">Usuarios</span>
        </a>
    </div>

    {{-- BARRA DE NAVEGACION INFERIOR --}}

    {{-- CONTENIDO --}}

    <div class="content">
        <div class="container">
            <h1 class="text-xl font-normal mb-6">Genial <span class="font-bold">@yield('title-content')</span></h1>
            <p class="font-medium">@yield('description-content')</p>
        </div>

        <div class="container">
            <div class="container-base">
                @yield('contenido')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>

