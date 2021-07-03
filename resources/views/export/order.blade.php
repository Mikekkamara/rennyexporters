@extends('export.main')
@section('content')
<div class="page-content p-t-40 p-b-90">
        <div class="container">
            <div class="row">
              <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- .get-in-touch-->
                    <div class="get-in-touch">
                        <h4 class="title">Order any of our Products</h4>
                        <p>Place your order here and we will ensure that the product is delivered to you anywhere around the globe.</p>
                        <p>Just fill out the form below.</p>
                        <div class="add-comments-1">
                        <form class="submit-form" name="contactform" method="get" action="{{route('order_form')}}">
                            @csrf
                                <div class="input-row m-b-20">
                                    <div class="p-r-5 input-col-5">
                                        <input type="text" name="name" placeholder="Your name *"required />
                                    </div>
                                    <div class="p-l-5 input-col-5">
                                        <input type="text" name="email" placeholder="Your email *" required />
                                    </div>
                                </div>
                                <div class="input-row m-b-20">
                                    <div class="p-r-5 input-col-5">
                                        <input type="text" name="product" placeholder="Product name *"required />
                                    </div>
                                    <div class="p-l-5 input-col-5">
                                        <input type="text" name="quantity" placeholder="Quantity *" required/>
                                    </div>
                                </div>
                                <div class="input-row">
                                    <textarea placeholder="Comment *" name="additional_info" required></textarea>
                                </div>
                                <button class="au-btn au-btn-radius au-btn-border btn-submit-comments" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                    <!-- end .get-in-touch-->
                </div>
                <div class="col-md-3"></div>

            </div>
        </div>
    
    </div>
@endsection