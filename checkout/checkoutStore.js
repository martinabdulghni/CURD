// checking if the body is still loading..
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}
function ready() {
var items = document.getElementsByClassName('itemInCart')
console.log(items)

for(var i =0; i<items.length;i++){
    var itemName = items[i].getElementsByClassName('item-name')[0].innerHTML
    console.log(itemName)
    var itemImg = items[i].getElementsByClassName('item-img')[0].src
    console.log(itemImg)
    var itemQty = items[i].getElementsByClassName('item-quantity')[0].innerHTML
    console.log(itemQty)
    var itemPrice = items[i].getElementsByClassName('item-price')[0].innerHTML
    console.log(itemPrice)
    var removeBtn = items[i].getElementsByClassName('cartRemovingBtn')[0]
    console.log(removeBtn)

    createItems(itemImg, itemName, itemQty, itemPrice, removeBtn);
    function createItems(itemImg, itemName, itemQty, itemPrice, removeBtn){
        var tableRad = document.createElement('tr')
        tableRad.className = 'checkoutItems';
        theTable = document.getElementsByClassName('checkoutTable')[0]
        var divInside = `
        <th class="item-img-checkout"><img src="${itemImg}" alt="" style="width: 190px; height: 100px;" ></th>
        <th class="item-name-checkout">${itemName}</th>
        <th class="item-qty-checkout">${itemQty}</th>
        <th class="item-price-checkout">${itemPrice}</th>
        <th class="item-remove-checkout">
        <button class="cartRemovingBtn"><span class="cartRemovingBtntxt">X</span></button>
        </th>
        `
        tableRad.innerHTML += divInside;
        theTable.append(tableRad);
    }
    updateCartTotal()
    RemoveBtns()
    addToCartBtns()
    function RemoveBtns() {
        var removeBtns = document.getElementsByClassName('cartRemovingBtn')
        for(var i=0; i<removeBtns.length;i++) {
            var removeButton = removeBtns[i]
            removeButton.addEventListener('click' , removeCartItem)
            localStorage.setItem('SCI-127-44-00', localStorage.getItem('SCI-127-43-13'));          
        }
    
    }
    function removeCartItem(event) {
        // what ever remove button clicked on..
        var removeButtonClicked = event.target
        removeButtonClicked.parentElement.parentElement.parentElement.remove()
        cartItems = document.getElementsByClassName('checkoutTable')[0]
        var cartItemsToText = cartItems.innerHTML
        localStorage.setItem('SCI-127-43-13', cartItemsToText)
        localStorage.setItem('SCI-127-44-00', cartItemsToText)
        updateCartTotal()
    }
    
    
    function updateCartTotal() {
        var shoppingCartItems = document.getElementsByClassName('checkoutTable')[0]
        var cartItems = shoppingCartItems.getElementsByClassName('checkoutItems')
        var itemsCount = cartItems.length
        var total = 0
    
        for(var i=0; i<cartItems.length;i++) {
            var thePrice = items[i].getElementsByClassName('item-price')[0]
            var theQty = items[i].getElementsByClassName('item-quantity')[0]
            var price = parseFloat(thePrice.innerText.replace('$', ''))
            var qty = theQty.innerText
            total = (total + (price * qty)*1.1725)
            var lastTotal = Math.round((total + Number.EPSILON) * 100) / 100
        }
        document.getElementsByClassName('finalPrice')[0].innerText = '$' + lastTotal
    }

}
}