<div class="form-group">
  <label for="my-input">Nombre Completo Del Firmante:</label>
  <input class="input__login height" type="text"  placeholder="John Doe" name="name" id="name" required />
</div>
<div class="form-group">
  <label for="my-input">Nombre De La Empresa:</label>
  <input class="input__login height" type="text"  placeholder="Caramelitos SA de CV" name="empresa" id="empresa" required />
</div>
<div class="modal-footer">
  <button type="submit" value="Agregar"  class="{{ $action == 'create' ? 'btn-primary' : 'btn-secondary' }}" >{{ $action == 'create' ? 'Save' : 'Edit' }}</button>
  <a href="/employee"  class="btn-cancel"  >Cancelar</a>
</div>
