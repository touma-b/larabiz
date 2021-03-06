@extends('layouts.app')

@section('content')

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard <span class="float-right"><a class="btn btn-success btn-sm" href="listings/create">Add Listing</a></span></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <h3>Your Listing</h3>
                            <div class="card">
                                <div class="card-body">

                                    @if(count($listings) > 0)
                                        <table class="table table-striped">
                                            <tr>Company</tr>
                                            <tr></tr>
                                            <tr></tr>
                                            @foreach($listings as $listing)
                                                <tr>
                                                    <td> {{$listing->name}} </td>
                                                    <td> <a href="listings/{{$listing->id}}/edit" class="btn btn-primary float-right">Edit</a> </td>
                                                    <td>
                                                        {{ Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST', 'onsubmit' => 'return confirm("Are you sure?")']) }}
                                                        {{ Form::hidden('_method','DELETE') }}
                                                        {{ Form::bsSubmit('Delete',['class' => 'btn btn-danger']) }}

                                                        {{ Form::close() }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>

                                    @endif
                                </div>
                            </div>


                    </div>
                </div>
            </div>
        </div>

@endsection
