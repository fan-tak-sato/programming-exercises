FRAMEWORK

Nel codice di base, il controller con debug = true è sempre dummy, mentre l'azione è test.
Ho ottimizzato il meccanismo di base del controller per farlo funzionare senza file .htaccess.
Nell'URL compare index.php oltre che al controller e la action.

Non ho utilizzato form token per la sicurezza poichè l'applicazione è multi step, anche se è possibile utilizzarli comunque per una maggior sicurezza.

La validazione dati del form inserimento dati è lato server.
Utilizzo il campo email e l'attributo required in HTML5 che però non viene interpretato da tutti i browser, Explorer in primis.
Ho abbellito l'aspetto visuale utilizzando il CSS di Bootstrap3 direttamente dal CDN.

TESTING

Il codice del framework non è coperto da test unitari. Sarebbe possibile scrivere dei test in PHPUnit per ottimizzare il codice e renderlo più solido.
Occorrerebbero poi dei test funzionali e\o di automazione browser per verificare il comportamento dell'applicazione, rendendo così il prodotto più completto e di qualità.


RICERCA ERRORI

La prima assegnazione della variabile $c non incrementa di 1 la variabile $b in input con $b++.
Ho invece assegnato $c = --$b.

Nella seconda parte di codice, l'ultima condizione non verificata è $b=$v, corretta in $b == $v.


OTTIMIZZAZIONE CODICE

Ho effettuato un refactoring in alcune parti ed eliminato la classe che veniva usata per stampare dei dati.
Il codice è molto più corto ed il risultato è lo stesso.
