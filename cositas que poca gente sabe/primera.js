// //declarar variables
// let nombre = "juan"
// return (nombre)
// let edad = 18
// return (edad)

// //declarar constante
// const PI = 3.14
// return (PI)

// if (edad >= 18) {
//     console.log("eres mayor de edad")
// } else {
//     console.log ("eres menor de edad")
// }

// //dos formas de hacer funciones
// function saludar (nombre) {
//     return 'hola, $(nombre'
// }

// const saludar = (nombre) => 'hola, $(nombre'
// //aca termina

//calcular area circulo

const radio = prompt ("¿cual es el radio del circulo?")
const RadioEntero = parseInt(radio)

function CalcularArea (radio) {
    const PI = 3.14
    let ValorArea = radio * radio * PI
    return ValorArea
    }
    
     console.log(CalcularArea(radio))
   
  
