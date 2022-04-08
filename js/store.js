var saveCart;
var item;
var getItems;
var cartItemLayout;
var cartItems;
var cartItemsTxt;
var before;
var ok;

// checking if the body is still loading..
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    item = document.createElement('div')
    var cartItems = document.getElementsByClassName('shopping-cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('item-name')
    item.innerHTML = localStorage.getItem('SCI-127-43-13')
    cartItems.append(item)
    updateCartTotal()
    RemoveBtns()
    addToCartBtns()
}

function RemoveBtns() {
    var removeBtns = document.getElementsByClassName('cartRemovingBtn')
    for(var i=0; i<removeBtns.length;i++) {
        var removeButton = removeBtns[i]
        removeButton.addEventListener('click' , removeCartItem)
        localStorage.setItem('SCI-127-44-00', localStorage.getItem('SCI-127-43-13'));
        
    }

}
function addToCartBtns(){
    var addToCartBtns = document.getElementsByClassName('addToCartBtn')
    for(var i=0; i<addToCartBtns.length;i++) {
        var addToCartbtn = addToCartBtns[i]
        addToCartbtn.addEventListener('click' , addToCartClicked)

    }
}
function addToCartClicked(event) {
    var btn = event.target
    var shopItem = btn.parentElement
    var title = shopItem.getElementsByClassName('title')[0].innerText
    var price = shopItem.getElementsByClassName('price')[0].innerText
    var imgSrc = shopItem.getElementsByClassName('Fortnite-Packs-Img')[0].src
    addItemToCart(title, price, imgSrc)
    updateCartTotal()
}

function addItemToCart(title, price, imgSrc) {

    item = document.createElement('div')
    cartItems = document.getElementsByClassName('shopping-cart-items')[0]
    
    var cartItemNames = cartItems.getElementsByClassName('item-name')
    for(var i = 0; i<cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert("لا يمكنك طلب أكثر من 1 منتج من هذا النوع")
            return
        }
    }
    cartItemLayout = `
        <div id="item">
            <li class="itemInCart">
                <img class="item-img" src="${imgSrc}" />
                <span class="item-name">${title}</span>
                <span class="item-price">${price}</span>
                <span class="item-quantityword">الكمية: <span class="item-quantity item-quantityword">1</span></span>
                <button class="cartRemovingBtn"><span class="cartRemovingBtntxt">X</span></button>
            </li>
        </div>`
    item.innerHTML = cartItemLayout;
    cartItems.append(item)
    item.getElementsByClassName('cartRemovingBtn')[0].addEventListener('click', removeCartItem)
    
    // to remove undefined word from the localStorage..
    if (saveCart == null) {
        saveCart = ""
    }

    saveCart = saveCart + cartItemLayout

    localStorage.setItem('SCI-127-43-13', localStorage.getItem('SCI-127-44-00')+saveCart)
    cartItemsTxt = cartItems.innerHTML

}

function removeCartItem(event) {
    // what ever remove button clicked on..
    var removeButtonClicked = event.target
    removeButtonClicked.parentElement.parentElement.remove()
    cartItems = document.getElementsByClassName('shopping-cart-items')[0]
    var cartItemsToText = cartItems.innerHTML
    localStorage.setItem('SCI-127-43-13', cartItemsToText)
    localStorage.setItem('SCI-127-44-00', cartItemsToText)
    updateCartTotal()
}


function updateCartTotal() {
    var shoppingCartItems = document.getElementsByClassName('shopping-cart-items')[0]
    var cartItems = shoppingCartItems.getElementsByClassName('itemInCart')
    var itemsCount = cartItems.length
    var total = 0

    for(var i=0; i<cartItems.length;i++) {
        var cartItem = cartItems[i]
        var itemPrice = cartItem.getElementsByClassName('item-price')[0]
        var itemQty = cartItem.getElementsByClassName('item-quantity')[0]
        var price = parseFloat(itemPrice.innerText.replace('$', ''))
        var qty = itemQty.innerText
        total = (total + (price * qty)) *1000 / 1000
    }
    document.getElementsByClassName('badge2')[0].innerText = itemsCount
    document.getElementsByClassName('badge2')[1].innerText = itemsCount
 
    document.getElementsByClassName('total-price')[0].innerText = '$' + total
    if (total > 0) {
        $(".CheckOutButton").show();
        var giveRedColorToCartCount = document.getElementsByClassName('badge2')[0]
        var giveRedColorToCartCount2 = document.getElementsByClassName('badge2')[1]
        giveRedColorToCartCount2.classList.add('badge')
        giveRedColorToCartCount.classList.add('badge')
    } else {
        $(".CheckOutButton").hide();
        var giveRedColorToCartCount = document.getElementsByClassName('badge2')[0]
        var giveRedColorToCartCount2 = document.getElementsByClassName('badge2')[1]
        giveRedColorToCartCount2.classList.remove('badge')
        giveRedColorToCartCount.classList.remove('badge')

    }
    
}