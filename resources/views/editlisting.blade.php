@extends('layouts.app')


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing <span class="float-right"><a class="float-right btn btn-primary btn-sm" href={{ url('/dashboard') }}>Go Back</a></span></div>



                    <div class="card">
                        <div class="card-body">
                            {{ Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) }}

                            {{ Form::bsText('name',$listing->name,['placeholder' => 'Company Name']) }}
                            {{ Form::bsText('email',$listing->email,['placeholder' => 'Contact E-mail']) }}
                            {{ Form::bsText('website',$listing->website,['placeholder' => 'Company Website']) }}
                            {{ Form::bsText('phone',$listing->phone,['placeholder' => 'Contact Phone']) }}
                            {{ Form::bsText('address',$listing->address,['placeholder' => 'Business Address']) }}
                            {{ Form::bsTextArea('bio',$listing->bio,['placeholder' => 'About This Business']) }}
                            {{ Form::hidden('_method', 'PUT')}}
                            {{ Form::bsSubmit('Submit') }}

                            {{ Form::close() }}
                        </div>
                    </div>


                </div>
            </div>
        </div>

@endsection