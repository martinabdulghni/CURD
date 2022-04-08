// call ajax..
var ajax = new XMLHttpRequest();
var method = "GET";
var url = "AdminStuff/myJsConn.php";
var asynch = true;
//../Account-Details/completeConn.php
ajax.open(method, url, asynch);

// sending ajax request..
ajax.send();

// receiving response from dbData.php
ajax.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
        // coverting JSON back to array from connect.php line 53
        var theData = JSON.parse(this.responseText);
       console.log(theData);


        var id = theData.length-1;

        for(var i =0; i<=id;i++) {
        var accountId = theData[i].id;
        var username = theData[i].fullName;
        var pickaxes = theData[i].pickaxe;
        var skins = theData[i].skin;
        var platform = theData[i].platform;
        var price = theData[i].price;
        var skinImage = theData[i].sImage;
        var blingImage = theData[i].bImage;
        var emoteImage = theData[i].eImage;
        var pickaxeImage = theData[i].pImage;
        var gliderImage = theData[i].gImage;
        var pwd = theData[i].aPwd;
        var accountEmail = theData[i].aEmail;
        var contactEmail = theData[i].email;
        var fas = theData[i].faS;
    
        
        var platforms = "";
        if(platform.includes('ps4')) {
            platforms += `<img src="../imgs/playicons/ps4.png" class="platform-img">`;
        }
        if(platform.includes('pc')) {
            platforms += `<img src="../imgs/playicons/pc.png" class="platform-img">`;
        }
        if(platform.includes('xbox')) {
            platforms += `<img src="../imgs/playicons/xbox.png" class="platform-img">`;
        }
        if(platform.includes('mobile')) {
            platforms += `<img src="../imgs/playicons/mobile.png" class="platform-img">`;
        }
        if(platform.includes('switch')) {
            platforms += `<img src="../imgs/playicons/switch.png" class="platform-img">`;
        }


        // giving the function the pirameters..
        createAcc(username, pickaxes, skins, price, platforms, skinImage, blingImage, 
            emoteImage, pickaxeImage, gliderImage, fas, contactEmail, accountEmail, pwd, accountId);

        function createAcc(username, pickaxes, skins, price, platforms, skinImage,
             blingImage, emoteImage, pickaxeImage, gliderImage, fas, contactEmail, accountEmail, pwd, accountId){
            var account = document.createElement('div')
            accounts = document.getElementsByClassName('container')[0]
            var divInside = `
            <div class="account" style="margin-top: 80px;">
                <div class="account-owner">
                    <p class="owner-txt username" style="color: #e2e2e2;">@${username}</p>
                </div>
                <div class="account-info">
                    <span style="color: #7F95AB">Contact Email </span> <span style="margin: 0px 4px">|</span> 
                    <span style="opacity: 0.9; color: #F0C022;" class="contactEmail">${contactEmail}</span>
                    <hr>
                    <span style="color: #7F95AB"> ID </span> <span style="margin: 0px 4px">|</span> 
                    <span style="opacity: 0.9; color: #F0C022;" class="accountId">${accountId}</span>
                    <hr>
                    <span style="color: #7F95AB"> account Email </span> <span style="margin: 0px 4px">|</span> 
                    <span style="opacity: 0.9; color: #F0C022;" class="accountEmail">${accountEmail}</span>
                    <hr>
                    <span style="color: #7F95AB">PWD </span> <span style="margin: 0px 4px">|</span> 
                    <span style="opacity: 0.9; color: #F0C022;" class="pwd">e14bf1d37$${pwd}</span>
                    <hr>
                    <span style="color: #7F95AB">PRICE </span> <span style="margin: 0px 4px">|</span> 
                    <span style="opacity: 0.9; color: #F0C022;" class="price">$${price}</span>
                    <hr>
                    <span style="color: #7F95AB">2FA </span> <span style="margin: 0px 4px">|</span> 
                    <span style="opacity: 0.9; color: #F0C022;" class="fas">$${fas}</span>
                    <hr>
                    <span style="color: #7F95AB">SKINS </span> <span style="margin: 0px 4px">|</span> 
                    <span style="opacity: 0.9; color: #F0C022;" class="skins">$${skins}</span>
                    <hr>
                    <span style="color: #7F95AB">PICKAXES </span> <span style="margin: 0px 4px">|</span> 
                    <span style="opacity: 0.9; color: #F0C022;" class="pickaxes">$${pickaxes}</span>
                    <hr>
                    <span style="color: #126794">platform </span> <span style="margin-left: 4px">|</span>
                    <span class="platforms">${platforms}</span>
                    <p id="test"></p>
                </div>
                <div class="accountImages">
                    <a href="../Sell Account/${skinImage}" target="_blank">
                    <img src="../Sell Account/${skinImage}" class="account-img">
                    </a>
                    <a href="../Sell Account/${gliderImage}" target="_blank">
                    <img src="../Sell Account/${gliderImage}" class="account-img">
                    </a>
                    <a href="../Sell Account/${blingImage}" target="_blank">
                    <img src="../Sell Account/${blingImage}" class="account-img">
                    </a>
                    <a href="../Sell Account/${pickaxeImage}" target="_blank">
                    <img src="../Sell Account/${pickaxeImage}" class="account-img">
                    </a>
                    <a href="../Sell Account/${emoteImage}" target="_blank">
                    <img src="../Sell Account/${emoteImage}" class="account-img">
                    </a>
                </div>
                <button type="button" onclick="deleteme(${accountId})" name="Delete" class="removeBtn" value="Delete">DELETE</button>
                <button class="acceptBtn" onclick="accept(${accountId})">ACCEPT</button>
            </div>
            `
            account.innerHTML += divInside;
            accounts.append(account);
        }
    }
        

        
        //display the variables above on the html file..


    }
}



