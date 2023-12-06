<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div
        wire:ignore
        x-data="blocknoteEditor({
            value: $wire.entangle('{{ $getStatePath() }}'),
            statePath: '{{ $getStatePath() }}',
        })"
    >
        <div x-ref="editor" @class([
            'fi-bn-editor block w-full rounded-lg border-none bg-white px-3 py-1.5 text-base text-gray-950 shadow-sm outline-none ring-1 transition duration-75 placeholder:text-gray-400 focus-visible:ring-2 disabled:bg-gray-50 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:bg-white/5 dark:text-white dark:placeholder:text-gray-500 dark:disabled:bg-transparent dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6',
            'ring-gray-950/10 focus-visible:ring-primary-600 dark:ring-white/20 dark:focus-visible:ring-primary-500 dark:disabled:ring-white/10' => ! $errors->has($statePath),
            'ring-danger-600 focus-visible:ring-danger-600 dark:ring-danger-500 dark:focus-visible:ring-danger-500' => $errors->has($statePath),
        ])></div>
    </div>
</x-dynamic-component>
