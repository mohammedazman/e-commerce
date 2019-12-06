<?php
 echo"<div dir='ltr'>";
echo "<br>\$_SERVER['PHP_SELF']<br>";    
echo $_SERVER['PHP_SELF'];echo "	<br>Returns the filename of the currently executing script<br>";
    echo "<br>\$_SERVER['GATEWAY_INTERFACE']<br>";    
echo $_SERVER['GATEWAY_INTERFACE']	;echo "<br>Returns the version of the Common Gateway Interface (CGI) the server is using<br>";
    echo "<br>\$_SERVER['SERVER_ADDR']<br>";    
echo $_SERVER['SERVER_ADDR']	;echo "<br>Returns the IP address of the host server<br>";
    echo "<br>\$_SERVER['SERVER_NAME']<br>";    
echo $_SERVER['SERVER_NAME']	;echo "<br>Returns the name of the host server (such as www.w3schools.com)<br>";
    echo "<br>\$_SERVER['SERVER_SOFTWARE']<br>";    
echo $_SERVER['SERVER_SOFTWARE']	;echo "<br>Returns the server identification string (such as Apache/2.2.24)<br>";
    echo "<br>\$_SERVER['SERVER_PROTOCOL']<br>";    
echo $_SERVER['SERVER_PROTOCOL']	;echo "<br>Returns the name and revision of the information protocol (such as HTTP/1.1)<br>";
echo "<br>\$_SERVER['REQUEST_METHOD']<br>";    
    echo $_SERVER['REQUEST_METHOD']	;echo "<br>Returns the request method used to access the page (such as POST)<br>";
echo "<br>\$_SERVER['REQUEST_TIME']<br>";    
    echo $_SERVER['REQUEST_TIME']	;echo "<br>Returns the timestamp of the start of the request (such as 1377687496)<br>";
    echo "<br>\$_SERVER['QUERY_STRING']<br>";    
echo $_SERVER['QUERY_STRING']	;echo "<br>Returns the query string if the page is accessed via a query string<br>";
    echo "<br>\$_SERVER['HTTP_ACCEPT']<br>";    
echo $_SERVER['HTTP_ACCEPT']	;echo "<br>Returns the Accept header from the current request<br>";
    echo "<br>\$_SERVER['HTTP_ACCEPT_CHARSET']<br>";    
echo $_SERVER['HTTP_ACCEPT_CHARSET']	;echo "<br>Returns the Accept_Charset header from the current request (such as utf-8,ISO
-8859-1)<br>";
    echo "<br>\$_SERVER['HTTP_HOST']<br>";    
echo $_SERVER['HTTP_HOST']	;echo "<br>Returns the Host header from the current request<br>";
    echo "<br>\$_SERVER['HTTP_REFERER']<br>";    
echo $_SERVER['HTTP_REFERER']	;echo "<br>Returns the complete URL of the current page (not reliable because not all user-agents support it)<br>";
    echo "<br>\$_SERVER['HTTPS']<br>";    
echo $_SERVER['HTTPS']	;echo "<br>Is the script queried through a secure HTTP protocol<br>";
    echo "<br>\$_SERVER['REMOTE_ADDR']<br>";    
echo $_SERVER['REMOTE_ADDR']	;echo "<br>Returns the IP address from where the user is viewing the current page<br>";
    echo "<br>\$_SERVER['REMOTE_HOST']<br>";    
echo $_SERVER['REMOTE_HOST']	;echo "<br>Returns the Host name from where the user is viewing the current page<br>";
    echo "<br>\$_SERVER['REMOTE_PORT']<br>";    
echo $_SERVER['REMOTE_PORT']	;echo "<br>Returns the port being used on the user's machine to communicate with the web server<br>";
    echo "<br>\$_SERVER['SCRIPT_FILENAME']<br>";    
echo $_SERVER['SCRIPT_FILENAME']	;echo "<br>Returns the absolute pathname of the currently executing script<br>";
    echo "<br>\$_SERVER['SERVER_ADMIN']<br>";    
echo $_SERVER['SERVER_ADMIN']	;echo "<br>Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)<br>";
    echo "<br>\$_SERVER['SERVER_PORT']<br>";    
echo $_SERVER['SERVER_PORT']	;echo "<br>Returns the port on the server machine being used by the web server for communication (such as 80)<br>";
    echo "<br>\$_SERVER['SERVER_SIGNATURE']<br>";    
echo $_SERVER['SERVER_SIGNATURE']	;echo "<br>Returns the server version and virtual host name which are added to server-generated pages<br>";
    echo "<br>\$_SERVER['PATH_TRANSLATED']<br>";    
echo $_SERVER['PATH_TRANSLATED']	;echo "<br>Returns the file system based path to the current script<br>";
    echo "<br>\$_SERVER['SCRIPT_NAME']<br>";    
echo $_SERVER['SCRIPT_NAME']	;echo "<br>Returns the path of the current script<br>";
    echo "<br>\$_SERVER['SCRIPT_URI']<br>";    
echo $_SERVER['SCRIPT_URI']	;
echo "<br>Returns the URI of the current page<br>";
    
 echo"</div>";
    
    
    
    
    
    
    ?>