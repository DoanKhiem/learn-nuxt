@extends('backend.master')
@section('title', 'Thêm kệ sách')
@section('content')

    <div class="col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Thêm Kệ Sách</h4>
                </div>
            </div>
            <div class="iq-card-body">
                {{--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>--}}
                <form class="needs-validation" action="{{ route('shelf.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Tên kệ sách</label>
                            <input name="name" type="text" class="form-control" id="validationCustom01"  required>
                            <div class="valid-feedback">
                                Tốt!
                            </div>
                            <div class="invalid-feedback">
                                Vui lòng nhập tên kệ sách.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Note</label>
                            <input name="note" type="text" class="form-control">
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
