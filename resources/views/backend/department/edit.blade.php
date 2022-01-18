@extends('backend.master')
@section('title', 'Sửa thông tin ban')
@section('content')

    <div class="col-lg-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Sửa Thông Tin Ban</h4>
                </div>
            </div>
            <div class="iq-card-body">
                {{--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>--}}
                <form class="needs-validation" action="{{ route('department.update', $department->id) }}" method="POST" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Tên ban</label>
                            <input name="name" type="text" value="{{ $department->name }}" class="form-control" id="validationCustom01"  required>
                            <div class="valid-feedback">
                                Tốt!
                            </div>
                            <div class="invalid-feedback">
                                Vui lòng nhập tên ban.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Note</label>
                            <input name="note" type="text" value="{{ $department->note }}" class="form-control">
                            <div class="valid-feedback">
                                Tốt!
                            </div>
                        </div>
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
