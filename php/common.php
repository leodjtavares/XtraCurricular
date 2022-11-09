<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<head>
    <script src="https://unpkg.com/vue@2.7.8/dist/vue.js"></script>
    <script src="../js/products.js"></script>
    <script src="../js/sortby.js"></script>
    <title>XtraCurricular Zone</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>


    <div id="app">
        <div id="top-nav-left">
            <a href="https://github.com/leodjtavares/leodjtavares.github.io">XtraCurricular Zone</a>
        </div>
        <div id="top-nav-right">
            <button>
                Basket({{cartCount}})
                <!-- 'cartItemCount' is used the same way as a data property. -->
            </button>
        </div>
        <div id="main"></div>
        <div id="top-nav-center">
            <div class="search-container">
                <form>
                    <input type="text" placeholder="Search by Subject, Location, etc..." >
                </form>
            </div>

        </div>
        <!-- The <div> ID will be used to link to the Vue.js code -->
        <h1>Activities</h1>
        Sort by:<br>
        <input type="radio" id="priceA" name="sort" value="priceA">
        <label for="lowToHigh">Price: Low to High</label>
        <input type="radio" id="priceZ" name="sort" value="priceZ">
        <label for="highToLow">Price: High to Low</label><br>
        <input type="radio" id="availabilityA" name="sort" value="availabilityA">
        <label for="lowToHigh">Availability: Low to High</label>
        <input type="radio" id="availabilityZ" name="sort" value="availabilityZ">
        <label for="highToLow">Availability: High to Low</label><br>
        <input type="radio" id="subjectA" name="sort" value="subjectA">
        <label for="highToLow">Name: A to Z</label>
        <input type="radio" id="subjectZ" name="sort" value="subjectZ">
        <label for="highToLow">Name: Z to A</A></label><br>
        <input type="radio" id="locationA" name="sort" value="locationA">
        <label for="highToLow">Location: A to Z</A></label>
        <input type="radio" id="locationZ" name="sort" value="locationZ">
        <label for="highToLow">Location: Z to A</A></label><br>

        <button id="sort-btn">Sort</button>
        <button id="reset-btn">Reset</button>



       

        <div v-for="product in products">
            <br>
            <div class="cart">
                <h2>{{product.activity}}</h2>
                <p>Price: £{{product.price}}</p>
                <p>Location: {{product.location}}</p>
                <p>Spaces Left: {{product.availableSpaces}}</p>
                <div><button class="cartButton" v-on:click="buy(product)" v-if='canBuy(product)'>Buy</button>
                </div>
                <div class="availability">
                    <span v-if='product.availableSpaces === cartItemCount(product.spaces)'>All out!</span>
                    <span v-else-if="product.availableSpaces - cartItemCount(product.spaces) < 5">
                        Only {{product.availableSpaces - cartItemCount(product.spaces)}} left!
                    </span>
                    <span v-else>Buy now!</span>
                </div>
                <div class="rating">
                    <span v-for='n in product.rating'>★</span>
                    <span v-for='n in 5 - product.rating'>☆</span>
                </div>
                <br>
            </div>
        </div>

    </div>

    <script>
        let app = new Vue({ // the root Vue instance
            el: '#app', // this links to the <div> with the ID #app
            data: {
                products: product,

                cart: []
            },

            computed: { // the Computed Property object
                cartCount: function () { // the property name
                    // its value is calculated when it is called
                    return this.cart.length || "0";
                }



            },

            methods: {
                buy(product) {
                    if (product.availableSpaces > 0) {
                        product.availableSpaces--;
                    }
                    this.cart.push(product.id);
                },

                canBuy(product) {
                    return product.availableSpaces > this.cartItemCount(product.spaces);
                },

                cartItemCount(id) {
                    let count = 0;
                    for (let i = 0; i < this.cart.length; i++) {
                        if (this.cart[i] === id) {
                            count++;
                        }
                    }
                    return count;
                }


            },


        })
    </script>
</body>

</html>