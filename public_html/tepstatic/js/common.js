function saveBusiness(){var comName=document.getElementById("comName").value;var tel=document.getElementById("tel").value;var name=document.getElementById("name").value;var email=document.getElementById("email").value;var mesInfo=document.getElementById("mesInfo").value;var code=document.getElementById("code").value;if(tel.trim().length==0&&email.length==0){alert('�����Ϊ��');return;}
if(comName.length>=50){alert('��˾���Ʋ��ܳ���50���ַ�');return;}
if(tel.length>20){alert('�绰���ܳ���20���ַ�');return;}
if(name.length>10){alert('�������ܳ���5���ַ�');return;}
if(email.length>20){alert('���䲻�ܳ���20���ַ�');return;}
if(email.indexOf("@")==-1||email.indexOf(".")==-1||email.indexOf("@")==0||email.indexOf(".")==0||email.indexOf(".")==email.length- 1||email.indexOf("@")==email.length- 1){alert('������Ϣ����');return;}
if(mesInfo.length>300){alert('���ݲ��ܳ���300���ַ�');return;}
if(code.length>6){alert('��֤�벻�ܳ���6���ַ�');return;}}
function reset(){document.getElementById("comName").value="";document.getElementById("tel").value="";document.getElementById("name").value="";document.getElementById("email").value="";document.getElementById("mesInfo").value="";}