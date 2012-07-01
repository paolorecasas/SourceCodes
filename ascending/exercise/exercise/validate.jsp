<%@ page errorPage="error.jsp"%>
<html>
  <head>
  <title>Validate</title>
  </head>
  <body>
    <%!
    
      private String firstnumber;
		  private String secondnumber;
		  private String thirdnumber;
		  private String fourthnumber;
		   private String fifthnumber;
		  
		  double first,second,third,fourth,fifth;
          
     
  
      public void setFirstNumber(String firstnumber){
              this.firstnumber = firstnumber;
      
      }
      public String getFirstNumber(){
      return firstnumber;
      }
      
       public void setSecondNumber(String secondnumber){
              this.secondnumber = secondnumber;
      
      }
      
      public String getSecondNumber(){
      return secondnumber;
      }
      public void setThirdNumber(String thirdnumber){
              this.thirdnumber = thirdnumber;
      
      }
      public String getThirdNumber(){
      return thirdnumber;
      }
      public void setFourthNumber(String fourthnumber){
              this.fourthnumber = fourthnumber;
      
      }
      public String getFourthNumber(){
      return fourthnumber;
      }
	  public void setFifthNumber(String fifthnumber){
              this.fifthnumber = fifthnumber;
      
      }
      public String getFifthNumber(){
      return fifthnumber;
      }
  %>
  
  <%
    setFirstNumber(request.getParameter("first"));
    setSecondNumber(request.getParameter("second"));
    setThirdNumber(request.getParameter("third"));
    setFourthNumber(request.getParameter("fourth")); 
	setFifthNumber(request.getParameter("fifth"));
  
    first = Double.parseDouble(getFirstNumber());
    second = Double.parseDouble(getSecondNumber());
    third = Double.parseDouble(getThirdNumber());
    fourth = Double.parseDouble(getFourthNumber());
	fifth = Double.parseDouble(getFifthNumber());
    
    double smallest=2147483647, secondSmallest=2147483647; 
		double[] num;    
		num = new double[5];
		
		num[0] = first;
		num[1] = second;
		num[2] = third;
		num[3] = fourth;
		num[4] = fifth;
		
		for(int count = 0; count < 5; count++)
		{
			for( int i = 0; i < 5; i++)
			{
				Double tempA=num[count];
				Double tempB=num[i];
				if(tempA.compareTo(tempB) < 0)
				{
					num[count] = tempB;
					num[i] = tempA;
				}
			}
		}
		
			
		
		

	  
    %>

		<p> Ascending Order: <%=num[0] %> <%=num[1] %> <%=num[2] %> <%=num[3] %> <%=num[4] %></b></p>
		
      <p>Second Smallest: <b><%=num[1]%></b></p> 
	  <p>Smallest: <b><%=num[0]%></b></p> 
  
  </body>
</html>
