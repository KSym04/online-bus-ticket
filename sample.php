<script type="text/javascript">
/* 
   Checkbox Check Limiting
   Version 1.0
   September 6, 2010

   Will Bontrager
   https://www.willmaster.com/
   Copyright 2010 Bontrager Connection, LLC

   Bontrager Connection, LLC grants you 
   a royalty free license to use or modify 
   this software provided this notice appears 
   on all copies. This software is provided 
   "AS IS," without a warranty of any kind.
*/

function CountChecks(whichlist,maxchecked,latestcheck) {
// An array containing the id of each checkbox to monitor. 
//   List the id of each checkbox in the set. If more than 
//   one set, list other sets in their own arrays. The
//   array name to use is passed to this function.

var listone = new Array("size1", "size2", "size3", "size4", "size5", "size6");
var listtwo = new Array("color1", "color2", "color3", "color4", "color5");

// End of customization.
var iterationlist;
eval("iterationlist="+whichlist);
var count = 0;
for( var i=0; i<iterationlist.length; i++ ) {
   if( document.getElementById(iterationlist[i]).checked == true) { count++; }
   if( count > maxchecked ) { latestcheck.checked = false; }
   }
if( count > maxchecked ) {
   alert('Sorry, only ' + maxchecked + ' may be checked.');
   }
}
</script>


<p>
Check up to 3 sizes:<br>
<input id='size1' type="checkbox" name="boxsize[]" onclick="CountChecks('listone',,this)" value="2x2">2x2 
<input id='size2' type="checkbox" name="boxsize[]" onclick="CountChecks('listone',,this)" value="2x2.5">2x2.5 
<input id='size3' type="checkbox" name="boxsize[]" onclick="CountChecks('listone',,this)" value="2x3">2x3 
<input id='size4' type="checkbox" name="boxsize[]" onclick="CountChecks('listone',,this)" value="2.5x2.5">2.5x2.5 
<input id='size5' type="checkbox" name="boxsize[]" onclick="CountChecks('listone',,this)" value="2.5x3">2.5x3 
<input id='size6' type="checkbox" name="boxsize[]" onclick="CountChecks('listone',,this)" value="3x3">3x3
</p>

<p>
Check up to 2 colors:<br>
<input id='color1' type="checkbox" name="favoritecolor[]" onclick="CountChecks('listtwo',2,this)" value="red">Red 
<input id='color2' type="checkbox" name="favoritecolor[]" onclick="CountChecks('listtwo',2,this)" value="gold">Gold 
<input id='color3' type="checkbox" name="favoritecolor[]" onclick="CountChecks('listtwo',2,this)" value="green">Green 
<input id='color4' type="checkbox" name="favoritecolor[]" onclick="CountChecks('listtwo',2,this)" value="silver">Silver 
<input id='color5' type="checkbox" name="favoritecolor[]" onclick="CountChecks('listtwo',2,this)" value="blue">Blue 
</p>

