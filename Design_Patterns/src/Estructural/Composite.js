function shoppingCar(typePaella){ 
    this.typePaella = typePaella;
    this.arrayElements = [];
}


shoppingCar.prototype = {
    add: function(product){
        this.arrayElements.push(product);
    },

    remove: function (product){
        this.arrayElements.split(0, this.arrayElements.length);
        this.arrayElements.add(product);
    },

    show: function(){
        return this.arrayElements;
    }
}


function buildShoppingCar(typeProduct, products){

    var car = new shoppingCar(typeProduct); 
    var resultCar;
    for(var i = products.length - 1; i >= 0; i--) {
        resultCar = car.add(products[i])
    }
    
    return null;
}

