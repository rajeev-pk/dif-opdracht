(function(){
	const loadBtn = document.getElementById("load-btn");
	const checkProducts = function(btn) {
		const loadProducts = document.querySelectorAll(".loadmore-product");

		btn.addEventListener("click", () => loadProducts.forEach((product, key) => {
			if(key < 4) {
				console.log(key)
				product.classList.remove("loadmore-product");
				product.style.display = "";
			}
		}));
	}

	setInterval(() => {
		checkProducts(loadBtn)
		if( document.querySelectorAll(".loadmore-product").length === 0 ) {
			loadBtn.style.display = "none";
		}
	}, 1000)



})()
