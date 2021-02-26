@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(Session::has('message'))
            <div class="alert alert-succes"> {{ Session::get('message') }} </div>
        @endif
            <div class="card">
                
                <div class="card-header">{{ __('Contacts') }}
                
                <div class="col-md-4 text-right">
                    <form action={{ route("contact_search") }} method="get">
                       <div class="input-group">
                          <input type="search" name="search" class="form-control" placeholder="Search...">
                          <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Search
                            </button>
                          </span>
                       </div>
                    </form>
                </div>

                </div>

                <div class="card-body">
                <table class="table">
                <tr>
                      <th>Names</th>
                      <th>Action</th>
                </tr>
                @foreach($contacts as $contact)
                <tr>
                  <td>{{link_to_route('contact.show',$contact->name,[$contact->id]) }}</td>
                  <td>
                  {!! Form::open(array('route'=>['contact.destroy',$contact->id], 'method'=>'DELETE')) !!}

                  {{ link_to_route('contact.edit','Edit',[$contact->id],['class'=>'btn btn-primary'])}}
                      |
                        {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                      {!! Form::close() !!}
                </tr> 
                @endforeach
                </table>
                
               
                </div>
            </div>
            {{ link_to_route('contact.create','Add new Contact',null,['class'=>'btn btn-success'])}}
        </div>
    </div>
</div>
@endsection
