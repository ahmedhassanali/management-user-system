@extends('dashboard.layouts.master');

@section('title', 'dashboard')


@section('content')

    <section class="content">
        <div class="container-fluid">
        @section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-10 m-5">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="col-12 d-flex justify-content-between ">
                                    <h3>Add Role</h3>
                                    @can('show_roles')
                                        <a class="btn btn-primary my-2" href="{{ route('roles.index') }}">@lang('site.all_roles')</a>
                                    @endcan
                                </div>
                            </div>
                            <div class="card-body my-5">
                                <div class="container">
                                    <div class="row justify-content-center align-item-center">
                                        <div class="col-md-12">
                                            <form method="POST" action="{{ route('roles.store') }}">
                                                @csrf
                                                <div class="row mb-3 ">
                                                    <label for="name"
                                                        class="col-md-12 col-form-label text-md-end">{{ __('Name') }}</label>
                                                    <div class="col-md-12">
                                                        <input id="name" type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" required
                                                            autocomplete="name" autofocus>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <label class=" my-2">@lang('site.permissions')</label>
                                                    <div class="row">
                                                        <div class="card col-md-12 mx-2">
                                                            <div class="card-body my-2">
                                                                <div class="container">
                                                                    <div
                                                                        class="row justify-content-center align-item-center">
                                                                        @foreach ($permissions as $item)
                                                                            <div class="form-check col-md-3 mx-2 my-2">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" name="permissions[]"
                                                                                    value="{{ $item->id }}"
                                                                                    id={{ $item->name }}>
                                                                                <label class="form-check-label h5"
                                                                                    for={{ $item->name }}>
                                                                                    @lang('site.' . $item->name)</label>
                                                                                </label>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div><!-- end of tab content -->

                                    <div class="row mb-0">
                                        <div class="col-md-12 ">
                                            <button type="submit" class="btn btn-primary col-12">
                                                {{ __('submit') }}
                                            </button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    </div><!-- /.container-fluid -->
</section>
@endsection
