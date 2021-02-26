@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Contacts') }}</div>

                <div class="card-body">
                   
                    {!! Form::open(array('route'=>'contact.store')) !!}
                       
                         <div class="Form-group">
                             {!! Form::label('Name','Enter Name') !!}
                             {!! Form::text('name',null,['class'=>'form-control']) !!}
                         </div>
                         <div class="Form-group">
                             {!! Form::label('Phone','Enter Number') !!}
                             {!! Form::text('phone',null,['class'=>'form-control']) !!}
                         </div>
                         <div class="Form-group">
                             {!! Form::label('Address','Enter Address') !!}
                             {!! Form::text('address',null,['class'=>'form-control']) !!}
                         </div>
                         <div class="Form-group">
                             {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                         </div>
                    {!! Form::close() !!}
                </div>
            </div>
         
        </div>
    </div>
</div>
@endsection
