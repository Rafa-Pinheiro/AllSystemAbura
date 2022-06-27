//CÓDIGO MODAL
/* document.getElementsByClassName("tablink")[0].click();

function abrir(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].classList.remove("w3-light-grey");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.classList.add("w3-light-grey");
} */
//FIM CÓDIGO MODAL

window.onload = function() {
        //VARIAVEIS GLOBAIS\\
        L.mapquest.key = 'lYtoHgx2sLGH5pRJqqCgomNI1xQuUJfh'; //objeto chave mapquest
        var ocorrencia = [{
                // nome: "Maycon",
                logradouro: "Rua Manoel Ribeiro dos Santos",
                numero: "1163",
                bairro: "Gaivota",
                cidade: "Itanhaém",
                cep: "11740-000",
                estado: 'SP',
                pais: 'Brasil'
            },

            {
                nome: "Roberta",
                logradouro: "Rua José Ferreira da Rocha",
                numero: "627",
                bairro: "Vila Peruibe",
                cidade: "Peruíbe",
                cep: "11750-000",
                estado: 'SP',
                pais: 'Brasil'
            }
        ];


        var ambulancia = [{
                Status: "Disponível",
                Tipo: "A",
                logradouro: "Rua Rio Grande do Norte",
                numero: "1163",
                bairro: "Gaivota",
                cidade: "Itanhaém",
                cep: "11740-000",
                estado: 'SP',
                pais: 'Brasil'
            },

            {
                Status: "Indisponível",
                Tipo: "A",
                logradouro: "trocar",
                numero: "trocar",
                bairro: "trocar",
                cidade: "trocar",
                cep: "trocar",
                estado: 'trocar',
                pais: 'trocar'
            }
        ];

        var hospitais = [{
                nome: "Hospital Regional de Itanhaém",
                logradouro: "Avenida Rui Barbosa",
                numero: "541",
                bairro: "Centro",
                cidade: "Itanhaém",
                cep: "11740-000",
                estado: 'SP',
                pais: 'Brasil'
            },
            {
                nome: "Hospital Guilherme Álvaro",
                logradouro: "Rua Oswaldo Cruz",
                numero: "197",
                bairro: "Boqueirão",
                cidade: "Santos",
                cep: "11045-904",
                estado: 'SP',
                pais: 'Brasil'
            },
            {
                nome: "Hospital Emílio Ribas II",
                logradouro: "Rua São Miguel",
                numero: "760",
                bairro: "Sítio Paecara",
                cidade: "Guarujá",
                cep: "11460-200",
                estado: 'SP',
                pais: 'Brasil'
            },
            {
                nome: "Hospital Santo Amaro",
                logradouro: "Rua Quinto Bertoldi",
                numero: "40",
                bairro: "Vila Maia",
                cidade: "Guarujá",
                cep: "11410-908",
                estado: 'SP',
                pais: 'Brasil'
            },
            {
                nome: "Santa Casa de Santos",
                logradouro: " Avenida Dr. Cláudio Luiz da Costa",
                numero: "50",
                bairro: "Jabaquara",
                cidade: "Santos",
                cep: "11075-101",
                estado: 'SP',
                pais: 'Brasil'
            },
            {
                nome: "Hospital Municipal Bertioga",
                logradouro: "Praça Vicente Molinari",
                numero: "S/n",
                bairro: "Vila Itapanhaú",
                cidade: "Bertioga",
                cep: "11250-000",
                estado: 'SP',
                pais: 'Brasil'
            },
            {
                nome: "Hospital Dr. Luís Camargo F. Silva",
                logradouro: "Avenida Henry Borden",
                numero: "S/n",
                bairro: "Vila Santa Rosa",
                cidade: "Cubatão",
                cep: "11515-000",
                estado: 'SP',
                pais: 'Brasil'
            },
            {
                nome: "Complexo Hospitalar Irmã Dulce",
                logradouro: "Rua Dair Borges",
                numero: "550",
                bairro: "Boqueirão",
                cidade: "Praia Grande",
                cep: "11701-210",
                estado: 'SP',
                pais: 'Brasil'
            },
            {
                nome: "AME Santos 200",
                logradouro: "Rua Alexandre Martins",
                numero: "70",
                bairro: "Aparecida",
                cidade: "Santos",
                cep: "11025-201",
                estado: 'SP',
                pais: 'Brasil'
            },
            {
                nome: "AME Praia Grande",
                logradouro: "Rua Valter José Alves",
                numero: "485",
                bairro: "Nova Mirim",
                cidade: "Praia Grande",
                cep: "11705-010",
                estado: 'SP',
                pais: 'Brasil'
            }
        ];
        const tpAmb = document.getElementById('uma');
        //futuramente gerar campo na tabela para incluir endereço concatenado em cada objeto
        const enderecoHospitais =
            ambulancia.map((adress) => {
                const { logradouro, numero, bairro, cidade, cep, estado, pais } = adress;
                return `${logradouro}, ${numero} - ${bairro}, ${cidade} - ${cep} - ${estado}, ${pais}`
            });
        const enderecoAmblanciaA =
            ambulancia.map((adress) => {
                const { logradouro, numero, bairro, cidade, cep, estado, pais, Status, Tipo } = adress;
                if (Status == "Disponível" && Tipo == "A") {
                    return `${logradouro}, ${numero} - ${bairro}, ${cidade} - ${cep} - ${estado}, ${pais}`;
                }
            });
        const enderecoAmblanciaB =
            ambulancia.map((adress) => {
                const { logradouro, numero, bairro, cidade, cep, estado, pais, Status, Tipo } = adress;
                if (Status == "Disponível" && Tipo == "B") {
                    return `${logradouro}, ${numero} - ${bairro}, ${cidade} - ${cep} - ${estado}, ${pais}`;
                }
            });

        const enderecoAmblanciaC =
            ambulancia.map((adress) => {
                const { logradouro, numero, bairro, cidade, cep, estado, pais, Status, Tipo } = adress;
                if (Status == "Disponível" && Tipo == "C") {
                    return `${logradouro}, ${numero} - ${bairro}, ${cidade} - ${cep} - ${estado}, ${pais}`;
                }
            });
        const enderecoAmblanciaD =
            ambulancia.map((adress) => {
                const { logradouro, numero, bairro, cidade, cep, estado, pais, Status, Tipo } = adress;
                if (Status == "Disponível" && Tipo == "D") {
                    return `${logradouro}, ${numero} - ${bairro}, ${cidade} - ${cep} - ${estado}, ${pais}`;
                }
            });

        const enderecoOA =
            //DEPOIS IPLEMENTAR A OCORRENCIA4D = OSGT (OCORRENCIA, STATUS, GRAU, TIPO)
            ocorrencia.map((adress) => {
                const { logradouro, numero, bairro, cidade, cep, estado, pais, Status, Tipo } = adress;
                if (Status == "Disponível" && Tipo == "A") {
                    return `${logradouro}, ${numero} - ${bairro}, ${cidade} - ${cep} - ${estado}, ${pais}`;
                }
            });
        const enderecoOB =
            ocorrencia.map((adress) => {
                const { logradouro, numero, bairro, cidade, cep, estado, pais, Status, Tipo } = adress;
                if (Status == "Disponível" && Tipo == "B") {
                    return `${logradouro}, ${numero} - ${bairro}, ${cidade} - ${cep} - ${estado}, ${pais}`;
                }
            });
        const enderecoOC =
            ocorrencia.map((adress) => {
                const { logradouro, numero, bairro, cidade, cep, estado, pais, Status, Tipo } = adress;
                if (Status == "Disponível" && Tipo == "C") {
                    return `${logradouro}, ${numero} - ${bairro}, ${cidade} - ${cep} - ${estado}, ${pais}`;
                }
            });
        const enderecoOD =
            ocorrencia.map((adress) => {
                const { logradouro, numero, bairro, cidade, cep, estado, pais, Status, Tipo } = adress;
                if (Status == "Disponível" && Tipo == "D") {
                    return `${logradouro}, ${numero} - ${bairro}, ${cidade} - ${cep} - ${estado}, ${pais}`;
                }
            });



        //CHAMAR FUNÇÕES\\
        L.mapquest.geocoding().geocode("São Paulo, SP - Brazil", createMap);


        function createMap(error, response) {
            // Initialize the Map
            let teste = response;
            // var popup = L.popup();
            let latLng = response.results[0].locations[0].latLng;
            var map = L.mapquest.map('map', {
                layers: L.mapquest.tileLayer('map'),
                center: [latLng.lat, latLng.lng],
                zoom: 12
            });
            // L.marker([latLng.lat, latLng.lng], { icon: markerviatura }).addTo(map);
        }


        tpAmb.addEventListener("change", function() {
            if (tpAmb != "") {
                switch (tpAmb.value) {
                    case "A":
                        break;
                    case "B":
                        break;
                    case "C":
                        break;
                    case "D":
                        break;
                    default:
                        alert();
                }
            }


            // L.mapquest.geocoding().geocode(chamado, createMap);
        });


        // FUNÇÃO QUE RETORNA OS DADOS DA ROTA
        // var local = {
        //     "locations": [
        //         uma[0],
        //         hospitais[0], //ENDEREÇOS DA MATRIZ
        //         chamado
        //     ],
        //     "options": {
        //         "allToAll": true
        //     }
        // };
        // var rotas = 'http://www.mapquestapi.com/directions/v2/routematrix?key=lYtoHgx2sLGH5pRJqqCgomNI1xQuUJfh&json=' + JSON.stringify(local);


        // var xmlHttp = new XMLHttpRequest();
        // xmlHttp.open("GET", rotas, false); // false for synchronous request
        // xmlHttp.send(null);
        // var retorno = (JSON.parse(xmlHttp.responseText)); //LINHA DE ARMAZENAMENTO DO RETORNO DO TEMPO JÁ EM JSON
        // var hor = parseInt(((retorno.time[0][1] + retorno.time[1][0]) / 60) / 60);
        // var min = parseInt(((retorno.time[0][1] + retorno.time[1][0]) / 60) - (hor * 60));
        // var sec = (((retorno.time[0][1] + retorno.time[1][0]) / 60) - (min + (hor * 60))) * 60;
        // console.log(retorno, hor + ':' + min + ":" + sec);


        /*
        //estrutura For, que gerará vetores para chamadas,umas e unidades de saúde;
        o for fará a pesquisa nas tabelas do bd, e como serão armazenados
        */
        //(logra + ", " + number + ", " + district + ", " + city + ", " + state + ", " + country)

        //ESTRUTURA FOR PARACHAMADO\\
        // for (let i = 0; i< "retorno tb_chamados"; i++){
        //     if (chamado.length == 0){
        //         var chamado = [JSON.parse(localStorage.endereco[i]).logradouro + ", " + JSON.parse(localStorage.endereco[i]).numero + ", " + JSON.parse(localStorage.endereco[i]).bairro + ", " + JSON.parse(localStorage.endereco[i]).cidade + ", " + JSON.parse(localStorage.endereco[i]).estado + ", " + JSON.parse(localStorage.endereco[i]).pais];
        //     }
        //     else{
        //         chamado.append(aux);
        //         var aux = [JSON.parse(localStorage.endereco[i]).logradouro + ", " + JSON.parse(localStorage.endereco[i]).numero + ", " + JSON.parse(localStorage.endereco[i]).bairro + ", " + JSON.parse(localStorage.endereco[i]).cidade + ", " + JSON.parse(localStorage.endereco[i]).estado + ", " + JSON.parse(localStorage.endereco[i]).pais];
        //     }
        // }
        //FIM DA ESTRUTURA FOR DO CHAMADO

        //   var chamado = JSON.parse(localStorage.endereco).logradouro + ", " + JSON.parse(localStorage.endereco).numero + ", " + JSON.parse(localStorage.endereco).bairro + ", " + JSON.parse(localStorage.endereco).cidade + ", " + JSON.parse(localStorage.endereco).estado + ", " + JSON.parse(localStorage.endereco).pais; *TEMPORARIO*

        //CASO PRECISE EM VARIÁVEIS DIFERENTES\\
        // var logra = JSON.parse(localStorage.endereco).logradouro;
        // var number = JSON.parse(localStorage.endereco).numero;
        // var district = JSON.parse(localStorage.endereco).bairro;
        // var city =JSON.parse(localStorage.endereco).cidade;
        // var state = JSON.parse(localStorage.endereco).estado;
        // var country = JSON.parse(localStorage.endereco).pais;
        // console.log(chamado);
        // console.log(JSON.parse(localStorage.endereco)); de String para Objeto

        // //FUNÇÃO DE BUSCA DE HOSPITAIS
        // let hos = {
        //     "origin": {

        //         "latLng": {
        //             "lat": 40.41194686894974,
        //             "lng": -3.70598276333092
        //         }
        //     },
        //     "options": {
        //         "maxMatches": 40,
        //         "radius": 20,
        //         "units": "k"
        //     }
        // };
        // let sLocais = "http://www.mapquestapi.com/search/v2/radius?key=lYtoHgx2sLGH5pRJqqCgomNI1xQuUJfh&json=" + JSON.stringify(hos);
        // var xmlHttp2 = new XMLHttpRequest();
        // xmlHttp2.open("GET", sLocais, false); // false for synchronous request
        // xmlHttp2.send(null);
        // var retornoS = (JSON.parse(xmlHttp2.responseText));
        // console.log(retornoS);


        var markerSize = {
            'sm': [28, 35],
            'md': [35, 44],
            'lg': [42, 53]
        };
        var markerAnchor = {
            'sm': [14, 35],
            'md': [17, 44],
            'lg': [21, 53]
        };
        var markerPopupAnchor = {
            'sm': [1, -35],
            'md': [1, -44],
            'lg': [2, -53]
        };

        var markeracidente = L.icon({
            // https://www.flaticon.com/br/icone-gratis/ligacao-de-emergencia_2991158?term=emergencia&related_id=2991158
            iconUrl: 'https://cdn-icons-png.flaticon.com/512/2991/2991158.png',
            //<a href="https://www.flaticon.com/br/icones-gratis/emergencia" title="emergência ícones">Emergência ícones criados por Freepik - Flaticon</a>
            iconRetinaUrl: 'https://cdn-icons-png.flaticon.com/512/2991/2991158.png',
            iconSize: markerSize.sm,
            iconAnchor: markerAnchor.sm,
            popupAnchor: markerPopupAnchor.sm
                //Link de Crédito imagem - <a href="https://www.flaticon.com/br/icones-gratis/emergencia" title="emergência ícones">Emergência ícones criados por Freepik - Flaticon</a>
        });

        var markerviatura = L.icon({
            //https://www.flaticon.com/br/icone-premium/ambulancia_2991996?term=ambulanci&page=1&position=14&page=1&position=14&related_id=2991996&origin=search
            iconUrl: 'https://cdn-icons.flaticon.com/png/512/2991/premium/2991996.png?token=exp=1653614934~hmac=a8024458bd7491e7c75a234b26e04754',
            //<a href="https://www.flaticon.com/br/icones-gratis/ambulancia" title="ambulância ícones">Ambulância ícones criados por vectorsmarket15 - Flaticon</a>
            iconRetinaUrl: 'https://cdn-icons.flaticon.com/png/512/2991/premium/2991996.png?token=exp=1653614934~hmac=a8024458bd7491e7c75a234b26e04754',
            iconSize: markerSize.md,
            iconAnchor: markerAnchor.md,
            popupAnchor: markerPopupAnchor.md
                //Link de Crédito imagem - <a href="https://www.flaticon.com/br/icones-gratis/ambulancia" title="ambulância ícones">Ambulância ícones criados por vectorsmarket15 - Flaticon</a>
        });

        var markerhospital = L.icon({
            //https://www.flaticon.com/br/icone-premium/hospital_2866287?term=hospital&page=1&position=2&page=1&position=2&related_id=2866287&origin=search
            iconUrl: 'https://cdn-icons.flaticon.com/png/512/2866/premium/2866287.png?token=exp=1653614878~hmac=a0e8129990e997bfa68bd9e57dfa664e',
            //<a href="https://www.flaticon.com/br/icones-gratis/hospital" title="hospital ícones">Hospital ícones criados por Blak1ta - Flaticon</a>
            iconRetinaUrl: 'https://cdn-icons.flaticon.com/png/512/2866/premium/2866287.png?token=exp=1653614878~hmac=a0e8129990e997bfa68bd9e57dfa664e',
            iconSize: markerSize.md,
            iconAnchor: markerAnchor.md,
            popupAnchor: markerPopupAnchor.md
                //Link de Crédito imagem - <a href="https://www.flaticon.com/br/icones-gratis/hospital" title="hospital ícones">Hospital ícones criados por Blak1ta - Flaticon</a>
        });
        // Geocode three locations, then call the createMap callback

        // L.mapquest.directions().setLayerOptions({
        //     startMarker: {
        //         icon: markerviatura
        //     },
        //     endMarker: {
        //         icon: markerhospital
        //     },
        //     waypoints: {
        //         icon: markeracidente
        //     },

        //     routeRibbon: {
        //         color: "#ccc",
        //         opacity: 1.0,
        //         showTraffic: false
        //     }
        // });
        // for (let i = 0; i < uma.length; i++) {s

        //CÓDIGO ORIGINAL DOS ICONES
        /*
        var directions = L.mapquest.directions();
        directions.setLayerOptions({
        startMarker: {
            icon: 'circle',
            iconOptions: {
            size: 'sm',
            primaryColor: '#1fc715',
            secondaryColor: '#1fc715',
            symbol: 'A'
            }
        },
        endMarker: {
            icon: 'circle',
            iconOptions: {
            size: 'sm',
            primaryColor: '#e9304f',
            secondaryColor: '#e9304f',
            symbol: 'B'
            }
        },
        routeRibbon: {
            color: "#2aa6ce",
            opacity: 1.0,
            showTraffic: false
        }
        });
        */
        //     L.mapquest.directions().route({
        //         start: uma[0],
        //         end: hospital[0],
        //         waypoints: [chamado]
        //     })
        // };

        // Generate the feature group containing markers from the geocoded locations
        // var featureGroup = generateMarkersFeatureGroup(response);

        // Add markers to the map and zoom to the features
        // featureGroup.addTo(map);
        // map.fitBounds(featureGroup.getBounds());


        // function generateMarkersFeatureGroup(response) {
        //     var group = [];
        //     for (var i = 0; i < response.results.length; i++) {
        //         var location = response.results[i].locations[0];
        //         var locationLatLng = location.latLng;

        //         // Create a marker for each location\\
        //         //    Forma Antiga (Rodolfo)
        //         var qual = (i == 0) ? markeracidente : markerviatura
        // var marker = L.marker(locationLatLng, {
        // icon: acidente
        // })
        // .bindPopup(location.adminArea5 + ', ' + location.adminArea3);

        // group.push(marker);
        //         //    end\\
        //         // var qual = function() {
        //         //     switch (response.results[i].location) {
        //         //         case chamado:
        //         //             markeracidente;
        //         //             break;
        //         //         case viatura:
        //         //             markerviatura;
        //         //             break;
        //         //         case hospital:
        //         //             markerhospital;
        //         //             break;
        //         //         default:
        //         //             alert("Ocorreu um erroo na definição do endereço no mapa! Por favor, tente novamente.");
        //         //     };
        //         // }
        //         var marker = L.marker(locationLatLng, {
        //                 icon: qual
        //             })
        //             .bindPopup(location.adminArea5 + ', ' + location.adminArea3); //CLIQUE COM O TEMPO, ALTERAR AQUI

        // group.push(marker);
        //         //end\\
        //     }
        //     return L.featureGroup(group);
        // };





    }
    //------------------------------- Links Documentação importantes ---------------------------------------\\
    //ICONES NA ROTA
    // https://developer.mapquest.com/documentation/mapquest-js/v1.0/examples/directions-with-custom-icons-and-ribbons/

//API RESTANTES

//PAINEL LATERAL
//https://developer.mapquest.com/documentation/mapquest-js/v1.3/examples/directions-control/
//------------------------------- Configuração apache linux ---------------------------------------\\
// https://www.youtube.com/watch?v=twLFmELptnQ - alterando deretório de execução
// https://www.youtube.com/watch?v=l9uZ3gk0Kzk - Arrumando o mysql
//https://pt.linkedin.com/pulse/instala%C3%A7%C3%A3o-e-configura%C3%A7%C3%A3o-do-mysql-linux-mint-20-ubuntu-yenny-delgado?trk=pulse-article_more-articles_related-content-card


//------------------------------- Gia De Commit terminal/git ---------------------------------------\\

/* COMMIT ATUAL DO GIT

git pull
git init
git add .
git status
git commit -m ""


git branch -M main
git remote add origin https://github.com/Rafa-Pinheiro/AllSystemAbura.git
git push -u origin main

CHAVE GIT HUB
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
*/