@extends('organization.layouts.master')

@section('main-content')

    <div class="main-content">
        <div class="content-wrapper"><!--Extended Table starts-->

            <section id="extended">
                <form class="form form-horizontal"
                      action="{{url('/organization/role/editRequest')}} "
                      method="POST" role="form" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$role->id}}">

                                <div class="card">
                                    <div class="card-header"><h3>Thông tin</h3></div>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-9">
                                                <input id="name" class="form-control"
                                                       type="text"
                                                       name="name" placeholder="Mã vai trò" value="{{$role->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-9">
                                                <input id="name" class="form-control"
                                                       type="text"
                                                       name="displayname" value="{{$role->displayname}}" placeholder="Tên hiển thị">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header"><strong><h3>Quyền</h3></strong></div>
                                    <div class="card-body">
                                        <div class="survey-radio">
                                            <ul>
                                                @foreach($permissions as $permission)
                                                    <div class="survey-radio-success col-md-12">
                                                        <input type="checkbox"
                                                               id="permission_{{$permission->id}}"
                                                               name="permissions[]"
                                                               value="{{$permission->id}}" @if($role->permissions->contains($permission)) checked @endif/>
                                                        <label
                                                            for="permission_{{$permission->id}}">{{$permission->displayname}}</label>
                                                    </div>
                                                @endforeach
                                            </ul>
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
    <style>
        .survey-radio div {
            clear: both;
            overflow: hidden;
        }

        .survey-radio label {
            width: 100%;
            border-radius: 3px;
            border: 1px solid #D1D3D4;
            font-weight: normal;
        }

        .survey-radio input[type="radio"]:empty,
        .survey-radio input[type="checkbox"]:empty {
            display: none;
        }

        .survey-radio input[type="radio"]:empty ~ label,
        .survey-radio input[type="checkbox"]:empty ~ label {
            position: relative;
            line-height: 2.5em;
            text-indent: 3.25em;
            margin-top: 2em;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .survey-radio input[type="radio"]:empty ~ label:before,
        .survey-radio input[type="checkbox"]:empty ~ label:before {
            position: absolute;
            display: block;
            top: 0;
            bottom: 0;
            left: 0;
            content: '';
            width: 2.5em;
            background: #D1D3D4;
            border-radius: 3px 0 0 3px;
        }

        .survey-radio input[type="radio"]:hover:not(:checked) ~ label,
        .survey-radio input[type="checkbox"]:hover:not(:checked) ~ label {
            color: #888;
        }

        .survey-radio input[type="radio"]:hover:not(:checked) ~ label:before,
        .survey-radio input[type="checkbox"]:hover:not(:checked) ~ label:before {
            content: '\2714';
            text-indent: .9em;
            color: #C2C2C2;
        }

        .survey-radio input[type="radio"]:checked ~ label,
        .survey-radio input[type="checkbox"]:checked ~ label {
            color: #777;
        }

        .survey-radio input[type="radio"]:checked ~ label:before,
        .survey-radio input[type="checkbox"]:checked ~ label:before {
            content: '\2714';
            text-indent: .9em;
            color: #333;
            background-color: #ccc;
        }

        .survey-radio input[type="radio"]:focus ~ label:before,
        .survey-radio input[type="checkbox"]:focus ~ label:before {
            box-shadow: 0 0 0 3px #999;
        }

        .survey-radio-default input[type="radio"]:checked ~ label:before,
        .survey-radio-default input[type="checkbox"]:checked ~ label:before {
            color: #333;
            background-color: #ccc;
        }

        .survey-radio-primary input[type="radio"]:checked ~ label:before,
        .survey-radio-primary input[type="checkbox"]:checked ~ label:before {
            color: #fff;
            background-color: #337ab7;
        }

        .survey-radio-success input[type="radio"]:checked ~ label:before,
        .survey-radio-success input[type="checkbox"]:checked ~ label:before {
            color: #fff;
            background-color: #5cb85c;
        }

        .survey-radio-danger input[type="radio"]:checked ~ label:before,
        .survey-radio-danger input[type="checkbox"]:checked ~ label:before {
            color: #fff;
            background-color: #d9534f;
        }

        .survey-radio-warning input[type="radio"]:checked ~ label:before,
        .survey-radio-warning input[type="checkbox"]:checked ~ label:before {
            color: #fff;
            background-color: #f0ad4e;
        }

        .survey-radio-info input[type="radio"]:checked ~ label:before,
        .survey-radio-info input[type="checkbox"]:checked ~ label:before {
            color: #fff;
            background-color: #5bc0de;
        }

    </style>
@endsection
