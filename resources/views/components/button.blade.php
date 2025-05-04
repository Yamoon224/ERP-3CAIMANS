<button {{ $attributes->merge(['type' => 'submit', 'class' => 'border border-transparent rounded-md transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
