/**
 * Den 1.04.2024
 *
 *	eine Konstante ausgeben von Sammlung:
 *	in javascript:   		JS.APPNAME
 */
  
 
 const JS = {
	 DEBUG                : true,
	 APPNAME	        : "Verwaltung von Gott Jesus",
     LOCALURL           : "http://localhost:8888/verwaltung/",
     NETCUPURL         : "http://www.verwaltung.gottjesus.de/"
 }
 
// konstante von URL
const URL = (location.hostname == "localhost" ?  JS.LOCALURL : JS.NETCUPURL);
//console.log('konstante: ' + URL);