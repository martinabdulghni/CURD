<?php 
require('./complete.php');
$cName= "NYLCSTMR";
$cValue= $uId;
setcookie($cName, $cValue, time() + (86400 * 30), "/");
//if($_GET['verifyPayment'] > $uId || empty($_GET['verifyPayment']) || $_GET['verifyPayment'] != $cValue ){
  //  header("Location: #errPageNotFound");
  //}
?>
<!DOCTYPE html>
<html lang="ar">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCharge.css">
    <title>تمت عملية الدفع</title>
    <link rel="icon" href="../imgs/logo.png">
</head>
<body style="background-color: #2e2e2e;">
<div class="p-x-4 p-y-8">
    <div class="constrain-md m-x-auto">
        <div class="crop bg-light border-t border-brand border-thick border-rounded-lg box-shadow" style="border-color:#F0C022;">
            <div class="p-x-6 p-y-5 border-b">
                <div class="flex-y-center flex-spaced p-b-4">
                    <div class="wt-medium">
                        <p class="text-base text-dark-muted">Fortnite Box 
                        <?php
                                $ok = strtoupper("FBPBC".$uId);
                                echo "<br>#".$ok;
                            ?>        
                    </p>
                        <p class="text-xl text-dark">
                        <?php 
                                $br = "<br>";
                                $items = str_replace(".",$br,$aItem);
                                echo $items;
                            ?>

                        </p>
                        <p class="text-base text-dark-soft"> <span id="fullnameScs">
                        </span></p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 63" style="width: 5.5rem;">
                        <defs>
                            <linearGradient id="brand-gradient" x1="50%" x2="50%" y1="0%" y2="100%"><stop stop-color="#F0C022" offset="0%"/><stop stop-color="#F0C022" offset="100%"/></linearGradient>
                        </defs>
                        <path fill="url(#brand-gradient)" d="M62.15 52H7a7 7 0 0 1-7-7V7a7 7 0 0 1 7-7h62a7 7 0 0 1 7 7v30.04A13 13 0 1 1 62.15 52zM74 37.04V23H2v22a5 5 0 0 0 5 5h55a13 13 0 0 1 12-12.96zM74 22v-9H2v9h72zm0-10V7a5 5 0 0 0-5-5H7a5 5 0 0 0-5 5v5h72zm1 49a11 11 0 1 0 0-22 11 11 0 0 0 0 22zm-4.3-11.7l3.3 3.29 6.05-6.05a1 1 0 0 1 1.41 1.41l-6.75 6.76a1 1 0 0 1-1.42 0l-4-4a1 1 0 0 1 1.42-1.42zM12 33h24v1H12v-1zm0 6h20v1H12v-1zm35-6h17v7H47v-7zm1 1v5h15v-5H48z"></path>
                    </svg>
                </div>
                <div>
                <div class="border-t border-b border-light flex-spaced p-y-3 m-b-4">
                        <div>
                            
                            <p class="text-dark-soft">
                               $<span id="currentPrice"><?php echo $aPrice/100;  ?></span>
                            </p>
                        </div>
                        <div class="text-right">
                            <p class="text-dark-soft" id="curentDate">
                            <?php echo $aDate;
                                  echo "<br>";
                                  echo $aTime;
                            
                            ?>
                            </p>
                        </div>
                    </div>
                    <div class="border-b border-light p-y-3 m-b-4">
                        
                    <p class="text-sm text-dark-soft text-right">
                        أي استفسار؟ <a href="https://tawk.to/chat/5c4a0e57ab5284048d0e7212/default" class="link-brand">الرجاء التواصل مع الدعم</a>
                    </p>
                </div>
            </div>
            <div class="p-x-6 p-y-5 border-b text-center">
                <div class="constrain-sm m-x-auto">
                    <div class="constrain-xs m-x-auto">
                        <p class="text-sm text-dark-soft m-b-1">لقد أرسلنا لك نسخة من هذا الرابط الى بريدك الإلكتروني <?php echo "<strong>$email</strong>"?></p>
                        <p class="text-sm text-dark-soft m-b-4"> . لذلك لا داعي للقلق بشأن فقد الفاتورة</p>

                    </div>
                    <div class="m-b-4">
                        <a href="../" class="btn btn-brand backHomeBtn" style="background-color:#F0C022;" onclick="removeitemsCart()">
                        &larr; العودة للصفحة الرئيسية
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<script src="ez.js"></script>
<script>
function removeitemsCart(){
    localStorage.setItem('SCI-127-43-13', "")
    localStorage.setItem('SCI-127-44-00', "")
}

</script>
</body>
</html> 