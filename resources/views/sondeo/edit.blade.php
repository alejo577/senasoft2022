@extends('layouts.administradorlayout')

@section('template_title')
    Update Sondeo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Sondeo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sondeos.update', $sondeo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('sondeo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
