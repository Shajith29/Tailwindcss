const filterEl = document.getElementById("filter");
const countEl = document.getElementById("count");
const listEl = document.getElementById("list");

const productList = [
  {
    id: 1,
    name: "White-Black",
    price: 2000.12,
    img: "../images/img1.jpg",
    quantity: 0,

    nature: {
      color: ["White", "Black"],
      size: ["S", "M", "L"],
      type: "Polo",
    },
  },

  {
    id: 2,
    name: "White-Black-Brown",
    price: 1200.0,
    img: "../images/img2.jpg",
    quantity: 0,

    nature: {
      color: ["White", "Black", "Brown"],
      size: ["S", "M", "L", "XL"],
      type: "T-Shirt",
    },
  },

  {
    id: 3,
    name: "Black",
    price: 1400.0,
    img: "/images/img3.jpg",
    quantity: 0,

    nature: {
      color: ["Black"],
      size: ["S", "M", "L", "XL"],
      type: "T-Shirt",
    },
  },

  {
    id: 4,
    name: "Blue",
    price: 1200.0,
    img: "../images/img4.jpg",
    quantity: 0,

    nature: {
      color: ["Blue"],
      size: ["S", "M", "L", "XL"],
      type: "T-Shirt",
    },
  },

  {
    id: 5,
    name: "Brown",
    price: 1500.0,
    img: "../images/img5.jpg",
    quantity: 0,

    nature: {
      color: ["Brown"],
      size: ["S", "M", "L", "XL"],
      type: "Polo",
    },
  },

  {
    id: 6,
    name: "White-Black",
    price: 4000.0,
    img: " ../images/img6.jpg",
    quantity: 20,

    nature: {
      color: ["White", "Black"],
      size: ["S", "M", "L", "XL"],
      type: "Shirt",
    },
  },
];

let product = productList;
console.log(product);

showProducts(product);

function showProducts(productFilter) {
  countEl.innerText = productFilter.length;
  listEl.innerHTML = "";
  productFilter.forEach((item) => {
    const itemEl = document.createElement("div");
    itemEl.innerHTML = `

    <img
            src="${item.img}"
            class="w-[90%] h-[300px] object-fill rounded-md"
            alt="i${item.name}"
          />
          <div class="text-center mt-2 text-white font-bold" id="title">
            ${item.name}
          </div>
          <div class="text-center text-white italic" id="price">$${item.price}</div>
    `;
    listEl.appendChild(itemEl);
  });
}

console.log(filterEl);

filterEl.addEventListener("submit", (e) => {
  e.preventDefault();
  let valueFilter = e.target.elements;
  console.log(valueFilter);

  //Check Category
  productFilter = productList.filter((item) => {
    if (valueFilter.category.value != "") {
      if (item.nature.type != valueFilter.category.value) {
        return false;
      }
    }

    //Filter by color

    if (valueFilter.color.value != "") {
      if (!item.nature.color.includes(valueFilter.color.value)) {
        return false;
      }
    }

    //Filter by name

    if (valueFilter.name.value != "") {
      if (!item.name.includes(valueFilter.name.value)) {
        return false;
      }
    }

    //Filter by min Price

    if (valueFilter.minPrice.value != "") {
      if (item.price <= valueFilter.minPrice.value) {
        return false;
      }
    }

    //Filter by Max Price

    if (valueFilter.maxPrice.value != "") {
      if (item.price >= valueFilter.maxPrice.value) {
        return false;
      }
    }

    return true;
  });

  showProducts(productFilter);
});
