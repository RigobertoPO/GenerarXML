<?php
echo 'generacion de XML desde php';
generarXML(); //llamar a la funcion
leerXML();
function generarXML(){
    $doc=new DOMDocument('1.0'); 
    $do->formatOutput=true;
    $raiz=$doc->createElement("USUARIOS");
    $raiz=$doc->appendchild($raiz);

    $hijo=$doc->createElement("USUARIO");
    $hijo=$raiz->appendchild($hijo);

    $id=$doc->createElement("Id");
    $id=$hijo->appendchild($id);
    $textoId=$doc->createTextNode(1);
    $textoId=$id->appendchild($textoId);

    $nombre=$doc->createElement("Nombre");
    $nombre=$hijo->appendchild($nombre);
    $textoNombre=$doc->createTextNode("juan");
    $textoNombre=$nombre->appendchild($textoNombre);
    $direccion=$doc->createElement("Direccion");
    $direccion=$hijo->appendchild($direccion);

    $calle=$doc->createElement("Calle");
    $calle=$direccion->appendchild($calle);
    $textoCalle=$doc->createTextNode("AV. Los pinos");
    $textoCalle=$calle->appendchild($textoCalle);

    $colonia=$doc->createElement("Colonia");
    $colonia=$direccion->appendchild($colonia);
    $textoColonia=$doc->createTextNode("Las granjas");
    $textoColonia=$colonia->appendchild($textoColonia);
    echo 'se creo el documento en '.$doc->save("c:/usuario.xml");
}
function leerXML(){
    $usuarios=simplexml_load_file("d:/usuario.xml");
    foreach ($usuarios as $user) {
        echo "El id es:".$user->Id."<br>";
        echo "El nombre es:".$user->Nombre."<br>";
    }
}
?>