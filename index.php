<html>
    <head>
        <title>
            
        </title>
        <script language="JavaScript">
    function CloseClicked()
    {
    window.returnValue = "";
    window.close()
    }
</script>
    </head>




<P align='center'><Center><script language="JavaScript">

<!-- hide script from old browser
var answer=0
var lastvalue=0
var op="+"
var lastop="+"
var newnumber=true
function input(digit){
 
  if (op=="  =   ")
 
    clearall()
 
  if ((!newnumber)&&(document.calc.result.value!="0"))
 
    document.calc.result.value+=eval(digit)
 
  else
 
    document.calc.result.value=""+eval(digit)
 
  newnumber=false
 
}
 
 
 
function clearnow(){
 
  document.calc.result.value="_"
 
  newnumber=true
 
}
 
 
 
function clearall(){
 
  answer=0
 
  lastop="+"
 
  op="+"
 
  clearnow()
 
}
 
 
 
function operate(operation){
 
  if ((newnumber!=true)||(op=="  =   "))
 
    {
 
    answer=""+answer
 
    if ((operation!="  =   ") && (op!="  =   "))
 
      {
 
      lastvalue=document.calc.result.value
 
      lastop=op
 
      answer=eval(answer+lastop+lastvalue)
 
      document.calc.result.value=answer
 
      }
 
    else if (operation=="  =   ")
 
      {
 
      if (op!="  =   ")
 
        {
 
        lastop=op
 
        lastvalue=document.calc.result.value
 
        }
 
      answer=eval(answer+lastop+lastvalue)
 
      document.calc.result.value=answer
 
      }
 
    newnumber=true
 
    }
 
  op=operation
 
}
 
 
 
function change(){
 
  answer=-1*document.calc.result.value
 
  document.calc.result.value=answer
 
}
 
 
 
function point(){
 
  if (!newnumber)
 
    {
 
    number=document.calc.result.value
 
    if (number.indexOf('.')==-1)
 
      document.calc.result.value+="."
 
    } 
 
}
 
// end hiding  -->
 

 
<!-- hide script from old browser
 
var answer=0
 
var lastvalue=0
 
var op="+"
 
var lastop="+"
 
var newnumber=true
 
 
 
function input(digit){
 
  if (op=="  =   ")
 
    clearall()
 
  if ((!newnumber)&&(document.calc.result.value!="0"))
 
    document.calc.result.value+=eval(digit)
 
  else
 
    document.calc.result.value=""+eval(digit)
 
  newnumber=false
 
}
 
 
 
function clearnow(){
 
  document.calc.result.value="_"
 
  newnumber=true
 
}
 
 
 
function clearall(){
 
  answer=0
 
  lastop="+"
 
  op="+"
 
  clearnow()
 
}
 
 
 
function operate(operation){
 
  if ((newnumber!=true)||(op=="  =   "))
 
    {
 
    answer=""+answer
 
    if ((operation!="  =   ") && (op!="  =   "))
 
      {
 
      lastvalue=document.calc.result.value
 
      lastop=op
 
      answer=eval(answer+lastop+lastvalue)
 
      document.calc.result.value=answer
 
      }
 
    else if (operation=="  =   ")
 
      {
 
      if (op!="  =   ")
 
        {
 
        lastop=op
 
        lastvalue=document.calc.result.value
 
        }
 
      answer=eval(answer+lastop+lastvalue)
 
      document.calc.result.value=answer
 
      }
 
    newnumber=true
 
    }
 
  op=operation
 
}
 
 
 
function change(){
 
  answer=-1*document.calc.result.value
 
  document.calc.result.value=answer
 
}
 
 
 
function point(){
 
  if (!newnumber)
 
    {
 
    number=document.calc.result.value
 
    if (number.indexOf('.')==-1)
 
      document.calc.result.value+="."
 
    } 
 
}
 
// end hiding  -->
 


</script>

<form name="calc">
<center>
<table border="0" cellspacing="0" cellpadding="5" align="CENTER" bgcolor="#2B4959"><tr><td><table border="0" cellspacing="0" cellpadding="2" bgcolor="#357A9F">
<tr><td colspan="5">
<input type="text" size="15" name="result" value="_" onFocus="blur()">
</td></tr>
<tr><td>
<input type="button" name="1" value=" 1 " onClick="input(this.value)">
</td><td>
<input type="button" name="2" value=" 2 " onClick="input(this.value)">
</td><td>
<input type="button" name="3" value=" 3 " onClick="input(this.value)">
</td><td>
<input type="button" name="CE" value=" CE " onClick="clearall()">
</td><td>
<input type="button" name="C" value="   C  " onClick="clearnow()">
</td></tr>
<tr> <td>
<input type="button" name="4" value=" 4 " onClick="input(this.value)">
</td><td>
<input type="button" name="5" value=" 5 " onClick="input(this.value)">
</td><td>
<input type="button" name="6" value=" 6 " onClick="input(this.value)">
</td><td>
<input type="button" name="sing" value=" +/- " onClick="change()">
</td><td>
<input type="button" name="=" value="  =   " onClick="operate(this.value)">
</td></tr>
<tr><td>
<input type="button" name="7" value=" 7 " onClick="input(this.value)">
</td><td>
<input type="button" name="8" value=" 8 " onClick="input(this.value)">
</td><td>
<input type="button" name="9" value=" 9 " onClick="input(this.value)">
</td><td>
<input type="button" name="+" value="  +   " onClick="operate(this.value)">
</td><td>
<input type="button" name="-" value="   -   " onClick="operate(this.value)">
</td></tr>
<tr> <td colspan="2">
<input type="button" name="0" value="    0    " onClick="input(this.value)">
</td><td>
<input type="button" name="." value="  . " onClick="point()">
</td><td>
<input type="button" name="*" value="  *   " onClick="operate(this.value)">
</td><td>
<input type="button" name="/" value="   /    " onClick="operate(this.value)">
</td></tr></table></td></tr></table>
</form>
<p align="center">
<INPUT TYPE=button NAME="view" VALUE="看本頁的原始碼" OnClick='window.location="view-source:" +window.location.href'>
<p align="center">
<input type="button" value="關閉此視窗" onClick="CloseClicked()"></p>
</center>
</body>
</html>



                







        </script>
        </body>