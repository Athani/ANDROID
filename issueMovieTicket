import java.io.*;
public class issueMovieTicket{
	public static void main(String[] args)	{
		/*try{
		BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
		String[] movieOnShow={"Sholay","Titli","Manjhi","Vodka Diaries"};int i,serialNoOfTiming=0;String whichMovie="",acknowledge="";
		String[] timingOfShow={"11AM-2PM","3PM-6PM","7PM-10PM","11PM-2AM"};
		System.out.println("Movies On Show");
		
		for(i=0;i<movieOnShow.length;i++)
		{
			System.out.print(i+1+")"+movieOnShow[i]+"\t");
		}
		System.out.println();
				System.out.println("Timing of the Show");
		for(i=0;i<timingOfShow.length;i++)
		{
			System.out.print(i+1+")"+timingOfShow[i]+"\t");
		}
				System.out.println();
					System.out.print("\nEnter the Movie Name You Want To Watch:-"+"\n");
					whichMovie=br.readLine();
					System.out.print("Serial Number of the timing you prefer!"+"\n");
					serialNoOfTiming=Integer.parseInt(br.readLine());
					
					switch(serialNoOfTiming)
					{
						case 1:
								System.out.println("You Want To Watch "+whichMovie+" and the timing of your show is 11AM-2PM and the amount you have to pay 150rs");
								if(acknowledge.equals())
										System.out.println("Yo");
								else
										break;
								break;
						case 2:
								System.out.println("You Want To Watch "+whichMovie+" and the timing of your show is 3PM-6PM and the amount you have to pay 200rs");
								break;
						case 3:
								System.out.println("You Want To Watch "+whichMovie+" and the timing of your show is 7PM-10PM and the amount you have to pay 250rs");
								break;
						case 4:
								System.out.println("You Want To Watch "+whichMovie+" and the timing of your show is 11PM-2AM and the amount you have to pay 150rs");
								break;
						default:
								System.out.println("Loss");
								break;
						}
			}catch(Exception e){}*/
			
			ticketBooking tb=new ticketBooking();
			tb.processOfBooking();
		}
}

class ticketBooking{
		void processOfBooking(){
					try{
		BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
		String[] movieOnShow={"Sholay","Titli","Manjhi","Vodka Diaries"};int i,serialNoOfTiming=0;String whichMovie="",acknowledge="",optYes="Y";
		String[] timingOfShow={"11AM-2PM","3PM-6PM","7PM-10PM","11PM-2AM"};
		System.out.println("Movies On Show");
		for(i=0;i<movieOnShow.length;i++)
		{
			System.out.print(i+1+")"+movieOnShow[i]+"\t");
		}
		System.out.println();
				System.out.println("Timing of the Show");
		for(i=0;i<timingOfShow.length;i++)
		{
			System.out.print(i+1+")"+timingOfShow[i]+"\t");
		}
				System.out.println();
					System.out.print("\nEnter the Movie Name You Want To Watch and press enter"+"\n");
					whichMovie=br.readLine();
					System.out.print("Serial Number of the timing you prefer! and press enter"+"\n");
					serialNoOfTiming=Integer.parseInt(br.readLine());
					
					switch(serialNoOfTiming)
					{
						case 1:
								System.out.println("You Want To Watch "+whichMovie+" and the timing of your show is 11AM-2PM and the amount you have to pay 150rs");
								System.out.println("Do you want to book an other one Please enter (Y|N):-");
								acknowledge=br.readLine();
							if((acknowledge.toUpperCase()).equals(optYes))
										System.out.println("Yo");
								else
										break;
								break;
						case 2:
								System.out.println("You Want To Watch "+whichMovie+" and the timing of your show is 3PM-6PM and the amount you have to pay 200rs");
								System.out.println("Do you want to book an other one Please enter (Y|N):-");
								acknowledge=br.readLine();
							if((acknowledge.toUpperCase()).equals(optYes))
										System.out.println("Yo");
								else
										break;
								break;
						case 3:
								System.out.println("You Want To Watch "+whichMovie+" and the timing of your show is 7PM-10PM and the amount you have to pay 250rs");
								System.out.println("Do you want to book an other one Please enter (Y|N):-");
								acknowledge=br.readLine();
							if((acknowledge.toUpperCase()).equals(optYes))
										System.out.println("Yo");
								else
										break;
								break;
						case 4:
								System.out.println("You Want To Watch "+whichMovie+" and the timing of your show is 11PM-2AM and the amount you have to pay 150rs");
								System.out.println("Do you want to book an other one Please enter (Y|N):-");
								acknowledge=br.readLine();
							if((acknowledge.toUpperCase()).equals(optYes))
										System.out.println("Yo");
								else
										break;
								break;
						default:
								System.out.println("Loss");
								break;
						}
			}catch(Exception e){}
		}
	}
