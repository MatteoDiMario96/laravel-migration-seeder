//*****Esercizio***//

Fase 1
Creiamo una tabella trains e relativa Migration
Ogni treno dovrà avere:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato
È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto ;) ...
Inserite i dati tramite PhpMyAdmin (domani vedremo come automatizzare il processo).
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.


//***Logica****/
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- Prima di tutto la stavo pensando come un sito che ha una pagina home che manda a una lista di treni che cliccando sulla singola card manda al singolo treno. 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- Dopo aver fatto i soliti passaggi
    - copiare file .env
        - dare un nome al db
        - cambiare password db
    - npm i, composer install
    - composer artisan key:generate
    - npm run dev
    - php artisan serve
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- Mi faccio una migrazione php artisan migrate per far creare il database se non esistente.
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    (Questo mi farà da controller sia per l'index sia per lo show)
- Creo un controller TrainController

- Creo un model Train 

- Creo una migrazione crate_trains_table
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- Andare nel file di migrazione e mettere tutto quello che è necessario 
    - Sicuramente da aggiungere qualcosa 
        - Da vedere un attimo 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- Aggiungere dati alla tabella 
    - Tramite SQL mi sembra la scelta migliore 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- Nella cartella views creiamo due cartelle guest e admin
    - La cartella trains 
        - Il file index.blade.php
        - Il file show.blade.php
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- Colleghiamo le view tramite ai controller alle rotte web ricodiamoci di dare nomi alle rotte.
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- Nel controller prendiamo dati dal db e ritorniamo le view e i dati compattati 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- Li visualizziamo nell'index con il foreach 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
- Nello show grazie alla funzione show solo con una variabile in teoria. 
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
