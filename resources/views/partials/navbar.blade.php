<nav id="navbar"
class="fixed top-0 left-0 w-full z-50 bg-black/80 backdrop-blur-md">

    <div class="relative max-w-7xl mx-auto flex items-center justify-between px-6 py-5">

        <a href="{{ route('home') }}"
           class="text-3xl font-bold text-white tracking-widest">
            ArkaAmaral
        </a>

        <button id="menuBtn" class="md:hidden text-white text-3xl">
            ☰
        </button>

        <ul id="menu"
        class="hidden absolute top-14 right-0 flex-col gap-5 text-white font-medium bg-black/30 backdrop-blur-sm rounded-xl px-5 py-4 md:static md:flex md:flex-row md:bg-transparent md:p-0">
            
            <li>
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'text-[#C9A227]' : 'hover:text-gray-300' }}">
                    Home
                </a>
            </li>

            <li> 
                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'text-[#C9A227]' : 'hover:text-gray-300' }}">
                    About
                </a>
            </li>

            <li>
                <a href="{{ route('gallery') }}"
                   class="{{ request()->routeIs('gallery') ? 'text-[#C9A227]' : 'hover:text-gray-300' }}">
                    Gallery
                </a>
            </li>

            <li>
                <a href="{{ route('contact') }}"
                   class="{{ request()->routeIs('contact') ? 'text-[#C9A227]' : 'hover:text-gray-300' }}">
                    Contact
                </a>
            </li>

        </ul>

    </div>

</nav>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const menu = document.getElementById('menu');

    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    document.querySelectorAll('#menu a').forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
        });
    });
</script>