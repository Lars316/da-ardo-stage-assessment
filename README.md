# Opdracht: energieprijzen-app

Leuk dat je bij ons langskomt! Deze opdracht maak je thuis, en je presenteert 'm aan ons tijdens het kennismakingsgesprek.

## Wat we belangrijk vinden (lees dit eerst)

We zijn **niet** op zoek naar een perfecte, afgeronde app. We willen vooral zien **hoe je denkt** en **hoe je je keuzes uitlegt**. Dus:

- Het hoeft **niet af** te zijn. Kom je er niet helemaal uit? Prima — vertel ons straks waar je tegenaan liep en wat je zou doen met meer tijd.
- Loop je tegen iets aan dat niet duidelijk in de opdracht staat? **Maak zelf een keuze en schrijf op waarom.** Dat is precies wat we willen zien.
- Besteed er **maximaal ongeveer 4 uur** aan. Niet af binnen die tijd is geen probleem.

## De opdracht

Je bouwt een kleine webapp die energieprijzen laat zien.

### 1. Basis (dit is het startpunt)

Toon op een pagina een lijstje met de energieprijs per uur. In dit repo vind je een voorbeeldbestand `energieprijzen-voorbeeld.json` met de prijzen van één dag (24 uur). Gebruik die data om je lijstje te vullen.

### 2. Uitbreiding: de echte prijzen ophalen

Vervang de voorbeelddata door de **echte prijzen die je live ophaalt** bij de EnergyZero API. De API geeft dezelfde structuur terug als het voorbeeldbestand, dus als de basis werkt, hoef je "alleen" de databron te vervangen.

De publieke API vind je hier als startpunt:
`https://api.energyzero.nl/v1/energyprices` (per uur, prijzen in euro per kWh)

Hoe je precies de juiste dag opvraagt, mag je zelf uitzoeken — dat hoort erbij.

### 3. Verder uitbreiden (zover als je komt)

Kom je hier? Mooi. Een paar ideeën, kies zelf wat je leuk vindt:

- Laat zien wat op dit moment het **goedkoopste** en het **duurste** uur van de dag is.
- Maak er een **grafiekje** van in plaats van een lijstje.
- Bedenk zelf **één extra functie** die jij nuttig zou vinden.

## Dingen om zelf over na te denken

Een paar situaties staan bewust níet uitgewerkt. Kom je ze tegen, maak dan een keuze en leg 'm uit:

- Hoe toon je de prijzen "overzichtelijk"? Een tabel, een lijst, een grafiek — jij kiest.
- Wat gebeurt er als de prijzen voor een dag nog niet beschikbaar zijn?
- Wat laat je zien als het ophalen bij de API misgaat?

Er is hier geen "goed" antwoord. We willen zien welke keuze jij maakt en waarom.

## Techniek

- Gebruik de programmeertaal en tools waar jij je prettig bij voelt. **De taal telt niet mee in de beoordeling.**
- Heb je een voorkeur van ons nodig? Wij werken graag met **Laravel (PHP)** of een **simpele Node.js-app**. Kun je daar iets mee, leuk — maar het is geen eis.

## AI-tools

Je mag **gerust AI-tools gebruiken** (zoals GitHub Copilot, ChatGPT of Claude). Wij doen dat zelf ook.

Belangrijk: tijdens het gesprek vragen we je om je code uit te leggen en om **live een kleine aanpassing** te doen. Zorg dus dat je begrijpt wat er in je code gebeurt, ook als AI je geholpen heeft.

## Inleveren

1. **Fork** dit repo naar je eigen GitHub-account.
2. Maak je app in je fork.
3. Open een **pull request** terug naar dit repo.
4. Zet in de **omschrijving van je pull request** kort:
   - welke keuzes en aannames je hebt gemaakt (en waarom);
   - waar je tegenaan liep of wat nog niet af is;
   - hoe we je app kunnen starten.

Lukt de pull request niet? Lever dan gerust een **zip-bestand** in — daar rekenen we je niet op af.

Graag inleveren **uiterlijk 1 à 2 dagen vóór het gesprek**, zodat we het rustig kunnen bekijken.

## Tijdens het gesprek

We nemen samen je app door. Je laat zien wat je gemaakt hebt, legt een paar keuzes uit, en we vragen je live een kleine wijziging te doen. Geen strikvragen — we willen gewoon zien hoe je werkt en meedenkt.

Veel plezier, en tot snel!