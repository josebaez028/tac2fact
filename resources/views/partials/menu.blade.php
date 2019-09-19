<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('registro_access')
                <li class="nav-item">
                    <a href="{{ route("admin.registros.index") }}" class="nav-link {{ request()->is('admin/registros') || request()->is('admin/registros/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.registro.title') }}
                    </a>
                </li>
            @endcan
            @can('contacto_access')
                <li class="nav-item">
                    <a href="{{ route("admin.contactos.index") }}" class="nav-link {{ request()->is('admin/contactos') || request()->is('admin/contactos/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.contacto.title') }}
                    </a>
                </li>
            @endcan
            @can('task_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-list nav-icon">

                        </i>
                        {{ trans('cruds.taskManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('task_status_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.task-statuses.index") }}" class="nav-link {{ request()->is('admin/task-statuses') || request()->is('admin/task-statuses/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-server nav-icon">

                                    </i>
                                    {{ trans('cruds.taskStatus.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('task_tag_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.task-tags.index") }}" class="nav-link {{ request()->is('admin/task-tags') || request()->is('admin/task-tags/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-server nav-icon">

                                    </i>
                                    {{ trans('cruds.taskTag.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('task_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.tasks.index") }}" class="nav-link {{ request()->is('admin/tasks') || request()->is('admin/tasks/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.task.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('tasks_calendar_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.tasks-calendars.index") }}" class="nav-link {{ request()->is('admin/tasks-calendars') || request()->is('admin/tasks-calendars/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-calendar nav-icon">

                                    </i>
                                    {{ trans('cruds.tasksCalendar.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @php($unread = \App\QaTopic::unreadCount())
                <li class="nav-item">
                    <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is('admin/messenger') || request()->is('admin/messenger/*') ? 'active' : '' }} nav-link">
                        <i class="nav-icon fa-fw fa fa-envelope">

                        </i>
                        <span>{{ trans('global.messages') }}</span>
                        @if($unread > 0)
                            <strong>( {{ $unread }} )</strong>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="nav-icon fas fa-fw fa-sign-out-alt">

                        </i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>