<div x-data="{open: false}" @flash-message.window="open = true; setTimeout(() =>open = false, 3000);">

    <div x-show="open"  x-cloak class="border{{$type ? $colors[$type] : '' }} border-red-700 bg-red-100  text-red-700 px-1 py-2 rounded">
        
        <div class="flex p-4">
            <svg class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
          <p>{{$message}}</p>
        </div>
        
    </div>
</div>
 