$(document).ready(function(){
    function Customer(location,people){
        this.location = location;
        this.people = people;
    }

    Customer.prototype.getTotalPrice = function() {
        return this.LocationPrice*this.peoplePrice
    }

    Customer.prototype.getLocationPrice = function() {
        if(this.location == this.location){
            if(this.location == "CBD"){
                return 100;
            }
            else if(this.location == "Rongai"){
                return 200;
            }
            else if (this.location == "Langata"){
                return 70;
            }
            else if (this.location == "Ngong"){
                return 250;
            }
            else if (this.location == "1824"){
                return 50;
            }
        }
    }
})