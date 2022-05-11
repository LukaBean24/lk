<div class="w-screen h-auto min-h-[calc(100vh-250px)] mt-[250px] flex justify-center items-center flex-col">
    {{ $slot }}
    @if (session('success'))
        <x-flash-message>{{ session('success') }}</x-flash-message>
    @endif
    @if (session('danger'))
        <x-flash-message>{{ session('danger') }}</x-flash-message>
    @endif
</div>
