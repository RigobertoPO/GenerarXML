<?php
echo 'generacion de XML desde php';
generarXML(); //llamar a la funcion
leerXML();
function generarXML(){
    $doc=new DOMDocument('1.0');  //define un archivo xml
    $do->formatOutput=true;
    $raiz=$doc->createElement("USUARIOS");//nodo padre
    $raiz=$doc->appendchild($raiz);
    //se conecta a la BD
    $conexion=new mysqli("localhost","root","","Agencia");
    $consulta="Select * from usuarios";
    $resultado=$conexion->query($consulta);
    while($registro=$resultado->fetch_assoc())
    {
        $hijo=$doc->createElement("USUARIO");
        $hijo=$raiz->appendchild($hijo);
    
        $id=$doc->createElement("Id");
        $id=$hijo->appendchild($id);
        $textoId=$doc->createTextNode($registro["Id"]);
        $textoId=$id->appendchild($textoId);
    
        $nombre=$doc->createElement("Nombre");
        $nombre=$hijo->appendchild($nombre);
        $textoNombre=$doc->createTextNode($registro["Nombre"]);
        $textoNombre=$nombre->appendchild($textoNombre);
        $direccion=$doc->createElement("Direccion");
        $direccion=$hijo->appendchild($direccion);
    
        $calle=$doc->createElement("Calle");
        $calle=$direccion->appendchild($calle);
        $textoCalle=$doc->createTextNode($registro["Calle"]);
        $textoCalle=$calle->appendchild($textoCalle);
    
        $colonia=$doc->createElement("Colonia");
        $colonia=$direccion->appendchild($colonia);
        $textoColonia=$doc->createTextNode($registro["Colonia"]);
        $textoColonia=$colonia->appendchild($textoColonia);
    }
    //
    function leerXML(){
        $usuarios=simplexml_load_file("c:/usuario.xml");
        foreach ($usuarios as $user) {
            echo "El id es:".$user->Id."<br>";
            echo "El nombre es:".$user->Nombre."<br>";
        }
    }
    echo 'se creo el documento en '.$doc->save("c:/usuario.xml");
}
?>