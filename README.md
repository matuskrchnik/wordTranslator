Info:
  - Script ktory spravi z word dokumentu dvoj jazycny slovnik.

Potrebujes:
  - Web server WAMP, XAMPP, LAMP, MAMP atp.
  - GOOGLE API Kluc, navod tu >> https://translatepress.com/docs/automatic-translation/generate-google-api-key/
    - Ak nemas vytvoreny Billing Account tak si ho budes musiet vytvorit. Nebudes nic platit len proste google to tak ma osetrene. Potom si ho mozes zrusit.
  
Instalacia: 
  - rozbal zip do www zlozky tvojho web servera
  - v "config.php" zamen vygenerovany google api key
  - mozes si nastavit tiez vstup a vystup podla seba a taktiez aj dlzku slov od ktorych chces prekladat. Napr. ked nastavis premennu "WORD_LENGTH" na 5 tak slovo "this" ti neprelozi.
  
Spustenie:
  - ! pred spustenim zatvor dokumenty "zdroj.docx" a "hotovySlovnik.docx" !
  - zamen "zdroj.docx" svojim word suborom
  - localhost/wordTranslation-master (kedze sa vyuziva kniznica google translator a nepouzivam ziadny ajax tak to moze trvat dlhsie)

