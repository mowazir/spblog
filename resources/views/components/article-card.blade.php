<a {{ $attributes->merge((['class' => 'card bg-neutral text-neutral-content '])) }} >
    <div class="card-body ">
    <h4 class="rounded-md bg-sm-indigo-400 text-sm font-semibold text-white card-title " data-test="showidea-btn">
        {{ $slot }}
    </h4>
</div>
</a>
