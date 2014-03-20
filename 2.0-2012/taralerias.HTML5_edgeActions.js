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

Symbol.bindElementAction(compId, symbolName, "${_aboutme}", "click", function(sym, e) {
// Navigate to a new URL in the current window
// (replace "_self" with another name for a new window)
window.open("aboutme.html", "_self");

});
//Edge binding end



})("stage");
//Edge symbol end:'stage'

})(jQuery, AdobeEdge, "EDGE-73003536");