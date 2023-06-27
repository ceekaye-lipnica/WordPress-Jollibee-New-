
// ADD TO CART
const btnCart = document.querySelector('.btnCart');
const cart_close = document.querySelector('.cart_close');
const cart = document.querySelector('.cart');

btnCart.addEventListener('click', ()=> {
  cart.classList.toggle('open')
});

cart_close.addEventListener('click', ()=> {
  cart.classList.remove('open')
});

// COUNTING ITEMS INSIDE THE CART
const btnAddToCarts = document.querySelector('.btnAddToCart');

let cartArr = [];

btnAddToCarts.forEach((btn)=> {
  btn.addEventListener('click', (e)=> {
    e.target.parentElement;
    const cartInfo = {
      img: e.target.parentElement.querySelector('img').src,
      title: e.target.parentElement.querySelector('h4').textContent,
      price: e.target.parentElement.querySelector('p span').textContent,
    }

    console.log(cartArr)
    cartArr.push(cartInfo)
  })
})





// MODAL - CONTACT PAGE
if(btnModal && modal) {
const btnModal = document.querySelector('#btnModal');
const btnClose = document.querySelector('#btnClose');
const modal = document.querySelector('.modal');
}

btnModal.addEventListener('click', addShowClass);
btnClose.addEventListener('click', removeShowClass);

function addShowClass() {
  modal.classList.add('show');
}

function removeShowClass() {
  modal.classList.remove('show');
}

