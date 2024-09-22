<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="brand_container layout_padding2">
        <div class="box">
            <div class="new">
                <h5>New</h5>
            </div>
            <div class="img-box">
                <img src="{{ asset('front/images/slider-img.png') }}" alt="">
            </div>
            <div class="detail-box">
                <h6 class="price">$100</h6>
                <h6>Chair</h6>
            </div>
            <!-- Add to Cart button -->
            <form wire:submit="store">
                <input type="hidden" wire:model="price" value="120">
                <button type="submit" class="btn btn-success">
                    Add to Cart
                </button>
            </form>
        </div>
        <div class="box">
            <div class="new">
                <h5>New</h5>
            </div>
            <div class="img-box">
                <img src="{{ asset('front/images/slider-img.png') }}" alt="">
            </div>
            <div class="detail-box">
                <h6 class="price">$100</h6>
                <h6>Chair</h6>
            </div>
            <!-- Add to Cart button -->
            <form wire:submit="store">
                <input type="hidden" wire:model="price" value="120">
                <button type="submit" class="btn btn-success">
                    Add to Cart
                </button>
            </form>
        </div>
        <div class="box">
            <div class="new">
                <h5>New</h5>
            </div>
            <div class="img-box">
                <img src="{{ asset('front/images/slider-img.png') }}" alt="">
            </div>
            <div class="detail-box">
                <h6 class="price">$100</h6>
                <h6>Chair</h6>
            </div>
            <!-- Add to Cart button -->
            <form wire:submit="store">
                <input type="hidden" wire:model="price" value="120">
                <button type="submit" class="btn btn-success">
                    Add to Cart
                </button>
            </form>
        </div>
        <div class="box">
            <div class="new">
                <h5>New</h5>
            </div>
            <div class="img-box">
                <img src="{{ asset('front/images/slider-img.png') }}" alt="">
            </div>
            <div class="detail-box">
                <h6 class="price">$100</h6>
                <h6>Chair</h6>
            </div>
            <!-- Add to Cart button -->
            <form wire:submit="store">
                <input type="hidden" wire:model="price" value="120">
                <button type="submit" class="btn btn-success">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>
