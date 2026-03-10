<div>
    <p>Mensaje desde el componente</p>
    <p> El contador es {{ $count }}</p>
    <button wire:click="decrement" 
    class="px-4 py-2 bg-red-500 hover:bg-red-600 text-black font-bold rounded-lg transition-all active:scale-95 shadow-lg shadow-red-200 dark:shadow-none">
        Resta -1 
    </button>

    <button wire:click="increment"
    class="px-4 py-2 bg-green-500 hover:bg-green-600 text-black font-bold rounded-lg transition-all active:scale-95 shadow-lg shadow-green-200 dark:shadow-none">
        Suma +1 
    </button>
</div>
