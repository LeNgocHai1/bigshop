<!DOCTYPE php>
<php>

<!-- Mirrored from demo.harnishdesign.net/php/bigshop/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2015 08:26:01 GMT -->
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
      <!--Latest Product Start-->
      <div class="box">
        <div class="box-heading">Latest</div>
        <div class="box-content">
          <div class="box-product">
            <div>
              <div class="image"><a href="product.php"><img src="image/product/samsung_tab_1-60x60.jpg" alt="Chair Swing" /></a></div>
              <div class="name"><a href="product.php">Chair Swing</a></div>
              <div class="price"> $236.99 </div>
              <div class="rating"><img src="image/stars-3.png" alt="Based on 1 reviews." /></div>
            </div>
            <div>
              <div class="image"><a href="product.php"><img src="image/product/ipod_classic_1-60x60.jpg" alt="iPad Classic" /></a></div>
              <div class="name"><a href="product.php">iPad Classic</a></div>
              <div class="price"> $119.50 </div>
              <div class="rating"><img src="image/stars-0.png" alt="Based on 0 reviews." /></div>
            </div>
            <div>
              <div class="image"><a href="product.php"><img src="image/product/hp_1-60x60.jpg" alt="Casual Saddle Shoes" /></a></div>
              <div class="name"><a href="product.php">Casual Saddle Shoes</a></div>
              <div class="price"> $119.50 </div>
              <div class="rating"><img src="image/stars-3.png" alt="Based on 3 reviews." /></div>
            </div>
            <div>
              <div class="image"><a href="product.php"><img src="image/product/sony_vaio_1-60x60.jpg" alt="Silver Cuff Bracelet" /></a></div>
              <div class="name"><a href="product.php">Silver Cuff Bracelet</a></div>
              <div class="price"> $1,177.00 </div>
              <div class="rating"><img src="image/stars-0.png" alt="Based on 0 reviews." /></div>
            </div>
            <div>
              <div class="image"><a href="product.php"><img src="image/product/macbook_pro_1-60x60.jpg" alt="MacBook Pro" /></a></div>
              <div class="name"><a href="product.php">MacBook Pro</a></div>
              <div class="price"> $2,000.00 </div>
              <div class="rating"><img src="image/stars-5.png" alt="Based on 5 reviews." /></div>
            </div>
          </div>
        </div>
      </div>
      <!--Latest Product End-->
    </div>
    <!--Left End-->
    <!--Middle Part Start-->
    <div id="content">
      <!--Breadcrumb Part Start-->
      <div class="breadcrumb"> <a href="index.php">Home</a> » <a href="#">Shopping Cart</a></div>
      <!--Breadcrumb Part End-->
      <h1>Checkout</h1>
      <div class="checkout">
        <div class="checkout-heading">Step 1: Checkout Options</div>
        <div class="checkout-content" style="display: block;">
          <div class="left">
            <h2>New Customer</h2>
            <p>Checkout Options:</p>
            <label for="register">
              <input type="radio" checked="checked" id="register" value="register" name="account">
              <b>Register Account</b></label>
            <br>
            <label for="guest">
              <input type="radio" id="guest" value="guest" name="account">
              <b>Guest Checkout</b></label>
            <br>
            <br>
            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
            <input type="button" class="button" id="button-account" value="Continue">
            <br>
            <br>
          </div>
          <div class="right" id="login">
            <h2>Returning Customer</h2>
            <p>I am a returning customer</p>
            <b>E-Mail:</b><br>
            <input type="text" value="" name="email">
            <br>
            <br>
            <b>Password:</b><br>
            <input type="password" value="" name="password">
            <br>
            <a href="#">Forgotten Password</a><br>
            <br>
            <input type="button" class="button" id="button-login" value="Login">
            <br>
            <br>
          </div>
        </div>
      </div>
      <div class="checkout">
        <div class="checkout-heading">Step 2: Account & Billing Details</div>
        <div class="checkout-content">
          <table class="form">
            <tbody>
              <tr>
                <td><span class="required">*</span> First Name:</td>
                <td><input type="text" class="large-field" value="" name="firstname"></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Last Name:</td>
                <td><input type="text" class="large-field" value="" name="lastname"></td>
              </tr>
              <tr>
                <td>Company:</td>
                <td><input type="text" class="large-field" value="" name="company"></td>
              </tr>
              <tr>
                <td> Company ID:</td>
                <td><input type="text" class="large-field" value="" name="company_id"></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Address 1:</td>
                <td><input type="text" class="large-field" value="" name="address_1"></td>
              </tr>
              <tr>
                <td>Address 2:</td>
                <td><input type="text" class="large-field" value="" name="address_2"></td>
              </tr>
              <tr>
                <td><span class="required">*</span> City:</td>
                <td><input type="text" class="large-field" value="" name="city"></td>
              </tr>
              <tr>
                <td><span class="required" id="payment-postcode-required">*</span> Post Code:</td>
                <td><input type="text" class="large-field" value="" name="postcode"></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Country:</td>
                <td><select class="large-field" name="country_id">
                    <option value=""> --- Please Select --- </option>
                    <option value="244">Aaland Islands</option>
                    <option value="1">Afghanistan</option>
                    <option value="2">Albania</option>
                    <option value="3">Algeria</option>
                    <option value="4">American Samoa</option>
                    <option value="5">Andorra</option>
                    <option value="6">Angola</option>
                    <option value="7">Anguilla</option>
                    <option value="8">Antarctica</option>
                    <option value="9">Antigua and Barbuda</option>
                    <option value="10">Argentina</option>
                    <option value="11">Armenia</option>
                    <option value="12">Aruba</option>
                    <option value="13">Australia</option>
                    <option value="14">Austria</option>
                    <option value="15">Azerbaijan</option>
                    <option value="16">Bahamas</option>
                    <option value="17">Bahrain</option>
                    <option value="18">Bangladesh</option>
                    <option value="19">Barbados</option>
                    <option value="20">Belarus</option>
                    <option value="21">Belgium</option>
                    <option value="22">Belize</option>
                    <option value="23">Benin</option>
                    <option value="24">Bermuda</option>
                    <option value="25">Bhutan</option>
                    <option value="26">Bolivia</option>
                    <option value="245">Bonaire, Sint Eustatius and Saba</option>
                    <option value="27">Bosnia and Herzegovina</option>
                    <option value="28">Botswana</option>
                    <option value="29">Bouvet Island</option>
                    <option value="30">Brazil</option>
                    <option value="31">British Indian Ocean Territory</option>
                    <option value="32">Brunei Darussalam</option>
                    <option value="33">Bulgaria</option>
                    <option value="34">Burkina Faso</option>
                    <option value="35">Burundi</option>
                    <option value="36">Cambodia</option>
                    <option value="37">Cameroon</option>
                    <option value="38">Canada</option>
                    <option value="251">Canary Islands</option>
                    <option value="39">Cape Verde</option>
                    <option value="40">Cayman Islands</option>
                    <option value="41">Central African Republic</option>
                    <option value="42">Chad</option>
                    <option value="43">Chile</option>
                    <option value="44">China</option>
                    <option value="45">Christmas Island</option>
                    <option value="46">Cocos (Keeling) Islands</option>
                    <option value="47">Colombia</option>
                    <option value="48">Comoros</option>
                    <option value="49">Congo</option>
                    <option value="50">Cook Islands</option>
                    <option value="51">Costa Rica</option>
                    <option value="52">Cote D'Ivoire</option>
                    <option value="53">Croatia</option>
                    <option value="54">Cuba</option>
                    <option value="246">Curacao</option>
                    <option value="55">Cyprus</option>
                    <option value="56">Czech Republic</option>
                    <option value="237">Democratic Republic of Congo</option>
                    <option value="57">Denmark</option>
                    <option value="58">Djibouti</option>
                    <option value="59">Dominica</option>
                    <option value="60">Dominican Republic</option>
                    <option value="61">East Timor</option>
                    <option value="62">Ecuador</option>
                    <option value="63">Egypt</option>
                    <option value="64">El Salvador</option>
                    <option value="65">Equatorial Guinea</option>
                    <option value="66">Eritrea</option>
                    <option value="67">Estonia</option>
                    <option value="68">Ethiopia</option>
                    <option value="69">Falkland Islands (Malvinas)</option>
                    <option value="70">Faroe Islands</option>
                    <option value="71">Fiji</option>
                    <option value="72">Finland</option>
                    <option value="74">France, Metropolitan</option>
                    <option value="75">French Guiana</option>
                    <option value="76">French Polynesia</option>
                    <option value="77">French Southern Territories</option>
                    <option value="126">FYROM</option>
                    <option value="78">Gabon</option>
                    <option value="79">Gambia</option>
                    <option value="80">Georgia</option>
                    <option value="81">Germany</option>
                    <option value="82">Ghana</option>
                    <option value="83">Gibraltar</option>
                    <option value="84">Greece</option>
                    <option value="85">Greenland</option>
                    <option value="86">Grenada</option>
                    <option value="87">Guadeloupe</option>
                    <option value="88">Guam</option>
                    <option value="89">Guatemala</option>
                    <option value="241">Guernsey</option>
                    <option value="90">Guinea</option>
                    <option value="91">Guinea-Bissau</option>
                    <option value="92">Guyana</option>
                    <option value="93">Haiti</option>
                    <option value="94">Heard and Mc Donald Islands</option>
                    <option value="95">Honduras</option>
                    <option value="96">Hong Kong</option>
                    <option value="97">Hungary</option>
                    <option value="98">Iceland</option>
                    <option value="99">India</option>
                    <option value="100">Indonesia</option>
                    <option value="101">Iran (Islamic Republic of)</option>
                    <option value="102">Iraq</option>
                    <option value="103">Ireland</option>
                    <option value="104">Israel</option>
                    <option value="105">Italy</option>
                    <option value="106">Jamaica</option>
                    <option value="107">Japan</option>
                    <option value="240">Jersey</option>
                    <option value="108">Jordan</option>
                    <option value="109">Kazakhstan</option>
                    <option value="110">Kenya</option>
                    <option value="111">Kiribati</option>
                    <option value="113">Korea, Republic of</option>
                    <option value="114">Kuwait</option>
                    <option value="115">Kyrgyzstan</option>
                    <option value="116">Lao People's Democratic Republic</option>
                    <option value="117">Latvia</option>
                    <option value="118">Lebanon</option>
                    <option value="119">Lesotho</option>
                    <option value="120">Liberia</option>
                    <option value="121">Libyan Arab Jamahiriya</option>
                    <option value="122">Liechtenstein</option>
                    <option value="123">Lithuania</option>
                    <option value="124">Luxembourg</option>
                    <option value="125">Macau</option>
                    <option value="127">Madagascar</option>
                    <option value="128">Malawi</option>
                    <option value="129">Malaysia</option>
                    <option value="130">Maldives</option>
                    <option value="131">Mali</option>
                    <option value="132">Malta</option>
                    <option value="133">Marshall Islands</option>
                    <option value="134">Martinique</option>
                    <option value="135">Mauritania</option>
                    <option value="136">Mauritius</option>
                    <option value="137">Mayotte</option>
                    <option value="138">Mexico</option>
                    <option value="139">Micronesia, Federated States of</option>
                    <option value="140">Moldova, Republic of</option>
                    <option value="141">Monaco</option>
                    <option value="142">Mongolia</option>
                    <option value="242">Montenegro</option>
                    <option value="143">Montserrat</option>
                    <option value="144">Morocco</option>
                    <option value="145">Mozambique</option>
                    <option value="146">Myanmar</option>
                    <option value="147">Namibia</option>
                    <option value="148">Nauru</option>
                    <option value="149">Nepal</option>
                    <option value="150">Netherlands</option>
                    <option value="151">Netherlands Antilles</option>
                    <option value="152">New Caledonia</option>
                    <option value="153">New Zealand</option>
                    <option value="154">Nicaragua</option>
                    <option value="155">Niger</option>
                    <option value="156">Nigeria</option>
                    <option value="157">Niue</option>
                    <option value="158">Norfolk Island</option>
                    <option value="112">North Korea</option>
                    <option value="159">Northern Mariana Islands</option>
                    <option value="160">Norway</option>
                    <option value="161">Oman</option>
                    <option value="162">Pakistan</option>
                    <option value="163">Palau</option>
                    <option value="247">Palestinian Territory, Occupied</option>
                    <option value="164">Panama</option>
                    <option value="165">Papua New Guinea</option>
                    <option value="166">Paraguay</option>
                    <option value="167">Peru</option>
                    <option value="168">Philippines</option>
                    <option value="169">Pitcairn</option>
                    <option value="170">Poland</option>
                    <option value="171">Portugal</option>
                    <option value="172">Puerto Rico</option>
                    <option value="173">Qatar</option>
                    <option value="174">Reunion</option>
                    <option value="175">Romania</option>
                    <option value="176">Russian Federation</option>
                    <option value="177">Rwanda</option>
                    <option value="178">Saint Kitts and Nevis</option>
                    <option value="179">Saint Lucia</option>
                    <option value="180">Saint Vincent and the Grenadines</option>
                    <option value="181">Samoa</option>
                    <option value="182">San Marino</option>
                    <option value="183">Sao Tome and Principe</option>
                    <option value="184">Saudi Arabia</option>
                    <option value="185">Senegal</option>
                    <option value="243">Serbia</option>
                    <option value="186">Seychelles</option>
                    <option value="187">Sierra Leone</option>
                    <option value="188">Singapore</option>
                    <option value="189">Slovak Republic</option>
                    <option value="190">Slovenia</option>
                    <option value="191">Solomon Islands</option>
                    <option value="192">Somalia</option>
                    <option value="193">South Africa</option>
                    <option value="194">South Georgia &amp; South Sandwich Islands</option>
                    <option value="248">South Sudan</option>
                    <option value="195">Spain</option>
                    <option value="196">Sri Lanka</option>
                    <option value="249">St. Barthelemy</option>
                    <option value="197">St. Helena</option>
                    <option value="250">St. Martin (French part)</option>
                    <option value="198">St. Pierre and Miquelon</option>
                    <option value="199">Sudan</option>
                    <option value="200">Suriname</option>
                    <option value="201">Svalbard and Jan Mayen Islands</option>
                    <option value="202">Swaziland</option>
                    <option value="203">Sweden</option>
                    <option value="204">Switzerland</option>
                    <option value="205">Syrian Arab Republic</option>
                    <option value="206">Taiwan</option>
                    <option value="207">Tajikistan</option>
                    <option value="208">Tanzania, United Republic of</option>
                    <option value="209">Thailand</option>
                    <option value="210">Togo</option>
                    <option value="211">Tokelau</option>
                    <option value="212">Tonga</option>
                    <option value="213">Trinidad and Tobago</option>
                    <option value="214">Tunisia</option>
                    <option value="215">Turkey</option>
                    <option value="216">Turkmenistan</option>
                    <option value="217">Turks and Caicos Islands</option>
                    <option value="218">Tuvalu</option>
                    <option value="219">Uganda</option>
                    <option value="220">Ukraine</option>
                    <option value="221">United Arab Emirates</option>
                    <option selected="selected" value="222">United Kingdom</option>
                    <option value="223">United States</option>
                    <option value="224">United States Minor Outlying Islands</option>
                    <option value="225">Uruguay</option>
                    <option value="226">Uzbekistan</option>
                    <option value="227">Vanuatu</option>
                    <option value="228">Vatican City State (Holy See)</option>
                    <option value="229">Venezuela</option>
                    <option value="230">Viet Nam</option>
                    <option value="231">Virgin Islands (British)</option>
                    <option value="232">Virgin Islands (U.S.)</option>
                    <option value="233">Wallis and Futuna Islands</option>
                    <option value="234">Western Sahara</option>
                    <option value="235">Yemen</option>
                    <option value="238">Zambia</option>
                    <option value="239">Zimbabwe</option>
                  </select></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Region / State:</td>
                <td><select class="large-field" name="zone_id">
                    <option value=""> --- Please Select --- </option>
                    <option value="3513">Aberdeen</option>
                    <option value="3514">Aberdeenshire</option>
                    <option value="3515">Anglesey</option>
                    <option value="3516">Angus</option>
                    <option value="3517">Argyll and Bute</option>
                    <option value="3518">Bedfordshire</option>
                    <option value="3519">Berkshire</option>
                    <option value="3520">Blaenau Gwent</option>
                    <option value="3521">Bridgend</option>
                    <option value="3522">Bristol</option>
                    <option value="3523">Buckinghamshire</option>
                    <option value="3524">Caerphilly</option>
                    <option value="3525">Cambridgeshire</option>
                    <option value="3526">Cardiff</option>
                    <option value="3527">Carmarthenshire</option>
                    <option value="3528">Ceredigion</option>
                    <option value="3529">Cheshire</option>
                    <option value="3530">Clackmannanshire</option>
                    <option value="3531">Conwy</option>
                    <option value="3532">Cornwall</option>
                    <option value="3949">County Antrim</option>
                    <option value="3950">County Armagh</option>
                    <option value="3951">County Down</option>
                    <option value="3952">County Fermanagh</option>
                    <option value="3953">County Londonderry</option>
                    <option value="3954">County Tyrone</option>
                    <option value="3955">Cumbria</option>
                    <option value="3533">Denbighshire</option>
                    <option value="3534">Derbyshire</option>
                    <option value="3535">Devon</option>
                    <option value="3536">Dorset</option>
                    <option value="3537">Dumfries and Galloway</option>
                    <option value="3538">Dundee</option>
                    <option value="3539">Durham</option>
                    <option value="3540">East Ayrshire</option>
                    <option value="3541">East Dunbartonshire</option>
                    <option value="3542">East Lothian</option>
                    <option value="3543">East Renfrewshire</option>
                    <option value="3544">East Riding of Yorkshire</option>
                    <option value="3545">East Sussex</option>
                    <option value="3546">Edinburgh</option>
                    <option value="3547">Essex</option>
                    <option value="3548">Falkirk</option>
                    <option value="3549">Fife</option>
                    <option value="3550">Flintshire</option>
                    <option value="3551">Glasgow</option>
                    <option value="3552">Gloucestershire</option>
                    <option value="3553">Greater London</option>
                    <option value="3554">Greater Manchester</option>
                    <option value="3555">Gwynedd</option>
                    <option value="3556">Hampshire</option>
                    <option value="3557">Herefordshire</option>
                    <option value="3558">Hertfordshire</option>
                    <option value="3559">Highlands</option>
                    <option value="3560">Inverclyde</option>
                    <option value="3972">Isle of Man</option>
                    <option value="3561">Isle of Wight</option>
                    <option value="3562">Kent</option>
                    <option value="3563">Lancashire</option>
                    <option value="3564">Leicestershire</option>
                    <option value="3565">Lincolnshire</option>
                    <option value="3566">Merseyside</option>
                    <option value="3567">Merthyr Tydfil</option>
                    <option value="3568">Midlothian</option>
                    <option value="3569">Monmouthshire</option>
                    <option value="3570">Moray</option>
                    <option value="3571">Neath Port Talbot</option>
                    <option value="3572">Newport</option>
                    <option value="3573">Norfolk</option>
                    <option value="3574">North Ayrshire</option>
                    <option value="3575">North Lanarkshire</option>
                    <option value="3576">North Yorkshire</option>
                    <option value="3577">Northamptonshire</option>
                    <option value="3578">Northumberland</option>
                    <option value="3579">Nottinghamshire</option>
                    <option value="3580">Orkney Islands</option>
                    <option value="3581">Oxfordshire</option>
                    <option value="3582">Pembrokeshire</option>
                    <option value="3583">Perth and Kinross</option>
                    <option value="3584">Powys</option>
                    <option value="3585">Renfrewshire</option>
                    <option value="3586">Rhondda Cynon Taff</option>
                    <option value="3587">Rutland</option>
                    <option value="3588">Scottish Borders</option>
                    <option value="3589">Shetland Islands</option>
                    <option value="3590">Shropshire</option>
                    <option value="3591">Somerset</option>
                    <option value="3592">South Ayrshire</option>
                    <option value="3593">South Lanarkshire</option>
                    <option value="3594">South Yorkshire</option>
                    <option value="3595">Staffordshire</option>
                    <option value="3596">Stirling</option>
                    <option value="3597">Suffolk</option>
                    <option value="3598">Surrey</option>
                    <option value="3599">Swansea</option>
                    <option value="3600">Torfaen</option>
                    <option value="3601">Tyne and Wear</option>
                    <option value="3602">Vale of Glamorgan</option>
                    <option value="3603">Warwickshire</option>
                    <option value="3604">West Dunbartonshire</option>
                    <option value="3605">West Lothian</option>
                    <option value="3606">West Midlands</option>
                    <option value="3607">West Sussex</option>
                    <option value="3608">West Yorkshire</option>
                    <option value="3609">Western Isles</option>
                    <option value="3610">Wiltshire</option>
                    <option value="3611">Worcestershire</option>
                    <option value="3612">Wrexham</option>
                  </select></td>
              </tr>
            </tbody>
          </table>
          <div class="buttons">
            <div class="right">
              <input type="button" class="button" id="button-payment-address" value="Continue">
            </div>
          </div>
        </div>
      </div>
      <div class="checkout">
        <div class="checkout-heading">Step 3: Shipping Details</div>
        <div class="checkout-content">
          <table class="form">
            <tbody>
              <tr>
                <td><span class="required">*</span> First Name:</td>
                <td><input type="text" class="large-field" value="" name="firstname"></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Last Name:</td>
                <td><input type="text" class="large-field" value="" name="lastname"></td>
              </tr>
              <tr>
                <td>Company:</td>
                <td><input type="text" class="large-field" value="" name="company"></td>
              </tr>
              <tr>
                <td> Company ID:</td>
                <td><input type="text" class="large-field" value="" name="company_id"></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Address 1:</td>
                <td><input type="text" class="large-field" value="" name="address_1"></td>
              </tr>
              <tr>
                <td>Address 2:</td>
                <td><input type="text" class="large-field" value="" name="address_2"></td>
              </tr>
              <tr>
                <td><span class="required">*</span> City:</td>
                <td><input type="text" class="large-field" value="" name="city"></td>
              </tr>
              <tr>
                <td><span class="required" id="payment-postcode-required">*</span> Post Code:</td>
                <td><input type="text" class="large-field" value="" name="postcode"></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Country:</td>
                <td><select class="large-field" name="country_id">
                    <option value=""> --- Please Select --- </option>
                    <option value="244">Aaland Islands</option>
                    <option value="1">Afghanistan</option>
                    <option value="2">Albania</option>
                    <option value="3">Algeria</option>
                    <option value="4">American Samoa</option>
                    <option value="5">Andorra</option>
                    <option value="6">Angola</option>
                    <option value="7">Anguilla</option>
                    <option value="8">Antarctica</option>
                    <option value="9">Antigua and Barbuda</option>
                    <option value="10">Argentina</option>
                    <option value="11">Armenia</option>
                    <option value="12">Aruba</option>
                    <option value="13">Australia</option>
                    <option value="14">Austria</option>
                    <option value="15">Azerbaijan</option>
                    <option value="16">Bahamas</option>
                    <option value="17">Bahrain</option>
                    <option value="18">Bangladesh</option>
                    <option value="19">Barbados</option>
                    <option value="20">Belarus</option>
                    <option value="21">Belgium</option>
                    <option value="22">Belize</option>
                    <option value="23">Benin</option>
                    <option value="24">Bermuda</option>
                    <option value="25">Bhutan</option>
                    <option value="26">Bolivia</option>
                    <option value="245">Bonaire, Sint Eustatius and Saba</option>
                    <option value="27">Bosnia and Herzegovina</option>
                    <option value="28">Botswana</option>
                    <option value="29">Bouvet Island</option>
                    <option value="30">Brazil</option>
                    <option value="31">British Indian Ocean Territory</option>
                    <option value="32">Brunei Darussalam</option>
                    <option value="33">Bulgaria</option>
                    <option value="34">Burkina Faso</option>
                    <option value="35">Burundi</option>
                    <option value="36">Cambodia</option>
                    <option value="37">Cameroon</option>
                    <option value="38">Canada</option>
                    <option value="251">Canary Islands</option>
                    <option value="39">Cape Verde</option>
                    <option value="40">Cayman Islands</option>
                    <option value="41">Central African Republic</option>
                    <option value="42">Chad</option>
                    <option value="43">Chile</option>
                    <option value="44">China</option>
                    <option value="45">Christmas Island</option>
                    <option value="46">Cocos (Keeling) Islands</option>
                    <option value="47">Colombia</option>
                    <option value="48">Comoros</option>
                    <option value="49">Congo</option>
                    <option value="50">Cook Islands</option>
                    <option value="51">Costa Rica</option>
                    <option value="52">Cote D'Ivoire</option>
                    <option value="53">Croatia</option>
                    <option value="54">Cuba</option>
                    <option value="246">Curacao</option>
                    <option value="55">Cyprus</option>
                    <option value="56">Czech Republic</option>
                    <option value="237">Democratic Republic of Congo</option>
                    <option value="57">Denmark</option>
                    <option value="58">Djibouti</option>
                    <option value="59">Dominica</option>
                    <option value="60">Dominican Republic</option>
                    <option value="61">East Timor</option>
                    <option value="62">Ecuador</option>
                    <option value="63">Egypt</option>
                    <option value="64">El Salvador</option>
                    <option value="65">Equatorial Guinea</option>
                    <option value="66">Eritrea</option>
                    <option value="67">Estonia</option>
                    <option value="68">Ethiopia</option>
                    <option value="69">Falkland Islands (Malvinas)</option>
                    <option value="70">Faroe Islands</option>
                    <option value="71">Fiji</option>
                    <option value="72">Finland</option>
                    <option value="74">France, Metropolitan</option>
                    <option value="75">French Guiana</option>
                    <option value="76">French Polynesia</option>
                    <option value="77">French Southern Territories</option>
                    <option value="126">FYROM</option>
                    <option value="78">Gabon</option>
                    <option value="79">Gambia</option>
                    <option value="80">Georgia</option>
                    <option value="81">Germany</option>
                    <option value="82">Ghana</option>
                    <option value="83">Gibraltar</option>
                    <option value="84">Greece</option>
                    <option value="85">Greenland</option>
                    <option value="86">Grenada</option>
                    <option value="87">Guadeloupe</option>
                    <option value="88">Guam</option>
                    <option value="89">Guatemala</option>
                    <option value="241">Guernsey</option>
                    <option value="90">Guinea</option>
                    <option value="91">Guinea-Bissau</option>
                    <option value="92">Guyana</option>
                    <option value="93">Haiti</option>
                    <option value="94">Heard and Mc Donald Islands</option>
                    <option value="95">Honduras</option>
                    <option value="96">Hong Kong</option>
                    <option value="97">Hungary</option>
                    <option value="98">Iceland</option>
                    <option value="99">India</option>
                    <option value="100">Indonesia</option>
                    <option value="101">Iran (Islamic Republic of)</option>
                    <option value="102">Iraq</option>
                    <option value="103">Ireland</option>
                    <option value="104">Israel</option>
                    <option value="105">Italy</option>
                    <option value="106">Jamaica</option>
                    <option value="107">Japan</option>
                    <option value="240">Jersey</option>
                    <option value="108">Jordan</option>
                    <option value="109">Kazakhstan</option>
                    <option value="110">Kenya</option>
                    <option value="111">Kiribati</option>
                    <option value="113">Korea, Republic of</option>
                    <option value="114">Kuwait</option>
                    <option value="115">Kyrgyzstan</option>
                    <option value="116">Lao People's Democratic Republic</option>
                    <option value="117">Latvia</option>
                    <option value="118">Lebanon</option>
                    <option value="119">Lesotho</option>
                    <option value="120">Liberia</option>
                    <option value="121">Libyan Arab Jamahiriya</option>
                    <option value="122">Liechtenstein</option>
                    <option value="123">Lithuania</option>
                    <option value="124">Luxembourg</option>
                    <option value="125">Macau</option>
                    <option value="127">Madagascar</option>
                    <option value="128">Malawi</option>
                    <option value="129">Malaysia</option>
                    <option value="130">Maldives</option>
                    <option value="131">Mali</option>
                    <option value="132">Malta</option>
                    <option value="133">Marshall Islands</option>
                    <option value="134">Martinique</option>
                    <option value="135">Mauritania</option>
                    <option value="136">Mauritius</option>
                    <option value="137">Mayotte</option>
                    <option value="138">Mexico</option>
                    <option value="139">Micronesia, Federated States of</option>
                    <option value="140">Moldova, Republic of</option>
                    <option value="141">Monaco</option>
                    <option value="142">Mongolia</option>
                    <option value="242">Montenegro</option>
                    <option value="143">Montserrat</option>
                    <option value="144">Morocco</option>
                    <option value="145">Mozambique</option>
                    <option value="146">Myanmar</option>
                    <option value="147">Namibia</option>
                    <option value="148">Nauru</option>
                    <option value="149">Nepal</option>
                    <option value="150">Netherlands</option>
                    <option value="151">Netherlands Antilles</option>
                    <option value="152">New Caledonia</option>
                    <option value="153">New Zealand</option>
                    <option value="154">Nicaragua</option>
                    <option value="155">Niger</option>
                    <option value="156">Nigeria</option>
                    <option value="157">Niue</option>
                    <option value="158">Norfolk Island</option>
                    <option value="112">North Korea</option>
                    <option value="159">Northern Mariana Islands</option>
                    <option value="160">Norway</option>
                    <option value="161">Oman</option>
                    <option value="162">Pakistan</option>
                    <option value="163">Palau</option>
                    <option value="247">Palestinian Territory, Occupied</option>
                    <option value="164">Panama</option>
                    <option value="165">Papua New Guinea</option>
                    <option value="166">Paraguay</option>
                    <option value="167">Peru</option>
                    <option value="168">Philippines</option>
                    <option value="169">Pitcairn</option>
                    <option value="170">Poland</option>
                    <option value="171">Portugal</option>
                    <option value="172">Puerto Rico</option>
                    <option value="173">Qatar</option>
                    <option value="174">Reunion</option>
                    <option value="175">Romania</option>
                    <option value="176">Russian Federation</option>
                    <option value="177">Rwanda</option>
                    <option value="178">Saint Kitts and Nevis</option>
                    <option value="179">Saint Lucia</option>
                    <option value="180">Saint Vincent and the Grenadines</option>
                    <option value="181">Samoa</option>
                    <option value="182">San Marino</option>
                    <option value="183">Sao Tome and Principe</option>
                    <option value="184">Saudi Arabia</option>
                    <option value="185">Senegal</option>
                    <option value="243">Serbia</option>
                    <option value="186">Seychelles</option>
                    <option value="187">Sierra Leone</option>
                    <option value="188">Singapore</option>
                    <option value="189">Slovak Republic</option>
                    <option value="190">Slovenia</option>
                    <option value="191">Solomon Islands</option>
                    <option value="192">Somalia</option>
                    <option value="193">South Africa</option>
                    <option value="194">South Georgia &amp; South Sandwich Islands</option>
                    <option value="248">South Sudan</option>
                    <option value="195">Spain</option>
                    <option value="196">Sri Lanka</option>
                    <option value="249">St. Barthelemy</option>
                    <option value="197">St. Helena</option>
                    <option value="250">St. Martin (French part)</option>
                    <option value="198">St. Pierre and Miquelon</option>
                    <option value="199">Sudan</option>
                    <option value="200">Suriname</option>
                    <option value="201">Svalbard and Jan Mayen Islands</option>
                    <option value="202">Swaziland</option>
                    <option value="203">Sweden</option>
                    <option value="204">Switzerland</option>
                    <option value="205">Syrian Arab Republic</option>
                    <option value="206">Taiwan</option>
                    <option value="207">Tajikistan</option>
                    <option value="208">Tanzania, United Republic of</option>
                    <option value="209">Thailand</option>
                    <option value="210">Togo</option>
                    <option value="211">Tokelau</option>
                    <option value="212">Tonga</option>
                    <option value="213">Trinidad and Tobago</option>
                    <option value="214">Tunisia</option>
                    <option value="215">Turkey</option>
                    <option value="216">Turkmenistan</option>
                    <option value="217">Turks and Caicos Islands</option>
                    <option value="218">Tuvalu</option>
                    <option value="219">Uganda</option>
                    <option value="220">Ukraine</option>
                    <option value="221">United Arab Emirates</option>
                    <option selected="selected" value="222">United Kingdom</option>
                    <option value="223">United States</option>
                    <option value="224">United States Minor Outlying Islands</option>
                    <option value="225">Uruguay</option>
                    <option value="226">Uzbekistan</option>
                    <option value="227">Vanuatu</option>
                    <option value="228">Vatican City State (Holy See)</option>
                    <option value="229">Venezuela</option>
                    <option value="230">Viet Nam</option>
                    <option value="231">Virgin Islands (British)</option>
                    <option value="232">Virgin Islands (U.S.)</option>
                    <option value="233">Wallis and Futuna Islands</option>
                    <option value="234">Western Sahara</option>
                    <option value="235">Yemen</option>
                    <option value="238">Zambia</option>
                    <option value="239">Zimbabwe</option>
                  </select></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Region / State:</td>
                <td><select class="large-field" name="zone_id">
                    <option value=""> --- Please Select --- </option>
                    <option value="3513">Aberdeen</option>
                    <option value="3514">Aberdeenshire</option>
                    <option value="3515">Anglesey</option>
                    <option value="3516">Angus</option>
                    <option value="3517">Argyll and Bute</option>
                    <option value="3518">Bedfordshire</option>
                    <option value="3519">Berkshire</option>
                    <option value="3520">Blaenau Gwent</option>
                    <option value="3521">Bridgend</option>
                    <option value="3522">Bristol</option>
                    <option value="3523">Buckinghamshire</option>
                    <option value="3524">Caerphilly</option>
                    <option value="3525">Cambridgeshire</option>
                    <option value="3526">Cardiff</option>
                    <option value="3527">Carmarthenshire</option>
                    <option value="3528">Ceredigion</option>
                    <option value="3529">Cheshire</option>
                    <option value="3530">Clackmannanshire</option>
                    <option value="3531">Conwy</option>
                    <option value="3532">Cornwall</option>
                    <option value="3949">County Antrim</option>
                    <option value="3950">County Armagh</option>
                    <option value="3951">County Down</option>
                    <option value="3952">County Fermanagh</option>
                    <option value="3953">County Londonderry</option>
                    <option value="3954">County Tyrone</option>
                    <option value="3955">Cumbria</option>
                    <option value="3533">Denbighshire</option>
                    <option value="3534">Derbyshire</option>
                    <option value="3535">Devon</option>
                    <option value="3536">Dorset</option>
                    <option value="3537">Dumfries and Galloway</option>
                    <option value="3538">Dundee</option>
                    <option value="3539">Durham</option>
                    <option value="3540">East Ayrshire</option>
                    <option value="3541">East Dunbartonshire</option>
                    <option value="3542">East Lothian</option>
                    <option value="3543">East Renfrewshire</option>
                    <option value="3544">East Riding of Yorkshire</option>
                    <option value="3545">East Sussex</option>
                    <option value="3546">Edinburgh</option>
                    <option value="3547">Essex</option>
                    <option value="3548">Falkirk</option>
                    <option value="3549">Fife</option>
                    <option value="3550">Flintshire</option>
                    <option value="3551">Glasgow</option>
                    <option value="3552">Gloucestershire</option>
                    <option value="3553">Greater London</option>
                    <option value="3554">Greater Manchester</option>
                    <option value="3555">Gwynedd</option>
                    <option value="3556">Hampshire</option>
                    <option value="3557">Herefordshire</option>
                    <option value="3558">Hertfordshire</option>
                    <option value="3559">Highlands</option>
                    <option value="3560">Inverclyde</option>
                    <option value="3972">Isle of Man</option>
                    <option value="3561">Isle of Wight</option>
                    <option value="3562">Kent</option>
                    <option value="3563">Lancashire</option>
                    <option value="3564">Leicestershire</option>
                    <option value="3565">Lincolnshire</option>
                    <option value="3566">Merseyside</option>
                    <option value="3567">Merthyr Tydfil</option>
                    <option value="3568">Midlothian</option>
                    <option value="3569">Monmouthshire</option>
                    <option value="3570">Moray</option>
                    <option value="3571">Neath Port Talbot</option>
                    <option value="3572">Newport</option>
                    <option value="3573">Norfolk</option>
                    <option value="3574">North Ayrshire</option>
                    <option value="3575">North Lanarkshire</option>
                    <option value="3576">North Yorkshire</option>
                    <option value="3577">Northamptonshire</option>
                    <option value="3578">Northumberland</option>
                    <option value="3579">Nottinghamshire</option>
                    <option value="3580">Orkney Islands</option>
                    <option value="3581">Oxfordshire</option>
                    <option value="3582">Pembrokeshire</option>
                    <option value="3583">Perth and Kinross</option>
                    <option value="3584">Powys</option>
                    <option value="3585">Renfrewshire</option>
                    <option value="3586">Rhondda Cynon Taff</option>
                    <option value="3587">Rutland</option>
                    <option value="3588">Scottish Borders</option>
                    <option value="3589">Shetland Islands</option>
                    <option value="3590">Shropshire</option>
                    <option value="3591">Somerset</option>
                    <option value="3592">South Ayrshire</option>
                    <option value="3593">South Lanarkshire</option>
                    <option value="3594">South Yorkshire</option>
                    <option value="3595">Staffordshire</option>
                    <option value="3596">Stirling</option>
                    <option value="3597">Suffolk</option>
                    <option value="3598">Surrey</option>
                    <option value="3599">Swansea</option>
                    <option value="3600">Torfaen</option>
                    <option value="3601">Tyne and Wear</option>
                    <option value="3602">Vale of Glamorgan</option>
                    <option value="3603">Warwickshire</option>
                    <option value="3604">West Dunbartonshire</option>
                    <option value="3605">West Lothian</option>
                    <option value="3606">West Midlands</option>
                    <option value="3607">West Sussex</option>
                    <option value="3608">West Yorkshire</option>
                    <option value="3609">Western Isles</option>
                    <option value="3610">Wiltshire</option>
                    <option value="3611">Worcestershire</option>
                    <option value="3612">Wrexham</option>
                  </select></td>
              </tr>
            </tbody>
          </table>
          <div class="buttons">
            <div class="right">
              <input type="button" class="button" id="button-payment-address" value="Continue">
            </div>
          </div>
        </div>
      </div>
      <div class="checkout">
        <div class="checkout-heading">Step 4: Shipping Method</div>
        <div class="checkout-content">
          <p>Please select the preferred shipping method to use on this order.</p>
          <table class="radio">
            <tbody>
              <tr>
                <td colspan="3"><b>Free Shipping</b></td>
              </tr>
              <tr class="highlight">
                <td><label>
                    <input type="radio" checked="checked" id="" value="" name="shipping_method">
                    Free Shipping <b>($0.00)</b></label></td>
              </tr>
              <tr>
                <td colspan="3"><b>Flat Rate</b></td>
              </tr>
              <tr class="highlight">
                <td><label>
                    <input type="radio" checked="checked" id="" value="" name="shipping_method">
                    Flat Shipping Rate <b>($5.03)</b></label></td>
              </tr>
            </tbody>
          </table>
          <br>
          <b>Add Comments About Your Order</b>
          <textarea style="width: 98%;" rows="8" name="comment"></textarea>
          <br>
          <br>
          <div class="buttons">
            <div class="right">
              <input type="button" class="button" id="button-shipping-method" value="Continue">
            </div>
          </div>
        </div>
      </div>
      <div class="checkout">
        <div class="checkout-heading">Step 5: Payment Method</div>
        <div class="checkout-content">
          <p>Please select the preferred payment method to use on this order.</p>
          <table class="radio">
            <tbody>
              <tr class="highlight">
                <td><label>
                    <input type="radio" checked="checked" id="" value="" name="payment_method">
                    Cash On Delivery</label></td>
              </tr>
              <tr class="highlight">
                <td><label>
                    <input type="radio" checked="checked" id="" value="" name="payment_method">
                    PayPal</label></td>
              </tr>
            </tbody>
          </table>
          <br>
          <b>Add Comments About Your Order</b>
          <textarea style="width: 98%;" rows="8" name="comment"></textarea>
          <br>
          <br>
          <div class="buttons">
            <div class="right">I have read and agree to the <a alt="Terms &amp; Conditions" href="#"><b>Terms &amp; Conditions</b></a>
              <input type="checkbox" value="1" name="agree">
              <input type="button" class="button" id="button-payment-method" value="Continue">
            </div>
          </div>
        </div>
      </div>
      <div class="checkout">
        <div class="checkout-heading">Step 6: Confirm Order</div>
        <div class="checkout-content">
          <div class="checkout-product">
            <table>
              <thead>
                <tr>
                  <td class="name">Product Name</td>
                  <td class="model">Model</td>
                  <td class="quantity">Quantity</td>
                  <td class="price">Price</td>
                  <td class="total">Total</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="name"><a href="#">Canon EOS 5D</a></td>
                  <td class="model">Product 3</td>
                  <td class="quantity">1</td>
                  <td class="price">£61.33</td>
                  <td class="total">£61.33</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td class="price" colspan="4"><b>Sub-Total:</b></td>
                  <td class="total">£51.11</td>
                </tr>
                <tr>
                  <td class="price" colspan="4"><b>Flat Shipping Rate:</b></td>
                  <td class="total">£3.19</td>
                </tr>
                <tr>
                  <td class="price" colspan="4"><b>Total:</b></td>
                  <td class="total">£66.37</td>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="buttons">
            <div class="right">
              <input type="button" class="button" id="button-confirm" value="Confirm Order">
            </div>
          </div>
        </div>
      </div>
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

<!-- Mirrored from demo.harnishdesign.net/php/bigshop/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2015 08:26:01 GMT -->
</php>