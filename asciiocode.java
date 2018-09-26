import java.io.*;
import java.util.*;
public class asciiocode{
	public static void main(String args[]){
		String pt="",key="",ct="";
		char[] cpt=new char[100];
		char[] ckey=new char[100];
		try{
		BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
		System.out.println("Enter the Plain Text:-");
		pt=br.readLine();
		System.out.println("Enter the Key:-");
		key=br.readLine();
		int[] asciipt=new int[100];
		int[] asciikey=new int[100];
		int[] newasciipt=new int[100];
		int[] newasciikey=new int[100];
						//ENCRYPTION TECHNIQUE
		if(pt.length()==key.length())	
		{
			for(int i=0;i<pt.length();i++)
			{
				cpt[i]=pt.charAt(i);
				asciipt[i]=(int)cpt[i];
				ckey[i]=key.toUpperCase().charAt(i);
				asciikey[i]=(int)ckey[i];
			}
		int ptmin=asciipt[0];
		int keymin=asciikey[0];
			//FINDING THE MINIMUM ASCII CODE
				for(int i=1;i<pt.length()||i<key.length();i++)
				{
					if(asciipt[i]<ptmin)
					{
						ptmin=asciipt[i];
						for(i=0;i<pt.length();i++)
						{
							newasciipt[i]=asciipt[i]-ptmin;						
							//System.out.print(newasciipt[i]+" ");
						}					
					}
				}
				//System.out.println();
				for(int i=1;i<key.length();i++)
				{
					if(asciikey[i]<keymin)
					{
						keymin=asciikey[i];
						for(i=0;i<key.length();i++)
						{
							newasciikey[i]=asciikey[i]-keymin;					
							//System.out.print(newasciikey[i]+" ");
						}
					}
				}
				//System.out.println();
//ADDITION OF MODDED KEY VLAUE WITH MODDED PT VALUE
		int[] modkeyptaddition=new int[100];
		int[] ptminplusmodkeyptaddition=new int[100];
		int[] decryption=new int[100];
		int[] newdecryption=new int[100];
		for(int i=0;i<pt.length() && i<key.length();i++)
		{
			modkeyptaddition[i]=newasciipt[i]+newasciikey[i];
			//System.out.print(modkeyptaddition[i]+" ");
		}
		//System.out.println();
		for(int i=0;i<pt.length() && i<key.length();i++)
		{
			ptminplusmodkeyptaddition[i]=modkeyptaddition[i]+ptmin;
			//System.out.print(ptminplusmodkeyptaddition[i]+" ");
		}
		//System.out.println();
		System.out.print("Ciphet Text:-\n");
		for(int i=0;i<pt.length();i++)
		{
			cpt[i]=(char)ptminplusmodkeyptaddition[i];
			ct=String.valueOf(cpt[i]);
			System.out.print(ct.toUpperCase());		
		}
System.out.print("\n");

					//DECRYPTION TECHNIQUE
		for(int i=0;i<pt.length() && i<key.length();i++)
		{
			decryption[i]=ptminplusmodkeyptaddition[i]-modkeyptaddition[i];
			//System.out.print(decryption[i]+" ");
		}
//System.out.print("\n");
		for(int i=0;i<pt.length() && i<key.length();i++)
		{
			newdecryption[i]=decryption[i]+newasciipt[i];
			//System.out.print(newdecryption[i]+" ");
		}
//System.out.print("\n");
		System.out.print("Plain Text:-\n");
		for(int i=0;i<key.length();i++)
		{
			ckey[i]=(char)newdecryption[i];
			pt=String.valueOf(ckey[i]);
			System.out.print(pt.toLowerCase());		
		}
System.out.print("\n");

	}
		else{
			System.out.println("Sorry encryption technique requires same length of key as well as plain text.....!");
		}
		
		}catch(Exception e){}
    }
}
			
		
