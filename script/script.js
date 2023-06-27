const btnCart = document.querySelector(".btnCart");
const cart_close = document.querySelector(".cart_close");
const cart = document.querySelector(".cart");
const cartWrapper = document.querySelector(".cart__wrapper");
const counter = document.querySelector(".count");
let cartArr = [];

btnCart.addEventListener("click", () => {
  cart.classList.toggle("open");
});

cart_close.addEventListener("click", () => {
  cart.classList.remove("open");
});

// PAGLALAGAY NG ITEM SA LOOB NG CART
const btnAddtoCarts = document.querySelectorAll(".btnAddtoCart");

btnAddtoCarts.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.target.parentElement;

    const cartInfo = {
      img: e.target.parentElement.querySelector("img").src,
      title: e.target.parentElement.querySelector("h4").textContent,
      price: e.target.parentElement.querySelector("p span").textContent,
    };

    cartArr.push(cartInfo);

    if (cartArr.length !== 0) {
      counter.style.display = "flex";
      counter.textContent = cartArr.length;
    }

    const cartItem = document.createElement("div");
    const div = document.createElement("div");
    cartItem.classList = "cartItem";
    const img = document.createElement("img");
    const h4 = document.createElement("h4");
    const span = document.createElement("span");

    img.setAttribute("src", e.target.parentElement.querySelector("img").src);
    h4.innerHTML = e.target.parentElement.querySelector("h4").textContent;
    span.innerHTML = e.target.parentElement.querySelector("span").textContent;

    cartItem.appendChild(img);
    div.appendChild(h4);
    div.appendChild(span);
    cartItem.appendChild(div);

    cartWrapper.appendChild(cartItem);
  });
});

// MODAL - CONTACT PAGE
const btnModal = document.querySelector("#btnModal");
const btnClose = document.querySelector("#btnClose");
const modal = document.querySelector(".modal");
if (btnModal && modal) {
  btnModal.addEventListener("click", addShowClass);
  btnClose.addEventListener("click", removeShowClass);

  function addShowClass() {
    modal.classList.add("show");
  }

  function removeShowClass() {
    modal.classList.remove("show");
  }
}
