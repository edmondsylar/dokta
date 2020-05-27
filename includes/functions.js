console.log('Cart', localStorage.cart);
// var info = [];

function addtoCart(med, price, id){
    var info = JSON.parse(sessionStorage.getItem('cart'))
    var cartNum = document.getElementById('cart').innerHTML = info.length;

    var pro = { medicine: med, price: price, id: id }
    info.push(pro);

    document.getElementById(id).innerHTML = 'remove';
    document.getElementById('cart').innerHTML = info.length;
}

// var cart = ['cart'];
// // var cart = new Array();

// function addtoCart(med, price, id) {
//     var pur = {medicine: med, price: price, id: id}
//     console.log(this.cart, pur);
   
//     cart.push(pur);
//     var rem = document.getElementById(id).innerHTML = 'remove';
//     var cartNum = document.getElementById('cart').innerHTML = cart.length;
// }

// function emptyCart(){
//     alert('Are You sure');
// }

function back(){
    var cart = JSON.parse(sessionStorage.getItem('cart'))
    var cartNum = document.getElementById('cart').innerHTML = cart.length;

    sessionStorage.setItem("cart", JSON.stringify(cart));
    window.history.back();
}


function details(id, type) {
    var cart = JSON.parse(sessionStorage.getItem('cart'))
    var cartNum = document.getElementById('cart').innerHTML = cart.length;
    
    sessionStorage.setItem("cart", JSON.stringify(cart));
    window.location.href="details.php?id="+id+"&type="+type;
}