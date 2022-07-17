<div id="message"
    {{ $attributes->merge(['class' => 'w-96 opacity-100 h-auto fixed duration-200 bottom-8 right-8 flex justify-center items-center z-10 text-white font-semibold text-md text-center p-4']) }}>
    <p>{{ $slot }}</p>
</div>
<script>
    setTimeout(() => {
        document.getElementById('message').style.opacity = 0
        document.getElementById('message').style.right = "-300px"
    }, 2000);
</script>
