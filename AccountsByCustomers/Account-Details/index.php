<?php

require 'completeConn.php';
// so user will not 
if($_GET['accountId'] > $uId || empty($_GET['accountId'])){
  echo "okok";
  header("Location: ../");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>تفاصيل الحساب</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.6">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Almarai&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=saudi" />
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=zahra-bold" />
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=rawi" />
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=mbc" />
    <link rel="icon" href="../../imgs/logo.png">
    <script src="../../js/jquery-3.4.1.js"></script>
    <script src="js/DetailsScript.js" async></script>
    <script src="../../js/store.js" async></script>

</head>

<body>
<header>
<input type="checkbox" id="check" />
    <label id="icon" for="check"> 
      <!--  icon    -->
      <div id="test" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
          <div class="bar3"></div>
      </div>
    </label>

    <div class="menu-mobile">
      <div class="nav-mobile">
        <a href="#">
          <div class="link" >الرئيسية</div>
        </a>
        <a href="#!" >
          <div class="link">الحزم</div>
        </a>
        <a href="#!">
          <div class="link">الباقات</div>
        </a>
        <a href="AccountsByCustomers/index.php">
          <div class="link" style="color: #F0C022;">شراء حساب</div>
        </a>
        <a href="Sell Account/index.html">
          <div class="link">بيع حساب</div>
        </a>
        <a href="#">
          <div class="link">الدعم</div>
        </a>
      </div>
    </div>
    <section class="navigation" style="font-family: 'Almarai', sans-serif; font-size: 14px;">
      <div class="nav-container">
        <div class="brand">
          <a href="../../" ><img src="../../imgs/theLogo.png" alt=""></a>
        </div>
        <nav>
          <ul class="nav-list">
            <li>
              <a href="../../index.html#!" id="support">الدعم</a>
            </li>
            <li>
              <a href="#!" style="color: #F0C022;">الحسابات</a>
              <ul class="nav-dropdown">
                <li>
                  <a href="../../Sell Account/index.html" >بيع حساب</a>
                </li>
                <li>
                  <a href="../../AccountsByCustomers/index.php" style="color: #F0C022;">شراء حساب</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="../../index.html#!" id="isBoxPackss">الباقات</a>
            </li>
            <li>
              <a href="../../index.html#!" id="packs">الحزم</a>
            </li>
            <li>
              <a href="../../index.html#!"  id="home">الرئيسية</a>
            </li>
            <li>
              <a href="#!" id="cart" class="navbar-right" style="color: #F0C022;">
                <span class="badge2" style="position: relative; left: 10px; z-index: 1; bottom: 6px;"></span>
                <i class=""><img src="../../imgs/shoppingcartimg.png" style="position: relative; height: 40px; top: 10px;" ></i>
              </a>

            </li>
          </ul>
        </nav>
      </div>
    </section>
    <a href="#!" id="cartM" style="color: #F0C022;">
      <span class="badge2" style="position: relative; left: 10px; z-index: 1; bottom: 6px;"></span>
      <i class=""><img src="../../imgs/shoppingcartimg.png" style="position: relative; height: 40px; top: 10px;" ></i>
    </a>
    <div class="shopping-cart">
      <div class="shopping-cart-header">
        <i class="fa fa-shopping-cart cart-icon"></i><span class="badge2 "></span>
        <div class="shopping-cart-total">
          <span class="lighter-text">:الإجمالي</span>
          <span class="main-color-text total-price">$0</span>
        </div>
      </div>
      <ul class="shopping-cart-items"></ul>
      <a href="../../checkout/index.html" class="CheckOutButton" style="font-weight: 900; font-family: 'mbc';font-size: 24px;">اِتمام الدّفع</a>
    </div>
  </header>

  <div id="container" style="font-family: 'Almarai', sans-serif;">
        <div class="container" >
            
          <div class="account" style="margin-top: 100px;">
            <div class="account-owner">
                <p class="owner-txt">Seller: <span> <?php echo $row['fullName']; ?></span></p>
                <p class="title">Account #<span><?php echo $row['id']; ?></span></p>
                
            </div>
            <div class="account-price">
              <p class="price">$<?php echo $thePrice ?></p>
              <button class="addtoCartAcc addToCartBtn" style="font-family: 'Almarai', sans-serif;">!إضافة الى السلّة</button>
              <img style="display:none;" src="<?php echo "../../Sell Account/".$row['sImage'];?>" class="account-img Fortnite-Packs-Img">
            <p class="title" style="display:none;">ACCOUNT #<span><?php echo $row['id']; ?></span></p>
          </div>
            <div class="account-info">
                <span style="color: rgb(196, 164, 61)">السكنات </span><span style="margin: 0px 4px;">|</span>
                <span style="color: #e2e2e2" class="total-skin subinfo"><?php echo $row['skin']; ?></span>
                <hr>
                <span style="color: #e2e2e2">إجمالي الفوز </span><span style="margin: 0px 4px">|</span>
                <span style="color: rgb(196, 164, 61)" class="total-win subinfo"><?php echo $totalWins; ?></span>
                <hr>
                <span style="color: rgb(196, 164, 61)">المظلات </span><span style="margin: 0px 4px">|</span>
                <span style="color: #e2e2e2" class="total-glider subinfo"><?php echo $row['glider']; ?></span>
                <hr>
                <span style="color: #e2e2e2">البيكاكسات </span><span style="margin: 0px 4px">|</span>
                <span style="color: rgb(196, 164, 61)" class="total-pickaxe subinfo"> <?php echo $row['pickaxe']; ?></span>
                <hr>
                <?php echo $platformFiles ?><span style="margin-left: 4px"> | </span>
                <span style="color: rgb(196, 164, 61)" class="platform-type"> المِنَصة </span> 
                
                <hr>
                <span style="color: #e2e2e2">حقائب الظهر </span><span style="margin: 0px 4px">|</span>
                <span style="color: rgb(196, 164, 61)" class="total-bling subinfo"><?php echo $row['blings']; ?></span>
                <hr>
                <span style="color: rgb(196, 164, 61)">تقييم الحساب </span> <span style="margin: 0px 4px">|</span> 
                <span style="opacity: 0.2; color: #00AD3D; text-decoration-line: line-through;">عادي</span><span style="margin: 0px 3px">|</span>
                <span style="color: #00AD3D">نادر</span>
                <hr>
                <span style="color: #e2e2e2">الايموتس ( الرقصات فقط ) </span><span style="margin: 0px 4px">|</span>
                <span style="color: rgb(196, 164, 61)" class="total-glider subinfo"><?php echo $row['dance']; ?></span>
            </div>
            <div class="account-images">
              <a href="<?php echo "../../Sell Account/".$row['sImage'];?>" target="_blank">
                <img src="<?php echo "../../Sell Account/".$row['sImage'];?>" class="account-img">
              </a>
              <a href="<?php echo "../../Sell Account/".$row['pImage'];?>" target="_blank">
                <img src="<?php echo "../../Sell Account/".$row['pImage'];?>" class="account-img">
            </a>
            <a href="<?php echo "../../Sell Account/".$row['eImage'];?>" target="_blank">
              <img src="<?php echo "../../Sell Account/".$row['eImage'];?>" class="account-img">
            </a>
            <a href="<?php echo "../../Sell Account/".$row['bImage'];?>" target="_blank">
              <img src="<?php echo "../../Sell Account/".$row['bImage'];?>" class="account-img">
            </a>
            <a href="<?php echo "../../Sell Account/".$row['gImage'];?>" target="_blank">
              <img src="<?php echo "../../Sell Account/".$row['gImage'];?>" class="account-img">
            </a>
            </div>
        </div>
        </div>
  </div>

    
    
    
    
    
  <!--scripts-->
  <script>
    (function () {
      $(".shopping-cart").hide();
      $("#cart").on("click", function () {
        $(".shopping-cart").fadeToggle("fast");

      });
      $("#cartM").on("click", function () {
        $(".shopping-cart").fadeToggle("fast");

      });
      $('#container').click(function () {
        $('.shopping-cart').hide();
      });

    })();
    function myFunction(x) {
    x.classList.toggle("change");
    
}

    (function ($) { // Begin jQuery
      $(function () { // DOM ready
        // If a link has a dropdown, add sub menu toggle.
        $('nav ul li a:not(:only-child)').click(function (e) {
          $(this).siblings('.nav-dropdown').toggle();
          // Close one dropdown when selecting another
          $('.nav-dropdown').not($(this).siblings()).hide();
          e.stopPropagation();
        });
        // Clicking away from dropdown will remove the dropdown class
        $('html').click(function () {
          $('.nav-dropdown').hide();
        });
        // Toggle open and close nav styles on click
        $('#nav-toggle').click(function () {
          $('nav ul').slideToggle();
        });
        // Hamburger to X toggle
        $('#nav-toggle').on('click', function () {
          this.classList.toggle('active');
        });
      }); // end DOM ready
    })(jQuery); // end jQuery
    </script>
      <!--end of scripts-->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5c4a0e57ab5284048d0e7212/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
  </body>
</html>
