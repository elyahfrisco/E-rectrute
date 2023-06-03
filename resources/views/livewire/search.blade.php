<div class="inline-block relative" x-data="{ open: true }"  x-on:click.away="open = false; @this.resetIndex();" x-on:keydown.escape="open = false; @this.resetIndex();">
    <input type="text" class="focus:outline-none focus:border-green-400 border-2 w-56 rounded md:mr-5 py-1 px-2 rounded-full mr-3 " 
    placeholder="Rechercher une mission..."  @click.prevent="open = true" wire:model="query"
    wire:keydown.arrow-down.prevent="incrementIndex()"
    wire:keydown.arrow-up.prevent="decrementIndex()"
    wire:keydown.enter.prevent="selectIndex()"
    wire:keydown.backspace="resetIndex()"
    >
    <svg class="w-5 h-5 text-gray-500 absolute top-0 right-0 mr-5 mt-2" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
      </svg>
    @if (strlen($query) >= 2)
        <div class="z-10 bg-white border border-gray-400 rounded w-56 px-2 py-1 mt-4 flex flex-col absolute" x-show="open">
        @if (count($jobs) > 0)
            @foreach ($jobs as $index => $job)
                <a href="#" class="{{ ($index === $selectedIndex) ? 'text-green-400' : '' }} my-2">{{ $job['title'] }}</a>
            @endforeach 
        @else
        <span class="text-orange-500">0 résultat pour "{{ $query }}"</span>
        @endif
        </div>
    @endif
</div>
