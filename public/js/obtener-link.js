//<![CDATA[
function getlink() {
    var aux = document.createElement("input");
    aux.setAttribute("value", window.location.href.split("?")[0].split("#")[0]);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
    var css = document.createElement("style");
    var estilo = document.createTextNode(
        "#aviso {position:fixed; z-index: 9999999; widht: 120px; top:50%;left:50%;margin-left: -60px;padding: 20px; background: #705df2;border-radius: 8px;font-size: 14px; color: #fff;}"
    );
    css.appendChild(estilo);
    document.head.appendChild(css);
    var aviso = document.createElement("div");
    aviso.setAttribute("id", "aviso");
    var contenido = document.createTextNode("URL copiada");
    aviso.appendChild(contenido);
    document.body.appendChild(aviso);
    window.load = setTimeout("document.body.removeChild(aviso)", 1000);
}
    //]]>