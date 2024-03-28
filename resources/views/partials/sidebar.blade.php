<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            
            <div class="pcoded-navigation-label" id="menu">Menu</div>
            <ul class="pcoded-item pcoded-left-item">

                <li class="{{ request()->is('contact*') == true ? 'active' : '' }}">
                    <a href="{{ route('contact.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-menu"></i>
                        </span>
                        <span class="pcoded-mtext">Contacts</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
