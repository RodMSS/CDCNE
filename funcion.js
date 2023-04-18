const xhr = new XMLHttpRequest();

xhr.onload = function() {
	if (this.status === 200) {
		const productos = JSON.parse(this.responseText);
		const listaProductos = document.getElementById("productos");

		productos.forEach(function(producto) {
			const li = document.createElement("li");

			const imagen = document.createElement("img");
			imagen.src = producto.imagen;
			imagen.alt = producto.nombre;
			imagen.width = 100;

			const nombre = document.createElement("h3");
			nombre.textContent = producto.nombre;

			const descripcion = document.createElement("p");
			descripcion.textContent = producto.descripcion;

			const precio = document.createElement("p");
			precio.textContent = `$${producto.precio}`;

			const boton = document.createElement("button");
			boton.textContent = "Agregar al carrito";
			boton.addEventListener("click", function() {
				// Aquí puedes implementar la lógica para agregar el producto al carrito
			});

			li.appendChild(imagen);
			li.appendChild(nombre);
			li.appendChild(descripcion);
			li.appendChild(precio);
			li.appendChild(boton);

			listaProductos.appendChild(li);
		});
	}
}

xhr.open("GET", "productos.php");
xhr.send();

