function DisplayMen()
{
  let x= document.getElementsByTagName("body")[0];
  x.style.backgroundImage= "url('All-White-Widescreen-Wallpaper.jpg')";
  let y= document.getElementById("item");
  if (y.style.display === "none")
  {
    y.style.display = "block";
  }
  let z=document.getElementById("forwomen");
  if (z.style.display === "block")
  {
    z.style.display = "none";
  }
  // let y= document.createElement("img");
  // let z=document.createElement("img");
  // y.id="img0";
  // z.id="img1";
  // y.src="11821006.jpg";
  // z.src="st53466a_4ac9e36f-30ba-4d8a-8191-b51602cefb92_1024x.jpg";
  // x.appendChild(y);
  // x.appendChild(z);
  // let myform = document.createElement("form");
  // let input = document.createElement("input");
  // let input1 = document.createElement("input");
  // myform.setAttribute('method',"post");
  // myform.setAttribute('action',"customerBackend.php");
  // input.id="input0";
  // inpu1.id="input1";
  // input.name="user";
  // input.name="user1";
  // input.type="text";
  // input.type="text";
  // myform.appendChild(input);
  // myform.appendChild(input1);
  // x.appendChild(myform);
}

function DisplayWomen()
{
  let x= document.getElementsByTagName("body")[0];
  x.style.backgroundImage= "url('All-White-Widescreen-Wallpaper.jpg')";
  let y= document.getElementById("item");
  if (y.style.display === "block")
  {
    y.style.display = "none";
  }
  let z=document.getElementById("forwomen");
  if (z.style.display === "none")
  {
    z.style.display = "block";
  }
}

function DisplayHome()
{
  let x= document.getElementsByTagName("body")[0];
  x.style.backgroundImage= "url('doc-martens-fashion-model-wallpapers_42432_1920x1080.jpg')";
  let y= document.getElementById("item");
  if (y.style.display === "block")
  {
    y.style.display = "none";
  }
  let z=document.getElementById("forwomen");
  if (z.style.display === "block")
  {
    z.style.display = "none";
  }
  // let y=document.getElementById("img0");
  // let z=document.getElementById("img1");
  //    if (y != null)
  //    {
  //         y.parentNode.removeChild(y);
  //    }
  //    if (z != null)
  //    {
  //         z.parentNode.removeChild(z);
  //    }
}

function validateEmail(email)
{
    let re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function myFunction()
{
  let username=document.getElementById("username").value;
  let password=document.getElementById("password").value;
  let item1=document.getElementById("shirt").value;
  let item2=document.getElementById("shoes").value;
  let item3=document.getElementById("glasses").value;
  let item4=document.getElementById("t_shirt").value;
  let ship1=document.getElementById("ship1").checked;
  let ship2=document.getElementById("ship2").checked;
  let ship3=document.getElementById("ship3").checked;
  let myitem=[];
  myitem.push(item1);
  myitem.push(item2);
  myitem.push(item3);
  myitem.push(item4);

  // if(username.lastIndexOf("@domain.com")==-1)
  // {
  //   alert("Invalid username");
  //   return false;
  // }

  if(!validateEmail(username))
  {
        alert("Username has to be an email address");
        return false;
  }
  
  if(password.length<8)
  {
       alert("Password has to be at least 8 characters long!");
       return false;
  }
  for(let element of myitem)
  {
    if(Number(element)<0 || element=="" || isNaN(element))
    {
      alert("Invalid quantity/quantities!");
      return false;
    }
  }
  if(!ship1 && !ship2 && !ship3)
  {
    alert("Please select a shipping method!");
    return false;
  }

  return true;
}
