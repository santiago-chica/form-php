<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="contact-container">
    <form id="contact-form" method="POST" action="interconexion.php">
      <h2>Contacto</h2>

      <div class="row">
        <div class="input-group">
          <input type="text" id="name" name="name" required placeholder=" " />
          <label for="name">Nombre</label>
        </div>

        <div class="input-group">
          <input type="email" id="email" name="email" required placeholder=" " />
          <label for="email">Correo</label>
        </div>
      </div>

      <div class="row">
        <div class="input-group">
          <input type="text" id="subject" name="subject" required placeholder=" " />
          <label for="subject">Tema</label>
        </div>
      </div>

      <div class="input-group">
        <textarea id="message" name="message" rows="5" required placeholder=" "></textarea>
        <label for="message">Mensaje</label>
      </div>

      <button type="submit">Enviar</button>

      <p id="status-msg"></p>
    </form>
  </div>
</body>
</html>
