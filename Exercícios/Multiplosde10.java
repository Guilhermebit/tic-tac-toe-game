package br.com.UniasselviCadeiraLógica;

public class Multiplosde10 {

	public static void main(String[] args) {
		
		int i;
		
		System.out.println("Os múltiplos de 10 de 1 a 100 são: ");
		
		for(i= 0; i<= 100; i++) {
			if((i % 10) == 0) {
				System.out.println(i);
			}
		}

	}

}
