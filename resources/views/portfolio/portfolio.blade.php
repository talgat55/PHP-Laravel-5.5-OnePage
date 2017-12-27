@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> @lang('admin.portfolio') </div>

                <div class="panel-body">
                    <table class="table table-hover">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                            @foreach ($portfolio as $item)
                            <tr> 
                                <td >{{ $item->id }}</td>
                                <td >{{ $item->name }}</td> 
                                <td >
                                    <img src="/storage/portfolio/{{ $item->file }}" style="height: 150px;">
                                    
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            @lang('admin.action')
                                        <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li><a href="{{ route('edit_potfolio',$item->id ) }}">@lang('admin.edit')</a></li>
                                        <li><a href="{{ route('delete_potfolio',$item->id ) }}">@lang('admin.delete')</a></li>
                                        </ul>
                                    </div>
                                </td> 
                            </tr>
                            @endforeach 

                    </table>
                    {{ $portfolio->links() }}
                </div>
            </div>
        </div>
        <a href="{{ route('create_potfolio') }}" style="text-align: right" class="btn btn-primary">
            @lang('admin.add_new_portfolio')
        </a>
        <a href="{{ route('categories') }}" style="text-align: right" class="btn btn-primary">
            @lang('admin.categories')
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