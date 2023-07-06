<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Products </title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
		<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>
		<!-- Start of Navi -->
		<div class="nav" id="navi">
		  <a href="homeStaff.php">Home</a>
		  <a href="productsStaff.php"  class="active">Products</a>
		  <a href="servicesStaff.php">Services</a>
		  <a href="reportStaff.php">Report</a>
		  <div class="nav-item dropdown">
			<button class="dropbtn" onclick="toggleDropdown()">Me <i class="fas fa-caret-down"></i></button>
			<div class="dropdown-content" id="profileDropdown">
			  <a href="#">Schedule</a>
			  <a action="logout.php">Log Out</a>
			</div>
		  </div>
		  <a href="javascript:void(0)" class="icon" onclick="hamburger()">
			<i class="fas fa-paw"></i>
		  </a>
		</div>
		<!-- End of Navi -->
		
		<header class="SPP" style="font-size:30px;text-align: center;">
		YOUR FURRY FRIEND'S ONE-STOP SHOP
		</header>
		
		<!-- Scroll to top button -->
		<button onclick="topFunction()" id="myBtn" title="Go to top">Up</button>
		
		<!-- PRODUCTS SECTION -->
		<div class="products-catalogue">
			
			<!-- Start of Search Bar -->
			<div class="input-box">
			  <i class="uil uil-search"></i>
			  <input type="text" id="search-input" placeholder="Search here..." />
			  <button id="search-button" class="button"><button id="search-button" class="button">
				<i class="fas fa-search fa-lg" style="color: #000000; animation: bounce 1s infinite;font-size:20px;top:10px;"></i></button></i>
			  </button>
			</div>
			<!-- End of Search Bar -->
		
		<!-- Basket -->
		<div class="basket-container">		
			<div class="basket">
				<div style="display: flex; align-items: center; justify-content: center; height: 100px; text-align: center;">
				  <i class="fas fa-shopping-basket fa-lg" style="color: #000000; font-size: 60px;"></i>
				</div>
				<h2 style="text-align: center;font-family: Lora; font-size: 15px;">My Basket</h2>
				<ul id="basket-items"></ul>
				<ul class="basket-items"></ul>
				<div class="basket-bottom">				
					<p style="font-family: sans-serif; font-weight: bold; font-size:20px;">Total: <span class="basket-total">$0.00</span></p>
					<button class="checkout-btn" style="cursor:pointer">Checkout</button>
				</div>
			</div>
		</div>
		
		<!-- For PopUp/Modal -->
		<div id="modalContainer"></div>
		
		
		
		

		<script>
		<!-- Start of Navi -->
		function hamburger() {document.getElementById('navi').classList.toggle('responsive');}
			
		<!-- Start of scroll to top button -->
		let mybutton = document.getElementById("myBtn");
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}

		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
		
		<!-- Products -->
		const products = [
      { id: 1, title: "Royal Canin: British Shorthair (Adult)", price: 388.70, imageUrl: "product1.jpg" },
      { id: 2, title: "Applaws: Tin Mackerel with Sardine", price: 6.0, imageUrl: "product2.jpg" },
      { id: 3, title: "Royal Canin: Breed Health Nutrition Schnauzer 3KG", price: 113.60, imageUrl: "product2.jpg" },
      { id: 4, title: "Cat Nail Scissor", price: 14.20, imageUrl: "product2.jpg" },
      { id: 5, title: "Biogance: My Cat Shampoo 1L", price: 148.40, imageUrl: "product2.jpg" },
      { id: 6, title: "Cat Collar (gray)", price: 6.90, imageUrl: "product2.jpg" },
      { id: 7, title: "SmartieKat", price: 19.75, imageUrl: "product2.jpg" },
      { id: 8, title: "Cat Style Bowl (Large)", price: 11.90, imageUrl: "product2.jpg" },
      // Add more products as needed
    ];

    const row = document.querySelector(".row");
	const prodContainer = document.querySelector(".products-container");
    const catalogue = document.querySelector(".products-catalogue");
    const basketItems = document.querySelector(".basket-items");
    const basketTotal = document.querySelector(".basket-total");
    const checkoutBtn = document.querySelector(".checkout-btn");
    const modalContainer = document.getElementById("modalContainer");

    let basket = [];

    products.forEach((product) => {
      const productElement = document.createElement("div");
      productElement.className = "product";

      productElement.innerHTML = `
		<div class ="row">
				<div class = "column-product">
					<div class = "product-container">
						<img class="product-image" src="${product.imageUrl}" alt=""> 
						<h2 class="product-title">${product.title}</h2>
					</div>
				</div>
			</div>
		</div>
      `;

      productElement.addEventListener("click", () => {
        openModal(product);
      });

      catalogue.appendChild(productElement);
    });

	<!-- sini buka details/Popup/modal products -->
    function openModal(product) {
      const modalElement = document.createElement("div");
      modalElement.className = "modal";

      modalElement.innerHTML = `
		<div class="modal-container">
          <span class="close" onclick="closeModal()">&times;</span>
          <h1>${product.title}</h1>
          <img class="product-image" src="${product.imageUrl}" alt="">
          <p class="product-title">Product Name: $${product.title}</p>
		  <p class="product-id">Number Series: $${product.id}</p>
		  <p class="product-price">Price: $${product.price}</p>
		  <p class="product-ingredient">Ingredients: $${product.ingredient}</p>
		  <p class="product-stock">Price: $${product.stock}</p>
          <button class="add-to-cart" data-id="${product.id}" style="cursor: pointer">Add to Basket</button>
		  <button class="xx" data-id="${product.xx}" style="cursor: pointer">View Feedback</button> <!-- ni belum jadi -->
		</div>
      `;

      modalContainer.appendChild(modalElement);
      modalElement.style.display = "block";
	  
	  

      const addToCartBtn = modalElement.querySelector(".add-to-cart");
      addToCartBtn.addEventListener("click", () => {
        addToCart(product);
        closeModal();
      });
    }

    function closeModal() {
      const modalElement = document.querySelector(".modal");
      modalElement.style.display = "none";
      modalContainer.innerHTML = "";
    }

    function addToCart(product) {
      basket.push(product);
      renderBasket();
    }

    function renderBasket() {
      basketItems.innerHTML = "";
      let total = 0;

      basket.forEach((item) => {
        const li = document.createElement("li");
        li.innerText = `${item.title} - $${item.price}`;
        basketItems.appendChild(li);
        total += item.price;
      });

      basketTotal.innerText = `$${total.toFixed(2)}`;
    }

    checkoutBtn.addEventListener("click", () => {
      alert("Checkout functionality is not implemented yet.");
    });
	
	document.addEventListener("click", (event) => {
  const modalElement = document.querySelector(".modal");
  if (event.target === modalElement) {
    closeModal();
  }
});

	
		</script>
	</body>	
</html>