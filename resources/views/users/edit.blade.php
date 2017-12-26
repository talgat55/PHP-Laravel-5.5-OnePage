@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('admin.edituser')</div>

                <div class="panel-body">
                    <form action="{{ route('update_user',  $user->id  ) }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2">@lang('admin.namefield')</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ $user->name }}" id="name" class="form-control">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-sm-2">@lang('admin.emailfield')</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" id="email"  value="{{ $user->email }}" class="form-control">
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2">@lang('admin.newpasswordfield')</label>
                            <div class="col-sm-10">
                                <input type="password" name="newpassword" id="newpassword" class="form-control">
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





