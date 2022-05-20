let app = Vue.createApp ({
    data ( ) {
        return {
            pagina1: [
                {
                id: 1,
                titolo:"LA NATURA", 
                testo:"Un raggio di luce che illumina una foglia, un’angolazione che abbiamo trovato per caso che ci regala una geometria perfetta dei tronchi degli alberi o un paesaggio (ecco qua il precedente articolo sulla fotografia di paesaggio) davanti ai nostri occhi. O ancora meglio le nuvole, che non sono mai uguali, sopra un ruscello dal quale sgorga l’acqua fresca, circondato da verdi campi. Tramite una singola fotografia possiamo rivedere ciò che avevamo davanti ai nostri occhi, e se la fotografia è fatta bene (seguendo le corrette linee guida) allora possiamo anche avere l’occasione di rivivere le stesse emozioni e sensazioni. Tengo sempre a precisare che, dopo aver imparato le tecniche fotografiche, il “difficile” in Fotografia è saper unire queste tecniche alla perfezione al fine di realizzare non solo una fotografia, ma anche immortalare le emozioni, le sensazioni e in maniera più azzardata, i suoni, gli odori e il vento.", 
                foto: "../assets/img/blog/natura.jpg",
                data: "18 Gennaio 2022"
                },
                
                {
                id: 2,
                titolo:"PARIGI", 
                testo:" Per chi ama la fotografia, Parigi dà soddisfazioni orgasmiche. Se avete già visto i musei mainstream e cercate qualcosa di nuovo, o se volete approcciare in modo diverso l’immensa cultura di questa città, lo avete trovato. Nel mio ultimo viaggio a Parigi, in cui con una sonora botta di fortuna ho scambiato casa, ho avuto sei giorni tutti per andare in giro alla scoperta di spazi dedicati alla fotografia. E Parigi offre tantissimo. Del resto, nomi come Henri Cartier Bresson, Robert Doisneau, Jacques Henri Lartigue, Willy Ronis sono solo alcuni dei mostri sacri francesi che hanno fatto la storia della fotografia. E Parigi le rende omaggio sia con musei e gallerie, sia con librerie e negozietti ad hoc.", 
                foto: "../assets/img/blog/parigi.jpg",
                data: "28 Febbraio 2022"
                },

                {
                id: 3,
                titolo:"FOOD PHOTOGRAPHY", 
                testo:" La food photography è sicuramente una tecnica molto divertente sulla quale dar sfogo la nostra passione per la fotografia! Tutti i giorni abbiamo modo di sperimentare tecniche diverse e realizzare foto potenzialmente interessanti! Non è tuttavia una fotografia scontata, nasconde invece parecchie insidie — specie per quanto riguarda l’illuminazione — che se non vengono gestite nel modo adeguato portano a realizzare dei clamorosi disastri. Se non sei un fotografo professionista è importante che tu comprenda alcune cose basilari ed affronti questa tecnica fotografica partendo dal basso, in modo semplice. Per cominciare devi comprendere che alla fine è tutta questione di luce.", 
                foto: "../assets/img/blog/piatto.jpg",
                data: "19 Marzo 2022"
                },

            ],

            pagina2: [
                {
                id: 4,
                titolo:"FOTOGRAFIA SPORTIVA", 
                testo:"Per gli appassionati di sport, non c’è niente di più emozionante che ammirare gli atleti giocare il loro gioco. La vista del terreno di gioco, del campo di golf, l’emozione, l’attesa. Tutto questo, combinato con la fotografia digitale, è in grado di fornire qualche incredibile opportunità fotografica. Tuttavia non ci si deve limitare semplicemente a puntare la fotocamera verso il campo, l’atleta o l’attrezzo e scattare. La fotografia sportiva è decisamente più complicata. La fotografia digitale sportiva può essere molto impegnativa, soprattutto per il movimento che è sempre presente. Per riuscire, è necessaria una buona pianificazione, qualche regola pratica e un po’ di esercizio.", 
                foto: "../assets/img/blog/sport.jpg",
                data: "16 Aprile 2022"
                },
                
                {
                id: 5,
                titolo:"FOTO FAMIGLIA", 
                testo:"Nella maggior parte delle famiglie, c'è sempre la stessa persona dietro la fotocamera: nel mio caso era mio padre. Assicurati di alternarti con altri dietro alla fotocamera per avere la possibilità di essere anche tu parte delle foto poiché saranno ricordi importanti per i bambini, una volta cresciuti. Per realizzare un ritratto di famiglia, metti la fotocamera su un treppiede (oppure su una superficie stabile come un tavolo o una panchina al parco) e utilizza l'autoscatto. Potresti anche dare la fotocamera ai bambini e lasciare che siano loro a scattare. I bambini sono creativi per natura e possiamo imparare molto dalle loro composizioni spesso inaspettate. Coinvolgere i bambini nel processo creativo lo renderà un'attività divertente per tutta la famiglia, e possono avere idee meravigliose a cui tu non hai pensato. Questo potrebbe anche suscitare un interesse per la fotografia, potrebbe essere un hobby da fare insieme durante la loro infanzia e adolescenza, o potrebbe anche diventare la loro carriera in futuro", 
                foto: "../assets/img/blog/famiglia.jpg",
                data: "28 Maggio 2022"
                },

            ],
            
        }
    },
});    
    
app.mount('#app')