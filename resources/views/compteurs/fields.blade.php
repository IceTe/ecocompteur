<!-- Numero Compteur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_compteur', 'Numero Compteur:') !!}
    {!! Form::text('numero_compteur', null, ['class' => 'form-control']) !!}
</div>

<!-- Adresse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse', 'Adresse:') !!}
    {!! Form::text('adresse', null, ['class' => 'form-control']) !!}
</div>

<!-- Alloue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alloue', 'Alloue:') !!}
    {!! Form::number('alloue', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Creation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_creation', 'Date Creation:') !!}
    {!! Form::date('date_creation', null, ['class' => 'form-control']) !!}
</div>

<!-- Ip Adresse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip_adresse', 'Ip Adresse:') !!}
    {!! Form::text('ip_adresse', null, ['class' => 'form-control']) !!}
</div>

<!-- Adresse Geolocalisation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse_geolocalisation', 'Adresse Geolocalisation:') !!}
    {!! Form::text('adresse_geolocalisation', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_telephone', 'Numero Telephone:') !!}
    {!! Form::text('numero_telephone', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('compteurs.index') !!}" class="btn btn-default">Cancel</a>
</div>
