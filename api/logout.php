<?php
session_start();
session_destroy();
header("Location: ../paginas/Registro.php?salida=ok");
exit;
