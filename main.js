// cart
let cartIcon=document.querySelector('#cart-icon')
let cart=document.querySelector('.cart')
let cartClose=document.querySelector('#close-cart')

cartIcon.onclick = () => {
    cart.classList.add("active");
};
cartClose.onclick = () => {
    cart.classList.remove("active");
};

// cart working js
    if(document.readyState == 'loading'){
        document.addEventListener('DOMContentLoaded',ready)
    }else{
        ready();
    }

// making function

function ready(){
// remove item from cart
    var removeCartBtn=document.getElementsByClassName('cart-remove')
    // console.log(removeCartBtn)
    for(var i=0;i<removeCartBtn.length;i++){
        var button=removeCartBtn[i]
        button.addEventListener('click', removeCartItems)
    }
    // quantity changes
    var quantityInputs=document.getElementsByClassName('cart-quantity')
    for(var i=0;i<quantityInputs.length;i++){
        var input =quantityInputs[i];
        input.addEventListener('change',quantityChanged);
    }
    //add to cart
    var addCart=document.getElementsByClassName("btn-light");
    for(var i=0;i<addCart.length;i++){
        var button=addCart[i]
        button.addEventListener('click', addToCartClicked)
    }
    document.getElementsByClassName('btn_buy')[0].addEventListener("click", buyButtonClick)
}
function buyButtonClick(){
    var cartContent=document.getElementsByClassName('cart-content')[0]
    while(cartContent.hasChildNodes()){
        cartContent.removeChild(cartContent.firstChild);
    }
    updateTotal();
}
// remove item from cart

function removeCartItems(event){
    var buttonClicked=event.target;
    buttonClicked.parentElement.remove();
    updateTotal();
}
// quantity changed
function quantityChanged(event){
    var input=event.target
    if(isNaN(input.value) || input.value<=0){
        input.value=1
    }
    updateTotal();
}
// addto cart
function addToCartClicked(event){
    var button=event.target
    var shopProduct=button.parentElement
    var title = shopProduct.getElementsByClassName('sneaker__name')[0].innerText
    var price = shopProduct.getElementsByClassName('sneaker__price')[0].innerText
    var ProductImg = shopProduct.getElementsByClassName('sneaker__img')[0].src
    addProductToCart(title , price, ProductImg)
    updateTotal();
}
function addProductToCart(title , price, ProductImg){
    var cartShopBox=document.createElement('div');
    // cartShopBox.classList.add('cart-box');
    cartShopBox.innerText=title
    var cartItems=document.getElementsByClassName('cart-content')[0];
    var cartItemsName=cartItems.getElementsByClassName('cart-product-title');   
    for(var i=0;i<cartItemsName.length;i++){
        if(cartItemsName[i].innerText == title){ 
             alert('you have already add this item to the cart');
             return;
        }
    }
    var cartRowContent=`
        <div class="cart-box">
        <img src="${ProductImg}" alt="" class="cart-img">
        <div class="detail-box">
            <div class="cart-product-title">${title}</div>
            <div class="cart_price">${price}</div>
            <input type="number" value="1" class="cart-quantity">
        </div>
        <i class='bx bxs-trash-alt cart-remove'></i>
        </div>`
    cartShopBox.innerHTML=cartRowContent
    cartItems.append(cartShopBox)
    cartShopBox.getElementsByClassName('cart-remove')[0].addEventListener("click", removeCartItems);
    cartShopBox.getElementsByClassName('cart-quantity')[0].addEventListener("change", quantityChanged);
    // updateTotal();
}
// update total
function updateTotal(){
    var cartContent=document.getElementsByClassName("cart-content")[0];
    var cartBoxes =cartContent.getElementsByClassName('cart-box');
    var total=0;
    for(var i=0;i<cartBoxes.length;i++){
        var cartBox=cartBoxes[i];
        var priceElement=cartBox.getElementsByClassName("cart_price")[0];
        var quantityElement=cartBox.getElementsByClassName("cart-quantity")[0];
        var price=parseFloat(priceElement.innerText.replace("$",""));
        var quantity=quantityElement.value;
        total= total + (price*quantity);
    }
        // if price contain some Cents value
    total=Math.round(total *100)/100

    document.getElementsByClassName('total-price')[0].innerText="$"+total;
    
}
// product page
const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);