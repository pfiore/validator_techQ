var pizzaOrder = {
  balance: 0,
  pepperoni_pizza: false,

  topping: function(input_topping) {
    if (this.pepperoni_pizza === false) {
      this.balance =+ 12.95
      return "Cheese";
    } else if (this.pepperoni_pizza === true) {
      this.balance =+ 14.95;
      return "Pepperoni"
    }
  }
};

$(document).ready(function() {
    $('form#input').submit(function(event) {

    var yourOrder = Object.create(pizzaOrder);
    var isChecked = $('#pepperoni').is(':checked');
    if(isChecked) {
      yourOrder.pepperoni_pizza = true;
    } else {
      yourOrder.pepperoni_pizza = false;
    }

    $('#order').text(yourOrder.topping());
    $('#balance').text(yourOrder.balance);

    event.preventDefault();
    $('#result').show();
  });
});
