<x-front-layout title='Welcome'>
    @section('content')
    <section class="brand_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Featured Brands
                </h2>
            </div>
            @livewire('product-card')
            <a href="" class="brand-btn">
                See More
            </a>
        </div>
    </section>
    @endsection
</x-front-layout>

