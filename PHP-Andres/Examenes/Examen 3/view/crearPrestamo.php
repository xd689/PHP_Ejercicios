<form action="managers/userManager.php" method="post">
	<input type="hidden" name="op" value="pres">
	<input type="email" name="mail" placeholder="Correo electrónico" required>
	<input type="number" name="prestamo"  placeholder="Prestamo" required>
	<input type="number" name="interes"  placeholder="Intereses" required>
    <input type="number" name="meses"  placeholder="Meses" required>
	<input type="submit" value="Crear">
</form>