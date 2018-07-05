<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Naissance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_naissance', 'Date Naissance:') !!}
    {!! Form::date('date_naissance', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age', 'Age:') !!}
    {!! Form::text('age', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_telephone', 'Numero Telephone:') !!}
    {!! Form::text('numero_telephone', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Enregistrement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_enregistrement', 'Date Enregistrement:') !!}
    {!! Form::date('date_enregistrement', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('personnes.index') !!}" class="btn btn-default">Cancel</a>
</div>
