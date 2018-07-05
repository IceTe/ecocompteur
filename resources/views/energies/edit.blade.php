@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Energies
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($energies, ['route' => ['energies.update', $energies->id], 'method' => 'patch']) !!}

                        @include('energies.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection