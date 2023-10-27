<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <div
        wire:ignore
        x-data="blocknoteEditor({
            value: $wire.entangle('{{ $getStatePath() }}'),
            statePath: '{{ $getStatePath() }}',
        })"
    >
        <div x-ref="editor"></div>
    </div>
</x-dynamic-component>
