# aQ. Professor assistent - README del Projecte

## Descripció del Projecte

Aquest projecte, anomenat "aQ. Professor assistent", té com a objectiu desenvolupar una aplicació web utilitzant PHP, MySQL i el framework Laravel. L'aplicació està dissenyada per ajudar els professors en l'organització i gestió de les seves Programacions Didàctiques, que inclouen Unitats Formatives (UF), Resultats d'Aprenentatge (RA), criteris d'avaluació i continguts.

## Objectius del Projecte

1. **Sistema de Login**: Implementació d'un sistema d'autenticació per a professors i administradors.
2. **Gestió de Programacions Didàctiques**: Capacitat per crear, modificar i eliminar programacions.
3. **Gestió de Unitats Formatives (UF)**: Funcionalitat per a l'administració de les UF, incloent la creació, modificació i eliminació.
4. **Gestió de Resultats d'Aprenentatge (RA)**: Eines per a gestionar els RA dins de cada UF, incloent l'addició, modificació i eliminació dels criteris d'avaluació i continguts associats.
5. **Rols d'Usuari**: Diferenciació entre rols d'usuari: professor i administrador.
6. **Vista d'Administrador**: Capacitat de l'administrador per veure, crear, modificar i eliminar totes les programacions i els seus components.
7. **L’administrador pot crear un Mòdul amb els seus RA, Criteris i Continguts**.
8. **El professor pot crear una programació del mòdul, afegir activitats**.
9. **S’ha de validar que totes les activitats de cada UF sumen el nombre d’hores correctes**.

## Requeriments Tècnics

- **Frontend**: Interfície d'usuari clara i responsiva.
- **Backend**: PHP i Laravel per a la lògica de l'aplicació.
- **Base de Dades**: MySQL per emmagatzemar dades de programacions, UF, RA, criteris d'avaluació i continguts.
- **Seguretat**: Implementació de mesures de seguretat per a protegir les dades d'usuari i el contingut de l'aplicació.

## Diagrama de Classes

El projecte s'organitza utilitzant les següents classes:

1. **Classe `Usuari`**: Representa els usuaris del sistema (professors i administradors).
2. **Classe `Mòdul`**: Representa una assignatura.
3. **Classe `UF` (Unitat Formativa)**: Defineix una unitat formativa dins d'un mòdul.
4. **Classe `RA` (Resultat d'Aprenentatge)**: Detalla els resultats d'aprenentatge per a cada UF.
5. **Classe `Criteri`**: Especifica els criteris d'avaluació per a cada RA.
6. **Classe `Contingut`**: Defineix els continguts associats a cada RA.
7. **Classe `Programació`**: Representa una programació didàctica completa.
8. **Classe `Activitat`**: Representa una activitat feta a classe.

## Guia de Desplegament (Deployment)

### Requisits Previs

- PHP instal·lat al teu servidor.
- Composer instal·lat per gestionar les dependències de Laravel.
- MySQL per a la base de dades.

### Passos per al Desplegament

1. Clona el repositori des de GitHub:

    ```bash
    git clone https://github.com/oriolmiro/programacions.git
    ```

2. Accedeix al directori del projecte:

    ```bash
    cd programacions
    ```

3. Instal·la les dependències de Laravel amb Composer:

    ```bash
    composer install
    ```

4. Copia l'arxiu de configuració i configura el teu entorn:

    ```bash
    cp .env.example .env
    ```

    Edita l'arxiu `.env` amb la configuració de la teva base de dades i altres detalls.

5. Genera la clau d'aplicació de Laravel:

    ```bash
    php artisan key:generate
    ```

6. Executa les migracions per crear les taules a la base de dades:

    ```bash
    php artisan migrate
    ```

7. Inicia el servidor de desenvolupament:

    ```bash
    php artisan serve
    ```

8. Accedeix a l'aplicació al teu navegador: [http://localhost:8000](http://localhost:8000)

Ara hauries de tenir l'aplicació desplegada i preparada per a la seva utilització.
