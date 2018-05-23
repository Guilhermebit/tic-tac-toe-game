package br.com.UniasselviCadeiraLógica;
import java.util.Scanner;

public class MaiorMenorMedia {
	
	/*
	 * Algoritmo que le 10 valores inteiros positivos e mostra:
	 * 
	 * Maior valor
	 * Menor valor
	 * Média dos valores
	 * 
	 * */
	
	private static Scanner scan;

	public static void main(String[] args) {
		
		int i,maior,media,menor,soma;
		
		maior = 0;
		menor = 10000;
		soma = 0;
		media = 0;
		
		scan = new Scanner(System.in);
		
		System.out.println("Digite 10 números inteiros positivos: ");
		
		for(i =1; i <=10; i++) {
			
			i = scan.nextInt();
			
			if(i > maior) {
				maior = i;
			}
			
			if(i < menor) {
				menor = i;
			}
			
			soma = soma + i;
			media = soma / 10;
		}
		
		System.out.println("O maior valor é: " + maior);
		System.out.println("O menor valor é: " + menor);
		System.out.println("A média dos valores é: " + media);

	}

}
