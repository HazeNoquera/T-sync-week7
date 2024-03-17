@props(['messages'])

@if ($messages)
    <p {{ $attributes->merge(['class' => 'text-sm text-red-600 ']) }}>
        @foreach ((array) $messages as $message)
            {{ $message }}
        @endforeach
   </p>
@endif
