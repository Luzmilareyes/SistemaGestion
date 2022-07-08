@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    

                    

                    @if (Route::has('login'))
                            
                         <a class="nav-link" href="{{ route('establecimientos.create') }}">{{ __('Registrar nuevo Destino Turistico') }}</a>
                    
                    @endif
                    
                    @if (Route::has('login'))
                                
                    <a class="nav-link" href="{{ route('eventos.create') }}">{{ __('Crear un evento nuevo') }}</a>
                            
                     @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
