<?php

use Livewire\Component;

use App\Models\Product;
new class extends Component
{

    public $checked;
    public $entree;

     public function mount(Product $entree)
    {
        $this->entree = $entree;
        $this->checked = $entree->disponible;
    }

    public function store()
    {
        dd('dfghjklloiu');
        $this->validate([
            'checked' => 'nullable|boolean',
        ]);

        $this->entree->update([
            'disponible' => $this->checked
        ]);

        // Optionnel : message de confirmation
        session()->flash('message', 'Statut mis à jour avec succès.');
        
    }
};
?>

<div>
    <form wire:submit.prevent="store" class="flex items-center justify-between">
        <span class="text-lg font-bold text-white">{{ $entree->price }}€</span>
        <label class="relative inline-flex items-center cursor-pointer">
            <input type="checkbox" class="sr-only peer" wire:model="checked">
            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
        </label>
    </form>
</div>
