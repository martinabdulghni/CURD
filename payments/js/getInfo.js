// checking if the body is still loading..
var veryFinalPrice =0;
var allNames =" ";
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}
function ready() {
    var items = document.getElementsByClassName('itemInCart')
        for(var i =0; i<items.length;i++){
            var itemName = items[i].getElementsByClassName('item-name')[0].innerHTML
            var itemQty = items[i].getElementsByClassName('item-quantity')[0].innerHTML
            var itemPrice = items[i].getElementsByClassName('item-price')[0].innerHTML
            var price = parseFloat(itemPrice.replace('$', ''))
            veryFinalPrice = (veryFinalPrice + (price * itemQty)*1.1725)
            var lastTotal = Math.round((veryFinalPrice + Number.EPSILON) * 100) / 100
            allNames = allNames+itemName+".";
        }
        var lastPrice = document.getElementById('veryFinalPrice').innerHTML= lastTotal
        var lastNames = document.getElementById('veryLastItemsName').innerHTML= allNames
        var dd = lastPrice.toString()
        var ss = parseFloat(dd.replace('.', ''))
        var lastPrice = document.getElementById('veryFinalPrices').innerHTML= ss

        createCookie("price", lastPrice, "2");
        function createCookie(name, value, days) { 
            var expires; 
              
            if (days) { 
                var date = new Date(); 
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
                expires = "; expires=" + date.toGMTString(); 
            } 
            else { 
                expires = ""; 
            }
              
            document.cookie = escape(name) + "=" +  
                escape(value) + expires + "; path=/"; 
        }
        createCookie("InamesAxXXs", lastNames, "2");
        function createCookie(name, value, days) { 
            var expires; 
              
            if (days) { 
                var date = new Date(); 
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
                expires = "; expires=" + date.toGMTString(); 
            } 
            else { 
                expires = ""; 
            } 
              
            document.cookie = escape(name) + "=" +  
                escape(value) + expires + "; path=/"; 
        }

        
}