
let app = Vue.createApp ({
    data ( ) {
        return {
            post: [
                {titolo:"LA NATURA", 
                testo:"Un raggio di luce che illumina una foglia, un’angolazione che abbiamo trovato per caso che ci regala una geometria perfetta dei tronchi degli alberi o un paesaggio (ecco qua il precedente articolo sulla fotografia di paesaggio) davanti ai nostri occhi. O ancora meglio le nuvole, che non sono mai uguali, sopra un ruscello dal quale sgorga l’acqua fresca, circondato da verdi campi. Tramite una singola fotografia possiamo rivedere ciò che avevamo davanti ai nostri occhi, e se la fotografia è fatta bene (seguendo le corrette linee guida) allora possiamo anche avere l’occasione di rivivere le stesse emozioni e sensazioni. Tengo sempre a precisare che, dopo aver imparato le tecniche fotografiche, il “difficile” in Fotografia è saper unire queste tecniche alla perfezione al fine di realizzare non solo una fotografia, ma anche immortalare le emozioni, le sensazioni e in maniera più azzardata, i suoni, gli odori e il vento.", 
                foto: "../assets/img/blog/natura.jpg",
                data: "18 Marzo 2022"
                },
                
                {titolo:"PARIGI", 
                testo:" Per chi ama la fotografia, Parigi dà soddisfazioni orgasmiche. Se avete già visto i musei mainstream e cercate qualcosa di nuovo, o se volete approcciare in modo diverso l’immensa cultura di questa città, lo avete trovato. Nel mio ultimo viaggio a Parigi, in cui con una sonora botta di fortuna ho scambiato casa, ho avuto sei giorni tutti per andare in giro alla scoperta di spazi dedicati alla fotografia. E Parigi offre tantissimo. Del resto, nomi come Henri Cartier Bresson, Robert Doisneau, Jacques Henri Lartigue, Willy Ronis sono solo alcuni dei mostri sacri francesi che hanno fatto la storia della fotografia. E Parigi le rende omaggio sia con musei e gallerie, sia con librerie e negozietti ad hoc.", 
                foto: "../assets/img/blog/parigi.jpg",
                data: "28 Maggio 2022"
                },
            ],
            
        }
    },
});    
    
app.mount('#app')