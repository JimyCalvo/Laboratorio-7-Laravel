{{-- Formmulario de creacion de Locales --}}
CREAR LOCAL
<form action="{{url('/locales')}}" method="post" enctype="multipart/form-data">
    @csrf
    <br>
    <label for="Nombre">Nombre Local:</label>
    <input type="text" name="Nombre">
    <br>
    <label for="Propietario">Propietario:</label>
    <input type="text" name="Propietario">
    <br>
    <label for="Direccion">Direccion:</label>
    <input type="text" name="Direccion">
    <br>
    <label for="Correo">Correo</label>
    <input type="email" name="Correo">
    <br>
    <label for="Logo">Logo:</label>
    <input type="file" name="Logo" accept="image/*">
    <br>
    <label for="Descripcion">Descripcion:</label>
    <input type="text" name="Descripcion">
    <br>
    <input type="submit" value="Guardar Datos">

</form>