@extends('backend.master')
@section('title', 'Thêm sách')
@section('content')

<div class="col-lg-12">
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Thêm Sách</h4>
            </div>
        </div>
        <div class="iq-card-body">
{{--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>--}}
            <form class="needs-validation" action="{{route('admin.book.store')}}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Tên sách</label>
                        <input name="name" type="text" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Tốt!
                        </div>
                        <div class="invalid-feedback">
                            Vui lòng nhập tên sách.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Mã sách</label>
                        <input name="book_code" type="text" class="form-control" id="validationCustom02"  required>
                        <div class="valid-feedback">
                            Tốt!
                        </div>
                        <div class="invalid-feedback">
                            Vui lòng nhập mã sách.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom05">Thể loại</label>
                        <select name="category_id" class="form-control" id="validationCustom05"  required>
                            <option selected disabled value="">Lựa chọn thể loại</option>
                            @foreach($category as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                        <div class="valid-feedback">
                            Tốt!
                        </div>
                        <div class="invalid-feedback">
                            Vui lòng chọn thể loại sách.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom06">Kệ sách</label>
                        <select name="shelf_id" class="form-control" id="validationCustom06"  required>
                            <option selected disabled value="">Lựa chọn kệ sách</option>
                            @foreach($shelf as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                        <div class="valid-feedback">
                            Tốt!
                        </div>
                        <div class="invalid-feedback">
                            Vui lòng lựa chọn kệ sách.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Số lượng ban đầu</label>
                        <input name="original_number" type="number" class="form-control" id="validationCustom03" required>
                        <div class="valid-feedback">
                            Good!
                        </div>
                        <div class="invalid-feedback">
                            Vui lòng nhập số lượng ban đầu.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Số lượng hiện có</label>
                        <input name="current_quantity" type="number" class="form-control" id="validationCustom03" required>
                        <div class="valid-feedback">
                            Good!
                        </div>
                        <div class="invalid-feedback">
                            Vui lòng nhập số lượng hiện có.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom05">Tác giả</label>
                        <input name="author" type="text" class="form-control" id="validationCustom05" required>
                        <div class="valid-feedback">
                            Good!
                        </div>
                        <div class="invalid-feedback">
                            Vui lòng nhập tên tác giả.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Ghi chú</label>
                        <input name="note" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label>Upload Your Photo:</label>
                    <input type="file" class="form-control" name="file" accept="image/*" style="line-height: 27px">
                </div>
{{--                <div class="form-group">--}}
{{--                    <div class="form-check">--}}
{{--                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>--}}
{{--                        <label class="form-check-label" for="invalidCheck">--}}
{{--                            Agree to terms and conditions--}}
{{--                        </label>--}}
{{--                        <div class="valid-feedback">--}}
{{--                            Looks good!--}}
{{--                        </div>--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            You must agree before submitting.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </div>
</div>

@endsection
