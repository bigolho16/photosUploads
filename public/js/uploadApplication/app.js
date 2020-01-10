// document.getElementsByClassName("spanAlertJs") // classe de alerta nas paginas
class App {
    constructor () {
        if (document.querySelectorAll(".addInputs")) {
            this.campoProdutos = document.querySelectorAll(".addInputs");

        }

        if (document.querySelectorAll(".selectGruposMarcasIndentify")) {
            this.selectsProdutos =document.querySelectorAll(".selectGruposMarcasIndentify");

        }

    }

    // get getCriadorDeElementos () { return this.element; }
    // setCriadorDeElementos (element) {
    //     this.element = document.createElementNS(element);

    // }


    // 
    // 
    // 
    // 


    formatarCampoProdutos () {
        var selectProdutos = this.selectsProdutos;
        var campoProdutos  = this.campoProdutos;

        this.campoProdutos[2].addEventListener("focus", function () {
            for (var x=0; x < selectProdutos.length; x++) {
                if (selectProdutos[x].attributes[selectProdutos[x].attributes.length -1].name=="disabled") {
                    selectProdutos[x].removeAttribute("disabled"); // campo selects grupos marcas recebendo attibutos
                
                }
            }

        });

        this.campoProdutos[2].addEventListener("blur", function () {
            
            for (var x=0; x < selectProdutos.length; x++) {
                if (this.value == "") {
                    selectProdutos[x].setAttribute("disabled", "");

                    if (document.getElementsByClassName("group-brand-alert")) {
                        campoProdutos[0].removeAttribute("disabled");
                        campoProdutos[1].removeAttribute("disabled");
                        document.getElementsByClassName("group-brand")[x].classList.remove("group-brand-alert");

                    }

                }else if (this.value != "") {
                    campoProdutos[0].setAttribute("disabled", "");
                    campoProdutos[1].setAttribute("disabled", "");
                    document.getElementsByClassName("group-brand")[x].classList.add("group-brand-alert");
                    

                }

            }

        });
    }

    formatarCampoGruposMarcas() {
        var campoProdutos = this.campoProdutos;

        for (var x=0; x < this.campoProdutos.length; x++) {
            if (x == 2) { // para que 'x' não chegue ao campo produto
                break;

            }
            

            this.campoProdutos[x].addEventListener("focus", function () {
                campoProdutos[2].setAttribute("disabled","");

                // backpoint
                // backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint// backpoint
                // var span = document.createElement("span");
                // span.setAttribute("class","spanAlertJs");
                // span.innerText="No máximo, por motivos de segurança, 2 campos são permitidos para Envio";

                // campoProdutos[2].parentNode.appendChild(span);

                // if (document.getElementsByClassName("spanAlertJs")){
                //     campoProdutos[2].parentNode.removeChild(campoProdutos[2].parentNode.childNodes[-1]);
                // }
                 
            });

            this.campoProdutos[x].addEventListener("blur", function () {


            });
        }
    }

}

function interruptor () {
    var app = new App();
    app.formatarCampoProdutos();
    
    // 
    
    app.formatarCampoGruposMarcas();

    
};

interruptor ();