<x-layout>

    <form  action="/login" method="POST" >
    @csrf
    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
  <legend class="fieldset-legend">Login</legend>

  <label">Email</label>
  <input type="email" class="input" name="email" id="email" required placeholder="your Email" />
  <x-forms.error name="email" />

  <label">Password</label>
  <input type="password" class="input" name="password" id="password" required placeholder="Password" />
   <x-forms.error name="password" />

  <button class="btn btn-neutral mt-4">Login</button>

</fieldset>
</form>


</x-layout>

