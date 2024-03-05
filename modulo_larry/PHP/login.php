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
  antes de utilizar el sitio web y los servicios ofrecidos por [Nombre de la Empresa] ("nosotros", "nuestro", "nosotros" o "Empresa").</p>
  <br><h2>1. Aceptación de los Términos</h2>
 <a href="#" onclick="vermas('mas');" id="mas">... [leer más]</a>
 </p>
 <p id="desplegar" style="display:none;">
  Regresó la zorra y más le dolió el no poder vengarse, que saber de la 
  muerte de sus pequeños; ¿Cómo podría ella, siendo un animal terrestre,
  sin poder volar, perseguir a uno que vuela? Tuvo que conformarse con
 el usual consuelo de los débiles e impotentes: maldecir desde lejos
  a su enemigo.
  <br />
  Mas no pasó mucho tiempo para que el águila recibiera el pago de su 
traición contra la amistad. Se encontraban en el campo unos pastores
  sacrificando una cabra; cayó el águila sobre ella y se llevó 
  una víscera que aún conservaba fuego, colocándola en su nido. 
  Vino un fuerte viento y transmitió el fuego a las pajas, ardiendo 
 también sus pequeños aguiluchos, que por pequeños aún no sabían volar, 
  los cuales se vinieron al suelo. Corrió entonces la zorra, y tranquilamente
 devoró a todos los aguiluchos ante los ojos de su enemiga. <br />
  <b>“Nunca traiciones la amistad sincera, pues si lo hicieras, tarde 
  o temprano del cielo llegará el castigo”.</b>
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