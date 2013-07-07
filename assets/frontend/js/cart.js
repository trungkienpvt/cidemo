
function addToShoppingCartRedirect(a, d, c) {
    if (readCookie("shopping_cart_store") == null) {
        createCookie("shopping_cart_store", ",", 1)
    }
    var e = readCookie("shopping_cart_store");
    if (e.search("," + a + "-") == -1) {
        var b = e + "," + a + "-" + d + "-" + c;
        createCookie("shopping_cart_store", b, 1);
        countShoppingCart("shopping_cart_store");
        window.location = "/gio-hang";
    }
    else {
        alert("Sản phẩm đã có trong giỏ hàng!")
    }
}     