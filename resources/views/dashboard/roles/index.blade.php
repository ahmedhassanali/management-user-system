@extends('dashboard.layouts.master');

@section('title', 'dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body my-5">
                        <div class="container">
                            <div class="row justify-content-center align-item-center">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header pb-0">
                                            <div class="col-12 d-flex justify-content-between ">
                                                <h3>All Roles</h3>
                                                @can('create_roles')
                                                    <a class="btn btn-primary my-2"
                                                        href="{{ route('roles.create') }}">@lang('site.add_role')</a>
                                                @endcan
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive hoverable-table">
                                                <table class="table table-hover" id="example1" data-page-length='50'
                                                    style=" text-align: center;">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-10p border-bottom-0">#</th>
                                                            <th class="wd-15p border-bottom-0">@lang('site.role_name')</th>
                                                            <th class="wd-15p border-bottom-0">@lang('site.permissions')</th>
                                                            <th class="wd-10p border-bottom-0">@lang('site.actions')</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($roles as $key => $role)
                                                            <tr >
                                                                <td>{{ $key + 1 }}</td>
                                                                <td><label>{{ $role->name }}</label></td>
                                                                <td class="col-8">
                                                                    @foreach ($role->permissions as $permission)
                                                                        <label>@lang( 'site.'.$permission->name )/</label>
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @can('update_roles')
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-info" title="update"><i
                                                                                class="las la-pen"></i>@lang('site.update')</a>
                                                                    @endcan

                                                                    @can('delete_roles')
                                                                        <a class="modal-effect btn btn-sm btn-danger"
                                                                            href=#
                                                                            title="destroy"><i
                                                                                class="las la-trash"></i>@lang('site.delete')</a>
                                                                    @endcan
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
