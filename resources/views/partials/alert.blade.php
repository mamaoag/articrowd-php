@if(Session::has('info'))
<div class="notification">
  <button class="delete"></button>
   {{Session::get('info')}}
</div>
@endif