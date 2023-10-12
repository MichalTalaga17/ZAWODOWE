class parki {
    static ilość_parków = 0;
    static suma_lat = 0;
    constructor(nazwa, ilość_drzew, powierzchnia, wiek) {
        this.nazwa = nazwa;
        this.ilość_drzew = ilość_drzew;
        this.powierzchnia = powierzchnia;
        this.wiek = wiek;
        parki.ilość_parków++;
        parki.suma_lat = parki.suma_lat + wiek;
    }
    gęstość() {
        let gestosc = this.ilość_drzew / this.powierzchnia;
        console.log(
            `Gęstość drzew w parku ${this.nazwa}m to ${gestosc.toFixed(1)} drzew na kilometr kwadratowy`
        );
        console.log("\n");
    }
    static średni_wiek() {
        console.log(
            `Sredni wiek wszystkich parków to ${(parki.suma_lat/parki.ilość_parków).toFixed(1)} lat`);
        console.log("\n");
    }
    static więcej_niż(...elementy) {
        console.log("Parki, które mają przynajmniej 2000 drzew to:");
        for (let el of elementy) {
            if (el.ilość_drzew > 2000) {
                console.log(`\t - Park ${el.nazwa}`);
            }
        }
        console.log("\n");
    }
    static najstarszy_park(...elementy) {
        let wiek_najstarszego_parku = 0;
        let najstarszy_park;
        for (let el of elementy) {
            if (el.wiek > wiek_najstarszego_parku) {
                wiek_najstarszego_parku = el.wiek;
                najstarszy_park = el.nazwa;
            }
        }
        console.log(`Najstarszy park to park ${najstarszy_park}, ma ${wiek_najstarszego_parku} lat`);
        console.log("\n");
    }
    static największy_park(...elementy) {
        let powierzchnia_największego_parku = 0;
        let największy_park;
        for (let el of elementy) {
            if (el.powierzchnia > powierzchnia_największego_parku) {
                powierzchnia_największego_parku = el.powierzchnia;
                największy_park = el.nazwa;
            }
        }
        console.log(
            `Nawiększy park to park ${największy_park}, ma ${powierzchnia_największego_parku} kilometrów kwadratowych`
        );
        console.log("\n");
    }
}

class ulice {
    static długość_ulic = 0;
    static ilość_ulic = 0;
    constructor(nazwa, długość, wielkość, rok_powstania) {
        this.nazwa = nazwa;
        this.długość = długość;
        this.wielkość = wielkość;
        this.rok_powstania = rok_powstania;
        ulice.ilość_ulic++;
        ulice.długość_ulic = ulice.długość_ulic + długość;
    }
    static długość_wszystkich_ulic() {
        console.log(`Długość wszystkich ulic w mieście to ${ulice.długość_ulic} kilometrów`);
        console.log("\n");
    }
    info() {
        console.log(
            `Informacje o ulicy ${this.nazwa}: \n \t - wielkość : ${this.wielkość} \n \t - rok powstania : ${this.rok_powstania}`
        );
        console.log("\n");
    }

    static średnia_długość_ulic() {
        console.log(
            `Średnia długość ulic w mieście to ${(ulice.długość_ulic/ulice.ilość_ulic).toFixed(1)} kilometrów`
        );
        console.log("\n");
    }
    static znajdź_najdłuższą_ulicę(...elementy) {
        let długość_najdłuższej_ulicy = 0;
        let najdłuższa_ulica;
        for (let el of elementy) {
            if (el.długość > długość_najdłuższej_ulicy) {
                długość_najdłuższej_ulicy = el.długość;
                najdłuższa_ulica = el.nazwa;
            }
        }
        console.log(
            `Najdłuższą ulicą jest ulica ${najdłuższa_ulica}, ma długość ${długość_najdłuższej_ulicy} kilometrów`
        );
        console.log("\n");
    }
}


parkZielony = new parki("Zielony", 6437, 23, 64);
parkŻółty = new parki("Żółty", 5342, 43, 87);
parkCzarny = new parki("Czarny", 432, 25, 20);
parkCzerwony = new parki("Czerwony", 1654, 76, 54);
ulicaDługa = new ulice("Długa", 14, "wielka", 1949);
ulicaSzeroka = new ulice("Szeroka", 2.7, "mała", 2014);
ulicaCiemna = new ulice("Ciemna", 6, "duża", 1958);
ulicaUśmiechnięta = new ulice("Uśmiechnięta", 4.2, "średnia", 1899);
console.log("\t\t\t\tMETODY PODSTAWOWE")
parkZielony.gęstość();
parkCzerwony.gęstość();
parki.średni_wiek();
parki.więcej_niż(parkZielony, parkŻółty, parkCzarny, parkCzerwony);
ulice.długość_wszystkich_ulic();
ulicaSzeroka.info();
ulicaCiemna.info();

console.log("\n\t\t\t\tMETODY DODATKOWE");
parki.najstarszy_park(parkZielony, parkŻółty, parkCzarny, parkCzerwony);
parki.największy_park(parkZielony, parkŻółty, parkCzarny, parkCzerwony);
ulice.średnia_długość_ulic();
ulice.znajdź_najdłuższą_ulicę(ulicaSzeroka, ulicaUśmiechnięta, ulicaDługa, ulicaCiemna);
console.log("\t\t\t\t\t\t\t© Michał Talaga")