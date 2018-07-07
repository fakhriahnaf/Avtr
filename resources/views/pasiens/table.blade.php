<table class="table table-responsive" id="pasiens-table">
    <thead>
        <th>Nama Pasien</th>
        <th>No Handphone</th>
        <th>Keluhan</th>
        <th>Obat</th>
        <th>Tanggal Masuk</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pasiens as $pasien)
        <tr>
            <td>{!! $pasien->Nama_pasien !!}</td>
            <td>{!! $pasien->No_handphone !!}</td>
            <td>{!! $pasien->Keluhan !!}</td>
            <td>{!! $pasien->Obat !!}</td>
            <td>{!! $pasien->tanggal_masuk !!}</td>
            <td>
                {!! Form::open(['route' => ['pasiens.destroy', $pasien->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pasiens.show', [$pasien->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pasiens.edit', [$pasien->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>