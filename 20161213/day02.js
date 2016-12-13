
var a=prompt("请输入年份");
if(a==""){
    document.write("请输入年份")
    document.write("<br>")
}
else{
    document.write(a%400==0?"是闰年":a%4==0?"是闰年":"不是闰年");
    document.write("<br>")
}



var h=prompt("请输入身高");
var w=prompt("请输入体重");
var n=w/h/h;
if(h==""||w==""){
    document.write("请确认是否已经输入数据!")
    document.write("<br>")
}
else{
    document.write(n>25?"胖":n<20?"瘦":"正常");
    document.write("<br>")
}



for(var i=1;i<1000;i++){
    i==((parseInt((i%1000)/100))*(parseInt((i%1000)/100))*(parseInt((i%1000)/100))+(parseInt((i%100)/10))*(parseInt((i%100)/10))*(parseInt((i%100)/10))+(parseInt(i%10))*(parseInt(i%10))*(parseInt(i%10))) && document.write(i+"<br/>");  
}
