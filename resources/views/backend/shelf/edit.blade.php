@extends('backend.master')
@section('title', 'Sửa thông tin kệ sách')
@section('content')

    <div class="col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Sửa Thông Tin Kệ Sách</h4>
                </div>
            </div>
            <div class="iq-card-body">
                {{--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>--}}
                <form class="needs-validation" action="{{ route('shelf.update', $shelf->id) }}" method="POST" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Tên kệ sách</label>
                            <input name="name" type="text" value="{{$shelf->name}}" class="form-control" id="validationCustom01"  required>
                            <div class="valid-feedback">
                                Tốt!
                            </div>
                            <div class="invalid-feedback">
                                Vui lòng nhập tên kệ sách.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Note</label>
                            <input name="note" type="text" value="{{$shelf->note}}" class="form-control">
                            <div class="valid-feedback">
                                Tốt!
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </div>

@endsection
