package br.com.UniasselviCadeiraLógica;
import java.util.Scanner;

//Algoritmo "Peso Ideal"

public class PesoIdeal {

	private static Scanner leitura;

	public static void main(String[] args) {
		
		Double altura,peso;
		String sexo;
		
		leitura = new Scanner(System.in);
		
		System.out.println("Digite o seu Sexo F ou M:");
		sexo = leitura.next();
		
		System.out.println("Digite a sua altura:");
		altura = leitura.nextDouble();
		
		if(sexo.equals("f")) {
			
			peso = ((62.1*altura)-44.7);
			System.out.println("Seu peso ideal é: " + peso);
			
		}
		
		else if (sexo.equals("m")) {
			
			peso = ((72.7*altura)-58);
			System.out.println("Seu peso ideal é: " + peso);
		}
		
		else {
			
			System.out.println("Digite um sexo válido");
		}
		
		}
			
}
