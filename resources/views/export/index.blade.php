@extends('export.main')
@section('content')
<section>
    <!-- START REVOLUTION SLIDER 5.0-->
     {{--  <div class="slider-1">
        <div class="rev_slider" id="js-slider" style="display:none;">
            <ul>
                <li class="item-1 item-3" data-transition="crossfade">
                    <!-- MAIN IMAGE-->
                    <img class="rev-slidebg" src="/images/new/basil.jpg" alt="fresh-kenya-basil" />
                    <h3 class="tp-caption tp-resizeme caption-1" data-frames="[{&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:900,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;to&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]"
                    data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['middle']" data-voffset="['-100']" data-width="['1000', '992', '768', '480']">Farm freshness</h3>
                    <div class="tp-caption tp-resizeme caption-2" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                    data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['middle']" data-voffset="['-10', '0', '20', '80']" data-width="['800', '800', '768', '480']" >Guaranteed Real Farm Freshness</div>

                </li>
                <li class="item-1" data-transition="crossfade">
                    <!-- MAIN IMAGE-->
                    <img class="rev-slidebg" src="/images/new/rosemary.jpg" alt="kenya-rosemary" />
                    <h3 class="tp-caption tp-resizeme caption-1" data-frames="[{&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:900,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;to&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]"
                    data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['middle']" data-voffset="['-100']" data-width="['1000', '1000', '768', '700']">Our world class product variety</h3>
                    <div class="tp-caption tp-resizeme caption-2" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                    data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['middle']" data-voffset="['-20', '-20', '0', '20']" data-width="['1000', '1000', '768', '500']">Explore organic products from our farm,ranging from herbs,fruits,spices and vegetables</div>
                    <div class="tp-caption tp-resizeme" data-frames="[{&quot;delay&quot;:2000,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                    data-responsive="off" data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['middle']" data-voffset="['40', '40', '60', '100']">
                    </div>
                </li>
                <li class="item-1 item-3" data-transition="crossfade">
                    <!-- MAIN IMAGE-->
                    <img class="rev-slidebg" src="/images/new/people.jpg" alt="renny-exporters-team" />
                    <h3 class="tp-caption tp-resizeme caption-1" data-frames="[{&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:900,&quot;ease&quot;:&quot;Power4.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;to&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power2.easeIn&quot;}]"
                    data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['middle']" data-voffset="['-100']" data-width="['1000', '992', '768', '480']">Dedicated Team</h3>
                    <div class="tp-caption tp-resizeme caption-2" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                    data-x="['center']" data-hoffset="['0', '0', '0', '0']" data-y="['middle']" data-voffset="['-10', '0', '20', '80']" data-width="['800', '800', '768', '480']">Our team ensures that we only deliver nothing but the best of products for you !</div>
             </li>
            </ul>
        </div>
    </div>  --}}
</section>
<section>
    <div class="section grey-background p-t-100 p-b-100">
        <div class="container">
            <!-- Heading Section-->
            <div class="heading-section-1">
                <h3>Why we are the best</h3>
            </div>
            <div class="m-t-50">
                <!-- .about-1-->
                <div class="about-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-image">
                                <img src="/images/new/people.jpg" alt="about-rennyexporters" id="product_img" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-content">
                                <div class="about-content-item">
                                    <div class="content-image">
                                        <img src="/images/icons/ic-about-03.png" alt="about icon" />
                                    </div>
                                    <div class="content-main">
                                        <h3 class="title-content">Our Farming Model</h3>
                                        <p class="content-content description">The emphasis is on restriction of fertilizer usage and we ensure that we use organically accepted manures to grow our products for health living.</p>
                                    </div>
                                </div>
                                <div class="about-content-item">
                                    <div class="content-image">
                                        <img src="/images/icons/ic-about-02.png" alt="about icon" />
                                    </div>
                                    <div class="content-main">
                                        <h3 class="title-content">Sorting & Grading</h3>
                                        <p class="content-content description">After products reach maturity,the crops are harvested by hand picking, sorted and graded as per our international guidelines.Cleanliness is highly observed making sure that our clients get the best.
                                        </p>
                                    </div>
                                </div>
                                <div class="about-content-item">
                                    <div class="content-image">
                                        <img src="/images/icons/ic-about-01.png" alt="about icon" />
                                    </div>
                                    <div class="content-main">
                                        <h3 class="title-content">Packing & Exporting</h3>
                                        <p class="content-content description">Is everything now done?If yes, the assorted products are packed,customs procedures are finalized and now , we send the products to our Customers world wide using air transport to ensure freshness.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end .about-1-->
            </div>
        </div>
    </div>
</section>

<section>
    <div class="section white-background p-t-100 p-b-80">
        <div class="container">
            <div class="heading-section-1">
                <h3>Our Products</h3>
            </div>
            <div class="last-blog-list m-t-50">
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-item-1">
                            <div class="blog-item-image">
                                <a href="#">
                                    <img src="/images/new/basil.jpg"  id="product_img" alt="kenya-basil-exporters"/>
                                </a>
                            </div>
                            <div class="blog-item-title">
                                <h3 class="title">
                                    <a href="#">Basil
                                    </a>
                                </h3>
                            </div>
                            <p class="description">
                            The well drained nutritious soils on the slopes of Mt.Kenya provides us with the optimal climatic condition to organically grow the best varieties of basil for the export market &nbsp; <a href="{{route('order')}}">Order Now</a>
                            </p>
                        </div>
                        <!-- end .blog-item-1-->
                    </div>
                    <div class="col-md-4">
                        <!-- .blog-item-1-->
                        <div class="blog-item-1">
                            <div class="blog-item-image">
                                <a href="#">
                                    <img src="/images/new/chives.jpg"  id="product_img" alt="organic-kenyan-chives"/>
                                </a>
                            </div>
                            <div class="blog-item-title">
                                <h3 class="title">
                                    <a href="#">Chives
                                    </a>
                                </h3>
                            </div>
                            <p class="description">
                                We specialize in growing both types of chives and once you get a hold onto these fresh Kenyan chives that we provide, you can start getting creative in the kitchen. Owing to its position on the equator, Kenya has the perfect conditions for growing chives  &nbsp; <a href="{{route('order')}}">Order Now</a>
                            </p>
                        </div>
                        <!-- end .blog-item-1-->
                    </div>
                    <div class="col-md-4">
                        <!-- .blog-item-1-->
                        <div class="blog-item-1">
                            <div class="blog-item-image">
                                <a href="#">
                                    <img src="/images/new/thyme.jpg"  id="product_img" alt="fresh-kenyan-thyme"/>
                                </a>
                            </div>
                            <div class="blog-item-title">
                                <h3 class="title">
                                    <a href="#">Thyme
                                    </a>
                                </h3>
                            </div>
                            <p class="description">
                                It’s a perennial herb with many branches with pink flowers loves well drained with soils with a slightly alkaline ph and 6-8hrs sunlight  exposure makes Kenya  ideal for producing the best thyme for the export market. &nbsp; <a href="{{route('order')}}">Order Now</a>
                            </p>
                        </div>
                        <!-- end .blog-item-1-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-item-1">
                            <div class="blog-item-image">
                                <a href="#">
                                    <img src="/images/new/rosemary.jpg"  id="product_img" alt="kenya-rosemary-exporters" />
                                </a>
                            </div>
                            <div class="blog-item-title">
                                <h3 class="title">
                                    <a href="#">Rosemary
                                    </a>
                                </h3>
                            </div>
                            <p class="description">
                              Kenyan  regions like Imenti,Kikambala,Murang'a provide the basic growth conditions inclusive of loamy soil with an alkaline PH of 6 to 7 and warm weather with at least eight hours of daily sunlight making Kenya the best producers of organic Rosemary. &nbsp; <a href="{{route('order')}}">Order Now</a>
                            </p>
                        </div>
                        <!-- end .blog-item-1-->
                    </div>
                    <div class="col-md-4">
                        <!-- .blog-item-1-->
                        <div class="blog-item-1">
                            <div class="blog-item-image">
                                <a href="#">
                                    <img src="/images/new/mint.jpg"  id="product_img" alt="organic-grown-kenya-mint"/>
                                </a>
                            </div>
                            <div class="blog-item-title">
                                <h3 class="title">
                                    <a href="#">Mint
                                    </a>
                                </h3>
                            </div>
                            <p class="description">
                                The  acidic pH between 6-7,moist and well-drained soils of the slopes of the Aberdare ranges provide the optimal conditions for growing the following varieties of mint:Apple mint,Pineapple Mint,Corsic Peppermint and Spearmint &nbsp; <a href="{{route('order')}}">Order Now</a>

                            </p>
                        </div>
                        <!-- end .blog-item-1-->
                    </div>
                    <div class="col-md-4">
                        <!-- .blog-item-1-->
                        <div class="blog-item-1">
                            <div class="blog-item-image">
                                <a href="#">
                                    <img src="/images/new/marjoram.jpeg"  id="product_img" alt="our-kenya-marjoram"/>
                                </a>
                            </div>
                            <div class="blog-item-title">
                                <h3 class="title">
                                    <a href="#">Marjoram
                                    </a>
                                </h3>
                            </div>
                            <p class="description">
                                We are the expirienced growers and exporters of this temperate or subtropical plant .The dry and rocky conditions of the eastern part of Kenya and the  rich, light loam soils with a pH range between 4.9–8.7. of the rift valley provides us with the best organically grown Marjoram for the export market. &nbsp; <a href="{{route('order')}}">Order Now</a>
                            </p>
                        </div>
                        <!-- end .blog-item-1-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-item-1">
                            <div class="blog-item-image">
                                <a href="#">
                                    <img src="/images/new/mango5.jpg" alt="fresh-kenyan-mangoes" srcset="" id="product_img">


                                </a>
                            </div>
                            <div class="blog-item-title">
                                <h3 class="title">
                                    <a href="#">Mango
                                    </a>
                                </h3>
                            </div>
                            <p class="description">
                             Grown in the hot climatic areas of Coastal and Eastern part of Kenya provides our mangoes the best climatic conditions for increasing their sucrose content.This makes our mangoes best for the export market.our varieties include Kent,Apple,Ngowe and Tommy mangoes. &nbsp; <a href="{{route('order')}}">Order Now</a>
                            </p>
                        </div>
                        <!-- end .blog-item-1-->
                    </div>
                    <div class="col-md-4">
                        <!-- .blog-item-1-->
                        <div class="blog-item-1">
                            <div class="blog-item-image">
                                <a href="#">
                                    <img src="/images/new/avocado5.jpg" id="product_img" alt="kenya-avocado-fruit-exprters" />
                                </a>
                            </div>
                            <div class="blog-item-title">
                                <h3 class="title">
                                    <a href="#">Avocado
                                    </a>
                                </h3>
                            </div>
                            <p class="description">
                                Whether its Hass,Fuerte,Nabal or Puebla Renny exporters got you covered.With the great soils and climatic conditons of the eastern,western and central regions of Kenya,we provide the best quality of varieties for the export market. &nbsp; <a href="{{route('order')}}">Order Now</a>
                            </p>
                        </div>
                        <!-- end .blog-item-1-->
                    </div>
                    <div class="col-md-4">
                        <!-- .blog-item-1-->
                        <div class="blog-item-1">
                            <div class="blog-item-image">
                                <a href="#">
                                    <img src="/images/new/passionfruit.jpg"  id="product_img" alt="kenya-passion-fruit" />
                                </a>
                            </div>
                            <div class="blog-item-title">
                                <h3 class="title">
                                    <a href="#">Passion Fruit
                                    </a>
                                </h3>
                            </div>
                            <p class="description">
                               We are the expirienced exporters of this perrenial fruit.Our main varieties are purple passion and yellow passion.The deep well drained soils with a PH range of 6.0-7.0. and a temperature range of between 18-28 degrees in the Central and Westen parts of Kenya makes us the go to provides of this fruit for the export market. &nbsp; <a href="{{route('order')}}">Order Now</a>
                            </p>
                        </div>
                        <!-- end .blog-item-1-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
