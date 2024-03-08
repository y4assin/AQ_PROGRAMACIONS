@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Programacion
@endsection

@section('content')
    <br>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Programacion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('programacions.update', $programacion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('programacion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
