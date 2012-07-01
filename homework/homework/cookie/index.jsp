<%@ page language="java" import="homework.*" %>
<%


 Cookie myCookie = null;
 String cookieName = "username";	
 

 Cookie cookies [] = request.getCookies ();
 if (cookies != null)
 {
  for (int i = 0; i < cookies.length; i++)
  {
  if (cookies [i].getName().equals (cookieName))
  {
   myCookie = cookies[i];
    
    break;
 }
 }
 }


 
%>

<html>
  <head>
  <title>Cookies</title>
  </head>
  <body>
<%
   if (myCookie == null){
  %>
 <form method="post" action="cookie.jsp">
  <p><b>Username: </b>
  <input type="text" name="username"><br>
  <p><b>Password: </b>
  <input type="password" name="password"<br>
  <input type="submit" value="Submit">
  </form>
 
  <% } else {
  %>
  <p>Welcome: <%=myCookie.getValue()%>.
  <% } %>
 
  
 


  </body>
</html>
