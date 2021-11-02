<div class="form-group">
  <label for="my-input">Nombre Completo:</label>
  <input class="input__login height" type="text" value="{{isset($employe)? $employe->name:''}}" placeholder="John" name="name" id="name" required />
</div>
<div class="form-group">
  <label for="my-input">Correo:</label>
  <input class="input__login height" type="text" value="{{isset($employe)? $employe->email:''}}" placeholder="John" name="email" id="email" required />
</div>
<div class="form-group">
  <label for="my-input">Fecha De ingreso:</label>
  <input class="input__login height" type="date" value="{{isset($employe)? $employe->admission_date:''}}" placeholder="2018-08-25" name="admission_date" id="admission_date" required />
</div>
<div class="modal-footer">
  <button type="submit" value="Agregar"  class="{{ $action == 'create' ? 'btn-primary' : 'btn-secondary' }}" >{{ $action == 'create' ? 'Save' : 'Edit' }}</button>
  <a href="/employee"  class="btn-cancel"  >Cancelar</a>
</div>
          
  
