<div class="left-side-menu left-side-menu-detached" style="margin-top: 99px; position: fixed">
    <div class="leftbar-user">
        <a href="javascript: void(0);">
            <img src="{{ asset('img/placeholder.png') }}" alt="user-image" height="60" class="rounded-circle shadow-sm">
                 <span class="leftbar-user-name">{{ Auth::user()->name.' '.Auth::user()->apellido }}</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="metismenu side-nav side-nav-light">

        <li class="side-nav-title side-nav-item">Navegacion</li>

        <li class="side-nav-item active">
            <a href="{{ url('usuarios') }}" class="side-nav-link">
                <i class="dripicons-user-group"></i>
                <span>Lista Usuario</span>
            </a>
        </li>

        <li class="side-nav-item ">
            <a href="javascript: void(0);" class="side-nav-link ">
                <i class="dripicons-network-1"></i>
                <span>Pedidos</span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li class = "">
                    <a href="{{ url('order') }}">Lista Pedidos</a>
                </li>
                <li class = "">
                    <a href="{{ route('orders_detail.index')}}">Detalles Pedidos</a>
                </li>
            </ul>
        </li>
    

        <li class="side-nav-item ">
            <a href="{{ url('file_PDF') }}" class="side-nav-link">
                <i class="dripicons-box"></i>
                <span>Agregar PDF</span>
            </a>
        </li>   
    </ul>
</div>