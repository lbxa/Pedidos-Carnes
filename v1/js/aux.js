const addProductBtn = document.querySelector('.product-add-btn');
const productList = document.querySelector('.product-list');

/**
 * Populate the user select menu with all the meat products
 * @param {Object} selectMenu 
 */
function populateProductSelectMenu(selectMenu) {
    const meatList = ['Picanha', 'Coracao', 'Alcatra', 'Fraudinha', 'Costela', 'Cupin'];
    
    for (let i = 0; i < meatList.length; i++) {
        const menuItem = document.createElement('option');
        menuItem.value = meatList[i];
        menuItem.innerHTML = meatList[i];
        selectMenu.appendChild(menuItem);
    }

    return selectMenu;
}

/**
 * Creates HTML for each product 
 * @returns {Object}  – HTML element to be displayed
 */
function createProductRow() {
    // <li class="product-data"></li>
    const productLi = document.createElement('li');
    productLi.className = "product-data";
    
    // <button class="product-remove-btn">Delete</button>
    const productBtn = document.createElement('button');
    productBtn.className = 'product-remove-btn';
    productBtn.innerHTML = '<i class="fal fa-2x fa-minus-square"></i>';

    // <select class="product-menu"></select>
    const productSelectMenu = populateProductSelectMenu(document.createElement('select'));
    productSelectMenu.className = 'product-menu';

    // <input type="text" value="Preco $4.55" class="product-price" disabled>
    const productPrice = document.createElement('input');
    productPrice.className = 'product-price';
    productPrice.type = 'text';
    productPrice.value = 'Preco $4.55';
    productPrice.disabled = true;

    // <input type="number" value="2" class="product-quantity">
    const productQuantity = document.createElement('input');
    productQuantity.className = 'product-quantity';
    productQuantity.type = 'number';
    productQuantity.value = 2;

    // <input type="text" value="Total $10.00" class="product-total" disabled>
    const productTotal = document.createElement('input'); 
    productTotal.className = 'product-total';
    productTotal.type = 'text';
    productTotal.disabled = true;
    productTotal.value = 'Total $10.00';

    productLi.appendChild(productBtn);
    productLi.appendChild(productSelectMenu);
    productLi.appendChild(productPrice);
    productLi.appendChild(productQuantity);
    productLi.appendChild(productTotal);

    return productLi;
}

function addProductRow() {
    const productHTML = createProductRow();
    productList.appendChild(productHTML);
    bindTaskEvents(productHTML);                      
}

function removeProductRow() {
    const currProductSelection = this.parentNode;
    productList.removeChild(currProductSelection);
}

/**
 * Adds events to buttons for each product 
 * @param {Object} currProduct
 */
function bindTaskEvents(currProduct) {
    const delBtn = currProduct.querySelector('button.product-remove-btn');
    delBtn.onclick = removeProductRow;
}

addProductBtn.addEventListener('click', addProductRow);

