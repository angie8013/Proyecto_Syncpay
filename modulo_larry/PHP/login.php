<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Formulario</title>
    <script> 
function vermas(id){
if(id=="mas"){
document.getElementById("desplegar").style.display="block";   
document.getElementById("mas").style.display="none"; 
}
else{
document.getElementById("desplegar").style.display="none";
document.getElementById("mas").style.display="inline";
}
}
</script>
    <style>

.read-more-trigger {
  cursor: pointer;
  display: inline-block;
  padding: 0 .5em;
  color: #fff;
  font-size: .9em;
  line-height: 2;
  border: 1px solid #ddd;
  border-radius: .25em;
  background-color: cornflowerblue;
}


/* Other style */

body {
  padding: 2%;
}

p {
  padding: 2%;
  background: #a09d9d72;
  border-radius: .25em;
}
 
    </style>
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>ALGJ S.A.S</h2>
                <div>
   <div>
    <div class="parrafo">
 <h2>Términos y Condiciones del Sitio Web </h2>
 <p>
 Por favor, lee detenidamente estos términos y condiciones ("Términos", "Términos y Condiciones")
  antes de utilizar el sitio web y los servicios ofrecidos por [Nombre de la Empresa] ("nosotros", "nuestro", "nosotros" o "Empresa").
  <br>
 <a href="#" onclick="vermas('mas');" id="mas">... [leer más]</a>
 </p>
 <p id="desplegar" style="display:none;">
 <b>
 1. Aceptación de los Términos
 </b>

Al acceder y utilizar este sitio web, aceptas estar sujeto a estos Términos y Condiciones y a todas las leyes y regulaciones aplicables. Si no estás de acuerdo con alguno de estos términos, estás prohibido de usar o acceder a este sitio. Los materiales contenidos en este sitio web están protegidos por leyes de derechos de autor y marcas comerciales aplicables.

 <b>2. Uso del Servicio</b>

El servicio y todos los materiales incluidos o disponibles a través del servicio son propiedad de [Nombre de la Empresa] y están protegidos por derechos de autor, marcas comerciales y otras leyes de propiedad intelectual. El servicio está destinado a la compra de software de nómina y su uso de acuerdo con la licencia correspondiente. No puedes modificar, copiar, distribuir, transmitir, mostrar, ejecutar, reproducir, publicar, licenciar, crear trabajos derivados, transferir o vender ninguna información, software, productos o servicios obtenidos del servicio.

<b>3. Registro de Cuenta</b>

Para acceder a ciertas partes del sitio web, es posible que se te solicite que proporcionen cierta información de registro o crees una cuenta. Debes proporcionar información precisa y completa y actualizarla periódicamente. Eres responsable de mantener la confidencialidad de tu cuenta y contraseña y de restringir el acceso a tu computadora, y aceptas la responsabilidad de todas las actividades que ocurran bajo tu cuenta o contraseña.

<b>4. Precios y Pagos</b>
Los precios de los productos y servicios están sujetos a cambios sin previo aviso. Nos reservamos el derecho de modificar o descontinuar el servicio (o cualquier parte o contenido del mismo) en cualquier momento sin previo aviso. Nosotros no seremos responsables ante ti o cualquier tercero por cualquier modificación, cambio de precio, suspensión o descontinuación del servicio.

<b>5. Responsabilidad</b>
En ningún caso [Nombre de la Empresa], sus directores, empleados, afiliados, agentes, contratistas o licenciantes serán responsables por cualquier daño indirecto, incidental, especial, consecuente o punitivo, incluyendo sin limitación, pérdida de beneficios, datos, uso, buena voluntad o cualquier otro daño intangible, resultante de (i) tu acceso o uso o tu imposibilidad de acceder o usar el servicio; (ii) cualquier conducta o contenido de cualquier tercero en el servicio.

<b>6. Ley Aplicable</b>
Estos términos y condiciones se rigen e interpretan de acuerdo con las leyes de [País], y te sometes irrevocablemente a la jurisdicción exclusiva de los tribunales en ese Estado o ubicación.

7. Cambios en los Términos y Condiciones

Nos reservamos el derecho, a nuestra sola discreción, de modificar o reemplazar estos Términos y Condiciones en cualquier momento. Si una revisión es importante, intentaremos proporcionar un aviso con al menos 30 días de antelación antes de que los nuevos términos entren en vigencia. Lo que constituye un cambio importante será determinado a nuestra sola discreción.

8. Contacto

Si tienes alguna pregunta sobre estos Términos y Condiciones, por favor contáctanos a través de [correo electrónico de contacto].
  <a href="#" onclick="vermas('menos');" id="menos">... [leer menos]</a>
  </p>
</div>
</div>
   </div>
            </div>
        </div>

    </div>
    <div class="container-form sign-in">
        <form class="formulario" action="login1.php" method="POST">
            <h2 class="create-account">Iniciar Sesión</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle'></i>
                </div>
            </div>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="text" name="id_us" placeholder="Documento" pattern="[0-9]{10}" maxlength="10" required>
            <input type="password" placeholder="Contraseña" id="password" name="pass" require>
            <input class="form-check-input" onclick="togglePasswordVisibility()" name="" id="" type="checkbox" value="checkedValue" aria-label="Text for screen reader" />

            <script>
                function togglePasswordVisibility() {
                    var passwordInput = document.getElementById("password");
                    if (passwordInput.type === "password") {
                        passwordInput.type = "text";
                    } else {
                        passwordInput.type = "password";
                    }
                }
            </script> <button class="b_estilo">iniciar sesion</button>
            <a class="b_estilo" href="metodos.php">Olvide mi contraseña</a>

        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>"Si necesitas asistencia para acceder a tu cuenta o tienes <br> cualquier otro problema relacionado con el inicio de sesión, por favor comunícate con tu administrador."</p>

            </div>
        </div>
    </div>
    <script>
        const $btnSignIn = document.querySelector('.sign-in-btn'),
            $btnSignUp = document.querySelector('.sign-up-btn'),
            $signUp = document.querySelector('.sign-up'),
            $signIn = document.querySelector('.sign-in');

        document.addEventListener('click', e => {
            if (e.target === $btnSignIn || e.target === $btnSignUp) {
                $signIn.classList.toggle('active');
                $signUp.classList.toggle('active')
            }
        });
    </script>
</body>

</html>