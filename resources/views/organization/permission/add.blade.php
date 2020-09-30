@extends('organization.layouts.master')

@section('main-content')

    <div class="main-content">
        <div class="content-wrapper"><!--Extended Table starts-->

            <section id="extended">
                <form class="form form-horizontal"
                      action="{{url('/organization/permission/addRequest')}} "
                      method="POST" role="form" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                @csrf
                                <div class="card">
                                    <div class="card-header"><h3>Tên quyền</h3></div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-9">
                                                <input id="name" class="form-control"
                                                       type="text"
                                                       name="name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn-raised btn-warning mr-1">
                            <i class="ft-x"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-raised btn-primary">
                            <i class="fa fa-check-square-o"></i> Save
                        </button>
                    </div>
                </form>
            </section>
            <!--Extended Table Ends-->
        </div>
    </div>
@endsection
