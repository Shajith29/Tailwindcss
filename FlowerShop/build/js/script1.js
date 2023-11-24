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
        name: "White Roses Bouqet",
        Images: "/Flowershop/images/flower1.PNG",
        price: 745,
    },
    {
        id: 2,
        name: "Sunshine Gerberas",
        Images: "/Flowershop/images/flower2.PNG",
        price: 595,
    },
    {
        id: 3,
        name: "Classic 10 Red Roses",
        Images: "/Flowershop/images/flower3.PNG",
        price: 550,
    },
    {
        id: 4,
        name: "Mixed Roses Bouquet",
        Images: "/Flowershop/images/flower4.PNG",
        price: 600,
    },
    {
        id: 5,
        name: "White Roses Bouqet",
        Images: "/Flowershop/images/flower5.PNG",
        price: 745,
    },
    {
        id: 6,
        name: "Princess Rose Bouquet",
        Images: "/Flowershop/images/flower6.PNG",
        price: 600,
    },
    {
        id: 7,
        name: " Red Roses",
        Images: "/Flowershop/images/flower7.PNG",
        price: 480,
    },
    {
        id: 8,
        name: "Euphoric Display",
        Images: "/Flowershop/images/flower8.PNG",
        price: 1050,
    },
    {
        id: 9,
        name: "floral ode",
        Images: "/Flowershop/images/flower9.PNG",
        price: 1700,
    },
    {
        id: 10,
        name: "Exotic Bloomscape",
        Images: "/Flowershop/images/flower10.PNG",
        price: 1800,
    },
    {
        id: 11,
        name: "Coral Bloom",
        Images: "/Flowershop/images/flower11.PNG",
        price: 1250,
    },
    {
        id: 12,
        name: "Morning Sunshine",
        Images: "/Flowershop/images/flower12.PNG",
        price: 100,
    },
];

const listCards = [];

function appInit() {
    products.forEach((value, key) => {
        let divEl = document.createElement("div");
        divEl.classList.add("item");
        divEl.innerHTML = `
      <img  class = "w-[300px]" src = "${value.Images}"/>
      <div class = "uppercase mt-6 font-bold text-lg -tracking-tighter w-[80%]">${value.name}</div>
      <div class = "my-2" >₹${value.price}</div>
      <button class = "bg-customVeryDarkPink text-customWhite px-4 py-2 mt-2 w-[100%] uppercase hover:opacity-80" onclick = addToCart(${key})>Add to Cart</button>
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
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;

        if (value != null) {
            let listDiv = document.createElement("div");
            listDiv.classList.add("list");
            listDiv.innerHTML = `
        <img class = "w-[50px] rounded-full" src = "${value.Images}"/> 
        <div>${value.name}</div>
        <div>${value.price}</div>
        <div>${value.quantity}</div>

        <div class = "flex items-center justify-between w-[80px]">
          <button class = "bg-customWhite text-black mr-2 flex items-center justify-center text-customDarkBlue h-[20px] w-[20px] rounded-full"onclick = changeQuantity(${key},${
              value.quantity - 1
          })>-</button>
          <div id = "count">${value.quantity}</div>
          <button class = "bg-customWhite text-black ml-2 flex items-center justify-center text-customDarkBlue h-[20px] w-[20px] rounded-full" onclick = changeQuantity(${key},${
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
        listCards[key].price = quantity * products[key].price;
    }

    reloadCard();
}

openEl.addEventListener("click", () => {
    cardEl.classList.add("open");
});

closeEl.addEventListener("click", () => {
    cardEl.classList.remove("open");
});
