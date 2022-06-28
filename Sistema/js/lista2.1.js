window.onload = function() {
    const ocorrencia = [{
            //FAZER UM ARRAY COM UMA COMBINAÇÃO DE ATRIBUTOS COM ENDEREÇOS DIFERENTES
            tipo: "A", // A, B, C, D
            gravidade: 'U', //U, G, N, ML;
            status: "aberto",
            logradouro: "Rua José Manoel Lorenzo Leiro",
            numero: "500",
            bairro: "Jardim Magalhães",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "A", // A, B, C, D
            gravidade: 'G', //U, G, N, ML;
            status: "aberto",
            logradouro: "Rua Beritiba",
            numero: "260",
            bairro: "Suarão",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "A", // A, B, C, D
            gravidade: 'N', //U, G, N, ML;
            status: "aberto",
            logradouro: "Rua  Vereador Augusto Pereira de Araujo",
            numero: "351",
            bairro: "Jardim Umuarama",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "A", // A, B, C, D
            gravidade: 'ML', //U, G, N, ML;
            status: "aberto",
            logradouro: "Avenida Estados Unidos",
            numero: "1901",
            bairro: "Cibratel II",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "B", // A, B, C, D
            gravidade: 'U', //U, G, N, ML;
            status: "aberto",
            logradouro: "Rua Ministro Dilson Domingues Funaro",
            numero: "60A",
            bairro: "Jamaica",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "B", // A, B, C, D
            gravidade: 'G', //U, G, N, ML;
            status: "aberto",
            logradouro: "Avenida Estados Unidos",
            numero: "1901",
            bairro: "Cibratel II",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "B", // A, B, C, D
            gravidade: 'N', //U, G, N, ML;
            status: "aberto",
            logradouro: "Rua Meril Brandila Calazans",
            numero: "186",
            bairro: "Anchieta",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "B", // A, B, C, D
            gravidade: 'ML', //U, G, N, ML;
            status: "aberto",
            logradouro: "Avenida Harry Forssell",
            numero: "1505",
            bairro: "Jardim Sabaúna",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "C", // A, B, C, D
            gravidade: 'U', //U, G, N, ML;
            status: "aberto",
            logradouro: "Rua Emídio de Souza",
            numero: "2600",
            bairro: "Jardim Oásis",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "C", // A, B, C, D
            gravidade: 'G', //U, G, N, ML;
            status: "aberto",
            logradouro: "Avenida Flacides Ferreira ",
            numero: "775",
            bairro: "Balneário São Jorge",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "C", // A, B, C, D
            gravidade: 'N', //U, G, N, ML;
            status: "aberto",
            logradouro: "Rua João Mariano",
            numero: "115",
            bairro: "Centro",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "C", // A, B, C, D
            gravidade: 'ML', //U, G, N, ML;
            status: "aberto",
            logradouro: "Rua Américo Nicolini",
            numero: "160",
            bairro: "Vila São Paulo",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "D", // A, B, C, D
            gravidade: 'U', //U, G, N, ML;
            status: "aberto",
            logradouro: "Rua Emídio de Souza ",
            numero: "2600",
            bairro: "Jardim Oásis",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "D", // A, B, C, D
            gravidade: 'G', //U, G, N, ML;
            status: "aberto",
            logradouro: "Rua Américo Nicolini",
            numero: "160",
            bairro: "Vila Sao Paulo",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "D", // A, B, C, D
            gravidade: 'N', //U, G, N, ML;
            status: "aberto",
            logradouro: "Avenida Estados Unidos",
            numero: "859",
            bairro: "Jardim São Fernando",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "D", // A, B, C, D
            gravidade: 'ML', //U, G, N, ML;
            status: "aberto",
            logradouro: "Rua Manoel Ribeiro dos Santos",
            numero: "101",
            bairro: "Jardim Oasis",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "A", // A, B, C, D
            gravidade: 'U', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Rua José Manoel Lorenzo Leiro",
            numero: "800",
            bairro: "Jardim Magalhães",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "A", // A, B, C, D
            gravidade: 'G', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Rua Beritiba",
            numero: "478",
            bairro: "Suarão",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "A", // A, B, C, D
            gravidade: 'N', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Rua  Vereador Augusto Pereira de Araujo",
            numero: "867",
            bairro: "Jardim Umuarama",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "A", // A, B, C, D
            gravidade: 'ML', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Avenida Estados Unidos",
            numero: "203",
            bairro: "Cibratel II",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "B", // A, B, C, D
            gravidade: 'U', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Rua Ministro Dilson Domingues Funaro",
            numero: "90",
            bairro: "Jamaica",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "B", // A, B, C, D
            gravidade: 'G', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Avenida Estados Unidos",
            numero: "135",
            bairro: "Cibratel II",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "B", // A, B, C, D
            gravidade: 'N', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Rua Meril Brandila Calazans",
            numero: "1860",
            bairro: "Anchieta",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "B", // A, B, C, D
            gravidade: 'ML', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Avenida Harry Forssell",
            numero: "235",
            bairro: "Jardim Sabaúna",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "C", // A, B, C, D
            gravidade: 'U', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Rua Emídio de Souza",
            numero: "254",
            bairro: "Jardim Oásis",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "C", // A, B, C, D
            gravidade: 'G', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Avenida Flacides Ferreira ",
            numero: "183",
            bairro: "Balneário São Jorge",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "C", // A, B, C, D
            gravidade: 'N', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Rua João Mariano",
            numero: "845",
            bairro: "Centro",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "C", // A, B, C, D
            gravidade: 'ML', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Rua Américo Nicolini",
            numero: "640",
            bairro: "Vila São Paulo",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "D", // A, B, C, D
            gravidade: 'U', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Rua Emídio de Souza ",
            numero: "247",
            bairro: "Jardim Oásis",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "D", // A, B, C, D
            gravidade: 'G', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Rua Américo Nicolini",
            numero: "780",
            bairro: "Vila Sao Paulo",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "D", // A, B, C, D
            gravidade: 'N', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Avenida Estados Unidos",
            numero: "123",
            bairro: "Jardim São Fernando",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "D", // A, B, C, D
            gravidade: 'ML', //U, G, N, ML;
            status: "em andamento",
            logradouro: "Rua Manoel Ribeiro dos Santos",
            numero: "1452",
            bairro: "Jardim Oasis",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "A", // A, B, C, D
            gravidade: 'U', //U, G, N, ML;
            status: "fechado",
            logradouro: "Rua José Manoel Lorenzo Leiro",
            numero: "300",
            bairro: "Jardim Magalhães",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "A", // A, B, C, D
            gravidade: 'G', //U, G, N, ML;
            status: "fechado",
            logradouro: "Rua Beritiba",
            numero: "57",
            bairro: "Suarão",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "A", // A, B, C, D
            gravidade: 'N', //U, G, N, ML;
            status: "fechado",
            logradouro: "Rua  Vereador Augusto Pereira de Araujo",
            numero: "237",
            bairro: "Jardim Umuarama",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "A", // A, B, C, D
            gravidade: 'ML', //U, G, N, ML;
            status: "fechado",
            logradouro: "Avenida Estados Unidos",
            numero: "812",
            bairro: "Cibratel II",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "B", // A, B, C, D
            gravidade: 'U', //U, G, N, ML;
            status: "fechado",
            logradouro: "Rua Ministro Dilson Domingues Funaro",
            numero: "200",
            bairro: "Jamaica",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "B", // A, B, C, D
            gravidade: 'G', //U, G, N, ML;
            status: "fechado",
            logradouro: "Avenida Estados Unidos",
            numero: "783",
            bairro: "Cibratel II",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "B", // A, B, C, D
            gravidade: 'N', //U, G, N, ML;
            status: "fechado",
            logradouro: "Rua Meril Brandila Calazans",
            numero: "1190",
            bairro: "Anchieta",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "B", // A, B, C, D
            gravidade: 'ML', //U, G, N, ML;
            status: "fechado",
            logradouro: "Avenida Harry Forssell",
            numero: "654",
            bairro: "Jardim Sabaúna",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "C", // A, B, C, D
            gravidade: 'U', //U, G, N, ML;
            status: "fechado",
            logradouro: "Rua Emídio de Souza",
            numero: "836",
            bairro: "Jardim Oásis",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "C", // A, B, C, D
            gravidade: 'G', //U, G, N, ML;
            status: "fechado",
            logradouro: "Avenida Flacides Ferreira ",
            numero: "724",
            bairro: "Balneário São Jorge",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "C", // A, B, C, D
            gravidade: 'N', //U, G, N, ML;
            status: "fechado",
            logradouro: "Rua João Mariano",
            numero: "127",
            bairro: "Centro",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "C", // A, B, C, D
            gravidade: 'ML', //U, G, N, ML;
            status: "fechado",
            logradouro: "Rua Américo Nicolini",
            numero: "823",
            bairro: "Vila São Paulo",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "D", // A, B, C, D
            gravidade: 'U', //U, G, N, ML;
            status: "fechado",
            logradouro: "Rua Emídio de Souza ",
            numero: "980",
            bairro: "Jardim Oásis",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "D", // A, B, C, D
            gravidade: 'G', //U, G, N, ML;
            status: "fechado",
            logradouro: "Rua Américo Nicolini",
            numero: "526",
            bairro: "Vila Sao Paulo",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "D", // A, B, C, D
            gravidade: 'N', //U, G, N, ML;
            status: "fechado",
            logradouro: "Avenida Estados Unidos",
            numero: "754",
            bairro: "Jardim São Fernando",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: "D", // A, B, C, D
            gravidade: 'ML', //U, G, N, ML;
            status: "fechado",
            logradouro: "Rua Manoel Ribeiro dos Santos",
            numero: "356",
            bairro: "Jardim Oasis",
            cidade: "Itanhaem",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        }
    ];

    const ambulancia = [{
            tipo: 'A', //A, B, C, D
            status: 'Disponível', // Disponível, Indisponível
            logradouro: "Rua Humberto Ladalardo",
            numero: "400",
            bairro: "Savoy",
            cidade: "Itanhaém",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: 'A', //A, B, C, D
            status: 'Indisponível', // Disponível, Indisponível
            logradouro: "Avenida Tietê",
            numero: "158",
            bairro: "Suarão",
            cidade: "Itanhaém",
            cep: "11740-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: 'B', //A, B, C, D
            status: 'Disponível', // Disponível, Indisponível
            logradouro: "Avenida Brasil",
            numero: "613",
            bairro: "Guilhermina",
            cidade: "Praia Grande",
            cep: "11701-635",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: 'B', //A, B, C, D
            status: 'Indisponível', // Disponível, Indisponível
            logradouro: "Rua Pajé",
            numero: "255",
            bairro: "Vila Tupi",
            cidade: "Praia Grande",
            cep: "11703-260",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: 'C', //A, B, C, D
            status: 'Disponível', // Disponível, Indisponível
            logradouro: "Rua Carol Gomes",
            numero: "2075",
            bairro: "Bal São Jo Batista II",
            cidade: "Peruibe",
            cep: "11750-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: 'C', //A, B, C, D
            status: 'Indisponível', // Disponível, Indisponível
            logradouro: "Rua João Sábino",
            numero: "744",
            bairro: "Bal Arpoador",
            cidade: "Peruibe",
            cep: "11750-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: 'D', //A, B, C, D
            status: 'Disponível', // Disponível, Indisponível
            logradouro: "Rua Braulo Ferreira Souto",
            numero: "410",
            bairro: "Balneário Itaóca",
            cidade: "Monguaguá",
            cep: "11730-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        },

        {
            tipo: 'D', //A, B, C, D
            status: 'Indisponível', // Disponível, Indisponível
            logradouro: "Rua Alcídes dos Santos Dias",
            numero: "299",
            bairro: "Bal Itaóca",
            cidade: "Monguaguá",
            cep: "11730-000",
            estado: 'São Paulo',
            pais: 'Brasil'
        }
    ];
}