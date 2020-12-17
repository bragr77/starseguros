@csrf

<div class="form-group">
    <label for="name" class="font-weight-bold">Nombres y Apellidos:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" @isset($contacto) value="{{ $contacto->nombre }}" @endisset placeholder="Ingrese los Nombres y Apellidos" required>
</div>

<div class="form-group">
    <label for="name" class="font-weight-bold">Email:</label>
    <input type="email" class="form-control" id="email" name="email" @isset($contacto) value="{{ $contacto->email }}" @endisset placeholder="Ingrese el email" required>
</div>

<div class="form-group">
    <label for="name" class="font-weight-bold">Telefono:</label>
    <input type="text" class="form-control" id="telefono" name="telefono" @isset($contacto) value="{{ $contacto->telefono }}" @endisset placeholder="Ingrese el teléfono" required>
</div>

<div class="form-group">
    <label for="inputState" class="font-weight-bold">Cliente:</label>
    <select type="text" class="form-control" id="cliente" name="cliente" required>
        <option selected value="">Selecciona...</option>
        <option value="Si">Si</option>
        <option value="No">No</option>
    </select>
</div>


