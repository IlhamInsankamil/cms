<html>
<script type="text/javascript">
function c(val)
{
    document.getElementById("resultArea").value=val;
}
function v(val)
{
    document.getElementById("resultArea").value+=val;
}
function e() 
{ 
    try 
    { 
      c(eval(document.getElementById("resultArea").value)) 
    } 
    catch(e) 
    {
      c('Error') 
    } 
}
</script>
<div class="calculator">
    <h3>Standard Calculator</h3>
    <div class="calc-screen"> 
        <input type="text" size="13" id="resultArea"/> 
    </div>
    <div class="calc-buttons-area">
        <div class="calc-buttons-row">
            <input type="button" value="1" onclick='v("1")'/>
            <input type="button" value="2" onclick='v("2")'/>
            <input type="button" value="3" onclick='v("3")'/>
        </div>
        <div class="calc-buttons-row">
            <input type="button" value="4" onclick='v("4")'/>
            <input type="button" value="5" onclick='v("5")'/>
            <input type="button" value="6" onclick='v("6")'/>
        </div>
        <div class="calc-buttons-row">
            <input type="button" value="7" onclick='v("7")'/>
            <input type="button" value="8" onclick='v("8")'/>
            <input type="button" value="9" onclick='v("9")'/>
        </div>
        <div class="calc-buttons-row">
            <input type="button" value="+" onclick='v("+")'/>
            <input type="button" value="0" onclick='v("0")'/>
            <input type="button" value="-" onclick='v("-")'/>
        </div>
        <div class="calc-buttons-row">
            <input type="button" value="x" onclick='v("*")'/>
            <input type="button" value="=" onclick='e()'/>
            <input type="button" value="/" onclick='v("/")'/>
        </div>
        <div class="calc-buttons-row">
            <input type="button" value="ii" onclick='c("Ilham Insan..")'/>
            <input type="button" value="c" onclick='c("")'/>
            <input type="button" value="k" onclick='c("..kamil")'/>
        </div>
    </div>
</div>
<style>
    .calculator{width:156px;background-color:darkgray;text-align:center;border:6px outset gray;border-radius:7px;}
    .calculator h3{color:white;font-family: arial;font-size: 14px;}
    .calc-screen{width:80%;padding:4px 5px;background-color:black;margin:0 auto;}
    .calc-screen input{background-color:greenyellow;color:black;text-align:right;font-weight: bold;}
    .calc-buttons-area{width:84%;margin:3 auto;}
    .calc-buttons-row{background-color:black;}
    .calc-buttons-row input{border:1px outset grey;width:40px;}
</style>
</html> 
