    const arr = ["bestseller", "chickenjoy", "yumburger", "breakfast"];
    
    // SLIDER
    for (var i = 0; i < arr.length; i++) {
    tns({
        container: `#${arr[i]}`,
        items: 4,
        gutter: 150,
        mouseDrag: true,
        controls: false,
        nav: false,
    });
    }

    // ADD TO CART
    const btnCart = document.querySelector(".btnCart");
    const cart_close = document.querySelector(".cart_close");
    const cart = document.querySelector(".cart");
    const cartWrapper = document.querySelector(".cart__wrapper");
    const counter = document.querySelector(".count");

    let cartArr = [];

    if (cart || cartWrapper) {
    // OPEN CART
    btnCart.addEventListener("click", () => {
        cart.classList.toggle("open");

        // REMOVE CART ITEM
        const btnXs = document.querySelectorAll(".cartItem button");

        btnXs.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            e.target.parentElement.remove();
        });
        });
    });

    cart_close.addEventListener("click", () => {
        cart.classList.remove("open");
    });

    // INSERT CART ITEM
    const btnAddtoCarts = document.querySelectorAll(".btnAddtoCart");

    btnAddtoCarts.forEach((btn) => {
        btn.addEventListener("click", (e) => {
        e.target.parentElement;

        const cartInfo = {
            img: e.target.parentElement.querySelector("img").src,
            title: e.target.parentElement.querySelector("h4").textContent,
            price: e.target.parentElement.querySelector("p span").textContent,
            price: Number(
            e.target.parentElement.querySelector("p span").textContent
            ),
        };

        console.log(cartInfo);

        cartArr.push(cartInfo);

        const x = cartArr.reduce((acc, curr) => {
            return acc + curr.price;
        }, 0);

        total.innerHTML = x;

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
        const button = document.createElement("button");

        img.setAttribute("src", e.target.parentElement.querySelector("img").src);
        h4.innerHTML = e.target.parentElement.querySelector("h4").textContent;
        span.innerHTML = e.target.parentElement.querySelector("span").textContent;
        button.innerHTML = "x";

        cartItem.appendChild(img);
        div.appendChild(h4);
        div.appendChild(span);
        cartItem.appendChild(div);
        cartItem.appendChild(button);

        cartWrapper.appendChild(cartItem);
        });
    });
    }
