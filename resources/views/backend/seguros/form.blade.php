@csrf

<div class="form-group">
    <label for="name" class="font-weight-bold">Nombres de la Compañia:</label>
    <input type="text" class="form-control" id="nombre" name="nombre" @isset($seguro) value="{{ $seguro->nombre }}" @endisset placeholder="Ingrese el Nombre de la Compañia de Seguros" required>
</div>


