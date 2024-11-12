<nav class="drop-shadow-lg bg-white p-5 hidden md:flex">
  <div class="container mx-auto flex items-center justify-between">
    <div class="flex items-center">
      <a href="/">
        <img src="./img/Logo.png" alt="Logo" class="h-12 w-18 mr-4">
      </a>
    </div>
    <ul class="flex space-x-4">
      <li>
        <a href="/" class="{{ Request::is('/') ? 'text-[#CB0001] font-bold border-b-2 border-[#CB0001] ' : 'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">Home</a>
      </li>
      <li>
        <a href="About" class="{{ Request::is('About') ? 'text-[#CB0001] font-bold  border-b-2 border-[#CB0001]' : 'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">About Me</a>
      </li>
      <li>
        <a href="Portofolio" class="{{ Request::is('Portofolio') ? 'text-[#CB0001] font-bold  border-b-2 border-[#CB0001]' : 'text-[#575757] font-bold hover:text-[#CB0001] transition duration-300' }}">Portfolio</a>
      </li>
    </ul>
  </div>
</nav>




<nav class="bg-white text-black fixed bottom-0 inset-x-0 p-4 z-50 md:hidden shadow-[0_-4px_6px_rgba(0,0,0,0.2)]">
  <div class="container mx-auto flex justify-around items-center">
    <a href="/" class="flex flex-col items-center hover:text-[#CB0001] transition ease-in-out duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
      </svg>
      <span class="text-sm font-semibold tracking-widest">Home</span>
    </a>

    <a href="About" class="flex flex-col items-center hover:text-[#CB0001] transition ease-in-out duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
      </svg>
      <span class="text-sm font-semibold tracking-widest">About Me</span>
    </a>

    <a href="/portfolio" class="flex flex-col items-center hover:text-[#CB0001] transition ease-in-out duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
      </svg>
      <span class="text-sm font-semibold tracking-widest">Portofolio</span>
    </a>

    <a href="/contact" class="flex flex-col items-center hover:text-[#CB0001] transition ease-in-out duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
      </svg>
      <span class="text-sm font-semibold tracking-widest">Contact</span>
    </a>
  </div>
</nav>