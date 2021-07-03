@extends('export.main')
@section('content')
     
<section>
        <div class="section primary-color-background">
            <div class="container">
                <div class="p-t-70 p-b-85">
                    <!-- Heading page-->
                    <div class="heading-page-1">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom-grey">
            <div class="container">
                <div class="breadcrumb-1">
                    <ul>
                        <li>
                            <a href="{{route('index')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="page-content p-t-40">
        <!--.about-2-->
        <div class="about-2">
            <div class="section cover-background p-t-50 p-b-200" style="background: url(images/new/people.jpg) center center no-repeat;"  >
                <div class="container">
                    <div class="col-md-6 ">
                        <div class="about-content" style="color:#ffffff !important;">
                            <p>
                                    We are exporters of organically produced farm products ranging from horticulture products, and dairy products to a wide range of global consumers in different parts of the world to meet their nutritional needs and always aiming at exceeding our customers satisfaction</p>
                            <h4>OUR VALUES:</h4>
                            <p>
                                    Our value proposition is centered around a strong leadership, food safety, integrity, diligence, team work, dedication and a firm focus on quality. This strong support combined with expertise, dependable team of knowledgeable professionals and a stringent quality control program, come together to bring service and quality that excels and makes you distinctive in the market.</p>
                            <h4>OUR GOALS:</h4>
                            <p>To bring value from innovative products and services that distinguish you from the rest of the competition to capturing premium quality of Kenya freshness that provides safe healthy and competitive products. We are committed to enhancing your ability to be a competitive industry leader.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end .about-2-->
        <section>
            <div class="section white-background p-t-30 p-b-90">
                <div class="container">
                    <!-- Heading Section-->
                    <div class="heading-section-1">
                        <h3>WHY CHOOSE US</h3>
                    </div>
                    <div class="why-choose-us-list m-t-40">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <!-- .why-choose-us-1-->
                                <div class="why-choose-us-1">
                                    <h3 class="why-choose-us-title">Our Farming Model</h3>
                                    <p class="why-choose-us-content">
                                            The emphasis is on restriction of fertilizer usage and we ensure that we use organically accepted manures to grow our products for health living.
                                    </p>
                                </div>
                                <!-- end .why-choose-us-1-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!-- .why-choose-us-1-->
                                <div class="why-choose-us-1">
                                    <h3 class="why-choose-us-title">Sorting & Grading</h3>
                                    <p class="why-choose-us-content">
                                            After products reach maturity,the crops are harvested by hand picking, sorted and graded as per our international guidelines.Cleanliness is highly observed making sure that our clients get the best.
                                    </p>
                                </div>
                                <!-- end .why-choose-us-1-->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!-- .why-choose-us-1-->
                                <div class="why-choose-us-1">
                                    <h3 class="why-choose-us-title">Packing & Exporting</h3>
                                    <p class="why-choose-us-content">
                                            Is everything now done?If yes, the assorted products are packed,customs procedures are finalized and now , we send the products to our Customers world wide using air transport to ensure freshness.
                                    </p>
                                </div>
                                <!-- end .why-choose-us-1-->
                            </div>
                        </div>
                    </div>
                  
                </div>
                <div class="container">
                    <!-- Heading Section-->
                        <h3 style="text-align:center;">Our Payment Terms</h3>
                   
                    <div class="why-choose-us-list m-t-40">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <!-- .why-choose-us-1-->
                                <div class="why-choose-us-1">
                                    <h3 class="why-choose-us-title">Bank to Bank</h3>
                                    <p class="why-choose-us-content">
                                            Bank to bank transfer is the method that we mostly accept for our new clients
                                    </p>
                                </div>
                                <!-- end .why-choose-us-1-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- .why-choose-us-1-->
                                <div class="why-choose-us-1">
                                    <h3 class="why-choose-us-title">Cost Insurance and Freight(CIF)</h3>
                                    <p class="why-choose-us-content">
                                          We accept CIF under certain agreed terms ,however a deposit of 40% must be made for this type of transaction to take place
                                    </p>
                                </div>
                                <!-- end .why-choose-us-1-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- .why-choose-us-1-->
                                <div class="why-choose-us-1">
                                    <h3 class="why-choose-us-title">Free On Board (FOB)</h3>
                                    <p class="why-choose-us-content">
                                         We also accomodate FOB under certain discussed conditions with our clients
                                    </p>
                                </div>
                                <!-- end .why-choose-us-1-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- .why-choose-us-1-->
                                <div class="why-choose-us-1">
                                    <h3 class="why-choose-us-title">TT</h3>
                                    <p class="why-choose-us-content">
                                         Renny exporters also accept Telegraphic Transfers
                                    </p>
                                </div>
                                <!-- end .why-choose-us-1-->
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>
        
    </div>
@endsection