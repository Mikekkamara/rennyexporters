@extends('export.main')
@section('content')

<section>
        <div class="section primary-color-background">
            <div class="container">
                <div class="p-t-70 p-b-85">
                    <!-- Heading page-->
                    <div class="heading-page-1">
                        <h3>Contact Us</h3>
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
                        <a href="{{route('contacts')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="page-content p-t-40 p-b-90">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- .contact-1-->
                    <div class="contact-1">
                        {{-- <div class="contact-introduce">
                            <h4 class="title">Check here for the FAQ</h4>
                            <p>Get the details on commonly asked questions about us.</p>
                        </div> --}}
                        <div class="contact-info">
                            <h4 class="title">Contact information:</h4>
                            <div class="contact-row">
                                <div class="contact-col">
                                    <p>
                                        <i class="fa fa-map-marker"></i>
                                        <span>Jomo Kenyatta International Airport, Cargo Centre </span>
                                    </p>
                                    <p>
                                        <i class="fa fa-clock-o"></i>
                                        <span>7:00 Am - 5:00 Pm. Monday - Saturday</span>
                                    </p>
                                </div>
                                <div class="contact-col">
                                    <p>
                                        <i class="fa fa-phone"></i>
                                        <span>+254 729 277207</span>
                                    </p>
                                    <p>
                                        <i class="fa fa-envelope"></i>
                                        <span>info@rennyexporters</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end .contact-1-->
                </div>
                <div class="col-md-6">
                    <!-- .get-in-touch-->
                    <div class="get-in-touch">
                        <h4 class="title">Talk to us</h4>
                        <p>We're happy to answer questions or hear your feedback.</p>
                        <p>Just fill out the form below. We do our best to respond within 48 hours.</p>
                        <div class="add-comments-1">
                        <form class="submit-form" name="contactform" method="get" action="{{route('contact_form')}}">
                                @csrf
                                <div class="input-row m-b-20">
                                    <div class="p-r-5 input-col-5">
                                        <input type="text" name="name" placeholder="Your name *" required/>
                                    </div>
                                    <div class="p-l-5 input-col-5">
                                        <input type="text" name="email" placeholder="Your email *" required/>
                                    </div>
                                </div>
                                <div class="input-row m-b-20">
                                    <div class="p-r-5 input-col-5">
                                        <input type="text" name="subject" placeholder="Subject *" required/>
                                    </div>

                                </div>
                                <div class="input-row">
                                    <textarea placeholder="Comment *" name="message" required></textarea>
                                </div>
                                <button class="au-btn au-btn-radius au-btn-border btn-submit-comments" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                    <!-- end .get-in-touch-->
                </div>
            </div>
        </div>
        <div class="m-t-70">
            <!-- Contact map-->
            <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.225995999883!2d36.8165834!3d-1.2903935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa80e474be4afaf5d!2sUhuru%20Park!5e0!3m2!1sen!2ske!4v1573682300997!5m2!1sen!2ske" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true"></iframe>

            </div>
            <!-- end contact map-->
        </div>
        <div class="container">
            <!-- .call-to-action-4-->
            <div class="call-to-action-2 call-to-action-4">
                <div class="cta-heading">
                    <h3>Subscribe to our newsletter</h3>
                </div>
                <div class="cta-content">
                    <p>Be infomed of our new products and services.Subscribe now !</p>
                  </div>
                <div class="cta-form">
                <form action="{{route('newsletter')}}" method="GET">
                    @csrf

                            <input class="input-text" type="email" name="email" placeholder="Your email address" />
                            <button class="input-submit fa fa-send" type="submit"></button>
                    </form>
                </div>
            </div>
            <!-- end .call-to-action-4-->
        </div>
    </div>
@endsection
