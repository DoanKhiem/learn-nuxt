@extends('backend.master')
@section('title', 'Danh sách thể loại')
@section('content')
    @if(Session::has('errors'))
        <div class="ml-3 alert text-white bg-warning" role="alert" style="font-size: 15px; padding: 5px">
            <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
            </div>
            <div class="iq-alert-text">{{Session::get('errors')}}!</div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ri-close-line"></i>
            </button>
        </div>
    @endif
    @if(Session::has('success'))
        <div class="ml-3 alert text-white bg-success" role="alert" style="font-size: 15px; padding: 5px">
            <div class="iq-alert-icon">
                <i class="ri-alert-line"></i>
            </div>
            <div class="iq-alert-text">{{Session::get('success')}}!</div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ri-close-line"></i>
            </button>
        </div>
    @endif
    <div class="col-sm-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Danh Sách Thể Loại</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Thêm Mới Thể Loại</a>
                </div>
{{--                <div class="iq-search-bar">--}}
{{--                    <form action="#" class="searchbox">--}}
{{--                        <input name="key" type="text" class="text search-input" placeholder="Search Here...">--}}
{{--                        <button type="submit" class="search-link" style="background: none; border: none;"><i class="ri-search-line"></i></button>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>

            <div class="iq-card-body">
                <div class="table-responsive">
                    <table class="data-tables table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">Tên thể loại</th>
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
                                <td>{{$item->numberOfBooks->count()}}</td>
                                <td>{{$item->note}}</td>
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        <a class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Edit" href="{{ route('admin.category.edit', $item->id) }}">
                                            <i class="ri-pencil-line"></i>
                                        </a>
                                        <a class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Delete"
                                           href="{{ route('admin.category.delete', $item->id) }}"
                                           onclick="return confirm('Bạn có chắc muốn xóa {{$item->name}} không?')">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="4" style="text-align: center">Không có thể loại nào</th>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
