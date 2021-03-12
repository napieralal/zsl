#include <iostream>

using namespace std;

void choinka(int wyschoinka,int segment) {
    int d = 0;
    if (wyschoinka >= 4 && wyschoinka <= 15)
    {
        for (int z = 1; z <= segment; z++)
        {
            for (int i = 0; i < wyschoinka; i++)
            {

                for (int b = 0; b <= wyschoinka - i; b++)
                {
                    cout << " ";
                }
                for (int k = 0; k <= i * 2; k++)
                {
                    cout << "*";
                    d = k;
                }
                cout << endl;
            }
        }
        int a = 0;
        while (a < 3)
        {
            for (int i = 0; i < (d / 2)+1; i++)
            {
                cout << " ";
            }
            cout << "***" << endl;
            a++;           
        }
      
    }
    else if (wyschoinka < 4)
    {
        cout << "Choinka jest za niska";
    }
    else if (wyschoinka > 15)
    {
        cout << "Choinki tak wysoko nie rosna";
    }
}
int main()
{
    int wyschoinka,segment;
    cout << "Podaj wysokosc czesci choinki"<<endl;
    cin >> wyschoinka;
    cout << "Podaj ilosc segmentow" << endl;
    cin >> segment;
    choinka(wyschoinka,segment);      
}

