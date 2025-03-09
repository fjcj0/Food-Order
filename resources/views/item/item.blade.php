<x-content>
    <section class="item bg-danger d-block mx-auto" id="item" style="width:90%; height: auto; margin: 10rem 0rem; border-radius: 15px;">
        <form method="post" action="/addorder/{{$item->id}}" class="item-card container-fluid d-flex" style="height: 100%;">
            @csrf
            @method('post')
            <div class="image d-flex justify-content-center align-items-center" id="image">
                <img src="{{asset('storage/' . $item->image)}}" alt="">
            </div>
            <div class="infomration-item" id="information-item">
                <h1 class="text-center">{{$item->name}}</h1>
                <p class="mt-3 text-white" style="max-width:70%;">{{ $item->description }}</p>
                <h3 class="text-white my-3">Price: $<span id="unit-price">{{$item->price}}</span></h3>
                <div>
                    <button type="button" id="decrease" class="btn btn-sm btn-dark">-</button>
                    <span id="quantity" class="text-white mx-3" name="quantity">1</span>
                    <button type="button" id="increase" class="btn btn-sm btn-dark">+</button>
                </div>
                <h3 class="text-white my-3">Final Price: $<span id="final-price">0</span></h3>
                <input type="hidden" name="quantity" id="hidden-quantity" value="1">
                <button class="btn btn-lg btn-dark mt-3" style="font-weight:bolder;" type="submit">Order now</button>
            </div>
        </form>
    </section>
    <script>
        const quantityElement = document.getElementById('quantity');
        const increaseButton = document.getElementById('increase');
        const decreaseButton = document.getElementById('decrease');
        const unitPriceElement = document.getElementById('unit-price');
        const finalPriceElement = document.getElementById('final-price');
        const hiddenQuantityInput = document.getElementById('hidden-quantity'); // Hidden quantity input
        let quantity = 1;
        const unitPrice = parseFloat(unitPriceElement.textContent);

        function updateQuantity() {
            quantityElement.textContent = quantity;
            hiddenQuantityInput.value = quantity;
            const finalPrice = quantity * unitPrice;
            finalPriceElement.textContent = finalPrice.toFixed(2);
        }
        increaseButton.addEventListener('click', () => {
            quantity++;
            updateQuantity();
        });
        decreaseButton.addEventListener('click', () => {
            if (quantity > 1) {
                quantity--;
                updateQuantity();
            }
        });
        updateQuantity();
    </script>
</x-content>
