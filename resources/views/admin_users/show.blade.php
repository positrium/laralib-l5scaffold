@extends('layout')
@section('header')
    <div class="page-header">
        <h1>AdminUser / Show #{{$admin_user->id}}</h1>
    </div>
@endsection

@section('content')
    <div class="well well-sm">
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-link" href="{{ route('admin_users.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
            </div>
            <div class="col-md-6">
                 <a class="btn btn-sm btn-warning pull-right" href="{{ route('admin_users.edit', $admin_user->id) }}">
                    <i class="glyphicon glyphicon-edit"></i> Edit
                </a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">

            <label>Name</label>
<p>
	{{ $admin_user->name }}
</p> <label>Mail</label>
<p>
	{{ $admin_user->mail }}
</p>

        </div>

    </div>
@endsection
