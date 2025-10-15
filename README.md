# FlipDown.js Countdown

Este proyecto es una implementación personalizada de la librería [FlipDown.js](https://github.com/PButcher/flipdown) para crear **cuentas regresivas animadas** en sitios web.
El ejemplo incluido muestra un contador con fondo animado, diseño responsive y fácil de integrar en cualquier página.

---

## Características

* Cuenta regresiva funcional con FlipDown.js.
* Fondo animado con gradiente y transición suave.
* Compatible con dispositivos móviles (responsive).
* Código limpio y listo para usar en proyectos web en español.
* Fácil de personalizar colores, tamaños y estilos del contador.

---

## Opciones de personalización

### Cambiar colores de los cuadros del contador

En el archivo `assets/css/flipdown.css`, busca la sección `.flipdown.flipdown__theme-dark` y modifica los colores de cada parte del contador:

```css
/* Títulos de los rotors */
.flipdown.flipdown__theme-dark .rotor-group-heading:before {
  color: #fff; /* Color del texto de los títulos */
}

/* Separadores */
.flipdown.flipdown__theme-dark .rotor-group:nth-child(n+2):nth-child(-n+3):before,
.flipdown.flipdown__theme-dark .rotor-group:nth-child(n+2):nth-child(-n+3):after {
  background-color: #01214A; /* Color del separador */
}

/* Partes superiores de los rotors */
.flipdown.flipdown__theme-dark .rotor,
.flipdown.flipdown__theme-dark .rotor-top,
.flipdown.flipdown__theme-dark .rotor-leaf-front {
  color: #FFFFFF;           /* Color del número */
  background-color: #01214A; /* Color de fondo del rotor */
}

/* Partes inferiores de los rotors */
.flipdown.flipdown__theme-dark .rotor-bottom,
.flipdown.flipdown__theme-dark .rotor-leaf-rear {
  color: #EFEFEF;           /* Color del número */
  background-color: #01214A; /* Color de fondo del rotor */
}

/* Bisagra */
.flipdown.flipdown__theme-dark .rotor:after {
  border-top: solid 1px #01214A; /* Color de la bisagra */
}
```

> Puedes cambiar los códigos hexadecimales por los colores que prefieras.

---

### Cambiar tamaño y fuente del contador

```css
.flipdown__slot {
  width: 80px;     /* Ancho del cuadro */
  height: 80px;    /* Alto del cuadro */
  font-size: 2rem; /* Tamaño de los números */
}

body {
  font-family: 'Roboto', sans-serif; /* Fuente del contador */
}
```

---

### Fondo animado

```css
.fondo-animado {
  background: linear-gradient(270deg, #08C, #05A, #08C);
  background-size: 600% 600%;
  animation: moverFondo 10s ease infinite;
}
```

---

## Código JavaScript explicado

```javascript
document.addEventListener('DOMContentLoaded', () => {
  // Definir la fecha objetivo para el conteo regresivo
  var fechaObjetivo = new Date('2026-01-01T00:00:00');
  var timestampObjetivo = fechaObjetivo.getTime() / 1000; // Convertir a segundos

  // Inicializar FlipDown
  var flipdown = new FlipDown(timestampObjetivo)
    .start() // Iniciar el conteo regresivo
    .ifEnded(() => { // Acción al finalizar
      alert("Conteo Regresivo Terminado");
      console.log('El contador ha terminado!');
    });

  // Aplicar tema oscuro
  let body = document.body;
  body.classList.toggle('dark-theme');

  // Mostrar versión de FlipDown.js (opcional)
  var ver = document.getElementById('ver');
  if(ver) ver.innerHTML = flipdown.version;
});
```

> Este script hace lo siguiente:
>
> * Espera a que el DOM esté cargado.
> * Define la fecha objetivo y la convierte a timestamp en segundos.
> * Inicializa FlipDown y arranca la cuenta regresiva.
> * Ejecuta acciones al terminar (alerta y log en consola).
> * Permite activar un tema oscuro y mostrar la versión de la librería.

---

## Cómo usar

1. Clona este repositorio o descárgalo como ZIP.
2. Abre `index.html` en tu navegador para ver el ejemplo.
3. Personaliza la fecha objetivo modificando la línea en `index.html`:

```javascript
var fechaObjetivo = new Date('2026-01-01T00:00:00');
```

4. Modifica los estilos CSS según tus preferencias para cambiar colores, tamaño o fuente.

---
# VER DEMO ONLNE

[VER DEMO ONLINE](https://jaimefranko.com/ejemplos_php/flipdownjs/)

## Nota

Este repositorio es un **fork** del proyecto original [FlipDown.js](https://github.com/PButcher/flipdown), rama principal `main`, y contiene adaptaciones propias para su uso en español.

---

## Licencia

MIT

