///Nomor 11
#include "stdio.h"
void main()
{
    int x, y, n = 5;
	
	printf("## Program Membuat Butterfly dari Angka Bahasa C ## \n");
  	printf("=================================================== \n\n");
    for(x=0 ; x<=n ; x++)
    {
        for(y=1 ; y<=x ; y++)
            {
                printf ("%x",y);

            }

        for(y=x ; y<n-1 ; y++)
            {
                printf (" ");
            }
        for(y=x ; y<n ; y++)
            {
                printf (" ");
            }

        for(y=x ; y>=1 ; y--)
            {

                if(y==5){
                    printf ("");
                } else {
                    printf ("%x",y);
                }

            }

          printf ("\n");
    }
    for(x=n-1 ; x>=1 ; x--)
    {
         for(y=1 ; y<=x ; y++)
            {
                printf ("%x",y);
            }

        for(y=x ; y<n-1 ; y++)
          {
              printf (" ");
          }
        for(y=x ; y<n ; y++)
          {
              printf (" ");
          }
        for(y=x ; y>=1 ; y--)
            {
                printf ("%x",y);
            }

          printf ("\n");

    }
    

}
