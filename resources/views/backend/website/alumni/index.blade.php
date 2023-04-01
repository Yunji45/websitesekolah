@extends('layouts.backend.app')

@section('title')
    Alumni
@endsection

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <div class="alert-body">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    @elseif($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">
            <div class="alert-body">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    @endif
<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2> Alumni</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <section>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Alumni <a href="{{route('backend-alumni.create')}}" class="btn btn-primary">Tambah</a><a href=" " class="btn btn-danger">Export PDF</a> </h4>
                                </div>
                                <div class="card-datatable">
                                    <table class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Tahun Lulus</th>
                                                <th>Email</th>
                                                <th>No Telepon</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>    
                                        <tbody>
                                            @foreach($data as $key => $datas)
                                            <tr>
                                                <td></td>
                                                <td> {{$key+1}} </td>
                                                <td>{{$datas -> name}}</td>
                                                <td>{{$datas -> tanggal_lahir}}</td>
                                                <td>{{$datas -> tahun_lulus}}</td>
                                                <td>{{$datas -> email}}</td>
                                                <td>{{$datas -> No_telepon}}</td>
                                                <td>
                                                    <a href="{{route('backend-alumni.edit', $datas->name)}}" class="btn btn-success btn-sm"> Edit</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>                                   
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
