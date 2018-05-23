package br.com.UniasselviCadeiraLógica;
import java.util.Scanner;

/* 
 * Algoritmo que le um vetor com 10 posicoes e:
 *  
 *  recebe um valor do usuario 
 *  verifica se esse valor se encontra no  vetor 
 * 
 * */

public class BuscaValor {
	
	private static Scanner scan;

	public static void main(String[] args) {
		
		int numeros_vetor [] = new int[10];
		int i,valor;
		boolean achou;
		
		scan = new Scanner(System.in);
		
		for(i = 0; i<10 ;i++) {
			System.out.println("Digite um número");
			numeros_vetor[i] = scan.nextInt();
		}
		
		System.out.println("Digite um valor para ser buscado no vetor: ");
		valor = scan.nextInt();
		
		achou = false;
		for(i = 0; i<10 ;i++) {
			if(numeros_vetor[i] == valor) {
				achou = true;
			}
		}
		
		if(achou == true) {
			System.out.println("O valor se encontra no vetor");
		}
		
		else {
			System.out.println("O valor não se encontra no vetor");
		}

	}

}
