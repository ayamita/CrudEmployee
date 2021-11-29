<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2-@yield('target2')">
    @yield('text2')
</button>

  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="modal2-@yield('target2')" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">@yield('title2')</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @yield('body2')
        </div>
        <div class="modal-footer">
            @yield('footer2')
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal2-@yield('target2')">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>