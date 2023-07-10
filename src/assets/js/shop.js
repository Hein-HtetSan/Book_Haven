const wishListBtn = document.querySelector(".item .wishlist");
const cartBtn = document.querySelector(".item .cart");
const heart = document.querySelector(".add-wishlist");
const heartFill = document.querySelector(".added-wishlist");
const cart = document.querySelector(".add-cart");
const cartFill = document.querySelector(".added-cart");
const categoryBtn = document.querySelector(".categ");
const categoryFrame = document.querySelector(".cate-wrapper");
const category_links = document.querySelectorAll(".cate-modal a");
const listBtn = document.querySelector(".listbtn");
const linkLists = document.querySelector(".link-list");


listBtn.addEventListener("click", () => {
    linkLists.classList.toggle("active");
})

categoryBtn.onclick = () => {
    categoryFrame.style.transform = "translateY(0)";
}

category_links.forEach(e => {
    e.onclick = (event) => {
        event.preventDefault();
        categoryFrame.style.transform = "translateY(-100%)";
    }
})

wishListBtn.onclick = () => {
    heart.classList.toggle("d-none");
    heartFill.classList.toggle("d-none");
}

cartBtn.onclick = () => {
    cart.classList.toggle("d-none");
    cartFill.classList.toggle("d-none");
}
