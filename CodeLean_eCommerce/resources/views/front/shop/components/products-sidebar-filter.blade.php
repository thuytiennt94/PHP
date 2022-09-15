

<form action="{{ request()->segment(2) == 'product' ? 'shop' : '' }}">
    <div class="filter-widget">
        <h4 class="fw-title">Categories</h4>
        <ul class="filter-catagories">

            @foreach($categories as $category)
                <li><a href="shop/{{ $category->name }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Brand</h4>
        <div class="fw-brand-check">

            @foreach($brands as $brand)
                <div class="bc-item">
                    <label for="bc-{{ $brand->id }}">
                        {{ $brand->name }}
                        <input type="checkbox"
                               {{ (request('brand')[$brand->id] ?? '') == 'on' ? 'checked' : '' }}
                               name="brand[ {{ $brand->id }} ] "
                               onchange="this.form.submit()"
                               id="bc-{{ $brand->id }}">
                        <span class="checkmark"></span>
                    </label>
                </div>
            @endforeach

        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Price</h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" name="price_min" id="minamount">
                    <input type="text" name="price_max" id="maxamount">
                </div>
            </div>
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                 data-min="10" data-max="999"
                 data-min-value="{{ str_replace('$','', request('price_min')) }}"
                 data-max-value="{{ str_replace('$','', request('price_max')) }}">
                <div class="ui-slider-range ui-corner-all ui-widget-header">

                </div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default">

                                    </span>
                <span  tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default">

                                    </span>
            </div>
        </div>
        {{--<a href="#" class="filter-btn">Filter</a>--}}

        <button type="submit" class="filter-btn">Filter</button>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Color</h4>
        <div class="fw-color-choose">
            <div class="cs-item">
                <input type="radio" id="cs-black" name="color" value="black" onchange="this.form.submit()"
                    {{ request('color') == 'black' ? 'checked' : '' }} >
                <label for="cs-black" class="cs-black {{ request('color') == 'black' ? 'font-weight-bold' : '' }}">Black</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-violet" name="color" value="violet" onchange="this.form.submit()"
                    {{ request('color') == 'violet' ? 'checked' : '' }} >
                <label for="cs-violet" class="cs-violet {{ request('color') == 'violet' ? 'font-weight-bold' : '' }}">Violet</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-blue" name="color" value="blue" onchange="this.form.submit()"
                    {{ request('color') == 'blue' ? 'checked' : '' }} >
                <label for="cs-blue" class="cs-blue {{ request('color') == 'blue' ? 'font-weight-bold' : '' }}">Blue</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-yellow" name="color" value="yellow" onchange="this.form.submit()"
                    {{ request('color') == 'yellow' ? 'checked' : '' }} >
                <label for="cs-yellow" class="cs-yellow {{ request('color') == 'yellow' ? 'font-weight-bold' : '' }}">Yellow</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-red" name="color" value="red" onchange="this.form.submit()"
                    {{ request('color') == 'red' ? 'checked' : '' }} >
                <label for="cs-red" class="cs-red {{ request('color') == 'red' ? 'font-weight-bold' : '' }}">Red</label>
            </div>
            <div class="cs-item">
                <input type="radio" id="cs-green" name="color" value="green" onchange="this.form.submit()"
                    {{ request('color') == 'green' ? 'checked' : '' }} >
                <label for="cs-green" class="cs-green {{ request('color') == 'green' ? 'font-weight-bold' : '' }}">Green</label>
            </div>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Size</h4>
        <div class="fw-size-choose">
            <div class="sc-item">
                <input type="radio" id="s-size" name="size" value="s" onchange="this.form.submit()"
                    {{ request('color') == 's' ? 'checked' : '' }}>
                <label for="s-size" class="{{ request('color') == 's' ? 'active' : '' }}">S</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="m-size" name="size" value="m" onchange="this.form.submit()"
                    {{ request('color') == 'm' ? 'checked' : '' }}>
                <label for="s-size" class="{{ request('color') == 'm' ? 'active' : '' }}">M</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="l-size" name="size" value="l" onchange="this.form.submit()"
                    {{ request('color') == 'l' ? 'checked' : '' }}>
                <label for="s-size" class="{{ request('color') == 'l' ? 'active' : '' }}">L</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="xs-size" name="size" value="xs" onchange="this.form.submit()"
                    {{ request('color') == 'xs' ? 'checked' : '' }}>
                <label for="s-size" class="{{ request('color') == 'xs' ? 'active' : '' }}">XS</label>
            </div>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Tags</h4>
        <div class="fw-tags">
            <a href="#">Towel</a>
            <a href="#">Shoes</a>
            <a href="#">Coat</a>
            <a href="#">Dresses</a>
            <a href="#">Trousers</a>
            <a href="#">Men's hats</a>
            <a href="#">Backpack</a>
        </div>
    </div>
</form>

