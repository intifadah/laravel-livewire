<div class="p-16 flex justify-center gap-6 items-center">
    <button wire:click="increment" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">+</button>
    {{ $count }}
    <button wire:click="decrement" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">-</button>
    <p wire:loading.delay.short
        class="absolute text-center left-0 top-0 right-0 bottom-0 z-10 bg-white bg-opacity-90 py-2 px-3">
        Loading...
    </p>
</div>