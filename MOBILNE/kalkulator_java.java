

import java.util.Random;

class Dzialanie {
    int a;
    int b;
    int wynik;
    char znak;
    Random r = new Random();
    public Dzialanie() {
        a = r.nextInt(100);
        b = r.nextInt(100);
        znak = (char) (r.nextInt(4) + 1);
        switch (znak) {
            case 1:
                wynik = a + b;
                break;
            case 2:
                wynik = a - b;
                break;
            case 3:
                wynik = a * b;
                break;
            case 4:
                wynik = a / b;
                break;
        }
    }
    public String toString() {
        return a + " " + znak + " " + b + " = " + wynik;
    }
}


public class kalkulator_java {
    public static void main(String[] args) {
        //wywołaj klassę działanie 10 razy, wywołaj kade działanie i wypisz to string
        Dzialanie[] tab = new Dzialanie[10];
        for (int i = 0; i < 10; i++) {
            tab[i] = new Dzialanie();
            System.out.println(tab[i].toString());
        }

        
    }
}
