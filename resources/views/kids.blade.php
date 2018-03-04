@include('layouts.header')
<div class="page-title">
    <h2>Kids Fashion</h2>
</div>
<div class="container">
    <div class="row listings">
        <div class="col-md-3 sidebar-column">
            <div class="card" style="height: 675px;">
                <div class="card-body">
                    <h4 class="card-title">Categories</h4>
                    <ul class="nav sidebar-tabs nav-tabs">
                        <li class="cat-list active">
                            <a class="nav-link active" id="T-shirts-tab" data-toggle="tab" href="#T-shirts" role="tab" role="tab">T-shirts</a>
                        </li>
                        <li class="cat-list">
                            <a class="nav-link" id="Trousers-tab" data-toggle="tab" href="#Trousers" role="tab">Trousers</a>
                        </li>
                        <li class="cat-list">
                            <a class="nav-link" id="Shoes-tab" data-toggle="tab" href="#Shoes" role="tab" role="tab">Shoes</a>
                        </li>
                        <li class="cat-list">
                            <a class="nav-link" id="underwear" data-toggle="tab" href="#underwear" role="tab" >underwear</a>
                        </li>
                        <li class="cat-list">
                            <a class="nav-link" id="Accessories" data-toggle="tab" href="#Accessories" role="tab">Accessories</a>
                        </li>
                    </ul>
                    <h4 class="card-title">Brands</h4>
                    <div class="form-group">
                        <select class="js-example-basic-single" multiple="multiple" style="width:100%">
                            <option>All Brands</option>
                            <option value="">Tommy</option>
                            <option value="">Calvin Klein</option>
                            <option value="">Ellen</option>
                            <option value="">Nike</option>
                            <option value="">Addidas</option>
                        </select>
                    </div>

                    <h4 class="card-title">Size</h4>
                    <div class="form-group">
                        <div class="form-check form-check-flat">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Small
                                <i class="input-helper"></i></label>
                        </div>
                        <div class="form-check form-check-flat">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Extra Small
                                <i class="input-helper"></i></label>
                        </div>
                        <div class="form-check form-check-flat">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Medium
                                <i class="input-helper"></i></label>
                        </div>
                        <div class="form-check form-check-flat">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Large
                                <i class="input-helper"></i></label>
                        </div>

                    </div>
                    <button class="btn btn-primary btn-block">Search Listings</button>
                </div>
            </div>

        </div>
        <div class="col-md-9">

            <div class="row grid-product-listing">
                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="T-shirts" role="tabpanel" aria-labelledby="T-shirts-tab">
                        <div class="row">
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product04.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Leather Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product02.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Nike Sport shoes</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product03.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Classic Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product05.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Women top</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product01" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Leather Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product02.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Nike Sport shoes</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product03.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Classic Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product05.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Women top</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product01" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Leather Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product02.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Nike Sport shoes</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product03.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Classic Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product05.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Women top</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Trousers" role="tabpanel" aria-labelledby="Trousers-tab">
                        <div class="row">
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product06.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Leather Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product02.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Nike Sport shoes</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product03.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Classic Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product05.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Women top</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product01" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Leather Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product02.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Nike Sport shoes</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product03.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Classic Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product05.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Women top</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product01" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Leather Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product02.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Nike Sport shoes</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product03.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Classic Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product05.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Women top</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Shoes" role="tabpanel" aria-labelledby="Shoes-tab">
                        <div class="row">
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product01" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Leather Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product02.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Nike Sport shoes</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product03.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Classic Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product05.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Women top</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product01" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Leather Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product02.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Nike Sport shoes</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product03.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Classic Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product05.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Women top</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product01" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Leather Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product02.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Nike Sport shoes</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product03.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Classic Bag</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                            <div class="col-md-3 no-padding product-grid">
                                <img src="./assets/back/images/products/product05.jpg" class="img-fluid">
                                <div class="product-caption">
                                    <h3 class="product-name">Women top</h3>
                                    <h4 class="product-price">$ 25.99</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pagination d-flex justify-content-center rounded-flat pagination-success">
                <li class="page-item">
                    <a class="page-link" href="#"><i class="ti ti-arrow-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="ti ti-arrow-right"></i></a>
                </li>
            </ul>


        </div>
    </div>

</div>
@include('layouts.footer')