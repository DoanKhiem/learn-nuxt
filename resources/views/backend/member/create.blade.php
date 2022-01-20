@extends('backend.master')
@section('title', 'Thêm thành viên')
@section('content')

    <div class="col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Thêm Thành Viên</h4>
                </div>
            </div>
            <div class="iq-card-body">
                {{--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>--}}
                <form class="needs-validation" action="{{route('member.store')}}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Tên thành viên</label>
                            <input name="name" type="text" class="form-control" id="validationCustom01"  required>
                            <div class="valid-feedback">
                                Tốt!
                            </div>
                            <div class="invalid-feedback">
                                Vui lòng nhập tên thành viên.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Số điện thoại</label>
                            <input name="phone" type="text" class="form-control">
                            <div class="valid-feedback">
                                Tốt!
                            </div>
                            <div class="invalid-feedback">
                                Vui lòng nhập số điện thoại.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom05">Ban</label>
                            <select name="department_id" class="form-control" id="validationCustom05"  required>
                                <option selected disabled value="">Lựa chọn thể loại</option>
                                @foreach($department as $value)
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
                            <label for="validationCustom06">Quyền</label>
                            <select name="member_role_id" class="form-control" id="validationCustom06"  required>
                                <option selected disabled value="">Lựa chọn kệ sách</option>
                                @foreach($member_role as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                            <div class="valid-feedback">
                                Tốt!
                            </div>
                            <div class="invalid-feedback">
                                Vui lòng lựa chọn quyền.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Ngày sinh</label>
                            <input name="birthday" type="date" class="form-control">
                            <div class="valid-feedback">
                                Good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Giới tính</label>
                            <input name="sex" type="number" class="form-control">
                            <div class="valid-feedback">
                                Good!
                            </div>
                            <div class="invalid-feedback">
                                Vui lòng nhập số lượng hiện có.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Link facebook</label>
                            <input name="facebook" type="text" class="form-control">
                            <div class="valid-feedback">
                                Good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Ghi chú</label>
                            <input name="note" type="text" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Upload Your Photo:</label>
                            <input type="file" onchange="readURL(this);" id="exampleFile" class="form-control" name="file" accept="image/*" style="line-height: 27px">
                        </div>
                        <div class="col-md-6 mb-3">
                            <div><label>Ảnh hiển thị</label></div>
{{--                                <input  name="file" id="exampleFile" type="file" class="form-control-file">--}}
                                <img id="blah" src="#" class="img-thumbnail" alt="" style="width: 150px;" />
{{--                                <img src="{{ url('backend') }}/images/page-img/10.jpg" class="img-thumbnail" alt="Responsive image">--}}

                        </div>
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
