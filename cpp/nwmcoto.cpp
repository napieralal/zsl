#include <iostream>
#include<cstdlib>
using namespace std;

int main()
{
  int liczba,p=2;
  cin>>liczba;
  int tab[10];
  int i=0;
  if(liczba!=0){
  if(liczba%p==0)
  {
    tab[i]=p;
    liczba=liczba/p;
    i++;
  }
  else {p++;}
}
for(int j=0;j<10;j++)
{
cout<<tab[i];
i--;
}




  return 0;
}
