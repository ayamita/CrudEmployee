<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-@yield('data-target')">
    @yield('button-text')
</button>

  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" id="modal-@yield('data-target')" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">@yield('modal-title')</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @yield('modal-body')
        </div>
        <div class="modal-footer">
            @yield('modal-footer')
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal-@yield('data-target')">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>