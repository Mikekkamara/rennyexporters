<nav>
    <!-- nav-2-->
    <div class="section white-background" id="js-navbar">
        <div class="container">
            <div class="nav-1 nav-2">
                <button class="hamburger has-animation hamburger--collapse" id="toggle-icon">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <div class="logo">
                <a href="{{route('index')}}">
                        <img src="/images/new/logo.png" alt="Renny Exporters" />
                    </a>
                </div>
          
                <ul class="nav-menu">
                    <li class="has-drop">
                        <a class="has-text-color-hover" href="{{route('index')}}">HOME</a>
                        <button class="btn-caret fa fa-angle-right"></button>
                      
                    </li>
                    <li class="has-drop">
                        <a class="has-text-color-hover" href="{{route('products')}}">PRODUCTS</a>
                        <button class="btn-caret fa fa-angle-right"></button>
                       
                    </li>
                    <li class="has-drop">
                        <a class="has-text-color-hover" href="{{route('about')}}">ABOUT</a>
                        <button class="btn-caret fa fa-angle-right"></button>
                      
                    </li>
                    <li class="has-drop">
                    <a class="has-text-color-hover" href="{{route('order')}}">ORDER ONLINE</a>
                        <button class="btn-caret fa fa-angle-right"></button>
                      
                    </li>
                 
                    <li>
                        <a class="has-text-color-hover" href="{{route('contacts')}}">CONTACT US</a>
                    </li>
                </ul>
               
            </div>
        </div>
    </div>
    <!--end nav-2-->
</nav>