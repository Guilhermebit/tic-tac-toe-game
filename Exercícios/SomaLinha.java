package br.com.UniasselviCadeiraLógica;
import java.util.Random;

public class SomaLinha {

	public static void main(String[] args) {
		
		int matriz [][] = new int[3][3];
		int linha,coluna,somaLinha;
		
		Random gerador = new Random();
		
		// gera a matriz 3x3 com números aleatórios
		
		for(linha = 1; linha <3 ; linha++) {
			for(coluna = 1; coluna <3 ; coluna++) {
			   matriz[linha][coluna] = gerador.nextInt(10);
			}
		}
		 
		// imprime esta matriz
		
		for(linha = 1; linha <3 ; linha++) {
			for(coluna = 1; coluna <3 ; coluna++) {
			   System.out.print(matriz[linha][coluna] + " ");
			}
			
		    System.out.println(" ");
		}
		
		// mostra a soma dos elementos de cada uma das linhas
		
		for(linha = 1; linha <3 ; linha++) {
			somaLinha = 0;
			for(coluna = 1; coluna <3 ; coluna++) {
				somaLinha = somaLinha + matriz[linha][coluna];
			}
			
			System.out.println("Linha /" + linha + " / Soma: " + somaLinha);
		}
		

	}

}
