var cart = [];

function addtoCart(med, price, id) {
    var pur = {medicine: med, price: price}
    const index = cart.indexOf(pur)
   
    console.log(index, pur);

    if (index > -1){
        cart.splice(index, 1);

        var rem = document.getElementById(id).innerHTML = 'Add to cart';
        var cartNum = document.getElementById('cart').innerHTML = cart.length;

    }else{
        cart.push(pur)
        var rem = document.getElementById(id).innerHTML = 'remove';
        var cartNum = document.getElementById('cart').innerHTML = cart.length;

    }

    

}

function remove_from_cart(params) {
    alert('removed')
}

function maintain_cart_state(params) {
    sessionStorage.setItem("cart", JSON.stringify(cart));
    console.log(sessionStorage);
    window.location.href="cart.php";
    // var cartNum = document.getElementById('cart').innerHTML = cart.length;
    
}