<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <title>شراء حساب</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/layout.css">
    <script src="../js/jquery-3.4.1.js"></script>
    <script src="../js/store.js" async></script>
    <script src="private/getCustomerData.js"></script>
    <script language="javascript" src="private/theCstmrD.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Almarai&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=saudi" />
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=zahra-bold" />
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=rawi" />
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=mbc" />
    <link rel="icon" href="../imgs/logo.png">
    
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
          <a href="../index.html" ><img src="../imgs/theLogo.png" alt=""></a>
        </div>
        <nav>
          <ul class="nav-list">
            <li>
              <a href="../index.html#!" id="support">الدعم</a>
            </li>
            <li>
              <a href="#!" style="color: #F0C022;">الحسابات</a>
              <ul class="nav-dropdown">
                <li>
                  <a href="../Sell Account/index.html" >بيع حساب</a>
                </li>
                <li>
                  <a href="../AccountsByCustomers/index.php" style="color: #F0C022;">شراء حساب</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="../index.html#!" id="isBoxPackss">الباقات</a>
            </li>
            <li>
              <a href="../index.html#!" id="packs">الحزم</a>
            </li>
            <li>
              <a href="../index.html#!"  id="home">الرئيسية</a>
            </li>
            <li>
              <a href="#!" id="cart" class="navbar-right" style="color: #F0C022;">
                <span class="badge2" style="position: relative; left: 10px; z-index: 1; bottom: 6px;"></span>
                <i class=""><img src="../imgs/shoppingcartimg.png" style="position: relative; height: 40px; top: 10px;" ></i>
              </a>

            </li>
          </ul>
        </nav>
      </div>
    </section>
    <a href="#!" id="cartM" style="color: #F0C022;">
      <span class="badge2" style="position: relative; left: 10px; z-index: 1; bottom: 6px;"></span>
      <i class=""><img src="../imgs/shoppingcartimg.png" style="position: relative; height: 40px; top: 10px;" ></i>
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
      <a href="../checkout/index.html" class="CheckOutButton" style="font-weight: 900; font-family: 'mbc';font-size: 24px;">اِتمام الدّفع</a>
    </div>
  </header>

  <div id="container" style="font-family: 'mbc';    font-size: 20px;">
        <div class="container"></div>
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
    <script>
  setInterval(function(){
    $('.account').each(function(i){
    setTimeout(() => {
      $('.account').eq(i).addClass('isShowingAcc');
    }, 100 * (i+1));
  });
  },300);

    </script>
      <!--end of scripts-->

  </body>
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

    function myFunction(x) {
    x.classList.toggle("change");
    
}
    </script>
    <!--End of Tawk.to Script-->
</html>
