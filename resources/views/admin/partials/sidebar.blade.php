<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item active" href=""><i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i>
                <span class="app-menu__label">Pages</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="{{route ('calender')}}"><i
                            class="icon fa fa-circle-o"></i>Calender</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{route('invoice')}}" target="_blank" rel="noopener noreferrer"><i
                            class="icon fa fa-circle-o"></i> Invoice</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{route('mailbox')}}"><i class="icon fa fa-circle-o"></i> Mailbox</a>
                </li>
                <li>
                    <a class="treeview-item" href="{{route('pageuser')}}"><i class="icon fa fa-circle-o"></i>Page
                        User</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-cogs"></i>
                <span class="app-menu__label">Settings</span>
            </a>
        </li>
    </ul>
</aside>