@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('admin.editcategory')</div>

                <div class="panel-body">
                    <form action="{{ route('update_category',  $category->id  ) }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2">@lang('admin.namefield')</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ $category->name }}" id="name" class="form-control">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-sm-2">@lang('admin.slugfield')</label>
                            <div class="col-sm-10">
                                <input type="text" name="slug" id="slug"  value="{{ $category->slug }}" class="form-control">
                            </div>
                        </div> 
 
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-default" value="@lang('admin.updatebutton')" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





