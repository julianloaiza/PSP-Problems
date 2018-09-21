/*Esta funcion permite obtener el valor del select de html(onchange)*/
let menuItems = ["Mariscos", "CarnePollo", "Vegetariana"]
let originalPrice;
let ivaCalculate;
var paellas = [];

function getValueType (paellaType){
	this.paellaType = paellaType;
	if(paellas.includes(this.paellaType.value)){
		let indice = 0
		for (var i = 0; paellas[i] != this.paellaType.value; i++){indice+=1;}
		paellas.splice(indice, 1);
		console.log("remove: ", this.paellaType.value);
	}
	else{
		paellas.push(this.paellaType.value);
		console.log("add: ", this.paellaType.value);
	}	
}

function getValuePrice(paellaPrice){

	this.paellaPrice = paellaPrice;
	ivaCalculate = Math.round((this.paellaPrice.value * 19) / 100);
	originalPrice = this.paellaPrice.value - ivaCalculate;
}

function getValueCoin(typeCoin){
	this.typeCoin = typeCoin;
}

function buildPaella(){

	/*Construccion de paella*/
	var factory = executeFactory(this.paellaType.value);
	var paellaProduct = generatePaella(factory.type);
	//console.log(paellaProduct);

	/*llamamdo a patrones de diseño prototype y singleton*/
	var buildBase = produceBase(); //prototype
	var executeSingle = executeSingleton();
	//console.log(buildBase);
	//console.log(executeSingle);

	/*validacion de tipo de moneda para llamado del adaptador*/
	if(this.typeCoin.value == "dolar"){
		console.log("Precio en dolares con iva " + new CalculatePriceDolar().newCalculateDolar(originalPrice));
	}else if(this.typeCoin.value == "euro"){
		console.log("Precio en dolares con iva " + new CalculatePriceEuro().newCalculateEuro(originalPrice));
	}

	var miCarrito = new buildShoppingCar(factory.type, paellas)
	var decorator = new executeDecorator(menuItems)

	console.log("miCarrito " + miCarrito)
	console.log("Precio Original " + originalPrice);
	console.log("Precio Iva " + ivaCalculate);
	console.log(decorator)

}