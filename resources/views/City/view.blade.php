@extends('layouts.header')
@section('title','View Categories')
@section('content')
<div class="container-fluid">
    
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-eye"></i>
                    View Cities <a href="{{ url('/admin/cities/export/1') }}" class="badge badge-danger" >
                        <i class="fas fa-plus"></i>
                        Export Active
                    </a> <a href="{{ url('/admin/cities/export/0') }}" class="badge badge-danger" >
                        <i class="fas fa-plus"></i>
                        Export Inactive
                    </a>
                     <form method="POST" action="{{ url('/admin/cities/view/search') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-lg-6 col-md-12">
                                <input type="text" name="cname" class="form-control" placeholder="Enter City" required>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <button type="submit" class="btn btn-outline-primary">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                   
                    
                    @if ( Session::has('flash_message') )
                        <div class="alert alert-{{ Session::get('flash_type') }} alert-dismissible fade show" role="alert">
                            <b>{{ Session::get('flash_message') }}</b>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
                   
                    @if($cities)
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-striped table-hover datatable datatable-User">
                                <thead>
                                    <tr>
                                         <th><input type="checkbox" class="check_all"/></th>
                                        <th>Country Code</th>
                                        <th>Name</th>
                                        <th>State</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cities as $item)
                                        <tr>
                                            <td><input type="checkbox" class="custom_name" name="cities[]" value="{{$item->id}}" multiple></td>
                                            <td>{{$item->country_code}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->state->name}}</td>
                                            <td>
                                                 @if($item->active)
                                                    <a href="/admin/cities/change-status/{{ $item->id }}" onclick="return confirm('Are you sure you want to change status of this City?')" class="badge badge-success">Active</a>
                                                @else
                                                    <a href="/admin/cities/change-status/{{ $item->id }}" onclick="return confirm('Are you sure you want to change status of this City?')" class="badge badge-danger">Inactive</a>
                                                @endif    

                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                    <tr>
                                       <td colspan="5"> {{$cities->links()}}</td> 
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                       
                    @else
                        <h6>No Cities Found.</h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
