<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pasien->id !!}</p>
</div>

<!-- Nama Pasien Field -->
<div class="form-group">
    {!! Form::label('Nama_pasien', 'Nama Pasien:') !!}
    <p>{!! $pasien->Nama_pasien !!}</p>
</div>

<!-- No Handphone Field -->
<div class="form-group">
    {!! Form::label('No_handphone', 'No Handphone:') !!}
    <p>{!! $pasien->No_handphone !!}</p>
</div>

<!-- Keluhan Field -->
<div class="form-group">
    {!! Form::label('Keluhan', 'Keluhan:') !!}
    <p>{!! $pasien->Keluhan !!}</p>
</div>

<!-- Obat Field -->
<div class="form-group">
    {!! Form::label('Obat', 'Obat:') !!}
    <p>{!! $pasien->Obat !!}</p>
</div>

<!-- Tanggal Masuk Field -->
<div class="form-group">
    {!! Form::label('tanggal_masuk', 'Tanggal Masuk:') !!}
    <p>{!! $pasien->tanggal_masuk !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pasien->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pasien->updated_at !!}</p>
</div>

