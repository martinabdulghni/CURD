$(window).scroll(function(){
    // counting the scroll pixels..
    var wScroll = $(this).scrollTop();

    // *************************************************UI*************************************************
    // UI texts show..
    if(wScroll> 300) {
      $('.superTexts').each(function(i){
        setTimeout(() => {
            $('.superTexts').eq(i).removeClass('isShowingSuperTexts');
        }, 150 * (i+1));
      });
    } 
    else {
      $('.superTexts').each(function(i){
        setTimeout(() => {
            $('.superTexts').eq(i).addClass('isShowingSuperTexts');
        }, 150 * (i+1));
      });
    }
    // *************************************************INFO BOXES*************************************************
    // Information Show, coming from above..
    if(wScroll>$('.info-boxes').offset().top -750) {
      $('.infobox').each(function(i){
          setTimeout(() => {
              $('.infobox').eq(i).addClass('isShowingInfo');
          }, 150 * (i+1));
      });
    } 
    else {
      $('.infobox').each(function(i){
        setTimeout(() => {
            $('.infobox').eq(i).removeClass('isShowingInfo');
        }, 150 * (i+1));
      });
    }
    // *************************************************CSTMR ACCOUNTS*************************************************
    // Cstmr accounts show only from above..
    if(wScroll>$('#container').offset().top -750) {
      $('.superACC').each(function(i){
        setTimeout(() => {
            $('.superACC').eq(i).addClass('isshowingsuperACC');
        }, 50 * (i+1));
      });
    } 
    else {
      $('.superACC').each(function(i){
        setTimeout(() => {
            $('.superACC').eq(i).removeClass('isshowingsuperACC');
        }, 50 * (i+1));  
      });
    }
    if(wScroll>$('.account').offset().top -890){
      $('.account').each(function(i){
        setTimeout(() => {
          $('.account').eq(i).addClass('isShowingAcc');
        }, 100 * (i+1));
      });
    } 
    else {
      $('.account').each(function(i){
        setTimeout(() => {
          $('.account').eq(i).removeClass('isShowingAcc');
        }, 100 * (i+1));
      });
    }
    // *************************************************PACKS*************************************************
    // Packs Show, coming from above..
    if(wScroll>$('.packs').offset().top -900) {
        $('.Fortnite-Packs').each(function(i){
            setTimeout(() => {
                $('.Fortnite-Packs').eq(i).addClass('isShowingPacks');
            }, 150 * (i+1)); 
        });
        $('.fpText').each(function(i){
          setTimeout(() => {
              $('.fpText').eq(i).addClass('fpTextisShowing');
          }, 150 * (i+1));
      });
    } 
    else {
      $('.Fortnite-Packs').each(function(i){
        setTimeout(() => {
            $('.Fortnite-Packs').eq(i).removeClass('isShowingPacks');
        }, 150 * (i+1));
      });
      $('.fpText').each(function(i){
        setTimeout(() => {
            $('.fpText').eq(i).removeClass('fpTextisShowing');
        }, 150 * (i+1));
      });
    }
    // Packs navigationBar..
    if(wScroll<$('.packs').offset().top -300) {
      $('#home').css({'color': '#F0C022'});
        $('#homeM').css({'color': '#F0C022'});
    }
    if(wScroll>=$('.packs').offset().top -300){
      $('#packs').css({'color': '#F0C022'});
        $('#packsM').css({'color': '#F0C022'});
      $('#home').css({'color': ''});
        $('#homeM').css({'color': ''});

    } 
    else {
      $('#packs').css({'color': ''});
        $('#packsM').css({'color': ''});
    }
    


    // *************************************************BOX PACKS*************************************************
    // box pack show from above..
    if(wScroll>$('#boxPacks').offset().top -750) {
      $('.boxPacksOff').each(function(i){
        setTimeout(() => {
          $('.boxPacksOff').eq(i).addClass('isShowingTheForm');
        }, 50 * (i+1));
      });
    } 
    else {
      $('.boxPacksOff').each(function(i){
        setTimeout(() => {
          $('.boxPacksOff').eq(i).removeClass('isShowingTheForm');
        }, 50 * (i+1));
      });
    }
    // box pack show from bottom..
    if(wScroll>$('#boxPacks').offset().top +460) {
      $('.boxPacksOff').each(function(i){
        setTimeout(() => {
          $('.boxPacksOff').eq(i).removeClass('isShowingForm');
        }, 50 * (i+1));
        
      });
    }
    // boxPacks on Navigation Bar..
    if(wScroll>=$('#boxPacks').offset().top -290){
      $('#isBoxPackss').css({'color': '#F0C022'});
      $('#sPacksM').css({'color': '#F0C022'});
      $('#home').css({'color': ''});
        $('#homeM').css({'color': ''});
      $('#packs').css({'color': ''});
        $('#packsM').css({'color': ''});
    } 
    else {
      $('#isBoxPackss').css({'color': ''});
      $('#sPacksM').css({'color': ''});
    }

// *************************************************contact form*************************************************
  // Contact form show from above..
    if(wScroll>$('.form').offset().top -890){
      $('.form').each(function(i){
        setTimeout(() => {
          $('.form').eq(i).addClass('isShowingTheForm');
        }, 100 * (i+1));
      });
    } 
    else {
      $('.form').each(function(i){
        setTimeout(() => {
          $('.form').eq(i).removeClass('isShowingTheForm');
        }, 100 * (i+1));
      });
    }
    // contact form navigation bar..
    if(wScroll>=$('#theSupport').offset().top -200){
      $('#support').css({'color': '#F0C022'});
        $('#sprtM').css({'color': '#F0C022'});
      $('#home').css({'color': ''});
        $('#homeM').css({'color': ''});
      $('#isBoxPackss').css({'color': ''});
        $('#sPacksM').css({'color': ''});
      $('#packs').css({'color': ''});
        $('#packsM').css({'color': ''});
    } 
    else {
      $('#support').css({'color': ''});
        $('#sprtM').css({'color': ''});
    }

    });



//accounts..
/***************************************************************************************/
// call ajax..
var ajax = new XMLHttpRequest();
var method = "GET";
var url = "js/jsConnection.php";
var asynch = true;
ajax.open(method, url, asynch);
ajax.send();

ajax.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {

        var xAc = JSON.parse(this.responseText);
        var id = xAc.length-1;
        var cunt = xAc.length-2;
        for(cunt; cunt<=id;cunt++) {
        var username = xAc[cunt].fullName;
        var pickaxes = xAc[cunt].pickaxe;
        var skins = xAc[cunt].skin;
        var platform = xAc[cunt].platform;
        var price = xAc[cunt].price;
        var skinImage = xAc[cunt].sImage;
        var accountID = xAc[cunt].id;
        
        var platforms = "";
        if(platform.includes('ps4')) {
            platforms += `<img src="imgs/playicons/ps4.png" class="platform-img">`;
        }
        if(platform.includes('pc')) {
            platforms += `<img src="imgs/playicons/pc.png" class="platform-img">`;
        }
        if(platform.includes('xbox')) {
            platforms += `<img src="imgs/playicons/xbox.png" class="platform-img">`;
        }
        if(platform.includes('mobile')) {
            platforms += `<img src="imgs/playicons/mobile.png" class="platform-img">`;
        }
        if(platform.includes('switch')) {
            platforms += `<img src="imgs/playicons/switch.png" class="platform-img">`;
        }



        createAcc(username, pickaxes, skins, price, platforms, skinImage, accountID);
        function createAcc(username, pickaxes, skins, price, platforms, skinImage, accountID){
            var account = document.createElement('div')
            accounts = document.getElementsByClassName('container')[0]
            var divInside = `
            
            <div class="account" style="margin-top: 80px;">
            
                <div class="account-owner">
                    <p class="owner-txt"><span class="seller">Seller:</span><span class="username">${username}</span></p>
                </div>
                <div class="account-info">
                    <span style="color: #e2e2e2">البيكاكسات </span><span style="margin: 0px 4px">|</span>
                    <span style="color: #fa8e8e" class="total-axes"> ${pickaxes}</span>
                    <hr>
                    <span style="color:#fa8e8e;">السكنّات </span><span style="margin: 0px 4px">|</span>
                    <span style="color: #e2e2e2" class="total-skins">${skins} </span>
                    <hr>
                    <span class="platforms">${platforms}</span></span> <span style="margin-left: 4px">|</span>
                    <span style="color: #e2e2e2">المِنَصة 

                    <hr>
                    <span style="color:#fa8e8e">السعر </span> <span style="margin: 0px 4px">|</span> 
                    <span style="opacity: 0.9; color: #e2e2e2" class="price">$${price}</span>
                </div>
                
                  <img src="Sell Account/${skinImage}" class="account-img">
                <a href="AccountsByCustomers/Account-Details/index.php?accountId=${accountID}" class="buttonAcc">تفاصيل أكثر</a>
            </div>
            `
            account.innerHTML += divInside;
            accounts.append(account);
        }
    }

    }
}




