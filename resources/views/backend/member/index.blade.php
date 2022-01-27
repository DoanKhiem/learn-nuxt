@extends('backend.master')
@section('title', 'Danh sách thành viên')
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
                    <h4 class="card-title">Danh Sách Thành Viên</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <a href="{{ route('admin.member.create') }}" class="btn btn-primary">Thêm Mới Thành Viên</a>
                </div>
            </div>

            <div class="iq-card-body">
                <div class="table-responsive">
                    <table class="data-tables table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Họ Tên</th>
                            <th scope="col">Ban</th>
                            <th scope="col">Sđt</th>
                            <th scope="col">Facebook</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($data as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td class="text-center">
                                    <img class="rounded img-fluid avatar-40" src="{{ url('uploads') }}/members/{{ $item->avatar ? "$item->avatar" : "member.png"}}" alt="avatar">
                                </td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->memberToDepartment->name}}</td>
                                <td>{{$item->phone}}</td>
                                <td><a href="{{ $item->facebook }}" target="_blank">fb</a></td>
                                <td>
                                    @if($item->status == 1)
                                    <span class="badge badge-pill badge-success">Hoạt động</span>
                                    @else($item->status == 0)
                                        <span class="badge badge-pill badge-danger">Nghỉ</span>
                                    @endif
                                </td>
                                @if($item->birthday)
                                <td>{{date('d/m/Y', strtotime($item->birthday))}}</td>
                                @else
                                    <td>Chưa nhập</td>
                                @endif
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        <a class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Edit" href="{{ route('admin.member.edit', $item->id) }}">
                                            <i class="ri-pencil-line"></i>
                                        </a>
                                        <a class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Delete"
                                           href="{{ route('admin.member.delete', $item->id) }}"
                                           onclick="return confirm('Bạn có chắc muốn xóa {{$item->name}} không?')">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="4" style="text-align: center">Không có thành viên nào</th>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
