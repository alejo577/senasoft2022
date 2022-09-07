@extends('layouts.appx')




    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Sondeo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('sondeos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('sondeo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
