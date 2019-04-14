@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listing <span class="float-right"><a class="float-right btn btn-primary btn-sm" href={{ url('/dashboard') }}>Go Back</a></span></div>



                    <div class="card">
                        <div class="card-body">
                            {{ Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) }}

                            {{ Form::bsText('name','',['placeholder' => 'Company Name']) }}
                            {{ Form::bsText('email','',['placeholder' => 'Contact E-mail']) }}
                            {{ Form::bsText('website','',['placeholder' => 'Company Website']) }}
                            {{ Form::bsText('phone','',['placeholder' => 'Contact Phone']) }}
                            {{ Form::bsText('address','',['placeholder' => 'Business Address']) }}
                            {{ Form::bsTextArea('bio','',['placeholder' => 'About This Business']) }}
                            {{ Form::bsSubmit('Submit') }}

                            {{ Form::close() }}
                        </div>
                    </div>


                </div>
            </div>
        </div>

@endsection