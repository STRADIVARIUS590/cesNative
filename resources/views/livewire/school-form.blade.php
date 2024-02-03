<div>
  <form wire:submit.prevent="save">
    <input type="text" wire:model="form.name" name="name">
      <div>
        @error('form.name') <span class="error">{{ $message }}</span> @enderror 
    </div>
    <input type="submit">
  </form>
</div>
 
 