@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('admin.add_new_portfolio')</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="panel-body">
                    <form action="{{ route('store_portfolio') }}" method="POST"  enctype="multipart/form-data"  autocomplete="on" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2">@lang('admin.namefield')</label>
                            <div class="col-sm-10">
                                <input type="text" name="name"   id="name" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">@lang('admin.categories')</label>
                            <div class="col-sm-10">
                                <select name="category_id"  class="form-control">
                                    
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id}}">{{ $category->name}}</option>
                                    @endforeach
                                </select> 
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="control-label col-sm-2">@lang('admin.filefield')</label>
                            <div class="col-sm-10">
                                <input type="file" name="fileattach"   class="form-control">
                            </div>
                        </div> 
 
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-default" value="@lang('admin.save')" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





