@extends('layouts.administradorlayout')

@section('template_title')
    {{ $sondeo->name ?? 'Show Sondeo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sondeo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sondeos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Tema:</strong>
                            {{ $sondeo->Tema }}
                        </div>
                        <div class="form-group">
                            <strong>Pregunta:</strong>
                            {{ $sondeo->Pregunta }}
                        </div>
                        <div class="form-group">
                            <strong>Poblacion:</strong>
                            {{ $sondeo->Poblacion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $sondeo->Imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
