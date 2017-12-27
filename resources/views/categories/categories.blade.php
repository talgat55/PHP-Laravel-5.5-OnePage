@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> @lang('admin.categories') </div>

                <div class="panel-body">
                    <table class="table table-hover">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                            @foreach ($categories as $category)
                            <tr> 
                                <td >{{ $category->id }}</td>
                                <td >{{ $category->name }}</td>   
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            @lang('admin.action')
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li><a href="{{ route('edit_category',$category->id ) }}">@lang('admin.edit')</a></li>
                                        <li><a href="{{ route('delete_category',$category->id ) }}">@lang('admin.delete')</a></li>
                                        </ul>
                                    </div>
                                </td> 
                            </tr>
                            @endforeach 

                    </table>
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
        <a href="{{ route('new_category') }}" style="text-align: right" class="btn btn-primary">
            @lang('admin.create')
        </a> 

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