#include <iostream>
#include <cmath>

using namespace std;

int NWD(int a, int b)
{
    if(b!=0)
        return NWD(b,a%b);

    return a;
}


void bin_to_dec(int n)
{
    int i=0;
    int dec=0;
    while(n!=0)
    {
        dec+=(n%10)*pow(2,i);
        n/=10;
        i++;
    }
    cout<<dec<<endl;
}

void dec_to_bin(int liczba)
{
    int i=0,tab[31];

    while(liczba) //dopóki liczba będzie różna od zera
    {
        tab[i++]=liczba%2;
        liczba/=2;
    }

    for(int j=i-1;j>=0;j--)
        cout<<tab[j];
}

int oct2dec (string osemkowa)
{
    int dziesietna = strtol(osemkowa.c_str(), NULL, 8);

    return dziesietna;
}
void dec_to_oct(int liczba)
{
    int i=0,tab[31];

    while(liczba)
    {
        tab[i++]=liczba%8;
        liczba/=8;
    }

    for(int j=i-1; j>=0; j--)
        cout<<tab[j];
}

int main() {


    double a,b,c,x1,x2,delta;

        cout<<"Podaj a,b i c"<<endl<<endl<<endl;
        cin>>a>>b>>c;
        if(a==0)
        {
            cout<<"To nie jest rownanie kwadratowe";
        }
        else
        {
            delta=(b*b)-(4*a*c);
            if(delta==0)
            {
                x1=-b/(2*a);
                cout<<"Miejsce zerowe wynosi: "<<x1;
            }
            else
            {
                if(delta>0)
                {
                    x1=(-b-sqrt(delta))/(2*a);
                    x2=(-b+sqrt(delta))/(2*a);
                    cout<<"x1= "<<x1<<endl<<"x2= "<<x2;
                }
                else
                    cout<<"Funkcja nie ma miejsc zerowych";
            }

        }



    cout<<"NWD("<<a<<","<<b<<") = "<<NWD(a,b)<<endl;
    cout<<"NWW("<<a<<", "<<b<<") = "<<a/NWD(a, b)*b<<endl;
    return 0;
}
