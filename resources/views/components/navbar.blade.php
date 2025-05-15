<nav class="w-full p-4">
  <div class="flex p-3 mx-auto justify-between items-center">
    <a href="/produk" class="text-xl font-bold text-green-600">Reuse-Mart</a>
    <ul class="flex gap-5 font-semibold">
      <li><a class=" hover:text-green-600" href="/transactions">Transaksi</a></li>
      <li><a class=" hover:text-green-600" href="/produk">Produk</a></li>
      <li><a class="hover:text-green-600" href="/penitip">Penitip</a></li>
      <li>
           @if(Auth::user() != null)
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="text-red-500 hover:text-red-600">Logout</button>
        </form>
      @endif 
      </li>

     
    </ul>
  </div>

</nav>