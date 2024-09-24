<button {{ $attributes->merge(['type' => 'submit', 'class' => 'form-button']) }}>
    {{ $slot }}
</button>
