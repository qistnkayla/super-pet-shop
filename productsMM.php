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
		  <a href="homeMM.php" >Home</a>
		  <a href="productsMM.php"  class="active">Products</a>
		  <a href="servicesMM.php">Services</a>
		  <a href="aboutMM.php" >About Us</a>
		  <div class="nav-item dropdown">
			<button class="dropbtn" onclick="toggleDropdown()">Me <i class="fas fa-caret-down"></i></button>
			<div class="dropdown-content" id="profileDropdown">
			  <a href="profileMM.php">My Profile</a>
			  <a href="orderHistory.php">Order History</a>
			  <a href="logout.php">Log Out</a>
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
		
		<div class="row">
    <div class="column-product" method="get">
        <div class="product-container">
            <img class="product-image" src="${product.imageUrl}" alt="">
            <h2 class="product-title"><?php echo $row['PROD_NAME']; ?></h2>
        </div>
    </div>
</div>

<!-- Add the following code to fetch product details from the database -->
<?php
$query = "SELECT PROD_ID, PROD_NAME, PROD_PRICE, PROD_STOCK, PROD_DESC FROM product";
$result = mysqli_query($connect, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "{ id: " . $row['PROD_ID'] . ", title: '" . $row['PROD_NAME'] . "', price: " . $row['PROD_PRICE'] . ", stock: " . $row['PROD_STOCK'] . ", ingredient: '" . $row['PROD_DESC'] . "', imageUrl: 'product2.jpg' },";
}
?>

			
		</div>
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
		$sql = "SELECT * FROM product";
		$result = mysqli_query($conn,$sql);
		$i = 0;
		while($row = mysqli_fetch_assoc(result)){if (i % 2 == 0) echo '<div class=row>'}



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