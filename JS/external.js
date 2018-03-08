/* Create an HTML5 page with external JavaScript that displays at least five 
Navigator properties about the browser that is rendering the page.  */
interface Navigator {
  // objects implementing this interface also implement the interfaces given below

var NavigatorID = window . navigator . appCodeName;
var NavigatorLanguage = window . navigator . language;
var NavigatorOnLine = window . navigator . onLine;
var NavigatorContentUtils = window . navigator . registerContentHandler(mimeType, url, title);
var NavigatorCookies = window . navigator . cookieEnabled;
};

/* Add four (4) JavaScript variables to the external JavaScript. 
Two of the variables should hold boolean values based on questions asked of a visitor to the page. 
Two of the variables should hold string values based on questions asked of a visitor to the page. */
var Yes = true;
var No = false;
var postive = "Yes! It is";
var negative = "No! It is not";