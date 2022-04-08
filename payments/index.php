<!DOCTYPE html>
<html lang="ar">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=mbc" />
    <title>الدفع</title>
    <link rel="stylesheet" href="css/style.css">   
    <link rel="icon" href="../imgs/logo.png">
    <script src="../js/store.js"></script>

</head>
<header>


</header>
<body>
<div class="container">
    <a href="../index.html"><h2 class="my-4 text-right" style="font-size:19px; font-family:'mbc'; color:#ff4a4a;">العودة الى الصفحة الرئيسية</h2>  
    </a>
    <form action="./charge.php" method="post" id="payment-form">
    <h2 class="my-4 text-center" style="color: white;">الدفع</h2>  
      <div class="form-row">
            <div class="names">
            <input required name="last_name" type="text" class="form-control mb-3 StripeElement StripeElement--empty rr ss" placeholder="الاسم الأخير" style="text-align: right;">
                <input required name="first_name" type="text" class="form-control mb-3 StripeElement StripeElement--empty rr ss" placeholder="الاسم الأول" style="text-align: right;">
                </div>
            <input required name="email" type="email" class="form-control mb-3 StripeElement StripeElement--empty rr" placeholder="البريد الالكتروني" style="text-align: right;">

        </div>
        <span class="diff" style="color: white; font-size:20px;">
         <span>$</span><span id="veryFinalPrice"></span>
         <span name="very_final_price" id="veryFinalPrices" style="visibility: hidden;"></span>
        <button class="btn btn-primary btn-block mt-4 btnSubmit"><span> تأكيد الدفع</span></button>
      </form>
    </div>
    <p id="veryLastItemsName" name="very_last_names" style="visibility: hidden;"></p>
    <div class="shopping-cart" style="visibility: hidden;">
      <div class="shopping-cart-header">
        <i class="fa fa-shopping-cart cart-icon"></i><span class="badge2 "></span>
        <div class="shopping-cart-total">
          <span class="lighter-text">الإجمالي:</span>
          <span class="main-color-text total-price">$0</span>
        </div>
      </div>
      <ul class="shopping-cart-items"></ul>
       </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/charge.js"></script> 
    <script src="js/getInfo.js"></script>

</body>
</html>