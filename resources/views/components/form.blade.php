<form action="{{ $action }}" method="POST" class="container p-4 m-auto flex flex-col gap-5">
    @csrf
    @if($is_edit)
        @method('PUT')
    @endif

    <h2 class="font-bold text-3xl mb-4">{{ $title }}</h2>

    @foreach ($fields as $name => $field)
    <div class="mb-3 flex flex-col gap-2">
        <label for="{{ $name }}" class="form-label">{{ $field['label'] ?? ucfirst($name) }}</label>
        <input
            class="p-2 form-control rounded-lg w-full border-1"
            type="{{ $field['type'] ?? 'text' }}"
            name="{{ $name }}"
            id="{{ $name }}"
            placeholder="{{ $field['placeholder'] ?? '' }}"
            value="{{ old($name, $field['value'] ?? '') }}"
            @if(!empty($field['required'])) required @endif />

    </div>
    @endforeach




    <button type="submit" class="bg-green-500 cursor-pointer text-white py-2 px-4 rounded-xl">{{ $button_text ?? 'Submit' }}</button>
</form>