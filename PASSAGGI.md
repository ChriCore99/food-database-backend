CREAZIONE MIGRATIONS

1. col comando (php artisan make:migration create_categories_table) creo in (database -> migrations) la migrazione delle "categorie" nella quale inserirò le colonne e i tipi di dato che esse dovranno contenere

2. col comando (php artisan make:migration create_edibles_table) creo in (database -> migrations) la migrazione delle "edibili" nella quale inserirò le colonne e i tipi di dato che esse dovranno contenere

3. col comando (php artisan make:migration create_unedibles_table) creo in (database -> migrations) la migrazione delle "non edibili" nella quale inserirò le colonne e i tipi di dato che esse dovranno contenere

4. col comando (php artisan make:migration create_recepies_table) creo in (database -> migrations) la migrazione delle "ricette" nella quale inserirò le colonne e i tipi di dato che esse dovranno contenere

5. col comando (php artisan migrate) lancio le varie migrazioni generando le tabelle nel DB

MODEL + RELAZIONI FRA TABELLE

1. col comando (php artisan make:migration add_foreign_key_category_id_to_edibles_table) creo in (database -> migrations) una nuova migrazione per il collegamento 1 a molti fra le tabelle "categorie" e "edibili"

2. scrivo il collegamento nella nuova migrazione le due tabelle per poi eseguirlo col comando (php artisan migrate)

3. creo poi in (app -> models) due model coi comandi (php artisan make:model Category) e (php artisan make:model Edible) da dover successivamente collegare

4. vado poi a modificare i due model appena creati per la relazione 1 a molti

5. col comando (php artisan make:migration create_edible_recipe_table) creo poi in (database -> migrations) la migrazione della tabella ponte "edible_recipe" per la relazione molti a molti

6. vado poi a collegare le due tabelle modificando la nuova migrazione e la lancio col comando (php artisan migrate)

7. creo poi in (app -> models) il model della tabella "recepies" col comando (php artisan make:model Recipe)

8. modifico poi i model "Edible" e "Recipe" per la relazione molti a molti

9. col comando (php artisan make:model Unedible) creo il model della tabella "non edibili"

SEEDER + FAKER

1. col comando (php artisan make:seeder CategorySeeder) creo in (database -> seeders) il seeder della tabella "categorie"

2. importo il model e le dipendenze del seeder, poi lo popolo con dei dati da lanciare successivamente

3. col comando (php artisan make:seeder UnedibleSeeder) creo in (database -> seeders) il seeder della tabella "non edibili"

4. importo il model e le dipendenze del seeder, poi lo popolo con dei dati da lanciare successivamente

5. dentro (database -> seeders -> DatabaseSeeder.php) creo un elenco dei vari seeder da lanciare in sequenza

6. col comando (php artisan db:seed) eseguo il "DatabaseSeeder" che lancerà tutti i seeder al suo interno oppure, se voglio cancellare tutti i dati già presenti nelle tabelle del DB, userò il comando (php artisan migrate:fresh --seed) per rilanciare sia le migration che i seeder

CARTELLA ADMIN + CONTROLLER

1. dentro (app -> http -> controllers) creo una tabella "admin" in cui inserirò i controller protetti dai controlli futuri

2. col comando (php artisan make:controller Admin/CategoryController) creo in (app -> http -> controllers -> admin) il controller collegato alla tabella "categorie"

3. col comando (php artisan make:controller Admin/EdibleController) creo in (app -> http -> controllers -> admin) il controller collegato alla tabella "edibili"

4. col comando (php artisan make:controller Admin/UnedibleController) creo in (app -> http -> controllers -> admin) il controller collegato alla tabella "non edibili"

5. col comando (php artisan make:controller Admin/RecipeController) creo in (app -> http -> controllers -> admin) il controller collegato alla tabella "ricette"

CREAZIONE CRUD + WIEWS

1. dentro (resources -> views -> admin) creo le cartelle, chiamate come le tabelle del DB, che conterranno poi i file (index/show/create/edit.blade.php)

2. creo quindi i file (index/show/create/edit.blade.php) vi inserisco il codice per visualizzarli in pagina

3. dentro (routes -> web.php) creo la rotta unica o le 7 rotte delle crud nel middleware per i controlli di sicurezza