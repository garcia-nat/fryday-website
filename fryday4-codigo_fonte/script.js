// Array para armazenar os itens no carrinho
let cartItems = [];

// Função para adicionar um item ao carrinho
function addToCart(itemName, itemPrice) {
    // Verificar se o item já está no carrinho
    const cartItem = cartItems.find(item => item.name === itemName);
    if (cartItem) {
        cartItem.quantity += 1; // Incrementar a quantidade se o item já existir
    } else {
        cartItems.push({ name: itemName, price: itemPrice, quantity: 1 }); // Adicionar novo item ao carrinho
    }

    updateCart(); // Atualizar a exibição do carrinho
}

// Função para remover um item do carrinho
function removeFromCart(itemName) {
    // Encontrar o item no carrinho
    const cartItem = cartItems.find(item => item.name === itemName);
    if (cartItem) {
        cartItem.quantity -= 1; // Decrementar a quantidade

        // Remover o item se a quantidade se tornar zero
        if (cartItem.quantity === 0) {
            const index = cartItems.indexOf(cartItem);
            cartItems.splice(index, 1);
        }
    }

    updateCart(); // Atualizar a exibição do carrinho
}

// Função para atualizar a exibição do carrinho
function updateCart() {
    const cartItemsElement = document.getElementById("cart-items");
    const cartQuantityElement = document.getElementById("cartQuantity");
    const totalPriceElement = document.getElementById("total-price");
    const totalPriceInput = document.querySelector('input[name="total_price"]');

    cartItemsElement.innerHTML = ""; // Limpar a lista de itens do carrinho

    let totalQuantity = 0;
    let totalPrice = 0;

    // Percorrer os itens do carrinho e exibi-los
    cartItems.forEach(item => {
        const listItem = document.createElement("li");
        listItem.innerHTML = `${item.name} - €${item.price} - ${item.quantity} x `;

        const removeButton = document.createElement("button");
        removeButton.textContent = "Remover";
        removeButton.classList.add("remove-button");
        removeButton.addEventListener("click", () => removeFromCart(item.name));
        listItem.appendChild(removeButton);

        cartItemsElement.appendChild(listItem);

        totalQuantity += item.quantity;
        totalPrice += item.price * item.quantity;
    });

    cartQuantityElement.textContent = totalQuantity; // Atualizar a quantidade do carrinho
    totalPriceInput.value = totalPrice.toFixed(2); // Update the hidden input field
    totalPriceElement.textContent = "Preço total: €" + totalPrice.toFixed(2);
}

// Função para enviar os itens do carrinho para o servidor
function sendCartItemsToServer() {
    const cartItemsData = JSON.stringify(cartItems);
  
    // Criar uma nova XMLHttpRequest objeto
    const xhr = new XMLHttpRequest();
  
    // Defina a URL e o método da solicitação
    xhr.open("POST", "compra-produto.php", true);
  
    // Defina o header da solicitação
    xhr.setRequestHeader("Content-Type", "application/json");
  
    // Lidar com a resposta do servidor
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          console.log("Cart items saved successfully");
        } else {
          console.error("Error saving cart items:", xhr.status);
        }
      }
    };
  
    // Mandar os itens do carrinho para o servidor
    xhr.send(cartItemsData);
  }
  
  /**
  // Função para simular o processo de finalização da compra
  function checkout() {
    // Implemente sua lógica de finalização da compra aqui
    // ...
  
    // Send the cart items data to the server
    sendCartItemsToServer();
  
    // Display a success message or redirect to a thank you page
    alert("Checkout completed successfully.");
  }
  
  // Function to fetch the cart items from the server
  function fetchCartItems() {
    // Create a new XMLHttpRequest object
    const xhr = new XMLHttpRequest();
  
    // Define the request URL and method
    xhr.open("GET", "get_cart_items.php", true);
  
    // Handle the response from the server
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // Parse the response JSON
          const response = JSON.parse(xhr.responseText);
  
          // Update the cart items array
          cartItems = response.preco_total;
  
          // Update the cart display
          updateCart();
        } else {
          console.error("Error fetching cart items:", xhr.status);
        }
      }
    };
  
    // Send the request
    xhr.send();
  }
   */
  // Call the fetchCartItems function to retrieve the cart items on page load
  fetchCartItems();
  