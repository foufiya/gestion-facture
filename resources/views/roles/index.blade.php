@extends('layouts.master')
@section('content')
    @can('role_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('roles.create') }}">
                    Add Role
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.role.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Role">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                id </th>
                            <th>
                                title </th>
                            <th>
                                permissions </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $key => $role)
                            <tr data-entry-id="{{ $role->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $role->id ?? '' }}
                                </td>
                                <td>
                                    {{ $role->title ?? '' }}
                                </td>
                                <td>
                                    @foreach ($role->permissions as $key => $item)
                                        <span class="badge badge-info">{{ $item->title }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    @can('role_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('roles.show', $role->id) }}">
                                            View
                                        </a>
                                    @endcan

                                    @can('role_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('roles.edit', $role->id) }}">
                                            Edit </a>
                                    @endcan

                                    @can('role_delete')
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                            onsubmit="return confirm('Are You Sure');"" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger"
                                                value="{{ trans('global.delete') }}">
                                        </form>
                                    @endcan

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
