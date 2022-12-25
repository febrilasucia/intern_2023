#include <stdio.h>
#include <string.h>
#include <stdlib.h>

void main(){
	
	int i,j,input_panjang;
    char input[50];
    
    printf("## Program Huruf / Angka Palindrom Bahasa C ## \n");
  	printf("=========================================== \n\n");

    printf("Input Panjang Kata / Angka : ");
    scanf("%i",&input_panjang);
	
	//input karakter
    for(i=1 ; i<=input_panjang ;i++){
        printf("Input Huruf/Angka ke-%i = ",i);
        scanf("%s",&input[i]);
    }
	
	//output normal
    for(i=1 ; i<=input_panjang ;i++){
        printf("%c",input[i]);
    }
    
	///output dibalik
    j = input_panjang;
    for(i=1 ; i<input_panjang; i++){
        j = j - 1;
        printf("%c",input[j]);
    }
    


	
    





}
