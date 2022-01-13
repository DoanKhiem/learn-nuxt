@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height rounded">
                        <div class="newrealease-contens">
                            <ul id="newrealease-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                                <li class="item">
                                    <a href="javascript:void(0);">
                                        <img src="{{ url('backend' )}}/images/new_realeases/01.jpg" class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="javascript:void(0);">
                                        <img src="{{ url('backend' )}}/images/new_realeases/02.jpg" class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="javascript:void(0);">
                                        <img src="{{ url('backend' )}}/images/new_realeases/03.jpg" class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="javascript:void(0);">
                                        <img src="{{ url('backend' )}}/images/new_realeases/04.jpg" class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="javascript:void(0);">
                                        <img src="{{ url('backend' )}}/images/new_realeases/05.jpg" class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="javascript:void(0);">
                                        <img src="{{ url('backend' )}}/images/new_realeases/06.jpg" class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="javascript:void(0);">
                                        <img src="{{ url('backend' )}}/images/new_realeases/07.jpg" class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="javascript:void(0);">
                                        <img src="{{ url('backend' )}}/images/new_realeases/08.jpg" class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="javascript:void(0);">
                                        <img src="{{ url('backend' )}}/images/new_realeases/09.jpg" class="img-fluid w-100 rounded" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                            <div class="iq-header-title">
                                <h4 class="card-title mb-0">Browse Books</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/browse-books/01.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">Reading on the World</h6>
                                                        <p class="font-size-13 line-height mb-1">Jhone Steben</p>
                                                        <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$100</span>
                                                        <h6><b>$89</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/browse-books/02.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">The Catcher in the Rye</h6>
                                                        <p class="font-size-13 line-height mb-1">Fritz Wold</p>
                                                        <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <h6><b>$99</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/browse-books/03.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">Little Black Book</h6>
                                                        <p class="font-size-13 line-height mb-1">John Klok</p>
                                                        <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$150</span>
                                                        <h6><b>$129</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/browse-books/04.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">Take On The Risk</h6>
                                                        <p class="font-size-13 line-height mb-1">George Strong</p>
                                                        <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$120</span>
                                                        <h6><b>$100</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/browse-books/05.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">Absteact On Background</h6>
                                                        <p class="font-size-13 line-height mb-1">Ichae Semos</p>
                                                        <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$105</span>
                                                        <h6><b>$99</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/browse-books/06.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">Find The Wave Book</h6>
                                                        <p class="font-size-13 line-height mb-1">Fidel Martin</p>
                                                        <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$110</span>
                                                        <h6><b>$100</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/browse-books/07.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">See the More Story</h6>
                                                        <p class="font-size-13 line-height mb-1">Jules Boutin</p>
                                                        <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$89</span>
                                                        <h6><b>$79</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/browse-books/08.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">The Wikde Book</h6>
                                                        <p class="font-size-13 line-height mb-1">Kusti Franti</p>
                                                        <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$99</span>
                                                        <h6><b>$89</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent mb-lg-0">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/browse-books/09.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">Conversion Erik Routley</h6>
                                                        <p class="font-size-13 line-height mb-1">Argele Intili</p>
                                                        <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$100</span>
                                                        <h6><b>$79</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent mb-md-0 mb-lg-0">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/browse-books/10.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">The Leo Dominica</h6>
                                                        <p class="font-size-13 line-height mb-1">Henry Jurk</p>
                                                        <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$120</span>
                                                        <h6><b>$99</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent mb-sm-0 mb-md-0 mb-lg-0">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/browse-books/11.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">By The Editbeth Jat</h6>
                                                        <p class="font-size-13 line-height mb-1">David King</p>
                                                        <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <h6><b>$149</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent mb-0 mb-sm-0 mb-md-0 mb-lg-0">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/browse-books/12.jpg" alt=""></a>
                                                    <div class="view-book">
                                                        <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1">The Crucial Decade</h6>
                                                        <p class="font-size-13 line-height mb-1">Attilio Marzi</p>
                                                        <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price">$99</span>
                                                        <h6><b>$89</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between mb-0">
                            <div class="iq-header-title">
                                <h4 class="card-title">Featured Books</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                 <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton2" data-toggle="dropdown">
                                 This Week<i class="ri-arrow-down-s-fill"></i>
                                 </span>
                                    <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="row align-items-center">
                                <div class="col-sm-5 pr-0">
                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{ url('backend' )}}/images/page-img/featured-book.png" alt=""></a>
                                </div>
                                <div class="col-sm-7 mt-3 mt-sm-0">
                                    <h4 class="mb-2">Casey Christie night book into find...</h4>
                                    <p class="mb-2">Author: Gheg origin</p>
                                    <div class="mb-2 d-block">
                                    <span class="font-size-12 text-warning">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                    </span>
                                    </div>
                                    <span class="text-dark mb-3 d-block">Lorem Ipsum is simply dummy test in find a of the printing and typeset ing industry into end.</span>
                                    <button type="submit" class="btn btn-primary learn-more">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between mb-0">
                            <div class="iq-header-title">
                                <h4 class="card-title">Featured Writer</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                 <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton3" data-toggle="dropdown">
                                 This Week<i class="ri-arrow-down-s-fill"></i>
                                 </span>
                                    <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton3">
                                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                        <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <ul class="list-inline row mb-0 align-items-center iq-scrollable-block">
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{ url('backend' )}}/images/user/01.jpg" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Brandon Guidelines</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{ url('backend' )}}/images/user/02.jpg" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Hugh Millie-Yate</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">432</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{ url('backend' )}}/images/user/03.jpg" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Nathaneal Down</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">5471</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{ url('backend' )}}/images/user/04.jpg" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Thomas R. Toe</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">8764</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{ url('backend' )}}/images/user/05.jpg" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Druid Wensleydale</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">8987</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{ url('backend' )}}/images/user/06.jpg" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{ url('backend' )}}/images/user/07.jpg" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Desmond Eagle</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">4324</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{ url('backend' )}}/images/user/08.jpg" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Lurch Schpellchek</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">012</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{ url('backend' )}}/images/user/09.jpg" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{ url('backend' )}}/images/user/10.jpg" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{ url('backend' )}}/images/user/11.jpg" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                    </div>
                                </li>
                                <li class="col-sm-6 d-flex mb-3 align-items-center">
                                    <div class="icon iq-icon-box mr-3">
                                        <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{ url('backend' )}}/images/user/01.jpg" alt=""></a>
                                    </div>
                                    <div class="mt-1">
                                        <h6>Natalya Undgrowth</h6>
                                        <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                            <div class="iq-header-title">
                                <h4 class="card-title mb-0">Favorite Reads</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                            </div>
                        </div>
                        <div class="iq-card-body favorites-contens">
                            <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                                <li class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative">
                                            <a href="javascript:void();">
                                                <img src="{{ url('backend' )}}/images/favorite/01.jpg" class="img-fluid rounded w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                                            <p class="mb-2">Author : Pedro Araez</p>
                                            <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-primary">
                                                    <span class="bg-primary" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative">
                                            <a href="javascript:void();">
                                                <img src="{{ url('backend' )}}/images/favorite/02.jpg" class="img-fluid rounded w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">Casey Christie night book into find...</h5>
                                            <p class="mb-2">Author : Michael klock</p>
                                            <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-danger">
                                                    <span class="bg-danger" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative">
                                            <a href="javascript:void();">
                                                <img src="{{ url('backend' )}}/images/favorite/03.jpg" class="img-fluid rounded w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">The Secret to English Busy People..</h5>
                                            <p class="mb-2">Author : Daniel Ace</p>
                                            <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-info">
                                                    <span class="bg-info" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="col-5 p-0 position-relative">
                                            <a href="javascript:void();">
                                                <img src="{{ url('backend' )}}/images/favorite/04.jpg" class="img-fluid rounded w-100" alt="">
                                            </a>
                                        </div>
                                        <div class="col-7">
                                            <h5 class="mb-2">The adventures of Robins books...</h5>
                                            <p class="mb-2">Author : Luka Afton</p>
                                            <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                <span>Reading</span>
                                                <span class="mr-4">78%</span>
                                            </div>
                                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                                <div class="iq-progress-bar iq-bg-success">
                                                    <span class="bg-success" data-percent="78"></span>
                                                </div>
                                            </div>
                                            <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content END -->
@endsection
