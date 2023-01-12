
// EXAMINE THE DOCUMENT OBJECT //

// console.log(document);
// console.log(document.URL);
// console.log(document.title);
// document.title =  'Asish';
// console.log(document.title);
// console.log(document.doctype);
//  console.log(document.head);
// console.log(document.body);
// console.log(document.all);
// console.log(document.all[12]);
// document.all[12].textContent = 'Hello vit';
// --------------------------------------------------
// include links and images to see the output
// console.log(document.links);
// console.log(document.images);
// ---------------------------------------
// GETELEMENTBYID //

// console.log(document.getElementById('items'));


// let v = document.getElementById('asish');

// console.log(v.innerText);//
// console.log(v.innerHTML);// 
  // x.textContent = 'NOTHING';
// v.innerText = '<h1>Goodbye vit</h1>';
// console.log(header.innerText);
// v.innerHTML = '<h1>VIT-IS GOOD</h1>';
// v.style.border = '3px solid  pink';
// v.style.color='red';

//---------------------------------------------
// GETELEMENTSBYCLASSNAME //
//  let items = document.getElementsByClassName('list');
//  console.log(items);

  // console.log(items[1]);
// items[3].textContent = 'VIT_AMARAVATI';
// items[3].style.fontWeight = 'bold';
// items[0].style.backgroundColor = 'yellow';

// // Gives error
//  items.style.backgroundColor = 'red';

// for(let i = 0; i < items.length; i++){
//  items[i].style.backgroundColor = 'lightgreen';
//   }

// for(a of items)
// {
//  a.style.backgroundColor = 'red';
// }

  //change to for of?
//-----------------------------------------------
// GETELEMENTSBYTAGNAME //
// let l = document.getElementsByTagName('li');
//  console.log(l);
// console.log(li[1]);
// l[1].textContent = 'dfhsfghfdghjdghjdghjdghjdgfhjghj'
// li[1].style.fontWeight = 'bold';
// l[1].style.backgroundColor = 'cyan';

// // Gives error
// items.style.backgroundColor = '#f4f4f4';

// for(let i = 0; i < l.length; i++){
//   l[i].style.backgroundColor = 'blueviolet';
//  }




//----------------------------------------------

// QUERYSELECTOR //
//  let header = document.querySelector('#head');
//  header.style.border = 'solid 4px red';

// let input = document.querySelector('input');
// input.value = 'Hello VIT'

// let s = document.querySelector('input[type="submit"]');
// s.value="INSERT"

// let item = document.querySelector('.list');
// item.style.color = 'red';

//  let lastItem = document.querySelector('.list:last-child');
//  lastItem.style.color = 'blue';

//  let secondItem = document.querySelector('.list:nth-child(2)');

// secondItem.style.color = 'coral';

//-----------------------------------------
// QUERYSELECTORALL //
//  let titles = document.querySelectorAll('.list');

//  console.log(titles);
//  titles[0].textContent = 'Hello';

//  let odd = document.querySelectorAll('li:nth-child(odd)');

//  let even= document.querySelectorAll('li:nth-child(even)');

//  for(let i = 0; i < odd.length; i++){
//    odd[i].style.backgroundColor = 'green';
//    even[i].style.backgroundColor = 'red';
//  }

//--------------------------------------------

// TRAVERSING THE DOM //
//  let itemList = document.querySelector('#vit');
//  itemList.style.color="red"

 // parentNode //
// console.log(itemList.parentNode);
// itemList.parentNode.style.backgroundColor = 'lightpink';
// console.log(itemList.parentNode);

//at the end =====

// childNodes
// 
// console.log(itemList.children);


// console.log(itemList.children[1]);

// itemList.children[1].style.backgroundColor = 'yellow';

// // FirstChild
// console.log(itemList.firstChild);
// // firstElementChild
// console.log(itemList.firstElementChild);
// itemList.firstElementChild.style.backgroundColor = 'red';
// itemList.firstElementChild.textContent = 'Hello 2';


// lastChild
// console.log(itemList.lastChild);
// lastElementChild
// console.log(itemList.lastElementChild);
// itemList.lastElementChild.textContent = 'Hello 4';

// let itemList = document.querySelector('#vit');
// nextSibling
// console.log(itemList.nextSibling);
// // nextElementSibling
// console.log(itemList.nextElementSibling);
// itemList.nextElementSibling.style.color = 'red';


// previousElementSibling
// console.log(itemList.previousElementSibling);
// itemList.previousElementSibling.style.color = 'blue';


// createElement

// // Create a div
// let n = document.createElement('li');
// n.innerText="Item 5"
// // Add class
//  n.className = 'list';

// let o = document.getElementById("vit")
// o.appendChild(n)

// // Add id
//  n.id = 'asishid';

// function fun()
// {
//   let v = document.querySelector('#box');
//   let l = document.querySelector('#sel');
//   let n = document.createElement('option');
//   n.innerHTML = v.value;
//   l.appendChild(n);
// }

// function add()
// {
//   let n = document.createElement('li');
//   let t = document.getElementById("box")

//   if(t.value != "")
//   {
//   n.innerText= t.value
//   let o = document.getElementById("vit")
//   o.appendChild(n)
//   }
//  else{
//     err.style.display="inline-block"
//  }

// }

// let button = document.getElementById('btn');


// button.addEventListener('dblclick', addtext);


 function addtext()
 {
    let present = false
    let n = document.createElement('li');
    let i = document.getElementById("box")

    if (i.value!="")
    {
      let o= document.getElementById("vit")
      
      for (j=0;j<o.children.length;j++)
      {
        if(i.value==o.children[j].innerText)

        {
            present = true
            break
        }
      }
      if(!present)
      {
        n.innerText= i.value
          o.appendChild(n)
      }
      else{
        err.style.display="inline-block"
        err.innerText="The item is already present in the list"
        box.value=""
      }
        
    }
    else{
      err.style.display="inline-block"
    }
 }



// let l = document.querySelector('#vit')

// l.appendChild(n);


// // Add attr
// newDiv.setAttribute('title', 'Hello Div');


// // Create text node
//  let newDivText = document.createTextNode('i m from vit');

// // Add text to div
//  newDiv.appendChild(newDivText);

// console.log(newDiv)









// -------------------------------------------
// EVENT HANDLING

// let b= document.getElementById('button');

// b.addEventListener('click', fun);

//-------------- function start ---------------

//  function fun(e){
  //  console.log('Button clicked');
// document.getElementById('asish').textContent = 'Changed';
// document.querySelector('#asish').style.backgroundColor = '#ff2ff9';

// console.log(e);

// console.log(e.target);
// console.log(e.target.id);

// console.log(e.target.className); // null as there is no class name for the button

// let output = document.getElementById('output');
// output.innerHTML = '<h3>'+e.target.id+'</h3>';

// console.log(e.type);

//  console.log(e.clientX); // x position
// console.log(e.clientY);  // y position

// console.log(e.offsetX);
//   console.log(e.offsetY);

// console.log(e.altKey);
//   console.log(e.ctrlKey);
//   console.log(e.shiftKey);
// }

//-------------- function end ---------------

// let button = document.getElementById('button');
// let box = document.getElementById('box');

// button.addEventListener('click', runEvent);
// button.addEventListener('dblclick', runEvent);
// button.addEventListener('mousedown', runEvent);
// button.addEventListener('mouseup', runEvent);

// box.addEventListener('mouseenter', runEvent);
// box.addEventListener('mouseleave', runEvent);

// box.addEventListener('mouseover', runEvent);
//box.addEventListener('mouseout', runEvent);

//box.addEventListener('mousemove', runEvent);

// let itemInput = document.querySelector('input[type="text"]');
// let select = document.querySelector('select');

// itemInput.addEventListener('keydown', runEvent);
// itemInput.addEventListener('keyup', runEvent);
// itemInput.addEventListener('keypress', runEvent);

// itemInput.addEventListener('focus', runEvent);
//  itemInput.addEventListener('blur', runEvent);

//  itemInput.addEventListener('cut', runEvent);
// itemInput.addEventListener('paste', runEvent);

// itemInput.addEventListener('input', runEvent);

//  select.addEventListener('change', runEvent);
 


// function runEvent(e) {

  // console.log('mouse entered')
  // console.log(e.keyCode)
  //  console.log('EVENT TYPE: ' + e.type);
  // console.log(e.target.value);
  // output.innerHTML = '<h3>MouseX: '+e.offsetX+' </h3><h3>MouseY: '+e.offsetY+'</h3>';
  // document.body.style.backgroundColor = "rgb("+e.clientX+","+e.clientY+", 50)";
  // document.body.style.backgroundColor ='lightgreen'
// }



// parentElement//
// console.log(itemList.parentElement);
// itemList.parentElement.style.backgroundColor = 'lightyellow';
// console.log(itemList.parentElement.parentElement.parentElement);

// setInterval(()=> {
//   console.log("hello i am here")
//   console.log('------')
// }
// ,1000)

// setTimeout(()=> {
//   console.log("only once")
//   console.log('------')
// }
// ,2000)