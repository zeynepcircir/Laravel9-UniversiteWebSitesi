@extends('layouts.adminbase')

@section('title', 'Admin Panel')

@section('content')
    <style>
        .fix-mid {
            margin-left: 250px
        }

        .middle {
            margin-left: 265px;
        }

        .form-fix div {
            margin-top: 5px;

            .bg-color {
                background-color: pink;
            }
        }

    </style>
    <div class="container fix-mid">
        <div class="row">
            <div class="col">
                1 of 2
            </div>
            <div class="col">
                2 of 2
            </div>
        </div>
        <br>
        <br>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Menu</h1>
                    </div>
                </div>
            </div>
            <h4 class="mb"><i class="fa fa-angle-right"></i> Menu Elements</h4>
            <form class="form-fix" role="form" action="/admin/menu/store" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="text" name="title" value="Title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Keywords</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="text" name="keywords" value="Keywords">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="text" name="description" value="Description">
                    </div>
                </div>

                <div class="form-group ">
                    <label class="col-sm-2 col-sm-2 control-label">Image</label>

                    <div class="col-sm-10">
                        <input class="form-control" id="focusedInput" type="file" name="image" value="Image">
                    </div>

                    <label class="custom-file-label" for="exampleInputFile"></label>

                    <div class="input-group-append">
                        <span class="input-group-text" id=""> </span>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="status" id="focusedInput" value="Status">
                            <option> True</option>
                            <option> False</option>
                        </select>
                    </div>
                </div>
    </div>

    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary middle">Save</button>
        </form>
    </div>
    


@endsection
