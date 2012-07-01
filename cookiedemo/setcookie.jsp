  <% 
      String username = request.getParameter("username");
      
      if(username==null){
        username="";
      }
      
      Cookie cookie = new Cookie("username",username);
      cookie.setMaxAge(999 * 24 * 60 * 60);
      response.addCookie(cookie);
  %>


<html>
  <head>

  <title>Cookie Saved</title>
  </head>
  <body>
  <p><a href="showcookievalue.jsp">Next Page to view the cookie value
      </a></p>

  </body>
</html>
