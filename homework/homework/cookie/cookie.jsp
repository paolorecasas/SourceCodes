<%@ page language="java" %>
<%@ page import="homework.*" %>
<%

  String username=request.getParameter("username");
 String password=request.getParameter("password");
 Cookie userCookie = new Cookie ("username",username);
 Cookie passCookie = new Cookie ("password",password);


 

 if(username==null) {
  username="";
 }
 
 
if(password==null){ password="";}
 


userCookie.setMaxAge(365 * 24 * 60 * 60);
passCookie.setMaxAge(365 * 24 * 60 * 60);
response.addCookie(userCookie);
response.addCookie(passCookie);
 
%>

<%

 String cookieUser = "username";
String cookiePass = "password";
Cookie usercookies [] = request.getCookies();
Cookie passcookies [] = request.getCookies();
Cookie myUsername = null;
Cookie myPassword = null;
 
 if (usercookies != null)
{
for (int i = 0; i < usercookies.length; i++) 
{
if (usercookies [i].getName().equals (cookieUser))
{
	myUsername = usercookies[i];
break;
}
}
}
//store password
if (passcookies != null)
{
for (int i = 0; i < passcookies.length; i++) 
{
if (passcookies [i].getName().equals (cookiePass))
{
myPassword = passcookies[i];
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
   if (myUsername == null){
   
   response.sendRedirect("index.jsp");
  %>
    
  <% } else {
  %>
  <p>Welcome: <%= myUsername.getValue()%>.
  <% }  %>
  
  

  </body>
</html>
