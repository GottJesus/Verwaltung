"use strict";
/**
 * Den 24.04.2024
 */
  
 window.onload = function () {
	if (window.performance && window.PerformanceNavigation) {
		  let type = performance.navigation.type;
		  if (type == PerformanceNavigation.TYPE_NAVIGATE) {
			 console.log ("Seite wurde geladen");
		  } else if (type == PerformanceNavigation.TYPE_RELOAD) {
			 console.log ("Seite wurde erneut geladen (RELOAD)");
		  } else if (type == PerformanceNavigation.TYPE_BACK_FORWARD) {
			 console.log ("Seite wurde durch BACK oder FORWARD geladen, nicht aber von einem Zustand der History");
		  }
	}
	   if (history.state == null) {
		  console.log ("Erstes Laden");
	   } else {
		  console.log ("REFRESH oder Rückkehr von einer anderen URL via Vorwärts / Zurück");
	   }
	   
	   let state = history.state;
	   let title = document.title; 
	   let URL = window.location;   
	
	   history.replaceState(state, title, URL);
 }
 
 window.onpopstate = function() {
	console.log ("onpopstate – zurück von einer anderen URL");
 }
 
 window.onunload = function() {
	console.log ("onunload");
 }