#include<iostream>

using namespace std;

int main()
{
    int stopien, x, t = 0, w = 0;

    cout << "Podaj stopień wielomianu: ";
    cin >> stopien;


    int wspolczynniki[stopien + 1];
    for (int i = 0; i <= stopien; i++)
    {
        cout << "Podaj współczynnik stojący przy potędze " << stopien - i << ": ";
        cin >> wspolczynniki[i];
    }

    cout << "Podaj wartość x: ";
    cin >> x;

    w = wspolczynniki[0];
    for (int u = 1; u <= stopien; u++) {
        t = t + 1;
        w = w * x + wspolczynniki[t];

    }
    cout << w;
    return 0;
}
