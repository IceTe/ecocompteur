@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Compteurs
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($compteurs, ['route' => ['compteurs.update', $compteurs->id], 'method' => 'patch']) !!}

                        @include('compteurs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection