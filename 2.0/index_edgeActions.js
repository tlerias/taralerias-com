/***********************
* Adobe Edge Composition Actions
*
* Edit this file with caution, being careful to preserve 
* function signatures and comments starting with 'Edge' to maintain the 
* ability to interact with these actions from within Adobe Edge
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // aliases for commonly used Edge classes

//Edge symbol: 'stage'
(function(symbolName) {

Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 4500, function(sym, e) {
sym.stop();
// insert code here

});
//Edge binding end






Symbol.bindElementAction(compId, symbolName, "${_aboutmeLink}", "click", function(sym, e) {
window.open("aboutme.html", "_self");
// insert code for mouse clicks here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_aboutmeLink}", "mouseover", function(sym, e) {
$(this.lookupSelector("aboutmeLink")).css('cursor','pointer');
$(this.lookupSelector("aboutme")).animate({"opacity": ".5"}, "fast");

// insert code for mouse enter here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_resumeLink}", "click", function(sym, e) {
// Navigate to a new URL in the current window
// (replace "_self" with another name for a new window)
window.open("resume.html", "_self");
// insert code for mouse clicks here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_advertisingLink}", "click", function(sym, e) {
// Navigate to a new URL in the current window
// (replace "_self" with another name for a new window)
window.open("adv.html", "_self");
// insert code for mouse clicks here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_graphicdesignLink}", "click", function(sym, e) {
// Navigate to a new URL in the current window
// (replace "_self" with another name for a new window)
window.open("gd.html", "_self");
// insert code for mouse clicks here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_webdesignLink}", "click", function(sym, e) {
// Navigate to a new URL in the current window
// (replace "_self" with another name for a new window)
window.open("wd.html", "_self");
// insert code for mouse clicks here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_contactLink}", "click", function(sym, e) {
// Navigate to a new URL in the current window
// (replace "_self" with another name for a new window)
window.open("contact.html", "_self");
// insert code for mouse clicks here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_contactLink}", "mouseover", function(sym, e) {
$(this.lookupSelector("contactLink")).css('cursor','pointer');
$(this.lookupSelector("contact")).animate({"opacity": ".5"}, "fast");
// insert code for mouse enter here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_webdesignLink}", "mouseover", function(sym, e) {
$(this.lookupSelector("webdesignLink")).css('cursor','pointer');
$(this.lookupSelector("webdesign")).animate({"opacity": ".5"}, "fast");
// insert code for mouse enter here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_graphicdesignLink}", "mouseover", function(sym, e) {
$(this.lookupSelector("graphicdesignLink")).css('cursor','pointer');
$(this.lookupSelector("graphicdesign")).animate({"opacity": ".5"}, "fast");

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_resumeLink}", "mouseover", function(sym, e) {
$(this.lookupSelector("resumeLink")).css('cursor','pointer');
$(this.lookupSelector("resume")).animate({"opacity": ".5"}, "fast");
// insert code for mouse enter here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_aboutmeLink}", "mouseout", function(sym, e) {
$(this.lookupSelector("aboutme")).animate({"opacity": "1"}, "fast");
// insert code for mouse leave here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_contactLink}", "mouseout", function(sym, e) {
$(this.lookupSelector("contact")).animate({"opacity": "1"}, "fast");
// insert code for mouse leave here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_webdesignLink}", "mouseout", function(sym, e) {
$(this.lookupSelector("webdesign")).animate({"opacity": "1"}, "fast");
// insert code for mouse leave here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_graphicdesignLink}", "mouseout", function(sym, e) {
$(this.lookupSelector("graphicdesign")).animate({"opacity": "1"}, "fast");
// insert code for mouse leave here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_resumeLink}", "mouseout", function(sym, e) {
$(this.lookupSelector("resume")).animate({"opacity": "1"}, "fast");
// insert code for mouse leave here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_advertisingLink}", "mouseover", function(sym, e) {
$(this.lookupSelector("advertisingLink")).css('cursor','pointer');
$(this.lookupSelector("advertising")).animate({"opacity": ".5"}, "fast");
// insert code for mouse enter here

});
//Edge binding end

Symbol.bindElementAction(compId, symbolName, "${_advertisingLink}", "mouseout", function(sym, e) {
$(this.lookupSelector("advertising")).animate({"opacity": "1"}, "fast");
// insert code for mouse leave here

});
//Edge binding end



})("stage");
//Edge symbol end:'stage'

})(jQuery, AdobeEdge, "EDGE-212200304");