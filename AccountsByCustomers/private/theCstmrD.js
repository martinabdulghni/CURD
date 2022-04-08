var ajax = new XMLHttpRequest();
var method = "GET";
var url = "private/jsConnection.php";
var asynch = true;
ajax.open(method, url, asynch);
ajax.send();

ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

        var xAc = JSON.parse(this.responseText);

        var id = xAc.length - 1;
        for (var i = 0; i <= id; i++) {
            var username = xAc[i].fullName;
            var pickaxes = xAc[i].pickaxe;
            var skins = xAc[i].skin;
            var platform = xAc[i].platform;
            var price = xAc[i].price;
            var skinImage = xAc[i].sImage;
            var accountID = xAc[i].id;

            var platforms = "";
            if (platform.includes('ps4')) {
                platforms += `<img src="../imgs/playicons/ps4.png" class="platform-img">`;
            }
            if (platform.includes('pc')) {
                platforms += `<img src="../imgs/playicons/pc.png" class="platform-img">`;
            }
            if (platform.includes('xbox')) {
                platforms += `<img src="../imgs/playicons/xbox.png" class="platform-img">`;
            }
            if (platform.includes('mobile')) {
                platforms += `<img src="../imgs/playicons/mobile.png" class="platform-img">`;
            }
            if (platform.includes('switch')) {
                platforms += `<img src="../imgs/playicons/switch.png" class="platform-img">`;
            }



            createAcc(username, pickaxes, skins, price, platforms, skinImage, accountID);

            function createAcc(username, pickaxes, skins, price, platforms, skinImage, accountID) {
                var account = document.createElement('div')
                accounts = document.getElementsByClassName('container')[0]
                var divInside = `
            <a href="Account-Details/index.php?accountId=${accountID}">
            <div class="account" style="margin-top: 80px;font-family: 'mbc';    font-size: 20px;">
                <div class="account-owner">
                    <p class="owner-txt"><span class="seller">Seller:</span><span class="username">${username}</span></p>
                </div>
                <div class="account-info">
                    <span style="color: #126794">البيكاكسات </span><span style="margin: 0px 4px">|</span>
                    <span style="color: #7F95AB" class="total-axes"> ${pickaxes}</span>
                    <hr>
                    <span style="color: #7F95AB">السكنّات </span><span style="margin: 0px 4px">|</span>
                    <span style="color: #126794" class="total-skins">${skins} </span>
                    <hr>
                    <span class="platforms">${platforms}</span></span> <span style="margin-left: 4px">|</span>
                    <span style="color: #126794">المِنَصة 

                    <hr>
                    <span style="color: #7F95AB">السعر </span> <span style="margin: 0px 4px">|</span> 
                    <span style="opacity: 0.9; color: red" class="price">$${price}</span>
                </div>
                
                  <img src="../Sell Account/${skinImage}" class="account-img">
                <a href="Account-Details/index.php?accountId=${accountID}" class="buttonAcc">عرض المزيد</a>
            </div>
            </a>
            `

                account.innerHTML += divInside;
                accounts.append(account);
            }
        }

    }
}