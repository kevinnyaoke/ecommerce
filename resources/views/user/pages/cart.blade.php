@extends('user.app')
@section('title') Dashboard @endsection
@section('content')
<section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Cart</h2>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg padding-y border-top">
        <div class="container">

            <div class="row">
                <main class="col-sm-9">

                    <div class="card">
                        <table class="table table-hover shopping-cart-wrap">
                            <thead class="text-muted">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right" width="200">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="frontend/images/items/1.jpg" class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">Product name goes here </h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">USD 145</var>
                                            <small class="text-muted">(USD5 each)</small>
                                        </div>
                                        <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">
                                        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                        <a href="" class="btn btn-outline-danger"> × Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="frontend/images/items/2.jpg" class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">Product name goes here </h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">USD 35</var>
                                            <small class="text-muted">(USD10 each)</small>
                                        </div>
                                        <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">
                                        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="frontend/images/items/3.jpg" class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">Product name goes here </h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">USD 45</var>
                                            <small class="text-muted">(USD15 each)</small>
                                        </div>
                                        <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">
                                        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>
                                        <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- card.// -->

                </main>
                <!-- col.// -->
                <aside class="col-sm-3">
                    <p class="alert alert-success">Add USD 5.00 of eligible items to your order to qualify for FREE Shipping. </p>
                    <dl class="dlist-align">
                        <dt>Total price: </dt>
                        <dd class="text-right">USD 568</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Discount:</dt>
                        <dd class="text-right">USD 658</dd>
                    </dl>
                    <dl class="dlist-align h4">
                        <dt>Total:</dt>
                        <dd class="text-right"><strong>USD 1,650</strong></dd>
                    </dl>
                    <hr>
                    <figure class="itemside mb-3">
                        <aside class="aside"><img src="frontend/images/icons/pay-visa.png"></aside>
                        <div class="text-wrap small text-muted">
                            Pay 84.78 AED ( Save 14.97 AED ) By using ADCB Cards
                        </div>
                    </figure>
                    <figure class="itemside mb-3">
                        <aside class="aside"> <img src="frontend/images/icons/pay-mastercard.png"> </aside>
                        <div class="text-wrap small text-muted">
                            Pay by MasterCard and Save 40%.
                            <br> Lorem ipsum dolor
                        </div>
                    </figure>
                    <a href="{{route ('checkout')}}" class="btn btn-success btn-lg btn-block">Proceed To Checkout</a>
                </aside>
                <!-- col.// -->
            </div>

        </div>
        <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    <!-- ========================= Subscribe ========================= -->
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