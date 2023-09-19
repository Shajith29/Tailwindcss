const openEl = document.getElementById("open");
const closeEl = document.getElementById("close");
const cardEl = document.getElementById("card");
const listEl = document.getElementById("list");
const listCardEl = document.getElementById("listCard");
const totalEl = document.getElementById("total");
const quantity = document.getElementById("quantity");

//Image array

const products = [
  {
    id: 1,
    name: "Product 1",
    image: "../image/1.PNG",
    cost: 1200,
  },

  {
    id: 2,
    name: "Product 2",
    image: "../image/2.PNG",
    cost: 2000,
  },

  {
    id: 1,
    name: "Product 3",
    image: "../image/3.PNG",
    cost: 1250,
  },

  {
    id: 4,
    name: "Product 4",
    image: "../image/4.PNG",
    cost: 1000,
  },

  {
    id: 5,
    name: "Product 5",
    image: "../image/5.PNG",
    cost: 800,
  },

  {
    id: 6,
    name: "Product 6",
    image: "../image/6.PNG",
    cost: 1000,
  },
];

const listCards = [];

function appInit() {
  products.forEach((value, key) => {
    let divEl = document.createElement("div");
    divEl.classList.add("item");
    divEl.innerHTML = `
      <img  class = "w-[190px]" src = "${value.image}"/>
      <div class = "uppercase mt-2 font-bold text-lg -tracking-tighter">${value.name}</div>
      <div class = "" >$${value.cost}</div>
      <button class = "bg-customDarkBlue text-customWhite px-4 py-2 mt-2 w-[100%] uppercase hover:opacity-80" onclick = addToCart(${key})>Add to Cart</button>
    `;

    listEl.appendChild(divEl);
  });
}

appInit();

function addToCart(key) {
  if (listCards[key] == null) {
    listCards[key] = products[key];
    listCards[key].quantity = 1;
  }

  reloadCard();
}

function reloadCard() {
  console.log(listCards);
  listCardEl.innerHTML = "";

  let totalPrice = 0;
  let count = 0;

  listCards.forEach((value, key) => {
    totalPrice = totalPrice + value.cost;
    count = count + value.quantity;

    if (value != null) {
      let listDiv = document.createElement("div");
      listDiv.classList.add("list");
      listDiv.innerHTML = `
        <img class = "w-[80px]" src = "${value.image}"/> 
        <div>${value.name}</div>
        <div>${value.cost}</div>
        <div>${value.quantity}</div>

        <div class = "flex items-center justify-between w-[80px]">
          <button class = "bg-customWhite mr-2 flex items-center justify-center text-customDarkBlue h-[20px] w-[20px] rounded-full"onclick = changeQuantity(${key},${
            value.quantity - 1
          })>-</button>
          <div id = "count">${value.quantity}</div>
          <button class = "bg-customWhite ml-2 flex items-center justify-center text-customDarkBlue h-[20px] w-[20px] rounded-full" onclick = changeQuantity(${key},${
            value.quantity + 1
          })>+</button>
        </div>
      `;

      listCardEl.appendChild(listDiv);
    }
  });

  totalEl.innerText = `Total: $${totalPrice}`;
  quantity.innerText = count;
}

function changeQuantity(key, quantity) {
  if (quantity == 0) {
    delete listCards[key];
  } else {
    listCards[key].quantity = quantity;
    listCards[key].cost = quantity * products[key].cost;
  }

  reloadCard();
}

openEl.addEventListener("click", () => {
  cardEl.classList.add("open");
});

closeEl.addEventListener("click", () => {
  cardEl.classList.remove("open");
});
