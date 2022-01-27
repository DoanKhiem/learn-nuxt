@extends('backend.master')
@section('title', 'Sửa thông tin sách')
@section('content')

    <div class="col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Sửa Thông Tin Sách</h4>
                </div>
            </div>
            <div class="iq-card-body">
                {{--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>--}}
                <form class="needs-validation" action="{{route('admin.book.update', $book->id)}}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Tên sách</label>
                            <input name="name" type="text" value="{{ $book->name }}" class="form-control" id="validationCustom01"  required>
                            <div class="valid-feedback">
                                Tốt!
                            </div>
                            <div class="invalid-feedback">
                                Vui lòng nhập tên sách.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Mã sách</label>
                            <input name="book_code" type="text" value="{{ $book->book_code }}" class="form-control" id="validationCustom02"  required>
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
                                @foreach($category as $value)
                                    <option value="{{$value->id}}" {{$value->id == $book->category_id ? 'selected' : ''}}>{{$value->name}}</option>
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
                                @foreach($shelf as $value)
                                    <option value="{{$value->id}}" {{$value->id == $book->shelf_id ? 'selected' : ''}}>{{$value->name}}</option>
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
                            <input name="original_number" type="number" value="{{ $book->original_number }}" class="form-control" id="validationCustom03" required>
                            <div class="valid-feedback">
                                Good!
                            </div>
                            <div class="invalid-feedback">
                                Vui lòng nhập số lượng ban đầu.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom03">Số lượng hiện có</label>
                            <input name="current_quantity" type="number" value="{{ $book->current_quantity }}" class="form-control" id="validationCustom03" required>
                            <div class="valid-feedback">
                                Good!
                            </div>
                            <div class="invalid-feedback">
                                Vui lòng nhập số lượng hiện có.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom05">Tác giả</label>
                            <input name="author" type="text" value="{{ $book->author }}" class="form-control"  id="validationCustom05" required>
                            <div class="valid-feedback">
                                Good!
                            </div>
                            <div class="invalid-feedback">
                                Vui lòng nhập tên tác giả.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Ghi chú</label>
                            <input name="note" type="text" value="{{ $book->note }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Ảnh cũ</label>
                            @if( $book->image )
                            <div><img src="{{ url('uploads') }}/books/{{ $book->image }}" style="width: 150px;"></div>
                            @else
                            <div>Chưa có ảnh cũ</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Ảnh mới</label>
                            <div><img id="blah" src="#" alt="" style="width: 150px;"/></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Your Photo:</label>
                        <input onchange="readURL(this);" type="file" class="form-control" name="file" accept="image/*" style="line-height: 27px">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    // $('#blah').attr('src', e.target.result).width(150).height(200);
                    $('#blah').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
