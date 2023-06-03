
<div class="flex flex-col md:flex-row justify-between items-center">
    <div class="w-24 h-24">
      <a href="{{ route('jobs.index') }}"><img src="{{ asset('img/upwirk-logo.png') }}"></a>
    </div>
    <ul class="flex flex-col md:flex-row items-center mb-3 md:mb-0">
      @auth
      <livewire:search />
      <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('jobs.index') }}" class="hover:text-green-400" style="font-family: cursive;font-size: 17px">Les missions</a></li>
      <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('jobs.insert') }}" class="hover:text-green-400" style="font-family: cursive;font-size: 17px">Ajout missions</a></li>
      <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('conversation.index') }}" class="hover:text-green-400" style="font-family: cursive;font-size: 17px">Mes conversations</a></li>
      <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('home') }}" class="hover:text-green-400" style="font-family: cursive;font-size: 17px">Mon compte</a></li>
      <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-green-400 " style="font-family: cursive;font-size: 17px"  >Se déconnecter</a></li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      @else
      <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('welcome') }}" class="hover:text-green-400" style="font-family: cursive;font-size: 17px">Home</a></li>
      <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('login') }}" class="hover:text-green-400" style="font-family: cursive;font-size: 17px">Se connecter</a></li>
      <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('register') }}" class="hover:text-green-400" style="font-family: cursive;font-size: 17px">S'enregistrer</a></li>
      @endauth
    </ul>
  </div>