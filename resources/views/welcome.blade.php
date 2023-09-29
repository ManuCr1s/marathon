@extends('template.template')
@section('principal')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-6 nav"></div>
            <div class="col-lg-4 col-md-6 main mt-1 p-5">
                    <x-forms.button/>
                    <hr>
                    <x-forms.login/>
            </div>
        </div>
    </div>
@endsection