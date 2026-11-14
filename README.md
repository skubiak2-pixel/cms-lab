# Mini Projekt 1 (MP1) – FireNet IT

## 1. Opis firmy (Karta MP1)
* **Nazwa firmy:** FireNet IT Sp. z o.o.
* **Branża i oferta:** Kompleksowe usługi informatyczne i teletechniczne dla biznesu. Projektowanie, montaż oraz serwis sieci strukturalnych LAN/Wi-Fi, systemów sygnalizacji pożaru (SSP/PPOŻ), oddymiania, kontroli dostępu (KD) oraz dedykowanych aplikacji webowych wspierających utrzymanie ruchu i bezpieczeństwo obiektów.
* **Grupa docelowa:** Zarządcy centrów logistycznych, dyrektorzy techniczni zakładów produkcyjnych, kierownicy obiektów biurowych oraz generalni wykonawcy inwestycji budowlanych w Polsce.

## 2. Persony
### Persona 1: Marek Kowalski (44 lata) – Kierownik Utrzymania Ruchu w centrum logistycznym
* **Urządzenie:** Laptop służbowy (15", przeglądarka Chrome, praca w biurze na terenie obiektu).
* **Cel:** Szuka certyfikowanego wykonawcy do zaprojektowania i wdrożenia systemu sygnalizacji pożaru (SSP) wraz z integracją sieciową w nowej hali magazynowej oraz zapewnienia stałego serwisu i przeglądów okresowych.
* **Problem:** Rozproszenie wykonawców – osobna firma od sieci IT i osobna od zabezpieczeń PPOŻ, co powoduje opóźnienia przy odbiorach Państwowej Straży Pożarnej.
* **Oczekiwana akcja (CTA):** Wysłanie zapytania przez formularz kontaktowy o audyt obiektu i wycenę wdrożenia („Zamów audyt i wycenę”).

### Persona 2: Katarzyna Wiśniewska (36 lat) – Zarządca nieruchomości biurowych
* **Urządzenie:** Smartfon (iOS/Android, szybkie sprawdzanie ofert w terenie).
* **Cel:** Potrzebuje stałej opieki serwisowej IT oraz modernizacji centrali pożarowej i kontroli dostępu w zarządzanym biurowcu.
* **Problem:** Brak szybkiej reakcji obecnego serwisu na awarie oraz trudny kontakt z działem technicznym.
* **Oczekiwana akcja (CTA):** Bezpośrednie połączenie telefoniczne lub szybkie zostawienie kontaktu ze strony głównej.

## 3. Mapa strony (Sitemap)
1. **Strona główna** (Hero + CTA, 3 filary oferty, opinie klientów)
2. **Oferta**
   * 2.1. Systemy Sygnalizacji Pożaru (SSP / PPOŻ)
   * 2.2. Infrastruktura IT, Sieci LAN i Kontrola Dostępu
3. **O nas** (Doświadczenie, uprawnienia projektowe i serwisowe, zespół)
4. **Realizacje** (Wdrożenia w halach magazynowych, biurowcach i przemyśle)
5. **Aktualności** (Poradnik techniczny i zmiany w przepisach PPOŻ/IT – 2 kategorie, 3 wpisy)
6. **Kontakt** (Dane firmy, telefon alarmowy serwisu, formularz kontaktowy)
7. **Polityka prywatności** (Informacje RODO i cookies)

## 4. Uzasadnienie wyboru CMS
Wybieram **WordPress** (model self-hosted), ponieważ według danych W3Techs (październik 2026) napędza on 40,2% wszystkich witryn i posiada 58,7% udziału w rynku CMS, co gwarantuje stabilność, bezpieczeństwo oraz pełną niezależność od dostawcy (brak vendor lock-in typowego dla platform SaaS jak Wix). W przeciwieństwie do Shopify, który służy do handlu detalicznego i generuje stałe opłaty abonamentowe, firma świadczy specjalistyczne usługi B2B (projekty SSP, sieci LAN, serwis), gdzie kluczowe są formularze ofertowe, baza realizacji oraz baza wiedzy. Z kolei wdrożenie Drupala (0,6% rynku) byłoby zbyt kosztowne i skomplikowane dla witryny o 7 podstronach, natomiast edytor blokowy WordPressa pozwoli inżynierom i redaktorom firmy samodzielnie publikować aktualności o przeglądach i przepisach bez znajomości programowania.

## 5. Użycie AI
* **Narzędzie:** Gemini (asystent AI).
* **Zakres użycia:** Wygenerowanie struktury `blueprint.json`, szkicu person oraz opisów oferty branżowej do dokumentacji `README.md`.
* **Poprawki ręczne:** Weryfikacja składni plików `docker-compose.yml` i `blueprint.json`, samodzielne zbudowanie struktury podstron, bloków, menu nawigacyjnego oraz przeprowadzenie audytu dostępności WCAG w WordPressie.
