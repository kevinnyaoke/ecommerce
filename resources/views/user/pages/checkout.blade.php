@extends('user.app')
@section('title') Dashboard @endsection
@section('content')
<section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Checkout</h2>
        </div>
        <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <header class="card-header">
                            <h4 class="card-title mt-2">Billing Details</h4>
                        </header>
                        <article class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <!-- form-group end.// -->
                                    <div class="col form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <!-- form-group end.// -->
                                </div>
                                <!-- form-row end.// -->
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <!-- form-group end.// -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- form-group end.// -->
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <select id="inputState" class="form-control">
                                            <option> Choose...</option>
                                            <option>Uzbekistan</option>
                                            <option>Russia</option>
                                            <option selected="">United States</option>
                                            <option>India</option>
                                            <option>Afganistan</option>
                                        </select>
                                    </div>
                                    <!-- form-group end.// -->
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <!-- form-group end.// -->
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="">
                                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <!-- form-group end.// -->
                                <div class="form-group">
                                    <label>Order Notes</label>
                                    <textarea class="form-control" name="notes" rows="6"></textarea>
                                </div>
                                <!-- form-group end.// -->
                            </form>
                        </article>
                    </div>
                    <!-- card.// -->
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title mt-2">Your Order</h4>
                                </header>
                                <article class="card-body">
                                    <dl class="dlist-align">
                                        <dt>Parameter: </dt>
                                        <dd class="text-right">Value name</dd>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Color:</dt>
                                        <dd class="text-right">Orange and Black</dd>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Material:</dt>
                                        <dd class="text-right">Leather</dd>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Total cost: </dt>
                                        <dd class="text-right h5 b"> USD195 </dd>
                                    </dl>
                                </article>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title mt-2">Shipment Type</h4>
                                </header>
                                <article class="card-body">
                                    <label class="form-check">
                                      <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                      <span class="form-check-label">
                                        First hand items
                                      </span>
                                    </label>
                                    <label class="form-check">
                                      <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                      <span class="form-check-label">
                                        Brand new items
                                      </span>
                                    </label>
                                    <label class="form-check">
                                      <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                      <span class="form-check-label">
                                        Some other option
                                      </span>
                                    </label>
                                </article>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title mt-2">Payment Method</h4>
                                </header>
                                <article class="card-body">
                                    <label class="form-check">
                                      <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                      <span class="form-check-label">
                                        First hand items
                                      </span>
                                    </label>
                                    <label class="form-check">
                                      <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                      <span class="form-check-label">
                                        Brand new items
                                      </span>
                                    </label>
                                    <label class="form-check">
                                      <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                      <span class="form-check-label">
                                        Some other option
                                      </span>
                                    </label>
                                </article>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button class="subscribe btn btn-success btn-lg btn-block" type="button">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-subscribe bg-primary padding-y-lg">
        <div class="container">

            <p class="pb-2 text-center white">Delivering the latest product trends and industry news straight to your inbox</p>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-sm-6">
                    <form class="row-sm form-noborder">
                        <div class="col-8">
                            <input class="form-control" placeholder="Your Email" type="email">
                        </div>
                        <!-- col.// -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i> Subscribe </button>
                        </div>
                        <!-- col.// -->
                    </form>
                    <small class="form-text text-white-50">We’ll never share your email address with a third-party. </small>
                </div>
                <!-- col-md-6.// -->
            </div>

        </div>
        <!-- container // -->
    </section>
    <!-- ========================= Subscribe .END// ========================= -->
    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer bg-dark white">
        <div class="container">
            <section class="footer-top padding-top">
                <div class="row">
                    <aside class="col-sm-3 col-md-3 white">
                        <h5 class="title">Customer Services</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#">Help center</a></li>
                            <li> <a href="#">Money refund</a></li>
                            <li> <a href="#">Terms and Policy</a></li>
                            <li> <a href="#">Open dispute</a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-3 white">
                        <h5 class="title">My Account</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#"> User Login </a></li>
                            <li> <a href="#"> User register </a></li>
                            <li> <a href="#"> Account Setting </a></li>
                            <li> <a href="#"> My Orders </a></li>
                            <li> <a href="#"> My Wishlist </a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-3 white">
                        <h5 class="title">About</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#"> Our history </a></li>
                            <li> <a href="#"> How to buy </a></li>
                            <li> <a href="#"> Delivery and payment </a></li>
                            <li> <a href="#"> Advertice </a></li>
                            <li> <a href="#"> Partnership </a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3">
                        <article class="white">
                            <h5 class="title">Contacts</h5>
                            <p>
                                <strong>Phone: </strong> +123456789
                                <br>
                                <strong>Fax:</strong> +123456789
                            </p>

                            <div class="btn-group white">
                                <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f  fa-fw"></i></a>
                                <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram  fa-fw"></i></a>
                                <a class="btn btn-youtube" title="Youtube" target="_blank" href="#"><i class="fab fa-youtube  fa-fw"></i></a>
                                <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter  fa-fw"></i></a>
                            </div>
                        </article>
                    </aside>
                </div>
                <!-- row.// -->
                <br>
            </section>
            <section class="footer-bottom row border-top-white">
                <div class="col-sm-6">
                    <p class="text-white-50"> Made with
                        <3 <br> by Vosidiy M.</p>
                </div>
                <div class="col-sm-6">
                    <p class="text-md-right text-white-50">
                        Copyright &copy
                        <br>
                        <a href="http://bootstrap-ecommerce.com" class="text-white-50">Bootstrap-ecommerce UI kit</a>
                    </p>
                </div>
            </section>
            <!-- //footer-top -->
        </div>
        <!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->
@endsection
