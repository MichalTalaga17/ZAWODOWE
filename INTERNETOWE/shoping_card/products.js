
let products = [
    { name: 'axe', price: 10 },
    { name: 'battery', price: 20 },
    { name: 'brush', price: 30 },
    { name: 'bulb', price: 40 },
    { name: 'calculator', price: 50 },
    { name: 'calender', price: 60 },

    { name: 'camera', price: 70 },
    { name: 'can', price: 80 },
    { name: 'chess', price: 90 },
    { name: 'clock', price: 100 },
    { name: 'colour-palette', price: 110 },
    { name: 'computer', price: 120 },

    { name: 'cup', price: 130 },
    { name: 'gift', price: 140 },
    { name: 'glass', price: 150 },
    { name: 'gym', price: 160 },
    { name: 'headphone', price: 170 },
    { name: 'lab', price: 180 },

    { name: 'medal', price: 190 },
    { name: 'megaphone', price: 200 },
    { name: 'mic', price: 210 },
    { name: 'notebook', price: 220 },
    { name: 'painting-brush', price: 230 },
    { name: 'painting-kit', price: 240 },

    { name: 'pencil', price: 250 },
    { name: 'picture', price: 260 },
    { name: 'puzzle', price: 270 },
    { name: 'rocket', price: 280 },
    { name: 'roll-brush', price: 290 },
    { name: 'scissor', price: 300 },

    { name: 'takeaway-cup', price: 310 },
    { name: 'tools', price: 320 },
    { name: 'travel', price: 330 },
    { name: 'umbrella', price: 340 },
    { name: 'video-cam', price: 350 },
    { name: 'wallet', price: 360 }

];

products.forEach((product) => {

    console.log(`<div class="col-lg-4 col-6"><div class="card overflow-hidden shadow-in"><div class="p-3"><img src="products/${product.name}-dynamic-gradient.png" class="card-img-top" alt=""></div><div class="card-body"><p class="fw-lighter">${product.price}$</p><h5 class="fw-normal mb-3">${(product.name).toUpperCase()}</h5><p class="fw-lighter">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, nihil?</p><a href="#" class="btn btn--add shadow-out-hover mt-3">Add to cart</a></div></div></div>`)
});




