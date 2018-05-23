package br.com.UniasselviCadeiraLógica;
import java.util.Scanner;


/* Algoritmo que le um número X de idades, e mostra:
 * 
 -> A soma das idades
 -> A quantidade informada
 -> A média das idades
 */

public class IdadeMédia {

	private static Scanner scanner;

	public static void main(String[] args) {
		
		int idade,cont,media;
		int soma = 0;
		
		scanner = new Scanner(System.in);
		
		for(cont =0 ;cont < 5; cont++) {
			
		System.out.println("Digite uma relação de idades:");
		idade = scanner.nextInt();
		
		soma = soma + idade;
		
		
	  }
		
		media = soma / cont;
		
		System.out.println("A soma das idades é: " + soma);
		System.out.println("A quantidade é: " + cont);
		System.out.println("A média das idades é:" + media);
		
   }

}
