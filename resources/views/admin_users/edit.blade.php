@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> AdminUser / Edit #{{$admin_user->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin_users.update', $admin_user->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
	<label for="name-field">Name</label>
	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $admin_user->name ) }}" />
</div> <div class="form-group">
	<label for="mail-field">Mail</label>
	<input class="form-control" type="text" name="mail" id="mail-field" value="{{ old('mail', $admin_user->mail ) }}" />
</div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('admin_users.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection