<li class="{{ Request::is('daftarPasiens*') ? 'active' : '' }}">
    <a href="{!! route('daftarPasiens.index') !!}"><i class="fa fa-edit"></i><span>Daftar_pasiens</span></a>
</li>

<li class="{{ Request::is('pasiens*') ? 'active' : '' }}">
    <a href="{!! route('pasiens.index') !!}"><i class="fa fa-edit"></i><span>Pasiens</span></a>
</li>

<li class="{{ Request::is('pasiens*') ? 'active' : '' }}">
    <a href="{!! route('pasiens.index') !!}"><i class="fa fa-edit"></i><span>Pasiens</span></a>
</li>

