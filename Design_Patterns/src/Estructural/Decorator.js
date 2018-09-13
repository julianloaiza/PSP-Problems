function productPaella(name){
	this.name = name;
}

function decoratorNameProduct(product, description){
	this.product = product;
	this.description = description;

	var allName = this.product.name + " " + description;

	return allName
}

function executeDecorator(item){

	var itemDecorate = [];

	for(var i = 0; i < item.length; i++){
		var productName = new productPaella(item[i]);
		var decorated = new decoratorNameProduct(productName, "La Mejor Paella");
		itemDecorate.push(decorated)
	}
	return itemDecorate;
}
