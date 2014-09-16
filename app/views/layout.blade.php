<!DOCTYPE HTML>
<head>
    <title>Free Ecomm Template Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    @section('styles')
    {{ HTML::style('dist/css/styles.css') }}
    @show

</head>
<body>
@section('body')
@section('header')
@include('partials.header')
@show


<div class="main">
<div class="content">
@include('partials.content_top')
<div class="content_bottom">
<div class="wrap">
<div class="content-bottom-left">
    <div class="categories">
        <ul>
            <h3>Browse All Categories</h3>
            @foreach(Category::all() as $category)
            <li><a href="#">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="buters-guide">
        <h3>Buyers Guide</h3>
        <p><span>We want you to be happy with your purchase.</span></p>
        <p>So we're committed to giving you all the tools to make the right decision with minimum fuss. </p>
    </div>
    <div class="add-banner">
        <img src="ecomm/images/camera.png" alt="" />
        <div class="banner-desc">
            <h4>Electronics</h4>
            <a href="#">More Info</a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="add-banner add-banner2">
        <img src="ecomm/images/computer.png" alt="" />
        <div class="banner-desc">
            <h4>Computers</h4>
            <a href="#">More Info</a>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="content-bottom-right">
    <h3>Browse All Categories</h3>
    <div class="section group">
        <div class="grid_1_of_4 images_1_of_4">
            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
            <a href="preview.html"><img src="ecomm/images/product-img1.jpg" alt="" /></a>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$839.93 </span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.html">More Info</a></h4>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
            <a href="preview.html"><img src="ecomm/images/product-img2.jpg" alt="" /></a>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$839.93 </span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.html">More Info</a></h4>
                </div>
                <div class="clear"></div>
            </div>

        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
            <a href="preview.html"><img src="ecomm/images/product-img3.jpg" alt="" /></a>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$839.93 </span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.html">More Info</a></h4>
                </div>
                <div class="clear"></div>
            </div>

        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
            <a href="preview.html"><img src="ecomm/images/product-img4.jpg" alt="" /></a>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$839.93 </span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.html">More Info</a></h4>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="section group">
        <div class="grid_1_of_4 images_1_of_4">
            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
            <a href="preview.html"><img src="ecomm/images/product-img1.jpg" alt="" /></a>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$839.93 </span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.html">More Info</a></h4>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
            <a href="preview.html"><img src="ecomm/images/product-img2.jpg" alt="" /></a>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$839.93 </span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.html">More Info</a></h4>
                </div>
                <div class="clear"></div>
            </div>

        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
            <a href="preview.html"><img src="ecomm/images/product-img3.jpg" alt="" /></a>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$839.93 </span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.html">More Info</a></h4>
                </div>
                <div class="clear"></div>
            </div>

        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
            <a href="preview.html"><img src="ecomm/images/product-img4.jpg" alt="" /></a>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$839.93 </span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.html">More Info</a></h4>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="section group">
        <div class="grid_1_of_4 images_1_of_4">
            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
            <a href="preview.html"><img src="ecomm/images/product-img1.jpg" alt="" /></a>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$839.93 </span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.html">More Info</a></h4>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
            <a href="preview.html"><img src="ecomm/images/product-img2.jpg" alt="" /></a>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$839.93 </span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.html">More Info</a></h4>
                </div>
                <div class="clear"></div>
            </div>

        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
            <a href="preview.html"><img src="ecomm/images/product-img3.jpg" alt="" /></a>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$839.93 </span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.html">More Info</a></h4>
                </div>
                <div class="clear"></div>
            </div>

        </div>
        <div class="grid_1_of_4 images_1_of_4">
            <h4><a href="preview.html">Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
            <a href="preview.html"><img src="ecomm/images/product-img4.jpg" alt="" /></a>
            <div class="price-details">
                <div class="price-number">
                    <p><span class="rupees">$839.93 </span></p>
                </div>
                <div class="add-cart">
                    <h4><a href="preview.html">More Info</a></h4>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="product-articles">
        <h3>Browse All Categories</h3>
        <ul>
            <li>
                <div class="article">
                    <p><span>Aenean vitae massa dolor</span></p>
                    <p>Phasellus in quam dui. Nunc ornare, tellus rutrum porttitor imperdiet, dui leo molestie nisl, sit amet dignissim nibh magna pharetra quam. Nunc ultrices pellentesque massa, ac adipiscing dui rutrum id. In cursus augue non erat faucibus eu condimentum dolor molestie.</p>
                    <p><a href="#">+ Read Full article</a></p>
                </div>
            </li>
            <li>
                <div class="article">
                    <p><span>Phasellus sollicitudin consectetur</span></p>
                    <p>Cras aliquam, odio ac consectetur tincidunt, eros nunc fermentum augue, quis rutrum ante lectus ac lectus. Fusce sed tellus orci, et feugiat urna. Integer et dictum leo. Nulla consectetur tempus orci sed consequat. Mauris cursus est a sapien venenatis faucibus. Etiam sagittis convallis volutpat.</p>
                    <p><a href="#">+ Read Full article</a></p>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
<div class="footer">
    <div class="wrap">
        <div class="copy_right">
            <p>Copy rights (c). All rights Reseverd | Template by  <a href="http://w3layouts.com" target="_blank">W3Layouts</a> </p>
        </div>
        <div class="footer-nav">
            <ul>
                <li><a href="#">Terms of Use</a> : </li>
                <li><a href="#">Privacy Policy</a> : </li>
                <li><a href="contact.html">Contact Us</a> : </li>
                <li><a href="#">Sitemap</a></li>
            </ul>
        </div>
    </div>
</div>
@show

@section('scripts')
{{ HTML::script('dist/js/scripts.js') }}

{{ HTML::script('ecomm/js/jquery-1.9.0.min.js') }}
{{ HTML::script('ecomm/js/jquery.openCarousel.js') }}
{{ HTML::script('ecomm/js/easing.js') }}
{{ HTML::script('ecomm/js/move-top.js') }}

<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop"> </a>
{{ HTML::script('ecomm/js/navigation.js') }}
@show
</body>
</html>

