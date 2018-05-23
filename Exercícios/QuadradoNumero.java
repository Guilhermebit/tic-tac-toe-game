package br.com.UniasselviCadeiraLógica;
import java.util.Scanner;

public class QuadradoNumero {

	private static Scanner le;

	public static void main(String[] args) {
		
		int num;
		
		le = new Scanner(System.in);
		
		System.out.println("Digite o número, para saber o seu quadrado:");
		num = le.nextInt();
			
		System.out.println("O quadrado do número (" + num + ") é " + quadrado(num));
		
			
	}
	
	 static int quadrado(int n) {
			
			return n*n;
			
		}
		

}
