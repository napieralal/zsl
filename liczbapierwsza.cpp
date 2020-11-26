#include <iostream>
#include<cstdlib>
using namespace std;

int main()
{
  int liczba,p=0;
  cin>>liczba;
  for(int i=1;i<=liczba;i++)
  {
   if(liczba%i==0)
   {
    p++;
   }
  }

if(p==2){
    cout<<liczba<<" jest pierwsza";
}
else
    cout<<liczba<<" nie jest pierwsza";
}
