#include <iostream>
using namespace std;
enum wlasny_enum
{
    przyklad0,
    przyklad1,
    przyklad2
};
int main()
{
    wlasny_enum nowy = przyklad0;
    cout << nowy << endl;
    nowy = przyklad1;
    cout << nowy << endl;
    nowy = przyklad2;
    cout << nowy << endl;
    getchar();
}//
// Created by Michał Talaga on 08/01/2023.
//
