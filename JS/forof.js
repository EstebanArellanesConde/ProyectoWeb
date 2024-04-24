const lista_de_usuarios = [
    {nombre:"Moises", contrasena:"123456"},
    {nombre:"Esteban", contrasena:"654321"},
    {nombre:"Usuario"}
];

try{
    // Obtener contr. y nombre de los usuarios
    const userName = prompt("Ingresa tu nombre de usuario: ");
    const contrasena = prompt("Ingresa tu contraseña de usuario: ");

    if(!contrasena || !userName){
        throw new Error("Los datos de usuario son incompletos") // Verificar si se propoporcionaron los nombres
    }
    
    const find_user = lista_de_usuarios.find(usuario => usuario.nombre === userName);
    
    if(!find_user){
        throw new Error("El nombre del usuario no existe") // Verificar si existen los nombres
    }
    
    if(find_user.contrasena !== contrasena){
        throw new Error("La contraseña del usuario no existe") // Verificar si existen las contr.
    }

    console.log("Validación exitosa", find_user);

} catch(error){
    console.error("ERROR", error.message);

} finally{
    console.log("Finalizó la validación de usuario");
    
}