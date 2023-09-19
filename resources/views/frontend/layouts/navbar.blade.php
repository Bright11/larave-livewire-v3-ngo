<section class="navsection">
    <nav class="navbar">
        <div  class="logoli">
            <li>
                <a href="">
                    <img src="{{ asset('logo/logo.jpeg') }}" alt="">
                </a>
            </li>
        </div>
        <ul class="ulclass">
          <li> <a href="/" wire:navigate>Home</a></li>
          <li> <a href="{{ route('aboutus') }}" wire:navigate>About</a></li>
          <li> <a href="{{ route('aboutus') }}" wire:navigate>who we are</a></li>
          <li> <a href="{{ route('aboutus') }}" wire:navigate>what we do</a></li>
          <li> <a href="{{ route('aboutus') }}" wire:navigate>get involved</a></li>
          <li> <a href="{{ route('aboutus') }}" wire:navigate>donate</a></li>
          <li> <a href="{{ route('aboutus') }}" wire:navigate>careers</a></li>
        </ul>
        <div onclick="openbar()" class="mobilenav-div">
            <button class="humbugar">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>

</section>
