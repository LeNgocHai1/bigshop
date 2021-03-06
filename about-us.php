<!DOCTYPE php>
<php>

<!-- Mirrored from demo.harnishdesign.net/php/bigshop/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2015 08:26:23 GMT -->
<head>
<meta charset="UTF-8" />
<title>Bigshop php Template</title>
<link href="image/favicon.png" rel="icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/slideshow.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/colorbox.php" media="screen" />
<link rel="stylesheet" type="text/css" href="css/carousel.css" media="screen" />
<!-- CSS Part End-->
<!-- JS Part Start-->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="js/cloud_zoom.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.dcjqaccordion.js"></script>
<!-- JS Part End-->
</head>
<body>
<div class="main-wrapper">
  <!-- Header Parts Start-->
  <div id="header">
    <!-- Top Right part Links-->
    <div id="welcome">
      <div id="language">Language
        <ul>
          <li><a title="English"><img src="image/flags/gb.png" alt="English" />English</a></li>
        </ul>
      </div>
      <div id="currency">Currency
        <ul>
          <li><a title="US Dollar"><b>$ - US Dollar</b></a></li>
          <li><a title="Euro">€ - Euro</a></li>
          <li><a title="Pound Sterling">£ - Pound Sterling</a></li>
        </ul>
      </div>
      <div class="links">My Account
        <ul>
          <li><a href="#">My Account</a></li>
          <li><a href="#" id="wishlist-total">Wish List (0)</a></li>
          <li><a href="cart.php">Shopping Cart</a></li>
          <li><a href="checkout.php">Checkout</a></li>
        </ul>
      </div>
      <a href="login.php">login</a> <a href="register.php">create an account</a> </div>
    <div id="logo"><a href="index.php"><img src="image/logo.png" title="ecommerce php Template" alt="ecommerce php Template" /></a></div>
    <div id="search">
      <div class="button-search"></div>
      <input type="text" value="" placeholder="" id="filter_name" name="search">
    </div>
    <!--Mini Cart Start-->
    <div id="cart">
      <div class="heading">
        <h4><img width="32" height="32" alt="small-cart-icon" src="image/cart-bg.png"></h4>
        <a><span id="cart-total">0 item(s) - $0.00</span></a></div>
      <div class="content">
        <div class="mini-cart-info">
          <table>
            <tbody>
              <tr>
                <td class="image"><a href="product.php"><img title="Chair Swing" alt="Chair Swing" width="43" height="43" src="image/product/samsung_tab_1-60x60.jpg"></a></td>
                <td class="name"><a href="product.php">Chair Swing</a></td>
                <td class="quantity">x&nbsp;1</td>
                <td class="total">$236.99</td>
                <td class="remove"><img title="Remove" alt="Remove" src="image/remove-small.png"></td>
              </tr>
              <tr>
                <td class="image"><a href="product.php"><img title="Eyewear Eyeglasses" alt="Eyewear Eyeglasses" width="43" height="43" src="image/product/apple_cinema_30-60x60.jpg"></a></td>
                <td class="name"><a href="product.php">Eyewear Eyeglasses</a></td>
                <td class="quantity">x&nbsp;1</td>
                <td class="total">$119.50</td>
                <td class="remove"><img title="Remove" alt="Remove" src="image/remove-small.png"></td>
              </tr>
              <tr>
                <td class="image"><a href="product.php"><img title="Nail Polish" alt="Nail Polish" width="43" height="43" src="image/product/hp_1-60x60.jpg"></a></td>
                <td class="name"><a href="product.php">Nail Polish</a></td>
                <td class="quantity">x&nbsp;1</td>
                <td class="total">$119.50</td>
                <td class="remove"><img title="Remove" alt="Remove" src="image/remove-small.png"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="mini-cart-total">
          <table>
            <tbody>
              <tr>
                <td class="right"><b>Sub-Total:</b></td>
                <td class="right">$399.99</td>
              </tr>
              <tr>
                <td class="right"><b>Eco Tax (-2.00):</b></td>
                <td class="right">$6.00</td>
              </tr>
              <tr>
                <td class="right"><b>VAT (17.5%):</b></td>
                <td class="right">$70.00</td>
              </tr>
              <tr>
                <td class="right"><b>Total:</b></td>
                <td class="right">$475.99</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="checkout"><a href="cart.php" class="button">View Cart</a> &nbsp; <a href="checkout.php" class="button">Checkout</a></div>
      </div>
    </div>
    <!--Mini Cart End-->
  </div>
  <!--Top Navigation Start-->
  <div id="menu"><span>Menu</span>
    <ul>
      <li class="home"><a  title="Home" href="index.php"><span>Home</span></a></li>
      <li><a href="category.php">Electronics</a>
        <div>
          <ul>
            <li><a href="category.php">Cameras</a></li>
            <li><a href="category.php">Phones</a></li>
            <li><a href="category.php">Tablets</a></li>
          </ul>
        </div>
      </li>
      <li><a href="category.php">Accessories</a> </li>
      <li><a href="category.php">Shoes</a>
        <div>
          <ul>
            <li><a href="category.php">Casual shoes</a></li>
            <li><a href="category.php">Fancy shoes</a></li>
            <li><a href="category.php">Sports shoes</a></li>
          </ul>
        </div>
      </li>
      <li><a href="category.php">Books</a>
        <div>
          <ul>
            <li><a href="category.php">Audio Books</a></li>
            <li><a href="category.php">Comedy Book</a></li>
            <li><a href="category.php">Comics Books</a></li>
            <li><a href="category.php">Computer Book</a></li>
            <li><a href="category.php">Cookies Books</a></li>
          </ul>
          <ul>
            <li><a href="category.php">English Books</a></li>
            <li><a href="category.php">Fashion Books</a></li>
            <li><a href="category.php">Games Books</a></li>
            <li><a href="category.php">God Books</a></li>
            <li><a href="category.php">Journal Book</a></li>
          </ul>
          <ul>
            <li><a href="category.php">Knowledge Books</a></li>
            <li><a href="category.php">Magic Books</a></li>
            <li><a href="category.php">Management Books</a></li>
            <li><a href="category.php">Student Books</a></li>
            <li><a href="category.php">Teachers Books</a></li>
          </ul>
          <ul>
            <li><a href="category.php">Toys Books</a></li>
            <li><a href="category.php">Travel Books</a></li>
            <li><a href="category.php">Video Books</a></li>
          </ul>
        </div>
      </li>
      <li><a href="category.php">Clothing</a>
        <div>
          <ul>
            <li><a href="category.php">Women Clothing</a></li>
            <li><a href="category.php">Men Clothing</a></li>
          </ul>
        </div>
      </li>
      <li><a href="category.php">Furniture</a> </li>
      <li><a href="category.php">Beauty &amp; Health Care</a> </li>
    </ul>
  </div>
  <!--Top Navigation Start-->
  <div id="container">
    <!--Left Part-->
    <div id="column-left">
      <!--Categories Part Start-->
      <div class="box">
        <div class="box-heading">Categories</div>
        <div class="box-content box-category">
          <ul id="custom_accordion">
            <li class="category25"><a class="cuuchild " href="category.php">Electronics</a> <span class="down"></span>
              <ul>
                <li class="category30"><a class="nochild " href="category.php">Cameras</a></li>
                <li class="category29"><a class="nochild " href="category.php">Phones</a></li>
                <li class="category28"><a class="cuuchild " href="category.php">Tablets</a> <span class="down"></span>
                  <ul>
                    <li class="category35"><a class="nochild " href="category.php">test 1</a></li>
                    <li class="category36"><a class="nochild " href="category.php">test 2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="category57"><a class="nochild " href="category.php">Accessories</a></li>
            <li class="category18"><a class="cuuchild " href="category.php">Shoes</a> <span class="down"></span>
              <ul>
                <li class="category46"><a class="nochild " href="category.php">Casual shoes</a></li>
                <li class="category45"><a class="nochild " href="category.php">Fancy shoes</a></li>
                <li><a class="nochild " href="category.php">Sports shoes</a></li>
              </ul>
            </li>
            <li><a class="cuuchild " href="category.php">Clothing</a> <span class="down"></span>
              <ul>
                <li><a class="nochild " href="category.php">Women Clothing</a></li>
                <li><a class="nochild " href="category.php">Men Clothing</a></li>
              </ul>
            </li>
            <li><a class="nochild " href="category.php">Furniture</a></li>
            <li><a class="nochild " href="category.php">Beauty &amp; Health Care</a></li>
            <li><a class="cuuchild " href="category.php">Books</a> <span class="down"></span>
              <ul>
                <li><a class="nochild " href="category.php">Audio Books</a></li>
                <li><a class="nochild " href="category.php">Comedy Book</a></li>
                <li><a class="nochild " href="category.php">Comics Books</a></li>
                <li><a class="nochild " href="category.php">Computer Book</a></li>
                <li><a class="nochild " href="category.php">Cookies Books</a></li>
                <li><a class="nochild " href="category.php">English Books</a></li>
                <li><a class="cuuchild " href="category.php">Fashion Books</a> <span class="down"></span>
                  <ul>
                    <li><a class="nochild " href="category.php">test 25</a></li>
                  </ul>
                </li>
                <li><a class="nochild " href="category.php">Games Books</a></li>
                <li><a class="nochild " href="category.php">God Books</a></li>
                <li><a class="nochild " href="category.php">Journal Book</a></li>
                <li><a class="nochild " href="category.php">Knowledge Books</a></li>
                <li><a class="nochild " href="category.php">Magic Books</a></li>
                <li><a class="nochild " href="category.php">Management Books</a></li>
                <li><a class="nochild " href="category.php">Student Books</a></li>
                <li><a class="nochild " href="category.php">Teachers Books</a></li>
                <li><a class="nochild " href="category.php">Toys Books</a></li>
                <li><a class="nochild " href="category.php">Travel Books</a></li>
                <li><a class="nochild " href="category.php">Video Books</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!--Categories Part End-->
      <!--Specials Product Start-->
      <div class="box">
        <div class="box-heading">Specials</div>
        <div class="box-content">
          <div class="box-product">
            <div>
              <div class="image"><a href="product.php"><img src="image/product/apple_cinema_30-60x60.jpg" alt="Apple Tablet Retina" /></a></div>
              <div class="name"><a href="product.php">Apple Tablet Retina</a></div>
              <div class="price"> <span class="price-old">$119.50</span> <span class="price-new">$107.75</span> </div>
              <div class="rating"><img src="image/stars-0.png" alt="Based on 0 reviews." /></div>
              <div class="cart">
                <input type="button" value="Add to Cart" onClick="addToCart('42');" class="button" />
              </div>
            </div>
            <div>
              <div class="image"><a href="product.php"><img src="image/product/canon_eos_5d_1-60x60.jpg" alt="Canon Digital Camera" /></a></div>
              <div class="name"><a href="product.php">Canon Digital Camera</a></div>
              <div class="price"> <span class="price-old">$119.50</span> <span class="price-new">$96.00</span> </div>
              <div class="rating"><img src="image/stars-0.png" alt="Based on 0 reviews." /></div>
              <div class="cart">
                <input type="button" value="Add to Cart" onClick="addToCart('30');" class="button" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Specials Product End-->
    </div>
    <!--Left End-->
    <!--Middle Part Start-->
    <div id="content">
      <!--Breadcrumb Part Start-->
      <div class="breadcrumb"><a href="index.php">Home</a> » <a href="about-us.php">About Us</a></div>
      <!--Breadcrumb Part End-->
      <h1>About Us</h1>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
        <br>
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.<br>
        <br>
        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. </p>
    </div>
    <!--Middle Part End-->
    <div class="clear"></div>
    <div class="social-part">
      <!--Facebook Fun Box Start-->
      <div id="facebook" >
      <div class="facebook-inner">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../../../connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-like-box" data-href="http://www.facebook.com/160281810726316" data-width="585" data-show-faces="true" data-stream="false" data-header="false" data-border-color="#fff"></div>
      </div></div>
      <!--Facebook Fun Box End-->
      <!--Twitter Feeds Box Start-->
      <div id="twitter_footer">
<a class="twitter-timeline" href="https://twitter.com/harnishdesign" data-chrome="noheader nofooter noborders noscrollbar transparent" data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="347621595801608192">Tweets by @harnishdesign</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
      <!--Twitter Feeds Box End-->
    </div>
  </div>
</div>
<!--Footer Part Start-->
<div id="footer">
  <div class="column">
    <h3>Information</h3>
    <ul>
      <li><a href="about-us.php">About Us</a></li>
      <li><a href="about-us.php">Delivery Information</a></li>
      <li><a href="about-us.php">Privacy Policy</a></li>
      <li><a href="elements.php">Elements</a></li>
    </ul>
  </div>
  <div class="column">
    <h3>Customer Service</h3>
    <ul>
      <li><a href="contact-us.php">Contact Us</a></li>
      <li><a href="#">Returns</a></li>
      <li><a href="sitemap.php">Site Map</a></li>
    </ul>
  </div>
  <div class="column">
    <h3>Extras</h3>
    <ul>
      <li><a href="#">Brands</a></li>
      <li><a href="#">Gift Vouchers</a></li>
      <li><a href="#">Affiliates</a></li>
      <li><a href="#">Specials</a></li>
    </ul>
  </div>
  <div class="column">
    <h3>My Account</h3>
    <ul>
      <li><a href="#">My Account</a></li>
      <li><a href="#">Order History</a></li>
      <li><a href="#">Wish List</a></li>
      <li><a href="#">Newsletter</a></li>
    </ul>
  </div>
  <div class="contact">
    <ul>
      <li class="address">Second plaza, Delhi, india.</li>
      <li class="mobile">191 191 91 19</li>
      <li class="email"><a href="mailto:info@demo.com">info@demo.com</a></li>
      <li class="fax">191 191 91 19</li>
    </ul>
  </div>
  <div class="social"> <a href="http://facebook.com/160281810726316" target="_blank"><img src="image/facebook.png" alt="Facebook" title="Facebook"></a> <a href="https://twitter.com/#!/#" target="_blank"><img src="image/twitter.png" alt="Twitter" title="Twitter"></a> <a href="https://plus.google.com/u/0/#" target="_blank"><img src="image/googleplus.png" alt="Google+" title="Google+"></a> <a href="http://pinterest.com/#" target="_blank"><img src="image/pinterest.png" alt="Pinterest" title="Pinterest"></a> <a href="#" target="_blank"><img src="image/rss.png" alt="RSS" title="RSS"></a> <a href="http://www.vimeo.com/#" target="_blank"><img src="image/vimeo.png" alt="Vimeo" title="Vimeo"></a> <a href="http://www.flickr.com/photos/#" target="_blank"><img src="image/flickr.png" alt="flickr" title="Flickr"></a> <a href="http://www.youtube.com/#" target="_blank"><img src="image/youtube.png" alt="YouTube" title="YouTube"></a> <a href="skype:#?call" target="_blank"><img src="image/skype.png" alt="skype" title="Skype"></a> <a href="#" target="_blank"><img src="image/blogger.png" alt="Blogger" title="Blogger"></a> </div>
  <div class="clear"></div>
  <div id="powered">Bigshop <a href="#">php Template </a> &copy; 2013 &nbsp;|&nbsp; Template By <a target="_blank" href="http://harnishdesign.net/">Harnish Design</a>
    <div class="payments_types"> <img src="image/payment_paypal.png" alt="paypal" title="PayPal"> <img src="image/payment_american.png" alt="american-express" title="American Express"> <img src="image/payment_2checkout.png" alt="2checkout" title="2checkout"> <img src="image/payment_maestro.png" alt="maestro" title="Maestro"> <img src="image/payment_discover.png" alt="discover" title="Discover"> <img src="image/payment_mastercard.png" alt="mastercard" title="MasterCard"> <img src="image/payment_visa.png" alt="visa" title="Visa"> <img src="image/payment_sagepay.png" alt="sagepay" title="sagepay"> <img src="image/payment_moneybookers.png" alt="moneybookers" title="Moneybookers"> </div>
  </div>
</div>
<!--Footer Part End-->
</body>

<!-- Mirrored from demo.harnishdesign.net/php/bigshop/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2015 08:26:23 GMT -->
</php>