<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $transactions->id !!}</p>
</div>

<!-- Nom Service Field -->
<div class="form-group">
    {!! Form::label('nom_service', 'Nom Service:') !!}
    <p>{!! $transactions->nom_service !!}</p>
</div>

<!-- Somme Payee Field -->
<div class="form-group">
    {!! Form::label('somme_payee', 'Somme Payee:') !!}
    <p>{!! $transactions->somme_payee !!}</p>
</div>

<!-- Date Transaction Field -->
<div class="form-group">
    {!! Form::label('date_transaction', 'Date Transaction:') !!}
    <p>{!! $transactions->date_transaction !!}</p>
</div>

<!-- Solde Field -->
<div class="form-group">
    {!! Form::label('solde', 'Solde:') !!}
    <p>{!! $transactions->solde !!}</p>
</div>

<!-- Compteur Idcompteur Field -->
<div class="form-group">
    {!! Form::label('compteur_idCompteur', 'Compteur Idcompteur:') !!}
    <p>{!! $transactions->compteur_idCompteur !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $transactions->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $transactions->updated_at !!}</p>
</div>

