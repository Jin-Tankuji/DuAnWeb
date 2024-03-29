var cartButton = document.querySelector('.fa-shopping-bag');
var cart = document.querySelector('.cart');
var deleteButton = null;


//lấy thông tin của sản phẩm
var getCartInfo = () => {
    const cartStorage = localStorage.getItem('product') || "{}";
    let cartObject = JSON.parse(cartStorage);
    const castList = document.querySelector('.cart-list');
    castList.innerHTML = '';
    let total = 0;
    let priceNumber= 0;
    for(let key in cartObject) {
        priceNumber = cartObject[key].price.replace( /\D/g, '' );
        console.log( priceNumber );
        total += parseInt( cartObject[key].amount ) * parseInt( priceNumber );
        castList.innerHTML += `
            <div class="cart-item">
                <div class="cart-item_left">
                    <img src="${cartObject[key].photo}" alt=""/>
                </div>
                <div class="cart-item_right"> 
                    <div class="cart-info">
                        <h3>${cartObject[key].name}</h3>
                        <h4>${cartObject[key].price}</h4>
                        <div class="item-amount">
                            
                            <span class="amount">Số lượng: ${cartObject[key].amount}</span>
                            
                        </div>
                        <span class="remove-item">Xóa</span>
                    </div>
                </div>
            </div>
        `
    }
//nút xóa
    deleteButton = document.querySelectorAll('.remove-item');
    deleteButton.forEach((button, index) => {
        button.addEventListener('click', function () {
            deleteProduct(Object.keys(cartObject)[index]);
        });
    });
//thay đổi tổng giá sau khi bấm nút "mua ngay"
    const totalAmount = document.querySelector('#priceTotal');
    //insert dot to every 3 number
    totalAmount.innerHTML = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "đ";
    deleteButton = document.querySelectorAll('.remove-item');
    deleteButton.forEach((button,index) => {
        button.addEventListener('click', function() {
            deleteProduct(Object.keys(cartObject)[index]);
        })
    })
    console.log(deleteButton);
}

cartButton.addEventListener('click', function() {
    getCartInfo();
    cart.classList.toggle('show-cart');
})

window.addEventListener('click', function(e) {
    var cart = document.querySelector('.cart');
    var cartButton = document.querySelector('.fa-shopping-bag');

    if (!cart.contains(e.target) && e.target !== cartButton) {
        cart.classList.remove('show-cart');
    }
});

//nút mua hàng và sự kiện sau khi bấm mua hàng
var buyButton = document.querySelector('.btn-buy');
if(buyButton !== undefined) {
    buyButton?.addEventListener('click', function () {
        //!Get product name
        const productName = document.querySelector('.product-name').textContent;
        const productPrice = document.querySelector('.update-price').textContent;
        const productPhoto = document.querySelector('.product-photo').src;
        alert('Đã thêm vào giỏ hàng!' + '\n' + 'Sản phẩm: ' + productName + '\n' + 'Giá: ' + productPrice + '');
        const cartStorage = localStorage.getItem('product') || "{}";
        let cartObject = JSON.parse(cartStorage);

        //add to cart
        //get length of cart
        //if not exists

        if (cartObject[productName] == undefined) {
            cartObject = {
                ...cartObject,
                [productName]: {
                    name: productName,
                    price: productPrice,
                    photo: productPhoto,
                    amount: 1
                }
            }
        } else {
            cartObject[productName].amount++;
        }

        localStorage.setItem('product', JSON.stringify(cartObject))

        //show cart
        getCartInfo();
        cart.classList.add('show-cart');
    })
}


var deleteProduct = (key) => {
    const cartStorage = localStorage.getItem('product') || "{}";
    let cartObject = JSON.parse(cartStorage);
    delete cartObject[key];
    localStorage.setItem('product',JSON.stringify(cartObject));
    getCartInfo();

}




