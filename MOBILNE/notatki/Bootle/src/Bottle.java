
public class Bottle {

    String nazwa;
    int pojemnosc;
    int poziom_zapelnienia;

    public Bottle(String nazwa,int pojemnosc, int poziom_zapelnienia) {
        this.nazwa = nazwa;
        this.pojemnosc = pojemnosc;
        this.poziom_zapelnienia = poziom_zapelnienia;
    }

    public Bottle() {
        this("",0, 0);
    }
    public void info(){
        System.out.println("Butelka " + nazwa + ": Pojemnosc: " + pojemnosc + " Wypełniona na poziomie: "
                + poziom_zapelnienia + " L");
    }

    public void wlej(int ilosc) {
        poziom_zapelnienia += ilosc;
        if (poziom_zapelnienia > pojemnosc) {
            poziom_zapelnienia = pojemnosc;
        }
        System.out.println("Teraz w butelce " + nazwa + " jest " + poziom_zapelnienia + " L");
    }

    public void wylej(int ilosc) {
        poziom_zapelnienia -= ilosc;
        if (poziom_zapelnienia < 0) {
            poziom_zapelnienia = 0;
            System.out.println("Teraz w butelce " + nazwa + " jest " + poziom_zapelnienia + " L");
        }
    }

    public void przelej(Bottle druga_butelka, int ilosc) {
        System.out.println("Przelewam " + ilosc + " L z butelki " + nazwa + " do butelki " + druga_butelka.nazwa);
        if (ilosc > poziom_zapelnienia) {
            System.out.println("Nie można przelewać więcej niż jest w butelce");
        }else {
            if (ilosc > druga_butelka.pojemnosc - druga_butelka.poziom_zapelnienia) {
                System.out.println("Za mała pojemność drugiej butelki");
            }
            else{
                wylej(ilosc);
                druga_butelka.wlej(ilosc);
            }
        }



    }
}
