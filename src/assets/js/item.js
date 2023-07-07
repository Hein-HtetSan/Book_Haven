const wishListBtn = document.querySelector(".item .wishlist");
const cartBtn = document.querySelector(".item .cart");
const heart = document.querySelector(".bi-heart");
const heartFill = document.querySelector(".bi-heart-fill");
const cart = document.querySelector(".bi-cart");
const cartFill = document.querySelector(".bi-cart-fill");


wishListBtn.onclick = () => {
    heart.classList.toggle("d-none");
    heartFill.classList.toggle("d-none");
}

cartBtn.onclick = () => {
    cart.classList.toggle("d-none");
    cartFill.classList.toggle("d-none");
}
