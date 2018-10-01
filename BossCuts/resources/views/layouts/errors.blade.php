<div class="form-group">
   @if ($errors->any())
      <div class="alert alert-danger font-weight-bold">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
</div>