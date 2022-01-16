@extends('backend.master')
@section('title', 'Danh sách sách')
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
                    <h4 class="card-title">Danh sách sách</h4>
                </div>
                <div class="iq-search-bar">
                    <form action="#" class="searchbox">
                        <input name="key" type="text" class="text search-input" placeholder="Search Here...">
                        <button type="submit" class="search-link" style="background: none; border: none;"><i class="ri-search-line"></i></button>
                    </form>
                </div>
            </div>

            <div class="iq-card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">Mã sách</th>
                            <th scope="col">Tên sách</th>
                            <th scope="col">Thể loại</th>
                            <th scope="col">Tác giả</th>
                            <th scope="col">Kệ sách</th>
                            <th scope="col">Ban đầu/Hiện tại</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($data as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->book_code}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->bookToCategory->name}}</td>
                                <td>{{$item->author}}</td>
                                <td>{{$item->bookToShelf->name}}</td>
                                <td>{{$item->original_number}}/{{$item->current_quantity}}</td>
                                <td>
                                    @if($item->image)
                                        <img style="width: 110px;" src="{{ url('uploads') }}/books/{{ $item->image }}"
                                             class="img-fluid" alt="Responsive image">
                                    @else
                                        Chưa có ảnh
                                    @endif
                                </td>
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Edit" href="{{ route('book.edit', $item->id) }}">
                                            <i class="ri-pencil-line"></i>
                                        </a>
                                        <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="Delete" href="{{ route('book.delete', $item->id) }}"
                                           onclick="return confirm('Bạn có chắc muốn xóa {{$item->name}} không?')">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="4" style="text-align: center">Không có sách nào</th>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <div class="">
                        {{$data->appends(request()->all())->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
