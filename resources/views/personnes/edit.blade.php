@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Personnes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($personnes, ['route' => ['personnes.update', $personnes->id], 'method' => 'patch']) !!}

                        @include('personnes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection