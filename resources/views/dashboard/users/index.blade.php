@extends('dashboard.layouts.master');

@section('title', 'dashboard')
@section('content')

    <section class="content">
        <div class="container-fluid">

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
                                                        <h3>All Users</h3>
                                                        @can('create_users')
                                                            <a class="btn btn-primary my-2"
                                                                href="{{ route('users.create') }}">@lang('site.add_user')</a>
                                                        @endcan
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive hoverable-table">
                                                        <table class="table table-hover" id="example1"
                                                            data-page-length='50' style=" text-align: center;">
                                                            <thead>
                                                                <tr>
                                                                    <th class="wd-10p border-bottom-0">#</th>
                                                                    <th class="wd-15p border-bottom-0">@lang('site.user_name')
                                                                    </th>
                                                                    <th class="wd-20p border-bottom-0">@lang('site.email')
                                                                    </th>
                                                                    <th class="wd-15p border-bottom-0">@lang('site.user_role')
                                                                    </th>
                                                                    <th class="wd-10p border-bottom-0">@lang('site.actions')
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($users as $key => $user)
                                                                    <tr>
                                                                        <td>{{ $key + 1 }}</td>
                                                                        <td>{{ $user->name }}</td>
                                                                        <td>{{ $user->email }}</td>
                                                                        <td>
                                                                            <label
                                                                                class="badge badge-success">{{ $user->role->name }}</label>
                                                                        </td>

                                                                        <td>
                                                                            @can('update_users')
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-info"
                                                                                    title="update"><i
                                                                                        class="las la-pen"></i>@lang('site.update')</a>
                                                                            @endcan

                                                                            @can('delete_users')
                                                                                <a class="modal-effect btn btn-sm btn-danger"
                                                                                    data-effect="effect-scale"
                                                                                    data-user_id="{{ $user->id }}"
                                                                                    data-username="{{ $user->name }}"
                                                                                    data-toggle="modal" href="#modaldemo8"
                                                                                    title="حذف"><i
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

    </div>
</section>
@endsection
