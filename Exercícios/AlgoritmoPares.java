package br.com.UniasselviCadeiraLógica;
import java.util.Scanner;

public class AlgoritmoPares {

	private static Scanner scan;

	public static void main(String[] args) {
		
		scan = new Scanner(System.in);
		System.out.println("Digite um número");
		
		int num = scan.nextInt();
		
		while(num != 0) {
			
			if((num % 2) == 0) {
				
				System.out.println("O número digitado é par: " + num);
				num = scan.nextInt();
			}
			
			else {
				
				System.out.println("O número digitado é Ímpar: " + num);
				num = scan.nextInt();
			}
		}
	}

}
