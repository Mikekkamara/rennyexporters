<footer>
    <!--.footer-2-->
    <div class="footer-1 footer-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="footer-introduce">
                        <div class="footer-logo">
                            <img src="/images/new/logo.png" alt="Renny Exporters" style="width:50%";/>
                        </div>
                        <div class="footer-intro">
                            <p class="description">Renny exporters is an international exporting company of horticultural
                                    products founded by a Kenyan with its operation in East Africa. Over the
                                    last 3 years, we have been exporting quality fruits such as avocados,
                                    pineapples, mangoes, passion fruits and vegetables such as Harriot
                                    beans, snow peas, snap peas, garden peas, capsicums and herbs such as
                                    basil, thyme, rosemary, chives, tarragon all over the world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="footer-services">
                        <div class="footer-heading">
                            <h3>Our Products</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                    <a href="{{route('products')}}">Spices</a>
                                    </li>
                                    <li>
                                    <a href="{{route('index')}}">Herbs</a>
                                    </li>
                                    <li>
                                    <a href="{{route('index')}}">Fruits</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li>
                                    <a href="{{route('about')}}">About Us</a>
                                    </li>
                                    <li>
                                    <a href="{{route('about')}}">Terms of Payments</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="footer-contact">
                        <div class="footer-heading">
                            <h3>CONTACT US</h3>
                        </div>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Jomo Kenyatta International Airport, Cargo Centre</span>
                            </li>
                            <li>
                                <i class="fa fa-clock-o"></i>
                                <span>7:00 Am - 5:00 Pm. Monday - Saturday</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>+254 729 277207</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <span> info@rennyexporters</span>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-copyright">
                    <p style="text-align:center !important;">&copy;
                        <span id="year"></span> Renny Exporters| All rights reserved.</p>
                </div>
                <ul class="footer-socials">
                    <li>
                        <a class="fa fa-facebook" href="facebook.com"></a>
                    </li>
                    <li>
                        <a class="fa fa-twitter" href="twitter.com"></a>
                    </li>
                    <li>
                        <a class="fa fa-youtube" href="youtube.com"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        var year = new Date();
        document.getElementById('year').innerHTML = year.getFullYear();
    </script>
    <!-- end .footer-2-->
</footer>
