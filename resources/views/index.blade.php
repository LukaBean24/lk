<x-layout>
    @if ($notification)
        <x-modal :notification="$notification"/>
    @endif
    <x-navbar></x-navbar>
    <x-page-content>
        @if (!$banners === null)
            <x-slider :banners="$banners" :first="$banner_first" :last="$banner_last"></x-slider>
        @endif
        <x-price-index :prices="$prices"></x-price-index>
        <x-card-grid :posts="$posts"></x-card-grid>
    </x-page-content>
    <x-footer></x-footer>
</x-layout>
