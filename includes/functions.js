var cart = [];

function addtoCart(med, price, id) {
    var pur = {medicine: med, price: price, id: id}
    const index = cart.indexOf(pur)
   
    console.log(id);

    if (index > -1){
        cart.splice(index, 1);

        var rem = document.getElementById(id).innerHTML = 'Add to cart';
        var cartNum = document.getElementById('cart').innerHTML = cart.length;

    }else{
        cart.push(pur);
        var rem = document.getElementById(id).innerHTML = 'remove';
        var cartNum = document.getElementById('cart').innerHTML = cart.length;

    }

    

}

function emptyCart(){
    alert('Are You sure');
}

function back(){
    sessionStorage.setItem("cart", JSON.stringify(cart));
    window.history.back();
}


function details(id, type) {
    sessionStorage.setItem("cart", JSON.stringify(cart));
    window.location.href="details.php?id="+id+"&type="+type;
}

function maintain_cart_state(params) {
    sessionStorage.setItem("cart", JSON.stringify(cart));
    window.location.href="cart.php?";
}