<div class="col-md-3 d-flex">
    <div class="product">
        <div class="img d-flex align-items-center justify-content-center"
                 style="background-image:url({{ ('public/assets/img/products/' . $product->url) }});">
            <div class="desc">
                <p class="meta-prod d-flex">

                    <a href="{{ route('addtocart', ["product" => $product->id]) }}"
                        class="d-flex align-items-center justify-content-center">
                        <span class="ti-shopping-cart" aria-hidden="true"></span></a>

                    <a href="{{ route('show', ["product" => $product->id]) }}"
                       class="d-flex align-items-center justify-content-center">
                        <span class="ti-search" aria-hidden="true"></span></a>
                </p>
            </div>
        </div>
        <div class="text text-center">
            <span class="sale">{{ ($product->state) }}</span>
            <span class="category">{{ ($product->category_name) }}</span>
            <h2>{{ ($product->product_name) }}</h2>
            <p class="mb-0"> <span class="price">${{ ($product->price) }}</span></p>
        </div>
    </div>
</div>



