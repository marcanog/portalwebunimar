<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
        <img src="{{URL::asset('image/logo-unimar-127.png')}}" alt="UNIMAR logo" class="brand-image img-circle" style="opacity: .8">
        <span class="brand-text font-weight-light"><img class="portal-title" src="{{URL::asset('image/texto-unimar.jpg')}}"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @auth
                @if(auth()->user()->is_admin())
                <li class="nav-item" id="usuarios">
                    <a href="{{url('/admin/users')}}" class="nav-link" id="btn-nav">
                        <i class="fas fa-users nav-icon grape" id="navicon"></i>
                        <p>
                            Usuarios
                        </p>
                    </a>
                </li>
                @endif
                @if(auth()->user()->is_content())
                <li class="nav-item" id="notificaciones">
                    <a href="{{url('/admin/notifications')}}" class="nav-link" id="btn-nav">
                        <i class="fas fa-bell nav-icon grape" id="navicon"></i>
                        <p>
                            Notificaciones
                        </p>
                    </a>
                </li>
                <li class="nav-item" id="publicaciones">
                    <a href="#" class="nav-link" id="btn-nav">
                        <i class="fas fa-book-open nav-icon grape"></i>
                        <p>
                            Publicaciones
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!--<li class="nav-item" id="eventos">
                            <a href="{{url('/admin/boards')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Cartelera</p>
                            </a>
                        </li>-->
                        <li class="nav-item" id="noticias">
                            <a href="{{url('/admin/news')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Noticias</p>
                            </a>
                        </li>
                        <li class="nav-item" id="eventos">
                            <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Eventos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" id="documentos">
                    <a href="#" class="nav-link" id="btn-nav">
                        <i class="fas fa-file-alt nav-icon grape"></i>
                        <p>
                            Documentos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="regulaciones">
                                <a href="{{url('/admin/documents')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Regulaciones</p>
                            </a>
                        </li>
                        <li class="nav-item" id="pensum-y-lineamientos">
                            <a href="{{url('/admin/career_documents')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Pénsum y Lineamientos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if((auth()->user()->is_employee()))
                <li class="nav-item" id="empleados">
                    <a href="#" class="nav-link" id="btn-nav">
                        <i class="fas fa-id-badge nav-icon grape"></i>
                        <p>
                            Empleados
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="notificaciones-empleados">
                            <a href="{{url('/admin/employee/notifications')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Notificaciones</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if((auth()->user()->is_student()))
                <li class="nav-item" id="estudiantes">
                    <a href="#" class="nav-link" id="btn-nav">
                        <i class="fas fa-user nav-icon grape" id="navicon"></i>
                        <p>
                            Estudiantes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="notas">
                            <a href="{{url('/admin/student/grades')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Notas</p>
                            </a>
                        </li>
                        <li class="nav-item" id="materias-cursadas">
                            <a href="{{url('/admin/student/record')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Materias Cursadas</p>
                            </a>
                        </li>
                        <li class="nav-item" id="citas-de-inscripcion">
                            <a href="{{url('/admin/student/inscriptions')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Citas de Inscripción</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://www1.unimar.edu.ve/unimarportal/horarios/consulta_horarios1.php" class="nav-link" id="btn-nav" target="_blank">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Horarios</p>
                                </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://pagonline.unimar.edu.ve/" class="nav-link" id="btn-nav" target="_blank">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Pagos</p>
                                </a>
                        </li>
                        <li class="nav-item" id="facturas">
                            <a href="{{url('/admin/student/receipt')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Facturas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if((auth()->user()->is_teacher()))
                <li class="nav-item" id="profesores">
                    <a href="#" class="nav-link" id="btn-nav">
                        <i class="fas fa-chalkboard-teacher nav-icon grape"></i>
                        <p>
                            Profesores
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="notificaciones-profesores">
                            <a href="{{url('/admin/teacher/notifications')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Notificaciones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://www1.unimar.edu.ve/unimarportal/profesores/acceso.php" target="_blank" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Registros de Notas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="nav-item" id="cuenta">
                    <a href="#" class="nav-link" id="btn-nav">
                        <i class="fas fa-id-badge nav-icon grape"></i>
                        <p>
                            Cuenta
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="inicio">
                            <a href="{{ url('/admin') }}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li class="nav-item" id="perfil">
                            <a href="{{url('/admin/profile')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Perfil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/logout') }}" class="nav-link" id="btn-nav">
                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                <p>Cerrar Sesión</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>