function verificaCamposExistemNoBanco () {
    if (document.getElementById("selectAddGrupoIndentifyDiversity")) {
        var selectAddGrupoIndentifyDiversityGlobals = document.getElementById("selectAddGrupoIndentifyDiversity");

        soNumerosSelectGlobals = selectAddGrupoIndentifyDiversityGlobals.value.replace(/[^0-9]/g,'')

        selectAddGrupoIndentifyDiversityGlobals.addEventListener("click", function () {
            soNumerosSelectGlobals = selectAddGrupoIndentifyDiversityGlobals.value.replace(/[^0-9]/g,'')
        })
    }

    if (document.getElementsByClassName("addInputs")) {
    var INPUTS=document.getElementsByClassName("addInputs");
    var selectt = document.getElementsByClassName('selectGruposMarcasIndentify');

    var outerSelects = document.getElementsByClassName("indentifyMethods");

    var putGrupos = INPUTS[0];
    var putMarcas = INPUTS[1];
    var putProdutos = INPUTS[2];
    var putImgNewProdutos = INPUTS[3];

    if (putProdutos) {
    putProdutos.addEventListener("focus", function () {
        for (var x=0; x < selectt.length; x++) {
        if (putGrupos.value=="" && putMarcas.value=="" || putGrupos.value=="" || putMarcas.value=="") {
            if (selectt[x].attributes[selectt[x].attributes.length -1].name=='disabled') {
                selectt[x].removeAttribute("disabled");

            }

            putGrupos.setAttribute("disabled",'');
            putMarcas.setAttribute("disabled",'');

        }else if (putGrupos.value!="" && putMarcas.value!="" || putGrupos.value!="" || putMarcas.value!="") {
            if (putGrupos.attributes[putGrupos.attributes.length -1].name=='disabled' && putMarcas.attributes[putMarcas.attributes.length -1].name=='disabled') {
                putGrupos.removeAttribute("disabled");
                putMarcas.removeAttribute("disabled");

            }

            selectt[x].setAttribute("disabled","");

        }

        }

    })

    }

    }

    if (putProdutos) {
    putProdutos.addEventListener("blur", function () {
        for (var x=0; x < selectt.length; x++) {
        if (!this.value!="") {
            if (selectt[x].attributes[selectt[x].attributes.length -1].name=='disabled') {
                selectt[x].setAttribute("disabled",'');

            }else {
                selectt[x].setAttribute("disabled",'');

            }

            putGrupos.removeAttribute("disabled");
            putMarcas.removeAttribute("disabled");
        }else if (this.value!="") {
            if (!selectt[x].attributes[selectt[x].attributes.length -1].name=='disabled') {
                selectt[x].setAttribute("disabled",'');

            }
        }
        
        }
    
    })

    }

    putGrupos.addEventListener("focus", function () {
        for (var x=0; x < selectt.length; x++) {
            selectt[x].setAttribute("disabled", '');
        }
        
    })
    putGrupos.addEventListener("blur", function () {
        for (var x=0; x < selectt.length; x++) {
        if (this.value!="") {
            selectt[x].setAttribute("disabled", '');
            
        }else {
            selectt[x].setAttribute("disabled", '');
        }
        }
    })
    // putGrupos
    //
    
    putImgNewProdutos.addEventListener("click", function () {
        outerSelects[0].setAttribute("disabled", '');

    })

    putImgNewProdutos.addEventListener("focus", function () {
        if (this.value != "") {
            outerSelects[0].setAttribute("disabled", '');
        
        }

    })

    putImgNewProdutos.addEventListener("blur", function () {
        if (this.value != "") {
            outerSelects[0].setAttribute("disabled", '');
        
        }else if (this.value == "") {
            outerSelects[0].removeAttribute("disabled");
        
        }

    })

    outerSelects[0].addEventListener("click", function () {
        if (putImgNewProdutos.value == "") {
            putImgNewProdutos.setAttribute('disabled', '');

        }else if (putImgNewProdutos.value != "") {
            putImgNewProdutos.value = "";
            
        }

    })

    outerSelects[0].addEventListener("blur", function () { 
        if (this.options[this.selectedIndex].value == "") {
            putImgNewProdutos.removeAttribute("disabled");

        }

        // selects[1].options[selects[1].selectedIndex].value

    })

    // daqui pra cima foram indentificados formatações de campos inputs e outros
    // daqui pra baixo foram indentificados formatações de ajax

    // 

    var formulario = document.getElementsByClassName("botaoForm");
    for (var x=0; x < formulario.length; x++) {   

    formulario[x].addEventListener('click', function () {

    if (document.getElementById("")) {

    }

    var AJAX = new XMLHttpRequest();
    

    AJAX.onreadystatechange = function () {
        if (AJAX.readyState==4&&AJAX.status==200) {
            
            var theJSON;
            function is_json(str) {
                try {
                    theJSON = JSON.parse(str);
                }catch (erro) {
                    return false;

                }
                
                return true;
            
            }

            // if (is_json(this.responseText)) {//verificando se é json
            //     if (theJSON['msgGrupo']!="" && theJSON['msgMarca'] !="" && theJSON['msgProduto']!="") {
            //         document.getElementById("msgErrosThisForm").innerHTML = theJSON['msgGrupo'] + ' e ' + theJSON['msgMarca'] +' e '+   theJSON['msgProduto'];

            //     }
            //     if (theJSON['msgGrupo']!="") {
            //         document.getElementById("msgErrosThisForm").innerHTML = theJSON['msgGrupo'];
            //     }
            //     if (theJSON['msgMarca']!="") {
            //         document.getElementById("msgErrosThisForm").innerHTML = theJSON['msgMarca'];
            //     }
            //     if (theJSON['msgProduto']!="") {
            //         document.getElementById("msgErrosThisForm").innerHTML = theJSON['msgProduto'];

            //     }
                
            // }
            document.getElementById("msgErrosThisForm").innerHTML = this.responseText;
            // setTimeout(function () {
            //     window.location.reload();
            // },1500);
        }else {
            document.getElementById("msgErrosThisForm").innerHTML = this.responseText;

        }
            // console.log(this.responseText);

           // document.body.innerHTML = xmlhttp.responseText;


            //img.src=;//aaqui entra o src passado do banco

            // document.getElementById("novaEdicao".value='';
            // var link = tabelaJson.foto;


            // var linkPartido = link.substr( link.indexOf("docs/",-1)+4 );//procurar por htdocs/ para substituir em breve por localhost
            // img[0].src="http://localhost"+linkPartido;

            // for (x in tabelaJson) {
                
            // }
            // document.getElementById("novaEdicao").focus();
        }

    

    AJAX.open("GET", "http://localhost/destinadoAoMercado/includes/menus/viewTemporary/loading.php?addGrupos="+INPUTS[0].value+"&addMarcas="+INPUTS[1].value+"&addProdutos="+INPUTS[2].value+"&indentifyGrupo="+selectt[0].options[selectt[0].selectedIndex].value+"&indentifyMarca="+selectt[1].options[selectt[1].selectedIndex].value+"&botaoadds="+this.value+"&addGrupoIndentifyDiversity="+soNumerosSelectGlobals, true);

    AJAX.send();
    })
}
}

function manipulaSelects() {
    var selects = document.getElementsByClassName('indentifyMethods');
    var botaoSubmit = document.getElementById("subBotao");
    var putImage = document.getElementById("putImage");
    var secondverificacaoCampos = document.getElementsByClassName("secondverificacaoCampos");

    for (var x = 0; x < selects.length; x++) {
    selects[x].addEventListener("click", function () {

    var value0 = selects[0].options[selects[0].selectedIndex].text;
    var value0SomenteNumeros = value0.replace(/[^0-9]/g,'');// somente os numeros

    var value1 = selects[1].options[selects[1].selectedIndex].value + selects[2].options[selects[2].selectedIndex].value;
    
    if (parseInt(value0SomenteNumeros) == parseInt(value1) || putImage.value!="" && secondverificacaoCampos[0].value!="" && secondverificacaoCampos[1].options[secondverificacaoCampos[1].selectedIndex].value!="" && secondverificacaoCampos[2].options[secondverificacaoCampos[2].selectedIndex].value!="") {
    if (parseInt(value0SomenteNumeros) == parseInt(value1)) {
    if (botaoSubmit.attributes[botaoSubmit.attributes.length-1].name == "disabled") {
        botaoSubmit.removeAttribute("disabled");
    }
    }else if (putImage.value!="" && secondverificacaoCampos[0].value!="" && secondverificacaoCampos[1].options[secondverificacaoCampos[1].selectedIndex].value!="" && secondverificacaoCampos[2].options[secondverificacaoCampos[2].selectedIndex].value!="") {
        botaoSubmit.removeAttribute("disabled");

    }else {
        botaoSubmit.setAttribute("disabled", '');
    }
    
    }
    })
    }
}

// var secondverificacaoCampos = document.getElementsByClassName("secondverificacaoCampos");
// document.addEventListener("click", function () {
// console.log (putImage.value +' '+ secondverificacaoCampos[0].value  +' '+  secondverificacaoCampos[1].options[secondverificacaoCampos[1].selectedIndex].value  +' '+  secondverificacaoCampos[2].options[secondverificacaoCampos[2].selectedIndex].value)
// })

verificaCamposExistemNoBanco ();

manipulaSelects();

// var json = '{"name":"12", "sobrenome":"lobo"}';

// qualquer = JSON.parse(json);
// console.log(qualquer.name)

// var json = '{"result":true, "count":42}';
// obj = JSON.parse(json);

// console.log(obj.count);
// // expected output: 42

// console.log(obj.result);
// // expected output: true