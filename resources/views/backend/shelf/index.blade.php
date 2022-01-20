@extends('backend.master')
@section('title', 'Danh sách kệ sách')
@section('content')
    @if(Session::has('errors'))
        <div class="mb-2 mr-2 badge badge-danger">{{Session::get('errors')}}</div>
    @endif
    @if(Session::has('success'))
        <div class="mb-2 mr-2 badge badge-success">{{Session::get('success')}}</div>
    @endif
    <div class="col-sm-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Danh sách kệ sách</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <a href="{{ route('shelf.create') }}" class="btn btn-primary">Thêm Mới Kệ Sách</a>
                </div>
            </div>

            <div class="iq-card-body">
                <div class="table-responsive">
                    <table class="data-tables table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">Tên kệ sách</th>
                            <th scope="col">Số lượng sách</th>
                            <th scope="col">Ghi chú</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($data as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->numberOfShelfs->count()}}</td>
                                <td>{{$item->note}}</td>
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        <a class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Edit" href="{{ route('shelf.edit', $item->id) }}">
                                            <i class="ri-pencil-line"></i>
                                        </a>
                                        <a class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Delete" href="{{ route('shelf.delete', $item->id) }}"
                                           onclick="return confirm('Bạn có chắc muốn xóa kệ sách {{$item->name}} không?')">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="4" style="text-align: center">Không có kệ sách nào</th>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
