var fullName
var aEmail
var aPwd
var price
var platform
var email
var faS
var squadWin
var soloWin
var duoWin
var skin
var pickaxe
var glider
var dance
var blings
var sAge
var userName
// call ajax..
var ajax = new XMLHttpRequest();
var method = "GET";
var url = "../../../Sell Account/dbData.php";
var asynch = true;

ajax.open(method, url, asynch);

// sending ajax request..
ajax.send();

// receiving response from connect.php
ajax.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
        // coverting JSON back to array from connect.php line 53
        var theData = JSON.parse(this.responseText);
        console.log(theData) // for debgging..

        var totalWins = 0;

        // looping through all the data to give them vars..
        for(i = 0; i<theData.length;i++){

            fullName = theData[i].fullName;
            aEmail = theData[i].aEmail;
            aPwd = theData[i].aPwd;
            price = theData[i].price;
            platform = theData[i].platform;
            email = theData[i].email;
            faS = theData[i].faS;
            squadWin = theData[i].squadWin;
            soloWin = theData[i].soloWin;
            duoWin = theData[i].duoWin;
            skin = theData[i].skin;
            pickaxe = theData[i].pickaxe;
            glider = theData[i].glider;
            dance = theData[i].dance;
            blings = theData[i].blings;
            sAge = theData[i].sAge;
            userName = theData[i].userName;

            // coverting wins to Integers..
            var soloW = parseInt(soloWin);
            var duoW = parseInt(duoWin);
            var SquadW = parseInt(squadWin);
            totalWins += soloW+duoW+SquadW;
        }



    }
}

