<!-- Nama Pasien Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nama_pasien', 'Nama Pasien:') !!}
    {!! Form::text('Nama_pasien', null, ['class' => 'form-control']) !!}
</div>

<!-- No Handphone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('No_handphone', 'No Handphone:') !!}
    {!! Form::number('No_handphone', null, ['class' => 'form-control']) !!}
</div>

<!-- Keluhan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Keluhan', 'Keluhan:') !!}
    {!! Form::text('Keluhan', null, ['class' => 'form-control']) !!}
</div>

<!-- Obat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Obat', 'Obat:') !!}
    {!! Form::text('Obat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pasiens.index') !!}" class="btn btn-default">Cancel</a>
</div>
