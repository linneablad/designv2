Utvärdering av webbplatsers laddningstid och användbarhet
=======================

Syftet med uppgiften var att välja ut tre olika webbplatser och testa dem för att mäta hur snabbt de laddas och om de innehåller några saker som kan förbättras med tanke på laddningstid och användbarhet.


Urval
-----------------------
Tre webbplatser valdes ut inom kategorin klockor/smycken. Urvalet gjordes genom att söka på *klockor* på Google och välja ut de tre första webbplatserna som kom upp i sökresultatet.

Den första webbplatsen var [Uret](https://www.uret.se), den andra var [Klockmaster](https://www.klockmaster.se/) och den tredje var [Ur&Penn](https://www.uropenn.se/).


Metod
-----------------------
[Google PageSpeed](https://developers.google.com/speed/pagespeed/insights/) användes för att se vilket betyg och tips som visas för att prestandaoptimera varje webbplats. Devtools användes för att mäta sidans laddningstid, totala storlek samt antalet resurser som laddas.


Resultat
-----------------------

###Uret
[FIGURE src="image/uret.jpg?w=600"  caption="Urets webbplats"]

Mätningar med devtools och pagespeed gjordes för sidorna [Uret startsida](https://www.uret.se), [Uret top 100 bästsäljare](https://www.uret.se/top-100-bastsaljare-c-5109.html) och [Uret outlet](https://www.uret.se/outlet-c-6391.html). [Här finns rådatan](https://docs.google.com/spreadsheets/d/1IHjLkWp9HBpAdqm2ME0zpzs33vZR9k2iBInz6zcw5K4/edit?usp=sharing).

Sidorna hade en total storlek på 4.1, 4.2 och 4.4 MB, antal resurser på 91, 92 och 147 samt en laddningstid på 2.75, 3.26 och 4.73 s för de tre sidorna.

Enligt PageSpeed hade sidorna betygen 23, 37 och 41 för mobila enheter och 74, 88 och 92 för datorer.

För att förbättra sig kan webbplatsen använda bilder med rätt storlek, skicka bilder i modernare bildformat som JPEG 2000, JPEG XR och WebP vilka ger bättre komprimering än PNG eller JPEG, skjuta upp inläsningen av bilder som inte visas på skärmen, ta bort resurser som blockerar renderingen, minska svarstiderna från servern (tid till första byte), ta bort oanvänd CSS-kod, se till att all text förblir synlig medan webbteckensnitten läses in, skicka statiska tillgångar med en effektiv cachelagringspolicy, undvika ett onödigt stort DOM-träd och minska tiden det tar att tolka, kompilera och köra JS-kod.

###Ur&Penn
[FIGURE src="image/uropenn.jpg?w=600" caption="Ur&Penns webbplats"]

Mätningar med devtools och pagespeed gjordes för sidorna [Ur&Penn startsida](https://www.uropenn.se), [Ur&Penn alla klockor](https://www.uropenn.se/alla-klockor) och [Ur&Penn outlet](https://www.uropenn.se/guldoutlet). [Här finns rådatan](https://docs.google.com/spreadsheets/d/1PgVYkSMIvqYL5IRIptm5ubpwcfqPBH4RcrJwDjuwvJs/edit?usp=sharing).

Sidorna hade en total storlek på 6.2, 7.1 och 7.8 MB, antal resurser på 141, 173 och 176 samt en laddningstid på 1.98, 2.14 och 2.18 s för de tre sidorna.

Enligt PageSpeed hade sidorna betygen 22, 24 och 26 för mobila enheter och 64, 65 och 69 för datorer.

För att förbättra sig kan webbplatsen läsa in viktiga resurser i förväg, koda bilder effektivt, skicka bilder i modernare bildformat som JPEG 2000, JPEG XR och WebP vilka ger bättre komprimering än PNG eller JPEG, använda bilder med rätt storlek, skjuta upp inläsningen av bilder som inte visas på skärmen, ta bort resurser som blockerar renderingen, minska svarstiderna från servern (tid till första byte), ta bort oanvänd CSS-kod, se till att all text förblir synlig medan webbteckensnitten läses in, skicka statiska tillgångar med en effektiv cachelagringspolicy, undvika ett onödigt stort DOM-träd, minska tiden det tar att tolka, kompilera och köra JS-kod samt undvika enorm nätverksbelastning.

###Klockmaster
[FIGURE src="image/klockmaster.jpg?w=600" caption="Klockmasters webbplats"]

Mätningar med devtools och pagespeed gjordes för sidorna [Klockmaster startsida](https://www.klockmaster.se), [Klockmaster alla klockor](https://www.klockmaster.se/klockor) och [Klockmaster outlet](https://www.klockmaster.se/outlet). [Här finns rådatan](https://docs.google.com/spreadsheets/d/1XgY6VEN9PE0lWOfOJ97Zsk4bggjFgtzcOXYPv0py5Ps/edit?usp=sharing).

Sidorna hade en total storlek på 4.6, 6.6 och 7.6 MB, antal resurser på 156, 197 och 208 och en laddningstid på 2.49, 2.65 och 3.07 s för de tre sidorna.

Enligt PageSpeed hade sidorna betygen 12, 14 och 26 för mobila enheter samt 42, 69 och 70 för datorer.

För att förbättra sig kan webbplatsen koda bilder effektivt, skicka bilder i modernare bildformat som JPEG 2000, JPEG XR och WebP vilka ger bättre komprimering än PNG eller JPEG, använda bilder med rätt storlek, skjuta upp inläsningen av bilder som inte visas på skärmen, ta bort resurser som blockerar renderingen, minska svarstiderna från servern (tid till första byte), ta bort oanvänd CSS-kod, se till att all text förblir synlig medan webbteckensnitten läses in, skicka statiska tillgångar med en effektiv cachelagringspolicy, undvika ett onödigt stort DOM-träd, minska tiden det tar att tolka, kompilera och köra JS-kod samt undvika enorm nätverksbelastning.


Analys
-----------------------
Alla webbplatser fick dåliga betyg på PageSpeeds mätningar. Den webbplats med högst poäng var Uret med ett medelvärde på 33 poäng för mobila enheter och 84 poäng för datorer. Ur&Penn hamnade på andra plats med ett medelvärde på 24 poäng för mobila enheter och 66 för datorer. Klockmaster hade lägst betyg med ett medelvärde på 17 för mobila enheter och 60 för datorer.

Webbplatserna hade många förbättringsåtgärder vilka de flesta även var samma för alla tre. De förbättringsåtgärdena som de delade var: "skicka bilder i modernare bildformat som JPEG 2000, JPEG XR och WebP vilka ger bättre komprimering än PNG eller JPEG, använd bilder med rätt storlek, skjut upp inläsningen av bilder som inte visas på skärmen, ta bort resurser som blockerar renderingen, minska svarstiderna från servern (tid till första byte), ta bort oanvänd CSS-kod, se till att all text förblir synlig medan webbteckensnitten läses in, skicka statiska tillgångar med en effektiv cachelagringspolicy, undvik ett onödigt stort DOM-träd samt minska tiden det tar att tolka, kompilera och köra JS-kod". Uret hade inte förbättringsåtgärdena *koda bilder effektivt* samt *undvik enorm nätverksbelastning* vilket de två andra webbplatserna hade. Ur&Penn hade en förbättringsåtgärd som inte någon annan webbplats hade vilket var *läs in viktiga resurser i förväg*. Eftersom de delade så många förbättringsåtgärder så kan det betyda att det finns många webbplatser som också skulle kunna förbättras på liknande sätt.

Trots att webbplatserna fick dåliga betyg från PageSpeed och hade många förbättringsåtgärder upplever jag inte dem som långsamma. Uret hade laddningstider på 4.73 s, 3.26 s och 2.75 s. Ur&Penn hade laddningstider på 2.18 s 2.14 s och 1.98 s. Klockmaster hade laddningstider på 3.07 s, 2.65 s och 2.49 s. Uret hade därmed högst laddningstid och Ur&Penn hade lägst. Jag tror att om laddningstiden är över 6 sekunder så skulle jag uppleva sidan som långsam vilket innebär att dessa tre webbplatser klarar mitt gränsvärde. Dock gjorde jag mätningarna på en dator så om jag skulle gjort mätningarna på en mobil enhet kanske jag skulle ha en annan uppfattning.


Referenser
-----------------------
Google PageSpeed. [https://developers.google.com/speed/pagespeed/insights/](https://developers.google.com/speed/pagespeed/insights/)


Om rapporten
-----------------------
Den här rapporten har utförts och författats av Linnea Blad den 1 december 2019 som en del av kursen *Teknisk webbdesign och användbarhet* på Blekinge Tekniska Högskola.
