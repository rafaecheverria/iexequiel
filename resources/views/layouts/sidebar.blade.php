<div class="sidebar" data-color="purple" data-image="material-bootstrap/assets/img/sidebar-4.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="dashboard.html">
                            <i class="material-icons">dashboard</i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/personas')}}">
                            <i class="material-icons">person</i>
                            <p>Personas</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/aventuras')}}">
                            <i class="material-icons">content_paste</i>
                            <p>Aventuras</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/historial')}}">
                            <i class="material-icons">library_books</i>
                            <p>Historial</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>