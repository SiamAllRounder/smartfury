<div class="row cart-item">
    <div class="col-3">
        <div class="checkout-product-img-wrapper">
            <img class="item-thumb img-thumbnail img-rounded" src="{{ Arr::get($cartItem->options, 'image') }}" alt="{{ $product->original_product->name }}">
            <span class="checkout-quantity">{{ $cartItem->qty }}</span>
        </div>
    </div>
    <div class="col-5">
        <p class="mb-0">{{ $product->original_product->name }} @if ($product->isOutOfStock()) <span class="stock-status-label">({!! $product->stock_status_html !!})</span> @endif</p>
        <p class="mb-0">
            <small>{{ $product->variation_attributes }}</small>
        </p>

        @include('plugins/ecommerce::themes.includes.cart-item-options-extras', ['options' => $cartItem->options])

        @if (! empty($cartItem->options['options']))
            {!! render_product_options_html($cartItem->options['options'], $product->original_product->front_sale_price_with_taxes) !!}
        @endif
    </div>
    <div class="col-4 text-end">
        <p>{{ format_price($cartItem->price) }}</p>
    </div>
</div> <!--  /item -->
