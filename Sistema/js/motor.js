//CÓDIGO MODAL
document.getElementsByClassName("tablink")[0].click();

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
}
//FIM CÓDIGO MODAL

window.onload = function() {

        var chamado = 'Avenida Paula Ferreira, 3108, Pirituba, São Paulo, SP';
        var uma = ['Rua Manoel Ribeiro dos Santos,101, Itanhaém, SP', 'Avenida Estados Unidos, 859, Jardim São fernando, Itanhaém SP', 'Rua Oswaldo Cruz, 277, Boqueirão, Santos, SP'];
        var chamado = "Avenida Paula Ferreira, 3108, Itanhaém, SP";
        var hospital = ['Rua Valter José Alves, 485, Nova Mirim, Praia Grande, SP'];


        // FUNÇÃO QUE RETORNA OS DADOS DA ROTA
        var local = {
            "locations": [
                uma[0],
                hospital[0], //ENDEREÇOS DA MATRIZ
                chamado
            ],
            "options": {
                "allToAll": true
            }
        };
        var url = 'http://www.mapquestapi.com/directions/v2/routematrix?key=lYtoHgx2sLGH5pRJqqCgomNI1xQuUJfh&json=' + JSON.stringify(local);


        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", url, false); // false for synchronous request
        xmlHttp.send(null);
        var retorno = (JSON.parse(xmlHttp.responseText)); //LINHA DE ARMAZENAMENTO DO RETORNO DO TEMPO JÁ EM JSON
        var hor = parseInt(((retorno.time[0][1] + retorno.time[1][0]) / 60) / 60);
        var min = parseInt(((retorno.time[0][1] + retorno.time[1][0]) / 60) - (hor * 60));
        var sec = (((retorno.time[0][1] + retorno.time[1][0]) / 60) - (min + (hor * 60))) * 60;
        console.log(retorno, hor + ':' + min + ":" + sec);


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




        L.mapquest.key = 'lYtoHgx2sLGH5pRJqqCgomNI1xQuUJfh'; //objeto chave mapquest

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
        L.mapquest.geocoding().geocode([chamado, uma[0], uma[1]], createMap);


        function createMap(error, response) {
            // Initialize the Map
            console.log(response);
            // console.log(response.results[0].)
            var map = L.mapquest.map('map', {
                layers: L.mapquest.tileLayer('map'),
                center: [location[0].latLng],
                zoom: 12
            });


            L.mapquest.directions().setLayerOptions({
                startMarker: {
                    icon: markerviatura
                },
                endMarker: {
                    icon: markerhospital
                },
                waypoints: {
                    icon: markeracidente
                },

                routeRibbon: {
                    color: "#ccc",
                    opacity: 1.0,
                    showTraffic: false
                }
            });
            for (let i = 0; i < uma.length; i++) {

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
                L.mapquest.directions().route({
                    start: uma[0],
                    end: hospital[0],
                    waypoints: [chamado]
                })
            };

            // Generate the feature group containing markers from the geocoded locations
            var featureGroup = generateMarkersFeatureGroup(response);

            // Add markers to the map and zoom to the features
            featureGroup.addTo(map);
            map.fitBounds(featureGroup.getBounds());
        }

        // function generateMarkersFeatureGroup(response) {
        //     var group = [];
        //     for (var i = 0; i < response.results.length; i++) {
        //         var location = response.results[i].locations[0];
        //         var locationLatLng = location.latLng;

        //         // Create a marker for each location\\
        //         //    Forma Antiga (Rodolfo)
        //         var qual = (i == 0) ? markeracidente : markerviatura
        //         var marker = L.marker(locationLatLng, {
        //                 icon: qual
        //             })
        //             .bindPopup(location.adminArea5 + ', ' + location.adminArea3);

        //         group.push(marker);
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

        //         group.push(marker);
        //         //end\\
        //     }
        //     return L.featureGroup(group);
        // };





    }
    //------------------------------- Links Documentação importantes ---------------------------------------\\
    //ICONES NA ROTA
    // https://developer.mapquest.com/documentation/mapquest-js/v1.0/examples/directions-with-custom-icons-and-ribbons/

//API RESTANTES
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

*/