<div>
    <form action="" wire:submit="save">
        <label for="">
            x1
            <input type="checkbox" wire:model="x1" name="x" wire:model.live="save" wire:change="save" value="X1">
        </label>
        <label for="">
            x2
            <input type="checkbox" wire:model="x2" name="x" wire:model.live="save" wire:change="save" value="X2">
        </label>
        <label for="">
            x3
            <input type="checkbox" wire:model="x3" name="x" wire:model.live="save" wire:change="save" value="X3">
        </label>
        <button wire:click="save">SUBMIT</button>
    </form>


</div>