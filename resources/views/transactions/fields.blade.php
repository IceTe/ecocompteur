<!-- Nom Service Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom_service', 'Nom Service:') !!}
    {!! Form::text('nom_service', null, ['class' => 'form-control']) !!}
</div>

<!-- Somme Payee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('somme_payee', 'Somme Payee:') !!}
    {!! Form::text('somme_payee', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Transaction Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_transaction', 'Date Transaction:') !!}
    {!! Form::date('date_transaction', null, ['class' => 'form-control']) !!}
</div>

<!-- Solde Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solde', 'Solde:') !!}
    {!! Form::text('solde', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('transactions.index') !!}" class="btn btn-default">Cancel</a>
</div>
