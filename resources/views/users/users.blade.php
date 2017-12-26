@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> @lang('admin.dashboard') </div>

                <div class="panel-body">
                    <table class="table table-hover">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                            @foreach ($users as $user)
                            <tr> 
                                <td >{{ $user->id }}</td>
                                <td >{{ $user->name }}</td> 
                                <td >{{ $user->email }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            @lang('admin.action')
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li><a href="{{ route('edit_user',$user->id ) }}">@lang('admin.edit')</a></li>
                                        <li><a href="{{ route('delete_user',$user->id ) }}">@lang('admin.delete')</a></li>
                                        </ul>
                                    </div>
                                </td> 
                            </tr>
                            @endforeach 
                    </table>
                </div>
            </div>
        </div>
        <a href="{{ route('create_user') }}" style="text-align: right" class="btn btn-primary">@lang('admin.add_new_user')</a>
    </div>
</div>
<script type="text/javascript">
    var s = document.querySelector('.alert').style;  

    (function fade() {     
        s.display="none";  

        setTimeout(fade,5000);
    })();

</script>
@endsection