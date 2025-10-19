<footer>
    <div class=" {{ $class ?? '' }} text-center p-2 bg-body-tertiary">
        <p class="text-secondary"><a href="{{ route('home') }}" class="link-light link-offset-3">TaSkello</a> | by <a href="#" class="link-light link-offset-3">Ike Dominique</a> & 
            the <a href="#" class="link-light link-offset-3">TaSkello
            Community</a></p>
    
        <div>
            <x-github-button />
            <x-donate-button />
        </div>
    </div>
</footer>