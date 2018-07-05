<!-- Energie Solaire Field -->
<div class="form-group col-sm-6">
    {!! Form::label('energie_solaire', 'Energie Solaire:') !!}
    {!! Form::text('energie_solaire', null, ['class' => 'form-control']) !!}
</div>

<!-- Energie Senelec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('energie_senelec', 'Energie Senelec:') !!}
    {!! Form::text('energie_senelec', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Envoie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_envoie', 'Date Envoie:') !!}
    {!! Form::date('date_envoie', null, ['class' => 'form-control']) !!}
</div>

<!-- Tension Min Senelec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tension_min_senelec', 'Tension Min Senelec:') !!}
    {!! Form::text('tension_min_senelec', null, ['class' => 'form-control']) !!}
</div>

<!-- Tension Max Senelec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tension_max_senelec', 'Tension Max Senelec:') !!}
    {!! Form::text('tension_max_senelec', null, ['class' => 'form-control']) !!}
</div>

<!-- Tension Max Solaire Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tension_max_solaire', 'Tension Max Solaire:') !!}
    {!! Form::text('tension_max_solaire', null, ['class' => 'form-control']) !!}
</div>

<!-- Courant Min Senelec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('courant_min_senelec', 'Courant Min Senelec:') !!}
    {!! Form::text('courant_min_senelec', null, ['class' => 'form-control']) !!}
</div>

<!-- Courant Min Solaire Field -->
<div class="form-group col-sm-6">
    {!! Form::label('courant_min_solaire', 'Courant Min Solaire:') !!}
    {!! Form::text('courant_min_solaire', null, ['class' => 'form-control']) !!}
</div>

<!-- Courant Max Senelec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('courant_max_senelec', 'Courant Max Senelec:') !!}
    {!! Form::text('courant_max_senelec', null, ['class' => 'form-control']) !!}
</div>

<!-- Courant Max Solaire Field -->
<div class="form-group col-sm-6">
    {!! Form::label('courant_max_solaire', 'Courant Max Solaire:') !!}
    {!! Form::text('courant_max_solaire', null, ['class' => 'form-control']) !!}
</div>

<!-- Puissance Min Senelec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puissance_min_senelec', 'Puissance Min Senelec:') !!}
    {!! Form::text('puissance_min_senelec', null, ['class' => 'form-control']) !!}
</div>

<!-- Puissance Min Solaire Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puissance_min_solaire', 'Puissance Min Solaire:') !!}
    {!! Form::text('puissance_min_solaire', null, ['class' => 'form-control']) !!}
</div>

<!-- Puissqnce Max Senelec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puissqnce_max_senelec', 'Puissqnce Max Senelec:') !!}
    {!! Form::text('puissqnce_max_senelec', null, ['class' => 'form-control']) !!}
</div>

<!-- Puissance Max Solaire Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puissance_max_solaire', 'Puissance Max Solaire:') !!}
    {!! Form::text('puissance_max_solaire', null, ['class' => 'form-control']) !!}
</div>

<!-- Tension Inst Senelec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tension_inst_senelec', 'Tension Inst Senelec:') !!}
    {!! Form::text('tension_inst_senelec', null, ['class' => 'form-control']) !!}
</div>

<!-- Tension Inst Solaire Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tension_inst_solaire', 'Tension Inst Solaire:') !!}
    {!! Form::text('tension_inst_solaire', null, ['class' => 'form-control']) !!}
</div>

<!-- Courant Inst Senelec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('courant_inst_senelec', 'Courant Inst Senelec:') !!}
    {!! Form::text('courant_inst_senelec', null, ['class' => 'form-control']) !!}
</div>

<!-- Courant Inst Solaire Field -->
<div class="form-group col-sm-6">
    {!! Form::label('courant_inst_solaire', 'Courant Inst Solaire:') !!}
    {!! Form::text('courant_inst_solaire', null, ['class' => 'form-control']) !!}
</div>

<!-- Puissance Inst Senelec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puissance_inst_senelec', 'Puissance Inst Senelec:') !!}
    {!! Form::text('puissance_inst_senelec', null, ['class' => 'form-control']) !!}
</div>

<!-- Puissance Inst Solaire Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puissance_inst_solaire', 'Puissance Inst Solaire:') !!}
    {!! Form::text('puissance_inst_solaire', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('energies.index') !!}" class="btn btn-default">Cancel</a>
</div>
