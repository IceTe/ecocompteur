

<li class="{{ Request::is('personnes*') ? 'active' : '' }}">
    <a href="{!! url('personnes') !!}"><i class="fa fa-edit"></i><span>Liste personnes</span></a>
</li>

<li class="{{ Request::is('compteurs*') ? 'active' : '' }}">
    <a href="{!! url('compteurs') !!}"><i class="fa fa-edit"></i><span>Liste compteurs</span></a>
</li>
@can('isSuperAdmin')
<li class="{{ Request::is('*') ? 'active' : '' }}">
    <a href="{!! url('') !!}"><i class="fa fa-edit"></i><span>Liste administrateurs</span></a>
</li>
 @endcan