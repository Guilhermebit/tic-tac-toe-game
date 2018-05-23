package br.com.UniasselviCadeiraLógica;
import java.util.Scanner;

public class ValorMatriz {

	private static Scanner le;

	public static void main(String[] args) {
		
		int matriz [][] = new int[4][3];
		int linha,coluna,busca_num;
		boolean achou;
		
        le = new Scanner(System.in);
        
        // pede para digitar valores na matriz
        
        for(linha = 0; linha <4; linha++) {
        	for(coluna = 0; coluna <3; coluna++) {
        	    System.out.println("Digite um valor para a posição [" + linha + " , " + coluna + "]:");
        	    matriz[linha][coluna] = le.nextInt();
        	}
        
        }
        
        // imprimindo a matriz
        
        System.out.println("Imprimindo a matriz");
        
        for(linha = 0; linha < matriz.length; linha++) {
        	for(coluna = 0; coluna < matriz[0].length; coluna++) {
        		 System.out.print(matriz[linha][coluna] + " ");
        	   }
        	System.out.println(" ");
        	}
        	
        
        
        // pede para digitar um valor para buscar na matriz
        
        System.out.println("Digite um valor para ser buscado na matriz: ");
        busca_num = le.nextInt();
		
        achou = false;
		
        for(linha = 0; linha <4; linha++) {
        	for(coluna = 0; coluna <3; coluna++) {
        	   if(matriz[linha][coluna] == busca_num) {
        		   achou = true;
        	   }
        	}
        	
        }
        
        if(achou == true) {
        	System.out.println("O número se encontra na Matriz");
        }
        
        else {
        	System.out.println("O número não se encontra na Matriz");
        }
		
	}

}
