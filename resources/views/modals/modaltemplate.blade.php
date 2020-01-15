<div class="modal fade" @yield('id') tabindex="-1" role="dialog" @yield('arealabeled') aria-hidden="true" style=" font-family: Roboto, 'Segoe UI', Tahoma, sans-serif; font-size: 20px">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img class="img-fluid" @yield('srcimgheader') @yield('altimgheader')>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <img class="img-fluid" @yield('srcimgbody') @yield('altimgbody')> <label for=""><strong><h1>@yield('modaltitle')</h1></strong></label> <br>
        </div>
        <p>
          <br>
            @yield('modalcontent')
        </p>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>